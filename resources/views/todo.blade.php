@extends('layouts.app')

<!-- @section('title', 'Todo') -->

@section('content')

<form action="{{ route('add') }}" method="POST">
  @csrf
  <div class="form-group">
    <input name="todo" type="text" class="form-control form-control-lg" placeholder="Add todo"></input>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Add</button>
</form>


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
    @if(!$todo->completed)
    <tr class="row">
      <th class="col-sm">{{ $todo->id }}</th>
      <td class="col-sm-8">{{ $todo->todo }}</td>
      <td class="col-sm-3">
      	<a href="{{ route('complete',['id'=> $todo->id]) }}" class="mb-2 " style="display: block;">
      	<img style="width: 30px;" src="{{ asset('img/complete.png') }}" alt=""></img>
      	 Complete
        </a>

      	<a href="{{ route('edit',['id'=> $todo->id]) }}" class="mb-2" style="display: block;">
      	<img style="width: 30px;" src="{{ asset('img/edit.png') }}" alt=""></img>
      	 Edit
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
