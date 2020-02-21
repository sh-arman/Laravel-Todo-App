@extends('layouts.app')

<!-- @section('title', 'Todo') -->

@section('content')

 <table class="table table-striped">
  <thead>
    <tr class="row">
      <th class="col-sm d-none d-lg-block">#</th>
      <th class="col-sm-8 d-none d-lg-block">Todos</th>
      <th class="col-sm-3 d-none d-lg-block">Options</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($todos as $todo)
    @if($todo->completed)
    <tr class="row">
      <th class="col-sm">{{ $todo->id }}</th>
      <td class="col-sm-8">{{ $todo->todo }}</td>
      <td class="col-sm-3">
      	<a href="{{ route('restore',['id'=> $todo->id]) }}" class="mb-2 " style="display: block;">
      	<img style="width: 30px;" src="{{ asset('img/restore.png') }}" alt=""></img>
      	 Restore
        </a>


      	<a href="{{ route('delete',['id'=> $todo->id]) }}" class="mb-2" style="display: block;">
      	<img style="width: 30px;" src="{{ asset('img/delete.png') }}" alt=""></img>
      	 Delete
        </a>
        <small>( {{ $todo->created_at->diffForHumans()}} )</small>
      </td>
    </tr>
    @endif
    @endforeach

  </tbody>
</table>

@endsection
