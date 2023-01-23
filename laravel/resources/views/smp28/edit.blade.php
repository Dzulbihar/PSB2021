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
          <a href="{{url('smp28')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data SMP 2 KELAS 8 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smp28') }}/{{$smp28->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap28" type="text" class="form-control @error('namalengkap28') is-invalid @enderror" name="namalengkap28" value="{{$smp28->namalengkap28}}" placeholder="Nama Lengkap" required autocomplete="namalengkap28" autofocus>
                  @error('namalengkap28')
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
                  <select id="inputState" class="form-control" id="status28" class="form-control @error('status28') is-invalid @enderror" name="status28">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smp28->status28 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smp28->status28 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smp28->status28 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smp28->status28 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smp28->status28 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smp28->status28 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status28')
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
                  <input id="status28" type="text" class="form-control @error('status28') is-invalid @enderror" name="status28" value="{{$smp28->status28}}" placeholder="Status" >
                  @error('status28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar28">Foto (size max 1.90 mb)</label>
                  <input id="avatar28" type="file" class="form-control @error('avatar28') is-invalid @enderror" name="avatar28" value="{{$smp28->avatar28}}" placeholder="Avatar">
                  @error('avatar28')
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
                  <input id="nisn28" type="text" class="form-control @error('nisn28') is-invalid @enderror" name="nisn28" value="{{$smp28->nisn28}}" placeholder="NISN" required autocomplete="nisn28" autofocus>
                  @error('nisn28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik28" type="text" class="form-control @error('nik28') is-invalid @enderror" name="nik28" value="{{$smp28->nik28}}" placeholder="NIK" required autocomplete="nik28" autofocus>
                  @error('nik28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk28" type="text" class="form-control @error('nokk28') is-invalid @enderror" name="nokk28" value="{{$smp28->nokk28}}" placeholder="No KK" required autocomplete="nokk28" autofocus>
                  @error('nokk28')
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
                  <input id="tempatlahir28" type="text" class="form-control @error('tempatlahir28') is-invalid @enderror" name="tempatlahir28" value="{{$smp28->tempatlahir28}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir28" autofocus>
                  @error('tempatlahir28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt28" type="text" class="form-control @error('tbt28') is-invalid @enderror" name="tbt28" value="{{$smp28->tbt28}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt28" autofocus>
                  @error('tbt28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel28" type="text" class="form-control @error('jenkel28') is-invalid @enderror" name="jenkel28" value="{{$smp28->jenkel28}}" placeholder="Jenis Kelamin" required autocomplete="jenkel28" autofocus>
                  @error('jenkel28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel28" class="form-control @error('jenkel28') is-invalid @enderror" name="jenkel28" required autocomplete="jenkel28" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($smp28->jenkel28 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smp28->jenkel28 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel28')
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
                  <input id="desa28" type="text" class="form-control @error('desa28') is-invalid @enderror" name="desa28" value="{{$smp28->desa28}}" placeholder="Desa" required autocomplete="desa28" autofocus>
                  @error('desa28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec28" type="text" class="form-control @error('kec28') is-invalid @enderror" name="kec28" value="{{$smp28->kec28}}" placeholder="Kecamatan" required autocomplete="kec28" autofocus>
                  @error('kec28')
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
                  <input id="kab28" type="text" class="form-control @error('kab28') is-invalid @enderror" name="kab28" value="{{$smp28->kab28}}" placeholder="Kabupaten / Kota" required autocomplete="kab28" autofocus>
                  @error('kab28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov28" type="text" class="form-control @error('prov28') is-invalid @enderror" name="prov28" value="{{$smp28->prov28}}" placeholder="Provinsi" required autocomplete="prov28" autofocus>
                  @error('prov28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos28" type="text" class="form-control @error('kodepos28') is-invalid @enderror" name="kodepos28" value="{{$smp28->kodepos28}}" placeholder="Kode Pos" required autocomplete="kodepos28" autofocus>
                  @error('kodepos28')
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
                  <input id="cita28" type="text" class="form-control @error('cita28') is-invalid @enderror" name="cita28" value="{{$smp28->cita28}}" placeholder="Alamat Lengkap" required autocomplete="cita28" autofocus>
                  @error('cita28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara28" type="number" class="form-control @error('jumlahsaudara28') is-invalid @enderror" name="jumlahsaudara28" value="{{$smp28->jumlahsaudara28}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara28" autofocus>
                  @error('jumlahsaudara28')
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
                  <input id="asalsekolah28" type="text" class="form-control @error('asalsekolah28') is-invalid @enderror" name="asalsekolah28" value="{{$smp28->asalsekolah28}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah28" autofocus>
                  @error('asalsekolah28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah28" type="text" class="form-control @error('alamatasalsekolah28') is-invalid @enderror" name="alamatasalsekolah28" value="{{$smp28->alamatasalsekolah28}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah28" autofocus>
                  @error('alamatasalsekolah28')
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
                  <input id="namaayah28" type="text" class="form-control @error('namaayah28') is-invalid @enderror" name="namaayah28" value="{{$smp28->namaayah28}}" placeholder="Nama Ayah" required autocomplete="namaayah28" autofocus>
                  @error('namaayah28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah28" type="text" class="form-control @error('nikayah28') is-invalid @enderror" name="nikayah28" value="{{$smp28->nikayah28}}" placeholder="NIK Ayah" required autocomplete="nikayah28" autofocus>
                  @error('nikayah28')
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
                  <input id="tahunlahirayah28" type="text" class="form-control @error('tahunlahirayah28') is-invalid @enderror" name="tahunlahirayah28" value="{{$smp28->tahunlahirayah28}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah28" autofocus>
                  @error('tahunlahirayah28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah28" type="text" class="form-control @error('pendidikanayah28') is-invalid @enderror" name="pendidikanayah28" value="{{$smp28->pendidikanayah28}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah28" autofocus>
                  @error('pendidikanayah28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah28" class="form-control @error('pendidikanayah28') is-invalid @enderror" name="pendidikanayah28" value="{{$smp28->pendidikanayah28}}" required autocomplete="pendidikanayah28" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp28->pendidikanayah28 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp28->pendidikanayah28 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp28->pendidikanayah28 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp28->pendidikanayah28 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp28->pendidikanayah28 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp28->pendidikanayah28 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp28->pendidikanayah28 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah28')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah28" type="text" class="form-control @error('pekerjaanayah28') is-invalid @enderror" name="pekerjaanayah28" value="{{$smp28->pekerjaanayah28}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah28" autofocus>
                  @error('pekerjaanayah28')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah28" class="form-control @error('pekerjaanayah28') is-invalid @enderror" name="pekerjaanayah28" value="{{$smp28->pekerjaanayah28}}" required autocomplete="pekerjaanayah28" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp28->pekerjaanayah28 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp28->pekerjaanayah28 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp28->pekerjaanayah28 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp28->pekerjaanayah28 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp28->pekerjaanayah28 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp28->pekerjaanayah28 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp28->pekerjaanayah28 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp28->pekerjaanayah28 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp28->pekerjaanayah28 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp28->pekerjaanayah28 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp28->pekerjaanayah28 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp28->pekerjaanayah28 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah28')
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
                  <input id="namaibu28" type="text" class="form-control @error('namaibu28') is-invalid @enderror" name="namaibu28" value="{{$smp28->namaibu28}}" placeholder="Nama Ibu" required autocomplete="namaibu28" autofocus>
                  @error('namaibu28')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu28" type="text" class="form-control @error('nikibu28') is-invalid @enderror" name="nikibu28" value="{{$smp28->nikibu28}}" placeholder="NIK Ibu" required autocomplete="nikibu28" autofocus>
                  @error('nikibu28')
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
                  <input id="tahunlahiribu28" type="text" class="form-control @error('tahunlahiribu28') is-invalid @enderror" name="tahunlahiribu28" value="{{$smp28->tahunlahiribu28}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu28" autofocus>
                  @error('tahunlahiribu28')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu28" type="text" class="form-control @error('pendidikanibu28') is-invalid @enderror" name="pendidikanibu28" value="{{$smp28->pendidikanibu28}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu28" autofocus>
                  @error('pendidikanibu28')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu28" class="form-control @error('pendidikanibu28') is-invalid @enderror" name="pendidikanibu28" value="{{$smp28->pendidikanibu28}}" required autocomplete="pendidikanibu28" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp28->pendidikanibu28 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp28->pendidikanibu28 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp28->pendidikanibu28 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp28->pendidikanibu28 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp28->pendidikanibu28 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp28->pendidikanibu28 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp28->pendidikanibu28 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu28')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu28" type="text" class="form-control @error('pekerjaanibu28') is-invalid @enderror" name="pekerjaanibu28" value="{{$smp28->pekerjaanibu28}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu28" autofocus>
                  @error('pekerjaanibu28')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu28" class="form-control @error('pekerjaanibu28') is-invalid @enderror" name="pekerjaanibu28" value="{{$smp28->pekerjaanibu28}}" required autocomplete="pekerjaanibu28" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp28->pekerjaanibu28 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp28->pekerjaanibu28 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp28->pekerjaanibu28 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp28->pekerjaanibu28 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp28->pekerjaanibu28 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp28->pekerjaanibu28 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp28->pekerjaanibu28 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp28->pekerjaanibu28 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp28->pekerjaanibu28 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp28->pekerjaanibu28 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp28->pekerjaanibu28 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp28->pekerjaanibu28 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu28')
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
                  <input id="penghasilan28" type="text" class="form-control @error('penghasilan28') is-invalid @enderror" name="penghasilan28" value="{{$smp28->penghasilan28}}" placeholder="Penghasilan" required autocomplete="penghasilan28" autofocus>
                  @error('penghasilan28')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan28" class="form-control @error('penghasilan28') is-invalid @enderror" name="penghasilan28" value="{{$smp28->penghasilan28}}" required autocomplete="penghasilan28" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smp28->penghasilan28 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smp28->penghasilan28 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smp28->penghasilan28 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smp28->penghasilan28 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smp28->penghasilan28 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smp28->penghasilan28 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan28')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi28" type="text" class="form-control @error('prestasi28') is-invalid @enderror" name="prestasi28" value="{{$smp28->prestasi28}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi28" autofocus>
                  @error('prestasi28')
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
                  <input id="nohp28" type="text" class="form-control @error('nohp28') is-invalid @enderror" name="nohp28" value="{{$smp28->nohp28}}" placeholder="No HP" required autocomplete="nohp28" autofocus>
                  @error('nohp28')
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

            