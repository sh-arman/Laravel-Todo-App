@foreach($errors->all() as $error)
	{{-- <p class="alert alert-danger"> {{ $error  }} </p> --}}
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{ $error  }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endforeach

