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
							<img src="{{$alumni->getavatar()}}" width="100" class="img-circle" alt="avatar99">   
<!-- --------------- -->
							<h3 class="name">{{$alumni->namalengkap99}}</h3>
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
						<div class="text-center"><a href="{{ url('alumni') }}/{{$alumni->id}}/{{('edit')}}" class="btn btn-warning">Edit Profile</a></div>
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
							<li><a href="#tab-bottom-left99" role="tab" data-toggle="tab">Catatan </a></li>
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
									<li> Nama Lengkap <span> {{ $alumni->namalengkap99}} </span></li>
									<li> Jenjang <span> {{ $alumni->jenjang99}} </span></li>
									<li> Tahun Lulus <span> {{ $alumni->tahunlulus99}} </span></li>
									<li> Pendidikan Lanjut <span> {{ $alumni->pendidikanlanjut99}} </span></li>
									<li> NISN <span> {{ $alumni->nisn99}} </span></li>
									<li> NIK <span> {{ $alumni->nik99}} </span></li>
									<li> Tempat Lahir <span> {{ $alumni->tempatlahir99}} </span></li>
									<li> Tgl/Bulan/Tahun Lahir <span> {{ $alumni->tbt99}} </span></li>
									<li> Jenis Kelamin <span> {{ $alumni->jenkel99}} </span></li>
									<li> Desa <span> {{ $alumni->desa99}} </span></li>
									<li> Kecamatan <span> {{ $alumni->kec99}} </span></li>
									<li> Kabupaten <span> {{ $alumni->kab99}} </span></li>
									<li> Provinsi <span> {{ $alumni->prov99}} </span></li>
									<li> Kode Pos <span> {{ $alumni->kodepos99}} </span></li>
									<li> Alamat Lengkap <span> {{ $alumni->cita99}} </span></li>
									<li> Jumlah Saudara Kandung <span> {{ $alumni->jumlahsaudara99}} </span></li>
								</ul>
							</div>

							<div class="col-md-6">
								<ul class="list-unstyled list-justify">
									<li> Asal Sekolah <span> {{ $alumni->asalsekolah99}} </span></li>
									<li> Alamat Asal Sekolah <span> {{ $alumni->alamatasalsekolah99}} </span></li>
									<li> No KK <span> {{ $alumni->nokk99}} </span></li>
									<li> Nama Ayah <span> {{ $alumni->namaayah99}} </span></li>
									<li> NIK Ayah <span> {{ $alumni->nikayah99}} </span></li>
									<li> Tahun Lahir Ayah <span> {{ $alumni->tahunlahirayah99}} </span></li>
									<li> Pendidikan Ayah <span> {{ $alumni->pendidikanayah99}} </span></li>
									<li> Pekerja Ayah <span> {{ $alumni->pekerjaanayah99}} </span></li>
									<li> Nama Ibu <span> {{ $alumni->namaibu99}} </span></li>
									<li> NIK Ibu <span> {{ $alumni->nikibu99}} </span></li>
									<li> Tahun Lahir Ibu <span> {{ $alumni->tahunlahiribu99}} </span></li>
									<li> Pendidikan Ibu <span> {{ $alumni->pendidikanibu99}} </span></li>
									<li> Pekerjaan Ibu <span> {{ $alumni->pekerjaanibu99}} </span></li>
									<li> Penghasilan Perbulan <span> {{ $alumni->penghasilan99}} </span></li>
									<li> Prestasi yang diraih <span> {{ $alumni->prestasi99}} </span></li>
									<li> No HP <span> {{ $alumni->nohp99}} </span></li>
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

<!-- _______________99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left99">

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

