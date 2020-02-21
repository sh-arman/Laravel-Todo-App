@extends('layouts.app')

<!-- @section('title', 'Todo') -->

@section('content')

<form action="{{ route('update', ['id'=> $todos->id ]) }}" method="POST">
  @csrf
  <div class="form-group">
    <!-- <input name="todo" type="text" class="form-control form-control-lg" value="{{ $todos->todo }}"></input> -->
    <textarea name="todo" type="text" class="form-control" aria-label="With textarea" style="height: 40vh;">{{ $todos->todo }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Update</button>
</form>


@endsection
