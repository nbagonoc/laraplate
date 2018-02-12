@extends('layouts.app')

@section('content')
<h1 class="text-center text-uppercase">blog</h1>
<p class="text-center">this is the blog page</p>
@if(count($posts)>=1)
    @foreach($posts as $post)
    <div class="blog-list-element">
        <hr>
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <p>Published on {{$post->created_at}}</p>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>
    @endforeach
    {{$posts->links()}}
@else
    <p class="text-center">no posts found</p>
@endif
@endsection