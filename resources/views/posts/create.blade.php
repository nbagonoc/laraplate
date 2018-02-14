@extends('layouts.app')

@section('content')
<h1 class="text-center text-uppercase">create</h1>
<p class="text-center">create a new article</p>
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
@endsection