@extends('master')
@section('contant')




    <div class="container mt-5" style="height:600px;">

            
        <div class="row justify-content-center">
            <div class="col-6">
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>name</th>
                        <th>category</th>
                        <th>price</th>
                        <th>Remove</th>
                
                    </tr>
                    <tbody>
                
                      @foreach ($foundData as $item)
                      <tr>
                        <td>{{$item->id}}</td>
                        <td><img src="{{asset($item->gallery)}}" style="height:60px;width:100px"></td>
                        <td> {{$item->name}} </td>
                        <td>{{$item->category}}</td>
                        <td>{{$item->price}}</td>
                        <td>
                            <a href="/delete/{{$item->cart_id}}">Remove</a>
                        </td>
                        
                
                      </tr>
                          
                      @endforeach
                
                
                
                    </tbody>
                </table>
                    
            </div>

          
           
        
        </div>
        
        

        <a href="/ordernow" class="btn btn-success" style="margin-left:980px">Order Now</a>
           

        

    </div>
 




@endsection