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
          <a href="{{url('smp27')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data SMP 2 KELAS 7 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smp27') }}/{{$smp27->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap27" type="text" class="form-control @error('namalengkap27') is-invalid @enderror" name="namalengkap27" value="{{$smp27->namalengkap27}}" placeholder="Nama Lengkap" required autocomplete="namalengkap27" autofocus>
                  @error('namalengkap27')
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
                  <select id="inputState" class="form-control" id="status27" class="form-control @error('status27') is-invalid @enderror" name="status27">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smp27->status27 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smp27->status27 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smp27->status27 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smp27->status27 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smp27->status27 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smp27->status27 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status27')
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
                  <input id="status27" type="text" class="form-control @error('status27') is-invalid @enderror" name="status27" value="{{$smp27->status27}}" placeholder="Status" >
                  @error('status27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar27">Foto (size max 1.90 mb)</label>
                  <input id="avatar27" type="file" class="form-control @error('avatar27') is-invalid @enderror" name="avatar27" value="{{$smp27->avatar27}}" placeholder="Avatar">
                  @error('avatar27')
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
                  <input id="nisn27" type="text" class="form-control @error('nisn27') is-invalid @enderror" name="nisn27" value="{{$smp27->nisn27}}" placeholder="NISN" required autocomplete="nisn27" autofocus>
                  @error('nisn27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik27" type="text" class="form-control @error('nik27') is-invalid @enderror" name="nik27" value="{{$smp27->nik27}}" placeholder="NIK" required autocomplete="nik27" autofocus>
                  @error('nik27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk27" type="text" class="form-control @error('nokk27') is-invalid @enderror" name="nokk27" value="{{$smp27->nokk27}}" placeholder="No KK" required autocomplete="nokk27" autofocus>
                  @error('nokk27')
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
                  <input id="tempatlahir27" type="text" class="form-control @error('tempatlahir27') is-invalid @enderror" name="tempatlahir27" value="{{$smp27->tempatlahir27}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir27" autofocus>
                  @error('tempatlahir27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt27" type="text" class="form-control @error('tbt27') is-invalid @enderror" name="tbt27" value="{{$smp27->tbt27}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt27" autofocus>
                  @error('tbt27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel27" type="text" class="form-control @error('jenkel27') is-invalid @enderror" name="jenkel27" value="{{$smp27->jenkel27}}" placeholder="Jenis Kelamin" required autocomplete="jenkel27" autofocus>
                  @error('jenkel27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel27" class="form-control @error('jenkel27') is-invalid @enderror" name="jenkel27" required autocomplete="jenkel27" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($smp27->jenkel27 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smp27->jenkel27 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel27')
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
                  <input id="desa27" type="text" class="form-control @error('desa27') is-invalid @enderror" name="desa27" value="{{$smp27->desa27}}" placeholder="Desa" required autocomplete="desa27" autofocus>
                  @error('desa27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec27" type="text" class="form-control @error('kec27') is-invalid @enderror" name="kec27" value="{{$smp27->kec27}}" placeholder="Kecamatan" required autocomplete="kec27" autofocus>
                  @error('kec27')
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
                  <input id="kab27" type="text" class="form-control @error('kab27') is-invalid @enderror" name="kab27" value="{{$smp27->kab27}}" placeholder="Kabupaten / Kota" required autocomplete="kab27" autofocus>
                  @error('kab27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov27" type="text" class="form-control @error('prov27') is-invalid @enderror" name="prov27" value="{{$smp27->prov27}}" placeholder="Provinsi" required autocomplete="prov27" autofocus>
                  @error('prov27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos27" type="text" class="form-control @error('kodepos27') is-invalid @enderror" name="kodepos27" value="{{$smp27->kodepos27}}" placeholder="Kode Pos" required autocomplete="kodepos27" autofocus>
                  @error('kodepos27')
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
                  <input id="cita27" type="text" class="form-control @error('cita27') is-invalid @enderror" name="cita27" value="{{$smp27->cita27}}" placeholder="Alamat Lengkap" required autocomplete="cita27" autofocus>
                  @error('cita27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara27" type="text" class="form-control @error('jumlahsaudara27') is-invalid @enderror" name="jumlahsaudara27" value="{{$smp27->jumlahsaudara27}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara27" autofocus>
                  @error('jumlahsaudara27')
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
                  <input id="asalsekolah27" type="text" class="form-control @error('asalsekolah27') is-invalid @enderror" name="asalsekolah27" value="{{$smp27->asalsekolah27}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah27" autofocus>
                  @error('asalsekolah27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah27" type="text" class="form-control @error('alamatasalsekolah27') is-invalid @enderror" name="alamatasalsekolah27" value="{{$smp27->alamatasalsekolah27}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah27" autofocus>
                  @error('alamatasalsekolah27')
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
                  <input id="namaayah27" type="text" class="form-control @error('namaayah27') is-invalid @enderror" name="namaayah27" value="{{$smp27->namaayah27}}" placeholder="Nama Ayah" required autocomplete="namaayah27" autofocus>
                  @error('namaayah27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah27" type="text" class="form-control @error('nikayah27') is-invalid @enderror" name="nikayah27" value="{{$smp27->nikayah27}}" placeholder="NIK Ayah" required autocomplete="nikayah27" autofocus>
                  @error('nikayah27')
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
                  <input id="tahunlahirayah27" type="text" class="form-control @error('tahunlahirayah27') is-invalid @enderror" name="tahunlahirayah27" value="{{$smp27->tahunlahirayah27}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah27" autofocus>
                  @error('tahunlahirayah27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah27" type="text" class="form-control @error('pendidikanayah27') is-invalid @enderror" name="pendidikanayah27" value="{{$smp27->pendidikanayah27}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah27" autofocus>
                  @error('pendidikanayah27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah27" class="form-control @error('pendidikanayah27') is-invalid @enderror" name="pendidikanayah27" value="{{$smp27->pendidikanayah27}}" required autocomplete="pendidikanayah27" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp27->pendidikanayah27 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp27->pendidikanayah27 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp27->pendidikanayah27 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp27->pendidikanayah27 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp27->pendidikanayah27 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp27->pendidikanayah27 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp27->pendidikanayah27 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah27')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah27" type="text" class="form-control @error('pekerjaanayah27') is-invalid @enderror" name="pekerjaanayah27" value="{{$smp27->pekerjaanayah27}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah27" autofocus>
                  @error('pekerjaanayah27')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah27" class="form-control @error('pekerjaanayah27') is-invalid @enderror" name="pekerjaanayah27" value="{{$smp27->pekerjaanayah27}}" required autocomplete="pekerjaanayah27" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp27->pekerjaanayah27 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp27->pekerjaanayah27 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp27->pekerjaanayah27 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp27->pekerjaanayah27 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp27->pekerjaanayah27 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp27->pekerjaanayah27 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp27->pekerjaanayah27 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp27->pekerjaanayah27 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp27->pekerjaanayah27 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp27->pekerjaanayah27 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp27->pekerjaanayah27 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp27->pekerjaanayah27 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah27')
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
                  <input id="namaibu27" type="text" class="form-control @error('namaibu27') is-invalid @enderror" name="namaibu27" value="{{$smp27->namaibu27}}" placeholder="Nama Ibu" required autocomplete="namaibu27" autofocus>
                  @error('namaibu27')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu27" type="text" class="form-control @error('nikibu27') is-invalid @enderror" name="nikibu27" value="{{$smp27->nikibu27}}" placeholder="NIK Ibu" required autocomplete="nikibu27" autofocus>
                  @error('nikibu27')
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
                  <input id="tahunlahiribu27" type="text" class="form-control @error('tahunlahiribu27') is-invalid @enderror" name="tahunlahiribu27" value="{{$smp27->tahunlahiribu27}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu27" autofocus>
                  @error('tahunlahiribu27')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu27" type="text" class="form-control @error('pendidikanibu27') is-invalid @enderror" name="pendidikanibu27" value="{{$smp27->pendidikanibu27}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu27" autofocus>
                  @error('pendidikanibu27')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu27" class="form-control @error('pendidikanibu27') is-invalid @enderror" name="pendidikanibu27" value="{{$smp27->pendidikanibu27}}" required autocomplete="pendidikanibu27" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp27->pendidikanibu27 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp27->pendidikanibu27 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp27->pendidikanibu27 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp27->pendidikanibu27 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp27->pendidikanibu27 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp27->pendidikanibu27 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp27->pendidikanibu27 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu27')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu27" type="text" class="form-control @error('pekerjaanibu27') is-invalid @enderror" name="pekerjaanibu27" value="{{$smp27->pekerjaanibu27}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu27" autofocus>
                  @error('pekerjaanibu27')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu27" class="form-control @error('pekerjaanibu27') is-invalid @enderror" name="pekerjaanibu27" value="{{$smp27->pekerjaanibu27}}" required autocomplete="pekerjaanibu27" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp27->pekerjaanibu27 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp27->pekerjaanibu27 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp27->pekerjaanibu27 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp27->pekerjaanibu27 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp27->pekerjaanibu27 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp27->pekerjaanibu27 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp27->pekerjaanibu27 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp27->pekerjaanibu27 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp27->pekerjaanibu27 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp27->pekerjaanibu27 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp27->pekerjaanibu27 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp27->pekerjaanibu27 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu27')
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
                  <input id="penghasilan27" type="text" class="form-control @error('penghasilan27') is-invalid @enderror" name="penghasilan27" value="{{$smp27->penghasilan27}}" placeholder="Penghasilan" required autocomplete="penghasilan27" autofocus>
                  @error('penghasilan27')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan27" class="form-control @error('penghasilan27') is-invalid @enderror" name="penghasilan27" value="{{$smp27->penghasilan27}}" required autocomplete="penghasilan27" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smp27->penghasilan27 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smp27->penghasilan27 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smp27->penghasilan27 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smp27->penghasilan27 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smp27->penghasilan27 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smp27->penghasilan27 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan27')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi27" type="text" class="form-control @error('prestasi27') is-invalid @enderror" name="prestasi27" value="{{$smp27->prestasi27}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi27" autofocus>
                  @error('prestasi27')
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
                  <input id="nohp27" type="text" class="form-control @error('nohp27') is-invalid @enderror" name="nohp27" value="{{$smp27->nohp27}}" placeholder="No HP" required autocomplete="nohp27" autofocus>
                  @error('nohp27')
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

            