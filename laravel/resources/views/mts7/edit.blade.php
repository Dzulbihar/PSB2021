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
          <a href="{{url('mts7')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data MTs KELAS 7 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('mts7') }}/{{$mts7->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap37" type="text" class="form-control @error('namalengkap37') is-invalid @enderror" name="namalengkap37" value="{{$mts7->namalengkap37}}" placeholder="Nama Lengkap" required autocomplete="namalengkap37" autofocus>
                  @error('namalengkap37')
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
                  <select id="inputState" class="form-control" id="status37" class="form-control @error('status37') is-invalid @enderror" name="status37">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($mts7->status37 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($mts7->status37 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($mts7->status37 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($mts7->status37 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($mts7->status37 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($mts7->status37 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status37')
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
                  <input id="status37" type="text" class="form-control @error('status37') is-invalid @enderror" name="status37" value="{{$mts7->status37}}" placeholder="Status" >
                  @error('status37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar37">Foto (size max 1.90 mb)</label>
                  <input id="avatar37" type="file" class="form-control @error('avatar37') is-invalid @enderror" name="avatar37" value="{{$mts7->avatar37}}" placeholder="Avatar">
                  @error('avatar37')
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
                  <input id="nisn37" type="text" class="form-control @error('nisn37') is-invalid @enderror" name="nisn37" value="{{$mts7->nisn37}}" placeholder="NISN" required autocomplete="nisn37" autofocus>
                  @error('nisn37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik37" type="text" class="form-control @error('nik37') is-invalid @enderror" name="nik37" value="{{$mts7->nik37}}" placeholder="NIK" required autocomplete="nik37" autofocus>
                  @error('nik37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk37" type="text" class="form-control @error('nokk37') is-invalid @enderror" name="nokk37" value="{{$mts7->nokk37}}" placeholder="No KK" required autocomplete="nokk37" autofocus>
                  @error('nokk37')
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
                  <input id="tempatlahir37" type="text" class="form-control @error('tempatlahir37') is-invalid @enderror" name="tempatlahir37" value="{{$mts7->tempatlahir37}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir37" autofocus>
                  @error('tempatlahir37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt37" type="text" class="form-control @error('tbt37') is-invalid @enderror" name="tbt37" value="{{$mts7->tbt37}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt37" autofocus>
                  @error('tbt37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel37" type="text" class="form-control @error('jenkel37') is-invalid @enderror" name="jenkel37" value="{{$mts7->jenkel37}}" placeholder="Jenis Kelamin" required autocomplete="jenkel37" autofocus>
                  @error('jenkel37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel37" class="form-control @error('jenkel37') is-invalid @enderror" name="jenkel37" required autocomplete="jenkel37" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($mts7->jenkel37 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($mts7->jenkel37 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel37')
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
                  <input id="desa37" type="text" class="form-control @error('desa37') is-invalid @enderror" name="desa37" value="{{$mts7->desa37}}" placeholder="Desa" required autocomplete="desa37" autofocus>
                  @error('desa37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec37" type="text" class="form-control @error('kec37') is-invalid @enderror" name="kec37" value="{{$mts7->kec37}}" placeholder="Kecamatan" required autocomplete="kec37" autofocus>
                  @error('kec37')
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
                  <input id="kab37" type="text" class="form-control @error('kab37') is-invalid @enderror" name="kab37" value="{{$mts7->kab37}}" placeholder="Kabupaten / Kota" required autocomplete="kab37" autofocus>
                  @error('kab37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov37" type="text" class="form-control @error('prov37') is-invalid @enderror" name="prov37" value="{{$mts7->prov37}}" placeholder="Provinsi" required autocomplete="prov37" autofocus>
                  @error('prov37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos37" type="text" class="form-control @error('kodepos37') is-invalid @enderror" name="kodepos37" value="{{$mts7->kodepos37}}" placeholder="Kode Pos" required autocomplete="kodepos37" autofocus>
                  @error('kodepos37')
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
                  <input id="cita37" type="text" class="form-control @error('cita37') is-invalid @enderror" name="cita37" value="{{$mts7->cita37}}" placeholder="Alamat Lengkap" required autocomplete="cita37" autofocus>
                  @error('cita37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara37" type="text" class="form-control @error('jumlahsaudara37') is-invalid @enderror" name="jumlahsaudara37" value="{{$mts7->jumlahsaudara37}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara37" autofocus>
                  @error('jumlahsaudara37')
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
                  <input id="asalsekolah37" type="text" class="form-control @error('asalsekolah37') is-invalid @enderror" name="asalsekolah37" value="{{$mts7->asalsekolah37}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah37" autofocus>
                  @error('asalsekolah37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah37" type="text" class="form-control @error('alamatasalsekolah37') is-invalid @enderror" name="alamatasalsekolah37" value="{{$mts7->alamatasalsekolah37}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah37" autofocus>
                  @error('alamatasalsekolah37')
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
                  <input id="namaayah37" type="text" class="form-control @error('namaayah37') is-invalid @enderror" name="namaayah37" value="{{$mts7->namaayah37}}" placeholder="Nama Ayah" required autocomplete="namaayah37" autofocus>
                  @error('namaayah37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah37" type="text" class="form-control @error('nikayah37') is-invalid @enderror" name="nikayah37" value="{{$mts7->nikayah37}}" placeholder="NIK Ayah" required autocomplete="nikayah37" autofocus>
                  @error('nikayah37')
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
                  <input id="tahunlahirayah37" type="text" class="form-control @error('tahunlahirayah37') is-invalid @enderror" name="tahunlahirayah37" value="{{$mts7->tahunlahirayah37}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah37" autofocus>
                  @error('tahunlahirayah37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah37" type="text" class="form-control @error('pendidikanayah37') is-invalid @enderror" name="pendidikanayah37" value="{{$mts7->pendidikanayah37}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah37" autofocus>
                  @error('pendidikanayah37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah37" class="form-control @error('pendidikanayah37') is-invalid @enderror" name="pendidikanayah37" value="{{$mts7->pendidikanayah37}}" required autocomplete="pendidikanayah37" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mts7->pendidikanayah37 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mts7->pendidikanayah37 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mts7->pendidikanayah37 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mts7->pendidikanayah37 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mts7->pendidikanayah37 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mts7->pendidikanayah37 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mts7->pendidikanayah37 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah37')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah37" type="text" class="form-control @error('pekerjaanayah37') is-invalid @enderror" name="pekerjaanayah37" value="{{$mts7->pekerjaanayah37}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah37" autofocus>
                  @error('pekerjaanayah37')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah37" class="form-control @error('pekerjaanayah37') is-invalid @enderror" name="pekerjaanayah37" value="{{$mts7->pekerjaanayah37}}" required autocomplete="pekerjaanayah37" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mts7->pekerjaanayah37 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mts7->pekerjaanayah37 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mts7->pekerjaanayah37 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mts7->pekerjaanayah37 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mts7->pekerjaanayah37 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mts7->pekerjaanayah37 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mts7->pekerjaanayah37 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mts7->pekerjaanayah37 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mts7->pekerjaanayah37 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mts7->pekerjaanayah37 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mts7->pekerjaanayah37 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mts7->pekerjaanayah37 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah37')
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
                  <input id="namaibu37" type="text" class="form-control @error('namaibu37') is-invalid @enderror" name="namaibu37" value="{{$mts7->namaibu37}}" placeholder="Nama Ibu" required autocomplete="namaibu37" autofocus>
                  @error('namaibu37')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu37" type="text" class="form-control @error('nikibu37') is-invalid @enderror" name="nikibu37" value="{{$mts7->nikibu37}}" placeholder="NIK Ibu" required autocomplete="nikibu37" autofocus>
                  @error('nikibu37')
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
                  <input id="tahunlahiribu37" type="text" class="form-control @error('tahunlahiribu37') is-invalid @enderror" name="tahunlahiribu37" value="{{$mts7->tahunlahiribu37}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu37" autofocus>
                  @error('tahunlahiribu37')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu37" type="text" class="form-control @error('pendidikanibu37') is-invalid @enderror" name="pendidikanibu37" value="{{$mts7->pendidikanibu37}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu37" autofocus>
                  @error('pendidikanibu37')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu37" class="form-control @error('pendidikanibu37') is-invalid @enderror" name="pendidikanibu37" value="{{$mts7->pendidikanibu37}}" required autocomplete="pendidikanibu37" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mts7->pendidikanibu37 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mts7->pendidikanibu37 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mts7->pendidikanibu37 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mts7->pendidikanibu37 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mts7->pendidikanibu37 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mts7->pendidikanibu37 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mts7->pendidikanibu37 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu37')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu37" type="text" class="form-control @error('pekerjaanibu37') is-invalid @enderror" name="pekerjaanibu37" value="{{$mts7->pekerjaanibu37}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu37" autofocus>
                  @error('pekerjaanibu37')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu37" class="form-control @error('pekerjaanibu37') is-invalid @enderror" name="pekerjaanibu37" value="{{$mts7->pekerjaanibu37}}" required autocomplete="pekerjaanibu37" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mts7->pekerjaanibu37 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mts7->pekerjaanibu37 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mts7->pekerjaanibu37 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mts7->pekerjaanibu37 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mts7->pekerjaanibu37 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mts7->pekerjaanibu37 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mts7->pekerjaanibu37 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mts7->pekerjaanibu37 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mts7->pekerjaanibu37 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mts7->pekerjaanibu37 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mts7->pekerjaanibu37 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mts7->pekerjaanibu37 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu37')
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
                  <input id="penghasilan37" type="text" class="form-control @error('penghasilan37') is-invalid @enderror" name="penghasilan37" value="{{$mts7->penghasilan37}}" placeholder="Penghasilan" required autocomplete="penghasilan37" autofocus>
                  @error('penghasilan37')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan37" class="form-control @error('penghasilan37') is-invalid @enderror" name="penghasilan37" value="{{$mts7->penghasilan37}}" required autocomplete="penghasilan37" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($mts7->penghasilan37 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($mts7->penghasilan37 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($mts7->penghasilan37 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($mts7->penghasilan37 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($mts7->penghasilan37 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($mts7->penghasilan37 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan37')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi37" type="text" class="form-control @error('prestasi37') is-invalid @enderror" name="prestasi37" value="{{$mts7->prestasi37}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi37" autofocus>
                  @error('prestasi37')
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
                  <input id="nohp37" type="text" class="form-control @error('nohp37') is-invalid @enderror" name="nohp37" value="{{$mts7->nohp37}}" placeholder="No HP" required autocomplete="nohp37" autofocus>
                  @error('nohp37')
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

            