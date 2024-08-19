@extends('master')
@section('contant')

    <div class="custom-product border border-danger" id="container">
        
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner border border-success">
          @foreach ($products as $item)

          <div class="carousel-item {{ $item['id']==1?'active':''}}">
           <img src="{{asset($item->gallery)}}" height="450px" class="d-block w-100 " alt="..."> 
              <div class="carousel-caption d-none d-md-block text-white">
                <h5 class="fs-3">{{ $item['name']}}</h5>
                <p class="fs-4">{{ $item['description']}}</p>
              </div>
          </div>

    
          @endforeach
         
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
    </div>



 <div class="container">
    <h2 class="mt-3">Trending Items</h2>
      <div class="row">
        @foreach ($products as $item)
          <div class="col-3">
           
            <a href="detail/{{$item['id']}}">

              <img src="{{ asset($item->gallery)}}" height="300px" class="d-block w-100 mt-3" alt="..."> 
              <div class="py-3">
                  <div class="d-flex ">
                        <h5>{{ $item['name']}}</h5> 
                        <span style="margin-left:150px">{{ $item['category']}}</span>
                  </div> 
                      <p>{{ $item['price']}}</p>
              </div>

            </a>
 
          </div>
          @endforeach
      </div>
    </div>
    
 




@endsection