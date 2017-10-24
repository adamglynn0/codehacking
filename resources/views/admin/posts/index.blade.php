@extends('layouts.admin')


@section('content')


    <h1>Posts Admin</h1>

        <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>User</th>
                        <th>Body</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>

            @if($posts)

                @foreach($posts as $post)

                <tbody>
                    <tr>
                        <td class="success">{{$post->title}}</td>
                        <td class="success">{{$post->category->name}}</td>
                        <td class="success">{{$post->user->name}}</td>
                        <td class="success">{{$post->body}}</td>
                        <td class="success"><img height="50" width="60" src="{{$post->photo ? $post->photo->file :'/images/standard_image.jpg'}}" alt=""></td>
                        <td class="success">{{$post->created_at->diffForHumans()}}</td>
                        <td class="success">{{$post->updated_at->diffForHumans()}}</td>
                    </tr>
                </tbody>


                @endforeach
            @endif
        </table>



    @endsection
