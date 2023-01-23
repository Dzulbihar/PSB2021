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
          <a href="{{url('ma10')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data MA KELAS 10 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('ma10') }}/{{$ma10->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap61" type="text" class="form-control @error('namalengkap61') is-invalid @enderror" name="namalengkap61" value="{{$ma10->namalengkap61}}" placeholder="Nama Lengkap" required autocomplete="namalengkap61" autofocus>
                  @error('namalengkap61')
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
                  <select id="inputState" class="form-control" id="status61" class="form-control @error('status61') is-invalid @enderror" name="status61">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($ma10->status61 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($ma10->status61 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($ma10->status61 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($ma10->status61 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($ma10->status61 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($ma10->status61 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status61')
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
                  <input id="status61" type="text" class="form-control @error('status61') is-invalid @enderror" name="status61" value="{{$ma10->status61}}" placeholder="Status" >
                  @error('status61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar61">Foto (size max 1.90 mb)</label>
                  <input id="avatar61" type="file" class="form-control @error('avatar61') is-invalid @enderror" name="avatar61" value="{{$ma10->avatar61}}" placeholder="Avatar">
                  @error('avatar61')
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
                  <input id="nisn61" type="text" class="form-control @error('nisn61') is-invalid @enderror" name="nisn61" value="{{$ma10->nisn61}}" placeholder="NISN" required autocomplete="nisn61" autofocus>
                  @error('nisn61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik61" type="text" class="form-control @error('nik61') is-invalid @enderror" name="nik61" value="{{$ma10->nik61}}" placeholder="NIK" required autocomplete="nik61" autofocus>
                  @error('nik61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk61" type="text" class="form-control @error('nokk61') is-invalid @enderror" name="nokk61" value="{{$ma10->nokk61}}" placeholder="No KK" required autocomplete="nokk61" autofocus>
                  @error('nokk61')
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
                  <input id="tempatlahir61" type="text" class="form-control @error('tempatlahir61') is-invalid @enderror" name="tempatlahir61" value="{{$ma10->tempatlahir61}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir61" autofocus>
                  @error('tempatlahir61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt61" type="text" class="form-control @error('tbt61') is-invalid @enderror" name="tbt61" value="{{$ma10->tbt61}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt61" autofocus>
                  @error('tbt61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel61" type="text" class="form-control @error('jenkel61') is-invalid @enderror" name="jenkel61" value="{{$ma10->jenkel61}}" placeholder="Jenis Kelamin" required autocomplete="jenkel61" autofocus>
                  @error('jenkel61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel61" class="form-control @error('jenkel61') is-invalid @enderror" name="jenkel61" required autocomplete="jenkel61" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($ma10->jenkel61 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($ma10->jenkel61 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel61')
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
                  <input id="desa61" type="text" class="form-control @error('desa61') is-invalid @enderror" name="desa61" value="{{$ma10->desa61}}" placeholder="Desa" required autocomplete="desa61" autofocus>
                  @error('desa61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec61" type="text" class="form-control @error('kec61') is-invalid @enderror" name="kec61" value="{{$ma10->kec61}}" placeholder="Kecamatan" required autocomplete="kec61" autofocus>
                  @error('kec61')
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
                  <input id="kab61" type="text" class="form-control @error('kab61') is-invalid @enderror" name="kab61" value="{{$ma10->kab61}}" placeholder="Kabupaten / Kota" required autocomplete="kab61" autofocus>
                  @error('kab61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov61" type="text" class="form-control @error('prov61') is-invalid @enderror" name="prov61" value="{{$ma10->prov61}}" placeholder="Provinsi" required autocomplete="prov61" autofocus>
                  @error('prov61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos61" type="text" class="form-control @error('kodepos61') is-invalid @enderror" name="kodepos61" value="{{$ma10->kodepos61}}" placeholder="Kode Pos" required autocomplete="kodepos61" autofocus>
                  @error('kodepos61')
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
                  <input id="cita61" type="text" class="form-control @error('cita61') is-invalid @enderror" name="cita61" value="{{$ma10->cita61}}" placeholder="Alamat Lengkap" required autocomplete="cita61" autofocus>
                  @error('cita61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara61" type="text" class="form-control @error('jumlahsaudara61') is-invalid @enderror" name="jumlahsaudara61" value="{{$ma10->jumlahsaudara61}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara61" autofocus>
                  @error('jumlahsaudara61')
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
                  <input id="asalsekolah61" type="text" class="form-control @error('asalsekolah61') is-invalid @enderror" name="asalsekolah61" value="{{$ma10->asalsekolah61}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah61" autofocus>
                  @error('asalsekolah61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah61" type="text" class="form-control @error('alamatasalsekolah61') is-invalid @enderror" name="alamatasalsekolah61" value="{{$ma10->alamatasalsekolah61}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah61" autofocus>
                  @error('alamatasalsekolah61')
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
                  <input id="namaayah61" type="text" class="form-control @error('namaayah61') is-invalid @enderror" name="namaayah61" value="{{$ma10->namaayah61}}" placeholder="Nama Ayah" required autocomplete="namaayah61" autofocus>
                  @error('namaayah61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah61" type="text" class="form-control @error('nikayah61') is-invalid @enderror" name="nikayah61" value="{{$ma10->nikayah61}}" placeholder="NIK Ayah" required autocomplete="nikayah61" autofocus>
                  @error('nikayah61')
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
                  <input id="tahunlahirayah61" type="text" class="form-control @error('tahunlahirayah61') is-invalid @enderror" name="tahunlahirayah61" value="{{$ma10->tahunlahirayah61}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah61" autofocus>
                  @error('tahunlahirayah61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah61" type="text" class="form-control @error('pendidikanayah61') is-invalid @enderror" name="pendidikanayah61" value="{{$ma10->pendidikanayah61}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah61" autofocus>
                  @error('pendidikanayah61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah61" class="form-control @error('pendidikanayah61') is-invalid @enderror" name="pendidikanayah61" value="{{$ma10->pendidikanayah61}}" required autocomplete="pendidikanayah61" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($ma10->pendidikanayah61 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($ma10->pendidikanayah61 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($ma10->pendidikanayah61 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($ma10->pendidikanayah61 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($ma10->pendidikanayah61 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($ma10->pendidikanayah61 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($ma10->pendidikanayah61 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah61')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah61" type="text" class="form-control @error('pekerjaanayah61') is-invalid @enderror" name="pekerjaanayah61" value="{{$ma10->pekerjaanayah61}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah61" autofocus>
                  @error('pekerjaanayah61')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah61" class="form-control @error('pekerjaanayah61') is-invalid @enderror" name="pekerjaanayah61" value="{{$ma10->pekerjaanayah61}}" required autocomplete="pekerjaanayah61" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($ma10->pekerjaanayah61 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($ma10->pekerjaanayah61 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($ma10->pekerjaanayah61 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($ma10->pekerjaanayah61 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($ma10->pekerjaanayah61 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($ma10->pekerjaanayah61 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($ma10->pekerjaanayah61 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($ma10->pekerjaanayah61 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($ma10->pekerjaanayah61 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($ma10->pekerjaanayah61 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($ma10->pekerjaanayah61 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($ma10->pekerjaanayah61 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah61')
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
                  <input id="namaibu61" type="text" class="form-control @error('namaibu61') is-invalid @enderror" name="namaibu61" value="{{$ma10->namaibu61}}" placeholder="Nama Ibu" required autocomplete="namaibu61" autofocus>
                  @error('namaibu61')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu61" type="text" class="form-control @error('nikibu61') is-invalid @enderror" name="nikibu61" value="{{$ma10->nikibu61}}" placeholder="NIK Ibu" required autocomplete="nikibu61" autofocus>
                  @error('nikibu61')
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
                  <input id="tahunlahiribu61" type="text" class="form-control @error('tahunlahiribu61') is-invalid @enderror" name="tahunlahiribu61" value="{{$ma10->tahunlahiribu61}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu61" autofocus>
                  @error('tahunlahiribu61')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu61" type="text" class="form-control @error('pendidikanibu61') is-invalid @enderror" name="pendidikanibu61" value="{{$ma10->pendidikanibu61}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu61" autofocus>
                  @error('pendidikanibu61')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu61" class="form-control @error('pendidikanibu61') is-invalid @enderror" name="pendidikanibu61" value="{{$ma10->pendidikanibu61}}" required autocomplete="pendidikanibu61" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($ma10->pendidikanibu61 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($ma10->pendidikanibu61 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($ma10->pendidikanibu61 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($ma10->pendidikanibu61 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($ma10->pendidikanibu61 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($ma10->pendidikanibu61 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($ma10->pendidikanibu61 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu61')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu61" type="text" class="form-control @error('pekerjaanibu61') is-invalid @enderror" name="pekerjaanibu61" value="{{$ma10->pekerjaanibu61}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu61" autofocus>
                  @error('pekerjaanibu61')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu61" class="form-control @error('pekerjaanibu61') is-invalid @enderror" name="pekerjaanibu61" value="{{$ma10->pekerjaanibu61}}" required autocomplete="pekerjaanibu61" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($ma10->pekerjaanibu61 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($ma10->pekerjaanibu61 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($ma10->pekerjaanibu61 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($ma10->pekerjaanibu61 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($ma10->pekerjaanibu61 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($ma10->pekerjaanibu61 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($ma10->pekerjaanibu61 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($ma10->pekerjaanibu61 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($ma10->pekerjaanibu61 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($ma10->pekerjaanibu61 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($ma10->pekerjaanibu61 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($ma10->pekerjaanibu61 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu61')
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
                  <input id="penghasilan61" type="text" class="form-control @error('penghasilan61') is-invalid @enderror" name="penghasilan61" value="{{$ma10->penghasilan61}}" placeholder="Penghasilan" required autocomplete="penghasilan61" autofocus>
                  @error('penghasilan61')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan61" class="form-control @error('penghasilan61') is-invalid @enderror" name="penghasilan61" value="{{$ma10->penghasilan61}}" required autocomplete="penghasilan61" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($ma10->penghasilan61 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($ma10->penghasilan61 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($ma10->penghasilan61 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($ma10->penghasilan61 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($ma10->penghasilan61 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($ma10->penghasilan61 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan61')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi61" type="text" class="form-control @error('prestasi61') is-invalid @enderror" name="prestasi61" value="{{$ma10->prestasi61}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi61" autofocus>
                  @error('prestasi61')
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
                  <input id="nohp61" type="text" class="form-control @error('nohp61') is-invalid @enderror" name="nohp61" value="{{$ma10->nohp61}}" placeholder="No HP" required autocomplete="nohp61" autofocus>
                  @error('nohp61')
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

            