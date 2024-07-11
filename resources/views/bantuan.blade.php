@extends('layout.layout')


@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2><span>Bantuan</span> Pinkan</h2>
					<ul class="bread-list">
						<li>Cari bantuan untuk instalasi, ganti password, dan lain-lain.</li>
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
							<h1 class="news-title text-center">Frequently Asked Questions (FAQ)</h1>
							<div class="d-flex justify-content-center">
								<div class="animated-div animatedDiv expand" id="animatedDiv"></div>
							</div>
							<div class="row">
								<!-- Colomn 1 -->
								<div class="col-12 col-md-12 col-lg-4">
									<ul class="list-group">
										<div class="title mb-1">
											<h6>Akun PINKAN</h6>
											<div class="d-flex justify-content-center">
												<div class="animated-div animatedDiv expand" id="animatedDiv"></div>
											</div>
										</div>
										<li  onclick="window.location.href='{{ route('bantuan-akun') }}'" class="list-group-item">
											<a href="{{ route('bantuan-akun') }}" class="text-blue">Bagaimana cara membuat akun PINKAN?</a>
										</li>
										<li  onclick="window.location.href='{{ route('bantuan-sandi') }}'" class="list-group-item">
											<a href="{{ route('bantuan-sandi') }}" class="text-blue">Bagaimana cara mengubah kata sandi akun PINKAN?</a>
										</li>
										<li  onclick="window.location.href='{{ route('bantuan-hapus') }}'" class="list-group-item">
											<a href="{{ route('bantuan-hapus') }}" class="text-blue">Bagaimana cara menghapus akun PINKAN?</a>
										</li>
									</ul>
								</div>
								<div class="col-12 col-md-12 col-lg-4">
									<ul class="list-group">
										<div class="title mb-1">
											<h6>Instalasi dan Pengoperasian</h6>
											<div class="d-flex justify-content-center">
												<div class="animated-div animatedDiv expand" id="animatedDiv"></div>
											</div>
										</div>
										<li onclick="window.location.href='{{ route('bantuan-instalasi') }}'" class="list-group-item">
											<a href="{{ route('bantuan-instalasi') }}" class="text-blue">Cara instalasi PINKAN di perangkat</a>
										</li>
										<li onclick="window.location.href='{{ route('bantuan-monitor') }}'" class="list-group-item">
											<a href="{{ route('bantuan-monitor') }}" class="text-blue">Cara memainkan PINKAN dengan monitor</a>
										</li>
										<li onclick="window.location.href='{{ route('bantuan-pantau') }}'" class="list-group-item">
											<a href="{{ route('bantuan-pantau') }}" class="text-blue">Cara memantau progress melalui dashboard web</a>
										</li>
									</ul>
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