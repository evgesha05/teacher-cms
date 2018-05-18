{{-- Blog Sidebar Widgets Column --}}

<div class="col-sm-4">

  {{-- Блок поиска --}}
  <div class="panel panel-default">
    <div class="panel-body">
      <form action="{{ route('search') }}" method="get" >
        <div class="input-group">
          <input type="search" class="form-control" name="search" placeholder="Поиск" value=" {{ isset($search) ? $search : '' }}">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
        </div>
      </form>
    </div>
  </div>

  {{-- Блок виджета --}}
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4><strong>Side Widget Well</strong></h4>
    </div>

    <div class="panel-body">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>
  </div>

</div>
