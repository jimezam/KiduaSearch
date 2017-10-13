@extends('search.index')

@section('results')

  @foreach($data as $plant)

  <div class="panel panel-default">
    <div class="panel-heading" style="background-color: #f5f5f5;">
      <div class="pull-left">
        <h3 class="panel-title text-capitalize" style="font-size: 20px">{{ $plant->name }}</h3>
        <em class="text-capitalize">{{ $plant->scientific_name }}</em> <br>
      </div>
      <div class="panel-title pull-right">
        @if(strlen(trim($plant->url)) > 0)
          <a href="{{ $plant->url }}" target="_blank"><button type="button" class="btn btn-warning">Ver</button></a>
        @endif        
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="panel-body">
      <h4>Enfermedades relacionadas</h1>
      <ul class="list-group">
        @foreach($plant->treatments as $treatment)

          @foreach($treatment->diseases as $disease)

            <li class="list-group-item">
              <a href="{{ route('search', ['type' => 'd', 'keywords' => $disease->id]) }}">
                <span class="text-capitalize">{{ $disease->name }}</span>
              </a>
            </li>

          @endforeach

        @endforeach
      </ul>
    </div>
  </div>

  @endforeach

  {!! $data->render() !!}
  
@endsection
