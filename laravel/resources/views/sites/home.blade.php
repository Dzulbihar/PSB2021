@extends('layouts.frontend')

@section('content')

<!-- start banner Area -->
<section class="banner-area relative" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">
	<div class="overlay overlay-bg"></div>	
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-between">
			<div class="banner-content col-lg-9 col-md-12">

				<h1 class="text-uppercase">
					{{config('sekolah.welcome_message')}}			
				</h1>

				<p class="pt-10 pb-10">
					{{config('sekolah.sub_welcome_message')}}
				</p>
				<a href="{{config('sekolah.welcome_message_button_url')}}" class="primary-btn text-uppercase">{{config('sekolah.welcome_message_button_text')}}</a>

			</div>										
		</div>
	</div>					
</section>
<!-- End banner Area -->

<!-- Start feature Area -->
<section class="feature-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="single-feature">

					<div class="title">
						<h4>{{config('sekolah.home_feature_column_1_title')}}</h4>
					</div>

					<div class="desc-wrap">
						<p>
							{{config('sekolah.home_feature_column_1_content')}}
						</p>
						<a href="{{config('sekolah.home_feature_column_1_link_url')}}">{{config('sekolah.home_feature_column_1_link_text')}}</a>									
					</div>

				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-feature">

					<div class="title">
						<h4>{{config('sekolah.home_feature_column_2_title')}}</h4>
					</div>

					<div class="desc-wrap">
						<p>
							{{config('sekolah.home_feature_column_2_content')}}
						</p>
						<a href="{{config('sekolah.home_feature_column_2_link_url')}}">{{config('sekolah.home_feature_column_2_link_text')}}</a>									
					</div>

				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-feature">

					<div class="title">
						<h4>{{config('sekolah.home_feature_column_3_title')}}</h4>
					</div>
					<div class="desc-wrap">
						<p>
							{{config('sekolah.home_feature_column_3_content')}}
						</p>
						<a href="{{config('sekolah.home_feature_column_3_link_url')}}">{{config('sekolah.home_feature_column_3_link_text')}}</a>									
					</div>

				</div>
			</div>												
		</div>
	</div>	
</section>
<!-- End feature Area -->

