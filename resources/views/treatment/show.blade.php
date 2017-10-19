@extends('layouts.app')

@section('content')

<div class="container">

  <div class="panel panel-default">
    <div class="panel-heading" style="background-color: #F5F5F5">
      <h3 class="panel-title text-capitalize">
        Tratamiento #{{ $data->id }}
        {{ (isset($data->name) && strlen(trim($data->name)) > 0) ? ' - '.$data->name.'' : "" }}
      </h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table">
          <tbody>
            <tr style="border-top: 0px">
              <th scope="row">Enfermedades tratadas</th>
              <td class="text-capitalize">
                <?php

                $diseases = [];

                foreach($data->diseases as $disease)
                {
                  array_push($diseases, $disease->name);
                }

                $diseaseList = implode(',', $diseases);

                ?>

                {{ $diseaseList }}
              </td>
            </tr>
            <tr>
              <th scope="row">Plantas involucradas</th>
              <td class="text-capitalize">
                <?php

                $plants = [];

                foreach($data->plants as $plant)
                {
                  array_push($plants, $plant->name);
                }

                $plantList = implode(',', $plants);

                ?>

                {{ $plantList }}
              </td>
            </tr>
            <tr>
              <th scope="row">Procedimiento</th>
              <td>
                {{ $data->procedure }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-info" onclick="history.back()">Volver</button>

</div>

@endsection
