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
          <a href="{{url('smp18')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data SMP 1 KELAS 8 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smp18') }}/{{$smp18->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap18" type="text" class="form-control @error('namalengkap18') is-invalid @enderror" name="namalengkap18" value="{{$smp18->namalengkap18}}" placeholder="Nama Lengkap" required autocomplete="namalengkap18" autofocus>
                  @error('namalengkap18')
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
<!-- Status 
              <div class="form-group row">
                <div class="col-md-12">
                  <select id="inputState" class="form-control" id="status18" class="form-control @error('status18') is-invalid @enderror" name="status18">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smp18->status18 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smp18->status18 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smp18->status18 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smp18->status18 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smp18->status18 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smp18->status18 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror                              
                </div>
              </div>
 -->

<!-- Status  -->                       
              <div class="form-group row">
                <div class="col-md-12">
                  <label>Jenjang</label>
                  <input id="status18" type="text" class="form-control @error('status18') is-invalid @enderror" name="status18" value="{{$smp18->status18}}" placeholder="Status" >
                  @error('status18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar18">Foto (size max 1.90 mb)</label>
                  <input id="avatar18" type="file" class="form-control @error('avatar18') is-invalid @enderror" name="avatar18" value="{{$smp18->avatar18}}" placeholder="Avatar">
                  @error('avatar18')
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
                  <input id="nisn18" type="text" class="form-control @error('nisn18') is-invalid @enderror" name="nisn18" value="{{$smp18->nisn18}}" placeholder="NISN" required autocomplete="nisn18" autofocus>
                  @error('nisn18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik18" type="text" class="form-control @error('nik18') is-invalid @enderror" name="nik18" value="{{$smp18->nik18}}" placeholder="NIK" required autocomplete="nik18" autofocus>
                  @error('nik18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk18" type="text" class="form-control @error('nokk18') is-invalid @enderror" name="nokk18" value="{{$smp18->nokk18}}" placeholder="No KK" required autocomplete="nokk18" autofocus>
                  @error('nokk18')
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
                  <input id="tempatlahir18" type="text" class="form-control @error('tempatlahir18') is-invalid @enderror" name="tempatlahir18" value="{{$smp18->tempatlahir18}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir18" autofocus>
                  @error('tempatlahir18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt18" type="text" class="form-control @error('tbt18') is-invalid @enderror" name="tbt18" value="{{$smp18->tbt18}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt18" autofocus>
                  @error('tbt18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel18" type="text" class="form-control @error('jenkel18') is-invalid @enderror" name="jenkel18" value="{{$smp18->jenkel18}}" placeholder="Jenis Kelamin" required autocomplete="jenkel18" autofocus>
                  @error('jenkel18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel18" class="form-control @error('jenkel18') is-invalid @enderror" name="jenkel18" required autocomplete="jenkel18" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($smp18->jenkel18 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smp18->jenkel18 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel18')
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
                  <input id="desa18" type="text" class="form-control @error('desa18') is-invalid @enderror" name="desa18" value="{{$smp18->desa18}}" placeholder="Desa" required autocomplete="desa18" autofocus>
                  @error('desa18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec18" type="text" class="form-control @error('kec18') is-invalid @enderror" name="kec18" value="{{$smp18->kec18}}" placeholder="Kecamatan" required autocomplete="kec18" autofocus>
                  @error('kec18')
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
                  <input id="kab18" type="text" class="form-control @error('kab18') is-invalid @enderror" name="kab18" value="{{$smp18->kab18}}" placeholder="Kabupaten / Kota" required autocomplete="kab18" autofocus>
                  @error('kab18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov18" type="text" class="form-control @error('prov18') is-invalid @enderror" name="prov18" value="{{$smp18->prov18}}" placeholder="Provinsi" required autocomplete="prov18" autofocus>
                  @error('prov18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos18" type="text" class="form-control @error('kodepos18') is-invalid @enderror" name="kodepos18" value="{{$smp18->kodepos18}}" placeholder="Kode Pos" required autocomplete="kodepos18" autofocus>
                  @error('kodepos18')
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
                  <input id="cita18" type="text" class="form-control @error('cita18') is-invalid @enderror" name="cita18" value="{{$smp18->cita18}}" placeholder="Alamat Lengkap" required autocomplete="cita18" autofocus>
                  @error('cita18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara18" type="text" class="form-control @error('jumlahsaudara18') is-invalid @enderror" name="jumlahsaudara18" value="{{$smp18->jumlahsaudara18}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara18" autofocus>
                  @error('jumlahsaudara18')
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
                  <input id="asalsekolah18" type="text" class="form-control @error('asalsekolah18') is-invalid @enderror" name="asalsekolah18" value="{{$smp18->asalsekolah18}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah18" autofocus>
                  @error('asalsekolah18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah18" type="text" class="form-control @error('alamatasalsekolah18') is-invalid @enderror" name="alamatasalsekolah18" value="{{$smp18->alamatasalsekolah18}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah18" autofocus>
                  @error('alamatasalsekolah18')
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
                  <input id="namaayah18" type="text" class="form-control @error('namaayah18') is-invalid @enderror" name="namaayah18" value="{{$smp18->namaayah18}}" placeholder="Nama Ayah" required autocomplete="namaayah18" autofocus>
                  @error('namaayah18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah18" type="text" class="form-control @error('nikayah18') is-invalid @enderror" name="nikayah18" value="{{$smp18->nikayah18}}" placeholder="NIK Ayah" required autocomplete="nikayah18" autofocus>
                  @error('nikayah18')
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
                  <input id="tahunlahirayah18" type="text" class="form-control @error('tahunlahirayah18') is-invalid @enderror" name="tahunlahirayah18" value="{{$smp18->tahunlahirayah18}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah18" autofocus>
                  @error('tahunlahirayah18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah18" type="text" class="form-control @error('pendidikanayah18') is-invalid @enderror" name="pendidikanayah18" value="{{$smp18->pendidikanayah18}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah18" autofocus>
                  @error('pendidikanayah18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah18" class="form-control @error('pendidikanayah18') is-invalid @enderror" name="pendidikanayah18" value="{{$smp18->pendidikanayah18}}" required autocomplete="pendidikanayah18" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp18->pendidikanayah18 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp18->pendidikanayah18 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp18->pendidikanayah18 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp18->pendidikanayah18 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp18->pendidikanayah18 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp18->pendidikanayah18 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp18->pendidikanayah18 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah18')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah18" type="text" class="form-control @error('pekerjaanayah18') is-invalid @enderror" name="pekerjaanayah18" value="{{$smp18->pekerjaanayah18}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah18" autofocus>
                  @error('pekerjaanayah18')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah18" class="form-control @error('pekerjaanayah18') is-invalid @enderror" name="pekerjaanayah18" value="{{$smp18->pekerjaanayah18}}" required autocomplete="pekerjaanayah18" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp18->pekerjaanayah18 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp18->pekerjaanayah18 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp18->pekerjaanayah18 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp18->pekerjaanayah18 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp18->pekerjaanayah18 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp18->pekerjaanayah18 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp18->pekerjaanayah18 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp18->pekerjaanayah18 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp18->pekerjaanayah18 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp18->pekerjaanayah18 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp18->pekerjaanayah18 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp18->pekerjaanayah18 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah18')
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
                  <input id="namaibu18" type="text" class="form-control @error('namaibu18') is-invalid @enderror" name="namaibu18" value="{{$smp18->namaibu18}}" placeholder="Nama Ibu" required autocomplete="namaibu18" autofocus>
                  @error('namaibu18')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu18" type="text" class="form-control @error('nikibu18') is-invalid @enderror" name="nikibu18" value="{{$smp18->nikibu18}}" placeholder="NIK Ibu" required autocomplete="nikibu18" autofocus>
                  @error('nikibu18')
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
                  <input id="tahunlahiribu18" type="text" class="form-control @error('tahunlahiribu18') is-invalid @enderror" name="tahunlahiribu18" value="{{$smp18->tahunlahiribu18}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu18" autofocus>
                  @error('tahunlahiribu18')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu18" type="text" class="form-control @error('pendidikanibu18') is-invalid @enderror" name="pendidikanibu18" value="{{$smp18->pendidikanibu18}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu18" autofocus>
                  @error('pendidikanibu18')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu18" class="form-control @error('pendidikanibu18') is-invalid @enderror" name="pendidikanibu18" value="{{$smp18->pendidikanibu18}}" required autocomplete="pendidikanibu18" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp18->pendidikanibu18 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp18->pendidikanibu18 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp18->pendidikanibu18 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp18->pendidikanibu18 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp18->pendidikanibu18 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp18->pendidikanibu18 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp18->pendidikanibu18 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu18')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu18" type="text" class="form-control @error('pekerjaanibu18') is-invalid @enderror" name="pekerjaanibu18" value="{{$smp18->pekerjaanibu18}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu18" autofocus>
                  @error('pekerjaanibu18')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu18" class="form-control @error('pekerjaanibu18') is-invalid @enderror" name="pekerjaanibu18" value="{{$smp18->pekerjaanibu18}}" required autocomplete="pekerjaanibu18" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp18->pekerjaanibu18 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp18->pekerjaanibu18 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp18->pekerjaanibu18 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp18->pekerjaanibu18 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp18->pekerjaanibu18 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp18->pekerjaanibu18 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp18->pekerjaanibu18 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp18->pekerjaanibu18 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp18->pekerjaanibu18 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp18->pekerjaanibu18 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp18->pekerjaanibu18 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp18->pekerjaanibu18 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu18')
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
                  <input id="penghasilan18" type="text" class="form-control @error('penghasilan18') is-invalid @enderror" name="penghasilan18" value="{{$smp18->penghasilan18}}" placeholder="Penghasilan" required autocomplete="penghasilan18" autofocus>
                  @error('penghasilan18')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan18" class="form-control @error('penghasilan18') is-invalid @enderror" name="penghasilan18" value="{{$smp18->penghasilan18}}" required autocomplete="penghasilan18" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smp18->penghasilan18 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smp18->penghasilan18 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smp18->penghasilan18 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smp18->penghasilan18 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smp18->penghasilan18 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smp18->penghasilan18 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan18')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi18" type="text" class="form-control @error('prestasi18') is-invalid @enderror" name="prestasi18" value="{{$smp18->prestasi18}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi18" autofocus>
                  @error('prestasi18')
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
                  <input id="nohp18" type="text" class="form-control @error('nohp18') is-invalid @enderror" name="nohp18" value="{{$smp18->nohp18}}" placeholder="No HP" required autocomplete="nohp18" autofocus>
                  @error('nohp18')
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

            