<!-- Start popular-course Area -->
<section class="popular-course-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">LEMBAGA PENDIDIKAN</h1>
					<p>Sejarah Lembaga resmi di Ponpes Askhabul Kahfi.</p>
				</div>
			</div>
		</div>						
		<div class="row">
			<div class="active-popular-carusel">

				<div class="single-popular-carusel">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>	
							<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" alt="">
						</div>
						<div class="meta d-flex justify-content-between">
							<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
							<p>by: santri aska</p>
						</div>									
					</div>
					<div class="details">
						<a href="{{url('smpaskhabulkahfi')}}">
							<h4>
								SMP 1 Askhabul Kahfi
							</h4>
						</a>
						<p>
							Sekolah menengah Pertama yang memadukan kurikulum dari kementrian Pendidikan dengan tambahan dua jam pelajaran pesantren setiap harinya.										
						</p>
					</div>
				</div>	

				<div class="single-popular-carusel">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>	
							<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" alt="">
						</div>
						<div class="meta d-flex justify-content-between">
							<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
							<p>by: santri aska</p>
						</div>									
					</div>
					<div class="details">
						<a href="{{url('smpaskhabulkahfi')}}">
							<h4>
								SMP 2 Askhabul Kahfi
							</h4>
						</a>
						<p>
							Sekolah menengah Pertama yang memadukan kurikulum dari kementrian Pendidikan dengan tambahan dua jam pelajaran pesantren setiap harinya.										
						</p>
					</div>
				</div>	

				<div class="single-popular-carusel">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>	
							<img class="img-fluid" src="{{asset('/frontend')}}/img/logomts.jpg" alt="">
						</div>
						<div class="meta d-flex justify-content-between">
							<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
							<p>by: santri aska</p>
						</div>									
					</div>
					<div class="details">
						<a href="{{url('mtsaskhabulkahfi')}}">
							<h4>
								MTs Askhabul Kahfi
							</h4>
						</a>
						<p>
							Madrasah Tsanawiyah dengan kajian agama lebih mendalam ala pesantren salaf dengan kitab kuning sebagai rujukan utamanya. (Program Unggulan)										
						</p>
					</div>
				</div>	

				<div class="single-popular-carusel">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>	
							<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmk.jpg" alt="">
						</div>
						<div class="meta d-flex justify-content-between">
							<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
							<p>by: santri aska</p>
						</div>									
					</div>
					<div class="details">
						<a href="{{url('smkaskhabulkahfi')}}">
							<h4>
								SMK TKJ (komputer) Askhabul Kahfi
							</h4>
						</a>
						<p>
							Sekolah vokasi berbasis Teknologi yang memadukan kurikulum kemdikbud dan kurikulum pesantren. Samapai saat ini memiliki dua jurusan yaitu Teknik Komputer Jaringan dan Teknik Kendaraan Ringan Otomotif.										
						</p>
					</div>
				</div>

				<div class="single-popular-carusel">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>	
							<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmk.jpg" alt="">
						</div>
						<div class="meta d-flex justify-content-between">
							<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
							<p>by: santri aska</p>
						</div>									
					</div>
					<div class="details">
						<a href="{{url('smkaskhabulkahfi')}}">
							<h4>
								SMK TKR (mesin) Askhabul Kahfi
							</h4>
						</a>
						<p>
							Sekolah vokasi berbasis Teknologi yang memadukan kurikulum kemdikbud dan kurikulum pesantren. Samapai saat ini memiliki dua jurusan yaitu Teknik Komputer Jaringan dan Teknik Kendaraan Ringan Otomotif.										
						</p>
					</div>
				</div>	

				<div class="single-popular-carusel">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>	
							<img class="img-fluid" src="{{asset('/frontend')}}/img/logoma.jpg" alt="">
						</div>
						<div class="meta d-flex justify-content-between">
							<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
							<p>by: santri aska</p>
						</div>									
					</div>
					<div class="details">
						<a href="{{url('maaskhabulkahfi')}}">
							<h4>
								MA Askhabul Kahfi
							</h4>
						</a>
						<p>
							Madrasah Aliyah khusus, program lanjutan dari MTs Takhasus Askhabul Kahfi.Tetap fokus pada kajian kitab kuning ala pesantren salaf demi mencetak generasi unggul dalam pengetahuan agama.										
						</p>
					</div>
				</div>

				<div class="single-popular-carusel">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>	
							<img class="img-fluid" src="{{asset('/frontend')}}/img/logomahadaly.jpeg" alt="">
						</div>
						<div class="meta d-flex justify-content-between">
							<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
							<p>by: santri aska</p>
						</div>									
					</div>
					<div class="details">
						<a href="{{url('mahadalyaskhabulkahfi')}}">
							<h4>
								Perguruan Tinggi Mahad Aly Askhabul Kahfi
							</h4>
						</a>
						<p>
							Lembaga pendidikan tinggi pesantren setingkat S1 dengan program studi Tafsir wa ulumuhu (Tafsir ilmu tafsir) dengan gelar S.Ag.										
						</p>
					</div>
				</div>	

				<div class="single-popular-carusel">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>	
							<img class="img-fluid" src="{{asset('/frontend')}}/img/logorm.jpg" alt="">
						</div>
						<div class="meta d-flex justify-content-between">
							<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
							<p>by: santri aska</p>
						</div>									
					</div>
					<div class="details">
						<a href="{{url('pesantrensalaf')}}">
							<h4>
								Pesantren Salaf Roudlotul Muttaqin
							</h4>
						</a>
						<p>
							Pesantren Salaf atau Pondok Pesantren Salafiyah adalah sebutan bagi pondok pesantren yang mengkaji "kitab-kitab kuning" (kitab kuno). Pesantren salaf identik dengan pesantren tradisional (klasik) yang berbeda dengan pesantren modern dalam hal metode pengajaran dan infrastrukturnya										
						</p>
					</div>
				</div>	
				<div class="single-popular-carusel">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>	
							<img class="img-fluid" src="{{asset('/frontend')}}/img/logotahfidz.jpg" alt="">
						</div>
						<div class="meta d-flex justify-content-between">
							<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
							<p>by: santri aska</p>
						</div>									
					</div>
					<div class="details">
						<a href="{{url('pesantrentahfidz')}}">
							<h4>
								Pesantren Tahfidz
							</h4>
						</a>
						<p>
							Pondok Pesantren Tahfidz Al-Qur'an ialah sebuah yayasan yang didalamnya secara garis besar untuk belajar menghafal Al-Qur'an dan tentunya pembelajarannya lebih ke Al-Qur'an										
						</p>
					</div>
				</div>							
			</div>
		</div>
	</div>	
</section>
<!-- End popular-course Area -->


