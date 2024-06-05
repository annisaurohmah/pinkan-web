@extends('layout.layout')


@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2>Bantuan</h2>
					<ul class="bread-list">
						<li><a href="index.html">Beranda</a></li>
						<li><i class="icofont-simple-right"></i></li>
						<li class="active">Bantuan</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->

<!-- Single News -->
<section class="news-single section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-12">
				<div class="row">
					<div class="col-12">
						<div class="single-main">
							<!-- News Title -->
							<h1 class="news-title text-center">Topik yang sedang tren</a></h1>
							<div class="row">
								<!-- Colomn 1 -->
								<div class="col-12 col-md-12 col-lg-4">
									<div class="title mb-1">
										<h6>Akun PINKAN</h6>
									</div>
									<a href="{{ route('detail-bantuan') }}" class="text-blue">Bagaimana cara membuat akun PINKAN?</a><br>
									<a href="{{ route('detail-bantuan') }}" class="text-blue">Bagaimana cara mengubah kata sandi akun PINKAN?</a><br>
									<a href="{{ route('detail-bantuan') }}" class="text-blue">Bagaimana cara menghapus akun PINKAN?</a>
								</div>
								<div class="col-12 col-md-12 col-lg-4">
									<div class="title mb-1">
										<h6>Instalasi dan Pengoperasian</h6>
									</div>
									<a href="{{ route('detail-bantuan') }}" class="text-blue">Instalasi PINKAN di perangkat</a><br>
									<a href="{{ route('detail-bantuan') }}" class="text-blue">Memainkan PINKAN dengan monitor</a><br>
									<a href="{{ route('detail-bantuan') }}" class="text-blue">Memantau progress melalui dashboard web</a>
								</div>
								<div class="col-12 col-md-12 col-lg-4">
									<div class="title mb-1">
										<h6>Perangkat dan Sistem Operasi</h6>
									</div>
									<a href="{{ route('detail-bantuan') }}" class="text-blue">Persyaratan Perangkat</a><br>
									<a href="{{ route('detail-bantuan') }}"  class="text-blue">Laporkan masalah</a>
								</div>

							</div>


						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Single News -->

@endsection