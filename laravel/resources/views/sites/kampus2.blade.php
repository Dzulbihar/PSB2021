@extends('layouts.frontend')

@section('content')

<section class="banner-area relative about-banner" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					KAMPUS 2				
				</h1>	
				<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/kampus2')}}"> Kampus 2</a></p>
			</div>	
		</div>
	</div>
</section>
<!-- ___________________________________________________________________________________________________________________  -->

<!-- Start course-details Area -->
<section class="course-details-area pt-120">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 left-contents">
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/gedung/kampus.jpg" alt="">
				</div>
				<div class="jq-tab-wrapper" id="horizontalTab">
					<div class="jq-tab-menu">
	                    <div class="jq-tab-title" data-tab="1">Kampus 1</div>
	                    <div class="jq-tab-title active" data-tab="2">Kampus 2</div>
	                    <div class="jq-tab-title" data-tab="3">Kampus 3</div>
	                </div>

					<div class="jq-tab-content-wrapper">

						<div class="jq-tab-content" data-tab="1">
							<br>
							Kampus 1 Ponpes Askhabul Kahfi Semarang merupakan komplek tertua sekaligus cikal bakal berdirinya Ponpes Askhabul Kahfi. Berdampingan dengan Pondok Pesantren Roudlotul Muttaqin yang lebih dulu berdiri, pesantren salaf murni tersebut telah berdiri sejak 1992 M. Sampai sekarang pun pesantren salaf tersebut menjadi rujukan lulusan Askhabul Kahfi yang telah menamatkan bangku sekolahnya untuk memperdalam lagi ilmu agamanya.
							<br><br>
							<div>
								<img src="{{asset('/frontend')}}/gedung/kampus1.jpg" alt="" class="img-fluid">
							</div>
							<br>
							Kampus 1 kini dihuni oleh ratusan santri terutama santri putra yang bersekolah di MTs dan MA Takhasus Askhabul Kahfi. Berdampingan dengan santri salaf yang lebih senior.
							<br><br>
							Di komplek ini pula beliau Syaikhuna Murabbiruhina Abah Kyai pengasuh tinggal. Ndalem beliau tepat di tengah-tengah komplek. Terletak di tengah pemukiman penduduk kelurahan, Kampus ini juga dikelilingi rumah penduduk sekitar.
							<br><br>
							Berbeda dengan kampus lain, Kampus 1 hanya terdiri dari gedung asrama meliputi :
							
							<div class="container">
							  <ul class="list-group list-group-flush">
							    <li class="list-group-item">Gedung Imam Ghozali</li>
							    <li class="list-group-item">Gedung Umar bin Khattab</li>
							    <li class="list-group-item">Gedung Utsman bin Affan</li>
							    <li class="list-group-item">Gedung Ali bin Abi Thalib</li>
							  </ul>
							</div>

							<br>
							Pengambilan nama Imam Ghozali merujuk pada Imam Abu Hamid al Ghozali yang berjuluk “Hujjatul Islam” dan mengarang Kitab Ihya Ulumuddin. Kitab inilah yang menjadi panduan dasar akhlak dan Tasawuf sejak pesantren Salaf Roudlotul Muttaqin.
							<br><br>
							Perlu diketahui pula, Sebelum dipindah ke kampus 3, Santri Putri menempati kampus 1 tepatnya komplek sebelah timur ndalem. Namun kini mereka telah mendapat tempat yang lebih nyaman.
						</div>

						<div class="jq-tab-content active" data-tab="2">
							<div>
								<img src="{{asset('/frontend')}}/gedung/kampus2.jpg" alt="" class="img-fluid">
							</div>
							<br>
							Kampus 2 Askhabul Kahfi Semarang adalah komplek putra sekaligus menandai awal berdirinya Pondok Pesantren Askhabul Kahfi. Berdiri pada 2009, awalnya berupa sawah dan jurang di pinggir jalan yang sepintas tidak mungkin didirikan pesantren. Namun atas seizin Allah swt. kini berdiri gedung-gedung megah yang tampak dari jalan cangkiran-gunungpati, menjadi landmark daerah tersebut.
							<br><br>
							Komplek ini ditempati oleh para santri putra, tepatnya santri yang bersekolah di SMP dan SMK Askhabul Kahfi. Sedangkan santri MTs dan MA berdomisili di kampus 1. Meski begitu, semua aktivitas sekolah santri putra mengambil tempat di kampus ini. Sehingga kelebihan santri yang tinggal di kampus 2 ini adalah akses sekolah serta fasilitas lain yang dekat. Karena semua fasilitas santri putra berpusat di kampus ini.
							<br><br>
							<div>
								<img src="{{asset('/frontend')}}/gedung/kampus2b.jpg" alt="" class="img-fluid">
							</div>
							<br>

							<div class="container">
							  <p>Hingga saat ini, kampus 2 Ponpes Askhabul Kahfi Semarang telah memiliki 7 gedung yang masing-masing diberi nama sesuai para pemimpin serta ilmuwan muslim pada masa lalu. Sesuai slogan santri askhabul Kahfi, dimana mereka diharapkan menjadi “pemimpin-pemimpin masa depan dan cendekiawan muslim”. Yaitu :</p>
							</div>
							  
							<div class="container">
							  <ul class="list-group list-group-flush">
							    <li class="list-group-item">Gedung Abu Bakar, khalifah pertama dalam sejarah islam sekaligus shahabat terdekat Nabi saw.</li>
							    <li class="list-group-item">Gedung Imam Syafii, Ulama fiqh serta imam madzhab yang dianut umat muslim Indonesia.
							</li>
							    <li class="list-group-item">Gedung Al Khwarizmi, Ilmuwan muslim penemu “angka nol” dan algoritma matematika.
							</li>
							    <li class="list-group-item">Gedung Imam Thobari, Ulama ahli tafsir pengarang kitab tafsir tertua dalam sejarah islam.
							</li>
							    <li class="list-group-item">Gedung Ibnu Anfas, ilmuwan muslim asal Andalusia (Spanyol) yang menemukan konsep pesawat terbang sekaligus “manusia terbang pertama” dalam sejarah.
							</li>
							    <li class="list-group-item">Gedung Imam Bukhory, Ulama ahli hadits paling shahih.
							</li>
							    <li class="list-group-item">Gedung Imam Muslim, Ulama ahli hadits shahih selain imam Bukhori
							</li>

							  </ul>
							</div>

							<div class="section-top-border">
								<h3 class="mb-30">Fasilitas</h3>
								<div class="row">
									<div class="col-md-7">
										<img src="{{asset('/frontend')}}/gedung/kampus2c.jpg" alt="" class="img-fluid">
									</div>
									<div class="col-md-5 mt-sm-20 left-align-p">
										- 4 gedung asrama berlantai empat.
										<br>- 50 kamar reguler dan 10 kamar non reguler
										<br>- 35 ruang kelas 
										<br>- Masjid 2 lantai
										<br>- Halaman luas
										<br>- 42 unit kamar mandi dan toilet 
										<br>- air bersih artetis
										<br>- perpustakaan
										<br>- lab komputer
										<br>- lab otomotif
										<br>- sarana olahraga
										<br>- studio musik
										<br>- Aska mart (minimarket)
										<br>- kantin
										<br>- Warnet
										<br>- Smartel (Telepon umum)
										<br>- Laundry
									</div>
								</div>
							</div>
						</div>

						<div class="jq-tab-content" data-tab="3">
							<div>
								<img src="{{asset('/frontend')}}/gedung/kampus3.jpg" alt="" class="img-fluid">
							</div>
							<br>
							Masih dalam naungan pengasuh yang sama, santri putri Ponpes Askhabul kahfi berdomisili terpisah dari santri putra. Masuk wilayah kelurahan Karangmalang, Mijen Kota Semarang, kampus 3 ponpes Askhabul Kahfi hanya berjarak +- 100 m dari kampus utama. Lokasinya yang sejuk dekat pepohonan rindang menambah kenyamanan santri putri yang bermukim disini.
							
							<div class="section-top-border">
								<div class="row">
									<div class="col-md-5">
										<img src="{{asset('/frontend')}}/gedung/kampus3a.jpg" class="img-fluid">
									</div>
									<div class="col-md-7 mt-sm-20 left-align-p">
										<p>
											Kampus 3 ini tergolong baru karena dibangun pada 2016 dimana sebelumnya santri putri menempati kampus 1. Setelah mereka berjuang tuk berdesak-desakan, alhamdulillah sekarang santri putri bisa menempati tempat yang lebih longgar, luas dan nyaman.
										</p>
									</div>
								</div>
							</div>

							Kampus 3 Ponpes Askhabul kahfi memiliki 6 gedung yang masing-masing memiliki 4 lantai. Meliputi gedung Khodijah, Aisyah, Maryam, Masyitoh, Robiah al adawiyah, dan gedung Hj Shofiatun. Sebagaimana komplek putra, gedung-gedung tersebut diberi nama sesuai para wanita-wanita pembesar islam yang dipastikan masuk surga. Dengan harapan Tabarukan semoga santri santri Askhabul kahfi bisa mengikuti jejak-jejak mereka.
							<br><br>

							<div class="container">
							  <h4>Fasilitas :</h4>
							</div>
							  
							<div class="container">
							  <ul class="list-group list-group-flush">
							    <li class="list-group-item"> - 3 gedung asrama berlantai empat</li>
							    <li class="list-group-item"> - 96 kamar reguler dan 14 kamar non reguler dengan daya tampung mencapai 2000an santri putri</li>
							    <li class="list-group-item"> - 35 ruang kelas </li>
							    <li class="list-group-item"> - Musholla 2 lantai</li>
							    <li class="list-group-item"> - Halaman luas</li>
							    <li class="list-group-item"> - 40 unit kamar mandi dan toilet </li>
							    <li class="list-group-item"> - air bersih artetis</li>
							    <li class="list-group-item"> - perpustakaan</li>
							    <li class="list-group-item"> - lab komputer</li>
							    <li class="list-group-item"> - sarana olahraga</li>
							    <li class="list-group-item"> - studio musik</li>
							    <li class="list-group-item"> - Aska mart (minimarket)</li>
							    <li class="list-group-item"> - kantin</li>
							    <li class="list-group-item"> - Laundry</li>
							  </ul>
							</div>
		
							<div class="section-top-border">
								<div class="row">
									<div class="col-md-5">
										<img src="{{asset('/frontend')}}/gedung/kampus3b.jpg" class="img-fluid">
									</div>
									<div class="col-md-7 mt-sm-20 right-align-p">
										<p>
											Meski berbeda lokasi, aktivitas santri putri tidak jauh berbeda dengan santri putra. Mulai dari Bandongan bakda subuh, sekolah di pagi harinya, Sholat berjamaah, hingga madrasah dilaksanakan di dalam lingkungan komplek putri. Bahkan ruang auditorium utama tempat berlangsungnya kegiatan-kegiatan akbar berlokasi di kampus 3 ini.
										</p>
									</div>
								</div>
							</div>
						</div>

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
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%" alt="">
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('mtsaskhabulkahfi')}}">
							<h3><b>MTs Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%" alt="">
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('smkaskhabulkahfi')}}">
							<h3><b>SMK Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%" alt="">
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('maaskhabulkahfi')}}">
							<h3><b>MA Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%" alt="">
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('mahadalyaskhabulkahfi')}}">
							<h3><b>Mahad Aly Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%" alt="">
					</li>

				</ul>
				<a href="#" class="primary-btn text-uppercase">Enroll the course</a>
			</div>
		</div>
	</div>	
</section>
<!-- End course-details Area -->

@stop