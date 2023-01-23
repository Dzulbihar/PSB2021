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
							<img src="{{$santrikeluar->getavatar()}}" width="100" class="img-circle" alt="avatar1">   
<!-- --------------- -->
							<h3 class="name">{{$santrikeluar->namalengkap}}</h3>
							<span class="online-status status-available">Santri</span>
						</div>

<!-- Kotak biru -->
						<div class="profile-stat">
							<div class="row">
								<div class="col-md-4 stat-item">
									<span>Mata Pelajaran</span>
								</div>
								<div class="col-md-4 stat-item">
									 <span>Data Pelanggaran</span>
								</div>
								<div class="col-md-4 stat-item">
									<span>Total Nilai</span>
								</div>
							</div>
						</div>
<!-- --------------- -->			
					</div>
					<!-- END PROFILE HEADER -->

					<!-- PROFILE DETAIL -->
					<div class="profile-detail">
						<div class="profile-info">
							<h4 class="heading">  </h4>
							<ul class="list-unstyled list-justify">

									<!-- ______________________________________ -->

							</ul>
						</div>

						<a href="{{ url('santrikeluar') }}/{{$santrikeluar->id}}/{{('edit')}}" class="btn btn-warning">Edit Profile</a>

						<a href="{{ url('santrikeluar') }}/{{$santrikeluar->id}}/{{('seratusribu')}}" target="_blank" class="btn btn-success float-right"></i> Print Biaya Registrasi </a>

						<a href="{{ url('santrikeluar') }}/{{$santrikeluar->id}}/{{('printsantrikeluar')}}" target="_blank" class="btn btn-success float-right"></i> Print Data diri </a>

						<a href="{{ url('santrikeluar') }}/{{$santrikeluar->id}}/{{('biayaawalmasuk')}}" target="_blank" class="btn btn-danger float-right"></i> Biaya Awal Masuk </a>

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
							<li><a href="#tab-bottom-left7" role="tab" data-toggle="tab">Catatan </a></li>
						</ul>
					</div>
<!-- ______________________________________ -->

					<div class="tab-content">

<!-- _______________111111111111111111111111111111111111111_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left1">


						</div>

<!-- _______________222222222222222222222222222222_______________________ -->
						<div class="tab-pane fade in active" id="tab-bottom-left2">
										
							<div class="col-md-6">
								<ul class="list-unstyled list-justify">
									<li> Nomor Pendaftaran <span> P1{{ $santrikeluar->id}} </span></li>
									<li> Nama Lengkap <span> {{ $santrikeluar->namalengkap}} </span></li>
									<li> Jenjang <span> {{ $santrikeluar->status}} </span></li>
									<li> Fasilitas <span> {{ $santrikeluar->fasilitas}} </span></li>
									<li> Tanggal Masuk <span> {{ $santrikeluar->created_at}} </span></li>
									<li> Tempat Lahir <span> {{ $santrikeluar->tempatlahir00}} </span></li>
									<li> Tgl/Bulan/Tahun Lahir <span> {{ $santrikeluar->tbt00}} </span></li>
									<li> Jenis Kelamin <span> {{ $santrikeluar->jenkel}} </span></li>
									<li> Alamat rt/rw <span> {{ $santrikeluar->desa}} </span></li>
									<li> Kecamatan <span> {{ $santrikeluar->kec}} </span></li>
									<li> Kabupaten <span> {{ $santrikeluar->kab}} </span></li>
									<li> Provinsi <span> {{ $santrikeluar->prov}} </span></li>
									<li> Asal Sekolah <span> {{ $santrikeluar->asalsekolah00}} </span></li>
									<li> Alamat Asal Sekolah <span> {{ $santrikeluar->alamatasalsekolah00}} </span></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="list-unstyled list-justify">
									<li> Nama Ayah <span> {{ $santrikeluar->namaayah00}} </span></li>
									<li> Pendidikan Ayah <span> {{ $santrikeluar->pendidikanayah00}} </span></li>
									<li> Pekerja Ayah <span> {{ $santrikeluar->pekerjaanayah00}} </span></li>
									<li> Nama Ibu <span> {{ $santrikeluar->namaibu00}} </span></li>
									<li> Pendidikan Ibu <span> {{ $santrikeluar->pendidikanibu00}} </span></li>
									<li> Pekerjaan Ibu <span> {{ $santrikeluar->pekerjaanibu00}} </span></li>
									<li> No HP <span> {{ $santrikeluar->nohp00}} </span></li>

								</ul>									
							</div>

						</div>

<!-- _______________333333333333333_______________________ -->
						<div class="tab-pane fade" id="tab-bottom-left3">

	

						</div>

<!-- _______________4444444444444444444444444444444444444444_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left4">

						

						</div>


<!-- _______________555555555555555555555555555555555555555555_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left5">


						</div>

<!-- _______________66666666666666666666666666666666666666_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left6">

					

						</div>

<!-- _______________7777777777777777777777777777777777777777777777777777_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left7">

				

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

