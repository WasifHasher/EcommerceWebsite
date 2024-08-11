@extends('master')
@section('contant')

    <div class="container custom-form">
        <div class="row justify-content-center mt-5">

            <div class="col-3 shadow border bordered py-4 rounded h-75 px-3">
                <h2>Login Form</h2>
                <form action="" class="my-4">

                    <div class="form-group mt-3">
                        <input type="text" name="email" class="form-control p-2" placeholder="Enter your Email">                        
                    </div>

                    <div class="form-group mt-4">
                        <input type="password" name="password" class="form-control p-2" placeholder="Enter your password">                        
                    </div>
                    <button class="btn btn-primary mt-3">Login</button>
                </form>
            </div>
        </div>
    </div>

@endsection