@extends('layouts.app')

@section('content')
<div class="space-md background-bright">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 hidden-xs">
                
            </div>
            <div class="col-sm-8">
                    <img src="/storage/featured_images/{{$post->featured_image}}" alt="{{$post->title}}" class="img-responsive center-block">
                    <h1 class="text-center text-uppercase">{{$post->title}}</h1>
                    <p class="text-center">Published on {{$post->created_at}}</p>
                    <p class="text-center">{!!$post->body!!}</p>
                    <!-- Authentication Links -->
                    @if (!Auth::guest())
                        @if (Auth::user() -> id == $post->user_id)
                            <hr>
                            <a href="{{ route('post.edit',['id'=>$post->id]) }}" class="btn btn-default">Edit</a>
                            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                            {!!Form::close()!!}
                        @endif
                    @endif
            </div>
            <div class="col-sm-2 hidden-xs">
    
            </div>
        </div>
    </div>
</div>
@endsection