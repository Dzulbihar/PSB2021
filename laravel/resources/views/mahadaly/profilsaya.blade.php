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
							<img src="{{$mahadaly->getavatar()}}" width="100" class="img-circle" alt="avatar7">   
<!-- --------------- -->
							<h3 class="name">{{$mahadaly->namalengkap}}</h3>
							<span class="online-status status-available">Santri</span>
						</div>

<!-- Kotak biru -->
						<div class="profile-stat">
							<div class="row">
								<div class="col-md-4 stat-item">
									{{$mahadaly->mapel->count()}} <span>Mata Pelajaran</span>
								</div>
								<div class="col-md-4 stat-item">
									 <span>Data Pelanggaran</span>
								</div>
								<div class="col-md-4 stat-item">
									{{$mahadaly->rataRataNilai()}} <span>Total Nilai</span>
								</div>
							</div>
						</div>
<!-- --------------- -->			
					</div>
					<!-- END PROFILE HEADER -->

					<!-- PROFILE DETAIL -->
					<div class="profile-detail">
						<div class="profile-info">
							<h4 class="heading"> HANYA ADMIN YANG DAPAT MENAMBAH, MENGEDIT, DAN MENGHAPUS DATA INI </h4>
							<ul class="list-unstyled list-justify">

									<!-- ______________________________________ -->

							</ul>
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
											</tr>
										</thead>
										<tbody>
											@foreach($mahadaly->mapel as $mapel)
											<tr>
												<td>{{$mapel->kode}}</td>
												<td>{{$mapel->nama}}</td>
												<td>{{$mapel->kelas}}</td>
												<td> <a href="#" class="nilai" data-type="text" data-pk="{{$mapel->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editnilai')}}" data-title="Masukan Nilai">{{$mapel->pivot->nilai}}</a>  </td>
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
									<li> Nomor Pendaftaran <span> MA{{ $mahadaly->id}} </span></li>
									<li> Nama Lengkap <span> {{ $mahadaly->namalengkap}} </span></li>
									<li> Jenjang <span> {{ $mahadaly->status}} </span></li>
									<li> Fasilitas <span> {{ $mahadaly->fasilitas}} </span></li>
									<li> Tanggal Masuk <span> {{ $mahadaly->created_at}} </span></li>
									<li> Tempat Lahir <span> {{ $mahadaly->tempatlahir7}} </span></li>
									<li> Tgl/Bulan/Tahun Lahir <span> {{ $mahadaly->tbt7}} </span></li>
									<li> Jenis Kelamin <span> {{ $mahadaly->jenkel}} </span></li>
									<li> Alamat rt/rw <span> {{ $mahadaly->desa}} </span></li>
									<li> Kecamatan <span> {{ $mahadaly->kec}} </span></li>
									<li> Kabupaten <span> {{ $mahadaly->kab}} </span></li>
									<li> Provinsi <span> {{ $mahadaly->prov}} </span></li>
									<li> Asal Sekolah <span> {{ $mahadaly->asalsekolah7}} </span></li>
									<li> Alamat Asal Sekolah <span> {{ $mahadaly->alamatasalsekolah7}} </span></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="list-unstyled list-justify">
									<li> Nama Ayah <span> {{ $mahadaly->namaayah7}} </span></li>
									<li> Pendidikan Ayah <span> {{ $mahadaly->pendidikanayah7}} </span></li>
									<li> Pekerja Ayah <span> {{ $mahadaly->pekerjaanayah7}} </span></li>
									<li> Nama Ibu <span> {{ $mahadaly->namaibu7}} </span></li>
									<li> Pendidikan Ibu <span> {{ $mahadaly->pendidikanibu7}} </span></li>
									<li> Pekerjaan Ibu <span> {{ $mahadaly->pekerjaanibu7}} </span></li>
									<li> No HP <span> {{ $mahadaly->nohp7}} </span></li>
								</ul>									
							</div>

						</div>

