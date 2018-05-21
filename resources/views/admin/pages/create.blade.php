@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Создание страницы @endslot
    @slot('parent') Главная @endslot
    @slot('active') Страницы @endslot
  @endcomponent

<hr />

{{-- форма для создания страницы --}}
<form class="form-horizontal" action="{{route('admin.page.store')}}" method="post">
  {{ csrf_field() }}

  {{-- Form include --}}
  @include('admin.pages.partials.form')
</form>

</div>

@endsection
