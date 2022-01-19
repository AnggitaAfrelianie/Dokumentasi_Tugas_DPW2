@extends('template_admin.home')
@section('sub_judul','Tambah Post')
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

<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
@csrf


	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Judul</label> 
		<input type="text" class="form-control" name="judul">
	</div>

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Kategori</label>
		<select class="form-control" name="category_id">
			<option value="" holder>Pilih categori</option>
			@foreach($category as $result)
			<option value="{{ $result->id }}"> {{ $result-> name }}</option>
			@endforeach
		</select>
	</div>

<br>
	<div class="input-group input-group-outline">
	<label class="font-weight-bold">Multiple</label>
		<select class="form-control select2" multiple="">
			<option>Option 1</option>
			<option>Option 2</option>
			<option>Option 3</option>
		</select>
	</div>

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Konten</label>
		<textarea class="form-control" name="content"></textarea>
	</div>

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Gambar</label>
		<input type="file" name="gambar" class="form-control">
	</div>


<br>
	<div class="input-group input-group-outline">
		<button class="btn btn-primary btn-block">Simpan Post</button>
	</div>

</form>

@endsection