@extends('layouts.master')


@section('header')

<!-- Edit Nilai Cepat -->
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<!--  -->
@stop


@section('content')

<div class="main">
<!-- MAIN CONTENT -->

<div class="main-content">
	<div class="container-fluid">

<!-- Notifikasi success / error -->
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
	  		{{session('sukses')}}
		</div>
		@endif

		@if(session('error'))
		<div class="alert alert-danger" role="alert">
	  		{{session('error')}}
		</div>
		@endif
<!-- End Notifikasi success / error -->
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
							<img src="{{$santrikeluar->getavatar()}}" width="100" class="img-circle" alt="avatar00">   
<!-- --------------- -->
							<h3 class="name">{{$santrikeluar->namalengkap00}}</h3>
							<span class="online-status status-available">Santri</span>
						</div>

<!-- Kotak biru -->

<!-- --------------- -->			
					</div>
					<!-- END PROFILE HEADER -->

					<!-- PROFILE DETAIL -->
					<div class="profile-detail">
						<div class="profile-info">
							<h4 class="heading"> BELUM ADA </h4>
							<ul class="list-unstyled list-justify">

									<!-- ______________________________________ -->

							</ul>
						</div>
						<div class="text-center"><a href="{{ url('santrikeluar') }}/{{$santrikeluar->id}}/{{('edit')}}" class="btn btn-warning">Edit Profile</a></div>
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
							<li class="active"><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Data diri</a></li>
							<li><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Nilai</a></li>
							<li><a href="#tab-bottom-left3" role="tab" data-toggle="tab">Pelanggaran </a></li>
							<li><a href="#tab-bottom-left4" role="tab" data-toggle="tab">Perizinan </a></li>
							<li><a href="#tab-bottom-left5" role="tab" data-toggle="tab">Pengambilan </a></li>
							<li><a href="#tab-bottom-left6" role="tab" data-toggle="tab">Prestasi </a></li>
							<li><a href="#tab-bottom-left00" role="tab" data-toggle="tab">Catatan </a></li>
						</ul>
					</div>
<!-- ______________________________________ -->

					<div class="tab-content">

<!-- _______________111111111111111111111111111111111111111_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left1">

							<!-- Tambah Nilai Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Nilai">
							  Tambah Nilai
							</button>

							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Mata Pelajaran</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>KODE</th>
												<th>NAMA</th>
												<th>KELAS</th>
												<th>NILAI</th>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
	
										</tbody>
									</table>
								</div>
							</div>

							<div class="panel">
								<div id="chartNilai"></div>
							</div>

						</div>

