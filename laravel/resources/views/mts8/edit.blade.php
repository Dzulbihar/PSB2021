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
          <a href="{{url('mts8')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data MTs KELAS 8 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('mts8') }}/{{$mts8->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap38" type="text" class="form-control @error('namalengkap38') is-invalid @enderror" name="namalengkap38" value="{{$mts8->namalengkap38}}" placeholder="Nama Lengkap" required autocomplete="namalengkap38" autofocus>
                  @error('namalengkap38')
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
                  <select id="inputState" class="form-control" id="status38" class="form-control @error('status38') is-invalid @enderror" name="status38">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($mts8->status38 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($mts8->status38 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($mts8->status38 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($mts8->status38 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($mts8->status38 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($mts8->status38 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status38')
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
                  <input id="status38" type="text" class="form-control @error('status38') is-invalid @enderror" name="status38" value="{{$mts8->status38}}" placeholder="Status" >
                  @error('status38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar38">Foto (size max 1.90 mb)</label>
                  <input id="avatar38" type="file" class="form-control @error('avatar38') is-invalid @enderror" name="avatar38" value="{{$mts8->avatar38}}" placeholder="Avatar">
                  @error('avatar38')
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
                  <input id="nisn38" type="text" class="form-control @error('nisn38') is-invalid @enderror" name="nisn38" value="{{$mts8->nisn38}}" placeholder="NISN" required autocomplete="nisn38" autofocus>
                  @error('nisn38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik38" type="text" class="form-control @error('nik38') is-invalid @enderror" name="nik38" value="{{$mts8->nik38}}" placeholder="NIK" required autocomplete="nik38" autofocus>
                  @error('nik38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk38" type="text" class="form-control @error('nokk38') is-invalid @enderror" name="nokk38" value="{{$mts8->nokk38}}" placeholder="No KK" required autocomplete="nokk38" autofocus>
                  @error('nokk38')
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
                  <input id="tempatlahir38" type="text" class="form-control @error('tempatlahir38') is-invalid @enderror" name="tempatlahir38" value="{{$mts8->tempatlahir38}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir38" autofocus>
                  @error('tempatlahir38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt38" type="text" class="form-control @error('tbt38') is-invalid @enderror" name="tbt38" value="{{$mts8->tbt38}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt38" autofocus>
                  @error('tbt38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel38" type="text" class="form-control @error('jenkel38') is-invalid @enderror" name="jenkel38" value="{{$mts8->jenkel38}}" placeholder="Jenis Kelamin" required autocomplete="jenkel38" autofocus>
                  @error('jenkel38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel38" class="form-control @error('jenkel38') is-invalid @enderror" name="jenkel38" required autocomplete="jenkel38" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($mts8->jenkel38 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($mts8->jenkel38 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel38')
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
                  <input id="desa38" type="text" class="form-control @error('desa38') is-invalid @enderror" name="desa38" value="{{$mts8->desa38}}" placeholder="Desa" required autocomplete="desa38" autofocus>
                  @error('desa38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec38" type="text" class="form-control @error('kec38') is-invalid @enderror" name="kec38" value="{{$mts8->kec38}}" placeholder="Kecamatan" required autocomplete="kec38" autofocus>
                  @error('kec38')
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
                  <input id="kab38" type="text" class="form-control @error('kab38') is-invalid @enderror" name="kab38" value="{{$mts8->kab38}}" placeholder="Kabupaten / Kota" required autocomplete="kab38" autofocus>
                  @error('kab38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov38" type="text" class="form-control @error('prov38') is-invalid @enderror" name="prov38" value="{{$mts8->prov38}}" placeholder="Provinsi" required autocomplete="prov38" autofocus>
                  @error('prov38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos38" type="text" class="form-control @error('kodepos38') is-invalid @enderror" name="kodepos38" value="{{$mts8->kodepos38}}" placeholder="Kode Pos" required autocomplete="kodepos38" autofocus>
                  @error('kodepos38')
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
                  <input id="cita38" type="text" class="form-control @error('cita38') is-invalid @enderror" name="cita38" value="{{$mts8->cita38}}" placeholder="Alamat Lengkap" required autocomplete="cita38" autofocus>
                  @error('cita38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara38" type="text" class="form-control @error('jumlahsaudara38') is-invalid @enderror" name="jumlahsaudara38" value="{{$mts8->jumlahsaudara38}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara38" autofocus>
                  @error('jumlahsaudara38')
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
                  <input id="asalsekolah38" type="text" class="form-control @error('asalsekolah38') is-invalid @enderror" name="asalsekolah38" value="{{$mts8->asalsekolah38}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah38" autofocus>
                  @error('asalsekolah38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah38" type="text" class="form-control @error('alamatasalsekolah38') is-invalid @enderror" name="alamatasalsekolah38" value="{{$mts8->alamatasalsekolah38}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah38" autofocus>
                  @error('alamatasalsekolah38')
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
                  <input id="namaayah38" type="text" class="form-control @error('namaayah38') is-invalid @enderror" name="namaayah38" value="{{$mts8->namaayah38}}" placeholder="Nama Ayah" required autocomplete="namaayah38" autofocus>
                  @error('namaayah38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah38" type="text" class="form-control @error('nikayah38') is-invalid @enderror" name="nikayah38" value="{{$mts8->nikayah38}}" placeholder="NIK Ayah" required autocomplete="nikayah38" autofocus>
                  @error('nikayah38')
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
                  <input id="tahunlahirayah38" type="text" class="form-control @error('tahunlahirayah38') is-invalid @enderror" name="tahunlahirayah38" value="{{$mts8->tahunlahirayah38}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah38" autofocus>
                  @error('tahunlahirayah38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah38" type="text" class="form-control @error('pendidikanayah38') is-invalid @enderror" name="pendidikanayah38" value="{{$mts8->pendidikanayah38}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah38" autofocus>
                  @error('pendidikanayah38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah38" class="form-control @error('pendidikanayah38') is-invalid @enderror" name="pendidikanayah38" value="{{$mts8->pendidikanayah38}}" required autocomplete="pendidikanayah38" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mts8->pendidikanayah38 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mts8->pendidikanayah38 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mts8->pendidikanayah38 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mts8->pendidikanayah38 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mts8->pendidikanayah38 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mts8->pendidikanayah38 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mts8->pendidikanayah38 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah38')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah38" type="text" class="form-control @error('pekerjaanayah38') is-invalid @enderror" name="pekerjaanayah38" value="{{$mts8->pekerjaanayah38}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah38" autofocus>
                  @error('pekerjaanayah38')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah38" class="form-control @error('pekerjaanayah38') is-invalid @enderror" name="pekerjaanayah38" value="{{$mts8->pekerjaanayah38}}" required autocomplete="pekerjaanayah38" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mts8->pekerjaanayah38 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mts8->pekerjaanayah38 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mts8->pekerjaanayah38 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mts8->pekerjaanayah38 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mts8->pekerjaanayah38 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mts8->pekerjaanayah38 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mts8->pekerjaanayah38 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mts8->pekerjaanayah38 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mts8->pekerjaanayah38 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mts8->pekerjaanayah38 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mts8->pekerjaanayah38 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mts8->pekerjaanayah38 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah38')
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
                  <input id="namaibu38" type="text" class="form-control @error('namaibu38') is-invalid @enderror" name="namaibu38" value="{{$mts8->namaibu38}}" placeholder="Nama Ibu" required autocomplete="namaibu38" autofocus>
                  @error('namaibu38')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu38" type="text" class="form-control @error('nikibu38') is-invalid @enderror" name="nikibu38" value="{{$mts8->nikibu38}}" placeholder="NIK Ibu" required autocomplete="nikibu38" autofocus>
                  @error('nikibu38')
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
                  <input id="tahunlahiribu38" type="text" class="form-control @error('tahunlahiribu38') is-invalid @enderror" name="tahunlahiribu38" value="{{$mts8->tahunlahiribu38}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu38" autofocus>
                  @error('tahunlahiribu38')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu38" type="text" class="form-control @error('pendidikanibu38') is-invalid @enderror" name="pendidikanibu38" value="{{$mts8->pendidikanibu38}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu38" autofocus>
                  @error('pendidikanibu38')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu38" class="form-control @error('pendidikanibu38') is-invalid @enderror" name="pendidikanibu38" value="{{$mts8->pendidikanibu38}}" required autocomplete="pendidikanibu38" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mts8->pendidikanibu38 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mts8->pendidikanibu38 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mts8->pendidikanibu38 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mts8->pendidikanibu38 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mts8->pendidikanibu38 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mts8->pendidikanibu38 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mts8->pendidikanibu38 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu38')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu38" type="text" class="form-control @error('pekerjaanibu38') is-invalid @enderror" name="pekerjaanibu38" value="{{$mts8->pekerjaanibu38}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu38" autofocus>
                  @error('pekerjaanibu38')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu38" class="form-control @error('pekerjaanibu38') is-invalid @enderror" name="pekerjaanibu38" value="{{$mts8->pekerjaanibu38}}" required autocomplete="pekerjaanibu38" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mts8->pekerjaanibu38 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mts8->pekerjaanibu38 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mts8->pekerjaanibu38 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mts8->pekerjaanibu38 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mts8->pekerjaanibu38 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mts8->pekerjaanibu38 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mts8->pekerjaanibu38 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mts8->pekerjaanibu38 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mts8->pekerjaanibu38 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mts8->pekerjaanibu38 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mts8->pekerjaanibu38 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mts8->pekerjaanibu38 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu38')
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
                  <input id="penghasilan38" type="text" class="form-control @error('penghasilan38') is-invalid @enderror" name="penghasilan38" value="{{$mts8->penghasilan38}}" placeholder="Penghasilan" required autocomplete="penghasilan38" autofocus>
                  @error('penghasilan38')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan38" class="form-control @error('penghasilan38') is-invalid @enderror" name="penghasilan38" value="{{$mts8->penghasilan38}}" required autocomplete="penghasilan38" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($mts8->penghasilan38 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($mts8->penghasilan38 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($mts8->penghasilan38 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($mts8->penghasilan38 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($mts8->penghasilan38 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($mts8->penghasilan38 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan38')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi38" type="text" class="form-control @error('prestasi38') is-invalid @enderror" name="prestasi38" value="{{$mts8->prestasi38}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi38" autofocus>
                  @error('prestasi38')
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
                  <input id="nohp38" type="text" class="form-control @error('nohp38') is-invalid @enderror" name="nohp38" value="{{$mts8->nohp38}}" placeholder="No HP" required autocomplete="nohp38" autofocus>
                  @error('nohp38')
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

            