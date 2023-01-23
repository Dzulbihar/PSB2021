@extends('layouts.frontend')

@section('content')

<section class="banner-area relative about-banner" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					MA ASKHABUL KAHFI				
				</h1>	
				<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('maaskhabulkahfi')}}"> MA Askhabul Kahfi</a></p>
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
					<h1 class="mb-10">MA TAKHASUS ASKHABUL KAHFI</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 left-contents">
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/ma.jpg">
				</div>
				<div class="jq-tab-wrapper" id="horizontalTab">

					Madrasah Aliyah Program Khusus digagas pada tahun 1987, sebagai sebuah proyek prestisius Departeman Agama untuk mengantisipasi akutnya persoalan madrasah, terutama menyangkut pengkaderan ulama (program tafaqquh fiddin).
					<br><br>
					Begitu juga Madrasah Aliyah Askhabul kahfi merupakan Sekolah menengah dengan spesialisasi keagamaan yang fokus mencetak generasi yang alim ilmu agama. Yang membedakan adalah di Askhabul Kahfi menggabungkan kurikulum dari Kemenag dan kurikulum pesantren salaf. Sehingga dalam kajiannya merujuk langsung pada kitab-kitab klasik ulama salaf namun dengan konteks dan metode kekinian. Sesuai prinsip santri “mempertahankan hal lama yang baik dan mengambil hal baru yang lebih baik”
					<br><br>
					<h4>Visi Madrasah</h4>
					” RELIGIUS, SANTUN, KOMPETITIF ”
					<br><br>
					Religius, seluruh aktivitas madrasah dilandasi dan dalam rangka mengamalkan ajaran Islam secara menyeluruh.<br>
					Santun, meningkatkan dan mengembangkan perilaku dalam kehidupan sehari-hari dengan mengedepankan akhlaqul karimah.<br>
					Kompetitif, mengupayakan seluruh komponen madrasah untuk siap berkompetisi dalam bidang ilmu pengetahuan, teknologi, seni dan budaya yang berlandaskan iman dan taqwa.
					<br><br>
					<h4>Misi Madrasah</h4>
					Mengembangkan kemampuan dasar dan pengamalan IPTEK, Imtaq, Budi Pekerti,  serta Wawasan Kebangsaan dan Demokrasi untuk mencapai visi. 
					<br><br>
					<h4>Tujuan</h4>
					Menghantarkan menjadi anak sholih / sholikhah berintelektual.
					<br><br><br>

					<h4>Program Pembelajaran</h4>	
						<li>Tilawah dan Tahfidz Al Qur’an</li>
						<li>Pengkajian Kitab Kuning</li>
						<li>Wetonan atau bandungan</li>
						<li>Halaqoh</li>
						<li>Hafalan atau tahfizh</li>
						<li>Hiwar atau musyawarah</li>
						<li>Muhawarah / Muhadatsah.</li>
						<li>Demonstratif/Praktek Ibadah</li>
					<br><br>

					<h4>Program Khusus</h4>
						<li>TAFSIR Al Qur’an ( Tafsir Jalalain)</li>
						<li>NAHWU ( Alfiyah)</li>
						<li>FIQIH (Kifayatul Akhyar)</li>
						<li>USUL FIQIH</li>
						<li>BALAGHOH ( Jauharul Maknun)</li>
					<br><br>

					<h4>Syarat Untuk Proram Khusus</h4>
						<li>Rerata akademik minimal 8.00</li>
						<li>Minimal peringkat 5 di sekolah atau madrasah sebelumnya</li>
						<li>Telah memahami dasar tata Bahasa Arab (Nahwu Shorof) </li>
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
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%" w>
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