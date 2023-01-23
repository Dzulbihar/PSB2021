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
          <a href="{{url('smp17')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data SMP 1 KELAS 7 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smp17') }}/{{$smp17->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap17" type="text" class="form-control @error('namalengkap17') is-invalid @enderror" name="namalengkap17" value="{{$smp17->namalengkap17}}" placeholder="Nama Lengkap" required autocomplete="namalengkap17" autofocus>
                  @error('namalengkap17')
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
                  <select id="inputState" class="form-control" id="status17" class="form-control @error('status17') is-invalid @enderror" name="status17">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smp17->status17 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smp17->status17 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smp17->status17 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smp17->status17 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smp17->status17 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smp17->status17 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status17')
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
                  <input id="status17" type="text" class="form-control @error('status17') is-invalid @enderror" name="status17" value="{{$smp17->status17}}" placeholder="Status" >
                  @error('status17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar17">Foto (size max 1.90 mb)</label>
                  <input id="avatar17" type="file" class="form-control @error('avatar17') is-invalid @enderror" name="avatar17" value="{{$smp17->avatar17}}" placeholder="Avatar">
                  @error('avatar17')
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
                  <input id="nisn17" type="text" class="form-control @error('nisn17') is-invalid @enderror" name="nisn17" value="{{$smp17->nisn17}}" placeholder="NISN" required autocomplete="nisn17" autofocus>
                  @error('nisn17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik17" type="text" class="form-control @error('nik17') is-invalid @enderror" name="nik17" value="{{$smp17->nik17}}" placeholder="NIK" required autocomplete="nik17" autofocus>
                  @error('nik17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk17" type="text" class="form-control @error('nokk17') is-invalid @enderror" name="nokk17" value="{{$smp17->nokk17}}" placeholder="No KK" required autocomplete="nokk17" autofocus>
                  @error('nokk17')
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
                  <input id="tempatlahir17" type="text" class="form-control @error('tempatlahir17') is-invalid @enderror" name="tempatlahir17" value="{{$smp17->tempatlahir17}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir17" autofocus>
                  @error('tempatlahir17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt17" type="text" class="form-control @error('tbt17') is-invalid @enderror" name="tbt17" value="{{$smp17->tbt17}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt17" autofocus>
                  @error('tbt17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel17" type="text" class="form-control @error('jenkel17') is-invalid @enderror" name="jenkel17" value="{{$smp17->jenkel17}}" placeholder="Jenis Kelamin" required autocomplete="jenkel17" autofocus>
                  @error('jenkel17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel17" class="form-control @error('jenkel17') is-invalid @enderror" name="jenkel17" required autocomplete="jenkel17" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($smp17->jenkel17 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smp17->jenkel17 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel17')
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
                  <input id="desa17" type="text" class="form-control @error('desa17') is-invalid @enderror" name="desa17" value="{{$smp17->desa17}}" placeholder="Desa" required autocomplete="desa17" autofocus>
                  @error('desa17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec17" type="text" class="form-control @error('kec17') is-invalid @enderror" name="kec17" value="{{$smp17->kec17}}" placeholder="Kecamatan" required autocomplete="kec17" autofocus>
                  @error('kec17')
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
                  <input id="kab17" type="text" class="form-control @error('kab17') is-invalid @enderror" name="kab17" value="{{$smp17->kab17}}" placeholder="Kabupaten / Kota" required autocomplete="kab17" autofocus>
                  @error('kab17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov17" type="text" class="form-control @error('prov17') is-invalid @enderror" name="prov17" value="{{$smp17->prov17}}" placeholder="Provinsi" required autocomplete="prov17" autofocus>
                  @error('prov17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos17" type="text" class="form-control @error('kodepos17') is-invalid @enderror" name="kodepos17" value="{{$smp17->kodepos17}}" placeholder="Kode Pos" required autocomplete="kodepos17" autofocus>
                  @error('kodepos17')
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
                  <input id="cita17" type="text" class="form-control @error('cita17') is-invalid @enderror" name="cita17" value="{{$smp17->cita17}}" placeholder="Alamat Lengkap" required autocomplete="cita17" autofocus>
                  @error('cita17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara17" type="text" class="form-control @error('jumlahsaudara17') is-invalid @enderror" name="jumlahsaudara17" value="{{$smp17->jumlahsaudara17}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara17" autofocus>
                  @error('jumlahsaudara17')
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
                  <input id="asalsekolah17" type="text" class="form-control @error('asalsekolah17') is-invalid @enderror" name="asalsekolah17" value="{{$smp17->asalsekolah17}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah17" autofocus>
                  @error('asalsekolah17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah17" type="text" class="form-control @error('alamatasalsekolah17') is-invalid @enderror" name="alamatasalsekolah17" value="{{$smp17->alamatasalsekolah17}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah17" autofocus>
                  @error('alamatasalsekolah17')
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
                  <input id="namaayah17" type="text" class="form-control @error('namaayah17') is-invalid @enderror" name="namaayah17" value="{{$smp17->namaayah17}}" placeholder="Nama Ayah" required autocomplete="namaayah17" autofocus>
                  @error('namaayah17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah17" type="text" class="form-control @error('nikayah17') is-invalid @enderror" name="nikayah17" value="{{$smp17->nikayah17}}" placeholder="NIK Ayah" required autocomplete="nikayah17" autofocus>
                  @error('nikayah17')
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
                  <input id="tahunlahirayah17" type="text" class="form-control @error('tahunlahirayah17') is-invalid @enderror" name="tahunlahirayah17" value="{{$smp17->tahunlahirayah17}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah17" autofocus>
                  @error('tahunlahirayah17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah17" type="text" class="form-control @error('pendidikanayah17') is-invalid @enderror" name="pendidikanayah17" value="{{$smp17->pendidikanayah17}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah17" autofocus>
                  @error('pendidikanayah17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah17" class="form-control @error('pendidikanayah17') is-invalid @enderror" name="pendidikanayah17" value="{{$smp17->pendidikanayah17}}" required autocomplete="pendidikanayah17" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp17->pendidikanayah17 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp17->pendidikanayah17 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp17->pendidikanayah17 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp17->pendidikanayah17 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp17->pendidikanayah17 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp17->pendidikanayah17 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp17->pendidikanayah17 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah17')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah17" type="text" class="form-control @error('pekerjaanayah17') is-invalid @enderror" name="pekerjaanayah17" value="{{$smp17->pekerjaanayah17}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah17" autofocus>
                  @error('pekerjaanayah17')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah17" class="form-control @error('pekerjaanayah17') is-invalid @enderror" name="pekerjaanayah17" value="{{$smp17->pekerjaanayah17}}" required autocomplete="pekerjaanayah17" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp17->pekerjaanayah17 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp17->pekerjaanayah17 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp17->pekerjaanayah17 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp17->pekerjaanayah17 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp17->pekerjaanayah17 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp17->pekerjaanayah17 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp17->pekerjaanayah17 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp17->pekerjaanayah17 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp17->pekerjaanayah17 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp17->pekerjaanayah17 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp17->pekerjaanayah17 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp17->pekerjaanayah17 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah17')
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
                  <input id="namaibu17" type="text" class="form-control @error('namaibu17') is-invalid @enderror" name="namaibu17" value="{{$smp17->namaibu17}}" placeholder="Nama Ibu" required autocomplete="namaibu17" autofocus>
                  @error('namaibu17')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu17" type="text" class="form-control @error('nikibu17') is-invalid @enderror" name="nikibu17" value="{{$smp17->nikibu17}}" placeholder="NIK Ibu" required autocomplete="nikibu17" autofocus>
                  @error('nikibu17')
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
                  <input id="tahunlahiribu17" type="text" class="form-control @error('tahunlahiribu17') is-invalid @enderror" name="tahunlahiribu17" value="{{$smp17->tahunlahiribu17}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu17" autofocus>
                  @error('tahunlahiribu17')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu17" type="text" class="form-control @error('pendidikanibu17') is-invalid @enderror" name="pendidikanibu17" value="{{$smp17->pendidikanibu17}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu17" autofocus>
                  @error('pendidikanibu17')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu17" class="form-control @error('pendidikanibu17') is-invalid @enderror" name="pendidikanibu17" value="{{$smp17->pendidikanibu17}}" required autocomplete="pendidikanibu17" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp17->pendidikanibu17 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp17->pendidikanibu17 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp17->pendidikanibu17 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp17->pendidikanibu17 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp17->pendidikanibu17 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp17->pendidikanibu17 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp17->pendidikanibu17 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu17')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu17" type="text" class="form-control @error('pekerjaanibu17') is-invalid @enderror" name="pekerjaanibu17" value="{{$smp17->pekerjaanibu17}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu17" autofocus>
                  @error('pekerjaanibu17')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu17" class="form-control @error('pekerjaanibu17') is-invalid @enderror" name="pekerjaanibu17" value="{{$smp17->pekerjaanibu17}}" required autocomplete="pekerjaanibu17" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp17->pekerjaanibu17 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp17->pekerjaanibu17 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp17->pekerjaanibu17 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp17->pekerjaanibu17 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp17->pekerjaanibu17 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp17->pekerjaanibu17 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp17->pekerjaanibu17 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp17->pekerjaanibu17 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp17->pekerjaanibu17 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp17->pekerjaanibu17 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp17->pekerjaanibu17 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp17->pekerjaanibu17 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu17')
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
                  <input id="penghasilan17" type="text" class="form-control @error('penghasilan17') is-invalid @enderror" name="penghasilan17" value="{{$smp17->penghasilan17}}" placeholder="Penghasilan" required autocomplete="penghasilan17" autofocus>
                  @error('penghasilan17')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan17" class="form-control @error('penghasilan17') is-invalid @enderror" name="penghasilan17" value="{{$smp17->penghasilan17}}" required autocomplete="penghasilan17" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smp17->penghasilan17 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smp17->penghasilan17 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smp17->penghasilan17 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smp17->penghasilan17 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smp17->penghasilan17 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smp17->penghasilan17 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan17')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi17" type="text" class="form-control @error('prestasi17') is-invalid @enderror" name="prestasi17" value="{{$smp17->prestasi17}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi17" autofocus>
                  @error('prestasi17')
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
                  <input id="nohp17" type="text" class="form-control @error('nohp17') is-invalid @enderror" name="nohp17" value="{{$smp17->nohp17}}" placeholder="No HP" required autocomplete="nohp17" autofocus>
                  @error('nohp17')
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

            