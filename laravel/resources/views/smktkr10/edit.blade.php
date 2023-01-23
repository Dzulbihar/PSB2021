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
          <a href="{{url('smktkr10')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data SMK TKR KELAS 10 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smktkr10') }}/{{$smktkr10->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap51" type="text" class="form-control @error('namalengkap51') is-invalid @enderror" name="namalengkap51" value="{{$smktkr10->namalengkap51}}" placeholder="Nama Lengkap" required autocomplete="namalengkap51" autofocus>
                  @error('namalengkap51')
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
                  <select id="inputState" class="form-control" id="status51" class="form-control @error('status51') is-invalid @enderror" name="status51">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smktkr10->status51 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smktkr10->status51 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smktkr10->status51 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smktkr10->status51 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smktkr10->status51 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smktkr10->status51 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status51')
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
                  <input id="status51" type="text" class="form-control @error('status51') is-invalid @enderror" name="status51" value="{{$smktkr10->status51}}" placeholder="Status" >
                  @error('status51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar51">Foto (size max 1.90 mb)</label>
                  <input id="avatar51" type="file" class="form-control @error('avatar51') is-invalid @enderror" name="avatar51" value="{{$smktkr10->avatar51}}" placeholder="Avatar">
                  @error('avatar51')
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
                  <input id="nisn51" type="text" class="form-control @error('nisn51') is-invalid @enderror" name="nisn51" value="{{$smktkr10->nisn51}}" placeholder="NISN" required autocomplete="nisn51" autofocus>
                  @error('nisn51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik51" type="text" class="form-control @error('nik51') is-invalid @enderror" name="nik51" value="{{$smktkr10->nik51}}" placeholder="NIK" required autocomplete="nik51" autofocus>
                  @error('nik51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk51" type="text" class="form-control @error('nokk51') is-invalid @enderror" name="nokk51" value="{{$smktkr10->nokk51}}" placeholder="No KK" required autocomplete="nokk51" autofocus>
                  @error('nokk51')
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
                  <input id="tempatlahir51" type="text" class="form-control @error('tempatlahir51') is-invalid @enderror" name="tempatlahir51" value="{{$smktkr10->tempatlahir51}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir51" autofocus>
                  @error('tempatlahir51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt51" type="text" class="form-control @error('tbt51') is-invalid @enderror" name="tbt51" value="{{$smktkr10->tbt51}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt51" autofocus>
                  @error('tbt51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel51" type="text" class="form-control @error('jenkel51') is-invalid @enderror" name="jenkel51" value="{{$smktkr10->jenkel51}}" placeholder="Jenis Kelamin" required autocomplete="jenkel51" autofocus>
                  @error('jenkel51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel51" class="form-control @error('jenkel51') is-invalid @enderror" name="jenkel51" required autocomplete="jenkel51" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($smktkr10->jenkel51 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smktkr10->jenkel51 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel51')
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
                  <input id="desa51" type="text" class="form-control @error('desa51') is-invalid @enderror" name="desa51" value="{{$smktkr10->desa51}}" placeholder="Desa" required autocomplete="desa51" autofocus>
                  @error('desa51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec51" type="text" class="form-control @error('kec51') is-invalid @enderror" name="kec51" value="{{$smktkr10->kec51}}" placeholder="Kecamatan" required autocomplete="kec51" autofocus>
                  @error('kec51')
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
                  <input id="kab51" type="text" class="form-control @error('kab51') is-invalid @enderror" name="kab51" value="{{$smktkr10->kab51}}" placeholder="Kabupaten / Kota" required autocomplete="kab51" autofocus>
                  @error('kab51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov51" type="text" class="form-control @error('prov51') is-invalid @enderror" name="prov51" value="{{$smktkr10->prov51}}" placeholder="Provinsi" required autocomplete="prov51" autofocus>
                  @error('prov51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos51" type="text" class="form-control @error('kodepos51') is-invalid @enderror" name="kodepos51" value="{{$smktkr10->kodepos51}}" placeholder="Kode Pos" required autocomplete="kodepos51" autofocus>
                  @error('kodepos51')
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
                  <input id="cita51" type="text" class="form-control @error('cita51') is-invalid @enderror" name="cita51" value="{{$smktkr10->cita51}}" placeholder="Alamat Lengkap" required autocomplete="cita51" autofocus>
                  @error('cita51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara51" type="text" class="form-control @error('jumlahsaudara51') is-invalid @enderror" name="jumlahsaudara51" value="{{$smktkr10->jumlahsaudara51}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara51" autofocus>
                  @error('jumlahsaudara51')
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
                  <input id="asalsekolah51" type="text" class="form-control @error('asalsekolah51') is-invalid @enderror" name="asalsekolah51" value="{{$smktkr10->asalsekolah51}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah51" autofocus>
                  @error('asalsekolah51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah51" type="text" class="form-control @error('alamatasalsekolah51') is-invalid @enderror" name="alamatasalsekolah51" value="{{$smktkr10->alamatasalsekolah51}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah51" autofocus>
                  @error('alamatasalsekolah51')
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
                  <input id="namaayah51" type="text" class="form-control @error('namaayah51') is-invalid @enderror" name="namaayah51" value="{{$smktkr10->namaayah51}}" placeholder="Nama Ayah" required autocomplete="namaayah51" autofocus>
                  @error('namaayah51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah51" type="text" class="form-control @error('nikayah51') is-invalid @enderror" name="nikayah51" value="{{$smktkr10->nikayah51}}" placeholder="NIK Ayah" required autocomplete="nikayah51" autofocus>
                  @error('nikayah51')
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
                  <input id="tahunlahirayah51" type="text" class="form-control @error('tahunlahirayah51') is-invalid @enderror" name="tahunlahirayah51" value="{{$smktkr10->tahunlahirayah51}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah51" autofocus>
                  @error('tahunlahirayah51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah51" type="text" class="form-control @error('pendidikanayah51') is-invalid @enderror" name="pendidikanayah51" value="{{$smktkr10->pendidikanayah51}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah51" autofocus>
                  @error('pendidikanayah51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah51" class="form-control @error('pendidikanayah51') is-invalid @enderror" name="pendidikanayah51" value="{{$smktkr10->pendidikanayah51}}" required autocomplete="pendidikanayah51" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkr10->pendidikanayah51 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkr10->pendidikanayah51 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkr10->pendidikanayah51 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkr10->pendidikanayah51 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkr10->pendidikanayah51 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkr10->pendidikanayah51 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkr10->pendidikanayah51 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah51')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah51" type="text" class="form-control @error('pekerjaanayah51') is-invalid @enderror" name="pekerjaanayah51" value="{{$smktkr10->pekerjaanayah51}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah51" autofocus>
                  @error('pekerjaanayah51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah51" class="form-control @error('pekerjaanayah51') is-invalid @enderror" name="pekerjaanayah51" value="{{$smktkr10->pekerjaanayah51}}" required autocomplete="pekerjaanayah51" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkr10->pekerjaanayah51 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkr10->pekerjaanayah51 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkr10->pekerjaanayah51 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkr10->pekerjaanayah51 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkr10->pekerjaanayah51 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkr10->pekerjaanayah51 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkr10->pekerjaanayah51 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkr10->pekerjaanayah51 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkr10->pekerjaanayah51 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkr10->pekerjaanayah51 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkr10->pekerjaanayah51 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkr10->pekerjaanayah51 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah51')
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
                  <input id="namaibu51" type="text" class="form-control @error('namaibu51') is-invalid @enderror" name="namaibu51" value="{{$smktkr10->namaibu51}}" placeholder="Nama Ibu" required autocomplete="namaibu51" autofocus>
                  @error('namaibu51')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu51" type="text" class="form-control @error('nikibu51') is-invalid @enderror" name="nikibu51" value="{{$smktkr10->nikibu51}}" placeholder="NIK Ibu" required autocomplete="nikibu51" autofocus>
                  @error('nikibu51')
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
                  <input id="tahunlahiribu51" type="text" class="form-control @error('tahunlahiribu51') is-invalid @enderror" name="tahunlahiribu51" value="{{$smktkr10->tahunlahiribu51}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu51" autofocus>
                  @error('tahunlahiribu51')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu51" type="text" class="form-control @error('pendidikanibu51') is-invalid @enderror" name="pendidikanibu51" value="{{$smktkr10->pendidikanibu51}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu51" autofocus>
                  @error('pendidikanibu51')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu51" class="form-control @error('pendidikanibu51') is-invalid @enderror" name="pendidikanibu51" value="{{$smktkr10->pendidikanibu51}}" required autocomplete="pendidikanibu51" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkr10->pendidikanibu51 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkr10->pendidikanibu51 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkr10->pendidikanibu51 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkr10->pendidikanibu51 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkr10->pendidikanibu51 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkr10->pendidikanibu51 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkr10->pendidikanibu51 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu51')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu51" type="text" class="form-control @error('pekerjaanibu51') is-invalid @enderror" name="pekerjaanibu51" value="{{$smktkr10->pekerjaanibu51}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu51" autofocus>
                  @error('pekerjaanibu51')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu51" class="form-control @error('pekerjaanibu51') is-invalid @enderror" name="pekerjaanibu51" value="{{$smktkr10->pekerjaanibu51}}" required autocomplete="pekerjaanibu51" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkr10->pekerjaanibu51 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkr10->pekerjaanibu51 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkr10->pekerjaanibu51 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkr10->pekerjaanibu51 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkr10->pekerjaanibu51 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkr10->pekerjaanibu51 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkr10->pekerjaanibu51 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkr10->pekerjaanibu51 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkr10->pekerjaanibu51 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkr10->pekerjaanibu51 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkr10->pekerjaanibu51 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkr10->pekerjaanibu51 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu51')
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
                  <input id="penghasilan51" type="text" class="form-control @error('penghasilan51') is-invalid @enderror" name="penghasilan51" value="{{$smktkr10->penghasilan51}}" placeholder="Penghasilan" required autocomplete="penghasilan51" autofocus>
                  @error('penghasilan51')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan51" class="form-control @error('penghasilan51') is-invalid @enderror" name="penghasilan51" value="{{$smktkr10->penghasilan51}}" required autocomplete="penghasilan51" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smktkr10->penghasilan51 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smktkr10->penghasilan51 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smktkr10->penghasilan51 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smktkr10->penghasilan51 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smktkr10->penghasilan51 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smktkr10->penghasilan51 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan51')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi51" type="text" class="form-control @error('prestasi51') is-invalid @enderror" name="prestasi51" value="{{$smktkr10->prestasi51}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi51" autofocus>
                  @error('prestasi51')
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
                  <input id="nohp51" type="text" class="form-control @error('nohp51') is-invalid @enderror" name="nohp51" value="{{$smktkr10->nohp51}}" placeholder="No HP" required autocomplete="nohp51" autofocus>
                  @error('nohp51')
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

            