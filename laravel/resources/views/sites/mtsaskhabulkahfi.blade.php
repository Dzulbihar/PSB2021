@extends('layouts.frontend')

@section('content')

<section class="banner-area relative about-banner" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					MTS ASKHABUL KAHFI				
				</h1>	
				<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('mtsaskhabulkahfi')}}"> MTs Askhabul Kahfi</a></p>
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
					<h1 class="mb-10">MTS TAKHASUS ASKHABUL KAHFI</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 left-contents">
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/mts.jpg">
				</div>
				<div class="jq-tab-wrapper" id="horizontalTab">

					Sesuai dengan namanya “Program Khusus” mempunyai ciri khusus, yaitu memadukan kurikulum Kementerian Agama dengan Kurikulum kekhususan yaitu Kurikulum dari Pondok Pesantren Salaf. Hal ini membedakan dengan MTs pada umumnya karena MTs Askhabul Kahfi langsung merujuk pada kitab kitab klasik ulama salaf dalam pendalaman ilmu agamanya.
					<br><br>
					Berdiri pada 2012, didirikannya MTs Askhabul kahfi bermula dari keinginan pengasuh untuk menumbhkan bibit-bibit unggul menjadi generasi alim ilmu agama. Maka dari itu, disyaratkan dalam pendaftaran MTs, secara akademis paling tidak 5 besar di sekolah sebelumnya. Hal ini membuahkan hasil dengan masuknya MTs Askhabul Kahfi sebagai 50 besar sekolah dengan Indeks Integritas Ujian Nasional (UN) tertinggi pada angkatan pertamanya. Penghargaan ditandatangani langsung oleh Menteri Pendidikan kala itu, Bapak Anies Baswedan.
					<br><br>
					<h4>Visi</h4>
					- MENGHANTARKAN MURID BERPRESTASI, SANTUN, BERAKHLAQUL KARIMAH YANG DILANDASI IMAN DAN TAQWA.
					<br><br>
					<h4>Misi</h4>
					- Menerapkan nilai-nilai keagamaan dalam seluruh aspek kegiatan. <br>
					- Menciptakan suasana belajar yang efektif dan efesien. <br>
					- Mengintegritaskan pendidikan agama ke dalam sains. <br>
					- Melakukan pembelajaran kurikulum formal, pengajian kitab,   bahasa dan ketrampilan secara optimal dan menyeluruh. <br>
					- Bimbingan hafalan dan pemahaman Ayat-ayat Al Qur’an dan hadist. <br>
					- Meningkatkan penghayatan dan pemantapan terhadap ajaran   agama dalam ibadah, syariat, tasawuf dan akidah akhlaq. <br>
					- Mengembangkan keunggulan melalui kedisiplinan, keuletan,  kemandirian, kreatifitas, kejujuran dan kepedulian terhadap lingkungan. 
					<br><br>
					<h4>Tujuan</h4>
					- Menghantarkan anak menjadi sholih/sholikhah yang intelektual
					<br><br><br>

					<h3>Kurikulum MTs Takhasus Askhabul Kahfi</h3>
					<br>
					<table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">Kelas 7</th>
					      <th scope="col">Kelas 8</th>
					      <th scope="col">Kelas 9</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>Al Qur’an (Tartil-Tahfidz)</td>
					      <td>Al Qur’an (Tartil-Tahfidz)</td>
					      <td>Al Qur’an (Tartil-Tahfidz)</td>
					    </tr>
					    <tr>
					      <td>Tauhid   (Aqoid Al-Dinniah 1-2)</td>
					      <td>Tauhid (Aqoid Al-Dinniah 3)</td>
					      <td>Tauhid (Tijan Durori)</td>
					    </tr>
					    <tr>
					      <td>Nahwu  (Jurumiyyah)</td>
					      <td>Nahwu (Sulam Syibyan)</td>
					      <td>Nahwu (Imriti)</td>
					    </tr>
					    <tr>
					      <td>Shorof   (Amtsilatu At-tasrifiyah)</td>
					      <td>Shorof (Al Maufud)</td>
					      <td>Shorof  ( I’lal )</td>
					    </tr>
					    <tr>
					      <td>Fiqih     (Safinatun Najah)</td>
					      <td>Fiqih (Minhajul Qowim)</td>
					      <td>Fiqih (Fatkhul Qorib/Taqrib)</td>
					    </tr>
					    <tr>
					      <td>Akhlaq  (Taesirul Kholaq)</td>
					      <td>Akhlaq (Minahus Tsaniyah)</td>
					      <td>Akhlaq (Nashoikhul Ibad)</td>
					    </tr>
					    <tr>
					      <td>Tajwid  (Syifaul Jinan)</td>
					      <td>Tajwid (Tuhfatul Atfal)</td>
					      <td>Tajwid (Mustholahut Tajwid)</td>
					    </tr>
					    <tr>
					      <td>Sejarah Islam (Kholasoh Juz 1)</td>
					      <td>Sejarah Islam (Kholasoh Juz 2)</td>
					      <td>Sejarah Islam (Kholasoh Juz 3)</td>
					    </tr>
					    <tr>
					      <td>Aswaja</td>
					      <td></td>
					      <td>Hadis (Minhatul Mughis)</td>
					    </tr>
					  </tbody>
					</table>
					<br><br>

					<h4>Syarat Akademis masuk di MTs Askhabul Kahfi</h4>
						<li>Minimal 8.00 nilai rata-rata UN/UAMBN</li>	
						<li>Makimal Peringkat kelima Kelas 4, 5 dan 6 (SD/MI)</li>	
						<li>Lulus Psikotes</li>		

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