<!-- _______________222222222222222222222222222222_______________________ -->
						<div class="tab-pane fade in active" id="tab-bottom-left2">
										
							<div class="col-md-6">
								<ul class="list-unstyled list-justify">
									<li> Nama Lengkap <span> {{ $santrikeluar->namalengkap00}} </span></li>
									<li> Jenjang <span> {{ $santrikeluar->jenjang00}} </span></li>
									<li> Tahun Ajaran <span> {{ $santrikeluar->tahunajaran00}} </span></li>alasan00
									<li> Alasan Keluar <span> {{ $santrikeluar->alasan00}} </span></li>
									<li> NISN <span> {{ $santrikeluar->nisn00}} </span></li>
									<li> NIK <span> {{ $santrikeluar->nik00}} </span></li>
									<li> Tempat Lahir <span> {{ $santrikeluar->tempatlahir00}} </span></li>
									<li> Tgl/Bulan/Tahun Lahir <span> {{ $santrikeluar->tbt00}} </span></li>
									<li> Jenis Kelamin <span> {{ $santrikeluar->jenkel00}} </span></li>
									<li> Desa <span> {{ $santrikeluar->desa00}} </span></li>
									<li> Kecamatan <span> {{ $santrikeluar->kec00}} </span></li>
									<li> Kabupaten <span> {{ $santrikeluar->kab00}} </span></li>
									<li> Provinsi <span> {{ $santrikeluar->prov00}} </span></li>
									<li> Kode Pos <span> {{ $santrikeluar->kodepos00}} </span></li>
									<li> Alamat Lengkap <span> {{ $santrikeluar->cita00}} </span></li>
									<li> Jumlah Saudara Kandung <span> {{ $santrikeluar->jumlahsaudara00}} </span></li>
								</ul>
							</div>

							<div class="col-md-6">
								<ul class="list-unstyled list-justify">
									<li> Asal Sekolah <span> {{ $santrikeluar->asalsekolah00}} </span></li>
									<li> Alamat Asal Sekolah <span> {{ $santrikeluar->alamatasalsekolah00}} </span></li>
									<li> No KK <span> {{ $santrikeluar->nokk00}} </span></li>
									<li> Nama Ayah <span> {{ $santrikeluar->namaayah00}} </span></li>
									<li> NIK Ayah <span> {{ $santrikeluar->nikayah00}} </span></li>
									<li> Tahun Lahir Ayah <span> {{ $santrikeluar->tahunlahirayah00}} </span></li>
									<li> Pendidikan Ayah <span> {{ $santrikeluar->pendidikanayah00}} </span></li>
									<li> Pekerja Ayah <span> {{ $santrikeluar->pekerjaanayah00}} </span></li>
									<li> Nama Ibu <span> {{ $santrikeluar->namaibu00}} </span></li>
									<li> NIK Ibu <span> {{ $santrikeluar->nikibu00}} </span></li>
									<li> Tahun Lahir Ibu <span> {{ $santrikeluar->tahunlahiribu00}} </span></li>
									<li> Pendidikan Ibu <span> {{ $santrikeluar->pendidikanibu00}} </span></li>
									<li> Pekerjaan Ibu <span> {{ $santrikeluar->pekerjaanibu00}} </span></li>
									<li> Penghasilan Perbulan <span> {{ $santrikeluar->penghasilan00}} </span></li>
									<li> Prestasi yang diraih <span> {{ $santrikeluar->prestasi00}} </span></li>
									<li> No HP <span> {{ $santrikeluar->nohp00}} </span></li>
								</ul>									
							</div>

						</div>

<!-- _______________333333333333333_______________________ -->
						<div class="tab-pane fade" id="tab-bottom-left3">

							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hukuman">
							  Tambah Data 
							</button>

							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Pelanggaran</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>PELANGGARAN</th>
												<th>JENIS</th>
												<th>HUKUMAN</th>
												<th>SKOR</th>
												<th>WAKTU</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>

						</div>

<!-- _______________4444444444444444444444444444444444444444_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left4">

							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#izin">
							  Tambah Data
							</button>

							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Perizinan</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>KEPERLUAN IZIN</th>
												<th>TANGGAL PULANG</th>
												<th>JANGKA WAKTU</th>
												<th>TANGGAL KEMBALI</th>
												<th>STATUS KEDATANGAN</th>
												<th>TINDAK LANJUT</th>
												<th>KETERANGAN DETAIL</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>							

						</div>


<!-- _______________555555555555555555555555555555555555555555_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left5">

							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ambil">
							  Tambah Data
							</button>

							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Pengambilan</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>BARANG</th>
												<th>PELUNASAN</th>
												<th>PENGAMBILAN</th>
												<th>KETERANGAN</th>

											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>							

						</div>

<!-- _______________66666666666666666666666666666666666666_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left6">

							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prestasi">
							  Tambah Data
							</button>

							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Prestasi</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>PRESTASI</th>
												<th>TINGKAT</th>
												<th>KATEGORI</th>
												<th>HADIAH</th>
												<th>WAKTU</th>
												<th>KETERANGAN</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>							

						</div>

<!-- _______________00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left00">

							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#catatan">
							  Tambah Data
							</button>

							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Catatan</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>NOTE</th>
												<th>DESKRIPSI</th>
												<th>WAKTU</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>							

						</div>





<!-- _________________________________________________________________________________________________________________________________ -->



					</div>
				</div>
				<!-- END RIGHT COLUMN -->

			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
</div>

<!-- _____________________________________________________________________________________________________ -->





@stop

<!-- _____________________________________________________________________________________________________ -->


@section('footer')




@stop

