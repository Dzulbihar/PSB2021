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
							<img src="{{$smktkj->getavatar()}}" width="100" class="img-circle" alt="avatar4">   
<!-- --------------- -->
							<h3 class="name">{{$smktkj->namalengkap}}</h3>
							<span class="online-status status-available">Santri</span>
						</div>

<!-- Kotak biru -->
						<div class="profile-stat">
							<div class="row">
								<div class="col-md-4 stat-item">
									{{$smktkj->mapel->count()}} <span>Mata Pelajaran</span>
								</div>
								<div class="col-md-4 stat-item">
									 <span>Data Pelanggaran</span>
								</div>
								<div class="col-md-4 stat-item">
									{{$smktkj->rataRataNilai()}} <span>Total Nilai</span>
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

						<a href="{{ url('smktkj') }}/{{$smktkj->id}}/{{('edit')}}" class="btn btn-warning">Edit Profile</a>

						<a href="{{ url('smktkj') }}/{{$smktkj->id}}/{{('seratusribu')}}" target="_blank" class="btn btn-success float-right"></i> Print Biaya Registrasi </a>

						<a href="{{ url('smktkj') }}/{{$smktkj->id}}/{{('printsmktkj')}}" target="_blank" class="btn btn-success float-right"></i> Print Data diri </a>

						<a href="{{ url('smktkj') }}/{{$smktkj->id}}/{{('biayaawalmasuk')}}" target="_blank" class="btn btn-danger float-right"></i> Biaya Awal Masuk </a>

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
											@foreach($smktkj->mapel as $mapel)
											<tr>
												<td>{{$mapel->kode}}</td>
												<td>{{$mapel->nama}}</td>
												<td>{{$mapel->kelas}}</td>
												<td> <a href="#" class="nilai" data-type="text" data-pk="{{$mapel->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editnilai')}}" data-title="Masukan Nilai">{{$mapel->pivot->nilai}}</a>  </td>
												<td><a href="{{ url('smktkj') }}/{{$smktkj->id}}/{{$mapel->id}}/{{'deletenilai'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a></td>
											</tr>
											@endforeach
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
									<li> Nomor Pendaftaran <span> KJ{{ $smktkj->id}} </span></li>
									<li> Nama Lengkap <span> {{ $smktkj->namalengkap}} </span></li>
									<li> Jenjang <span> {{ $smktkj->status}} </span></li>
									<li> Fasilitas <span> {{ $smktkj->fasilitas}} </span></li>
									<li> Tanggal Masuk <span> {{ $smktkj->created_at}} </span></li>
									<li> Tempat Lahir <span> {{ $smktkj->tempatlahir4}} </span></li>
									<li> Tgl/Bulan/Tahun Lahir <span> {{ $smktkj->tbt4}} </span></li>
									<li> Jenis Kelamin <span> {{ $smktkj->jenkel}} </span></li>
									<li> Alamat rt/rw <span> {{ $smktkj->desa}} </span></li>
									<li> Kecamatan <span> {{ $smktkj->kec}} </span></li>
									<li> Kabupaten <span> {{ $smktkj->kab}} </span></li>
									<li> Provinsi <span> {{ $smktkj->prov}} </span></li>
									<li> Asal Sekolah <span> {{ $smktkj->asalsekolah4}} </span></li>
									<li> Alamat Asal Sekolah <span> {{ $smktkj->alamatasalsekolah4}} </span></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="list-unstyled list-justify">
									<li> Nama Ayah <span> {{ $smktkj->namaayah4}} </span></li>
									<li> Pendidikan Ayah <span> {{ $smktkj->pendidikanayah4}} </span></li>
									<li> Pekerja Ayah <span> {{ $smktkj->pekerjaanayah4}} </span></li>
									<li> Nama Ibu <span> {{ $smktkj->namaibu4}} </span></li>
									<li> Pendidikan Ibu <span> {{ $smktkj->pendidikanibu4}} </span></li>
									<li> Pekerjaan Ibu <span> {{ $smktkj->pekerjaanibu4}} </span></li>
									<li> No HP <span> {{ $smktkj->nohp4}} </span></li>
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
											@foreach($smktkj->hukuman as $hukuman)
											<tr>
												<td>{{$hukuman->pelanggaran}}</td>

												<td> <a href="#" class="jenis" data-type="text" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editjenis')}}" data-title="Masukan Data">{{$hukuman->pivot->jenis}}</a>  </td>

												<td> <a href="#" class="sanksi" data-type="text" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editsanksi')}}" data-title="Masukan Data">{{$hukuman->pivot->sanksi}}</a>  </td>

												<td> <a href="#" class="skor" data-type="text" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editskor')}}" data-title="Masukan Data">{{$hukuman->pivot->skor}}</a>  </td>

												<td> <a href="#" class="data" data-type="date" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editdata')}}" data-title="Masukan Data">{{$hukuman->pivot->data}}</a>  </td>

											</tr>
											@endforeach
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
											@foreach($smktkj->izin as $izin)
											<tr>
												<td>{{$izin->keperluan}}</td>


												<td> <a href="#" class="rumah" data-type="date" data-pk="{{$izin->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editrumah')}}" data-title="Masukan Data">{{$izin->pivot->rumah}}</a>  </td>

												<td> <a href="#" class="jangka" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editjangka')}}" data-title="Masukan Data">{{$izin->pivot->jangka}}</a>  </td>

												<td> <a href="#" class="pondok" data-type="date" data-pk="{{$izin->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editpondok')}}" data-title="Masukan Data">{{$izin->pivot->pondok}}</a>  </td>

												<td> <a href="#" class="datang" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editdatang')}}" data-title="Masukan Data">{{$izin->pivot->datang}}</a>  </td>

												<td> <a href="#" class="hukum" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('edithukum')}}" data-title="Masukan Data">{{$izin->pivot->hukum}}</a>  </td>

												<td> <a href="#" class="ket" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editket')}}" data-title="Masukan Data">{{$izin->pivot->ket}}</a>  </td>


											</tr>
											@endforeach
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
											@foreach($smktkj->ambil as $ambil)
											<tr>
												<td>{{$ambil->barang}}</td>

												<td> <a href="#" class="pelunasan" data-type="text" data-pk="{{$ambil->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editpelunasan')}}" data-title="Masukan Data">{{$ambil->pivot->pelunasan}}</a>  </td>

												<td> <a href="#" class="pengambilan" data-type="text" data-pk="{{$ambil->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editpengambilan')}}" data-title="Masukan Data">{{$ambil->pivot->pengambilan}}</a>  </td>

												<td> <a href="#" class="keterangan" data-type="text" data-pk="{{$ambil->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editketerangan')}}" data-title="Masukan Data">{{$ambil->pivot->keterangan}}</a>  </td>


											</tr>
											@endforeach
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
											@foreach($smktkj->prestasi as $prestasi)
											<tr>
												<td>{{$prestasi->juara}}</td>

												<td> <a href="#" class="tingkat" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('edittingkat')}}" data-title="Masukan Data">{{$prestasi->pivot->tingkat}}</a>  </td>

												<td> <a href="#" class="kategori" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editkategori')}}" data-title="Masukan Data">{{$prestasi->pivot->kategori}}</a>  </td>

												<td> <a href="#" class="hadiah" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('edithadiah')}}" data-title="Masukan Data">{{$prestasi->pivot->hadiah}}</a>  </td>

												<td> <a href="#" class="waktu" data-type="date" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editwaktu')}}" data-title="Masukan Data">{{$prestasi->pivot->waktu}}</a>  </td>

												<td> <a href="#" class="note" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editnote')}}" data-title="Masukan Data">{{$prestasi->pivot->note}}</a>  </td>


											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>							

						</div>

