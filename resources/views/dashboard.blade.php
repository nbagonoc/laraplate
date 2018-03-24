@extends('layouts.app')

@section('content')
<div class="space-md background-bright">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('inc.sidebar')
            </div>
            <div class="col-md-8">
                @include('inc.messages')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Dashboard
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(count($posts) >= 1)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th class="text-right">View</th>                                        
                                        <th class="text-right">Edit</th>
                                        <th class="text-right">Delete</th>
                                    </tr>
                                </thead>
                                @foreach($posts as $post)
                                <tr>
                                    <th>
                                        <a href="{{ route('post.show',['id'=>$post->id]) }}" class="text-capitalize">{{$post->title}}</a>
                                    </th>
                                    <th class="text-right">
                                            <a href="{{ route('post.show',['id'=>$post->id]) }}" class="btn btn-primary btn-xs">View</a>
                                    </th>
                                    <th class="text-right">
                                        <a href="{{ route('post.edit',['id'=>$post->id]) }}" class="btn btn-default btn-xs">Edit</a>
                                    </th>
                                    <th>
                                        {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class'=>'btn btn-danger btn-xs'])}}
                                        {!!Form::close()!!}
                                    </th>
                                </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You dont have any post.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
