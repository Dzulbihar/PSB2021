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
          <a href="{{url('smktkr12')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data SMK TKR KELAS 12 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smktkr12') }}/{{$smktkr12->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap53" type="text" class="form-control @error('namalengkap53') is-invalid @enderror" name="namalengkap53" value="{{$smktkr12->namalengkap53}}" placeholder="Nama Lengkap" required autocomplete="namalengkap53" autofocus>
                  @error('namalengkap53')
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
                  <select id="inputState" class="form-control" id="status53" class="form-control @error('status53') is-invalid @enderror" name="status53">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smktkr12->status53 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smktkr12->status53 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smktkr12->status53 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smktkr12->status53 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smktkr12->status53 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smktkr12->status53 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status53')
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
                  <input id="status53" type="text" class="form-control @error('status53') is-invalid @enderror" name="status53" value="{{$smktkr12->status53}}" placeholder="Status" >
                  @error('status53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar53">Foto (size max 1.90 mb)</label>
                  <input id="avatar53" type="file" class="form-control @error('avatar53') is-invalid @enderror" name="avatar53" value="{{$smktkr12->avatar53}}" placeholder="Avatar">
                  @error('avatar53')
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
                  <input id="nisn53" type="text" class="form-control @error('nisn53') is-invalid @enderror" name="nisn53" value="{{$smktkr12->nisn53}}" placeholder="NISN" required autocomplete="nisn53" autofocus>
                  @error('nisn53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik53" type="text" class="form-control @error('nik53') is-invalid @enderror" name="nik53" value="{{$smktkr12->nik53}}" placeholder="NIK" required autocomplete="nik53" autofocus>
                  @error('nik53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk53" type="text" class="form-control @error('nokk53') is-invalid @enderror" name="nokk53" value="{{$smktkr12->nokk53}}" placeholder="No KK" required autocomplete="nokk53" autofocus>
                  @error('nokk53')
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
                  <input id="tempatlahir53" type="text" class="form-control @error('tempatlahir53') is-invalid @enderror" name="tempatlahir53" value="{{$smktkr12->tempatlahir53}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir53" autofocus>
                  @error('tempatlahir53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt53" type="text" class="form-control @error('tbt53') is-invalid @enderror" name="tbt53" value="{{$smktkr12->tbt53}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt53" autofocus>
                  @error('tbt53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel53" type="text" class="form-control @error('jenkel53') is-invalid @enderror" name="jenkel53" value="{{$smktkr12->jenkel53}}" placeholder="Jenis Kelamin" required autocomplete="jenkel53" autofocus>
                  @error('jenkel53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel53" class="form-control @error('jenkel53') is-invalid @enderror" name="jenkel53" required autocomplete="jenkel53" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($smktkr12->jenkel53 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smktkr12->jenkel53 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel53')
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
                  <input id="desa53" type="text" class="form-control @error('desa53') is-invalid @enderror" name="desa53" value="{{$smktkr12->desa53}}" placeholder="Desa" required autocomplete="desa53" autofocus>
                  @error('desa53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec53" type="text" class="form-control @error('kec53') is-invalid @enderror" name="kec53" value="{{$smktkr12->kec53}}" placeholder="Kecamatan" required autocomplete="kec53" autofocus>
                  @error('kec53')
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
                  <input id="kab53" type="text" class="form-control @error('kab53') is-invalid @enderror" name="kab53" value="{{$smktkr12->kab53}}" placeholder="Kabupaten / Kota" required autocomplete="kab53" autofocus>
                  @error('kab53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov53" type="text" class="form-control @error('prov53') is-invalid @enderror" name="prov53" value="{{$smktkr12->prov53}}" placeholder="Provinsi" required autocomplete="prov53" autofocus>
                  @error('prov53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos53" type="text" class="form-control @error('kodepos53') is-invalid @enderror" name="kodepos53" value="{{$smktkr12->kodepos53}}" placeholder="Kode Pos" required autocomplete="kodepos53" autofocus>
                  @error('kodepos53')
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
                  <input id="cita53" type="text" class="form-control @error('cita53') is-invalid @enderror" name="cita53" value="{{$smktkr12->cita53}}" placeholder="Alamat Lengkap" required autocomplete="cita53" autofocus>
                  @error('cita53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara53" type="text" class="form-control @error('jumlahsaudara53') is-invalid @enderror" name="jumlahsaudara53" value="{{$smktkr12->jumlahsaudara53}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara53" autofocus>
                  @error('jumlahsaudara53')
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
                  <input id="asalsekolah53" type="text" class="form-control @error('asalsekolah53') is-invalid @enderror" name="asalsekolah53" value="{{$smktkr12->asalsekolah53}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah53" autofocus>
                  @error('asalsekolah53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah53" type="text" class="form-control @error('alamatasalsekolah53') is-invalid @enderror" name="alamatasalsekolah53" value="{{$smktkr12->alamatasalsekolah53}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah53" autofocus>
                  @error('alamatasalsekolah53')
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
                  <input id="namaayah53" type="text" class="form-control @error('namaayah53') is-invalid @enderror" name="namaayah53" value="{{$smktkr12->namaayah53}}" placeholder="Nama Ayah" required autocomplete="namaayah53" autofocus>
                  @error('namaayah53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah53" type="text" class="form-control @error('nikayah53') is-invalid @enderror" name="nikayah53" value="{{$smktkr12->nikayah53}}" placeholder="NIK Ayah" required autocomplete="nikayah53" autofocus>
                  @error('nikayah53')
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
                  <input id="tahunlahirayah53" type="text" class="form-control @error('tahunlahirayah53') is-invalid @enderror" name="tahunlahirayah53" value="{{$smktkr12->tahunlahirayah53}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah53" autofocus>
                  @error('tahunlahirayah53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah53" type="text" class="form-control @error('pendidikanayah53') is-invalid @enderror" name="pendidikanayah53" value="{{$smktkr12->pendidikanayah53}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah53" autofocus>
                  @error('pendidikanayah53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah53" class="form-control @error('pendidikanayah53') is-invalid @enderror" name="pendidikanayah53" value="{{$smktkr12->pendidikanayah53}}" required autocomplete="pendidikanayah53" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkr12->pendidikanayah53 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkr12->pendidikanayah53 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkr12->pendidikanayah53 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkr12->pendidikanayah53 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkr12->pendidikanayah53 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkr12->pendidikanayah53 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkr12->pendidikanayah53 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah53')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah53" type="text" class="form-control @error('pekerjaanayah53') is-invalid @enderror" name="pekerjaanayah53" value="{{$smktkr12->pekerjaanayah53}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah53" autofocus>
                  @error('pekerjaanayah53')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah53" class="form-control @error('pekerjaanayah53') is-invalid @enderror" name="pekerjaanayah53" value="{{$smktkr12->pekerjaanayah53}}" required autocomplete="pekerjaanayah53" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkr12->pekerjaanayah53 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkr12->pekerjaanayah53 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkr12->pekerjaanayah53 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkr12->pekerjaanayah53 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkr12->pekerjaanayah53 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkr12->pekerjaanayah53 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkr12->pekerjaanayah53 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkr12->pekerjaanayah53 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkr12->pekerjaanayah53 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkr12->pekerjaanayah53 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkr12->pekerjaanayah53 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkr12->pekerjaanayah53 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah53')
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
                  <input id="namaibu53" type="text" class="form-control @error('namaibu53') is-invalid @enderror" name="namaibu53" value="{{$smktkr12->namaibu53}}" placeholder="Nama Ibu" required autocomplete="namaibu53" autofocus>
                  @error('namaibu53')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu53" type="text" class="form-control @error('nikibu53') is-invalid @enderror" name="nikibu53" value="{{$smktkr12->nikibu53}}" placeholder="NIK Ibu" required autocomplete="nikibu53" autofocus>
                  @error('nikibu53')
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
                  <input id="tahunlahiribu53" type="text" class="form-control @error('tahunlahiribu53') is-invalid @enderror" name="tahunlahiribu53" value="{{$smktkr12->tahunlahiribu53}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu53" autofocus>
                  @error('tahunlahiribu53')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu53" type="text" class="form-control @error('pendidikanibu53') is-invalid @enderror" name="pendidikanibu53" value="{{$smktkr12->pendidikanibu53}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu53" autofocus>
                  @error('pendidikanibu53')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu53" class="form-control @error('pendidikanibu53') is-invalid @enderror" name="pendidikanibu53" value="{{$smktkr12->pendidikanibu53}}" required autocomplete="pendidikanibu53" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkr12->pendidikanibu53 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkr12->pendidikanibu53 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkr12->pendidikanibu53 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkr12->pendidikanibu53 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkr12->pendidikanibu53 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkr12->pendidikanibu53 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkr12->pendidikanibu53 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu53')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu53" type="text" class="form-control @error('pekerjaanibu53') is-invalid @enderror" name="pekerjaanibu53" value="{{$smktkr12->pekerjaanibu53}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu53" autofocus>
                  @error('pekerjaanibu53')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu53" class="form-control @error('pekerjaanibu53') is-invalid @enderror" name="pekerjaanibu53" value="{{$smktkr12->pekerjaanibu53}}" required autocomplete="pekerjaanibu53" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkr12->pekerjaanibu53 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkr12->pekerjaanibu53 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkr12->pekerjaanibu53 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkr12->pekerjaanibu53 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkr12->pekerjaanibu53 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkr12->pekerjaanibu53 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkr12->pekerjaanibu53 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkr12->pekerjaanibu53 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkr12->pekerjaanibu53 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkr12->pekerjaanibu53 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkr12->pekerjaanibu53 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkr12->pekerjaanibu53 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu53')
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
                  <input id="penghasilan53" type="text" class="form-control @error('penghasilan53') is-invalid @enderror" name="penghasilan53" value="{{$smktkr12->penghasilan53}}" placeholder="Penghasilan" required autocomplete="penghasilan53" autofocus>
                  @error('penghasilan53')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan53" class="form-control @error('penghasilan53') is-invalid @enderror" name="penghasilan53" value="{{$smktkr12->penghasilan53}}" required autocomplete="penghasilan53" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smktkr12->penghasilan53 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smktkr12->penghasilan53 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smktkr12->penghasilan53 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smktkr12->penghasilan53 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smktkr12->penghasilan53 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smktkr12->penghasilan53 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan53')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi53" type="text" class="form-control @error('prestasi53') is-invalid @enderror" name="prestasi53" value="{{$smktkr12->prestasi53}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi53" autofocus>
                  @error('prestasi53')
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
                  <input id="nohp53" type="text" class="form-control @error('nohp53') is-invalid @enderror" name="nohp53" value="{{$smktkr12->nohp53}}" placeholder="No HP" required autocomplete="nohp53" autofocus>
                  @error('nohp53')
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

            