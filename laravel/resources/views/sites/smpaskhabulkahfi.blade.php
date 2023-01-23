@extends('layouts.frontend')

@section('content')

<section class="banner-area relative about-banner" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					SMP ASKHABUL KAHFI				
				</h1>	
				<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('smpaskhabulkahfi')}}"> SMP Askhabul Kahfi</a></p>
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
					<h1 class="mb-10">SMP TERPADU ASKHABUL KAHFI</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 left-contents">
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/smp.jpg" >
				</div>
				<div class="jq-tab-wrapper" id="horizontalTab">

					<div class="jq-tab-content-wrapper">

						SMP Askhabul Kahfi merupakan lembaga pendidikan terpadu setingkat SLTP di di bawah naungan yayasan Nurul Ittifaq Semarang.  Terletak di pinggir jalan Cangkiran-gunungpati Km 3 Polaman mijen, Kota Semarang, SMP Askhabul Kahfi berdada dalam lingkungan kampus 2 Ponpes Askhabul Kahfi.
						<br><br>
						Pada awalnya bapak pengasuh hanya akan mendirikan SMK pada awal berdirinya Ponpes Askhabul Kahfi. Namun, atas permintaan banyak pihak akhirnya beliau mendirikan SMP Askhabul Kahfi. dan Alhamdulillah perizinan berjalan lancar meski mendadak. dan sekarang, tercatat terdapat +- 800 siswa baik putra maupun putri.
						<br><br>
						SMP Askhabul Kahfi mencetak generasi  sholih sholihah serta alim baik ilmu umum maupun ilmu agama. Hal ini dibangun melalui metode pengajaran SMP Askhabul Kahfi yag memadukan kurikulum Kemdikbud dengan kurikulum pesantren. Jadi, disamping mempelajari ilmu-ilmu semacam Matematika, IPA dan Bahasa Indonesia, di kelas para siswa juga mempelajari ilmu agama ala pesantren seperti Fiqih, Tasawuf dan Bahasa Arab.
						<br><br>
						Meskipun dalam satu lembaga, Santri Putra dan putri Askhabul kahfi terpisah dalam dua lokal. Kampus 2 bagi santri putra dan kampus 3 bagi santri putri. Baik dalam kelas, gedung sekolah, maupun asrama dan tempat mengaji.
						<br><br>

						<h3>Identitas Sekolah</h3>
							<br>
							<table class="table table-striped">
							  <tbody>
							    <tr>
							      <td>Nama</td>
							      <td>SMP ASKHABUL KAHFI</td>
							    </tr>
							    <tr>
							      <td>NPSN</td>
							      <td>20351840</td>
							    </tr>
							    <tr>
							      <td>Alamat</td>
							      <td>Jalan Cangkiran-Gunungpati km.03</td>
							    </tr>
							    <tr>
							      <td>Kode Pos</td>
							      <td>-</td>
							    </tr>
							    <tr>
							      <td>Kelurahan</td>
							      <td>Polaman</td>
							    </tr>
							    <tr>
							      <td>Kecamatan</td>
							      <td>Mijen</td>
							    </tr>
							    <tr>
							      <td>Kota</td>
							      <td>Semarang</td>
							    </tr>
							    <tr>
							      <td>Provinsi</td>
							      <td>Jawa Tengah</td>
							    </tr>
							    <tr>
							      <td>Status</td>
							      <td>Swasta</td>
							    </tr>
							    <tr>
							      <td>Waktu Penyelenggaraan</td>
							      <td>Pagi / 6 Hari</td>
							    </tr>
							    <tr>
							      <td>Jenjang Pendidikan</td>
							      <td>SMP</td>
							    </tr>        
							  </tbody>
							</table>
							<br>
						
						<h3>Dokumen dan Perizinan</h3>
							<br>
							<table class="table table-striped">
							  <tbody>
							    <tr>
							      <td>Nomor SK Pendirian</td>
							      <td>084/4543/2009</td>
							    </tr>
							    <tr>
							      <td>Tanggal SK Pendirian</td>
							      <td>25 Agustus 2009</td>
							    </tr>
							    <tr>
							      <td>Nomor SK Operasional</td>
							      <td>084/4543/2009</td>
							    </tr>
							    <tr>
							      <td>Tanggal SK Operasional</td>
							      <td>25 Agustus 2009</td>
							    </tr>
							    <tr>
							      <td>Akreditasi</td>
							      <td>B</td>
							    </tr>
							    <tr>
							      <td>Nomor SK Akreditasi</td>
							      <td>130/BAP-SM/X/2018</td>
							    </tr>   
							    <tr>
							      <td>Tanggal SK Akreditasi	</td>
							      <td>25 Oktober 2018</td>
							    </tr>     
							  </tbody>
							</table>





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