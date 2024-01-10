@extends('layout.master')

@section('title', 'Home')

@section('breadcrumb')
    <li class="breadcrumb-item active">Home</li>
@endsection

@section('content')
			<div class="row row-cols-1 row-cols-md-3 g-4">	
						<div class="col">
                                <div class="card text-white bg-light mb-3" style="width: 18rem;">
									<img src="https://img.kurio.network/ewrCJ9eRNpljU-80vrqWDQkN7o4=/1200x675/filters:quality(80)/https://kurio-img.kurioapps.com/20/10/10/a7e9eaa0-1c22-42b0-a11f-0a5ad1d30126.jpeg" class="card-img-top" alt="Card image cap" width="150px">
									<div class="card-body">
									  <h5 class="card-title text-black">Nasi Goreng Spesial</h5>
									  <a href="{{ url('/pesanan/create') }}" class="btn btn-primary">Pesan Sekarang</a>
								</div>
							</div>
						  </div>
						  <div class="col">
							<div class="card text-white bg-light mb-3" style="width: 18rem;">
								<img src="https://cdn0-production-images-kly.akamaized.net/M63Fm-0RE7Kup8ELu__IRAFJr-U=/0x0:3000x1691/1200x675/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3910470/original/073110400_1642740733-shutterstock_1854744190.jpg" class="card-img-top" alt="Card image cap" width="150px">
								<div class="card-body">
								  <h5 class="card-title text-black">Ayam Bakar Pedas</h5>
								  <a href="{{ url('/pesanan/create') }}" class="btn btn-primary">Pesan Sekarang</a>
							</div>
						</div>
					  </div>
					  <div class="col">
						<div class="card text-white bg-light mb-3" style="width: 18rem;">
							<img src="https://img-global.cpcdn.com/recipes/608033db45fc7314/1200x630cq70/photo.jpg" class="card-img-top" alt="Card image cap" width="150px">
							<div class="card-body">
							  <h5 class="card-title text-black">Ayam Bakar Pedas</h5>
							  <a href="{{ url('/pesanan/create') }}" class="btn btn-primary">Pesan Sekarang</a>
						</div>
					</div>
				  </div>
						  
@endsection