<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')

    <style type="text/css">

        .table_deg
        {
            border: 2px solid white;
            margin: auto;
            width: 80%;
            text-align: center;
            margin-top: 40%;
        }
        .th_deg
        {
            background-color: skyblue;
            padding:15px;
        }
        tr{
             border: 3px solid white;
        }
        td{
            padding: 10px;
        }
    </style>
  </head>

  <body>
      @include('admin.header')
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <table class="table_deg">
                <tr>
                    <th class="th_deg">NoChambre</th>
                    <th class="th_deg">Cacteristiqueschambre</th>
                    <th class="th_deg">Statutchambre</th>
                    <th class="th_deg">image</th>
                    <th class="th_deg">Typechambre</th>
                    <th class="th_deg">supprimer</th>
                    <th class="th_deg">modifier</th>
                </tr>
                @foreach ($data as $data)
                <tr>
                    <td>{{ $data->NoChambre }}</td>
                    <td>{!! Str::limit($data->Cacteristiqueschambre,) !!}</td>
                    <td>{{ $data->Statutchambre }}</td>
                    <td>
                        <img width="100" src="chambre/{{ $data->image }}">
                    </td>
                    <td>{{ $data->Typechambre }}</td>
                    <td>
                        <form action="{{ route('chambre_supprimer', $data->NoChambre) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button  type="submit" onclick="return confirm('Voulez vraiment la supprimer ')">supprimer</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('chambre_modifier', $data->NoChambre) }}" method="GET">
                            @csrf
                            <button  type="submit" class="btn btn-warning">Modifier</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </table>
          </div>
        </div>
    </div>


        @include('admin.footer')
  </body>
</html>
