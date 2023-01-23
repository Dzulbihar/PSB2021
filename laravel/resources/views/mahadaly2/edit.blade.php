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
          <a href="{{url('mahadaly2')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data Mahad Aly Semester 3-4 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('mahadaly2') }}/{{$mahadaly2->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap72" type="text" class="form-control @error('namalengkap72') is-invalid @enderror" name="namalengkap72" value="{{$mahadaly2->namalengkap72}}" placeholder="Nama Lengkap" required autocomplete="namalengkap72" autofocus>
                  @error('namalengkap72')
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
<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar72">Foto (size max 1.90 mb)</label>
                  <input id="avatar72" type="file" class="form-control @error('avatar72') is-invalid @enderror" name="avatar72" value="{{$mahadaly2->avatar72}}" placeholder="Avatar">
                  @error('avatar72')
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
                  <input id="nisn72" type="text" class="form-control @error('nisn72') is-invalid @enderror" name="nisn72" value="{{$mahadaly2->nisn72}}" placeholder="NISN" required autocomplete="nisn72" autofocus>
                  @error('nisn72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik72" type="text" class="form-control @error('nik72') is-invalid @enderror" name="nik72" value="{{$mahadaly2->nik72}}" placeholder="NIK" required autocomplete="nik72" autofocus>
                  @error('nik72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk72" type="text" class="form-control @error('nokk72') is-invalid @enderror" name="nokk72" value="{{$mahadaly2->nokk72}}" placeholder="No KK" required autocomplete="nokk72" autofocus>
                  @error('nokk72')
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
                  <input id="tempatlahir72" type="text" class="form-control @error('tempatlahir72') is-invalid @enderror" name="tempatlahir72" value="{{$mahadaly2->tempatlahir72}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir72" autofocus>
                  @error('tempatlahir72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt72" type="text" class="form-control @error('tbt72') is-invalid @enderror" name="tbt72" value="{{$mahadaly2->tbt72}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt72" autofocus>
                  @error('tbt72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel72" type="text" class="form-control @error('jenkel72') is-invalid @enderror" name="jenkel72" value="{{$mahadaly2->jenkel72}}" placeholder="Jenis Kelamin" required autocomplete="jenkel72" autofocus>
                  @error('jenkel72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel72" class="form-control @error('jenkel72') is-invalid @enderror" name="jenkel72" required autocomplete="jenkel72" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($mahadaly2->jenkel72 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($mahadaly2->jenkel72 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel72')
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
                  <input id="desa72" type="text" class="form-control @error('desa72') is-invalid @enderror" name="desa72" value="{{$mahadaly2->desa72}}" placeholder="Desa" required autocomplete="desa72" autofocus>
                  @error('desa72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec72" type="text" class="form-control @error('kec72') is-invalid @enderror" name="kec72" value="{{$mahadaly2->kec72}}" placeholder="Kecamatan" required autocomplete="kec72" autofocus>
                  @error('kec72')
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
                  <input id="kab72" type="text" class="form-control @error('kab72') is-invalid @enderror" name="kab72" value="{{$mahadaly2->kab72}}" placeholder="Kabupaten / Kota" required autocomplete="kab72" autofocus>
                  @error('kab72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov72" type="text" class="form-control @error('prov72') is-invalid @enderror" name="prov72" value="{{$mahadaly2->prov72}}" placeholder="Provinsi" required autocomplete="prov72" autofocus>
                  @error('prov72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos72" type="text" class="form-control @error('kodepos72') is-invalid @enderror" name="kodepos72" value="{{$mahadaly2->kodepos72}}" placeholder="Kode Pos" required autocomplete="kodepos72" autofocus>
                  @error('kodepos72')
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
                  <input id="cita72" type="text" class="form-control @error('cita72') is-invalid @enderror" name="cita72" value="{{$mahadaly2->cita72}}" placeholder="Alamat Lengkap" required autocomplete="cita72" autofocus>
                  @error('cita72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara72" type="text" class="form-control @error('jumlahsaudara72') is-invalid @enderror" name="jumlahsaudara72" value="{{$mahadaly2->jumlahsaudara72}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara72" autofocus>
                  @error('jumlahsaudara72')
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
                  <input id="asalsekolah72" type="text" class="form-control @error('asalsekolah72') is-invalid @enderror" name="asalsekolah72" value="{{$mahadaly2->asalsekolah72}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah72" autofocus>
                  @error('asalsekolah72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah72" type="text" class="form-control @error('alamatasalsekolah72') is-invalid @enderror" name="alamatasalsekolah72" value="{{$mahadaly2->alamatasalsekolah72}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah72" autofocus>
                  @error('alamatasalsekolah72')
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
                  <input id="namaayah72" type="text" class="form-control @error('namaayah72') is-invalid @enderror" name="namaayah72" value="{{$mahadaly2->namaayah72}}" placeholder="Nama Ayah" required autocomplete="namaayah72" autofocus>
                  @error('namaayah72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah72" type="text" class="form-control @error('nikayah72') is-invalid @enderror" name="nikayah72" value="{{$mahadaly2->nikayah72}}" placeholder="NIK Ayah" required autocomplete="nikayah72" autofocus>
                  @error('nikayah72')
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
                  <input id="tahunlahirayah72" type="text" class="form-control @error('tahunlahirayah72') is-invalid @enderror" name="tahunlahirayah72" value="{{$mahadaly2->tahunlahirayah72}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah72" autofocus>
                  @error('tahunlahirayah72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah72" type="text" class="form-control @error('pendidikanayah72') is-invalid @enderror" name="pendidikanayah72" value="{{$mahadaly2->pendidikanayah72}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah72" autofocus>
                  @error('pendidikanayah72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah72" class="form-control @error('pendidikanayah72') is-invalid @enderror" name="pendidikanayah72" value="{{$mahadaly2->pendidikanayah72}}" required autocomplete="pendidikanayah72" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mahadaly2->pendidikanayah72 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mahadaly2->pendidikanayah72 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mahadaly2->pendidikanayah72 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mahadaly2->pendidikanayah72 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mahadaly2->pendidikanayah72 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mahadaly2->pendidikanayah72 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mahadaly2->pendidikanayah72 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah72')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah72" type="text" class="form-control @error('pekerjaanayah72') is-invalid @enderror" name="pekerjaanayah72" value="{{$mahadaly2->pekerjaanayah72}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah72" autofocus>
                  @error('pekerjaanayah72')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah72" class="form-control @error('pekerjaanayah72') is-invalid @enderror" name="pekerjaanayah72" value="{{$mahadaly2->pekerjaanayah72}}" required autocomplete="pekerjaanayah72" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mahadaly2->pekerjaanayah72 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mahadaly2->pekerjaanayah72 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mahadaly2->pekerjaanayah72 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mahadaly2->pekerjaanayah72 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mahadaly2->pekerjaanayah72 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mahadaly2->pekerjaanayah72 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mahadaly2->pekerjaanayah72 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mahadaly2->pekerjaanayah72 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mahadaly2->pekerjaanayah72 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mahadaly2->pekerjaanayah72 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mahadaly2->pekerjaanayah72 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mahadaly2->pekerjaanayah72 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah72')
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
                  <input id="namaibu72" type="text" class="form-control @error('namaibu72') is-invalid @enderror" name="namaibu72" value="{{$mahadaly2->namaibu72}}" placeholder="Nama Ibu" required autocomplete="namaibu72" autofocus>
                  @error('namaibu72')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu72" type="text" class="form-control @error('nikibu72') is-invalid @enderror" name="nikibu72" value="{{$mahadaly2->nikibu72}}" placeholder="NIK Ibu" required autocomplete="nikibu72" autofocus>
                  @error('nikibu72')
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
                  <input id="tahunlahiribu72" type="text" class="form-control @error('tahunlahiribu72') is-invalid @enderror" name="tahunlahiribu72" value="{{$mahadaly2->tahunlahiribu72}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu72" autofocus>
                  @error('tahunlahiribu72')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu72" type="text" class="form-control @error('pendidikanibu72') is-invalid @enderror" name="pendidikanibu72" value="{{$mahadaly2->pendidikanibu72}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu72" autofocus>
                  @error('pendidikanibu72')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu72" class="form-control @error('pendidikanibu72') is-invalid @enderror" name="pendidikanibu72" value="{{$mahadaly2->pendidikanibu72}}" required autocomplete="pendidikanibu72" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mahadaly2->pendidikanibu72 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mahadaly2->pendidikanibu72 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mahadaly2->pendidikanibu72 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mahadaly2->pendidikanibu72 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mahadaly2->pendidikanibu72 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mahadaly2->pendidikanibu72 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mahadaly2->pendidikanibu72 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu72')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu72" type="text" class="form-control @error('pekerjaanibu72') is-invalid @enderror" name="pekerjaanibu72" value="{{$mahadaly2->pekerjaanibu72}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu72" autofocus>
                  @error('pekerjaanibu72')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu72" class="form-control @error('pekerjaanibu72') is-invalid @enderror" name="pekerjaanibu72" value="{{$mahadaly2->pekerjaanibu72}}" required autocomplete="pekerjaanibu72" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mahadaly2->pekerjaanibu72 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mahadaly2->pekerjaanibu72 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mahadaly2->pekerjaanibu72 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mahadaly2->pekerjaanibu72 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mahadaly2->pekerjaanibu72 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mahadaly2->pekerjaanibu72 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mahadaly2->pekerjaanibu72 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mahadaly2->pekerjaanibu72 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mahadaly2->pekerjaanibu72 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mahadaly2->pekerjaanibu72 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mahadaly2->pekerjaanibu72 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mahadaly2->pekerjaanibu72 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu72')
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
                  <input id="penghasilan72" type="text" class="form-control @error('penghasilan72') is-invalid @enderror" name="penghasilan72" value="{{$mahadaly2->penghasilan72}}" placeholder="Penghasilan" required autocomplete="penghasilan72" autofocus>
                  @error('penghasilan72')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan72" class="form-control @error('penghasilan72') is-invalid @enderror" name="penghasilan72" value="{{$mahadaly2->penghasilan72}}" required autocomplete="penghasilan72" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($mahadaly2->penghasilan72 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($mahadaly2->penghasilan72 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($mahadaly2->penghasilan72 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($mahadaly2->penghasilan72 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($mahadaly2->penghasilan72 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($mahadaly2->penghasilan72 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan72')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi72" type="text" class="form-control @error('prestasi72') is-invalid @enderror" name="prestasi72" value="{{$mahadaly2->prestasi72}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi72" autofocus>
                  @error('prestasi72')
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
                  <input id="nohp72" type="text" class="form-control @error('nohp72') is-invalid @enderror" name="nohp72" value="{{$mahadaly2->nohp72}}" placeholder="No HP" required autocomplete="nohp72" autofocus>
                  @error('nohp72')
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

            