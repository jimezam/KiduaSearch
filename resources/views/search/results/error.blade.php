@extends('search.index')

@section('results')

<br>

<div class="panel panel-danger">
  <div class="panel-heading">Hubo un problema ...</div>
  <div class="panel-body">
    Error: {{ $data['type'] }}
  </div>
</div>

@endsection
