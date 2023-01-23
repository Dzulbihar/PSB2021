	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon    icon di atas , logo nya aska-->
		<link rel="shortcut icon" href="{{asset('/frontend')}}/img/aska.jpg">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>{{config('sekolah.title')}}</title>


    <link href=”css/bootstrap.min.css” rel=”stylesheet”>
    <link href=”grid.css” rel=”stylesheet”>



		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/linearicons.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/font-awesome.min.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/bootstrap.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/magnific-popup.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/nice-select.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/animate.min.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/owl.carousel.css">			
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/jquery-ui.css">			
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/main.css">
		</head>
		<body>	
			<header id="header" id="home">
				<div class="header-top">
					<div class="container">
						<div class="row">

							<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
								<ul>
									<li><a href="https://web.facebook.com/ponpes.aska" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://ponpesaska.blogspot.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="https://www.instagram.com/ponpesaskhabulkahfi/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UCQ_w9wGUkQOqLZi7FY05cgw" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
								</ul>			
							</div>

							<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
								<a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text"></span></a>
								<a href="{{config('sekolah.blog')}}"><span class="lnr lnr-envelope"></span> <span class="text">{{config('sekolah.blog')}}</span></a>			
							</div>

						</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
						<div id="logo">
							<a href="index.html"><img src="{{config('sekolah.logo_url')}}" width="{{config('sekolah.logo_url_width')}}" alt="" title="" /></a>
						</div>
						<nav id="nav-menu-container">
							<ul class="nav-menu">
								<li><a href="{{url('/')}}">Home</a></li>
								<li><a href="{{url('profilelembaga')}}">Profile</a></li>
						        <li class="#"><a href="">Gedung</a>
						            <ul>
					              		<li><a href="{{url('kampus1')}}">Kampus 1</a></li>		
					              		<li><a href="{{url('kampus2')}}">Kampus 2</a></li>		
						                <li><a href="{{url('kampus3')}}">Kampus 3</a></li>
						        	</ul>
						        </li>									
						        <li class="#"><a href="">Lembaga</a>
						            <ul>
					              		<li><a href="{{url('pesantrensalaf')}}">Pesantren Salaf</a></li>	
					              		<li><a href="{{url('pesantrentahfidz')}}">Pesantren Tahfidz</a></li>
					              		<li><a href="{{url('madrasahdiniyah')}}">Madrasah Diniyah</a></li>	
									    <li><a href="{{url('smpaskhabulkahfi')}}">SMP Askhabul Kahfi</a></li>
									    <li><a href="{{url('mtsaskhabulkahfi')}}">MTs Askhabul Kahfi</a></li>
									    <li><a href="{{url('smkaskhabulkahfi')}}">SMK Askhabul Kahfi</a>
										    <ul>
										        <li><a href="{{url('smkaskhabulkahfi')}}">Jurusan TKJ (Komputer)</a></li>
										        <li><a href="{{url('smkaskhabulkahfi')}}">Jurusan TKR (Mesin)</a></li>
										    </ul>
										</li>
									    <li><a href="{{url('maaskhabulkahfi')}}">MA Askhabul Kahfi</a></li>
						                <li><a href="{{url('mahadalyaskhabulkahfi')}}">Mahad Aly Askhabul Kahfi</a></li>
						        	</ul>
						        </li>
								<!--<li><a href="{{url('polemik')}}">Polemik Masyarakat Pesantren Menjawab</a></li>-->
								<li><a href="{{url('ekstra')}}">Ekstra Kulikuler</a></li>
								<li><a href="{{url('gallery')}}">Gallery</a></li>
								<li><a href="{{url('contact')}}">Hubungi Kami</a></li>
								
								<li><a href="{{url('/register')}}">Pendaftaran</a></li>
							</ul>
						</nav><!-- #nav-menu-container -->		    		
					</div>
				</div>
			</header><!-- #header -->






@yield('content')

<br><br>

<!-- Start cta-two Area -->
<section class="cta-two-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 cta-left">
				<h1>Polemik Masyarakat Pesantren Menjawab</h1>
			</div>
			<div class="col-lg-4 cta-right">
				<a class="primary-btn wh" href="{{url('polemik')}}">Read More</a>
			</div>
		</div>
	</div>	
