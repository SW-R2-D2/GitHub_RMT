@extends('layouts.app')

@section('content')
<center>
    <h2 style="margin-bottom: 20px"> USER TABLE </h2>
</center>
<table class="table table-borderless">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Avatar</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td><img src="/avatars/{{$user->avatar}}" style="width:80px;margin-top: 10px;"></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<style type="text/css">
    .table thead th {
        padding: 10px;
        font-weight: 500;
        font-size: 16px;
        line-height: 20px;
        text-align: left;
        border-bottom: 2px solid #808080;
        border-top: 2px solid #808080;
    }

    .table th {
        border-bottom: 2px solid #808080;
    }

    .table td {
        border-bottom: 2px solid #808080;
    }
</style>
@endsection