<!-- Start search-course Area -->
<section class="search-course-area relative" id="home" style="background: url('{{config('sekolah.search_course')}}'); ">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6 col-md-6 search-course-left">

				<h1 class="text-white">
					Ayo Mondok <br>
					di Pondok Pesantren Askhabul Kahfi
				</h1>
				<p>
					di Jl. Raya Cangkiran-Gunungpati km.03, Polaman, Kec. Mijen, Kota Semarang, Jawa Tengah 50216
				</p>

				<div class="row details-content">

					<div class="col single-detials">
						<span class="lnr lnr-graduation-hat"></span>
						<a href="#"><h4>Alim</h4></a>		
						<p>
							Orang yang memiliki keahlian dalam memahami ilmu agama Islam.
						</p>						
					</div>

					<div class="col single-detials">
						<span class="lnr lnr-smile"></span>
						<a href="#"><h4>Sholeh</h4></a>		
						<p>
							Orang yang memenuhi hak-hak Allah dan hak-hak manusia.
						</p>						
					</div>	

					<div class="col single-detials">
						<span class="lnr lnr-diamond"></span>
						<a href="#"><h4>Sugeh</h4></a>		
						<p>
							Orang yang hidupnya serba cukup dan tau caranya menggunakan harta.
						</p>						
					</div>					

				</div>
			</div>

			<div class="col-lg-4 col-md-6 search-course-right section-gap">
				<img src="{{asset('/frontend')}}/img/aska.png" width="100%" alt="">
			</div>
		</div>
	</div>	
</section>
<!-- End search-course Area -->


<!-- Start upcoming-event Area 
<section class="upcoming-event-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Acara Mendatang dari Institut kami</h1>
					<p>Jika Anda seorang fanatik astronomi yang serius seperti kebanyakan dari kita</p>
				</div>
			</div>
		</div>								
		<div class="row">
			<div class="active-upcoming-event-carusel">
				<div class="single-carusel row align-items-center">
					<div class="col-12 col-md-6 thumb">
						<img class="img-fluid" src="{{asset('/frontend')}}/img/e1.jpg" alt="">
					</div>
					<div class="detials col-12 col-md-6">
						<p>25th February, 2018</p>
						<a href="#"><h4>The Universe Through
						A Child S Eyes</h4></a>
						<p>
							For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
						</p>
					</div>
				</div>
				<div class="single-carusel row align-items-center">
					<div class="col-12 col-md-6 thumb">
						<img class="img-fluid" src="{{asset('/frontend')}}/img/e2.jpg" alt="">
					</div>
					<div class="detials col-12 col-md-6">
						<p>25th February, 2018</p>
						<a href="#"><h4>The Universe Through
						A Child S Eyes</h4></a>
						<p>
							For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
						</p>
					</div>
				</div>	
				<div class="single-carusel row align-items-center">
					<div class="col-12 col-md-6 thumb">
						<img class="img-fluid" src="{{asset('/frontend')}}/img/e1.jpg" alt="">
					</div>
					<div class="detials col-12 col-md-6">
						<p>25th February, 2018</p>
						<a href="#"><h4>The Universe Through
						A Child S Eyes</h4></a>
						<p>
							For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
						</p>
					</div>
				</div>	
				<div class="single-carusel row align-items-center">
					<div class="col-12 col-md-6 thumb">
						<img class="img-fluid" src="{{asset('/frontend')}}/img/e1.jpg" alt="">
					</div>
					<div class="detials col-12 col-md-6">
						<p>25th February, 2018</p>
						<a href="#"><h4>The Universe Through
						A Child S Eyes</h4></a>
						<p>
							For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
						</p>
					</div>
				</div>
				<div class="single-carusel row align-items-center">
					<div class="col-12 col-md-6 thumb">
						<img class="img-fluid" src="{{asset('/frontend')}}/img/e2.jpg" alt="">
					</div>
					<div class="detials col-12 col-md-6">
						<p>25th February, 2018</p>
						<a href="#"><h4>The Universe Through
						A Child S Eyes</h4></a>
						<p>
							For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
						</p>
					</div>
				</div>	
				<div class="single-carusel row align-items-center">
					<div class="col-12 col-md-6 thumb">
						<img class="img-fluid" src="{{asset('/frontend')}}/img/e1.jpg" alt="">
					</div>
					<div class="detials col-12 col-md-6">
						<p>25th February, 2018</p>
						<a href="#"><h4>The Universe Through
						A Child S Eyes</h4></a>
						<p>
							For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
						</p>
					</div>
				</div>																						
			</div>
		</div>
	</div>	
