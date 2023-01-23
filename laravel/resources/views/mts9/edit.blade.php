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
          <a href="{{url('mts9')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data MTs KELAS 9 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('mts9') }}/{{$mts9->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap39" type="text" class="form-control @error('namalengkap39') is-invalid @enderror" name="namalengkap39" value="{{$mts9->namalengkap39}}" placeholder="Nama Lengkap" required autocomplete="namalengkap39" autofocus>
                  @error('namalengkap39')
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
                  <select id="inputState" class="form-control" id="status39" class="form-control @error('status39') is-invalid @enderror" name="status39">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($mts9->status39 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($mts9->status39 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($mts9->status39 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($mts9->status39 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($mts9->status39 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($mts9->status39 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status39')
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
                  <input id="status39" type="text" class="form-control @error('status39') is-invalid @enderror" name="status39" value="{{$mts9->status39}}" placeholder="Status" >
                  @error('status39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar39">Foto (size max 1.90 mb)</label>
                  <input id="avatar39" type="file" class="form-control @error('avatar39') is-invalid @enderror" name="avatar39" value="{{$mts9->avatar39}}" placeholder="Avatar">
                  @error('avatar39')
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
                  <input id="nisn39" type="text" class="form-control @error('nisn39') is-invalid @enderror" name="nisn39" value="{{$mts9->nisn39}}" placeholder="NISN" required autocomplete="nisn39" autofocus>
                  @error('nisn39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik39" type="text" class="form-control @error('nik39') is-invalid @enderror" name="nik39" value="{{$mts9->nik39}}" placeholder="NIK" required autocomplete="nik39" autofocus>
                  @error('nik39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk39" type="text" class="form-control @error('nokk39') is-invalid @enderror" name="nokk39" value="{{$mts9->nokk39}}" placeholder="No KK" required autocomplete="nokk39" autofocus>
                  @error('nokk39')
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
                  <input id="tempatlahir39" type="text" class="form-control @error('tempatlahir39') is-invalid @enderror" name="tempatlahir39" value="{{$mts9->tempatlahir39}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir39" autofocus>
                  @error('tempatlahir39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt39" type="text" class="form-control @error('tbt39') is-invalid @enderror" name="tbt39" value="{{$mts9->tbt39}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt39" autofocus>
                  @error('tbt39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel39" type="text" class="form-control @error('jenkel39') is-invalid @enderror" name="jenkel39" value="{{$mts9->jenkel39}}" placeholder="Jenis Kelamin" required autocomplete="jenkel39" autofocus>
                  @error('jenkel39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel39" class="form-control @error('jenkel39') is-invalid @enderror" name="jenkel39" required autocomplete="jenkel39" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($mts9->jenkel39 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($mts9->jenkel39 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel39')
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
                  <input id="desa39" type="text" class="form-control @error('desa39') is-invalid @enderror" name="desa39" value="{{$mts9->desa39}}" placeholder="Desa" required autocomplete="desa39" autofocus>
                  @error('desa39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec39" type="text" class="form-control @error('kec39') is-invalid @enderror" name="kec39" value="{{$mts9->kec39}}" placeholder="Kecamatan" required autocomplete="kec39" autofocus>
                  @error('kec39')
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
                  <input id="kab39" type="text" class="form-control @error('kab39') is-invalid @enderror" name="kab39" value="{{$mts9->kab39}}" placeholder="Kabupaten / Kota" required autocomplete="kab39" autofocus>
                  @error('kab39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov39" type="text" class="form-control @error('prov39') is-invalid @enderror" name="prov39" value="{{$mts9->prov39}}" placeholder="Provinsi" required autocomplete="prov39" autofocus>
                  @error('prov39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos39" type="text" class="form-control @error('kodepos39') is-invalid @enderror" name="kodepos39" value="{{$mts9->kodepos39}}" placeholder="Kode Pos" required autocomplete="kodepos39" autofocus>
                  @error('kodepos39')
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
                  <input id="cita39" type="text" class="form-control @error('cita39') is-invalid @enderror" name="cita39" value="{{$mts9->cita39}}" placeholder="Alamat Lengkap" required autocomplete="cita39" autofocus>
                  @error('cita39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara39" type="text" class="form-control @error('jumlahsaudara39') is-invalid @enderror" name="jumlahsaudara39" value="{{$mts9->jumlahsaudara39}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara39" autofocus>
                  @error('jumlahsaudara39')
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
                  <input id="asalsekolah39" type="text" class="form-control @error('asalsekolah39') is-invalid @enderror" name="asalsekolah39" value="{{$mts9->asalsekolah39}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah39" autofocus>
                  @error('asalsekolah39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah39" type="text" class="form-control @error('alamatasalsekolah39') is-invalid @enderror" name="alamatasalsekolah39" value="{{$mts9->alamatasalsekolah39}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah39" autofocus>
                  @error('alamatasalsekolah39')
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
                  <input id="namaayah39" type="text" class="form-control @error('namaayah39') is-invalid @enderror" name="namaayah39" value="{{$mts9->namaayah39}}" placeholder="Nama Ayah" required autocomplete="namaayah39" autofocus>
                  @error('namaayah39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah39" type="text" class="form-control @error('nikayah39') is-invalid @enderror" name="nikayah39" value="{{$mts9->nikayah39}}" placeholder="NIK Ayah" required autocomplete="nikayah39" autofocus>
                  @error('nikayah39')
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
                  <input id="tahunlahirayah39" type="text" class="form-control @error('tahunlahirayah39') is-invalid @enderror" name="tahunlahirayah39" value="{{$mts9->tahunlahirayah39}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah39" autofocus>
                  @error('tahunlahirayah39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah39" type="text" class="form-control @error('pendidikanayah39') is-invalid @enderror" name="pendidikanayah39" value="{{$mts9->pendidikanayah39}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah39" autofocus>
                  @error('pendidikanayah39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah39" class="form-control @error('pendidikanayah39') is-invalid @enderror" name="pendidikanayah39" value="{{$mts9->pendidikanayah39}}" required autocomplete="pendidikanayah39" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mts9->pendidikanayah39 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mts9->pendidikanayah39 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mts9->pendidikanayah39 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mts9->pendidikanayah39 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mts9->pendidikanayah39 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mts9->pendidikanayah39 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mts9->pendidikanayah39 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah39')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah39" type="text" class="form-control @error('pekerjaanayah39') is-invalid @enderror" name="pekerjaanayah39" value="{{$mts9->pekerjaanayah39}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah39" autofocus>
                  @error('pekerjaanayah39')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah39" class="form-control @error('pekerjaanayah39') is-invalid @enderror" name="pekerjaanayah39" value="{{$mts9->pekerjaanayah39}}" required autocomplete="pekerjaanayah39" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mts9->pekerjaanayah39 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mts9->pekerjaanayah39 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mts9->pekerjaanayah39 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mts9->pekerjaanayah39 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mts9->pekerjaanayah39 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mts9->pekerjaanayah39 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mts9->pekerjaanayah39 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mts9->pekerjaanayah39 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mts9->pekerjaanayah39 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mts9->pekerjaanayah39 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mts9->pekerjaanayah39 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mts9->pekerjaanayah39 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah39')
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
                  <input id="namaibu39" type="text" class="form-control @error('namaibu39') is-invalid @enderror" name="namaibu39" value="{{$mts9->namaibu39}}" placeholder="Nama Ibu" required autocomplete="namaibu39" autofocus>
                  @error('namaibu39')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu39" type="text" class="form-control @error('nikibu39') is-invalid @enderror" name="nikibu39" value="{{$mts9->nikibu39}}" placeholder="NIK Ibu" required autocomplete="nikibu39" autofocus>
                  @error('nikibu39')
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
                  <input id="tahunlahiribu39" type="text" class="form-control @error('tahunlahiribu39') is-invalid @enderror" name="tahunlahiribu39" value="{{$mts9->tahunlahiribu39}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu39" autofocus>
                  @error('tahunlahiribu39')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu39" type="text" class="form-control @error('pendidikanibu39') is-invalid @enderror" name="pendidikanibu39" value="{{$mts9->pendidikanibu39}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu39" autofocus>
                  @error('pendidikanibu39')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu39" class="form-control @error('pendidikanibu39') is-invalid @enderror" name="pendidikanibu39" value="{{$mts9->pendidikanibu39}}" required autocomplete="pendidikanibu39" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mts9->pendidikanibu39 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mts9->pendidikanibu39 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mts9->pendidikanibu39 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mts9->pendidikanibu39 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mts9->pendidikanibu39 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mts9->pendidikanibu39 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mts9->pendidikanibu39 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu39')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu39" type="text" class="form-control @error('pekerjaanibu39') is-invalid @enderror" name="pekerjaanibu39" value="{{$mts9->pekerjaanibu39}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu39" autofocus>
                  @error('pekerjaanibu39')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu39" class="form-control @error('pekerjaanibu39') is-invalid @enderror" name="pekerjaanibu39" value="{{$mts9->pekerjaanibu39}}" required autocomplete="pekerjaanibu39" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mts9->pekerjaanibu39 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mts9->pekerjaanibu39 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mts9->pekerjaanibu39 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mts9->pekerjaanibu39 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mts9->pekerjaanibu39 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mts9->pekerjaanibu39 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mts9->pekerjaanibu39 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mts9->pekerjaanibu39 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mts9->pekerjaanibu39 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mts9->pekerjaanibu39 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mts9->pekerjaanibu39 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mts9->pekerjaanibu39 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu39')
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
                  <input id="penghasilan39" type="text" class="form-control @error('penghasilan39') is-invalid @enderror" name="penghasilan39" value="{{$mts9->penghasilan39}}" placeholder="Penghasilan" required autocomplete="penghasilan39" autofocus>
                  @error('penghasilan39')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan39" class="form-control @error('penghasilan39') is-invalid @enderror" name="penghasilan39" value="{{$mts9->penghasilan39}}" required autocomplete="penghasilan39" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($mts9->penghasilan39 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($mts9->penghasilan39 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($mts9->penghasilan39 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($mts9->penghasilan39 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($mts9->penghasilan39 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($mts9->penghasilan39 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan39')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi39" type="text" class="form-control @error('prestasi39') is-invalid @enderror" name="prestasi39" value="{{$mts9->prestasi39}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi39" autofocus>
                  @error('prestasi39')
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
                  <input id="nohp39" type="text" class="form-control @error('nohp39') is-invalid @enderror" name="nohp39" value="{{$mts9->nohp39}}" placeholder="No HP" required autocomplete="nohp39" autofocus>
                  @error('nohp39')
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

            