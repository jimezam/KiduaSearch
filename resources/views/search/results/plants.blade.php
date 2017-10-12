@extends('search.index')

@section('results')

  @foreach($data as $plant)

    <p>{{ $plant->id }}</p>
    <p>{{ $plant->name }}</p>
    <p>{{ $plant->scientific_name }}</p>
    <p>{{ $plant->url }}</p>
    <p>{{ $plant->created_at }}</p>
    <p>{{ $plant->updated_at }}</p>

    @foreach($plant->treatments as $treatment)

      @foreach($treatment->diseases as $disease)

        <p>> {{ $disease->name }}</p>

      @endforeach

    @endforeach

  @endforeach

@endsection
