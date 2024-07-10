<!-- Header Inner -->
<div class="header-inner">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-lg-4  col-md-4 col-12">
                    <!-- Start Logo -->
                    <div class="logo">
                        <a href="{{ route('beranda') }}">
                            <img src="{{ asset('img/logo_pinkan.png') }}" width="50px" height="5rem" alt="#">
                            <img src="img/PINKAN.svg" width="150px" height="5rem" alt="#">
                        </a>
                    </div>
                    <!-- End Logo -->
                    <!-- Mobile Nav -->
                    <div class="mobile-nav"></div>
                    <!-- End Mobile Nav -->
                </div>
                <div class="col-lg-6 col-md-8 col-12">
                    <!-- Main Menu -->
                    <div class="main-menu">
                        <nav class="navigation">
                            <ul class="nav menu">
                                <li class="listnav"><a href="{{ route('beranda') }}">Beranda</a>
                                    <!-- <ul class="dropdown">
													<li><a href="index.html">Home Page 1</a></li>
												</ul> -->
                                </li>
                                <li class="listnav"><a href="{{ route('unduh') }}">Unduh </a></li>

                                <li class="listnav"><a href="{{ route('bantuan') }}">Bantuan </a></li>
                                </li>
                                <li class="listnav"><a href="{{ route('tentang') }}">Tentang</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--/ End Main Menu -->
                </div>
                <div class="col-lg-2 col-12">
                    <div class="get-quote">
                        <a href="{{ route('login') }}" class="btn">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Header Inner -->