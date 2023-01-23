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
          <a href="{{url('smktkj12')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data SMK TKJ KELAS 12 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smktkj12') }}/{{$smktkj12->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap43" type="text" class="form-control @error('namalengkap43') is-invalid @enderror" name="namalengkap43" value="{{$smktkj12->namalengkap43}}" placeholder="Nama Lengkap" required autocomplete="namalengkap43" autofocus>
                  @error('namalengkap43')
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
                  <select id="inputState" class="form-control" id="status43" class="form-control @error('status43') is-invalid @enderror" name="status43">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smktkj12->status43 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smktkj12->status43 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smktkj12->status43 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smktkj12->status43 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smktkj12->status43 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smktkj12->status43 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status43')
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
                  <input id="status43" type="text" class="form-control @error('status43') is-invalid @enderror" name="status43" value="{{$smktkj12->status43}}" placeholder="Status" >
                  @error('status43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar43">Foto (size max 1.90 mb)</label>
                  <input id="avatar43" type="file" class="form-control @error('avatar43') is-invalid @enderror" name="avatar43" value="{{$smktkj12->avatar43}}" placeholder="Avatar">
                  @error('avatar43')
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
                  <input id="nisn43" type="text" class="form-control @error('nisn43') is-invalid @enderror" name="nisn43" value="{{$smktkj12->nisn43}}" placeholder="NISN" required autocomplete="nisn43" autofocus>
                  @error('nisn43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik43" type="text" class="form-control @error('nik43') is-invalid @enderror" name="nik43" value="{{$smktkj12->nik43}}" placeholder="NIK" required autocomplete="nik43" autofocus>
                  @error('nik43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk43" type="text" class="form-control @error('nokk43') is-invalid @enderror" name="nokk43" value="{{$smktkj12->nokk43}}" placeholder="No KK" required autocomplete="nokk43" autofocus>
                  @error('nokk43')
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
                  <input id="tempatlahir43" type="text" class="form-control @error('tempatlahir43') is-invalid @enderror" name="tempatlahir43" value="{{$smktkj12->tempatlahir43}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir43" autofocus>
                  @error('tempatlahir43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt43" type="text" class="form-control @error('tbt43') is-invalid @enderror" name="tbt43" value="{{$smktkj12->tbt43}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt43" autofocus>
                  @error('tbt43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel43" type="text" class="form-control @error('jenkel43') is-invalid @enderror" name="jenkel43" value="{{$smktkj12->jenkel43}}" placeholder="Jenis Kelamin" required autocomplete="jenkel43" autofocus>
                  @error('jenkel43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel43" class="form-control @error('jenkel43') is-invalid @enderror" name="jenkel43" required autocomplete="jenkel43" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($smktkj12->jenkel43 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smktkj12->jenkel43 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel43')
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
                  <input id="desa43" type="text" class="form-control @error('desa43') is-invalid @enderror" name="desa43" value="{{$smktkj12->desa43}}" placeholder="Desa" required autocomplete="desa43" autofocus>
                  @error('desa43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec43" type="text" class="form-control @error('kec43') is-invalid @enderror" name="kec43" value="{{$smktkj12->kec43}}" placeholder="Kecamatan" required autocomplete="kec43" autofocus>
                  @error('kec43')
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
                  <input id="kab43" type="text" class="form-control @error('kab43') is-invalid @enderror" name="kab43" value="{{$smktkj12->kab43}}" placeholder="Kabupaten / Kota" required autocomplete="kab43" autofocus>
                  @error('kab43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov43" type="text" class="form-control @error('prov43') is-invalid @enderror" name="prov43" value="{{$smktkj12->prov43}}" placeholder="Provinsi" required autocomplete="prov43" autofocus>
                  @error('prov43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos43" type="text" class="form-control @error('kodepos43') is-invalid @enderror" name="kodepos43" value="{{$smktkj12->kodepos43}}" placeholder="Kode Pos" required autocomplete="kodepos43" autofocus>
                  @error('kodepos43')
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
                  <input id="cita43" type="text" class="form-control @error('cita43') is-invalid @enderror" name="cita43" value="{{$smktkj12->cita43}}" placeholder="Alamat Lengkap" required autocomplete="cita43" autofocus>
                  @error('cita43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara43" type="text" class="form-control @error('jumlahsaudara43') is-invalid @enderror" name="jumlahsaudara43" value="{{$smktkj12->jumlahsaudara43}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara43" autofocus>
                  @error('jumlahsaudara43')
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
                  <input id="asalsekolah43" type="text" class="form-control @error('asalsekolah43') is-invalid @enderror" name="asalsekolah43" value="{{$smktkj12->asalsekolah43}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah43" autofocus>
                  @error('asalsekolah43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah43" type="text" class="form-control @error('alamatasalsekolah43') is-invalid @enderror" name="alamatasalsekolah43" value="{{$smktkj12->alamatasalsekolah43}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah43" autofocus>
                  @error('alamatasalsekolah43')
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
                  <input id="namaayah43" type="text" class="form-control @error('namaayah43') is-invalid @enderror" name="namaayah43" value="{{$smktkj12->namaayah43}}" placeholder="Nama Ayah" required autocomplete="namaayah43" autofocus>
                  @error('namaayah43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah43" type="text" class="form-control @error('nikayah43') is-invalid @enderror" name="nikayah43" value="{{$smktkj12->nikayah43}}" placeholder="NIK Ayah" required autocomplete="nikayah43" autofocus>
                  @error('nikayah43')
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
                  <input id="tahunlahirayah43" type="text" class="form-control @error('tahunlahirayah43') is-invalid @enderror" name="tahunlahirayah43" value="{{$smktkj12->tahunlahirayah43}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah43" autofocus>
                  @error('tahunlahirayah43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah43" type="text" class="form-control @error('pendidikanayah43') is-invalid @enderror" name="pendidikanayah43" value="{{$smktkj12->pendidikanayah43}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah43" autofocus>
                  @error('pendidikanayah43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah43" class="form-control @error('pendidikanayah43') is-invalid @enderror" name="pendidikanayah43" value="{{$smktkj12->pendidikanayah43}}" required autocomplete="pendidikanayah43" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkj12->pendidikanayah43 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkj12->pendidikanayah43 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkj12->pendidikanayah43 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkj12->pendidikanayah43 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkj12->pendidikanayah43 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkj12->pendidikanayah43 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkj12->pendidikanayah43 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah43')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah43" type="text" class="form-control @error('pekerjaanayah43') is-invalid @enderror" name="pekerjaanayah43" value="{{$smktkj12->pekerjaanayah43}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah43" autofocus>
                  @error('pekerjaanayah43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah43" class="form-control @error('pekerjaanayah43') is-invalid @enderror" name="pekerjaanayah43" value="{{$smktkj12->pekerjaanayah43}}" required autocomplete="pekerjaanayah43" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkj12->pekerjaanayah43 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkj12->pekerjaanayah43 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkj12->pekerjaanayah43 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkj12->pekerjaanayah43 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkj12->pekerjaanayah43 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkj12->pekerjaanayah43 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkj12->pekerjaanayah43 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkj12->pekerjaanayah43 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkj12->pekerjaanayah43 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkj12->pekerjaanayah43 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkj12->pekerjaanayah43 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkj12->pekerjaanayah43 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah43')
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
                  <input id="namaibu43" type="text" class="form-control @error('namaibu43') is-invalid @enderror" name="namaibu43" value="{{$smktkj12->namaibu43}}" placeholder="Nama Ibu" required autocomplete="namaibu43" autofocus>
                  @error('namaibu43')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu43" type="text" class="form-control @error('nikibu43') is-invalid @enderror" name="nikibu43" value="{{$smktkj12->nikibu43}}" placeholder="NIK Ibu" required autocomplete="nikibu43" autofocus>
                  @error('nikibu43')
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
                  <input id="tahunlahiribu43" type="text" class="form-control @error('tahunlahiribu43') is-invalid @enderror" name="tahunlahiribu43" value="{{$smktkj12->tahunlahiribu43}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu43" autofocus>
                  @error('tahunlahiribu43')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu43" type="text" class="form-control @error('pendidikanibu43') is-invalid @enderror" name="pendidikanibu43" value="{{$smktkj12->pendidikanibu43}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu43" autofocus>
                  @error('pendidikanibu43')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu43" class="form-control @error('pendidikanibu43') is-invalid @enderror" name="pendidikanibu43" value="{{$smktkj12->pendidikanibu43}}" required autocomplete="pendidikanibu43" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkj12->pendidikanibu43 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkj12->pendidikanibu43 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkj12->pendidikanibu43 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkj12->pendidikanibu43 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkj12->pendidikanibu43 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkj12->pendidikanibu43 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkj12->pendidikanibu43 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu43')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu43" type="text" class="form-control @error('pekerjaanibu43') is-invalid @enderror" name="pekerjaanibu43" value="{{$smktkj12->pekerjaanibu43}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu43" autofocus>
                  @error('pekerjaanibu43')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu43" class="form-control @error('pekerjaanibu43') is-invalid @enderror" name="pekerjaanibu43" value="{{$smktkj12->pekerjaanibu43}}" required autocomplete="pekerjaanibu43" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkj12->pekerjaanibu43 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkj12->pekerjaanibu43 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkj12->pekerjaanibu43 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkj12->pekerjaanibu43 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkj12->pekerjaanibu43 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkj12->pekerjaanibu43 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkj12->pekerjaanibu43 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkj12->pekerjaanibu43 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkj12->pekerjaanibu43 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkj12->pekerjaanibu43 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkj12->pekerjaanibu43 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkj12->pekerjaanibu43 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu43')
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
                  <input id="penghasilan43" type="text" class="form-control @error('penghasilan43') is-invalid @enderror" name="penghasilan43" value="{{$smktkj12->penghasilan43}}" placeholder="Penghasilan" required autocomplete="penghasilan43" autofocus>
                  @error('penghasilan43')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan43" class="form-control @error('penghasilan43') is-invalid @enderror" name="penghasilan43" value="{{$smktkj12->penghasilan43}}" required autocomplete="penghasilan43" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smktkj12->penghasilan43 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smktkj12->penghasilan43 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smktkj12->penghasilan43 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smktkj12->penghasilan43 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smktkj12->penghasilan43 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smktkj12->penghasilan43 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan43')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi43" type="text" class="form-control @error('prestasi43') is-invalid @enderror" name="prestasi43" value="{{$smktkj12->prestasi43}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi43" autofocus>
                  @error('prestasi43')
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
                  <input id="nohp43" type="text" class="form-control @error('nohp43') is-invalid @enderror" name="nohp43" value="{{$smktkj12->nohp43}}" placeholder="No HP" required autocomplete="nohp43" autofocus>
                  @error('nohp43')
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

            