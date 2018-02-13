@extends('layouts.app')

@section('content')
<h1 class="text-center text-uppercase">{{$post->title}}</h1>
<p class="text-center">Published on {{$post->created_at}}</p>
<p class="text-center">{!!$post->body!!}</p>
<!-- Authentication Links -->
@if (!Auth::guest())
    @if (Auth::user() -> id == $post->user_id)
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
@endif
@endsection