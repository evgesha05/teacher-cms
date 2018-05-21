@foreach ($pages as $page_list)

  <option value="{{$page_list->id or ""}}"

      {{-- используется при редактировании страницы --}}
      @isset($page->id)

        {{-- проверка родительской страницы --}}
        @if ($page->parent_id == $page_list->id)
          selected=""
        @endif

        {{-- скрываем текущую страницу из родительских --}}
        @if ($page->id == $page_list->id)
          hidden=""
        @endif

      @endisset

  >
  {!! $delimiter or "" !!}{{$page_list->title or ""}}
  </option>

  {{-- реализация вложенности страниц --}}
  @if (count($page_list->children) > 0)

    @include('admin.pages.partials.pages', [
      'pages' => $page_list->children,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif

@endforeach
