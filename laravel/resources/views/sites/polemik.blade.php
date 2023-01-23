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
				<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('polemik')}}"> Polemik Masyarakat Pesantren Menjawab</a></p>
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
					<h1 class="mb-10">Polemik Masyarakat <br> Pesantren Menjawab</h1>
				</div>
			</div>
		</div>
		<div class="row">

				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/polemik/abah.jpeg" alt="">
				</div>
			
			<!-- Start events-list Area -->
			<section class="events-list-area section-gap event-page-lists">
				<div class="container">
					<div class="row align-items-center">
<!-- __16__________________________________________________________________________________________________________________ -->
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik16.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>30 Juli 2020</p>
									<a href="{{url('polemik16')}}"><h4>Kisah Nabi Ibrahim</h4></a>
									<p>
										Kata Ibrahim di sebut dalam Al Qur`an sebanyak 69 kali di 25 surat. Kata Ibrahim adalah isim...
									</p>
								</div>
							</div>
						</div>
<!-- __15__________________________________________________________________________________________________________________ -->
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik5.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>5 Mei 2020</p>
									<a href="{{url('polemik15')}}"><h4>Syarat Sah Puasa Ramadhan</h4></a>
									<p>
										Setiap ibadah dalam agama Islam, termasuk puasa Romadhon akan di anggap sah apabila telah  terpenuhi semua syaratnya. Ibadah puasa Romad...
									</p>
								</div>
							</div>
						</div>
<!-- ___14_________________________________________________________________________________________________________________ -->
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik14.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>27 April 2020</p>
									<a href="{{url('polemik14')}}"><h4>Sejarah singkat puasa dan pengertiannya</h4></a>
									<p>
										Menurut keterangan dalam Kitab Fiqhul Islam wa adillatihi, di fardhukannya puasa Romadhon yaitu satu setengah tahun setelah di alihka...
									</p>
								</div>
							</div>
						</div>
<!-- ____13________________________________________________________________________________________________________________ -->
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik13.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25 April 2020</p>
									<a href="{{url('polemik13')}}"><h4>Covid dan Ramadhan</h4></a>
									<p>
										 Sumber : Jawa Pos Radar Semarang edisi sabtu, 25 April 2020 M / 02 Ramadhan 1441 H                         Covid 19 a...
									</p>
								</div>
							</div>
						</div>
<!-- ___12_________________________________________________________________________________________________________________ -->
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik12.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>16 Januari 2020</p>
									<a href="{{url('polemik12')}}"><h4>Akhlaq | Mukhasabah wat Tarbiyah dalam Rangka Menyongsong Tahun Baru 2020</h4></a>
									<p>
										TRIBUNJATENG.COM, SEMARANG - Dalam rangka menyongsong tahun baru 2020 M, pengasuh Ponpes Askhabul Kahfi KH. Masruchan Bisri mengajak selu...
									</p>
								</div>
							</div>
						</div>
<!-- _____11_______________________________________________________________________________________________________________ -->
						<div class="col-lg-6" pb-30>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik11.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>21 November 2019</p>
									<a href="{{url('polemik11')}}"><h4>SEJARAH KELAHIRAN NABI MUHAMMAD SAW</h4></a>
									<p>
										SEMARANG,- Ribuan santri, wali santri dan masyarakat mengikuti peringatan Mauludan di Ponpes Askhabul Kahfi Mijen Kota Semarang. Dal...
									</p>
								</div>
							</div>
						</div>
<!-- ____10________________________________________________________________________________________________________________ -->
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik10.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>31 Oktober 2019</p>
									<a href="{{url('polemik10')}}"><h4>NASEHAT DARI PONPES ASKHABUL KAHFI SEMARANG</h4></a>
									<p>
										Pasal 31 Ayat 3 UUD 1945 berbunyi : "Pemerintah mengusahakan dan menyelenggarakan satu sistem pendidikan nasional, yang meningka...
									</p>
								</div>
							</div>
						</div>
<!-- ____9________________________________________________________________________________________________________________ -->
						<div class="col-lg-6">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik9.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>23 Oktober 2019</p>
									<a href="{{url('polemik09')}}"><h4>PERINGATAN DARI PENGASUH PONPES ASKHABUL KAHFI</h4></a>
									<p>
										Nabi bersabda : " apabila suatu perkara / urusan di serahkan kepada  yang bukan ahlinya, maka tunggulah saat kerusakannya ( yang m...
									</p>
								</div>
							</div>
						</div>	
<!-- ___8_________________________________________________________________________________________________________________ -->

						<div class="col-lg-6">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik8.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>13 Oktober 2019</p>
									<a href="{{url('polemik08')}}"><h4>Tafsir Al Fatihah | Selamatan dan Pembukaan Ma'had Aly Askhabul Kahfi</h4></a>
									<p>
										TRIBUNJATENG.COM, SEMARANG -  Pada malam Ahad Legi, tanggal 12 Oktober 2019 / 13 Muharram 1441 H resmi dibuka dan dimulai rangkaian kegia...
									</p>
								</div>
							</div>
						</div>	
<!-- ____7________________________________________________________________________________________________________________ -->
						<div class="col-lg-6">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik7.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>18 Agustus 2019</p>
									<a href="{{url('polemik07')}}"><h4>Sejarah Indonesia Sebelum dan Menjelang Kemerdekaan</h4></a>
									<p>
										TRIBUNJATENG.COM, SEMARANG - Sekitar 2.500 santri Pondok Pesantren Askhabul Kahfi dan Pondok Pesantren Roudlotul Muttaqin berkumpul di ha...
									</p>
								</div>
							</div>
						</div>	
<!-- ___6_________________________________________________________________________________________________________________ -->
						<div class="col-lg-6">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik6.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>02 Agustus 2019</p>
									<a href="{{url('polemik06')}}"><h4>Tafsir 5 ayat pertama Alquran | Muhasabah Watarbiyah Pertama Tahun Ajaran 2019-2020</h4></a>
									<p>
										Untuk meningkatkan semangat belajar para santri maka dalam acara ini pengasuh ponpes Askhabul Kahfi KH. Masruchan Bisri menerangkan tafsir...
									</p>
								</div>
							</div>
						</div>	
<!-- ____5________________________________________________________________________________________________________________ -->
						<div class="col-lg-6">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik5.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>19 Juli 2019</p>
									<a href="{{url('polemik05')}}"><h4>Sejarah Askhabul Kahfi | Pembekalan Santri Baru 2019/2020</h4></a>
									<p>
										Pembekalan Santri Baru (PSB) Pondok Pesantren Askhabul Kahfi dilaksanakan di Auditorium Kampus 3 Pondok Pesantren Askhabul Kahfi Semaran...
									</p>
								</div>
							</div>
						</div>	
<!-- ___4_________________________________________________________________________________________________________________ -->
						<div class="col-lg-6">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik4.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>10 Mei 2019</p>
									<a href="{{url('polemik04')}}"><h4>Makna Puasa dan hukumnya | Muhasabah wa tarbiyah menyambut bulan ramadhan 1440 H</h4></a>
									<p>
										Muhasabah wat Tarbiyah menyambut bulan Romadhon 1440 H di Pondok Pesantren Askhabul Kahfi dilaksanakan di Kampus 2 Ponpes Askhabul Kahfi,...
									</p>
								</div>
							</div>
						</div>	
<!-- ____3________________________________________________________________________________________________________________ -->
						<div class="col-lg-6">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik3.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>03 Mei 2019</p>
									<a href="{{url('polemik03')}}"><h4>Tujuan pendidikan | Ponpes Askhabul Kahfi Semarang Peringati Hari Pendidikan Nasional</h4></a>
									<p>
										Peringatan Hari Pendidikan Nasional Pondok Pesantren Askhabul Kahfi dilaksanakan di Aula Utama Pondok Pesantren Askhabul Kahfi, Kelurahan...
									</p>
								</div>
							</div>
						</div>	
<!-- ____2________________________________________________________________________________________________________________ -->
						<div class="col-lg-6">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik2.png" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>21 Desember 2018</p>
									<a href="{{url('polemik02')}}"><h4>Lima Kriteria Umat Nabi Muhammad saw</h4></a>
									<p>
										Muhasabah wat Tarbiyah di Pondok Pesantren Askhabul Kahfi merupakan suatu kegiatan pesantren yang bersifat situasional, termasuk menjelang...
									</p>
								</div>
							</div>
						</div>	
<!-- ____1________________________________________________________________________________________________________________ -->
						<div class="col-lg-6">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('/frontend')}}/polemik/polemik1.png" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>27 Juli 2018</p>
									<a href="{{url('polemik01')}}"><h4>VIDEO PENGAJIAN ABAH KH. MASRUCHAN</h4></a>
									<p>
										VIDEO PENGAJIAN BELIAU  ABAH KH. MASRUCHAN  (PENGASUH) PONPES ASKHABUL KAHFI DOKUMENTASI AWAL BERDIRI SEJARAH NABI MUHA...
									</p>
								</div>
							</div>
						</div>	
<!-- ____________________________________________________________________________________________________________________ -->

					</div>
				</div>	
			</section>
			<!-- End events-list Area -->

			
		</div>
	</div>	
</section>
<!-- End course-details Area -->



@stop