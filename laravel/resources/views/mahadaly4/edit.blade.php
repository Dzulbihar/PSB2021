@extends('layouts.master')

@section('content')

    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
    @endif


  <!-- container------------------------------------------------------------------------------------ --> 
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

        <!-- Tombol -->
        <div class="col-md-12 mb-3">
          <a href="{{url('mahadaly4')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data Mahad Aly Semester 7-8 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('mahadaly4') }}/{{$mahadaly4->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap74" type="text" class="form-control @error('namalengkap74') is-invalid @enderror" name="namalengkap74" value="{{$mahadaly4->namalengkap74}}" placeholder="Nama Lengkap" required autocomplete="namalengkap74" autofocus>
                  @error('namalengkap74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!--  __________________________________________________________________________________ -->
<!-- __________________________________________________________________________________ -->

            <!-- __________________________________________________________________________________ -->

            <!-- Email -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <label>Isikan Email bagi yang belum punya</label>
                <input id="email" type="email" class="form-control" name="email" placeholder="Kolom isi email bagi yang data masuk lewat import excel. Yang udah punya Email, Abaikan saja" >
              </div>
            </div>

            <!-- __________________________________________________________________________________ -->

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar74">Foto (size max 1.90 mb)</label>
                  <input id="avatar74" type="file" class="form-control @error('avatar74') is-invalid @enderror" name="avatar74" value="{{$mahadaly4->avatar74}}" placeholder="Avatar">
                  @error('avatar74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
<!-- __________________________________________________________________________________ -->


<!-- NISN -->
              <div class="form-group row">
                <div class="col-md-4">
                  <label for="">NISN</label>
                  <input id="nisn74" type="text" class="form-control @error('nisn74') is-invalid @enderror" name="nisn74" value="{{$mahadaly4->nisn74}}" placeholder="NISN" required autocomplete="nisn74" autofocus>
                  @error('nisn74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik74" type="text" class="form-control @error('nik74') is-invalid @enderror" name="nik74" value="{{$mahadaly4->nik74}}" placeholder="NIK" required autocomplete="nik74" autofocus>
                  @error('nik74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk74" type="text" class="form-control @error('nokk74') is-invalid @enderror" name="nokk74" value="{{$mahadaly4->nokk74}}" placeholder="No KK" required autocomplete="nokk74" autofocus>
                  @error('nokk74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                                                                                   
              </div>
<!--  __________________________________________________________________________________ -->
<!-- Tempat Lahir -->                        
              <div class="form-group row">
                <div class="col-md-4">
                  <label>Tempat Lahir</label>
                  <input id="tempatlahir74" type="text" class="form-control @error('tempatlahir74') is-invalid @enderror" name="tempatlahir74" value="{{$mahadaly4->tempatlahir74}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir74" autofocus>
                  @error('tempatlahir74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt74" type="text" class="form-control @error('tbt74') is-invalid @enderror" name="tbt74" value="{{$mahadaly4->tbt74}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt74" autofocus>
                  @error('tbt74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel74" type="text" class="form-control @error('jenkel74') is-invalid @enderror" name="jenkel74" value="{{$mahadaly4->jenkel74}}" placeholder="Jenis Kelamin" required autocomplete="jenkel74" autofocus>
                  @error('jenkel74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel74" class="form-control @error('jenkel74') is-invalid @enderror" name="jenkel74" required autocomplete="jenkel74" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($mahadaly4->jenkel74 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($mahadaly4->jenkel74 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror                              
                </div>
              </div>
 -->
<!--  __________________________________________________________________________________ -->
<!-- Desa -->                        
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Desa</label>
                  <input id="desa74" type="text" class="form-control @error('desa74') is-invalid @enderror" name="desa74" value="{{$mahadaly4->desa74}}" placeholder="Desa" required autocomplete="desa74" autofocus>
                  @error('desa74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec74" type="text" class="form-control @error('kec74') is-invalid @enderror" name="kec74" value="{{$mahadaly4->kec74}}" placeholder="Kecamatan" required autocomplete="kec74" autofocus>
                  @error('kec74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!--  __________________________________________________________________________________ -->
<!-- Kabupaten / Kota -->                        
              <div class="form-group row">
                <div class="col-md-4">
                  <label>Kabupaten</label>
                  <input id="kab74" type="text" class="form-control @error('kab74') is-invalid @enderror" name="kab74" value="{{$mahadaly4->kab74}}" placeholder="Kabupaten / Kota" required autocomplete="kab74" autofocus>
                  @error('kab74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov74" type="text" class="form-control @error('prov74') is-invalid @enderror" name="prov74" value="{{$mahadaly4->prov74}}" placeholder="Provinsi" required autocomplete="prov74" autofocus>
                  @error('prov74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos74" type="text" class="form-control @error('kodepos74') is-invalid @enderror" name="kodepos74" value="{{$mahadaly4->kodepos74}}" placeholder="Kode Pos" required autocomplete="kodepos74" autofocus>
                  @error('kodepos74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                            
              </div>
<!--  __________________________________________________________________________________ -->
<!-- Alamat Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Alamat Lengkap</label>
                  <input id="cita74" type="text" class="form-control @error('cita74') is-invalid @enderror" name="cita74" value="{{$mahadaly4->cita74}}" placeholder="Alamat Lengkap" required autocomplete="cita74" autofocus>
                  @error('cita74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara74" type="text" class="form-control @error('jumlahsaudara74') is-invalid @enderror" name="jumlahsaudara74" value="{{$mahadaly4->jumlahsaudara74}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara74" autofocus>
                  @error('jumlahsaudara74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                            
              </div>
<!--  __________________________________________________________________________________ -->
<!-- Asal Sekolah -->                        
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Asal Sekolah</label>
                  <input id="asalsekolah74" type="text" class="form-control @error('asalsekolah74') is-invalid @enderror" name="asalsekolah74" value="{{$mahadaly4->asalsekolah74}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah74" autofocus>
                  @error('asalsekolah74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah74" type="text" class="form-control @error('alamatasalsekolah74') is-invalid @enderror" name="alamatasalsekolah74" value="{{$mahadaly4->alamatasalsekolah74}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah74" autofocus>
                  @error('alamatasalsekolah74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                            
              </div>
<!--  __________________________________________________________________________________ -->
<!-- Nama Ayah -->                        
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Nama Ayah</label>
                  <input id="namaayah74" type="text" class="form-control @error('namaayah74') is-invalid @enderror" name="namaayah74" value="{{$mahadaly4->namaayah74}}" placeholder="Nama Ayah" required autocomplete="namaayah74" autofocus>
                  @error('namaayah74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah74" type="text" class="form-control @error('nikayah74') is-invalid @enderror" name="nikayah74" value="{{$mahadaly4->nikayah74}}" placeholder="NIK Ayah" required autocomplete="nikayah74" autofocus>
                  @error('nikayah74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                            
              </div>
<!--  __________________________________________________________________________________ -->
<!-- Tahun Lahir Ayah -->                        
              <div class="form-group row">
                <div class="col-md-4">
                  <label>Tahun Lahir Ayah</label>
                  <input id="tahunlahirayah74" type="text" class="form-control @error('tahunlahirayah74') is-invalid @enderror" name="tahunlahirayah74" value="{{$mahadaly4->tahunlahirayah74}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah74" autofocus>
                  @error('tahunlahirayah74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah74" type="text" class="form-control @error('pendidikanayah74') is-invalid @enderror" name="pendidikanayah74" value="{{$mahadaly4->pendidikanayah74}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah74" autofocus>
                  @error('pendidikanayah74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah74" class="form-control @error('pendidikanayah74') is-invalid @enderror" name="pendidikanayah74" value="{{$mahadaly4->pendidikanayah74}}" required autocomplete="pendidikanayah74" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mahadaly4->pendidikanayah74 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mahadaly4->pendidikanayah74 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mahadaly4->pendidikanayah74 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mahadaly4->pendidikanayah74 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mahadaly4->pendidikanayah74 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mahadaly4->pendidikanayah74 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mahadaly4->pendidikanayah74 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah74')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah74" type="text" class="form-control @error('pekerjaanayah74') is-invalid @enderror" name="pekerjaanayah74" value="{{$mahadaly4->pekerjaanayah74}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah74" autofocus>
                  @error('pekerjaanayah74')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah74" class="form-control @error('pekerjaanayah74') is-invalid @enderror" name="pekerjaanayah74" value="{{$mahadaly4->pekerjaanayah74}}" required autocomplete="pekerjaanayah74" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mahadaly4->pekerjaanayah74 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mahadaly4->pekerjaanayah74 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mahadaly4->pekerjaanayah74 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mahadaly4->pekerjaanayah74 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mahadaly4->pekerjaanayah74 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mahadaly4->pekerjaanayah74 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mahadaly4->pekerjaanayah74 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mahadaly4->pekerjaanayah74 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mahadaly4->pekerjaanayah74 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mahadaly4->pekerjaanayah74 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mahadaly4->pekerjaanayah74 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mahadaly4->pekerjaanayah74 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah74')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                               
                </div>                           
              </div>
-->
<!--  __________________________________________________________________________________ -->
<!-- Nama Ibu -->                        
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Nama Ibu</label>
                  <input id="namaibu74" type="text" class="form-control @error('namaibu74') is-invalid @enderror" name="namaibu74" value="{{$mahadaly4->namaibu74}}" placeholder="Nama Ibu" required autocomplete="namaibu74" autofocus>
                  @error('namaibu74')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu74" type="text" class="form-control @error('nikibu74') is-invalid @enderror" name="nikibu74" value="{{$mahadaly4->nikibu74}}" placeholder="NIK Ibu" required autocomplete="nikibu74" autofocus>
                  @error('nikibu74')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>                            
              </div>
<!--  __________________________________________________________________________________ -->
<!-- Tahun Lahir Ibu -->                        
              <div class="form-group row">
                <div class="col-md-4">
                  <label>Tahun Lahir Ibu</label>
                  <input id="tahunlahiribu74" type="text" class="form-control @error('tahunlahiribu74') is-invalid @enderror" name="tahunlahiribu74" value="{{$mahadaly4->tahunlahiribu74}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu74" autofocus>
                  @error('tahunlahiribu74')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu74" type="text" class="form-control @error('pendidikanibu74') is-invalid @enderror" name="pendidikanibu74" value="{{$mahadaly4->pendidikanibu74}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu74" autofocus>
                  @error('pendidikanibu74')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu74" class="form-control @error('pendidikanibu74') is-invalid @enderror" name="pendidikanibu74" value="{{$mahadaly4->pendidikanibu74}}" required autocomplete="pendidikanibu74" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mahadaly4->pendidikanibu74 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mahadaly4->pendidikanibu74 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mahadaly4->pendidikanibu74 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mahadaly4->pendidikanibu74 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mahadaly4->pendidikanibu74 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mahadaly4->pendidikanibu74 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mahadaly4->pendidikanibu74 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu74')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu74" type="text" class="form-control @error('pekerjaanibu74') is-invalid @enderror" name="pekerjaanibu74" value="{{$mahadaly4->pekerjaanibu74}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu74" autofocus>
                  @error('pekerjaanibu74')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu74" class="form-control @error('pekerjaanibu74') is-invalid @enderror" name="pekerjaanibu74" value="{{$mahadaly4->pekerjaanibu74}}" required autocomplete="pekerjaanibu74" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mahadaly4->pekerjaanibu74 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mahadaly4->pekerjaanibu74 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mahadaly4->pekerjaanibu74 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mahadaly4->pekerjaanibu74 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mahadaly4->pekerjaanibu74 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mahadaly4->pekerjaanibu74 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mahadaly4->pekerjaanibu74 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mahadaly4->pekerjaanibu74 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mahadaly4->pekerjaanibu74 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mahadaly4->pekerjaanibu74 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mahadaly4->pekerjaanibu74 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mahadaly4->pekerjaanibu74 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu74')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>                           
              </div>
-->
<!--  __________________________________________________________________________________ -->
<!-- Penghasilan -->                        
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Penghasilan</label>
                  <input id="penghasilan74" type="text" class="form-control @error('penghasilan74') is-invalid @enderror" name="penghasilan74" value="{{$mahadaly4->penghasilan74}}" placeholder="Penghasilan" required autocomplete="penghasilan74" autofocus>
                  @error('penghasilan74')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan74" class="form-control @error('penghasilan74') is-invalid @enderror" name="penghasilan74" value="{{$mahadaly4->penghasilan74}}" required autocomplete="penghasilan74" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($mahadaly4->penghasilan74 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($mahadaly4->penghasilan74 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($mahadaly4->penghasilan74 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($mahadaly4->penghasilan74 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($mahadaly4->penghasilan74 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($mahadaly4->penghasilan74 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan74')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi74" type="text" class="form-control @error('prestasi74') is-invalid @enderror" name="prestasi74" value="{{$mahadaly4->prestasi74}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi74" autofocus>
                  @error('prestasi74')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>                                                    
              </div>
<!--  __________________________________________________________________________________ -->
<!-- No HP -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label>No HP</label>
                  <input id="nohp74" type="text" class="form-control @error('nohp74') is-invalid @enderror" name="nohp74" value="{{$mahadaly4->nohp74}}" placeholder="No HP" required autocomplete="nohp74" autofocus>
                  @error('nohp74')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!--  __________________________________________________________________________________ -->
<!-- Tombol -->
              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-2">
                  <button type="submit" class="btn btn-warning">Update</button>
                </div>
              </div>
</form>  
        </div> <!-- card-body ------------------------------------------------- -->
      </div> <!-- card ------------------------------------------------- -->
    </div> <!-- col-md-12 ------------------------------------------------- -->
  </div> <!-- row justify-content-center ------------------------------------------------- -->
</div> <!-- container ------------------------------------------------- -->
</div>
</div>


@endsection

            