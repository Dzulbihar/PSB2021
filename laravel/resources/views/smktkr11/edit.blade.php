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
          <a href="{{url('smktkr11')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data SMK TKR KELAS 11 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smktkr11') }}/{{$smktkr11->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap52" type="text" class="form-control @error('namalengkap52') is-invalid @enderror" name="namalengkap52" value="{{$smktkr11->namalengkap52}}" placeholder="Nama Lengkap" required autocomplete="namalengkap52" autofocus>
                  @error('namalengkap52')
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
                  <select id="inputState" class="form-control" id="status52" class="form-control @error('status52') is-invalid @enderror" name="status52">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smktkr11->status52 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smktkr11->status52 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smktkr11->status52 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smktkr11->status52 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smktkr11->status52 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smktkr11->status52 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status52')
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
                  <input id="status52" type="text" class="form-control @error('status52') is-invalid @enderror" name="status52" value="{{$smktkr11->status52}}" placeholder="Status" >
                  @error('status52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar52">Foto (size max 1.90 mb)</label>
                  <input id="avatar52" type="file" class="form-control @error('avatar52') is-invalid @enderror" name="avatar52" value="{{$smktkr11->avatar52}}" placeholder="Avatar">
                  @error('avatar52')
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
                  <input id="nisn52" type="text" class="form-control @error('nisn52') is-invalid @enderror" name="nisn52" value="{{$smktkr11->nisn52}}" placeholder="NISN" required autocomplete="nisn52" autofocus>
                  @error('nisn52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik52" type="text" class="form-control @error('nik52') is-invalid @enderror" name="nik52" value="{{$smktkr11->nik52}}" placeholder="NIK" required autocomplete="nik52" autofocus>
                  @error('nik52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk52" type="text" class="form-control @error('nokk52') is-invalid @enderror" name="nokk52" value="{{$smktkr11->nokk52}}" placeholder="No KK" required autocomplete="nokk52" autofocus>
                  @error('nokk52')
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
                  <input id="tempatlahir52" type="text" class="form-control @error('tempatlahir52') is-invalid @enderror" name="tempatlahir52" value="{{$smktkr11->tempatlahir52}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir52" autofocus>
                  @error('tempatlahir52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt52" type="text" class="form-control @error('tbt52') is-invalid @enderror" name="tbt52" value="{{$smktkr11->tbt52}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt52" autofocus>
                  @error('tbt52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel52" type="text" class="form-control @error('jenkel52') is-invalid @enderror" name="jenkel52" value="{{$smktkr11->jenkel52}}" placeholder="Jenis Kelamin" required autocomplete="jenkel52" autofocus>
                  @error('jenkel52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel52" class="form-control @error('jenkel52') is-invalid @enderror" name="jenkel52" required autocomplete="jenkel52" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($smktkr11->jenkel52 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smktkr11->jenkel52 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel52')
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
                  <input id="desa52" type="text" class="form-control @error('desa52') is-invalid @enderror" name="desa52" value="{{$smktkr11->desa52}}" placeholder="Desa" required autocomplete="desa52" autofocus>
                  @error('desa52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec52" type="text" class="form-control @error('kec52') is-invalid @enderror" name="kec52" value="{{$smktkr11->kec52}}" placeholder="Kecamatan" required autocomplete="kec52" autofocus>
                  @error('kec52')
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
                  <input id="kab52" type="text" class="form-control @error('kab52') is-invalid @enderror" name="kab52" value="{{$smktkr11->kab52}}" placeholder="Kabupaten / Kota" required autocomplete="kab52" autofocus>
                  @error('kab52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov52" type="text" class="form-control @error('prov52') is-invalid @enderror" name="prov52" value="{{$smktkr11->prov52}}" placeholder="Provinsi" required autocomplete="prov52" autofocus>
                  @error('prov52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos52" type="text" class="form-control @error('kodepos52') is-invalid @enderror" name="kodepos52" value="{{$smktkr11->kodepos52}}" placeholder="Kode Pos" required autocomplete="kodepos52" autofocus>
                  @error('kodepos52')
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
                  <input id="cita52" type="text" class="form-control @error('cita52') is-invalid @enderror" name="cita52" value="{{$smktkr11->cita52}}" placeholder="Alamat Lengkap" required autocomplete="cita52" autofocus>
                  @error('cita52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara52" type="text" class="form-control @error('jumlahsaudara52') is-invalid @enderror" name="jumlahsaudara52" value="{{$smktkr11->jumlahsaudara52}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara52" autofocus>
                  @error('jumlahsaudara52')
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
                  <input id="asalsekolah52" type="text" class="form-control @error('asalsekolah52') is-invalid @enderror" name="asalsekolah52" value="{{$smktkr11->asalsekolah52}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah52" autofocus>
                  @error('asalsekolah52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah52" type="text" class="form-control @error('alamatasalsekolah52') is-invalid @enderror" name="alamatasalsekolah52" value="{{$smktkr11->alamatasalsekolah52}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah52" autofocus>
                  @error('alamatasalsekolah52')
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
                  <input id="namaayah52" type="text" class="form-control @error('namaayah52') is-invalid @enderror" name="namaayah52" value="{{$smktkr11->namaayah52}}" placeholder="Nama Ayah" required autocomplete="namaayah52" autofocus>
                  @error('namaayah52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah52" type="text" class="form-control @error('nikayah52') is-invalid @enderror" name="nikayah52" value="{{$smktkr11->nikayah52}}" placeholder="NIK Ayah" required autocomplete="nikayah52" autofocus>
                  @error('nikayah52')
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
                  <input id="tahunlahirayah52" type="text" class="form-control @error('tahunlahirayah52') is-invalid @enderror" name="tahunlahirayah52" value="{{$smktkr11->tahunlahirayah52}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah52" autofocus>
                  @error('tahunlahirayah52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah52" type="text" class="form-control @error('pendidikanayah52') is-invalid @enderror" name="pendidikanayah52" value="{{$smktkr11->pendidikanayah52}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah52" autofocus>
                  @error('pendidikanayah52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah52" class="form-control @error('pendidikanayah52') is-invalid @enderror" name="pendidikanayah52" value="{{$smktkr11->pendidikanayah52}}" required autocomplete="pendidikanayah52" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkr11->pendidikanayah52 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkr11->pendidikanayah52 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkr11->pendidikanayah52 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkr11->pendidikanayah52 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkr11->pendidikanayah52 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkr11->pendidikanayah52 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkr11->pendidikanayah52 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah52')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah52" type="text" class="form-control @error('pekerjaanayah52') is-invalid @enderror" name="pekerjaanayah52" value="{{$smktkr11->pekerjaanayah52}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah52" autofocus>
                  @error('pekerjaanayah52')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah52" class="form-control @error('pekerjaanayah52') is-invalid @enderror" name="pekerjaanayah52" value="{{$smktkr11->pekerjaanayah52}}" required autocomplete="pekerjaanayah52" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkr11->pekerjaanayah52 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkr11->pekerjaanayah52 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkr11->pekerjaanayah52 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkr11->pekerjaanayah52 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkr11->pekerjaanayah52 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkr11->pekerjaanayah52 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkr11->pekerjaanayah52 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkr11->pekerjaanayah52 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkr11->pekerjaanayah52 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkr11->pekerjaanayah52 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkr11->pekerjaanayah52 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkr11->pekerjaanayah52 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah52')
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
                  <input id="namaibu52" type="text" class="form-control @error('namaibu52') is-invalid @enderror" name="namaibu52" value="{{$smktkr11->namaibu52}}" placeholder="Nama Ibu" required autocomplete="namaibu52" autofocus>
                  @error('namaibu52')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu52" type="text" class="form-control @error('nikibu52') is-invalid @enderror" name="nikibu52" value="{{$smktkr11->nikibu52}}" placeholder="NIK Ibu" required autocomplete="nikibu52" autofocus>
                  @error('nikibu52')
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
                  <input id="tahunlahiribu52" type="text" class="form-control @error('tahunlahiribu52') is-invalid @enderror" name="tahunlahiribu52" value="{{$smktkr11->tahunlahiribu52}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu52" autofocus>
                  @error('tahunlahiribu52')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu52" type="text" class="form-control @error('pendidikanibu52') is-invalid @enderror" name="pendidikanibu52" value="{{$smktkr11->pendidikanibu52}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu52" autofocus>
                  @error('pendidikanibu52')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu52" class="form-control @error('pendidikanibu52') is-invalid @enderror" name="pendidikanibu52" value="{{$smktkr11->pendidikanibu52}}" required autocomplete="pendidikanibu52" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkr11->pendidikanibu52 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkr11->pendidikanibu52 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkr11->pendidikanibu52 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkr11->pendidikanibu52 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkr11->pendidikanibu52 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkr11->pendidikanibu52 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkr11->pendidikanibu52 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu52')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu52" type="text" class="form-control @error('pekerjaanibu52') is-invalid @enderror" name="pekerjaanibu52" value="{{$smktkr11->pekerjaanibu52}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu52" autofocus>
                  @error('pekerjaanibu52')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu52" class="form-control @error('pekerjaanibu52') is-invalid @enderror" name="pekerjaanibu52" value="{{$smktkr11->pekerjaanibu52}}" required autocomplete="pekerjaanibu52" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkr11->pekerjaanibu52 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkr11->pekerjaanibu52 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkr11->pekerjaanibu52 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkr11->pekerjaanibu52 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkr11->pekerjaanibu52 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkr11->pekerjaanibu52 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkr11->pekerjaanibu52 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkr11->pekerjaanibu52 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkr11->pekerjaanibu52 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkr11->pekerjaanibu52 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkr11->pekerjaanibu52 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkr11->pekerjaanibu52 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu52')
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
                  <input id="penghasilan52" type="text" class="form-control @error('penghasilan52') is-invalid @enderror" name="penghasilan52" value="{{$smktkr11->penghasilan52}}" placeholder="Penghasilan" required autocomplete="penghasilan52" autofocus>
                  @error('penghasilan52')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan52" class="form-control @error('penghasilan52') is-invalid @enderror" name="penghasilan52" value="{{$smktkr11->penghasilan52}}" required autocomplete="penghasilan52" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smktkr11->penghasilan52 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smktkr11->penghasilan52 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smktkr11->penghasilan52 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smktkr11->penghasilan52 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smktkr11->penghasilan52 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smktkr11->penghasilan52 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan52')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi52" type="text" class="form-control @error('prestasi52') is-invalid @enderror" name="prestasi52" value="{{$smktkr11->prestasi52}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi52" autofocus>
                  @error('prestasi52')
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
                  <input id="nohp52" type="text" class="form-control @error('nohp52') is-invalid @enderror" name="nohp52" value="{{$smktkr11->nohp52}}" placeholder="No HP" required autocomplete="nohp52" autofocus>
                  @error('nohp52')
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

            