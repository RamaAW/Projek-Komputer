<!DOCTYPE html>

<html>

<head>
	<link rel="shortcut icon" href="/img/logo new cahaya.png">
	<title>Cahaya Rent</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<link rel="stylesheet" href="/css/linearicons.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/magnific-popup.css">
	<link rel="stylesheet" href="/css/nice-select.css">					
	<link rel="stylesheet" href="/css/animate.min.css">
	<link rel="stylesheet" href="/css/animate-text.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/main.css">
	<link href="/fontawesome/css/fontawesome.css" rel="stylesheet">
  	<link href="/fontawesome/css/brands.css" rel="stylesheet">
  	<link href="/fontawesome/css/solid.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/003603851d.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class=""></div>
	<!-- start header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
			    <div id="logo">
			        <img src="/img/2.png" alt="" width="70px">
			    </div>
			    <nav id="nav-menu-container"><!-- #nav-menu-container -->	
				    <ul class="nav-menu">
				      	<li class="menu-active"><a href="#home">Home</a></li>
						<li><a href="#datakomputer">Data Komputer</a></li>
				    </ul>
				</nav>	    		
			</div>
		</div>
	</header>
	<!-- End header Area -->

	<!-- start section 1 (banner Area) -->
	<section class="banner-area" id="home">	
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-10">
					<br><br><br>
					<h5 class="text-white text-uppercase">Tempat Penyewaan Laptop dan Komputer</h5>
					<h1 class="cd-headline clip is-full-width">
						<span>Cahaya</span>
						<span class="cd-words-wrapper">
							<b class="is-visible">Rent</b>
							<b>Rent</b>
							<b>Rent</b>
							<b>Rent</b>
							<b>Rent</b>
							<b>Rent</b>
						</span>
					</h1>
					<br>
				</div>											
			</div>
		</div>
	</section>

    <section id="datakomputer">
            <div class="content mt-3">
            <div class="animated fadeIn">

            <!-- // -->
            <div class="content">
                @if(Session::has('pesan'))
                    <div class="alert alert-success">{{Session::get('pesan')}}</div>
                @endif
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Jenis_Komputer</th>
                            <th>Spesifikasi</th>
                            <th>Foto</th>
                            <th>Video</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_komputer as $komputer)
                        <tr>
                            <td>{{$komputer->Jenis_Komputer}}</td>
                            <td>{{$komputer->Spesifikasi}}</td>
                            <td><img src="{{asset('storage/'.$komputer->Foto)}}" alt="" width="100" class="rounded mb-2"></td>
                            <td><img src="{{asset('storage/'.$komputer->Video)}}" alt="" width="100" class="rounded mb-2"></td>
                        </tr>
                        @endforeach
                    </tbody>

        </table>
        <p align="right"><a href="{{route('komputer.create')}}" class="btn btn-warning">Tambah Komputer</a></p>

            <!-- // -->
                </div>
            </div>
        </div>
    </section>
	<!-- end section 1 (banner Area) -->
    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="/js/vendor/bootstrap.min.js"></script>
  	<script src="/js/easing.min.js"></script>			
	<script src="/js/hoverIntent.js"></script>
	<script src="/js/superfish.min.js"></script>	
	<script src="/js/jquery.ajaxchimp.min.js"></script>
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<script src="/js/animate-text.js"></script>
	<script src="/js/owl.carousel.min.js"></script>			
	<script src="/js/jquery.sticky.js"></script>
	<script src="/js/jquery.nice-select.min.js"></script>			
	<script src="/js/parallax.min.js"></script>	
	<script src="/js/mail-script.js"></script>	
	<script src="/js/main.js"></script>	
</body>

</html>