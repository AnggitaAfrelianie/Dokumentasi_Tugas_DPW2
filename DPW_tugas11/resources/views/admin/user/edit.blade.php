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



<form action="{{ route('user.update', $user->id) }}" method="POST">
@csrf
@method('put')

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Nama User</label>
		<input type="text" class="form-control" name="name" value="{{ $user->name }}">
	</div>

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Email User</label>
		<input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly="">
	</div>

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Tipe User</label>
		<select class="form-control" name="tipe">
			<option value="" holder>Pilih Tipe User</option>

			<option value="1" holder
			@if($user->tipe == 1)
			selected
			@endif
			>Administrator</option>

			<option value="0" holder
			@if($user->tipe == 0)
			selected
			@endif
			>Author</option>

		</select>
	</div>

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Password</label>
		<input type="password" class="form-control" name="password">
	</div>

<br>

	<div class="input-group input-group-outline">
		<button class="btn btn-primary btn-block">Update User</button>
	</div>

</form>











<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


<head>
<style type="text/css">

/*------footer------*/
footer {
    padding: 30px 0;
    background-color: #333;
    color: #fff;
    text-align: center;
}
.label{
    background-color: #148f77;
    color: #fff;
}

</style>
</head>










@endsection