</section>
<!-- End cta-two Area -->

			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>LEMBAGA PENDIDIKAN</h4>
								<ul>
									<li><a href="#">PESANTREN SALAF</a></li>
									<li><a href="#">PESANTREN TAHFIDZ</a></li>
									<li><a href="#"></a></li>
									<li><a href="#">SMP ASKHABUL KAHFI</a></li>
									<li><a href="#">MTS ASKHABUL KAHFI</a></li>
									<li><a href="#">SMK ASKHABUL KAHFI</a></li>
									<li><a href="#">MA ASKHABUL KAHFI</a></li>
									<li><a href="#">MAHAD ALY ASKHABUL KAHFI</a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>								
							</div>
						</div>

						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>LEMBAGA PENDUKUNG</h4>
								<ul>
									<li><a href="#">MADRASAH DINIYAH</a></li>
									<li><a href="#">Lembaga Penyiaran Dakwah Islam (Radio)</a></li>
									<li><a href="#">Lembaga Kajian Tafsir Al-qur'an (LKTA)</a></li>
									<li><a href="#">Lembaga Kajian Bahasa Arab (LKBA)</a></li>
									<li><a href="#">Lembaga Kajian Bahasa Inggris (LKBI)</a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>


								</ul>								
							</div>
						</div>

						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>ORIENTASI PENDIDIKAN</h4>
								<ul>
									<li><a href="#">Berkualitas</a></li>
									<li><a href="#">Bertaqwa</a></li>
									<li><a href="#">Berakhlaq Mulia</a></li>
									<li><a href="#">Bermanfaat</a></li>
									<li><a href="#">Barokah</a></li>
									<li><a href="#"></a></li>

								</ul>								
							</div>
						</div>

						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Kegiatan Ekstra Kurikuler</h4>
								<ul>
									<li><a href="">Pencak Silat</a></li>
									<li><a href="#">Rebana</a></li>
									<li><a href="#">Tilawah Al-Qur'an</a></li>
									<li><a href="#">Aska Nada</a></li>
									<li><a href="#">Marching Band</a></li>
									<li><a href="#">Sinema Aska</a></li>
									<li><a href="#">Sepak bola</a></li>
									<li><a href="#">Volly</a></li>
									<li><a href="#"></a></li>
								</ul>								
							</div>
						</div>																		
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
										<div class="input-group">
											<input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
											<div class="input-group-btn">
												<button class="btn btn-default" type="submit">
													<span class="lnr lnr-arrow-right"></span>
												</button>    
											</div>
											<div class="info"></div>  
										</div>
									</form> 
								</div>
							</div>
						</div>											
					</div>
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> Pondok Pesantren Askhabul Kahfi <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://bit.ly/dzulbihar_fer27" target="_blank">Santri Salaf</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

							<div class="col-lg-6 col-sm-12 footer-social">
								<a href="https://web.facebook.com/ponpes.aska" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://ponpesaska.blogspot.com/" target="_blank"><i class="fa fa-dribbble"></i></a>
								<a href="https://www.instagram.com/ponpesaskhabulkahfi/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a>
								<a href="https://www.youtube.com/channel/UCQ_w9wGUkQOqLZi7FY05cgw" target="_blank"><i class="fa fa-youtube-play"></i></a>
							</div>

						</div>						
					</div>
				</footer>	
				<!-- End footer Area -->	


				<script src="{{asset('/frontend')}}/js/vendor/jquery-2.2.4.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
				<script src="{{asset('/frontend')}}/js/vendor/bootstrap.min.js"></script>			
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
				<script src="{{asset('/frontend')}}/js/easing.min.js"></script>			
				<script src="{{asset('/frontend')}}/js/hoverIntent.js"></script>
				<script src="{{asset('/frontend')}}/js/superfish.min.js"></script>	
				<script src="{{asset('/frontend')}}/js/jquery.ajaxchimp.min.js"></script>
				<script src="{{asset('/frontend')}}/js/jquery.magnific-popup.min.js"></script>	
				<script src="{{asset('/frontend')}}/js/jquery.tabs.min.js"></script>					
				<script src="{{asset('/frontend')}}/js/jquery.nice-select.min.js"></script>	
				<script src="{{asset('/frontend')}}/js/owl.carousel.min.js"></script>				
				<script src="{{asset('/frontend')}}/js/mail-script.js"></script>	
				<script src="{{asset('/frontend')}}/js/main.js"></script>	
			</body>
			</html>