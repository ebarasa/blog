@extends('layouts.app')

@section('content')

  <a href="/posts" class="btn btn-default"><b>Go Back</b></a>
  <br>
  <div class="row">
    <div class="col-md-12">
        <h1>{{$post->title}}</h1>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <p>{{$post->body}}</p>
    </div>
  <div>
  <br>
  <small>written on {{$post->created_at}}</small>
  <br>
  @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
      <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
      {!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=>'POST','class'=>'pull-right'])!!}
      {{Form::hidden('_method','DELETE')}}
      {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
      {!!Form::close()!!}
    @endif
  @endif

@endsection
