@extends('layouts.app')

@section('title', 'Результаты поиска: ' . $search)

@section('content')

  <div class="col-sm-8">

    <h3><strong>Результаты поиска:</strong> {{$search}}</h3>
    <hr>
    @forelse ($articles as $article)
      {{-- Запись блога --}}
      <h2><strong>{{$article->title}}</strong></h2>
      <p>Опубликовано {{ $article->created_at }}</p>

      @if ($article->image_show)
        <img class="img-responsive" src="{{$article->image}}" alt="{{$article->title}}">
      @endif

      <p>{!!$article->description_short!!}</p>
      <a class="btn btn-primary" href="{{route('article', $article->slug)}}">
  	     Читать дальше <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
      <hr>

    @empty
      <h2 class="text-center">Результатов по данному запросу не найдено</h2>
    @endforelse

    {{$articles->links()}}
  </div>

  {{--Подключение правого столбца--}}
  @include('layouts.right_column')

@endsection
