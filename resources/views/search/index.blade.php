@extends('layouts.app')

@section('content')

<div class="container">

  <div class="form-group row">

    <form method="get" action="{{ url('/search') }}">

      <div class="col-xs-9">
        <label class="sr-only" for="keywords">Palabras clave</label>
        <input type="search" class="form-control"
               value="{{ $keywords or "" }}"
               name="keywords" placeholder="Nombre de enfermedad o planta">
      </div>

      <div class="col-xs-2">
        <label class="sr-only" for="type">Tipo</label>
        <select name="type" class="form-control">
          <option value="d" {{ (isset($type) && $type == 'd')?'selected':''}}>Enfermedades</option>
          <option value="p" {{ (isset($type) && $type == 'p')?'selected':''}}>Plantas</option>
        </select>
      </div>

      <div class="col-xs-1">
        <button type="submit" class="form-control-lg btn btn-primary">Buscar</button>
      </div>

    </form>

  </div>

  <div id="results">
    @yield('results')
  </div>

</div>

@endsection
