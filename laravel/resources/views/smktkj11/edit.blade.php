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
          <a href="{{url('smktkj11')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data SMK TKJ KELAS 11 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smktkj11') }}/{{$smktkj11->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap42" type="text" class="form-control @error('namalengkap42') is-invalid @enderror" name="namalengkap42" value="{{$smktkj11->namalengkap42}}" placeholder="Nama Lengkap" required autocomplete="namalengkap42" autofocus>
                  @error('namalengkap42')
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
                  <select id="inputState" class="form-control" id="status42" class="form-control @error('status42') is-invalid @enderror" name="status42">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smktkj11->status42 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smktkj11->status42 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smktkj11->status42 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smktkj11->status42 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smktkj11->status42 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smktkj11->status42 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status42')
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
                  <input id="status42" type="text" class="form-control @error('status42') is-invalid @enderror" name="status42" value="{{$smktkj11->status42}}" placeholder="Status" >
                  @error('status42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar42">Foto (size max 1.90 mb)</label>
                  <input id="avatar42" type="file" class="form-control @error('avatar42') is-invalid @enderror" name="avatar42" value="{{$smktkj11->avatar42}}" placeholder="Avatar">
                  @error('avatar42')
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
                  <input id="nisn42" type="text" class="form-control @error('nisn42') is-invalid @enderror" name="nisn42" value="{{$smktkj11->nisn42}}" placeholder="NISN" required autocomplete="nisn42" autofocus>
                  @error('nisn42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik42" type="text" class="form-control @error('nik42') is-invalid @enderror" name="nik42" value="{{$smktkj11->nik42}}" placeholder="NIK" required autocomplete="nik42" autofocus>
                  @error('nik42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk42" type="text" class="form-control @error('nokk42') is-invalid @enderror" name="nokk42" value="{{$smktkj11->nokk42}}" placeholder="No KK" required autocomplete="nokk42" autofocus>
                  @error('nokk42')
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
                  <input id="tempatlahir42" type="text" class="form-control @error('tempatlahir42') is-invalid @enderror" name="tempatlahir42" value="{{$smktkj11->tempatlahir42}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir42" autofocus>
                  @error('tempatlahir42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt42" type="text" class="form-control @error('tbt42') is-invalid @enderror" name="tbt42" value="{{$smktkj11->tbt42}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt42" autofocus>
                  @error('tbt42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel42" type="text" class="form-control @error('jenkel42') is-invalid @enderror" name="jenkel42" value="{{$smktkj11->jenkel42}}" placeholder="Jenis Kelamin" required autocomplete="jenkel42" autofocus>
                  @error('jenkel42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel42" class="form-control @error('jenkel42') is-invalid @enderror" name="jenkel42" required autocomplete="jenkel42" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($smktkj11->jenkel42 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smktkj11->jenkel42 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel42')
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
                  <input id="desa42" type="text" class="form-control @error('desa42') is-invalid @enderror" name="desa42" value="{{$smktkj11->desa42}}" placeholder="Desa" required autocomplete="desa42" autofocus>
                  @error('desa42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec42" type="text" class="form-control @error('kec42') is-invalid @enderror" name="kec42" value="{{$smktkj11->kec42}}" placeholder="Kecamatan" required autocomplete="kec42" autofocus>
                  @error('kec42')
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
                  <input id="kab42" type="text" class="form-control @error('kab42') is-invalid @enderror" name="kab42" value="{{$smktkj11->kab42}}" placeholder="Kabupaten / Kota" required autocomplete="kab42" autofocus>
                  @error('kab42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov42" type="text" class="form-control @error('prov42') is-invalid @enderror" name="prov42" value="{{$smktkj11->prov42}}" placeholder="Provinsi" required autocomplete="prov42" autofocus>
                  @error('prov42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos42" type="text" class="form-control @error('kodepos42') is-invalid @enderror" name="kodepos42" value="{{$smktkj11->kodepos42}}" placeholder="Kode Pos" required autocomplete="kodepos42" autofocus>
                  @error('kodepos42')
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
                  <input id="cita42" type="text" class="form-control @error('cita42') is-invalid @enderror" name="cita42" value="{{$smktkj11->cita42}}" placeholder="Alamat Lengkap" required autocomplete="cita42" autofocus>
                  @error('cita42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara42" type="text" class="form-control @error('jumlahsaudara42') is-invalid @enderror" name="jumlahsaudara42" value="{{$smktkj11->jumlahsaudara42}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara42" autofocus>
                  @error('jumlahsaudara42')
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
                  <input id="asalsekolah42" type="text" class="form-control @error('asalsekolah42') is-invalid @enderror" name="asalsekolah42" value="{{$smktkj11->asalsekolah42}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah42" autofocus>
                  @error('asalsekolah42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah42" type="text" class="form-control @error('alamatasalsekolah42') is-invalid @enderror" name="alamatasalsekolah42" value="{{$smktkj11->alamatasalsekolah42}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah42" autofocus>
                  @error('alamatasalsekolah42')
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
                  <input id="namaayah42" type="text" class="form-control @error('namaayah42') is-invalid @enderror" name="namaayah42" value="{{$smktkj11->namaayah42}}" placeholder="Nama Ayah" required autocomplete="namaayah42" autofocus>
                  @error('namaayah42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah42" type="text" class="form-control @error('nikayah42') is-invalid @enderror" name="nikayah42" value="{{$smktkj11->nikayah42}}" placeholder="NIK Ayah" required autocomplete="nikayah42" autofocus>
                  @error('nikayah42')
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
                  <input id="tahunlahirayah42" type="text" class="form-control @error('tahunlahirayah42') is-invalid @enderror" name="tahunlahirayah42" value="{{$smktkj11->tahunlahirayah42}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah42" autofocus>
                  @error('tahunlahirayah42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah42" type="text" class="form-control @error('pendidikanayah42') is-invalid @enderror" name="pendidikanayah42" value="{{$smktkj11->pendidikanayah42}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah42" autofocus>
                  @error('pendidikanayah42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah42" class="form-control @error('pendidikanayah42') is-invalid @enderror" name="pendidikanayah42" value="{{$smktkj11->pendidikanayah42}}" required autocomplete="pendidikanayah42" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkj11->pendidikanayah42 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkj11->pendidikanayah42 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkj11->pendidikanayah42 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkj11->pendidikanayah42 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkj11->pendidikanayah42 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkj11->pendidikanayah42 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkj11->pendidikanayah42 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah42')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah42" type="text" class="form-control @error('pekerjaanayah42') is-invalid @enderror" name="pekerjaanayah42" value="{{$smktkj11->pekerjaanayah42}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah42" autofocus>
                  @error('pekerjaanayah42')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah42" class="form-control @error('pekerjaanayah42') is-invalid @enderror" name="pekerjaanayah42" value="{{$smktkj11->pekerjaanayah42}}" required autocomplete="pekerjaanayah42" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkj11->pekerjaanayah42 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkj11->pekerjaanayah42 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkj11->pekerjaanayah42 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkj11->pekerjaanayah42 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkj11->pekerjaanayah42 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkj11->pekerjaanayah42 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkj11->pekerjaanayah42 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkj11->pekerjaanayah42 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkj11->pekerjaanayah42 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkj11->pekerjaanayah42 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkj11->pekerjaanayah42 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkj11->pekerjaanayah42 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah42')
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
                  <input id="namaibu42" type="text" class="form-control @error('namaibu42') is-invalid @enderror" name="namaibu42" value="{{$smktkj11->namaibu42}}" placeholder="Nama Ibu" required autocomplete="namaibu42" autofocus>
                  @error('namaibu42')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu42" type="text" class="form-control @error('nikibu42') is-invalid @enderror" name="nikibu42" value="{{$smktkj11->nikibu42}}" placeholder="NIK Ibu" required autocomplete="nikibu42" autofocus>
                  @error('nikibu42')
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
                  <input id="tahunlahiribu42" type="text" class="form-control @error('tahunlahiribu42') is-invalid @enderror" name="tahunlahiribu42" value="{{$smktkj11->tahunlahiribu42}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu42" autofocus>
                  @error('tahunlahiribu42')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu42" type="text" class="form-control @error('pendidikanibu42') is-invalid @enderror" name="pendidikanibu42" value="{{$smktkj11->pendidikanibu42}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu42" autofocus>
                  @error('pendidikanibu42')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu42" class="form-control @error('pendidikanibu42') is-invalid @enderror" name="pendidikanibu42" value="{{$smktkj11->pendidikanibu42}}" required autocomplete="pendidikanibu42" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkj11->pendidikanibu42 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkj11->pendidikanibu42 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkj11->pendidikanibu42 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkj11->pendidikanibu42 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkj11->pendidikanibu42 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkj11->pendidikanibu42 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkj11->pendidikanibu42 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu42')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu42" type="text" class="form-control @error('pekerjaanibu42') is-invalid @enderror" name="pekerjaanibu42" value="{{$smktkj11->pekerjaanibu42}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu42" autofocus>
                  @error('pekerjaanibu42')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu42" class="form-control @error('pekerjaanibu42') is-invalid @enderror" name="pekerjaanibu42" value="{{$smktkj11->pekerjaanibu42}}" required autocomplete="pekerjaanibu42" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkj11->pekerjaanibu42 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkj11->pekerjaanibu42 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkj11->pekerjaanibu42 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkj11->pekerjaanibu42 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkj11->pekerjaanibu42 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkj11->pekerjaanibu42 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkj11->pekerjaanibu42 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkj11->pekerjaanibu42 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkj11->pekerjaanibu42 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkj11->pekerjaanibu42 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkj11->pekerjaanibu42 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkj11->pekerjaanibu42 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu42')
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
                  <input id="penghasilan42" type="text" class="form-control @error('penghasilan42') is-invalid @enderror" name="penghasilan42" value="{{$smktkj11->penghasilan42}}" placeholder="Penghasilan" required autocomplete="penghasilan42" autofocus>
                  @error('penghasilan42')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan42" class="form-control @error('penghasilan42') is-invalid @enderror" name="penghasilan42" value="{{$smktkj11->penghasilan42}}" required autocomplete="penghasilan42" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smktkj11->penghasilan42 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smktkj11->penghasilan42 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smktkj11->penghasilan42 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smktkj11->penghasilan42 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smktkj11->penghasilan42 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smktkj11->penghasilan42 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan42')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi42" type="text" class="form-control @error('prestasi42') is-invalid @enderror" name="prestasi42" value="{{$smktkj11->prestasi42}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi42" autofocus>
                  @error('prestasi42')
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
                  <input id="nohp42" type="text" class="form-control @error('nohp42') is-invalid @enderror" name="nohp42" value="{{$smktkj11->nohp42}}" placeholder="No HP" required autocomplete="nohp42" autofocus>
                  @error('nohp42')
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

            