</section>
 End upcoming-event Area -->
<!-- ____________________________________________________________________________________________________________________________ -->

			<!-- Start events-list Area -->
			<section class="events-list-area section-gap event-page-lists">
				<div class="container">

					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Polemik Masyarakat <br> Pesantren Menjawab</h1>
								<p>Pondok Pesantren Askhabul Kahfi | Polaman Mijen Kota Semarang</p>
							</div>
						</div>
					</div>

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
										SEMARANG,- Ribuan santri, wali santri dan masyarakat mengikuti peringatan Mauludan di Ponpes Askhabul Kahfi Mijen Kota Semarang. Dal...
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
<!-- ____________________________________________________________________________________________________________________ -->
						<a href="{{url('polemik')}}" class="text-uppercase primary-btn mx-auto mt-40">Load more Pesantren Menjawab</a>		
					</div>
				</div>	
			</section>
			<!-- End events-list Area -->

<!-- ____________________________________________________________________________________________________________________ -->
<!-- ____________________________________________________________________________________________________________________ -->

<!-- Start review Area -->
<section class="review-area section-gap relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row">
			<div class="active-review-carusel">

				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="#"><h4>Asrama</h4></a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p>
						Semua santri wajib mukim di pesantren. Menjadikan mereka lebih mandiri.
					</p>
				</div>

				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="#"><h4>Pendidikan</h4></a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p>
						Lembaga pendidikan berkualitas yang telah diakui secara nasional.
					</p>
				</div>

				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="#"><h4>Alim Ilmu Agama</h4></a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p>
						Studi kitab kuning yang mendalam dengan wawasan agama yang luas.
					</p>
				</div>	

				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="#"><h4>Teknologi</h4></a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p>
						Tidak hanya agama, santri juga dituntut sesuai perkembangan zaman.
					</p>
				</div>

				<div class="single-review item">
					<img src="{{asset('/frontend')}}/img/r1.png" alt="">
					<div class="title justify-content-start d-flex">
						<a href="#"><h4>Tasty Food</h4></a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p>
						Makan 3 kali sehari dengan menu bergizi yang menunjang kecerdasan anak.
					</p>
				</div>

				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="#"><h4>Terjangkau</h4></a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p>
						Biaya pendidikan yang relatif murah namun tidak murahan.
					</p>
				</div>

				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="#"><h4>Prestasi</h4></a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p>
						Prestasi yang berlimpah dari tingkat daerah hingga nasional.
					</p>
				</div>																												
				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="#"><h4>Barokah</h4></a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p>
						Terbiasa ibadah dan mengaji tuk jadi generasi sholih sholihah.
					</p>
				</div>

			</div>
		</div>
	</div>	
</section>
<!-- End review Area -->	

<!-- Start cta-one Area -->
<section class="cta-one-area relative section-gap" id="home" style="background: url('{{config('sekolah.cta_one')}}'); ">
	<div class="container">
		<div class="overlay overlay-bg"></div>
		<div class="row justify-content-center">
			<div class="wrap">
				<h1 class="text-white">Profil Ponpes Askhabul Kahfi Kota Semarang</h1>
				<p>
					Ponpes Askhabul Kahfi adalah salah satu pondok pesantren terbesar di jawa tengah. terletak di jalan Cangkiran-Gunungpati KM.3, Kelurahan Polaman, Kecamatan Mijen, Kota Semarang, Jawa Tengah, Indonesia
				</p>
				<a class="primary-btn wh" href="{{url('profilelembaga')}}">Read More</a>								
			</div>					
		</div>
	</div>	
</section>
<!-- End cta-one Area -->

<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Berita Terbaru</h1>
				</div>
			</div>
		</div>					

		<div class="row">

<!-- looping berita di controller ke home -->	
			@foreach($posts as $post)

				<div class="col-lg-3 col-md-6 single-blog">
					<div class="thumb">
						<img class="img-fluid" src="{{$post->thumbnail()}}" alt="">
					</div>
				<p class="meta">{{$post->created_at->format('d M Y')}}  |  by <a href="#">{{$post->user->name}}</a></p>
					<a href="blog-single.html">
						<h5>{{$post->title}}</h5>
					</a>
					
					{!!$post->content!!}
					
				<a href="{{route('site.single.post',$post->slug)}}" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>							
				</div>	

			@endforeach
			
		</div>

	</div>	
</section>
<!-- End blog Area -->			




@stop