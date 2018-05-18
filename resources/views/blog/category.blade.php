@extends('layouts.app')

@section('title', $category->title)

@section('content')

  <div class="col-sm-8">
    @forelse ($articles as $article)
      {{-- Запись блога --}}
      <h2><strong>{{$article->title}}</strong></h2>
      <p><i class="fa fa-clock-o"></i>Опубликовано {{ $article->created_at }}</p>

      @if ($article->image_show)
        <img class="img-responsive" src="{{$article->image}}" alt="{{$article->title}}">
      @endif

      <p>{!!$article->description_short!!}</p>
      <a class="btn btn-primary" href="{{route('article', $article->slug)}}">
  	     Читать дальше <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
      <hr>

    @empty
      <h2 class="text-center">Пусто</h2>
    @endforelse

    {{$articles->links()}}
  </div>

  {{--Подключение правого столбца--}}
  @include('layouts.right_column')

@endsection
