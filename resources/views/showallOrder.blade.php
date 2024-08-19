@extends('master')
@section('contant')

   <div class="container" style="height:500px">
    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Product Id</th>
                    <th>User id</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>payment Method</th>
                    <th>payment status</th>
                    <th>Image</th>
                </tr>
                <tbody>
                    @foreach ($allorder as $item)
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->product_id}}</td>
                                <td>{{ $item->user_id}}</td>
                                <td>{{ $item->address}}</td>
                                <td>{{ $item->status}}</td>
                                <td>{{ $item->payment_method}}</td>
                                <td>{{ $item->payment_status}}</td>
                                <td><img src="{{ $item->gallery}}" style="height:50px;width:80px;"></td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
   </div>




@endsection