<!-- _______________7777777777777777777777777777777777777777777777777777_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left7">

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
											@foreach($smktkj->catatan as $catatan)
											<tr>
												<td>{{$catatan->note}}</td>

												<td> <a href="#" class="sifat" data-type="text" data-pk="{{$catatan->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editsifat')}}" data-title="Masukan Data">{{$catatan->pivot->sifat}}</a>  </td>

												<td> <a href="#" class="nulis" data-type="date" data-pk="{{$catatan->id}}" data-url="{{ url('/api/smktkj') }}/{{$smktkj->id}}/{{('editnulis')}}" data-title="Masukan Data">{{$catatan->pivot->nulis}}</a>  </td>




											</tr>
											@endforeach
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

<!-- Tambah Nilai Mapel -->
<div class="modal fade" id="Nilai" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">

  <div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">Tambah Nilai</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <div class="modal-body">
    
	<form action="{{url('smktkj')}}/{{$smktkj->id}}/addnilai" method="POST" enctype="multipart/form-data" >
				{{ csrf_field() }}

<!-- Mapel -->
		<div class="form-group">
		    <label for="mapel">Mata Pelajaran</label>
		    <select class="form-control" id="mapel" name="mapel">
				@foreach($matapelajaran as $mp)
					<option value="{{$mp->id}}"> {{$mp->nama}} </option>
				@endforeach
		    </select>
		  </div>

