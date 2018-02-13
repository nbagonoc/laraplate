@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary text-capitalize center-block">add new</a>
                    <h3 class="text-capitalize">Your blog posts</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th class="text-right">Edit</th>
                                    <th class="text-right">Delete</th>
                                </tr>
                            </thead>
                            @foreach($posts as $post)
                            <tr>
                                <th>
                                    <span class="text-capitalize">{{$post->title}}</span><br/>
                                </th>
                                <th class="text-right"><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
                                <th>
                                    {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
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
@endsection
