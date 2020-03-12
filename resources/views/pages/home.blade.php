@extends('layouts.main')

@section('content')
    <div class="row my-auto">
        <div class="col-md-4">
            <img src="{{asset('img/secure.svg')}}" alt="" width="170px" height="200px">
            <h3>Secured payment</h3>
        </div>
        <div class="col-md-4">
            <img src="{{asset('img/cart.svg')}}" alt="" width="170px" height="200px">
            <h3>Secured payment</h3>
        </div>
        <div class="col-md-4">
            <img src="{{asset('img/contact.svg')}}" alt="" width="170px" height="200px">
            <h3>Secured payment</h3>
        </div>
    </div>
@endsection