<!-- Nilai -->
		<div class="form-group {{$errors->has('namalengkap') ? 'has-error' : ''}}">
		    <label for="exampleInputEmail1"> Nilai </label>
		    <input name="nilai" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nilai" value="{{old('nilai')}}">
		    @if($errors->has('nilai'))
				<span class="help-block"> {{$errors->first('nilai')}} </span>
		    @endif
		</div>

  </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

	</form>

</div>
</div>
</div>

<!-- _____________________________________________________________________________________________________ -->

<!-- Tambah Data Pelanggaran -->
<div class="modal fade" id="hukuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelanggaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

     <div class="modal-body">

		<form action="{{url('smktkj')}}/{{$smktkj->id}}/adddata"  method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
<!-- Hukuman -->
			<div class="form-group">
			  <label for="hukuman">Data Pelanggaran</label>
			  <select class="form-control" id="hukuman" name="hukuman">
				@foreach($dosa as $ds)
					<option value="{{$ds->id}}">{{$ds->pelanggaran}}</option>
				@endforeach
			  </select>
			</div>
<!-- Jenis -->
			<div class="form-group{{$errors->has('jenis') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Jenis Pelanggaran</label>
				<input name="jenis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis" value="{{old('jenis')}}">
				@if($errors->has('jenis'))
					<span class="help-block"> {{$errors->first('jenis')}} </span>
				@endif
			</div>
<!-- Sanksi -->
			<div class="form-group{{$errors->has('sanksi') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Sanksi </label>
				<input name="sanksi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sanksi" value="{{old('sanksi')}}">
				@if($errors->has('sanksi'))
					<span class="help-block"> {{$errors->first('sanksi')}} </span>
				@endif
			</div>				
<!-- Skor -->
			<div class="form-group{{$errors->has('skor') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Skor </label>
				<small> (Berdasarkan kesepakatan bersama) </small>
				<input name="skor" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1 sampai 10" value="{{old('skor')}}">
				@if($errors->has('skor'))
					<span class="help-block"> {{$errors->first('skor')}} </span>
				@endif
			</div>			
<!-- Data -->
			<div class="form-group{{$errors->has('data') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Waktu </label>
				<input name="data" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal" value="{{old('data')}}">
				@if($errors->has('data'))
					<span class="help-block"> {{$errors->first('data')}} </span>
				@endif
			</div>

      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      	</form>
      	
    </div>
  </div>
</div>

<!-- _____________________________________________________________________________________________________ -->

<!-- Tambah Data Perizinan -->
<div class="modal fade" id="izin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Perizinan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

     <div class="modal-body">

		<form action="{{url('smktkj')}}/{{$smktkj->id}}/addpulang"  method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}

<!-- keperluan -->
			<div class="form-group">
			  <label for="izin">Data Perizinan</label>
			  <select class="form-control" id="izin" name="izin">
				@foreach($libur as $lbr)
					<option value="{{$lbr->id}}">{{$lbr->keperluan}}</option>
				@endforeach
			  </select>
			</div>

<!-- rumah -->
			<div class="form-group{{$errors->has('rumah') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Tanggal Pulang </label>
				<input name="rumah" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="rumah" value="{{old('rumah')}}">
				@if($errors->has('rumah'))
					<span class="help-block"> {{$errors->first('rumah')}} </span>
				@endif
			</div>

<!-- jangka -->
			<div class="form-group{{$errors->has('jangka') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Jangka waktu </label>
				<input name="jangka" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Berapa Hari" value="{{old('jangka')}}">
				@if($errors->has('jangka'))
					<span class="help-block"> {{$errors->first('jangka')}} </span>
				@endif
			</div>

