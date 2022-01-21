@extends('template_admin.home')
@section('sub_judul','Edit Post')
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

<form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')

	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Judul</label> 
		<input type="text" class="form-control" name="judul" value="{{ $post->judul }}">
	</div>

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Kategori</label>
		<select class="form-control" name="category_id">
			<option value="" holder>Pilih categori</option>
			@foreach($category as $result)
			<option value="{{ $result->id }}"
			@if($post->category_id == $result->id)
				selected
			@endif
				> {{ $result-> name }}</option>
			@endforeach
		</select>
	</div>

<br>
	<div class="input-group input-group-outline">
	<label class="font-weight-bold">Pilih Tags</label>
		<select class="form-control select2" multiple="" name="tags[]">
			@foreach($tags as $tags)
			<option value="{{ $tags->id }}"
			@foreach($post->tags as $value)
				@if($tags->id == $value->id)
				selected
				@endif
			@endforeach
				> {{ $tags->name }} </option>
			@endforeach
		</select>
	</div>

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Konten</label>
		<textarea class="form-control" name="content">{{ $post->content }}</textarea>
	</div>

<br>
	<div class="input-group input-group-outline">
		<label class="font-weight-bold">Gambar</label>
		<input type="file" name="gambar" class="form-control">
	</div>


<br>
	<div class="input-group input-group-outline">
		<button class="btn btn-primary btn-block">Update Post</button>
	</div>

</form>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>



@endsection