@extends('layout.layout')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2>Unduh Aplikasi</h2>
					<ul class="bread-list">
						<li><a href="{{ route('beranda') }}">Beranda</a></li>
						<li><i class="icofont-simple-right"></i></li>
						<li class="active">Unduh</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->
<div class="unduh-card">
<section id="download-1" class="section download-1">
	<div class="container section-download">
		<div  class="row">
			<div class="col-lg-6 col-md-12 justify-content-center">
				<div class="title">
				<img src="{{ asset('img/unduh-baca.png') }}" alt="unduh-baca">
				</div>
			</div>
			<div class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center">
				<div class="title">
					<h2 class="text-white">Belajar Membaca</h2>
					<p class="description text-white my-3">
						Unduh aplikasi Pinkan Belajar Membaca versi 1.1 untuk membantu anak belajar membaca dengan mudah dan menyenangkan.
					</p>
					<button class="btn btn-primary">Unduh Aplikasi Versi 1.1</button>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="download-2" class="section download-2">
	<div class="container section-download">
		<div class="row">
			<div class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center">
				<div class="title my-3 text-white">
					<h2>Belajar Berhitung</h2>
					<p class="description my-3">
						Unduh aplikasi Pinkan Belajar Berhitung versi 1.1 untuk membantu anak belajar berhitung dengan mudah dan menyenangkan.
				</p>
					<button class="btn btn-primary">Unduh Aplikasi Versi 1.1</button>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 ">
				<div class="title">
					<img src="{{ asset('img/unduh-hitung.png') }}" alt="unduh-berhitung">
				</div>
			</div>
		</div>
	</div>
</section>

</div>

<!-- Start Newsletter Area -->
<section class="newsletter section">
			<div class="container">
				<div class="row justify-content-center mb-4">
					<h4>Mengalami Kendala?</h4>
				</div>
				<div class="row justify-content-center">
					<button class="btn">Hubungi Kami</button>
				</div>
			</div>
		</section>
		<!-- /End Newsletter Area -->

@endsection