@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <form class="form-inline" method="get" action="{{ url('/search') }}">
      <div class="form-group">
        <input type="text" class="form-control" name="keywords" placeholder="Nombre de enfermedad o planta">
        <select name="type" class="form-control">
          <option value="d">Enfermedades</option>
          <option value="p">Plantas</option>
        </select>
        <button type="submit" class="btn btn-default">Buscar</button>
      </div>
    </form>
  </div>
</div>



<!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hola
                </div>
            </div>
        </div>
    </div>
</div>
-->


@endsection
