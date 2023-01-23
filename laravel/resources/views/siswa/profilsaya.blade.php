@extends('layouts.master')


@section('content')

<div class="main">
<!-- MAIN CONTENT -->

<div class="main-content">
	<div class="container-fluid">

<!-- _____________________________________________________________________________________________________ -->

		<div class="panel panel-profile">
			<div class="clearfix">

				<!-- LEFT COLUMN -->
				<div class="profile-left">

					<!-- PROFILE HEADER -->
					<div class="profile-header">
						<div class="overlay"></div>
						<div class="profile-main">
<!-- ganti foto -->
							<img src="{{$siswa->getavatar()}}" width="100" class="img-circle" alt="avatar">   
<!-- --------------- -->
							<h3 class="name">{{$siswa->namalengkap}}</h3>
							<span class="online-status status-available">Santri</span>
						</div>

<!-- Kotak biru -->
						<div class="profile-stat">
							<div class="row">
								<div class="col-md-4 stat-item">
									 Jenjang <br> {{ $siswa->status}}
									 
								</div>
								<div class="col-md-4 stat-item">
									Fasilitas <br> {{ $siswa->fasilitas}} 
								</div>
								<div class="col-md-4 stat-item">
									Kabupaten <br> {{ $siswa->kab}} 
								</div>
							</div>
						</div>
<!-- --------------- -->			
					</div>
					<!-- END PROFILE HEADER -->

					<!-- PROFILE DETAIL -->
					<div class="profile-detail">
						<div class="profile-info">
							<a href="{{ url('siswa') }}/{{$siswa->id}}/{{('edit-online')}}" class="btn btn-warning btn-sm">Edit Profile Data diri</a>

							<a href="{{ url('siswa') }}/{{$siswa->id}}/{{('printsiswa')}}" target="_blank" class="btn btn-success btn-sm"></i> Print Data diri </a>

							<a href="{{ url('siswa') }}/{{$siswa->id}}/{{('registrasipendaftaran')}}" target="_blank" class="btn btn-danger btn-sm"></i> Biaya Administrasi Pendaftaran </a>

							<a href="{{ url('siswa') }}/{{$siswa->id}}/{{('biayaawalmasuk')}}" target="_blank" class="btn btn-danger btn-sm"></i> Biaya Awal Masuk </a>

							<a href="{{ url('siswa') }}/{{$siswa->id}}/{{('persyaratan')}}" target="_blank" class="btn btn-primary btn-sm"></i> Lengkapi Persyaratan </a>
						</div>

					</div>
					<!-- END PROFILE DETAIL -->

				</div>
				<!-- END LEFT COLUMN -->
<!-- _____________________________________________________________________________________________________ -->

				<!-- RIGHT COLUMN -->
				<div class="profile-right">	

					<!-- TABBED CONTENT -->
					<div class="custom-tabs-line tabs-line-bottom left-aligned">
						<ul class="nav" role="tablist">
							<li class="active">
								<a href="#tab-bottom-left1" role="tab" data-toggle="tab" class="btn btn-primary"> Data diri  </a>
							</li>
							<li>
								<a href="#tab-bottom-left2" role="tab" data-toggle="tab" class="btn btn-primary"> Waktu Pendaftaran </a>
							</li>							
							<li>
								<a href="#tab-bottom-left3" role="tab" data-toggle="tab" class="btn btn-primary"> Proses Pendaftaran Online </a>
							</li>
							<li>
								<a href="#tab-bottom-left4" role="tab" data-toggle="tab" class="btn btn-primary"> Biaya Awal Masuk </a>
							</li>	
							<li>
								<a href="#tab-bottom-left5" role="tab" data-toggle="tab" class="btn btn-primary"> Persyaratan </a>
							</li>					
						</ul>
					</div>
<!-- ______________________________________ -->

					<div class="tab-content">

