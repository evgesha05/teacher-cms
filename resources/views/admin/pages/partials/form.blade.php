<label for="">Статус</label>
<select class="form-control" name="published">
  @if (isset($page->id))
    <option value="0" @if ($page->published == 0) selected="" @endif>Не опубликовано</option>
    <option value="1" @if ($page->published == 1) selected="" @endif>Опубликовано</option>
  @else
    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
  @endif
</select>

<label for="">Заголовок страницы</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок страницы" value="{{$page->title or ""}}" required>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$page->slug or ""}}" readonly="">

<label for="">Родительская страница</label>
<select class="form-control" name="parent_id">
  <option value="0">-- без родительской страницы --</option>
  @include('admin.pages.partials.pages', ['pages' => $pages])
</select>

<hr />

<label for="">Полное описание</label>
<textarea class="form-control" id="description_page" name="description">{{$page->description or ""}}</textarea>

<hr />

<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$page->meta_title or ""}}">

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$page->meta_description or ""}}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="{{$page->meta_keyword or ""}}">

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">
