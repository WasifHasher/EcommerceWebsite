@extends('master')
@section('contant')




    <div class="container mt-5" style="height:600px;">
        <table class="table table-striped">
            
            <tbody>
                <tr>
                    <td>Price</td>
                    <td>{{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0 PKR</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>400 PKR</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>{{$total+400}}</td>
                </tr>
            </tbody>
        </table>


        <form action="/orderplace" method="POST">
            @csrf
            <div class="mb-3">
             
              <textarea name="address" id="" cols="80" rows="5" placeholder="Enter your Address" class="ps-2" ></textarea>
             
              
            </div>
            <div class="mb-1">

                <label for="" class="fs-3">Payment</label>
                <hr>
                <p><input type="radio" name="payment" ><span class="ps-2">Payment</span></p>
                <p><input type="radio" name="payment" ><span class="ps-2">EMI Payment</span></p>
                <p><input type="radio" name="payment" ><span class="ps-2">Payment On Delivery</span></p>
              
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>


    </div>
 




@endsection