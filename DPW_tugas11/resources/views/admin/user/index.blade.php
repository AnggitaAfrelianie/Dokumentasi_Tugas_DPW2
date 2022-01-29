@extends('template_admin.home')
@section('sub_judul','Users')
@section('content')


@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success')}}
</div>
@endif

	<br>
	<a href="{{ route('user.create') }}" class="btn btn-success btn-sm">Tambah User</a><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama User</th>
				<th>Email</th>
				<th>Tgl Dibuat</th>
				<th>Type</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($user as $result => $hasil)
			<tr>
				<td>{{ $result + $user->firstitem() }}</td>
				<td> {{ $hasil->name }} </td>
				<td> {{ $hasil->email }} </td>
				<td> {{ $hasil->created_at }} </td>
				<td>
					@if($hasil->tipe)
					<span class="badge bg-info">Administrator</span>
						@else
						<span class="badge bg-warning">Author</span>
					@endif
				</td>
				<td>
					<form action="{{ route('user.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')

					<a href="{{ route('user.edit', $hasil->id) }}" class="btn bg-gradient-dark btn-sm">Edit</a>
					<button type="submit" class="btn btn-primary btn-sm"> Delete </button>
					</form>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	{{ $user->links() }}
	
@endsection