
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include('admin.css')

    <style type="text/css">
        .title{
            color: white; 
            padding-top:25px;
             font-size:25px;
        }
        label{
            display: inline-block;
            width: 200px;

        }
        .inp{
            color: black;
            width: 50%;
            padding: 10px;
        }

    </style>>

  </head>
  <body>

@include('admin.sidebar')
      <!-- partial -->
@include('admin.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
                <div class="container" align="center">
                <h1 class="title">update Place</h1>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-bs-dismiss="alert">x</button>
                        {{ session()->get('message') }}

                    </div>




                    
                @endif
                <form action="{{ url('updatePlace',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div style="padding: 15px;">
                    <label for="product_title">place name</label>
                    <input class="inp" type="text" name="place_name" id="" required value="{{ $data->name }}">
                </div>    
                <div style="padding: 15px;">
                    <label for="place_type">place Type</label>
                    <select name="place_type" id="place_type" class="inp">
                        
                        <option  value="mall" {{ $data->type == 'mall' ? 'selected' : '' }}>mall</option>
                        <option  value="hospital" {{ $data->type == 'hospital' ? 'selected' : '' }}>hospital</option>
                        <option  value="restaurant" {{ $data->type == 'restaurant' ? 'selected' : '' }}>restaurant</option>
                        <option  value="cafe" {{ $data->type == 'cafe' ? 'selected' : '' }}>cafe</option>
                        <option  value="park" {{ $data->type == 'park' ? 'selected' : '' }}>park</option>
                        <option  value="beauty center" {{ $data->type == 'beauty center' ? 'selected' : '' }}>beauty center</option>
                        <option  value="library" {{ $data->type == 'library' ? 'selected' : '' }}>library</option>
                        
                    </select>
                </div>
                <div style="padding: 15px;">
                    <label for="country">country</label>
                    <select name="country" id="country" class="inp">
                        
                        @foreach ($countries as $country )
                            <option value="{{ $country->id }}" {{ $country->id == $data->country_id ? 'selected' : '' }}>{{ $country->name }}</option>
                            
                        @endforeach
                        
                    </select>
                </div>
                <div style="padding: 15px;">
                    <label for="country">City</label>
                    <select name="city" id="country" class="inp">
                        @foreach ($cities as $city )
                            <option value="{{ $city->id }}" {{ $city->id == $data->city_id ? 'selected' : '' }}>{{ $city->name }}</option>
                            
                        @endforeach
                        
                    </select>
                </div>
                <div style="padding: 15px;">
                    <label for="place_map">place map</label>
                    <input class="inp" type="text" name="place_map" id="" required value="{{ $data->map }}">
                </div>

                <div style="padding: 15px;">
                    <label for="img">place img</label>
                    <input class="inp" type="text" name="img" id="" required value="{{ $data->img }}">
                </div>




                <div style="padding: 15px;">
                    
                    <input type="submit" class="btn btn-success" value="UPDATE" name="question_submit" id="" required >
                </div>
                </form>
            
            </div>

        </div>

          <!-- partial -->
@include('admin.script')
  </body>
</html>