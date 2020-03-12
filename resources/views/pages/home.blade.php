@extends('layouts.main')

@section('content')
    <div class="jumbotron">
        <div class="jumbo-content">
        <h1>Intergrating MoMoPay</h1>
        <p>Simple intergration of MTN momo payment method in laravel app</p>
        <button class="btn btn-primary">Get Started</button>
        </div>
    </div>
    <div class="container">
                <div class="row my-auto">
                    <div class="col-md-4">
                        <img src="{{asset('img/secure.svg')}}" alt="" width="170px" height="200px">
                        <h3>Secured payment</h3>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/cart.svg')}}" alt="" width="170px" height="200px" >
                        <h3 style="margin-left:20px;">Shopping</h3>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/contact.svg')}}" alt="" width="170px" height="200px">
                        <h3>Customer Service</h3>
                    </div>
                </div>
            <br>
        </div>
            <h4 class="badge badge-primary my-badge" style="font-size:20px;">Popular Products</h4>
            <hr id="line-home">
    
@endsection