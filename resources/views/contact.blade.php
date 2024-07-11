@extends('layout.layout')

@section('content')

<section class="news-single section">
	<div class="container">
		<div class="row my-5 align-items-center">
			<div class="col-lg-6 col-12">
				<div class="single-image">
					<img src="{{ asset('img\fobar.JPG') }}" class="img-fluid" alt="#">
				</div>
			</div>
			<div class="col-lg-6 col-12 p-4">
				<div class="choose-left">
					<h3 class="pb-3">Tim PINKAN </h3>
					<p>Tim PINKAN merupakan salah satu tim yang ikut dalam Program Kreativitas Mahasiswa Karsa Cipta dari Universitas Gadjah Mada yang memperoleh pendanaan dari Kemendikbudristek. Tim terdiri dari lima personil yaitu Annisa Urohmah sebagai ketua tim dengan Daffa Askar Fathin, Ikhwan Hanif Firdaus, Adhyaksa Waruno Putra, dan Nasywa Qurrota A'yun sebagai anggota. Tim PINKAN dibimbing oleh Bapak Dr. Eng. Ganjar Alfian, S.T., M.Eng.</p>
				</div>
				<div class="blog-bottom my-4">
					<!-- Social Share -->
					<ul class="social-share">
						<li class="facebook"><a href="https://web.facebook.com/profile.php?id=61558771388079"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
						<li class="instagram"><a href="https://www.instagram.com/pkmkcugm_pinkan/"><i class="fa fa-instagram"></i><span>Instagram</span></a></li>
						<li class="youtube"><a href="https://www.youtube.com/channel/UCohbysOgnN8rT1sJTHfOvIQ"><i class="fa fa-youtube"></i><span>Youtube</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</section>



@endsection