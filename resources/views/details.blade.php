@extends('master')
@section('contant')

    <div class="custom-product border border-danger" id="container">
        
        

            <div class="row justify-content-center">
                <div class="col-5 mt-5" >
                    <img src="{{$details['gallery']}}" style="height:300px" class="w-100">
                </div>
                   
                <div class="col-5 mt-5 align-middle pt-5" id="style">
                    

                    <h3>Name : {{$details['name']}}</h3>
                    <h3>Price : {{$details['price']}}</h3>
                    <h3>Category : {{$details['category']}}</h3>
                    <h3>Descrption : {{$details['description']}}</h3>
                    <br>

                    <div class="d-flex">

                    <form action="/addtoCart" method="POST">
                        
                    @csrf

                        <input type="hidden" name="product_id" value="{{$details['id']}}">

                         <button class="btn btn-primary ms-3">Add to Card</button> 


                    </form>


                   
                        


                            <a href="{{ url('/product')}}" class="btn btn-danger ms-3">Back</a>
                        
                    </div>
               
                </div>

               
            </div>
       

       
            


    </div>


@endsection