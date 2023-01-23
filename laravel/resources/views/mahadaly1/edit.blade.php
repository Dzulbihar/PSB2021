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
          <a href="{{url('mahadaly1')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data Mahad Aly Semester 1-2 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('mahadaly1') }}/{{$mahadaly1->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap71" type="text" class="form-control @error('namalengkap71') is-invalid @enderror" name="namalengkap71" value="{{$mahadaly1->namalengkap71}}" placeholder="Nama Lengkap" required autocomplete="namalengkap71" autofocus>
                  @error('namalengkap71')
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

<!-- __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar71">Foto (size max 1.90 mb)</label>
                  <input id="avatar71" type="file" class="form-control @error('avatar71') is-invalid @enderror" name="avatar71" value="{{$mahadaly1->avatar71}}" placeholder="Avatar">
                  @error('avatar71')
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
                  <input id="nisn71" type="text" class="form-control @error('nisn71') is-invalid @enderror" name="nisn71" value="{{$mahadaly1->nisn71}}" placeholder="NISN" required autocomplete="nisn71" autofocus>
                  @error('nisn71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik71" type="text" class="form-control @error('nik71') is-invalid @enderror" name="nik71" value="{{$mahadaly1->nik71}}" placeholder="NIK" required autocomplete="nik71" autofocus>
                  @error('nik71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk71" type="text" class="form-control @error('nokk71') is-invalid @enderror" name="nokk71" value="{{$mahadaly1->nokk71}}" placeholder="No KK" required autocomplete="nokk71" autofocus>
                  @error('nokk71')
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
                  <input id="tempatlahir71" type="text" class="form-control @error('tempatlahir71') is-invalid @enderror" name="tempatlahir71" value="{{$mahadaly1->tempatlahir71}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir71" autofocus>
                  @error('tempatlahir71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt71" type="text" class="form-control @error('tbt71') is-invalid @enderror" name="tbt71" value="{{$mahadaly1->tbt71}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt71" autofocus>
                  @error('tbt71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel71" type="text" class="form-control @error('jenkel71') is-invalid @enderror" name="jenkel71" value="{{$mahadaly1->jenkel71}}" placeholder="Jenis Kelamin" required autocomplete="jenkel71" autofocus>
                  @error('jenkel71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel71" class="form-control @error('jenkel71') is-invalid @enderror" name="jenkel71" required autocomplete="jenkel71" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($mahadaly1->jenkel71 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($mahadaly1->jenkel71 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel71')
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
                  <input id="desa71" type="text" class="form-control @error('desa71') is-invalid @enderror" name="desa71" value="{{$mahadaly1->desa71}}" placeholder="Desa" required autocomplete="desa71" autofocus>
                  @error('desa71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec71" type="text" class="form-control @error('kec71') is-invalid @enderror" name="kec71" value="{{$mahadaly1->kec71}}" placeholder="Kecamatan" required autocomplete="kec71" autofocus>
                  @error('kec71')
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
                  <input id="kab71" type="text" class="form-control @error('kab71') is-invalid @enderror" name="kab71" value="{{$mahadaly1->kab71}}" placeholder="Kabupaten / Kota" required autocomplete="kab71" autofocus>
                  @error('kab71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov71" type="text" class="form-control @error('prov71') is-invalid @enderror" name="prov71" value="{{$mahadaly1->prov71}}" placeholder="Provinsi" required autocomplete="prov71" autofocus>
                  @error('prov71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos71" type="text" class="form-control @error('kodepos71') is-invalid @enderror" name="kodepos71" value="{{$mahadaly1->kodepos71}}" placeholder="Kode Pos" required autocomplete="kodepos71" autofocus>
                  @error('kodepos71')
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
                  <input id="cita71" type="text" class="form-control @error('cita71') is-invalid @enderror" name="cita71" value="{{$mahadaly1->cita71}}" placeholder="Alamat Lengkap" required autocomplete="cita71" autofocus>
                  @error('cita71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara71" type="text" class="form-control @error('jumlahsaudara71') is-invalid @enderror" name="jumlahsaudara71" value="{{$mahadaly1->jumlahsaudara71}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara71" autofocus>
                  @error('jumlahsaudara71')
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
                  <input id="asalsekolah71" type="text" class="form-control @error('asalsekolah71') is-invalid @enderror" name="asalsekolah71" value="{{$mahadaly1->asalsekolah71}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah71" autofocus>
                  @error('asalsekolah71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah71" type="text" class="form-control @error('alamatasalsekolah71') is-invalid @enderror" name="alamatasalsekolah71" value="{{$mahadaly1->alamatasalsekolah71}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah71" autofocus>
                  @error('alamatasalsekolah71')
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
                  <input id="namaayah71" type="text" class="form-control @error('namaayah71') is-invalid @enderror" name="namaayah71" value="{{$mahadaly1->namaayah71}}" placeholder="Nama Ayah" required autocomplete="namaayah71" autofocus>
                  @error('namaayah71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah71" type="text" class="form-control @error('nikayah71') is-invalid @enderror" name="nikayah71" value="{{$mahadaly1->nikayah71}}" placeholder="NIK Ayah" required autocomplete="nikayah71" autofocus>
                  @error('nikayah71')
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
                  <input id="tahunlahirayah71" type="text" class="form-control @error('tahunlahirayah71') is-invalid @enderror" name="tahunlahirayah71" value="{{$mahadaly1->tahunlahirayah71}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah71" autofocus>
                  @error('tahunlahirayah71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah71" type="text" class="form-control @error('pendidikanayah71') is-invalid @enderror" name="pendidikanayah71" value="{{$mahadaly1->pendidikanayah71}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah71" autofocus>
                  @error('pendidikanayah71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah71" class="form-control @error('pendidikanayah71') is-invalid @enderror" name="pendidikanayah71" value="{{$mahadaly1->pendidikanayah71}}" required autocomplete="pendidikanayah71" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mahadaly1->pendidikanayah71 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mahadaly1->pendidikanayah71 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mahadaly1->pendidikanayah71 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mahadaly1->pendidikanayah71 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mahadaly1->pendidikanayah71 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mahadaly1->pendidikanayah71 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mahadaly1->pendidikanayah71 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah71')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah71" type="text" class="form-control @error('pekerjaanayah71') is-invalid @enderror" name="pekerjaanayah71" value="{{$mahadaly1->pekerjaanayah71}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah71" autofocus>
                  @error('pekerjaanayah71')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah71" class="form-control @error('pekerjaanayah71') is-invalid @enderror" name="pekerjaanayah71" value="{{$mahadaly1->pekerjaanayah71}}" required autocomplete="pekerjaanayah71" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mahadaly1->pekerjaanayah71 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mahadaly1->pekerjaanayah71 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mahadaly1->pekerjaanayah71 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mahadaly1->pekerjaanayah71 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mahadaly1->pekerjaanayah71 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mahadaly1->pekerjaanayah71 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mahadaly1->pekerjaanayah71 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mahadaly1->pekerjaanayah71 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mahadaly1->pekerjaanayah71 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mahadaly1->pekerjaanayah71 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mahadaly1->pekerjaanayah71 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mahadaly1->pekerjaanayah71 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah71')
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
                  <input id="namaibu71" type="text" class="form-control @error('namaibu71') is-invalid @enderror" name="namaibu71" value="{{$mahadaly1->namaibu71}}" placeholder="Nama Ibu" required autocomplete="namaibu71" autofocus>
                  @error('namaibu71')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu71" type="text" class="form-control @error('nikibu71') is-invalid @enderror" name="nikibu71" value="{{$mahadaly1->nikibu71}}" placeholder="NIK Ibu" required autocomplete="nikibu71" autofocus>
                  @error('nikibu71')
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
                  <input id="tahunlahiribu71" type="text" class="form-control @error('tahunlahiribu71') is-invalid @enderror" name="tahunlahiribu71" value="{{$mahadaly1->tahunlahiribu71}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu71" autofocus>
                  @error('tahunlahiribu71')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu71" type="text" class="form-control @error('pendidikanibu71') is-invalid @enderror" name="pendidikanibu71" value="{{$mahadaly1->pendidikanibu71}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu71" autofocus>
                  @error('pendidikanibu71')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu71" class="form-control @error('pendidikanibu71') is-invalid @enderror" name="pendidikanibu71" value="{{$mahadaly1->pendidikanibu71}}" required autocomplete="pendidikanibu71" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mahadaly1->pendidikanibu71 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mahadaly1->pendidikanibu71 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mahadaly1->pendidikanibu71 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mahadaly1->pendidikanibu71 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mahadaly1->pendidikanibu71 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mahadaly1->pendidikanibu71 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mahadaly1->pendidikanibu71 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu71')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu71" type="text" class="form-control @error('pekerjaanibu71') is-invalid @enderror" name="pekerjaanibu71" value="{{$mahadaly1->pekerjaanibu71}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu71" autofocus>
                  @error('pekerjaanibu71')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu71" class="form-control @error('pekerjaanibu71') is-invalid @enderror" name="pekerjaanibu71" value="{{$mahadaly1->pekerjaanibu71}}" required autocomplete="pekerjaanibu71" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mahadaly1->pekerjaanibu71 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mahadaly1->pekerjaanibu71 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mahadaly1->pekerjaanibu71 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mahadaly1->pekerjaanibu71 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mahadaly1->pekerjaanibu71 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mahadaly1->pekerjaanibu71 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mahadaly1->pekerjaanibu71 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mahadaly1->pekerjaanibu71 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mahadaly1->pekerjaanibu71 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mahadaly1->pekerjaanibu71 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mahadaly1->pekerjaanibu71 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mahadaly1->pekerjaanibu71 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu71')
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
                  <input id="penghasilan71" type="text" class="form-control @error('penghasilan71') is-invalid @enderror" name="penghasilan71" value="{{$mahadaly1->penghasilan71}}" placeholder="Penghasilan" required autocomplete="penghasilan71" autofocus>
                  @error('penghasilan71')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan71" class="form-control @error('penghasilan71') is-invalid @enderror" name="penghasilan71" value="{{$mahadaly1->penghasilan71}}" required autocomplete="penghasilan71" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($mahadaly1->penghasilan71 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($mahadaly1->penghasilan71 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($mahadaly1->penghasilan71 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($mahadaly1->penghasilan71 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($mahadaly1->penghasilan71 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($mahadaly1->penghasilan71 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan71')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi71" type="text" class="form-control @error('prestasi71') is-invalid @enderror" name="prestasi71" value="{{$mahadaly1->prestasi71}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi71" autofocus>
                  @error('prestasi71')
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
                  <input id="nohp71" type="text" class="form-control @error('nohp71') is-invalid @enderror" name="nohp71" value="{{$mahadaly1->nohp71}}" placeholder="No HP" required autocomplete="nohp71" autofocus>
                  @error('nohp71')
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

            