<!-- _______________1111111111111111111111111111_______________________ -->
						<div class="tab-pane fade in active" id="tab-bottom-left1">
							<div class="col-md-6">
								<ul class="list-unstyled list-justify">
									<li> Nomor Pendaftaran <span> Online{{ $siswa->id}} </span></li>
									<li> Nama Lengkap <span> {{ $siswa->namalengkap}} </span></li>
									<li> Jenjang <span> {{ $siswa->status}} </span></li>
									<li> Fasilitas <span> {{ $siswa->fasilitas}} </span></li>
									<li> Tanggal Masuk <span> {{ $siswa->created_at}} </span></li>
									<li> Tempat Lahir <span> {{ $siswa->tempatlahir}} </span></li>
									<li> Tgl/Bulan/Tahun Lahir <span> {{ $siswa->tbt}} </span></li>
									<li> Jenis Kelamin <span> {{ $siswa->jenkel}} </span></li>
									<li> Alamat rt/rw <span> {{ $siswa->desa}} </span></li>
									<li> Kecamatan <span> {{ $siswa->kec}} </span></li>
									<li> Kabupaten <span> {{ $siswa->kab}} </span></li>
									<li> Provinsi <span> {{ $siswa->prov}} </span></li>
									<li> Asal Sekolah <span> {{ $siswa->asalsekolah}} </span></li>
									<li> Alamat Asal Sekolah <span> {{ $siswa->alamatasalsekolah}} </span></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="list-unstyled list-justify">
									<li> Nama Ayah <span> {{ $siswa->namaayah}} </span></li>
									<li> Pendidikan Ayah <span> {{ $siswa->pendidikanayah}} </span></li>
									<li> Pekerja Ayah <span> {{ $siswa->pekerjaanayah}} </span></li>
									<li> Nama Ibu <span> {{ $siswa->namaibu}} </span></li>
									<li> Pendidikan Ibu <span> {{ $siswa->pendidikanibu}} </span></li>
									<li> Pekerjaan Ibu <span> {{ $siswa->pekerjaanibu}} </span></li>
									<li> No HP <span> {{ $siswa->nohp}} </span></li>
								</ul>									
							</div>
						</div>

<!-- _______________2222222222222222222222222_______________________ -->
						<div class="tab-pane fade" id="tab-bottom-left2">
							<div class="panel">
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>GELOMBANG 1</th>
												<th>GELOMBANG 2</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td> 1 Januari - 30 April </td>
												<td> 2 Mei - 30 Juni</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

<!-- _______________33333333333333333333333_______________________ -->
						<div class="tab-pane fade" id="tab-bottom-left3">
							<div class="panel">
								<div class="panel-body">
									<table class="table table-striped">
										<ul>
											<h3> <b> 1. Daftar ke link </b> </h3>
											<p>https://ppaska.id/aska/register</p>
										</ul>
										<ul>
											<h3> <b> 2. Mengisi data diri </b> </h3>
											<p>Pendaftar dikenakan biaya pendaftaran sebesar Rp 200,000.- (Dua Ratus Ribu Rupiah)</p>
											<p>
												Pembayarannya bisa d transfer ke salah satu nomor rekening dibawah ini,
											</p>
											<p>
											    Rek BRI : 032501002475304 &nbsp;&nbsp; 
										        A.N : YAYASAN NURUL ITTIFAQ <br />
										        Rek BNI : 0808156382 &nbsp;&nbsp; 
										        A.N : YAYASAN NURUL ITTIFAQ <br />
										        Rek BNI Syariah : 1200200992 &nbsp;&nbsp; 
										        A.N : YAYASAN NURUL ITTIFAQ <br />
										        Rek Bank Mandiri Syariah : 7123551383 &nbsp;&nbsp; 
										        A.N : YAYASAN NURUL ITTIFAQ 
  										    </p>
  										    <p> Setelah melakukan via TF silahkan bisa konfirmasi ke nomor 0858 4257 9073</p>
										</ul>
										<ul>
											<h3> <b> 3. Pelaksanaan tes Online </b> </h3>
											<p>Tes Online bisa lewat via WhatsApp dengan konfirmasi ke nomor +62 856-0150-5818</p>
										</ul>
										<ul>
											<h3> <b> 4. Materi Tes </b> </h3>
											<p>Mater Tes yang akan di uji berupa : <br>
											- Tes Akademik <br>
											- Baca tulis Alquran <br>
											- Wawancara dan Psycho-test</p>
										</ul>
										<ul>
											<h3> <b> 5. Pengumuman </b> </h3>
											<p>Setelah melaksanakan tes, calon santri langsung dapat diketahui apakah ia diterima atau tidak. Hal ini dapat ditanyakan kepada petugas.</p>
										</ul>
										<ul>
											<h3> <b> 6. Registrasi Biaya Administrasi </b> </h3>
											<p>Setelah diterima, Calon santri dimohon segera registrasi administrasi, maksimal 2 minggu setelah diterima. Dan batas akhir pelunasan administrasi gelombang 1 sampai tanggal 30 April, gelombang 2 sampai tanggal 30 Juni</p>
										</ul>										
									</table>
								</div>
							</div>
						</div>

