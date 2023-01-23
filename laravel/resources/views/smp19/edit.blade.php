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
          <a href="{{url('smp19')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data SMP 1 KELAS 9 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smp19') }}/{{$smp19->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap19" type="text" class="form-control @error('namalengkap19') is-invalid @enderror" name="namalengkap19" value="{{$smp19->namalengkap19}}" placeholder="Nama Lengkap" required autocomplete="namalengkap19" autofocus>
                  @error('namalengkap19')
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
                  <select id="inputState" class="form-control" id="status19" class="form-control @error('status19') is-invalid @enderror" name="status19">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smp19->status19 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smp19->status19 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smp19->status19 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smp19->status19 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smp19->status19 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smp19->status19 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status19')
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
                  <input id="status19" type="text" class="form-control @error('status19') is-invalid @enderror" name="status19" value="{{$smp19->status19}}" placeholder="Status" >
                  @error('status19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar19">Foto (size max 1.90 mb)</label>
                  <input id="avatar19" type="file" class="form-control @error('avatar19') is-invalid @enderror" name="avatar19" value="{{$smp19->avatar19}}" placeholder="Avatar">
                  @error('avatar19')
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
                  <input id="nisn19" type="text" class="form-control @error('nisn19') is-invalid @enderror" name="nisn19" value="{{$smp19->nisn19}}" placeholder="NISN" required autocomplete="nisn19" autofocus>
                  @error('nisn19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik19" type="text" class="form-control @error('nik19') is-invalid @enderror" name="nik19" value="{{$smp19->nik19}}" placeholder="NIK" required autocomplete="nik19" autofocus>
                  @error('nik19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk19" type="text" class="form-control @error('nokk19') is-invalid @enderror" name="nokk19" value="{{$smp19->nokk19}}" placeholder="No KK" required autocomplete="nokk19" autofocus>
                  @error('nokk19')
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
                  <input id="tempatlahir19" type="text" class="form-control @error('tempatlahir19') is-invalid @enderror" name="tempatlahir19" value="{{$smp19->tempatlahir19}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir19" autofocus>
                  @error('tempatlahir19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt19" type="text" class="form-control @error('tbt19') is-invalid @enderror" name="tbt19" value="{{$smp19->tbt19}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt19" autofocus>
                  @error('tbt19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel19" type="text" class="form-control @error('jenkel19') is-invalid @enderror" name="jenkel19" value="{{$smp19->jenkel19}}" placeholder="Jenis Kelamin" required autocomplete="jenkel19" autofocus>
                  @error('jenkel19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel19" class="form-control @error('jenkel19') is-invalid @enderror" name="jenkel19" required autocomplete="jenkel19" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($smp19->jenkel19 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smp19->jenkel19 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel19')
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
                  <input id="desa19" type="text" class="form-control @error('desa19') is-invalid @enderror" name="desa19" value="{{$smp19->desa19}}" placeholder="Desa" required autocomplete="desa19" autofocus>
                  @error('desa19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec19" type="text" class="form-control @error('kec19') is-invalid @enderror" name="kec19" value="{{$smp19->kec19}}" placeholder="Kecamatan" required autocomplete="kec19" autofocus>
                  @error('kec19')
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
                  <input id="kab19" type="text" class="form-control @error('kab19') is-invalid @enderror" name="kab19" value="{{$smp19->kab19}}" placeholder="Kabupaten / Kota" required autocomplete="kab19" autofocus>
                  @error('kab19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov19" type="text" class="form-control @error('prov19') is-invalid @enderror" name="prov19" value="{{$smp19->prov19}}" placeholder="Provinsi" required autocomplete="prov19" autofocus>
                  @error('prov19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos19" type="text" class="form-control @error('kodepos19') is-invalid @enderror" name="kodepos19" value="{{$smp19->kodepos19}}" placeholder="Kode Pos" required autocomplete="kodepos19" autofocus>
                  @error('kodepos19')
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
                  <input id="cita19" type="text" class="form-control @error('cita19') is-invalid @enderror" name="cita19" value="{{$smp19->cita19}}" placeholder="Alamat Lengkap" required autocomplete="cita19" autofocus>
                  @error('cita19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara19" type="text" class="form-control @error('jumlahsaudara19') is-invalid @enderror" name="jumlahsaudara19" value="{{$smp19->jumlahsaudara19}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara19" autofocus>
                  @error('jumlahsaudara19')
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
                  <input id="asalsekolah19" type="text" class="form-control @error('asalsekolah19') is-invalid @enderror" name="asalsekolah19" value="{{$smp19->asalsekolah19}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah19" autofocus>
                  @error('asalsekolah19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah19" type="text" class="form-control @error('alamatasalsekolah19') is-invalid @enderror" name="alamatasalsekolah19" value="{{$smp19->alamatasalsekolah19}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah19" autofocus>
                  @error('alamatasalsekolah19')
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
                  <input id="namaayah19" type="text" class="form-control @error('namaayah19') is-invalid @enderror" name="namaayah19" value="{{$smp19->namaayah19}}" placeholder="Nama Ayah" required autocomplete="namaayah19" autofocus>
                  @error('namaayah19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah19" type="text" class="form-control @error('nikayah19') is-invalid @enderror" name="nikayah19" value="{{$smp19->nikayah19}}" placeholder="NIK Ayah" required autocomplete="nikayah19" autofocus>
                  @error('nikayah19')
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
                  <input id="tahunlahirayah19" type="text" class="form-control @error('tahunlahirayah19') is-invalid @enderror" name="tahunlahirayah19" value="{{$smp19->tahunlahirayah19}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah19" autofocus>
                  @error('tahunlahirayah19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah19" type="text" class="form-control @error('pendidikanayah19') is-invalid @enderror" name="pendidikanayah19" value="{{$smp19->pendidikanayah19}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah19" autofocus>
                  @error('pendidikanayah19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah19" class="form-control @error('pendidikanayah19') is-invalid @enderror" name="pendidikanayah19" value="{{$smp19->pendidikanayah19}}" required autocomplete="pendidikanayah19" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp19->pendidikanayah19 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp19->pendidikanayah19 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp19->pendidikanayah19 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp19->pendidikanayah19 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp19->pendidikanayah19 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp19->pendidikanayah19 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp19->pendidikanayah19 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah19')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah19" type="text" class="form-control @error('pekerjaanayah19') is-invalid @enderror" name="pekerjaanayah19" value="{{$smp19->pekerjaanayah19}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah19" autofocus>
                  @error('pekerjaanayah19')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah19" class="form-control @error('pekerjaanayah19') is-invalid @enderror" name="pekerjaanayah19" value="{{$smp19->pekerjaanayah19}}" required autocomplete="pekerjaanayah19" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp19->pekerjaanayah19 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp19->pekerjaanayah19 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp19->pekerjaanayah19 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp19->pekerjaanayah19 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp19->pekerjaanayah19 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp19->pekerjaanayah19 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp19->pekerjaanayah19 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp19->pekerjaanayah19 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp19->pekerjaanayah19 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp19->pekerjaanayah19 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp19->pekerjaanayah19 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp19->pekerjaanayah19 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah19')
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
                  <input id="namaibu19" type="text" class="form-control @error('namaibu19') is-invalid @enderror" name="namaibu19" value="{{$smp19->namaibu19}}" placeholder="Nama Ibu" required autocomplete="namaibu19" autofocus>
                  @error('namaibu19')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu19" type="text" class="form-control @error('nikibu19') is-invalid @enderror" name="nikibu19" value="{{$smp19->nikibu19}}" placeholder="NIK Ibu" required autocomplete="nikibu19" autofocus>
                  @error('nikibu19')
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
                  <input id="tahunlahiribu19" type="text" class="form-control @error('tahunlahiribu19') is-invalid @enderror" name="tahunlahiribu19" value="{{$smp19->tahunlahiribu19}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu19" autofocus>
                  @error('tahunlahiribu19')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu19" type="text" class="form-control @error('pendidikanibu19') is-invalid @enderror" name="pendidikanibu19" value="{{$smp19->pendidikanibu19}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu19" autofocus>
                  @error('pendidikanibu19')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu19" class="form-control @error('pendidikanibu19') is-invalid @enderror" name="pendidikanibu19" value="{{$smp19->pendidikanibu19}}" required autocomplete="pendidikanibu19" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp19->pendidikanibu19 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp19->pendidikanibu19 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp19->pendidikanibu19 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp19->pendidikanibu19 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp19->pendidikanibu19 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp19->pendidikanibu19 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp19->pendidikanibu19 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu19')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu19" type="text" class="form-control @error('pekerjaanibu19') is-invalid @enderror" name="pekerjaanibu19" value="{{$smp19->pekerjaanibu19}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu19" autofocus>
                  @error('pekerjaanibu19')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu19" class="form-control @error('pekerjaanibu19') is-invalid @enderror" name="pekerjaanibu19" value="{{$smp19->pekerjaanibu19}}" required autocomplete="pekerjaanibu19" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp19->pekerjaanibu19 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp19->pekerjaanibu19 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp19->pekerjaanibu19 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp19->pekerjaanibu19 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp19->pekerjaanibu19 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp19->pekerjaanibu19 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp19->pekerjaanibu19 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp19->pekerjaanibu19 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp19->pekerjaanibu19 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp19->pekerjaanibu19 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp19->pekerjaanibu19 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp19->pekerjaanibu19 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu19')
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
                  <input id="penghasilan19" type="text" class="form-control @error('penghasilan19') is-invalid @enderror" name="penghasilan19" value="{{$smp19->penghasilan19}}" placeholder="Penghasilan" required autocomplete="penghasilan19" autofocus>
                  @error('penghasilan19')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan19" class="form-control @error('penghasilan19') is-invalid @enderror" name="penghasilan19" value="{{$smp19->penghasilan19}}" required autocomplete="penghasilan19" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smp19->penghasilan19 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smp19->penghasilan19 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smp19->penghasilan19 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smp19->penghasilan19 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smp19->penghasilan19 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smp19->penghasilan19 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan19')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi19" type="text" class="form-control @error('prestasi19') is-invalid @enderror" name="prestasi19" value="{{$smp19->prestasi19}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi19" autofocus>
                  @error('prestasi19')
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
                  <input id="nohp19" type="text" class="form-control @error('nohp19') is-invalid @enderror" name="nohp19" value="{{$smp19->nohp19}}" placeholder="No HP" required autocomplete="nohp19" autofocus>
                  @error('nohp19')
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

            