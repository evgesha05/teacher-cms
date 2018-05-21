@extends('layouts.app')

@section('title', $page->meta_title)
@section('meta_keyword', $page->meta_keyword)
@section('meta_description', $page->meta_description)

@section('content')
  <div class="col-sm-8">

    <h1>{{$page->title}}</h1>

    <p>{!!$page->description!!}</p>

  </div>

  @include('layouts.right_column')

@endsection
