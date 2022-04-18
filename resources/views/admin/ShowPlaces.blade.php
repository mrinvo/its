
<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.css')
    <style>
        .table_row{
            margin-top: 30px;
            float: left;
            margin-left: -100px;
            z-index: 888;


        }
        table tr{
            color: white;
        }

    </style>
  </head>
  <body>

@include('admin.sidebar')
      <!-- partial -->
@include('admin.nav')
        <!-- partial -->
 <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">
    <div class="container" align="center">
        @if (session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-bs-dismiss="alert">x</button>
            {{ session()->get('message') }}

        </div>
        
    @endif
    <div class="table_row">
        <table class="table ">
            <tr>
                <td style="">Name</td>
                <td style="">Type</td>
                <td style="">Country</td>
                <td style="">City</td>
                <td style="">Img</td>
                <td style="">Map</td>
                <td style="">update</td>
                <td style="">delete</td>
            </tr>
            @foreach ($data as $place)
                
           
            <tr style="z-index:999;">
                <td style="">{{ $place->name }}</td>
                <td style="">{{ $place->type }}</td>
                <td style="">{{  App\Models\Country::getContryNameById($place->country_id) }}</td>
                <td style="">{{  App\Models\City::getCityNameById($place->city_id) }}</td>
                <td style=""><img src="{{ $place->img }}" alt=""></td>
                <td style=""> <iframe src="{{ $place->map }}" frameborder="0"></iframe></td>
                <td><a href="{{ url('updatePlaceview',$place->id) }}" class="btn btn-primary">update</a></td>
                <td><a href="{{ url('deletePlace',$place->id) }}" class="btn btn-danger">delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>

    </div>
 </div>    
        <!-- partial -->
@include('admin.script')
  </body>
</html>