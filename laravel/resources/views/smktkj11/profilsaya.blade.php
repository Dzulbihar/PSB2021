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
							<img src="{{$smktkj11->getavatar()}}" width="100" class="img-circle" alt="avatar42">   
<!-- --------------- -->
							<h3 class="name">{{$smktkj11->namalengkap42}}</h3>
							<span class="online-status status-available">Santri</span>
						</div>

<!-- Kotak biru -->
						<div class="profile-stat">
							<div class="row">
								<div class="col-md-4 stat-item">
									{{$smktkj11->mapel->count()}} <span>Mata Pelajaran</span>
								</div>
								<div class="col-md-4 stat-item">
									 <span>Data Pelanggaran</span>
								</div>
								<div class="col-md-4 stat-item">
									{{$smktkj11->rataRataNilai()}} <span>Total Nilai</span>
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
											@foreach($smktkj11->mapel as $mapel)
											<tr>
												<td>{{$mapel->kode}}</td>
												<td>{{$mapel->nama}}</td>
												<td>{{$mapel->kelas}}</td>
												<td> <a href="#" class="nilai" data-type="text" data-pk="{{$mapel->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editnilai')}}" data-title="Masukan Nilai">{{$mapel->pivot->nilai}}</a>  </td>
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
									<li><b> Nama Lengkap </b><span> {{ $smktkj11->namalengkap42}} </span></li>
									<li><b> Jenjang </b><span> {{ $smktkj11->status42}} </span></li>
									<li><b> NISN </b><span> {{ $smktkj11->nisn42}} </span></li>
									<li><b> NIK </b><span> {{ $smktkj11->nik42}} </span></li>
									<li><b> Tempat Lahir </b><span> {{ $smktkj11->tempatlahir42}} </span></li>
									<li><b> Tgl/Bulan/Tahun Lahir </b><span> {{ $smktkj11->tbt42}} </span></li>
									<li><b> Jenis Kelamin </b><span> {{ $smktkj11->jenkel42}} </span></li>
									<li><b> Desa </b><span> {{ $smktkj11->desa42}} </span></li>
									<li><b> Kecamatan </b><span> {{ $smktkj11->kec42}} </span></li>
									<li><b> Kabupaten </b><span> {{ $smktkj11->kab42}} </span></li>
									<li><b> Provinsi </b><span> {{ $smktkj11->prov42}} </span></li>
									<li><b> Kode Pos </b><span> {{ $smktkj11->kodepos42}} </span></li>
									<li><b> Alamat Lengkap </b><span> {{ $smktkj11->cita42}} </span></li>
									<li><b> Jumlah Saudara Kandung </b><span> {{ $smktkj11->jumlahsaudara42}} </span></li>
									<li><b> Asal Sekolah </b><span> {{ $smktkj11->asalsekolah42}} </span></li>
									<li><b> Alamat Asal Sekolah </b><span> {{ $smktkj11->alamatasalsekolah42}} </span></li>
								</ul>
							</div>

							<div class="col-md-6">
								<ul class="list-unstyled list-justify">
									<li><b> No KK </b><span> {{ $smktkj11->nokk42}} </span></li>
									<li><b> Nama Ayah </b><span> {{ $smktkj11->namaayah42}} </span></li>
									<li><b> NIK Ayah </b><span> {{ $smktkj11->nikayah42}} </span></li>
									<li><b> Tahun Lahir Ayah </b><span> {{ $smktkj11->tahunlahirayah42}} </span></li>
									<li><b> Pendidikan Ayah </b><span> {{ $smktkj11->pendidikanayah42}} </span></li>
									<li><b> Pekerja Ayah </b><span> {{ $smktkj11->pekerjaanayah42}} </span></li>
									<li><b> Nama Ibu </b><span> {{ $smktkj11->namaibu42}} </span></li>
									<li><b> NIK Ibu </b><span> {{ $smktkj11->nikibu42}} </span></li>
									<li><b> Tahun Lahir Ibu </b><span> {{ $smktkj11->tahunlahiribu42}} </span></li>
									<li><b> Pendidikan Ibu </b><span> {{ $smktkj11->pendidikanibu42}} </span></li>
									<li><b> Pekerjaan Ibu </b><span> {{ $smktkj11->pekerjaanibu42}} </span></li>
									<li><b> Penghasilan Perbulan </b><span> {{ $smktkj11->penghasilan42}} </span></li>
									<li><b> Prestasi yang diraih </b><span> {{ $smktkj11->prestasi42}} </span></li>
									<li><b> No HP </b><span> {{ $smktkj11->nohp42}} </span></li>
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
											@foreach($smktkj11->hukuman as $hukuman)
											<tr>
												<td>{{$hukuman->pelanggaran}}</td>

												<td> <a href="#" class="jenis" data-type="text" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editjenis')}}" data-title="Masukan Data">{{$hukuman->pivot->jenis}}</a>  </td>

												<td> <a href="#" class="sanksi" data-type="text" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editsanksi')}}" data-title="Masukan Data">{{$hukuman->pivot->sanksi}}</a>  </td>

												<td> <a href="#" class="skor" data-type="text" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editskor')}}" data-title="Masukan Data">{{$hukuman->pivot->skor}}</a>  </td>

												<td> <a href="#" class="data" data-type="date" data-pk="{{$hukuman->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editdata')}}" data-title="Masukan Data">{{$hukuman->pivot->data}}</a>  </td>

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
											@foreach($smktkj11->izin as $izin)
											<tr>
												<td>{{$izin->keperluan}}</td>


												<td> <a href="#" class="rumah" data-type="date" data-pk="{{$izin->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editrumah')}}" data-title="Masukan Data">{{$izin->pivot->rumah}}</a>  </td>

												<td> <a href="#" class="jangka" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editjangka')}}" data-title="Masukan Data">{{$izin->pivot->jangka}}</a>  </td>

												<td> <a href="#" class="pondok" data-type="date" data-pk="{{$izin->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editpondok')}}" data-title="Masukan Data">{{$izin->pivot->pondok}}</a>  </td>

												<td> <a href="#" class="datang" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editdatang')}}" data-title="Masukan Data">{{$izin->pivot->datang}}</a>  </td>

												<td> <a href="#" class="hukum" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('edithukum')}}" data-title="Masukan Data">{{$izin->pivot->hukum}}</a>  </td>

												<td> <a href="#" class="ket" data-type="text" data-pk="{{$izin->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editket')}}" data-title="Masukan Data">{{$izin->pivot->ket}}</a>  </td>

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
											@foreach($smktkj11->ambil as $ambil)
											<tr>
												<td>{{$ambil->barang}}</td>

												<td> <a href="#" class="pelunasan" data-type="text" data-pk="{{$ambil->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editpelunasan')}}" data-title="Masukan Data">{{$ambil->pivot->pelunasan}}</a>  </td>

												<td> <a href="#" class="pengambilan" data-type="text" data-pk="{{$ambil->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editpengambilan')}}" data-title="Masukan Data">{{$ambil->pivot->pengambilan}}</a>  </td>

												<td> <a href="#" class="keterangan" data-type="text" data-pk="{{$ambil->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editketerangan')}}" data-title="Masukan Data">{{$ambil->pivot->keterangan}}</a>  </td>

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
											@foreach($smktkj11->prestasi as $prestasi)
											<tr>
												<td>{{$prestasi->juara}}</td>

												<td> <a href="#" class="tingkat" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('edittingkat')}}" data-title="Masukan Data">{{$prestasi->pivot->tingkat}}</a>  </td>

												<td> <a href="#" class="kategori" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editkategori')}}" data-title="Masukan Data">{{$prestasi->pivot->kategori}}</a>  </td>

												<td> <a href="#" class="hadiah" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('edithadiah')}}" data-title="Masukan Data">{{$prestasi->pivot->hadiah}}</a>  </td>

												<td> <a href="#" class="waktu" data-type="date" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editwaktu')}}" data-title="Masukan Data">{{$prestasi->pivot->waktu}}</a>  </td>

												<td> <a href="#" class="note" data-type="text" data-pk="{{$prestasi->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editnote')}}" data-title="Masukan Data">{{$prestasi->pivot->note}}</a>  </td>

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
											@foreach($smktkj11->catatan as $catatan)
											<tr>
												<td>{{$catatan->note}}</td>

												<td> <a href="#" class="sifat" data-type="text" data-pk="{{$catatan->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editsifat')}}" data-title="Masukan Data">{{$catatan->pivot->sifat}}</a>  </td>

												<td> <a href="#" class="nulis" data-type="date" data-pk="{{$catatan->id}}" data-url="{{ url('/api/smktkj11') }}/{{$smktkj11->id}}/{{('editnulis')}}" data-title="Masukan Data">{{$catatan->pivot->nulis}}</a>  </td>

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
