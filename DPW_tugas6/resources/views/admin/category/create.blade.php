@extends('template_admin.home')
@section('sub_judul','Tambah kategori')
@section('content')


@if(count($errors)>0)
	@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
  {{ $error }}
</div>
	@endforeach
@endif


@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success')}}
</div>
@endif



<form action="{{ route('category.store') }}" method="POST">
@csrf

<br>
	<div class="input-group input-group-outline">
		<label class="form-label">Kategori</label>
		<input type="text" class="form-control" name="name">
	</div>

<br>

	<div class="input-group input-group-outline">
		<button class="btn btn-primary btn-block">Simpan Kategori</button>
	</div>

</form>

@endsection