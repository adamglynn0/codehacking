@extends('layouts.admin')


@section('content')

    <h1>Users</h1>


    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name </th>
            <th>Image</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Date Created</th>
            <th>Date Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
            <td><img height="50" width="60" src="{{$user->photo ?  $user->photo->file : '/images/standard_image.jpg'}}" alt=""></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>

        </tbody>
        @endforeach

        @endif
    </table>

    @endsection