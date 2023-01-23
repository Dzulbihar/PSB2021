@extends('layouts.frontend')

@section('content')

<section class="banner-area relative about-banner" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					POLEMIK MASYARAKAT PESANTREN MENJAWAB				
				</h1>	
				<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('polemik')}}"> Polemik Masyarakat Pesantren Menjawab</a> <span class="lnr lnr-arrow-right"></span>  <a href="{{url('polemik14')}}"> Sejarah singkat puasa dan pengertiannya </a></p>
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
					<h1 class="mb-10">Sejarah singkat puasa dan pengertiannya</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 left-contents">
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/polemik0/polemik14.jpg" width="100%" alt="">
				</div>
				<div class="jq-tab-wrapper" id="horizontalTab">

					<div class="jq-tab-content-wrapper">


						<div class="text-justify">

							<p class="font-weight-normal" >
								Menurut keterangan dalam Kitab Fiqhul Islam wa adillatihi, di fardhukannya puasa Romadhon yaitu satu setengah tahun setelah di alihkannya qiblat ke Ka`bah, yaitu tanggal 10 Sya`ban tahun 2 Hijriyah, dan Nabi Muhammad SAW menjalankan ibadah puasa sebanyak sembilan kali . Dimulainya puasa Romadhon berdasarkan hadits yang diriwayatkan oleh Bukhori dan Muslim yaitu ketika melihat hilal dan apabila hilal tertutup dengan mendung, maka menyempurnakan bulan Sya`ban sampai 30 hari.  
								<br><br>
								Puasa secara lughoh ( bahasa ) artinya al imsak yaitu menahan atau mengekang, dan menurut istilah ialah menahan dari hal – hal yang membatalkan puasa mulai dari terbitnya fajar sampai terbenamnya matahari dengan cara yang telah di tentukan. Dasar diwajibkannya puasa Romadhon adalah Firman Allah dalam Al Qur`an Surat Al Baqoroh ayat 183 : “Hai orang-orang yang beriman, diwajibkan atas kamu berpuasa sebagaimana diwajibkan atas orang-orang sebelum kamu agar kamu bertakwa “. Puasa Romadhon merupakan salah satu rukun Islam, maka barang siapa yang mengingkarinya menurut kesepakatan Ulama`, maka dia adalah kafir dan murtad dari Islam.
								<br><br>
								Ancaman bagi orang yang tidak mau melaksanakan puasa Romadhon tanpa ada udzur sangatlah berat, sebagaimana yang telah di jelaskan dalam suatu hadits Nabi SAW, dari Abu Umamah Al Bahili, dia berkata :” Aku mendengar Rosulullah SAW bersabda,” Ketika aku sedang tidur, tiba – tiba ada dua laki – laki yang mendatangiku, keduanya memegangi kedua lenganku, kemudian membawaku ke sebuah gunung terjal. Keduanya berkata kepadaku, ” Naiklah “, Aku menjawab, ” Aku tidak mampu “,  keduanya berkata ” kami akan memudahkannya untukmu.” Maka aku naik, ketika aku berada di tengah gunung itu, tiba – tiba aku mendengar suara – suara yang keras, maka aku bertanya ” suara apa itu ?”, mereka menjawab :” itu teriakan penduduk neraka,” Kemudian aku di bawa, tiba – tiba aku melihat sekelompok orang tergantung ( terbalik ) dengan urat – urat kaki mereka ( di sebelah atas ), ujung – ujung mulut mereka sobek mengalir darah”. Aku bertanya, ” mereka itu siapa ?”,  mereka menjawab ” mereka adalah orang – orang yang berbuka puasa sebelum waktunya ( orang – orang yang enggan berpuasa )”. ( HR. Nasa`i, Ibnu Hibban, Al Baihaqi dan At-Thabrani ).


							</p>

						</div>

						
					</div>
				</div>
			</div>


			<div class="col-lg-4 right-contents">
				<h3>Daftar Judul Artikel</h3>
				<ul>
					<li><a href="{{url('polemik16')}}">Kisah Nabi Ibrahim</a></li>
					<li><a href="{{url('polemik15')}}">Syarat Sah Puasa Ramadhan</a></li>
					<li><a href="{{url('polemik14')}}">Sejarah singkat puasa dan pengertiannya</a></li>
					<li><a href="{{url('polemik13')}}">Covid dan Ramadhan</a></li>
					<li><a href="{{url('polemik12')}}">Akhlaq | Mukhasabah wat Tarbiyah dalam Rangka Menyongsong Tahun Baru 2020</a></li>
					<li><a href="{{url('polemik11')}}">Sejarah Kelahiran Nabi Muhammad saw</a></li>
					<li><a href="{{url('polemik10')}}">Nasehat dari Ponpes Askhabul Kahfi Semarang</a></li>
					<li><a href="{{url('polemik09')}}">Peringatan dari Pengasuh Ponpes Askhabul Kahfi</a></li>
					<li><a href="{{url('polemik08')}}">Tafsir Al Fatihah | Selamatan dan Pembukaan Ma'had Aly Askhabul Kahfi</a></li>
					<li><a href="{{url('polemik07')}}">Sejarah Indonesia Sebelum dan Menjelang Kemerdekaan</a></li>
					<li><a href="{{url('polemik06')}}">Tafsir 5 ayat pertama Alquran | Muhasabah Watarbiyah Pertama Tahun Ajaran 2019-2020</a></li>
					<li><a href="{{url('polemik05')}}">Sejarah Askhabul Kahfi | Pembekalan Santri Baru 2019/2020</a></li>
					<li><a href="{{url('polemik04')}}">Makna Puasa dan hukumnya | Muhasabah wa tarbiyah menyambut bulan ramadhan 1440 H</a></li>
					<li><a href="{{url('polemik03')}}">Tujuan pendidikan | Ponpes Askhabul Kahfi Semarang Peringati Hari Pendidikan Nasional</a></li>
					<li><a href="{{url('polemik02')}}">Lima Kriteria Umat Nabi Muhammad saw</a></li>
					<li><a href="{{url('polemik01')}}">Video Pengajian Abah KH. Masruchan</a>VIDEO PENGAJIAN ABAH KH. MASRUCHAN</li>
				</ul>
				<a href="{{url('polemik')}}" class="primary-btn text-uppercase">Selengkapnya</a>
			</div>
		</div>
	</div>	
</section>
<!-- End course-details Area -->


























@stop