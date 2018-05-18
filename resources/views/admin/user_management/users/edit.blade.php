@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Редактирование пользователя @endslot
    @slot('parent') Главная @endslot
    @slot('active') Пользователи @endslot
  @endcomponent

  <hr />
  {{-- форма для редактирования пользователя --}}
  <form class="form-horizontal" action="{{route('admin.user_management.user.update', $user)}}" method="post">
    {{ method_field('put')}}
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.user_management.users.partials.form')

  </form>
</div>

@endsection
