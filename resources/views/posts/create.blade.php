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
                        Create
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{Form::label('title', 'Title')}}
                                {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Enter the Title'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('body', 'Body')}}
                                {{Form::textarea('body', '', ['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Enter the content'])}}
                            </div>
                            <div class="form-group">
                                {{Form::file('featured_image')}}
                            </div>
                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection