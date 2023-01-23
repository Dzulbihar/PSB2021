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
          <a href="{{url('ma12')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data MA KELAS 12 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('ma12') }}/{{$ma12->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap63" type="text" class="form-control @error('namalengkap63') is-invalid @enderror" name="namalengkap63" value="{{$ma12->namalengkap63}}" placeholder="Nama Lengkap" required autocomplete="namalengkap63" autofocus>
                  @error('namalengkap63')
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
                  <select id="inputState" class="form-control" id="status63" class="form-control @error('status63') is-invalid @enderror" name="status63">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($ma12->status63 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($ma12->status63 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($ma12->status63 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($ma12->status63 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($ma12->status63 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($ma12->status63 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status63')
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
                  <input id="status63" type="text" class="form-control @error('status63') is-invalid @enderror" name="status63" value="{{$ma12->status63}}" placeholder="Status" >
                  @error('status63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar63">Foto (size max 1.90 mb)</label>
                  <input id="avatar63" type="file" class="form-control @error('avatar63') is-invalid @enderror" name="avatar63" value="{{$ma12->avatar63}}" placeholder="Avatar">
                  @error('avatar63')
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
                  <input id="nisn63" type="text" class="form-control @error('nisn63') is-invalid @enderror" name="nisn63" value="{{$ma12->nisn63}}" placeholder="NISN" required autocomplete="nisn63" autofocus>
                  @error('nisn63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik63" type="text" class="form-control @error('nik63') is-invalid @enderror" name="nik63" value="{{$ma12->nik63}}" placeholder="NIK" required autocomplete="nik63" autofocus>
                  @error('nik63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk63" type="text" class="form-control @error('nokk63') is-invalid @enderror" name="nokk63" value="{{$ma12->nokk63}}" placeholder="No KK" required autocomplete="nokk63" autofocus>
                  @error('nokk63')
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
                  <input id="tempatlahir63" type="text" class="form-control @error('tempatlahir63') is-invalid @enderror" name="tempatlahir63" value="{{$ma12->tempatlahir63}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir63" autofocus>
                  @error('tempatlahir63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt63" type="text" class="form-control @error('tbt63') is-invalid @enderror" name="tbt63" value="{{$ma12->tbt63}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt63" autofocus>
                  @error('tbt63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel63" type="text" class="form-control @error('jenkel63') is-invalid @enderror" name="jenkel63" value="{{$ma12->jenkel63}}" placeholder="Jenis Kelamin" required autocomplete="jenkel63" autofocus>
                  @error('jenkel63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel63" class="form-control @error('jenkel63') is-invalid @enderror" name="jenkel63" required autocomplete="jenkel63" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($ma12->jenkel63 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($ma12->jenkel63 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel63')
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
                  <input id="desa63" type="text" class="form-control @error('desa63') is-invalid @enderror" name="desa63" value="{{$ma12->desa63}}" placeholder="Desa" required autocomplete="desa63" autofocus>
                  @error('desa63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec63" type="text" class="form-control @error('kec63') is-invalid @enderror" name="kec63" value="{{$ma12->kec63}}" placeholder="Kecamatan" required autocomplete="kec63" autofocus>
                  @error('kec63')
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
                  <input id="kab63" type="text" class="form-control @error('kab63') is-invalid @enderror" name="kab63" value="{{$ma12->kab63}}" placeholder="Kabupaten / Kota" required autocomplete="kab63" autofocus>
                  @error('kab63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov63" type="text" class="form-control @error('prov63') is-invalid @enderror" name="prov63" value="{{$ma12->prov63}}" placeholder="Provinsi" required autocomplete="prov63" autofocus>
                  @error('prov63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos63" type="text" class="form-control @error('kodepos63') is-invalid @enderror" name="kodepos63" value="{{$ma12->kodepos63}}" placeholder="Kode Pos" required autocomplete="kodepos63" autofocus>
                  @error('kodepos63')
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
                  <input id="cita63" type="text" class="form-control @error('cita63') is-invalid @enderror" name="cita63" value="{{$ma12->cita63}}" placeholder="Alamat Lengkap" required autocomplete="cita63" autofocus>
                  @error('cita63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara63" type="text" class="form-control @error('jumlahsaudara63') is-invalid @enderror" name="jumlahsaudara63" value="{{$ma12->jumlahsaudara63}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara63" autofocus>
                  @error('jumlahsaudara63')
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
                  <input id="asalsekolah63" type="text" class="form-control @error('asalsekolah63') is-invalid @enderror" name="asalsekolah63" value="{{$ma12->asalsekolah63}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah63" autofocus>
                  @error('asalsekolah63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah63" type="text" class="form-control @error('alamatasalsekolah63') is-invalid @enderror" name="alamatasalsekolah63" value="{{$ma12->alamatasalsekolah63}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah63" autofocus>
                  @error('alamatasalsekolah63')
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
                  <input id="namaayah63" type="text" class="form-control @error('namaayah63') is-invalid @enderror" name="namaayah63" value="{{$ma12->namaayah63}}" placeholder="Nama Ayah" required autocomplete="namaayah63" autofocus>
                  @error('namaayah63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah63" type="text" class="form-control @error('nikayah63') is-invalid @enderror" name="nikayah63" value="{{$ma12->nikayah63}}" placeholder="NIK Ayah" required autocomplete="nikayah63" autofocus>
                  @error('nikayah63')
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
                  <input id="tahunlahirayah63" type="text" class="form-control @error('tahunlahirayah63') is-invalid @enderror" name="tahunlahirayah63" value="{{$ma12->tahunlahirayah63}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah63" autofocus>
                  @error('tahunlahirayah63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah63" type="text" class="form-control @error('pendidikanayah63') is-invalid @enderror" name="pendidikanayah63" value="{{$ma12->pendidikanayah63}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah63" autofocus>
                  @error('pendidikanayah63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah63" class="form-control @error('pendidikanayah63') is-invalid @enderror" name="pendidikanayah63" value="{{$ma12->pendidikanayah63}}" required autocomplete="pendidikanayah63" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($ma12->pendidikanayah63 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($ma12->pendidikanayah63 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($ma12->pendidikanayah63 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($ma12->pendidikanayah63 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($ma12->pendidikanayah63 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($ma12->pendidikanayah63 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($ma12->pendidikanayah63 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah63')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah63" type="text" class="form-control @error('pekerjaanayah63') is-invalid @enderror" name="pekerjaanayah63" value="{{$ma12->pekerjaanayah63}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah63" autofocus>
                  @error('pekerjaanayah63')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah63" class="form-control @error('pekerjaanayah63') is-invalid @enderror" name="pekerjaanayah63" value="{{$ma12->pekerjaanayah63}}" required autocomplete="pekerjaanayah63" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($ma12->pekerjaanayah63 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($ma12->pekerjaanayah63 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($ma12->pekerjaanayah63 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($ma12->pekerjaanayah63 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($ma12->pekerjaanayah63 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($ma12->pekerjaanayah63 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($ma12->pekerjaanayah63 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($ma12->pekerjaanayah63 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($ma12->pekerjaanayah63 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($ma12->pekerjaanayah63 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($ma12->pekerjaanayah63 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($ma12->pekerjaanayah63 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah63')
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
                  <input id="namaibu63" type="text" class="form-control @error('namaibu63') is-invalid @enderror" name="namaibu63" value="{{$ma12->namaibu63}}" placeholder="Nama Ibu" required autocomplete="namaibu63" autofocus>
                  @error('namaibu63')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu63" type="text" class="form-control @error('nikibu63') is-invalid @enderror" name="nikibu63" value="{{$ma12->nikibu63}}" placeholder="NIK Ibu" required autocomplete="nikibu63" autofocus>
                  @error('nikibu63')
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
                  <input id="tahunlahiribu63" type="text" class="form-control @error('tahunlahiribu63') is-invalid @enderror" name="tahunlahiribu63" value="{{$ma12->tahunlahiribu63}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu63" autofocus>
                  @error('tahunlahiribu63')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu63" type="text" class="form-control @error('pendidikanibu63') is-invalid @enderror" name="pendidikanibu63" value="{{$ma12->pendidikanibu63}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu63" autofocus>
                  @error('pendidikanibu63')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu63" class="form-control @error('pendidikanibu63') is-invalid @enderror" name="pendidikanibu63" value="{{$ma12->pendidikanibu63}}" required autocomplete="pendidikanibu63" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($ma12->pendidikanibu63 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($ma12->pendidikanibu63 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($ma12->pendidikanibu63 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($ma12->pendidikanibu63 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($ma12->pendidikanibu63 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($ma12->pendidikanibu63 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($ma12->pendidikanibu63 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu63')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu63" type="text" class="form-control @error('pekerjaanibu63') is-invalid @enderror" name="pekerjaanibu63" value="{{$ma12->pekerjaanibu63}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu63" autofocus>
                  @error('pekerjaanibu63')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu63" class="form-control @error('pekerjaanibu63') is-invalid @enderror" name="pekerjaanibu63" value="{{$ma12->pekerjaanibu63}}" required autocomplete="pekerjaanibu63" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($ma12->pekerjaanibu63 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($ma12->pekerjaanibu63 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($ma12->pekerjaanibu63 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($ma12->pekerjaanibu63 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($ma12->pekerjaanibu63 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($ma12->pekerjaanibu63 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($ma12->pekerjaanibu63 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($ma12->pekerjaanibu63 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($ma12->pekerjaanibu63 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($ma12->pekerjaanibu63 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($ma12->pekerjaanibu63 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($ma12->pekerjaanibu63 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu63')
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
                  <input id="penghasilan63" type="text" class="form-control @error('penghasilan63') is-invalid @enderror" name="penghasilan63" value="{{$ma12->penghasilan63}}" placeholder="Penghasilan" required autocomplete="penghasilan63" autofocus>
                  @error('penghasilan63')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan63" class="form-control @error('penghasilan63') is-invalid @enderror" name="penghasilan63" value="{{$ma12->penghasilan63}}" required autocomplete="penghasilan63" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($ma12->penghasilan63 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($ma12->penghasilan63 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($ma12->penghasilan63 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($ma12->penghasilan63 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($ma12->penghasilan63 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($ma12->penghasilan63 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan63')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi63" type="text" class="form-control @error('prestasi63') is-invalid @enderror" name="prestasi63" value="{{$ma12->prestasi63}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi63" autofocus>
                  @error('prestasi63')
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
                  <input id="nohp63" type="text" class="form-control @error('nohp63') is-invalid @enderror" name="nohp63" value="{{$ma12->nohp63}}" placeholder="No HP" required autocomplete="nohp63" autofocus>
                  @error('nohp63')
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

            