<!-- _______________333333333333333_______________________ -->
						<div class="tab-pane fade" id="tab-bottom-left3">

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
											@foreach($mahadaly->hukuman as $hukuman)
											<tr>
												<td>{{$hukuman->pelanggaran}}</td>

												<td> <a href="#" class="jenis" data-type="text" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editjenis')}}" data-title="Masukan Data">{{$hukuman->pivot->jenis}}</a>  </td>

												<td> <a href="#" class="sanksi" data-type="text" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editsanksi')}}" data-title="Masukan Data">{{$hukuman->pivot->sanksi}}</a>  </td>

												<td> <a href="#" class="skor" data-type="text" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editskor')}}" data-title="Masukan Data">{{$hukuman->pivot->skor}}</a>  </td>


												<td> <a href="#" class="data" data-type="date" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editdata')}}" data-title="Masukan Data">{{$hukuman->pivot->data}}</a>  </td>

											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>

						</div>

<!-- _______________4444444444444444444444444444444444444444_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left4">

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
											@foreach($mahadaly->izin as $izin)
											<tr>
												<td>{{$izin->keperluan}}</td>


												<td> <a href="#" class="rumah" data-type="date" data-pk="{{$izin->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editrumah')}}" data-title="Masukan Data">{{$izin->pivot->rumah}}</a>  </td>

												<td> <a href="#" class="jangka" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editjangka')}}" data-title="Masukan Data">{{$izin->pivot->jangka}}</a>  </td>

												<td> <a href="#" class="pondok" data-type="date" data-pk="{{$izin->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editpondok')}}" data-title="Masukan Data">{{$izin->pivot->pondok}}</a>  </td>

												<td> <a href="#" class="datang" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editdatang')}}" data-title="Masukan Data">{{$izin->pivot->datang}}</a>  </td>

												<td> <a href="#" class="hukum" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('edithukum')}}" data-title="Masukan Data">{{$izin->pivot->hukum}}</a>  </td>

												<td> <a href="#" class="ket" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editket')}}" data-title="Masukan Data">{{$izin->pivot->ket}}</a>  </td>

											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>							

						</div>


<!-- _______________555555555555555555555555555555555555555555_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left5">

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
											@foreach($mahadaly->ambil as $ambil)
											<tr>
												<td>{{$ambil->barang}}</td>

												<td> <a href="#" class="pelunasan" data-type="text" data-pk="{{$ambil->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editpelunasan')}}" data-title="Masukan Data">{{$ambil->pivot->pelunasan}}</a>  </td>

												<td> <a href="#" class="pengambilan" data-type="text" data-pk="{{$ambil->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editpengambilan')}}" data-title="Masukan Data">{{$ambil->pivot->pengambilan}}</a>  </td>

												<td> <a href="#" class="keterangan" data-type="text" data-pk="{{$ambil->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editketerangan')}}" data-title="Masukan Data">{{$ambil->pivot->keterangan}}</a>  </td>

											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>							

						</div>

<!-- _______________66666666666666666666666666666666666666_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left6">

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
											@foreach($mahadaly->prestasi as $prestasi)
											<tr>
												<td>{{$prestasi->juara}}</td>

												<td> <a href="#" class="tingkat" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('edittingkat')}}" data-title="Masukan Data">{{$prestasi->pivot->tingkat}}</a>  </td>

												<td> <a href="#" class="kategori" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editkategori')}}" data-title="Masukan Data">{{$prestasi->pivot->kategori}}</a>  </td>

												<td> <a href="#" class="hadiah" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('edithadiah')}}" data-title="Masukan Data">{{$prestasi->pivot->hadiah}}</a>  </td>

												<td> <a href="#" class="waktu" data-type="date" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editwaktu')}}" data-title="Masukan Data">{{$prestasi->pivot->waktu}}</a>  </td>

												<td> <a href="#" class="note" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editnote')}}" data-title="Masukan Data">{{$prestasi->pivot->note}}</a>  </td>


											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>							

						</div>

<!-- _______________7777777777777777777777777777777777777777777777777777_______________________ -->
						<div class="tab-pane fade " id="tab-bottom-left7">

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
											@foreach($mahadaly->catatan as $catatan)
											<tr>
												<td>{{$catatan->note}}</td>

												<td> <a href="#" class="sifat" data-type="text" data-pk="{{$catatan->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editsifat')}}" data-title="Masukan Data">{{$catatan->pivot->sifat}}</a>  </td>

												<td> <a href="#" class="nulis" data-type="date" data-pk="{{$catatan->id}}" data-url="{{ url('/api/mahadaly') }}/{{$mahadaly->id}}/{{('editnulis')}}" data-title="Masukan Data">{{$catatan->pivot->nulis}}</a>  </td>

											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>							

						</div>

<!-- ____________________________________________________________________________________________________ -->

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
