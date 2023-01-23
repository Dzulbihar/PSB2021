@extends('layouts.frontend')

@section('content')

<section class="banner-area relative about-banner" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Mahad Aly ASKHABUL KAHFI				
				</h1>	
				<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('mahadalyaskhabulkahfi')}}"> Mahad Aly Askhabul Kahfi</a></p>
			</div>	
		</div>
	</div>
</section>
<!-- ___________________________________________________________________________________________________________________  -->

<!-- Start course-details Area -->
<section class="course-details-area pt-120">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">MAHAD ALY ASKHABUL KAHFI</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 left-contents">
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/mahadaly.png" >
				</div>
				<div class="jq-tab-wrapper" id="horizontalTab">

					<div class="jq-tab-content-wrapper">

						MA’HAD ALY adalah lembaga pendidikan setingkat perguruan tinggi yang hanya dapat di temukan di lembaga pendidikan dengan basis pesantren.Lembaga ini,didirikan berdasarkan peraturan Menteri Agama Republik Indonesia no 71 tahun 2015 . Dengan peraturan menteri tersebut,maka lembaga perguruan tinggi khusus ini diakui legalitasnya oleh negara ,serta lulusan dari MA’HAD ALY  nantinya memiliki gelar setara dengan lulusan perguruan tinggi lain yang berbasis keagamaan.
						<br><br>
						MA’HAD ALY ASKHABUL KAHFI merupakan lembaga pendidikan setingkat perguruan tinggi yang berada dilingkungan  PONPES ASKHABUL KAHFI .Lembaga ini didirikan pada tahun 2019 untuk menanggapi adanya permasalahan masyarakat yang semakin memprihatinkan.Yaitu adanya perbedaan penafsiran pada ayat Al-Quran yang memicu kericuhan di berbagai wilayah.Diharapkan nantinya lulusan dari MA’HAD ALY askhabul Kahfi mampu menjadi alim ulama dalam bidang tafsir wa ulumuhu.
						<br><br>

						<h4>Tujuan</h4>
						Mempersiapkan generasi muda yang  intelektual ,religius kreatif ,dan inovatif terkhusus pada bidang tafsir Al-Quran waulumuhu.
						<br><br>

						<h4>Referensi</h4>
						Maroh Labid Tafsir Munir karya  imam an Nawawi Al Bantan.
						<br><br>

						<h4>Mata Kuliah</h4>
							<li>Ilmu tafsir Al-Quran</li>
							<li>Pengkajian tafsir Al-Quran</li>
							<li>Teknologi informasi dan komunikasi</li>
							<li>Ilmu alat (nahwu dan shorof)</li>
						<br><br>

						<h4>Ketentuan Khusus</h4>
							<li>Mahasantri di wajibkan mukim di pondok pesantren</li>
							<li>Mengenyam pendidikan setingkat SMA</li>
							<li>Telah memahami dasar tata bahasa (Alfiyah)</li>
					</div>
				</div>
			</div>


			<div class="col-lg-4 right-contents">
				<ul>
					<li>
						<h2 class="text-center">
							<b>LEMBAGA FORMAL KAMI</b>
						</h2>
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('smpaskhabulkahfi')}}">
							<h3><b>SMP Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%">
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('mtsaskhabulkahfi')}}">
							<h3><b>MTs Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%">
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('smkaskhabulkahfi')}}">
							<h3><b>SMK Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%">
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('maaskhabulkahfi')}}">
							<h3><b>MA Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%">
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('mahadalyaskhabulkahfi')}}">
							<h3><b>Mahad Aly Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%">
					</li>

				</ul>
				<a href="#" class="primary-btn text-uppercase">Enroll course</a>
			</div>
		</div>
	</div>	
</section>
<!-- End course-details Area -->

@stop