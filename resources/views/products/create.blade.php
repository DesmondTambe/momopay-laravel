@extends('layouts.main')


@section('content')
    <div class="container">
        <br>
        <h1 style="text-align:center">Create Product</h1>     
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="prodName" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" name="price" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
            <br><br>
        </form>
    </div>
@endsection