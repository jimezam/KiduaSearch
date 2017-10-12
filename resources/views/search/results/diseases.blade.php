@extends('search.index')

@section('results')

  @foreach($data as $disease)

    <p>{{ $disease->id }}</p>
    <p>{{ $disease->name }}</p>
    <p>{{ $disease->created_at }}</p>
    <p>{{ $disease->updated_at }}</p>

    @foreach($disease->treatments as $treatment)

      @foreach($treatment->plants as $plant)

        <p>> {{ $plant->name }}</p>

      @endforeach

    @endforeach

  @endforeach

@endsection
