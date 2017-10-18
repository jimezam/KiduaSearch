@extends('search.index')

@section('results')

  @foreach($data as $disease)

  <?php

  $diseaseName = str_ireplace($keywords, "<mark>".$keywords."</mark>", $disease->name);

  ?>

  <div class="panel panel-default">
    <div class="panel-heading" style="background-color: #f5f5f5;">
        <h3 class="panel-title text-capitalize" style="font-size: 20px">
          {!! $diseaseName !!}
        </h3>
    </div>
    <div class="panel-body">
      <h4>Ver tratamientos</h1>
      <ul class="list-group">
        @foreach($disease->treatments as $treatment)

          <?php

          $plants = [];

          foreach($treatment->plants as $plant)
          {
            array_push($plants, $plant->name);
          }

          $plantList = implode(',', $plants);

          ?>

          <li class="list-group-item">
            <a href="xxx">
              Basado en <span class="text-capitalize">{{ $plantList }}</span>
            </a>
          </li>

        @endforeach
      </ul>

      <h4>Plantas relacionadas</h1>
      <ul class="list-group">
        @foreach($disease->treatments as $treatment)

          @foreach($treatment->plants as $plant)

            <li class="list-group-item">
              <a href="{{ route('search', ['type' => 'p', 'keywords' => $plant->id]) }}">
                <span class="text-capitalize">{{ $plant->name }}</span>
              </a>
            </li>

          @endforeach

        @endforeach
      </ul>
    </div>
  </div>

  @endforeach

  <!-- {!! $data->render() !!} -->
  {!! $data->appends(['keywords' => $keywords, 'type' => $type])->links() !!}

@endsection
