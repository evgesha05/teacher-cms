@foreach ($categories as $category_list)

  <option value="{{$category_list->id or ""}}"

      {{-- используется при редактировании категории --}}
      @isset($category->id)

        {{-- проверка родительской категорий --}}
        @if ($category->parent_id == $category_list->id)
          selected=""
        @endif

        {{-- скрываем текущую категорию из родительских --}}
        @if ($category->id == $category_list->id)
          hidden=""
        @endif

      @endisset

  >
  {!! $delimiter or "" !!}{{$category_list->title or ""}}
  </option>

  {{-- реализация вложенности категорий --}}
  @if (count($category_list->children) > 0)

    @include('admin.categories.partials.categories', [
      'categories' => $category_list->children,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif

@endforeach
