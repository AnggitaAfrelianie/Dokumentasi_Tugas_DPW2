@extends('template_admin.home')
@section('sub_judul','kategori')
@section('content')


@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success')}}
</div>
@endif

	<br>
	<a href="{{ route('category.create') }}" class="btn btn-success btn-sm">Tambah Kategori</a><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Category</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($category as $result => $hasil)
			<tr>
				<td>{{ $result + $category->firstitem() }}</td>
				<td> {{ $hasil->name }} </td>
				<td>
					<form action="{{ route('category.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')

					<a href="{{ route('category.edit', $hasil->id) }}" class="btn bg-gradient-dark btn-sm">Edit</a>
					<button type="submit" class="btn btn-primary btn-sm"> Delete </button>
					</form>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	{{ $category->links() }}
	
@endsection