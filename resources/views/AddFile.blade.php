@extends('layouts.app')

@section('content')
    <div class="container"> <h2>Add New Information and submit. </h2></div>
<div class="container">
    <form method="post" action="{{route('posts')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control" name="First_name" aria-describedby="emailHelp" placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Last Name</label>
            <input type="text" class="form-control" name="Last_name" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="BirthDate">BirthDate</label>
            <input type="Date" class="form-control" name="BirthDate" placeholder="dd/mm/yyyy">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="+8801234567890">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>


@endsection
