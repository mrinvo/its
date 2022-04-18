<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Places :</h2>
            

            {{-- <form action="{{ url('search') }}" method="GET" class="form-inline" style="float: right; padding:10px;">
            
              @csrf
              <input type="search" name="search" placeholder="search" class="form-control">
              <input type="submit" class="btn btn-success">
            
            
            </form> --}}
          </div>
        </div>
        

        @foreach ($data as $product )

        
          
       
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="{{ $product->img }}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>{{ $product->name }}</h4></a>
              <h6>{{ $product->type }}</h6>
              <p>{{ App\Models\Country::getContryNameById($product->country_id) }} , {{ App\Models\City::getCityNameById($product->city_id) }}</p>
              <form action="placeDetails/{{ $product->id }}">
                <input type="submit" value="Details" class="btn btn-primary">
              
              </form>

            </div>
          </div>
        </div>
        @endforeach

        @if (method_exists($data,'links'));
          

        <div class="d-flex justify-content-center">

          {!! $data->links() !!}

        </div>
        @endif
      </div>
    </div>
  </div>