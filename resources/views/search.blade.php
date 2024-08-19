@extends('master')
@section('contant')

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