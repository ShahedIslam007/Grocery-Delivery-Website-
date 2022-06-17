<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Customers List</title>
</head>
<body>
    @extends('layouts.app') 
    @section('content')
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th colspan=3>Action</th>
        </tr>
        @foreach($customers as $s)
        <tr>
            <td>{{$s->Name}}</td>
            <td>{{$s->id}}</td>
            <td>{{$s->Phone}}</td>
            <td>{{$s->Email}}</td>
            <td>{{$s->Address}}</td>
            <td><a href="/CustomerEdit/{{$s->id}}">Edit</a></td>
            <td><a href="/CustomerDelete/{{$s->id}}">Delete</a></td>
            <td><a href="/CustomerOrders/{{$s->id}}">Order Details</a></td>
        </tr>
        @endforeach
    </table>
    @endsection  
</body>
</html>