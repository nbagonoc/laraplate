@extends('layouts.app')

@section('content')
<h1 class="text-center text-uppercase">blog</h1>
<p class="text-center">this is the blog page</p>
@if(count($posts)>=1)
    @foreach($posts as $post)
    <div class="blog-list-element">
        <hr>
        <h3 class="text-capitalize"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <p class="text-muted">{{$post->created_at}} | {{$post->user->name}}</p>
    </div>
    @endforeach
    {{$posts->links()}}
@else
    <p class="text-center">no posts found</p>
@endif
@endsection