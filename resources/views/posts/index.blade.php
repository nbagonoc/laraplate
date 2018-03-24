@extends('layouts.app')

@section('content')
<div class="space-md background-bright">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog">
                    @if(count($posts)>=1)
                    @foreach($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="/storage/featured_images/{{$post->featured_image}}" alt="{{$post->title}}" class="img-responsive">
                                </div>
                                <div class="col-sm-8">
                                    <h3 class="text-capitalize"><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
                                    <span>{{$post->created_at}} | {{$post->user->name}}</span>
                                    {!! str_limit($post->body, $limit = 100, $end = '...') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{$posts->links()}}
                    @else
                        <p class="text-center">no posts found</p>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar" data-offset-smart-dynamic>
                    <ul class="list-group">
                        @if(count($posts)>=1)
                            @foreach($posts as $post)
                                <li class="list-group-item">
                                    <a href="/post/{{$post->id}}">{{$post->title}}</a>
                                </li>
                            @endforeach
                    </ul>
                    @else
                        <p class="text-center">no posts found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection