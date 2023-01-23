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
          <a href="{{url('mahadaly3')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data Mahad Aly Semester 5-6 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('mahadaly3') }}/{{$mahadaly3->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap73" type="text" class="form-control @error('namalengkap73') is-invalid @enderror" name="namalengkap73" value="{{$mahadaly3->namalengkap73}}" placeholder="Nama Lengkap" required autocomplete="namalengkap73" autofocus>
                  @error('namalengkap73')
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


<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar73">Foto (size max 1.90 mb)</label>
                  <input id="avatar73" type="file" class="form-control @error('avatar73') is-invalid @enderror" name="avatar73" value="{{$mahadaly3->avatar73}}" placeholder="Avatar">
                  @error('avatar73')
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
                  <input id="nisn73" type="text" class="form-control @error('nisn73') is-invalid @enderror" name="nisn73" value="{{$mahadaly3->nisn73}}" placeholder="NISN" required autocomplete="nisn73" autofocus>
                  @error('nisn73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik73" type="text" class="form-control @error('nik73') is-invalid @enderror" name="nik73" value="{{$mahadaly3->nik73}}" placeholder="NIK" required autocomplete="nik73" autofocus>
                  @error('nik73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk73" type="text" class="form-control @error('nokk73') is-invalid @enderror" name="nokk73" value="{{$mahadaly3->nokk73}}" placeholder="No KK" required autocomplete="nokk73" autofocus>
                  @error('nokk73')
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
                  <input id="tempatlahir73" type="text" class="form-control @error('tempatlahir73') is-invalid @enderror" name="tempatlahir73" value="{{$mahadaly3->tempatlahir73}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir73" autofocus>
                  @error('tempatlahir73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt73" type="text" class="form-control @error('tbt73') is-invalid @enderror" name="tbt73" value="{{$mahadaly3->tbt73}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt73" autofocus>
                  @error('tbt73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel73" type="text" class="form-control @error('jenkel73') is-invalid @enderror" name="jenkel73" value="{{$mahadaly3->jenkel73}}" placeholder="Jenis Kelamin" required autocomplete="jenkel73" autofocus>
                  @error('jenkel73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel73" class="form-control @error('jenkel73') is-invalid @enderror" name="jenkel73" required autocomplete="jenkel73" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($mahadaly3->jenkel73 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($mahadaly3->jenkel73 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel73')
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
                  <input id="desa73" type="text" class="form-control @error('desa73') is-invalid @enderror" name="desa73" value="{{$mahadaly3->desa73}}" placeholder="Desa" required autocomplete="desa73" autofocus>
                  @error('desa73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec73" type="text" class="form-control @error('kec73') is-invalid @enderror" name="kec73" value="{{$mahadaly3->kec73}}" placeholder="Kecamatan" required autocomplete="kec73" autofocus>
                  @error('kec73')
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
                  <input id="kab73" type="text" class="form-control @error('kab73') is-invalid @enderror" name="kab73" value="{{$mahadaly3->kab73}}" placeholder="Kabupaten / Kota" required autocomplete="kab73" autofocus>
                  @error('kab73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov73" type="text" class="form-control @error('prov73') is-invalid @enderror" name="prov73" value="{{$mahadaly3->prov73}}" placeholder="Provinsi" required autocomplete="prov73" autofocus>
                  @error('prov73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos73" type="text" class="form-control @error('kodepos73') is-invalid @enderror" name="kodepos73" value="{{$mahadaly3->kodepos73}}" placeholder="Kode Pos" required autocomplete="kodepos73" autofocus>
                  @error('kodepos73')
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
                  <input id="cita73" type="text" class="form-control @error('cita73') is-invalid @enderror" name="cita73" value="{{$mahadaly3->cita73}}" placeholder="Alamat Lengkap" required autocomplete="cita73" autofocus>
                  @error('cita73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara73" type="text" class="form-control @error('jumlahsaudara73') is-invalid @enderror" name="jumlahsaudara73" value="{{$mahadaly3->jumlahsaudara73}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara73" autofocus>
                  @error('jumlahsaudara73')
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
                  <input id="asalsekolah73" type="text" class="form-control @error('asalsekolah73') is-invalid @enderror" name="asalsekolah73" value="{{$mahadaly3->asalsekolah73}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah73" autofocus>
                  @error('asalsekolah73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah73" type="text" class="form-control @error('alamatasalsekolah73') is-invalid @enderror" name="alamatasalsekolah73" value="{{$mahadaly3->alamatasalsekolah73}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah73" autofocus>
                  @error('alamatasalsekolah73')
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
                  <input id="namaayah73" type="text" class="form-control @error('namaayah73') is-invalid @enderror" name="namaayah73" value="{{$mahadaly3->namaayah73}}" placeholder="Nama Ayah" required autocomplete="namaayah73" autofocus>
                  @error('namaayah73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah73" type="text" class="form-control @error('nikayah73') is-invalid @enderror" name="nikayah73" value="{{$mahadaly3->nikayah73}}" placeholder="NIK Ayah" required autocomplete="nikayah73" autofocus>
                  @error('nikayah73')
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
                  <input id="tahunlahirayah73" type="text" class="form-control @error('tahunlahirayah73') is-invalid @enderror" name="tahunlahirayah73" value="{{$mahadaly3->tahunlahirayah73}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah73" autofocus>
                  @error('tahunlahirayah73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah73" type="text" class="form-control @error('pendidikanayah73') is-invalid @enderror" name="pendidikanayah73" value="{{$mahadaly3->pendidikanayah73}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah73" autofocus>
                  @error('pendidikanayah73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah73" class="form-control @error('pendidikanayah73') is-invalid @enderror" name="pendidikanayah73" value="{{$mahadaly3->pendidikanayah73}}" required autocomplete="pendidikanayah73" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mahadaly3->pendidikanayah73 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mahadaly3->pendidikanayah73 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mahadaly3->pendidikanayah73 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mahadaly3->pendidikanayah73 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mahadaly3->pendidikanayah73 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mahadaly3->pendidikanayah73 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mahadaly3->pendidikanayah73 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah73')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah73" type="text" class="form-control @error('pekerjaanayah73') is-invalid @enderror" name="pekerjaanayah73" value="{{$mahadaly3->pekerjaanayah73}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah73" autofocus>
                  @error('pekerjaanayah73')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah73" class="form-control @error('pekerjaanayah73') is-invalid @enderror" name="pekerjaanayah73" value="{{$mahadaly3->pekerjaanayah73}}" required autocomplete="pekerjaanayah73" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mahadaly3->pekerjaanayah73 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mahadaly3->pekerjaanayah73 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mahadaly3->pekerjaanayah73 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mahadaly3->pekerjaanayah73 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mahadaly3->pekerjaanayah73 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mahadaly3->pekerjaanayah73 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mahadaly3->pekerjaanayah73 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mahadaly3->pekerjaanayah73 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mahadaly3->pekerjaanayah73 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mahadaly3->pekerjaanayah73 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mahadaly3->pekerjaanayah73 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mahadaly3->pekerjaanayah73 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah73')
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
                  <input id="namaibu73" type="text" class="form-control @error('namaibu73') is-invalid @enderror" name="namaibu73" value="{{$mahadaly3->namaibu73}}" placeholder="Nama Ibu" required autocomplete="namaibu73" autofocus>
                  @error('namaibu73')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu73" type="text" class="form-control @error('nikibu73') is-invalid @enderror" name="nikibu73" value="{{$mahadaly3->nikibu73}}" placeholder="NIK Ibu" required autocomplete="nikibu73" autofocus>
                  @error('nikibu73')
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
                  <input id="tahunlahiribu73" type="text" class="form-control @error('tahunlahiribu73') is-invalid @enderror" name="tahunlahiribu73" value="{{$mahadaly3->tahunlahiribu73}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu73" autofocus>
                  @error('tahunlahiribu73')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu73" type="text" class="form-control @error('pendidikanibu73') is-invalid @enderror" name="pendidikanibu73" value="{{$mahadaly3->pendidikanibu73}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu73" autofocus>
                  @error('pendidikanibu73')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu73" class="form-control @error('pendidikanibu73') is-invalid @enderror" name="pendidikanibu73" value="{{$mahadaly3->pendidikanibu73}}" required autocomplete="pendidikanibu73" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mahadaly3->pendidikanibu73 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mahadaly3->pendidikanibu73 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mahadaly3->pendidikanibu73 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mahadaly3->pendidikanibu73 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mahadaly3->pendidikanibu73 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mahadaly3->pendidikanibu73 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mahadaly3->pendidikanibu73 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu73')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu73" type="text" class="form-control @error('pekerjaanibu73') is-invalid @enderror" name="pekerjaanibu73" value="{{$mahadaly3->pekerjaanibu73}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu73" autofocus>
                  @error('pekerjaanibu73')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu73" class="form-control @error('pekerjaanibu73') is-invalid @enderror" name="pekerjaanibu73" value="{{$mahadaly3->pekerjaanibu73}}" required autocomplete="pekerjaanibu73" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mahadaly3->pekerjaanibu73 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mahadaly3->pekerjaanibu73 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mahadaly3->pekerjaanibu73 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mahadaly3->pekerjaanibu73 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mahadaly3->pekerjaanibu73 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mahadaly3->pekerjaanibu73 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mahadaly3->pekerjaanibu73 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mahadaly3->pekerjaanibu73 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mahadaly3->pekerjaanibu73 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mahadaly3->pekerjaanibu73 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mahadaly3->pekerjaanibu73 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mahadaly3->pekerjaanibu73 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu73')
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
                  <input id="penghasilan73" type="text" class="form-control @error('penghasilan73') is-invalid @enderror" name="penghasilan73" value="{{$mahadaly3->penghasilan73}}" placeholder="Penghasilan" required autocomplete="penghasilan73" autofocus>
                  @error('penghasilan73')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan73" class="form-control @error('penghasilan73') is-invalid @enderror" name="penghasilan73" value="{{$mahadaly3->penghasilan73}}" required autocomplete="penghasilan73" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($mahadaly3->penghasilan73 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($mahadaly3->penghasilan73 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($mahadaly3->penghasilan73 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($mahadaly3->penghasilan73 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($mahadaly3->penghasilan73 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($mahadaly3->penghasilan73 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan73')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi73" type="text" class="form-control @error('prestasi73') is-invalid @enderror" name="prestasi73" value="{{$mahadaly3->prestasi73}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi73" autofocus>
                  @error('prestasi73')
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
                  <input id="nohp73" type="text" class="form-control @error('nohp73') is-invalid @enderror" name="nohp73" value="{{$mahadaly3->nohp73}}" placeholder="No HP" required autocomplete="nohp73" autofocus>
                  @error('nohp73')
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

            