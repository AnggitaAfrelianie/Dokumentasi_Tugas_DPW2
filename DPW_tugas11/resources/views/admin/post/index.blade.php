@extends('template_admin.home')
@section('sub_judul','Post')
@section('content')


@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success')}}
</div>
@endif

	<br>
	<a href="{{ route('post.create') }}" class="btn btn-success btn-sm">Tambah Post</a><br>
	<br>

<form method="GET" action="{{ url('post') }}">
	<input type="text" name="keyword" value="{{$keyword}}" />
	<button type="submit">Search</button>
</form>
	<br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Post</th>
				<th>Kategori</th>
				<th>Konten</th>
				<th>Daftar Tags</th>
				<th>Creator</th>
				<th>Thumbnail</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($post as $result => $hasil)
			<tr>
				<td>{{ $result + $post->firstitem() }}</td>
				<td> {{ $hasil->judul }} </td>
				<td> {{ $hasil->category->name }} </td>
				<td> {{ $hasil->content }}</td>
				<td>@foreach($hasil->tags as $tag)
						<ul> 
							<li> {{ $tag->name }} </li>
						</ul>
						@endforeach

				</td>
				<td>{{$hasil->users->name }}</td>
				<td><img src="{{ asset( $hasil->gambar ) }}" class="img-fluid" style="width:100px"></td>
				<td>
					<form action="{{ route('post.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')

					<a href="{{ route('post.edit', $hasil->id) }}" class="btn bg-gradient-dark btn-sm">Edit</a>
					<button type="submit" class="btn btn-primary btn-sm"> Delete </button>
					</form>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	{{ $post->links() }}
	
@endsection