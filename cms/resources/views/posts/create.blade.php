@extends('layout.app')

@section('content')

  <h1>Create Post</h1>
  {!! Form::open{['method'=>'Post', 'action'=>'PostsController@store']} !!}

<div class="form-group">
  {{!! Form::label('title', 'Title:') !!}}
  {{!! Form::text('title', null, ['class'=>'form-control']) !!}}
</div>

<div class="form-group">
  {{!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}}
</div>

{{!! Form::close() !!}}


  @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach(errors->all() as $error)
      <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  
@endsection