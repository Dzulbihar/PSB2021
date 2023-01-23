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
          <a href="{{url('ma11')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data MA KELAS 11 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('ma11') }}/{{$ma11->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap62" type="text" class="form-control @error('namalengkap62') is-invalid @enderror" name="namalengkap62" value="{{$ma11->namalengkap62}}" placeholder="Nama Lengkap" required autocomplete="namalengkap62" autofocus>
                  @error('namalengkap62')
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
                  <select id="inputState" class="form-control" id="status62" class="form-control @error('status62') is-invalid @enderror" name="status62">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($ma11->status62 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($ma11->status62 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($ma11->status62 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($ma11->status62 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($ma11->status62 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($ma11->status62 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status62')
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
                  <input id="status62" type="text" class="form-control @error('status62') is-invalid @enderror" name="status62" value="{{$ma11->status62}}" placeholder="Status" >
                  @error('status62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar62">Foto (size max 1.90 mb)</label>
                  <input id="avatar62" type="file" class="form-control @error('avatar62') is-invalid @enderror" name="avatar62" value="{{$ma11->avatar62}}" placeholder="Avatar">
                  @error('avatar62')
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
                  <input id="nisn62" type="text" class="form-control @error('nisn62') is-invalid @enderror" name="nisn62" value="{{$ma11->nisn62}}" placeholder="NISN" required autocomplete="nisn62" autofocus>
                  @error('nisn62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik62" type="text" class="form-control @error('nik62') is-invalid @enderror" name="nik62" value="{{$ma11->nik62}}" placeholder="NIK" required autocomplete="nik62" autofocus>
                  @error('nik62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk62" type="text" class="form-control @error('nokk62') is-invalid @enderror" name="nokk62" value="{{$ma11->nokk62}}" placeholder="No KK" required autocomplete="nokk62" autofocus>
                  @error('nokk62')
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
                  <input id="tempatlahir62" type="text" class="form-control @error('tempatlahir62') is-invalid @enderror" name="tempatlahir62" value="{{$ma11->tempatlahir62}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir62" autofocus>
                  @error('tempatlahir62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt62" type="text" class="form-control @error('tbt62') is-invalid @enderror" name="tbt62" value="{{$ma11->tbt62}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt62" autofocus>
                  @error('tbt62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel62" type="text" class="form-control @error('jenkel62') is-invalid @enderror" name="jenkel62" value="{{$ma11->jenkel62}}" placeholder="Jenis Kelamin" required autocomplete="jenkel62" autofocus>
                  @error('jenkel62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel62" class="form-control @error('jenkel62') is-invalid @enderror" name="jenkel62" required autocomplete="jenkel62" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($ma11->jenkel62 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($ma11->jenkel62 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel62')
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
                  <input id="desa62" type="text" class="form-control @error('desa62') is-invalid @enderror" name="desa62" value="{{$ma11->desa62}}" placeholder="Desa" required autocomplete="desa62" autofocus>
                  @error('desa62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec62" type="text" class="form-control @error('kec62') is-invalid @enderror" name="kec62" value="{{$ma11->kec62}}" placeholder="Kecamatan" required autocomplete="kec62" autofocus>
                  @error('kec62')
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
                  <input id="kab62" type="text" class="form-control @error('kab62') is-invalid @enderror" name="kab62" value="{{$ma11->kab62}}" placeholder="Kabupaten / Kota" required autocomplete="kab62" autofocus>
                  @error('kab62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov62" type="text" class="form-control @error('prov62') is-invalid @enderror" name="prov62" value="{{$ma11->prov62}}" placeholder="Provinsi" required autocomplete="prov62" autofocus>
                  @error('prov62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos62" type="text" class="form-control @error('kodepos62') is-invalid @enderror" name="kodepos62" value="{{$ma11->kodepos62}}" placeholder="Kode Pos" required autocomplete="kodepos62" autofocus>
                  @error('kodepos62')
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
                  <input id="cita62" type="text" class="form-control @error('cita62') is-invalid @enderror" name="cita62" value="{{$ma11->cita62}}" placeholder="Alamat Lengkap" required autocomplete="cita62" autofocus>
                  @error('cita62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara62" type="text" class="form-control @error('jumlahsaudara62') is-invalid @enderror" name="jumlahsaudara62" value="{{$ma11->jumlahsaudara62}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara62" autofocus>
                  @error('jumlahsaudara62')
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
                  <input id="asalsekolah62" type="text" class="form-control @error('asalsekolah62') is-invalid @enderror" name="asalsekolah62" value="{{$ma11->asalsekolah62}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah62" autofocus>
                  @error('asalsekolah62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah62" type="text" class="form-control @error('alamatasalsekolah62') is-invalid @enderror" name="alamatasalsekolah62" value="{{$ma11->alamatasalsekolah62}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah62" autofocus>
                  @error('alamatasalsekolah62')
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
                  <input id="namaayah62" type="text" class="form-control @error('namaayah62') is-invalid @enderror" name="namaayah62" value="{{$ma11->namaayah62}}" placeholder="Nama Ayah" required autocomplete="namaayah62" autofocus>
                  @error('namaayah62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah62" type="text" class="form-control @error('nikayah62') is-invalid @enderror" name="nikayah62" value="{{$ma11->nikayah62}}" placeholder="NIK Ayah" required autocomplete="nikayah62" autofocus>
                  @error('nikayah62')
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
                  <input id="tahunlahirayah62" type="text" class="form-control @error('tahunlahirayah62') is-invalid @enderror" name="tahunlahirayah62" value="{{$ma11->tahunlahirayah62}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah62" autofocus>
                  @error('tahunlahirayah62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah62" type="text" class="form-control @error('pendidikanayah62') is-invalid @enderror" name="pendidikanayah62" value="{{$ma11->pendidikanayah62}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah62" autofocus>
                  @error('pendidikanayah62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah62" class="form-control @error('pendidikanayah62') is-invalid @enderror" name="pendidikanayah62" value="{{$ma11->pendidikanayah62}}" required autocomplete="pendidikanayah62" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($ma11->pendidikanayah62 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($ma11->pendidikanayah62 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($ma11->pendidikanayah62 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($ma11->pendidikanayah62 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($ma11->pendidikanayah62 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($ma11->pendidikanayah62 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($ma11->pendidikanayah62 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah62')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah62" type="text" class="form-control @error('pekerjaanayah62') is-invalid @enderror" name="pekerjaanayah62" value="{{$ma11->pekerjaanayah62}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah62" autofocus>
                  @error('pekerjaanayah62')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah62" class="form-control @error('pekerjaanayah62') is-invalid @enderror" name="pekerjaanayah62" value="{{$ma11->pekerjaanayah62}}" required autocomplete="pekerjaanayah62" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($ma11->pekerjaanayah62 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($ma11->pekerjaanayah62 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($ma11->pekerjaanayah62 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($ma11->pekerjaanayah62 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($ma11->pekerjaanayah62 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($ma11->pekerjaanayah62 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($ma11->pekerjaanayah62 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($ma11->pekerjaanayah62 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($ma11->pekerjaanayah62 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($ma11->pekerjaanayah62 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($ma11->pekerjaanayah62 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($ma11->pekerjaanayah62 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah62')
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
                  <input id="namaibu62" type="text" class="form-control @error('namaibu62') is-invalid @enderror" name="namaibu62" value="{{$ma11->namaibu62}}" placeholder="Nama Ibu" required autocomplete="namaibu62" autofocus>
                  @error('namaibu62')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu62" type="text" class="form-control @error('nikibu62') is-invalid @enderror" name="nikibu62" value="{{$ma11->nikibu62}}" placeholder="NIK Ibu" required autocomplete="nikibu62" autofocus>
                  @error('nikibu62')
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
                  <input id="tahunlahiribu62" type="text" class="form-control @error('tahunlahiribu62') is-invalid @enderror" name="tahunlahiribu62" value="{{$ma11->tahunlahiribu62}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu62" autofocus>
                  @error('tahunlahiribu62')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu62" type="text" class="form-control @error('pendidikanibu62') is-invalid @enderror" name="pendidikanibu62" value="{{$ma11->pendidikanibu62}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu62" autofocus>
                  @error('pendidikanibu62')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu62" class="form-control @error('pendidikanibu62') is-invalid @enderror" name="pendidikanibu62" value="{{$ma11->pendidikanibu62}}" required autocomplete="pendidikanibu62" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($ma11->pendidikanibu62 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($ma11->pendidikanibu62 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($ma11->pendidikanibu62 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($ma11->pendidikanibu62 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($ma11->pendidikanibu62 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($ma11->pendidikanibu62 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($ma11->pendidikanibu62 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu62')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu62" type="text" class="form-control @error('pekerjaanibu62') is-invalid @enderror" name="pekerjaanibu62" value="{{$ma11->pekerjaanibu62}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu62" autofocus>
                  @error('pekerjaanibu62')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu62" class="form-control @error('pekerjaanibu62') is-invalid @enderror" name="pekerjaanibu62" value="{{$ma11->pekerjaanibu62}}" required autocomplete="pekerjaanibu62" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($ma11->pekerjaanibu62 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($ma11->pekerjaanibu62 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($ma11->pekerjaanibu62 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($ma11->pekerjaanibu62 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($ma11->pekerjaanibu62 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($ma11->pekerjaanibu62 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($ma11->pekerjaanibu62 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($ma11->pekerjaanibu62 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($ma11->pekerjaanibu62 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($ma11->pekerjaanibu62 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($ma11->pekerjaanibu62 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($ma11->pekerjaanibu62 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu62')
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
                  <input id="penghasilan62" type="text" class="form-control @error('penghasilan62') is-invalid @enderror" name="penghasilan62" value="{{$ma11->penghasilan62}}" placeholder="Penghasilan" required autocomplete="penghasilan62" autofocus>
                  @error('penghasilan62')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan62" class="form-control @error('penghasilan62') is-invalid @enderror" name="penghasilan62" value="{{$ma11->penghasilan62}}" required autocomplete="penghasilan62" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($ma11->penghasilan62 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($ma11->penghasilan62 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($ma11->penghasilan62 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($ma11->penghasilan62 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($ma11->penghasilan62 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($ma11->penghasilan62 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan62')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi62" type="text" class="form-control @error('prestasi62') is-invalid @enderror" name="prestasi62" value="{{$ma11->prestasi62}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi62" autofocus>
                  @error('prestasi62')
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
                  <input id="nohp62" type="text" class="form-control @error('nohp62') is-invalid @enderror" name="nohp62" value="{{$ma11->nohp62}}" placeholder="No HP" required autocomplete="nohp62" autofocus>
                  @error('nohp62')
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

            