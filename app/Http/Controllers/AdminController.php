<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Chambre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){
                return view('home.index');
            }

            else if($usertype == 'admin'){
                return view('admin.index');
            }

            else{
                return redirect()->back();
            }
        }
    }

    public function home(){
        return view('home.index');
    }

    public function create_chambre(){
        return view('admin.create_chambre');
    }

    public function ajout_chambre(Request $request) {
        $data = new Chambre();
        $data->NoChambre = $request->NoChambre;
        $data->Cacteristiqueschambre = $request->Cacteristiqueschambre;
        $data->Statutchambre = $request->Statutchambre;
        $data->Typechambre = $request->Typechambre;
        $image=$request->image;

        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('chambre',$imagename);

            $data->image=$imagename;
            $data->image=$imagename;
        }
        $data->save();

        return redirect()->back();
    }

    public function voir_chambre()
    {
        $data = Chambre::all();

        return view ('admin.voir_chambre',compact('data'));
    }

    public function chambre_supprimer($NoChambre)
    {
        $data = Chambre::where('NoChambre', $NoChambre ) ;
        //dd($data);
        $data->delete();
       //Chambre::destroy($NoChambre);

        return redirect()->back();
    }
    public function chambre_modifier($NoChambre)
    {
        $data = Chambre::where('NoChambre', $NoChambre )->firstOrFail() ;
        //dd($data);
        //$data->delete();
       //Chambre::destroy($NoChambre);

        return view('admin.modifier_chambre',compact('data'));
    }

 // Importer la façade Session

    public function changer_chambre(Request $request, $NoChambre)
    {
        $data = Chambre::where('NoChambre', $NoChambre)->firstOrFail();

        $data->NoChambre = $request->NoChambre;
        $data->Cacteristiqueschambre = $request->Cacteristiqueschambre;
        $data->Statutchambre = $request->Statutchambre;
        $data->Typechambre = $request->Typechambre;

        $data->save();

        // Afficher un message de succès en utilisant la session


        return redirect()->route('voir_chambre');
    }

}