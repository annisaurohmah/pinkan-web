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
						<li><i class="icofont-simple-right"></i></li>
						<li class="active">Detail Bantuan</li>
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
			<div class="col-lg-8 col-12">
				<div class="row">
					<div class="col-12">
						<div class="single-main">
							<!-- News Title -->
							<h1 class="news-title">Cara Mengganti Kata Sandi PINKAN</a></h1>
							<!-- Meta -->
							<div class="meta">
								<div class="meta-left">
									<span class="date"><i class="fa fa-clock-o"></i>Diperbarui 03 Feb 2024</span>
								</div>
							</div>
							<!-- News Text -->
							<div class="news-text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam.</p>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit nulla, viverra non commod</p>
								<div class="image-gallery">
									<div class="row">
										<div class="col-12">
											<div class="single-image">
												<img src="img/blog2.jpg" alt="#">
											</div>
										</div>
									</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit nulla, viverra non commodo et, sodales id dui.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>

					
			<div class="col-lg-4 col-12">
				<div class="main-sidebar">
					<!-- Single Widget -->
					<div class="single-widget category">
						<h3 class="title">Lainnya</h3>
						<ul class="categor-list">
							<a href="{{ route('bantuan-akun') }}" class="text-blue">Bagaimana cara membuat akun PINKAN?</a><br>
							<a href="{{ route('bantuan-sandi') }}" class="text-blue">Bagaimana cara mengubah kata sandi akun PINKAN?</a><br>
							<a href="{{ route('bantuan-hapus') }}" class="text-blue">Bagaimana cara menghapus akun PINKAN?</a><br>
							<a href="{{ route('bantuan-instalasi') }}" class="text-blue">Instalasi PINKAN di perangkat</a><br>
							<a href="{{ route('bantuan-monitor') }}" class="text-blue">Memainkan PINKAN dengan monitor</a><br>
							<a href="{{ route('bantuan-pantau') }}" class="text-blue">Memantau progress melalui dashboard web</a><br>


						</ul>
					</div>
					<!--/ End Single Widget -->

				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Single News -->

@endsection