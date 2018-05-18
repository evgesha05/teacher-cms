@extends('layouts.app')

@section('title', $article->meta_title)
@section('meta_keyword', $article->meta_keyword)
@section('meta_description', $article->meta_description)

@section('content')
  <div class="col-sm-8">

    <h1>{{$article->title}}</h1>
    <p>Опубликовано {!!$article->created_at!!}</p>

    @if ($article->image_show)
      <p><img class="img-responsive" src="{{$article->image}}" alt=""></p>
    @endif

    <p>{!!$article->description!!}</p>

  </div>

  @include('layouts.right_column')

@endsection
