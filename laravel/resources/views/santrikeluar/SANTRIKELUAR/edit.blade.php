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
          <a href="{{url('santrikeluar')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data Santri Keluar dari Ponpes Askhabul Kahfi </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('santrikeluar') }}/{{$santrikeluar->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap00" type="text" class="form-control @error('namalengkap00') is-invalid @enderror" name="namalengkap00" value="{{$santrikeluar->namalengkap00}}" placeholder="Nama Lengkap" required autocomplete="namalengkap00" autofocus>
                  @error('namalengkap00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!--  __________________________________________________________________________________ -->
<!-- __________________________________________________________________________________ -->


<!-- __________________________________________________________________________________ -->
<!-- Status 
              <div class="form-group row">
                <div class="col-md-12">
                  <select id="inputState" class="form-control" id="status00" class="form-control @error('status00') is-invalid @enderror" name="status00">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($santrikeluar->status00 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($santrikeluar->status00 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($santrikeluar->status00 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($santrikeluar->status00 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($santrikeluar->status00 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($santrikeluar->status00 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status00')
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
                  <input id="status00" type="text" class="form-control @error('status00') is-invalid @enderror" name="status00" value="{{$santrikeluar->status00}}" placeholder="Status" >
                  @error('status00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar00">Foto (size max 1.90 mb)</label>
                  <input id="avatar00" type="file" class="form-control @error('avatar00') is-invalid @enderror" name="avatar00" value="{{$santrikeluar->avatar00}}" placeholder="Avatar">
                  @error('avatar00')
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
                  <input id="nisn00" type="text" class="form-control @error('nisn00') is-invalid @enderror" name="nisn00" value="{{$santrikeluar->nisn00}}" placeholder="NISN" required autocomplete="nisn00" autofocus>
                  @error('nisn00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik00" type="text" class="form-control @error('nik00') is-invalid @enderror" name="nik00" value="{{$santrikeluar->nik00}}" placeholder="NIK" required autocomplete="nik00" autofocus>
                  @error('nik00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk00" type="text" class="form-control @error('nokk00') is-invalid @enderror" name="nokk00" value="{{$santrikeluar->nokk00}}" placeholder="No KK" required autocomplete="nokk00" autofocus>
                  @error('nokk00')
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
                  <input id="tempatlahir00" type="text" class="form-control @error('tempatlahir00') is-invalid @enderror" name="tempatlahir00" value="{{$santrikeluar->tempatlahir00}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir00" autofocus>
                  @error('tempatlahir00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt00" type="text" class="form-control @error('tbt00') is-invalid @enderror" name="tbt00" value="{{$santrikeluar->tbt00}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt00" autofocus>
                  @error('tbt00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel00" type="text" class="form-control @error('jenkel00') is-invalid @enderror" name="jenkel00" value="{{$santrikeluar->jenkel00}}" placeholder="Jenis Kelamin" required autocomplete="jenkel00" autofocus>
                  @error('jenkel00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel00" class="form-control @error('jenkel00') is-invalid @enderror" name="jenkel00" required autocomplete="jenkel00" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($santrikeluar->jenkel00 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($santrikeluar->jenkel00 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel00')
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
                  <input id="desa00" type="text" class="form-control @error('desa00') is-invalid @enderror" name="desa00" value="{{$santrikeluar->desa00}}" placeholder="Desa" required autocomplete="desa00" autofocus>
                  @error('desa00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec00" type="text" class="form-control @error('kec00') is-invalid @enderror" name="kec00" value="{{$santrikeluar->kec00}}" placeholder="Kecamatan" required autocomplete="kec00" autofocus>
                  @error('kec00')
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
                  <input id="kab00" type="text" class="form-control @error('kab00') is-invalid @enderror" name="kab00" value="{{$santrikeluar->kab00}}" placeholder="Kabupaten / Kota" required autocomplete="kab00" autofocus>
                  @error('kab00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov00" type="text" class="form-control @error('prov00') is-invalid @enderror" name="prov00" value="{{$santrikeluar->prov00}}" placeholder="Provinsi" required autocomplete="prov00" autofocus>
                  @error('prov00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos00" type="text" class="form-control @error('kodepos00') is-invalid @enderror" name="kodepos00" value="{{$santrikeluar->kodepos00}}" placeholder="Kode Pos" required autocomplete="kodepos00" autofocus>
                  @error('kodepos00')
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
                  <input id="cita00" type="text" class="form-control @error('cita00') is-invalid @enderror" name="cita00" value="{{$santrikeluar->cita00}}" placeholder="Alamat Lengkap" required autocomplete="cita00" autofocus>
                  @error('cita00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara00" type="number" class="form-control @error('jumlahsaudara00') is-invalid @enderror" name="jumlahsaudara00" value="{{$santrikeluar->jumlahsaudara00}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara00" autofocus>
                  @error('jumlahsaudara00')
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
                  <input id="asalsekolah00" type="text" class="form-control @error('asalsekolah00') is-invalid @enderror" name="asalsekolah00" value="{{$santrikeluar->asalsekolah00}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah00" autofocus>
                  @error('asalsekolah00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah00" type="text" class="form-control @error('alamatasalsekolah00') is-invalid @enderror" name="alamatasalsekolah00" value="{{$santrikeluar->alamatasalsekolah00}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah00" autofocus>
                  @error('alamatasalsekolah00')
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
                  <input id="namaayah00" type="text" class="form-control @error('namaayah00') is-invalid @enderror" name="namaayah00" value="{{$santrikeluar->namaayah00}}" placeholder="Nama Ayah" required autocomplete="namaayah00" autofocus>
                  @error('namaayah00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah00" type="text" class="form-control @error('nikayah00') is-invalid @enderror" name="nikayah00" value="{{$santrikeluar->nikayah00}}" placeholder="NIK Ayah" required autocomplete="nikayah00" autofocus>
                  @error('nikayah00')
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
                  <input id="tahunlahirayah00" type="text" class="form-control @error('tahunlahirayah00') is-invalid @enderror" name="tahunlahirayah00" value="{{$santrikeluar->tahunlahirayah00}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah00" autofocus>
                  @error('tahunlahirayah00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah00" type="text" class="form-control @error('pendidikanayah00') is-invalid @enderror" name="pendidikanayah00" value="{{$santrikeluar->pendidikanayah00}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah00" autofocus>
                  @error('pendidikanayah00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah00" class="form-control @error('pendidikanayah00') is-invalid @enderror" name="pendidikanayah00" value="{{$santrikeluar->pendidikanayah00}}" required autocomplete="pendidikanayah00" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($santrikeluar->pendidikanayah00 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($santrikeluar->pendidikanayah00 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($santrikeluar->pendidikanayah00 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($santrikeluar->pendidikanayah00 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($santrikeluar->pendidikanayah00 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($santrikeluar->pendidikanayah00 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($santrikeluar->pendidikanayah00 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah00')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah00" type="text" class="form-control @error('pekerjaanayah00') is-invalid @enderror" name="pekerjaanayah00" value="{{$santrikeluar->pekerjaanayah00}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah00" autofocus>
                  @error('pekerjaanayah00')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah00" class="form-control @error('pekerjaanayah00') is-invalid @enderror" name="pekerjaanayah00" value="{{$santrikeluar->pekerjaanayah00}}" required autocomplete="pekerjaanayah00" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($santrikeluar->pekerjaanayah00 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($santrikeluar->pekerjaanayah00 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($santrikeluar->pekerjaanayah00 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($santrikeluar->pekerjaanayah00 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($santrikeluar->pekerjaanayah00 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($santrikeluar->pekerjaanayah00 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($santrikeluar->pekerjaanayah00 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($santrikeluar->pekerjaanayah00 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($santrikeluar->pekerjaanayah00 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($santrikeluar->pekerjaanayah00 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($santrikeluar->pekerjaanayah00 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($santrikeluar->pekerjaanayah00 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah00')
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
                  <input id="namaibu00" type="text" class="form-control @error('namaibu00') is-invalid @enderror" name="namaibu00" value="{{$santrikeluar->namaibu00}}" placeholder="Nama Ibu" required autocomplete="namaibu00" autofocus>
                  @error('namaibu00')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu00" type="text" class="form-control @error('nikibu00') is-invalid @enderror" name="nikibu00" value="{{$santrikeluar->nikibu00}}" placeholder="NIK Ibu" required autocomplete="nikibu00" autofocus>
                  @error('nikibu00')
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
                  <input id="tahunlahiribu00" type="text" class="form-control @error('tahunlahiribu00') is-invalid @enderror" name="tahunlahiribu00" value="{{$santrikeluar->tahunlahiribu00}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu00" autofocus>
                  @error('tahunlahiribu00')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu00" type="text" class="form-control @error('pendidikanibu00') is-invalid @enderror" name="pendidikanibu00" value="{{$santrikeluar->pendidikanibu00}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu00" autofocus>
                  @error('pendidikanibu00')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu00" class="form-control @error('pendidikanibu00') is-invalid @enderror" name="pendidikanibu00" value="{{$santrikeluar->pendidikanibu00}}" required autocomplete="pendidikanibu00" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($santrikeluar->pendidikanibu00 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($santrikeluar->pendidikanibu00 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($santrikeluar->pendidikanibu00 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($santrikeluar->pendidikanibu00 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($santrikeluar->pendidikanibu00 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($santrikeluar->pendidikanibu00 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($santrikeluar->pendidikanibu00 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu00')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu00" type="text" class="form-control @error('pekerjaanibu00') is-invalid @enderror" name="pekerjaanibu00" value="{{$santrikeluar->pekerjaanibu00}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu00" autofocus>
                  @error('pekerjaanibu00')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu00" class="form-control @error('pekerjaanibu00') is-invalid @enderror" name="pekerjaanibu00" value="{{$santrikeluar->pekerjaanibu00}}" required autocomplete="pekerjaanibu00" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($santrikeluar->pekerjaanibu00 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($santrikeluar->pekerjaanibu00 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($santrikeluar->pekerjaanibu00 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($santrikeluar->pekerjaanibu00 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($santrikeluar->pekerjaanibu00 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($santrikeluar->pekerjaanibu00 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($santrikeluar->pekerjaanibu00 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($santrikeluar->pekerjaanibu00 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($santrikeluar->pekerjaanibu00 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($santrikeluar->pekerjaanibu00 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($santrikeluar->pekerjaanibu00 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($santrikeluar->pekerjaanibu00 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu00')
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
                  <input id="penghasilan00" type="text" class="form-control @error('penghasilan00') is-invalid @enderror" name="penghasilan00" value="{{$santrikeluar->penghasilan00}}" placeholder="Penghasilan" required autocomplete="penghasilan00" autofocus>
                  @error('penghasilan00')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan00" class="form-control @error('penghasilan00') is-invalid @enderror" name="penghasilan00" value="{{$santrikeluar->penghasilan00}}" required autocomplete="penghasilan00" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($santrikeluar->penghasilan00 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($santrikeluar->penghasilan00 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($santrikeluar->penghasilan00 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($santrikeluar->penghasilan00 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($santrikeluar->penghasilan00 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($santrikeluar->penghasilan00 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan00')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi00" type="text" class="form-control @error('prestasi00') is-invalid @enderror" name="prestasi00" value="{{$santrikeluar->prestasi00}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi00" autofocus>
                  @error('prestasi00')
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
                  <input id="nohp00" type="text" class="form-control @error('nohp00') is-invalid @enderror" name="nohp00" value="{{$santrikeluar->nohp00}}" placeholder="No HP" required autocomplete="nohp00" autofocus>
                  @error('nohp00')
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

            