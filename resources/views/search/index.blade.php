@extends('layouts.app')

@section('content')

<div class="container">

  <div class="form-group row">

    <form class="form-inline" method="get" action="{{ url('/search') }}">

      <label class="sr-only" for="keywords">Palabras clave</label>
      <input type="search" class="form-control form-control-lg"
             value="{{ $keywords or "" }}"
             name="keywords" placeholder="Nombre de enfermedad o planta">

      <label class="sr-only" for="type">Tipo</label>
      <select name="type" class="form-control form-control-lg">
        <option value="d" {{ (isset($type) && $type == 'd')?'selected':''}}>Enfermedades</option>
        <option value="p" {{ (isset($type) && $type == 'p')?'selected':''}}>Plantas</option>
      </select>

      <button type="submit" class="form-control-lg btn btn-primary">Buscar</button>

    </form>

  </div>

  <div id="results">
    @yield('results')
  </div>

</div>

@endsection
