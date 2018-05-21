@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Редактирование страницы @endslot
    @slot('parent') Главная @endslot
    @slot('active') Страницы @endslot
  @endcomponent

  <hr />

  {{-- форма для редактирования страницы --}}
  <form class="form-horizontal" action="{{route('admin.page.update', $page)}}" method="post">
    {{ method_field('put')}}
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.pages.partials.form')

    <input type="hidden" name="modified_by" value="{{Auth::id()}}">
  </form>

</div>

@endsection