<!-- _______________4444444444444444444444444444_______________________ -->
						<div class="tab-pane fade" id="tab-bottom-left4">
							<div class="panel">
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<h4> <b>Registrasi Pendaftaran</b> </h4>
											<tr>
												<th>Semua Jenjang</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td> Rp. 100.000 </td>
											</tr>
										</tbody>
									</table>
									<table class="table table-striped">
										<thead>
											<h4> <b>Gelombang 1</b> </h4>
											<tr>
												<th>SMP / MTs Reguler</th>
												<th>SMP / MTs Non Reguler</th>
												<th>SMK Reguler</th>
												<th>SMK Non Reguler</th>
												<th>MA Reguler</th>
												<th>MA Non Reguler</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td> Rp. 3.600.000 </td>
												<td> Rp. 6.050.000 </td>
												<td> Rp. 3.900.000 </td>
												<td> Rp. 6.350.000 </td>
												<td> Rp. 3.650.000 </td>
												<td> Rp. 6.100.000 </td>
											</tr>
										</tbody>
									</table>
									<table class="table table-striped">
										<thead>
											<h4> <b>Gelombang 2</b> </h4>
											<tr>
												<th>SMP / MTs Reguler</th>
												<th>SMP / MTs Non Reguler</th>
												<th>SMK Reguler</th>
												<th>SMK Non Reguler</th>
												<th>MA Reguler</th>
												<th>MA Non Reguler</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td> Rp. 4.600.000 </td>
												<td> Rp. 7.050.000 </td>
												<td> Rp. 4.900.000 </td>
												<td> Rp. 7.350.000 </td>
												<td> Rp. 4.650.000 </td>
												<td> Rp. 7.100.000 </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div><!-- ____________________________________________________________________________________________________ -->

<!-- _______________5555555555555555555555_______________________ -->
						<div class="tab-pane fade" id="tab-bottom-left5">
							<div class="panel">
								<div class="panel-body">
									<table class="table table-striped">
										<h3>
											Persyaratan Pendaftaran
										</h3>
										<ul>
											<li>4 Fotocopy Akte Kelahiran</li>
											<li>4 Fotocopy Kartu Keluarga (KK)</li>
											<li>4 Fotocopy Ijazah (Bagi yang sudah ada)</li>
											<li>4 Foto ukuran 3x4 dan 2x3 hitam putih</li>
											<li>1 Foto ukuran 4x6 berwarna</li>
											<li>4 Fotocopy KTP Orang tua / Wali</li>
											<li>1 Fotocopy raport kelas 4,5,6 (bagi yang mendaftar MTs)</li>
											<li>1 Fotocopy raport kelas 7,8,9 (bagi yang mendaftar MA)</li>
										</ul>
										<h4>
											Bagi Pendaftar Online Untuk sementara boleh meng-upload persyaratan sebagai berikut
										</h4>	
										<ul>
											<li>Fotocopy Akte Kelahiran</li>
											<li>Fotocopy Kartu Keluarga (KK)</li>
											<li>Foto ukuran 3x4</li>
										</ul>
										<h4>
											Untuk kelengkapannya bisa dikumpulkan ketika datang ke pondok pesantren
										</h4>								
									</table>
								</div>
							</div>
						</div>


					</div>
				</div>
				<!-- END RIGHT COLUMN -->

			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
</div>



@stop

<!-- _____________________________________________________________________________________________________ -->
