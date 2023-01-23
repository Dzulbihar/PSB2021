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
							<img src="{{$mts8->getavatar()}}" width="100" class="img-circle" alt="avatar38">   
<!-- --------------- -->
							<h3 class="name">{{$mts8->namalengkap38}}</h3>
							<span class="online-status status-available">Santri</span>
						</div>

<!-- Kotak biru -->
						<div class="profile-stat">
							<div class="row">
								<div class="col-md-4 stat-item">
									{{$mts8->mapel->count()}} <span>Mata Pelajaran</span>
								</div>
								<div class="col-md-4 stat-item">
									 <span>Data Pelanggaran</span>
								</div>
								<div class="col-md-4 stat-item">
									{{$mts8->rataRataNilai()}} <span>Total Nilai</span>
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
											@foreach($mts8->mapel as $mapel)
											<tr>
												<td>{{$mapel->kode}}</td>
												<td>{{$mapel->nama}}</td>
												<td>{{$mapel->kelas}}</td>
												<td> <a href="#" class="nilai" data-type="text" data-pk="{{$mapel->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editnilai')}}" data-title="Masukan Nilai">{{$mapel->pivot->nilai}}</a>  </td>
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
									<li><b> Nama Lengkap </b><span> {{ $mts8->namalengkap38}} </span></li>
									<li><b> Jenjang </b><span> {{ $mts8->status38}} </span></li>
									<li><b> NISN </b><span> {{ $mts8->nisn38}} </span></li>
									<li><b> NIK </b><span> {{ $mts8->nik38}} </span></li>
									<li><b> Tempat Lahir </b><span> {{ $mts8->tempatlahir38}} </span></li>
									<li><b> Tgl/Bulan/Tahun Lahir </b><span> {{ $mts8->tbt38}} </span></li>
									<li><b> Jenis Kelamin </b><span> {{ $mts8->jenkel38}} </span></li>
									<li><b> Desa </b><span> {{ $mts8->desa38}} </span></li>
									<li><b> Kecamatan </b><span> {{ $mts8->kec38}} </span></li>
									<li><b> Kabupaten </b><span> {{ $mts8->kab38}} </span></li>
									<li><b> Provinsi </b><span> {{ $mts8->prov38}} </span></li>
									<li><b> Kode Pos </b><span> {{ $mts8->kodepos38}} </span></li>
									<li><b> Alamat Lengkap </b><span> {{ $mts8->cita38}} </span></li>
									<li><b> Jumlah Saudara Kandung </b><span> {{ $mts8->jumlahsaudara38}} </span></li>
									<li><b> Asal Sekolah </b><span> {{ $mts8->asalsekolah38}} </span></li>
									<li><b> Alamat Asal Sekolah </b><span> {{ $mts8->alamatasalsekolah38}} </span></li>
								</ul>
							</div>

							<div class="col-md-6">
								<ul class="list-unstyled list-justify">
									<li><b> No KK </b><span> {{ $mts8->nokk38}} </span></li>
									<li><b> Nama Ayah </b><span> {{ $mts8->namaayah38}} </span></li>
									<li><b> NIK Ayah </b><span> {{ $mts8->nikayah38}} </span></li>
									<li><b> Tahun Lahir Ayah </b><span> {{ $mts8->tahunlahirayah38}} </span></li>
									<li><b> Pendidikan Ayah </b><span> {{ $mts8->pendidikanayah38}} </span></li>
									<li><b> Pekerja Ayah </b><span> {{ $mts8->pekerjaanayah38}} </span></li>
									<li><b> Nama Ibu </b><span> {{ $mts8->namaibu38}} </span></li>
									<li><b> NIK Ibu </b><span> {{ $mts8->nikibu38}} </span></li>
									<li><b> Tahun Lahir Ibu </b><span> {{ $mts8->tahunlahiribu38}} </span></li>
									<li><b> Pendidikan Ibu </b><span> {{ $mts8->pendidikanibu38}} </span></li>
									<li><b> Pekerjaan Ibu </b><span> {{ $mts8->pekerjaanibu38}} </span></li>
									<li><b> Penghasilan Perbulan </b><span> {{ $mts8->penghasilan38}} </span></li>
									<li><b> Prestasi yang diraih </b><span> {{ $mts8->prestasi38}} </span></li>
									<li><b> No HP </b><span> {{ $mts8->nohp38}} </span></li>
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
											@foreach($mts8->hukuman as $hukuman)
											<tr>
												<td>{{$hukuman->pelanggaran}}</td>

												<td> <a href="#" class="jenis" data-type="text" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editjenis')}}" data-title="Masukan Data">{{$hukuman->pivot->jenis}}</a>  </td>

												<td> <a href="#" class="sanksi" data-type="text" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editsanksi')}}" data-title="Masukan Data">{{$hukuman->pivot->sanksi}}</a>  </td>

												<td> <a href="#" class="skor" data-type="text" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editskor')}}" data-title="Masukan Data">{{$hukuman->pivot->skor}}</a>  </td>

												<td> <a href="#" class="data" data-type="date" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editdata')}}" data-title="Masukan Data">{{$hukuman->pivot->data}}</a>  </td>

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
											@foreach($mts8->izin as $izin)
											<tr>
												<td>{{$izin->keperluan}}</td>


												<td> <a href="#" class="rumah" data-type="date" data-pk="{{$izin->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editrumah')}}" data-title="Masukan Data">{{$izin->pivot->rumah}}</a>  </td>

												<td> <a href="#" class="jangka" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editjangka')}}" data-title="Masukan Data">{{$izin->pivot->jangka}}</a>  </td>

												<td> <a href="#" class="pondok" data-type="date" data-pk="{{$izin->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editpondok')}}" data-title="Masukan Data">{{$izin->pivot->pondok}}</a>  </td>

												<td> <a href="#" class="datang" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editdatang')}}" data-title="Masukan Data">{{$izin->pivot->datang}}</a>  </td>

												<td> <a href="#" class="hukum" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('edithukum')}}" data-title="Masukan Data">{{$izin->pivot->hukum}}</a>  </td>

												<td> <a href="#" class="ket" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editket')}}" data-title="Masukan Data">{{$izin->pivot->ket}}</a>  </td>

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
											@foreach($mts8->ambil as $ambil)
											<tr>
												<td>{{$ambil->barang}}</td>

												<td> <a href="#" class="pelunasan" data-type="text" data-pk="{{$ambil->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editpelunasan')}}" data-title="Masukan Data">{{$ambil->pivot->pelunasan}}</a>  </td>

												<td> <a href="#" class="pengambilan" data-type="text" data-pk="{{$ambil->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editpengambilan')}}" data-title="Masukan Data">{{$ambil->pivot->pengambilan}}</a>  </td>

												<td> <a href="#" class="keterangan" data-type="text" data-pk="{{$ambil->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editketerangan')}}" data-title="Masukan Data">{{$ambil->pivot->keterangan}}</a>  </td>

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
											@foreach($mts8->prestasi as $prestasi)
											<tr>
												<td>{{$prestasi->juara}}</td>

												<td> <a href="#" class="tingkat" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('edittingkat')}}" data-title="Masukan Data">{{$prestasi->pivot->tingkat}}</a>  </td>

												<td> <a href="#" class="kategori" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editkategori')}}" data-title="Masukan Data">{{$prestasi->pivot->kategori}}</a>  </td>

												<td> <a href="#" class="hadiah" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('edithadiah')}}" data-title="Masukan Data">{{$prestasi->pivot->hadiah}}</a>  </td>

												<td> <a href="#" class="waktu" data-type="date" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editwaktu')}}" data-title="Masukan Data">{{$prestasi->pivot->waktu}}</a>  </td>

												<td> <a href="#" class="note" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editnote')}}" data-title="Masukan Data">{{$prestasi->pivot->note}}</a>  </td>

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
											@foreach($mts8->catatan as $catatan)
											<tr>
												<td>{{$catatan->note}}</td>

												<td> <a href="#" class="sifat" data-type="text" data-pk="{{$catatan->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editsifat')}}" data-title="Masukan Data">{{$catatan->pivot->sifat}}</a>  </td>

												<td> <a href="#" class="nulis" data-type="date" data-pk="{{$catatan->id}}" data-url="{{ url('/api/mts8') }}/{{$mts8->id}}/{{('editnulis')}}" data-title="Masukan Data">{{$catatan->pivot->nulis}}</a>  </td>

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