<!-- pondok -->
			<div class="form-group{{$errors->has('pondok') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Tanggal Kembali </label>
				<input name="pondok" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="pondok" value="{{old('pondok')}}">
				@if($errors->has('pondok'))
					<span class="help-block"> {{$errors->first('pondok')}} </span>
				@endif
			</div>

<!-- datang -->
			<div class="form-group{{$errors->has('datang') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Status kedatangan </label>
				<input name="datang" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jika sudah datang, ketik = 0 .... Jika belum datang, ketik = 1" value="{{old('datang')}}">
				@if($errors->has('datang'))
					<span class="help-block"> {{$errors->first('datang')}} </span>
				@endif
			</div>

<!-- hukum -->
			<div class="form-group{{$errors->has('hukum') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Tindak Lanjut </label>
				<input name="hukum" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Taat Peraturan (Bebas) / Melanggar (Hukuman)" value="{{old('hukum')}}">
				@if($errors->has('hukum'))
					<span class="help-block"> {{$errors->first('hukum')}} </span>
				@endif
			</div>

<!-- ket -->
			<div class="form-group{{$errors->has('ket') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Keterangan Detail </label>
				<input name="ket" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Detail Perizinan" value="{{old('ket')}}">
				@if($errors->has('ket'))
					<span class="help-block"> {{$errors->first('ket')}} </span>
				@endif
			</div>


      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      	</form>
      	
    </div>
  </div>
</div>

<!-- _____________________________________________________________________________________________________ -->

<!-- Tambah Data Pengambilan -->
<div class="modal fade" id="ambil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pengambilan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

     <div class="modal-body">

		<form action="{{url('smktkj')}}/{{$smktkj->id}}/addbarang"  method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}

<!-- barang -->
			<div class="form-group">
			  <label for="ambil">Data Pengambilan</label>
			  <select class="form-control" id="ambil" name="ambil">
				@foreach($benda as $bd)
					<option value="{{$bd->id}}">{{$bd->barang}}</option>
				@endforeach
			  </select>
			</div>

<!-- pelunasan -->
			<div class="form-group{{$errors->has('pelunasan') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Pelunasan </label>
				<input name="pelunasan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lunas / Belum Lunas" value="{{old('pelunasan')}}">
				@if($errors->has('pelunasan'))
					<span class="help-block"> {{$errors->first('pelunasan')}} </span>
				@endif
			</div>

<!-- pengambilan -->
			<div class="form-group{{$errors->has('pengambilan') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Pengambilan </label>
				<input name="pengambilan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sudah diambil / Belum diambil" value="{{old('pengambilan')}}">
				@if($errors->has('pengambilan'))
					<span class="help-block"> {{$errors->first('pengambilan')}} </span>
				@endif
			</div>

<!-- keterangan -->
			<div class="form-group{{$errors->has('keterangan') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Keterangan </label>
				<input name="keterangan" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jika sudah diambil, ketik = 0 .... Jika belum diambil, ketik = 1" value="{{old('keterangan')}}">
				@if($errors->has('keterangan'))
					<span class="help-block"> {{$errors->first('keterangan')}} </span>
				@endif
			</div>


      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      	</form>
      	
    </div>
  </div>
</div>

<!-- _____________________________________________________________________________________________________ -->

<!-- Tambah Data Prestasi -->
<div class="modal fade" id="prestasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Prestasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

     <div class="modal-body">

		<form action="{{url('smktkj')}}/{{$smktkj->id}}/addhebat"  method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}

<!-- juara -->
			<div class="form-group">
			  <label for="prestasi">Data Prestasi</label>
			  <select class="form-control" id="prestasi" name="prestasi">
				@foreach($luarbiasa as $lb)
					<option value="{{$lb->id}}">{{$lb->juara}}</option>
				@endforeach
			  </select>
			</div>

<!-- tingkat -->
			<div class="form-group{{$errors->has('tingkat') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Tingkat </label>
				<input name="tingkat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tingkat Kejuaraan" value="{{old('tingkat')}}">
				@if($errors->has('tingkat'))
					<span class="help-block"> {{$errors->first('tingkat')}} </span>
				@endif
			</div>

<!-- kategori -->
			<div class="form-group{{$errors->has('kategori') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Kategori </label>
				<input name="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori Lomba" value="{{old('kategori')}}">
				@if($errors->has('kategori'))
					<span class="help-block"> {{$errors->first('kategori')}} </span>
				@endif
			</div>

