
<!DOCTYPE html>
<html lang="en">
  <head>
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
            padding:10px;
        }

    </style>

  </head>
  <body>

@include('admin.sidebar')
      <!-- partial -->
@include('admin.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
                <div class="container" align="center">
                <h1 class="title">Add new place</h1>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-bs-dismiss="alert">x</button>
                        {{ session()->get('message') }}

                    </div>
                    
                @endif
                <form action="{{ url('UploadPlace') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div style="padding: 15px;">
                    <label for="product_title">place name</label>
                    <input class="inp" type="text" name="place_name" id="" required placeholder="write place naem">
                </div>    
                <div style="padding: 15px;">
                    <label for="place_type">place Type</label>
                    <select name="place_type" id="place_type" class="inp">
                        <option  value="mall">mall</option>
                        <option  value="hospital">hospital</option>
                        <option  value="restaurant">restaurant</option>
                        <option  value="cafe">cafe</option>
                        <option  value="park">park</option>
                        <option  value="beauty center">beauty center</option>
                        <option  value="library">library</option>
                        
                    </select>
                </div>
                <div style="padding: 15px;">
                    <label for="country">country</label>
                    <select name="country" id="country" class="inp">
                        @foreach ($all_stored_countries as $country)
                        <option  value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                        
                    </select>
                </div>
                <div style="padding: 15px;">
                    <label for="city">city</label>
                    <select name="city" id="city" class="inp">
                        @foreach ($all_stored_cities as $city )
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                        
                    </select>
                </div>
                <div style="padding: 15px;">
                    <label for="place_map">place map</label>
                    <input class="inp" type="text" name="place_map" id="" required placeholder="paste the place map url">
                </div>

                <div style="padding: 15px;">
                    <label for="img">place img</label>
                    <input class="inp" type="text" name="img" id="" required placeholder="paste the place img url">
                </div>




                <div style="padding: 15px;">
                    
                    <input type="submit" class="btn btn-success" value="ADD" name="question_submit" id="" required >
                </div>
                </form>
            
            </div>

        </div>

          <!-- partial -->
@include('admin.script')
  </body>
</html>