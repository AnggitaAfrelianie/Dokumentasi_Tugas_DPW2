@extends('template_admin.home')
@section('sub_judul','Tambah User')
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



<form action="{{ route('user.store') }}" method="POST">
@csrf

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Nama User</label>
		<input type="text" class="form-control" name="name">
	</div>

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Email User</label>
		<input type="email" class="form-control" name="email">
	</div>

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Tipe User</label>
		<select class="form-control" name="tipe">
			<option value="" holder>Pilih Tipe User</option>
			<option value="1" holder>Administrator</option>
			<option value="0" holder>Author</option>
		</select>
	</div>

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Password</label>
		<input type="password" class="form-control" name="password">
	</div>

<br>

	<div class="input-group input-group-outline">
		<button class="btn btn-primary btn-block">Simpan User</button>
	</div>

</form>

@endsection