<!-- hadiah -->
			<div class="form-group{{$errors->has('hadiah') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Hadiah </label>
				<input name="hadiah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hadiah" value="{{old('hadiah')}}">
				@if($errors->has('hadiah'))
					<span class="help-block"> {{$errors->first('hadiah')}} </span>
				@endif
			</div>

<!-- waktu -->
			<div class="form-group{{$errors->has('waktu') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Waktu </label>
				<input name="waktu" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="waktu" value="{{old('waktu')}}">
				@if($errors->has('waktu'))
					<span class="help-block"> {{$errors->first('waktu')}} </span>
				@endif
			</div>

<!-- Note -->
			<div class="form-group{{$errors->has('note') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Note </label>
				<input name="note" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ketik 1" value="{{old('note')}}">
				@if($errors->has('note'))
					<span class="help-block"> {{$errors->first('note')}} </span>
				@endif
			</div>

      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      	</form>
      	
    </div>
  </div>
</div>

<!-- _____________________________________________________________________________________________________ -->

<!-- Tambah Data Catatan -->
<div class="modal fade" id="catatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Catatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

     <div class="modal-body">

		<form action="{{url('smktkj')}}/{{$smktkj->id}}/adddeskripsi"  method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}

<!-- note -->
			<div class="form-group">
			  <label for="catatan">Data Catatan</label>
			  <select class="form-control" id="catatan" name="catatan">
				@foreach($pribadi as $pb)
					<option value="{{$pb->id}}">{{$pb->note}}</option>
				@endforeach
			  </select>
			</div>

<!-- sifat -->
			<div class="form-group{{$errors->has('sifat') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Deskripsi </label>
				<input name="sifat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bagaimana menurutmu tentang dia" value="{{old('sifat')}}">
				@if($errors->has('sifat'))
					<span class="help-block"> {{$errors->first('sifat')}} </span>
				@endif
			</div>

<!-- nulis -->
			<div class="form-group{{$errors->has('nulis') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Waktu Penulisan </label>
				<input name="nulis" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal" value="{{old('nulis')}}">
				@if($errors->has('nulis'))
					<span class="help-block"> {{$errors->first('nulis')}} </span>
				@endif
			</div>


      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      	</form>
      	
    </div>
  </div>
</div>




@stop

<!-- _____________________________________________________________________________________________________ -->


@section('footer')

<!-- Edit Nilai Cepat -->
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<!--  -->

<!-- Edit Grafik -->
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
	Highcharts.chart('chartNilai', {
	chart: {
	    type: 'column'
	},
	title: {
	    text: 'Laporan Nilai smktkj'
	},

	xAxis: {
	    categories: {!!json_encode($categories)!!},
	    crosshair: true
	},
	yAxis: {
	    min: 0,
	    title: {
	        text: 'Nilai'
	    }
	},
	tooltip: {
	    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',

	    footerFormat: '</table>',
	    shared: true,
	    useHTML: true
	},
	plotOptions: {
	    column: {
	        pointPadding: 0.2,
	        borderWidth: 0
	    }
	},
	series: [{
	    name: 'Nilai',
	    data: {!!json_encode($data)!!}
	}]

	});


	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.nilai').editable();

	});             
	////////////////////////

	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.jenis').editable();
	});             
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.sanksi').editable();
	});             
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.skor').editable();
	});             
	////////////////////////	
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.data').editable();
	});             
	////////////////////////


	////////////////////////

	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.rumah').editable();
	});             
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.jangka').editable();
	});             
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.pondok').editable();
	});             
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.datang').editable();
	});             
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.hukum').editable();
	});             
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.ket').editable();
	});             
	////////////////////////

	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.pelunasan').editable();
	});             
	////////////////////////
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.pengambilan').editable();
	});             
	////////////////////////	
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.keterangan').editable();
	});             
	////////////////////////

	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.tingkat').editable();
	});             
	////////////////////////
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.kategori').editable();
	});             
	////////////////////////
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.hadiah').editable();
	});             
	////////////////////////
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.waktu').editable();
	});             
	////////////////////////
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.note').editable();
	});             
	////////////////////////

	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.sifat').editable();
	});             
	////////////////////////
	////////////////////////
	//Edit Nilai Cepat//
	$(document).ready(function() {
	$('.nulis').editable();
	});             
	////////////////////////


</script>
<!--  -->


@stop

