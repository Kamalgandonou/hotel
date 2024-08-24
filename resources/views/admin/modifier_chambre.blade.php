<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    @include('admin.css')

    <style type="text/css">
        label{
            display: inline-block;
            width: 200px
        }

        .dev_deg{
            padding-top: 30px;
        }

        .div_center{
            text-align: center;
            padding-top: 40px
        }
    </style>
</head>

<body>
    @include('admin.header')
    <!-- Sidebar Navigation-->
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div  class="div_center">

                    <h1 style="font-size: 30px; font-weigh:bold;">Modification des chambres </h1>

                    <form action="{{url('changer_chambre',$data->NoChambre)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_deg">
                            <label for="">Chambre Numero </label>
                            <input type="number" name="NoChambre" value="{{ $data->NoChambre }}">
                        </div>
                        <div class="div_deg">
                            <label for="">Description</label>
                            <textarea name="Cacteristiqueschambre">{{ $data->Cacteristiqueschambre }}</textarea>
                        </div>
                        <div class="div_deg">
                            <label>Statut de chambre</label>
                            <select name="Statutchambre" >
                                <option selected value="{{ $data->Statutchambre }}">{{ $data->Statutchambre }}</option>
                                <option selected value="1">Oui</option>
                                <option value="0">Non</option>

                            </select>
                        </div>
                        <div class="div_deg">

                            <label>Typechambre</label>
                            <select name="Typechambre" >
                                <option selected value="{{ $data->Typechambre }}">{{ $data->Typechambre }}</option>
                                <option value="regulaire">Regulaire</option>
                                <option value="premium">Premium</option>
                                <option value="luxe">Luxe</option>

                            </select>
                        </div class="div_deg">

                        <div class="div_deg">
                            <label >L'Image actuel</label>
                            <img style="margin: auto" width="100" src="/chambre/{{ $data->image }}">
                        </div>
                        <div class="div_deg">
                            <label >Modifier l'Image</label>
                            <input type="file" name="image">
                        </div>

                        <div class="div_deg">
                            <input class="btn btn-primary" type="submit" value="Modifier la chambre">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.footer')
</body>

</html>
