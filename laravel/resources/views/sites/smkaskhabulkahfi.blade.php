@extends('layouts.frontend')

@section('content')

<section class="banner-area relative about-banner" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					SMK ASKHABUL KAHFI				
				</h1>	
				<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('smkaskhabulkahfi')}}"> SMK Askhabul Kahfi</a></p>
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
					<h1 class="mb-10">SMK TERPADU ASKHABUL KAHFI</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 left-contents">
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/smk.jpg">
				</div>
				<div class="jq-tab-wrapper" id="horizontalTab">

					SMK Askhabul Kahfi Semarang adalah sekolah lanjutan tinggi yang berada dibawah yayasan Nurul Ittifaq, sekolah ini mencetak siswa menjadi tenaga terampil dan siap untuk bekerja atau berwirausaha secara mandiri. SMK Askhabul Kahfi berlokasi di Jalan Cangkiran-gunungpati km.3 Polaman, Kec Mijen, Semarang.
					<br><br>
					Dalam Pembelajarannya, SMK Askhabul Kahfi memadukan kurikulum Dinas Pendidikan dan kurikulum pesantren. Sehingga disamping belajar pelajaran dan teknik sebagaimana sekolah-sekolah pada umumnya, Santri SMK Askhabul Kahfi juga mempelajari ilmu-ilmu agama ala pesantren di kelas. Ilmu seperti fiih, tasawuf, nahwu, shorof, dll masuk sebagai pelajaran sekolah dengan kitab kuning sebagai bahan ajarnya.
					<br><br>
					Meskipun dalam satu lembaga, Santri Putra dan putri Askhabul kahfi terpisah dalam dua lokal. Kampus 2 bagi santri putra dan kampus 3 bagi santri putri. Baik dalam kelas, gedung sekolah, maupun asrama dan tempat mengaji.
					<br><br>
					<h4>Jurusan SMK Askhabul Kahfi :</h4>
					<li>Teknik Komputer Jaringan</li>
					<li>Teknik Kendaraan Ringan</li>

					<br><br>
					<h4>Fasilitas Sekolah</h4>
					<li>Gedung sekolah berlantai empat.</li>
					<li>Ruang laboratorium / bengkel meliputi: Bengkel Otomotif Dasar, Bengkel Las, Bengkel Chasis & Pemindah Tenaga, Bengkel Kelistrikan Otomotif serta bengkel New Bintang 9 yang dilengkapi dengan berbagai peralatan yang lengkap dan canggih</li>
					<li>Laboratorium Komputer 4 unit.</li>
					<li>Lapangan olah raga yang cukup luas terdiri dari lapangan sepak bola, dan lapangan bola voli</li>
					<li>Tempat Parkir yang  luas</li>
					<li>Masjid, UKS, Perpustakaan, Toilet, Kantin</li>
					<li>Free hot spot area (akses internet tanpa kabel dan gratis)</li>
					<br><br>

					<h3>Identitas</h3>
					<br>
					<table class="table table-striped">
					  <tbody>
					    <tr>
					      <td>Nama</td>
					      <td>SMK ASKHABUL KAHFI</td>
					    </tr>
					    <tr>
					      <td>NPSN</td>
					      <td>20354085</td>
					    </tr>
					    <tr>
					      <td>Alamat</td>
					      <td>Jalan Cangkiran-gunungpati km.03</td>
					    </tr>
					    <tr>
					      <td>Kode Pos</td>
					      <td>50217</td>
					    </tr>
					    <tr>
					      <td>Desa/Kelurahan</td>
					      <td>Polaman</td>
					    </tr>
					    <tr>
					      <td>Kecamatan/Kota (LN)</td>
					      <td>Kec. Mijen</td>
					    </tr>
					    <tr>
					      <td>Kab.-Kota/Negara (LN)</td>
					      <td>Kota Semarang</td>
					    </tr>
					    <tr>
					      <td>Propinsi/Luar Negeri (LN)</td>
					      <td>Prov. Jawa Tengah</td>
					    </tr>
					    <tr>
					      <td>Status Sekolah</td>
					      <td>SWASTA</td>
					    </tr>
					    <tr>
					      <td>Waktu Penyelenggaraan</td>
					      <td>Pagi/6 hari</td>
					    </tr>
					    <tr>
					      <td>Jenjang Pendidikan</td>
					      <td>SMK</td>
					    </tr>					    
					  </tbody>
					</table>
					<br><br>

					<h3>Dokumen dan Perizinan</h3>
					<br>
					<table class="table table-striped">
					  <tbody>
					    <tr>
					      <td>No. SK. Pendirian</td>
					      <td>420/6871</td>
					    </tr>
					    <tr>
					      <td>Tanggal SK.Pendirian</td>
					      <td></td>
					    </tr>
					    <tr>
					      <td>No. SK. Operasional</td>
					      <td>420/6871</td>
					    </tr>
					    <tr>
					      <td>Tanggal SK Operasional</td>
					      <td></td>
					    </tr>
					    <tr>
					      <td>Akreditasi</td>
					      <td>Akreditasi B</td>
					    </tr>
					    <tr>
					      <td>No. SK. Akreditasi</td>
					      <td>130/BAP-SM/X/2018</td>
					    </tr>
					    <tr>
					      <td>Tanggal SK. Akreditasi</td>
					      <td></td>
					    </tr>					    
					  </tbody>
					</table>
					<br><br>	

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