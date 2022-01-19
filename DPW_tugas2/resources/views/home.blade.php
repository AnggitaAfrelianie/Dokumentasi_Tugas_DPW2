@extendes('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<img src="{{ url('gambar/logo1.jpg') }}" class="rounded mx-auto d-block" width="700" alt="">
		</div>
		@foreach($barangs as $barang)
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
  			<img class="card-img-top" src="..." alt="Card image cap">
  		<div class="card-body">
    		<h5 class="card-title">Card title</h5>
    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    		<a href="#" class="btn btn-primary">Go somewhere</a>
  		</div>
		</div>
	</div>
		@endforeach
	</div>
</div>
@endsection
