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
          <a href="{{url('alumni')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data Alumni Ponpes Askhabul Kahfi </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('alumni') }}/{{$alumni->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap99" type="text" class="form-control @error('namalengkap99') is-invalid @enderror" name="namalengkap99" value="{{$alumni->namalengkap99}}" placeholder="Nama Lengkap" required autocomplete="namalengkap99" autofocus>
                  @error('namalengkap99')
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
                  <select id="inputState" class="form-control" id="status99" class="form-control @error('status99') is-invalid @enderror" name="status99">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($alumni->status99 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($alumni->status99 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($alumni->status99 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($alumni->status99 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($alumni->status99 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($alumni->status99 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status99')
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
                  <input id="status99" type="text" class="form-control @error('status99') is-invalid @enderror" name="status99" value="{{$alumni->status99}}" placeholder="Status" >
                  @error('status99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar99">Foto (size max 1.90 mb)</label>
                  <input id="avatar99" type="file" class="form-control @error('avatar99') is-invalid @enderror" name="avatar99" value="{{$alumni->avatar99}}" placeholder="Avatar">
                  @error('avatar99')
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
                  <input id="nisn99" type="text" class="form-control @error('nisn99') is-invalid @enderror" name="nisn99" value="{{$alumni->nisn99}}" placeholder="NISN" required autocomplete="nisn99" autofocus>
                  @error('nisn99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik99" type="text" class="form-control @error('nik99') is-invalid @enderror" name="nik99" value="{{$alumni->nik99}}" placeholder="NIK" required autocomplete="nik99" autofocus>
                  @error('nik99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk99" type="text" class="form-control @error('nokk99') is-invalid @enderror" name="nokk99" value="{{$alumni->nokk99}}" placeholder="No KK" required autocomplete="nokk99" autofocus>
                  @error('nokk99')
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
                  <input id="tempatlahir99" type="text" class="form-control @error('tempatlahir99') is-invalid @enderror" name="tempatlahir99" value="{{$alumni->tempatlahir99}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir99" autofocus>
                  @error('tempatlahir99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt99" type="text" class="form-control @error('tbt99') is-invalid @enderror" name="tbt99" value="{{$alumni->tbt99}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt99" autofocus>
                  @error('tbt99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel99" type="text" class="form-control @error('jenkel99') is-invalid @enderror" name="jenkel99" value="{{$alumni->jenkel99}}" placeholder="Jenis Kelamin" required autocomplete="jenkel99" autofocus>
                  @error('jenkel99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel99" class="form-control @error('jenkel99') is-invalid @enderror" name="jenkel99" required autocomplete="jenkel99" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($alumni->jenkel99 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($alumni->jenkel99 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel99')
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
                  <input id="desa99" type="text" class="form-control @error('desa99') is-invalid @enderror" name="desa99" value="{{$alumni->desa99}}" placeholder="Desa" required autocomplete="desa99" autofocus>
                  @error('desa99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec99" type="text" class="form-control @error('kec99') is-invalid @enderror" name="kec99" value="{{$alumni->kec99}}" placeholder="Kecamatan" required autocomplete="kec99" autofocus>
                  @error('kec99')
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
                  <input id="kab99" type="text" class="form-control @error('kab99') is-invalid @enderror" name="kab99" value="{{$alumni->kab99}}" placeholder="Kabupaten / Kota" required autocomplete="kab99" autofocus>
                  @error('kab99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov99" type="text" class="form-control @error('prov99') is-invalid @enderror" name="prov99" value="{{$alumni->prov99}}" placeholder="Provinsi" required autocomplete="prov99" autofocus>
                  @error('prov99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos99" type="text" class="form-control @error('kodepos99') is-invalid @enderror" name="kodepos99" value="{{$alumni->kodepos99}}" placeholder="Kode Pos" required autocomplete="kodepos99" autofocus>
                  @error('kodepos99')
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
                  <input id="cita99" type="text" class="form-control @error('cita99') is-invalid @enderror" name="cita99" value="{{$alumni->cita99}}" placeholder="Alamat Lengkap" required autocomplete="cita99" autofocus>
                  @error('cita99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara99" type="number" class="form-control @error('jumlahsaudara99') is-invalid @enderror" name="jumlahsaudara99" value="{{$alumni->jumlahsaudara99}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara99" autofocus>
                  @error('jumlahsaudara99')
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
                  <input id="asalsekolah99" type="text" class="form-control @error('asalsekolah99') is-invalid @enderror" name="asalsekolah99" value="{{$alumni->asalsekolah99}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah99" autofocus>
                  @error('asalsekolah99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah99" type="text" class="form-control @error('alamatasalsekolah99') is-invalid @enderror" name="alamatasalsekolah99" value="{{$alumni->alamatasalsekolah99}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah99" autofocus>
                  @error('alamatasalsekolah99')
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
                  <input id="namaayah99" type="text" class="form-control @error('namaayah99') is-invalid @enderror" name="namaayah99" value="{{$alumni->namaayah99}}" placeholder="Nama Ayah" required autocomplete="namaayah99" autofocus>
                  @error('namaayah99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah99" type="text" class="form-control @error('nikayah99') is-invalid @enderror" name="nikayah99" value="{{$alumni->nikayah99}}" placeholder="NIK Ayah" required autocomplete="nikayah99" autofocus>
                  @error('nikayah99')
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
                  <input id="tahunlahirayah99" type="text" class="form-control @error('tahunlahirayah99') is-invalid @enderror" name="tahunlahirayah99" value="{{$alumni->tahunlahirayah99}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah99" autofocus>
                  @error('tahunlahirayah99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah99" type="text" class="form-control @error('pendidikanayah99') is-invalid @enderror" name="pendidikanayah99" value="{{$alumni->pendidikanayah99}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah99" autofocus>
                  @error('pendidikanayah99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah99" class="form-control @error('pendidikanayah99') is-invalid @enderror" name="pendidikanayah99" value="{{$alumni->pendidikanayah99}}" required autocomplete="pendidikanayah99" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($alumni->pendidikanayah99 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($alumni->pendidikanayah99 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($alumni->pendidikanayah99 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($alumni->pendidikanayah99 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($alumni->pendidikanayah99 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($alumni->pendidikanayah99 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($alumni->pendidikanayah99 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah99')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah99" type="text" class="form-control @error('pekerjaanayah99') is-invalid @enderror" name="pekerjaanayah99" value="{{$alumni->pekerjaanayah99}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah99" autofocus>
                  @error('pekerjaanayah99')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah99" class="form-control @error('pekerjaanayah99') is-invalid @enderror" name="pekerjaanayah99" value="{{$alumni->pekerjaanayah99}}" required autocomplete="pekerjaanayah99" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($alumni->pekerjaanayah99 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($alumni->pekerjaanayah99 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($alumni->pekerjaanayah99 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($alumni->pekerjaanayah99 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($alumni->pekerjaanayah99 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($alumni->pekerjaanayah99 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($alumni->pekerjaanayah99 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($alumni->pekerjaanayah99 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($alumni->pekerjaanayah99 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($alumni->pekerjaanayah99 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($alumni->pekerjaanayah99 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($alumni->pekerjaanayah99 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah99')
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
                  <input id="namaibu99" type="text" class="form-control @error('namaibu99') is-invalid @enderror" name="namaibu99" value="{{$alumni->namaibu99}}" placeholder="Nama Ibu" required autocomplete="namaibu99" autofocus>
                  @error('namaibu99')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu99" type="text" class="form-control @error('nikibu99') is-invalid @enderror" name="nikibu99" value="{{$alumni->nikibu99}}" placeholder="NIK Ibu" required autocomplete="nikibu99" autofocus>
                  @error('nikibu99')
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
                  <input id="tahunlahiribu99" type="text" class="form-control @error('tahunlahiribu99') is-invalid @enderror" name="tahunlahiribu99" value="{{$alumni->tahunlahiribu99}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu99" autofocus>
                  @error('tahunlahiribu99')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu99" type="text" class="form-control @error('pendidikanibu99') is-invalid @enderror" name="pendidikanibu99" value="{{$alumni->pendidikanibu99}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu99" autofocus>
                  @error('pendidikanibu99')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu99" class="form-control @error('pendidikanibu99') is-invalid @enderror" name="pendidikanibu99" value="{{$alumni->pendidikanibu99}}" required autocomplete="pendidikanibu99" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($alumni->pendidikanibu99 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($alumni->pendidikanibu99 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($alumni->pendidikanibu99 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($alumni->pendidikanibu99 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($alumni->pendidikanibu99 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($alumni->pendidikanibu99 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($alumni->pendidikanibu99 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu99')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu99" type="text" class="form-control @error('pekerjaanibu99') is-invalid @enderror" name="pekerjaanibu99" value="{{$alumni->pekerjaanibu99}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu99" autofocus>
                  @error('pekerjaanibu99')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu99" class="form-control @error('pekerjaanibu99') is-invalid @enderror" name="pekerjaanibu99" value="{{$alumni->pekerjaanibu99}}" required autocomplete="pekerjaanibu99" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($alumni->pekerjaanibu99 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($alumni->pekerjaanibu99 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($alumni->pekerjaanibu99 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($alumni->pekerjaanibu99 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($alumni->pekerjaanibu99 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($alumni->pekerjaanibu99 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($alumni->pekerjaanibu99 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($alumni->pekerjaanibu99 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($alumni->pekerjaanibu99 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($alumni->pekerjaanibu99 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($alumni->pekerjaanibu99 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($alumni->pekerjaanibu99 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu99')
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
                  <input id="penghasilan99" type="text" class="form-control @error('penghasilan99') is-invalid @enderror" name="penghasilan99" value="{{$alumni->penghasilan99}}" placeholder="Penghasilan" required autocomplete="penghasilan99" autofocus>
                  @error('penghasilan99')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan99" class="form-control @error('penghasilan99') is-invalid @enderror" name="penghasilan99" value="{{$alumni->penghasilan99}}" required autocomplete="penghasilan99" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($alumni->penghasilan99 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($alumni->penghasilan99 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($alumni->penghasilan99 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($alumni->penghasilan99 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($alumni->penghasilan99 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($alumni->penghasilan99 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan99')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi99" type="text" class="form-control @error('prestasi99') is-invalid @enderror" name="prestasi99" value="{{$alumni->prestasi99}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi99" autofocus>
                  @error('prestasi99')
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
                  <input id="nohp99" type="text" class="form-control @error('nohp99') is-invalid @enderror" name="nohp99" value="{{$alumni->nohp99}}" placeholder="No HP" required autocomplete="nohp99" autofocus>
                  @error('nohp99')
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

            