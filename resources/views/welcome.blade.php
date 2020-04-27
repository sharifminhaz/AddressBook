@extends('layouts.app')

@section('content')
    <div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Email Address</th>
                <th scope="col" ><a href="{{ url('/AddNew') }}">
                        <div class="pl-3 pt-1">Add New</div>
                    </a></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach($posts as $contacts)
                    <tr>
                        <td>{{$contacts->id}}</td>
                        <td>{{$contacts->First_name}}</td>
                        <td>{{$contacts->Last_name}}</td>
                        <td>{{$contacts->BirthDate}}</td>
                        <th scope="col">{{$contacts->email}}</th>
                        <th class="flex-center" scope="col"><a href="{{ url('/edit') }}" class="btn btn-sm btn-info">Edit</a></th>
                        <th class="flex-center" scope="col"><a href="{{ url('/delete'.$contacts->id) }}" class="btn btn-sm btn-danger">Delete </a></th>
                        <th scope="col">{{$contacts->Address}}</th>
                        <th scope="col">{{$contacts->phone}}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
