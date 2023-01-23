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
          <a href="{{url('smktkj10')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data SMK TKJ KELAS 10 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smktkj10') }}/{{$smktkj10->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap41" type="text" class="form-control @error('namalengkap41') is-invalid @enderror" name="namalengkap41" value="{{$smktkj10->namalengkap41}}" placeholder="Nama Lengkap" required autocomplete="namalengkap41" autofocus>
                  @error('namalengkap41')
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
                  <select id="inputState" class="form-control" id="status41" class="form-control @error('status41') is-invalid @enderror" name="status41">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smktkj10->status41 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smktkj10->status41 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smktkj10->status41 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smktkj10->status41 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smktkj10->status41 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smktkj10->status41 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status41')
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
                  <input id="status41" type="text" class="form-control @error('status41') is-invalid @enderror" name="status41" value="{{$smktkj10->status41}}" placeholder="Status" >
                  @error('status41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar41">Foto (size max 1.90 mb)</label>
                  <input id="avatar41" type="file" class="form-control @error('avatar41') is-invalid @enderror" name="avatar41" value="{{$smktkj10->avatar41}}" placeholder="Avatar">
                  @error('avatar41')
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
                  <input id="nisn41" type="text" class="form-control @error('nisn41') is-invalid @enderror" name="nisn41" value="{{$smktkj10->nisn41}}" placeholder="NISN" required autocomplete="nisn41" autofocus>
                  @error('nisn41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik41" type="text" class="form-control @error('nik41') is-invalid @enderror" name="nik41" value="{{$smktkj10->nik41}}" placeholder="NIK" required autocomplete="nik41" autofocus>
                  @error('nik41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk41" type="text" class="form-control @error('nokk41') is-invalid @enderror" name="nokk41" value="{{$smktkj10->nokk41}}" placeholder="No KK" required autocomplete="nokk41" autofocus>
                  @error('nokk41')
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
                  <input id="tempatlahir41" type="text" class="form-control @error('tempatlahir41') is-invalid @enderror" name="tempatlahir41" value="{{$smktkj10->tempatlahir41}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir41" autofocus>
                  @error('tempatlahir41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt41" type="text" class="form-control @error('tbt41') is-invalid @enderror" name="tbt41" value="{{$smktkj10->tbt41}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt41" autofocus>
                  @error('tbt41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel41" type="text" class="form-control @error('jenkel41') is-invalid @enderror" name="jenkel41" value="{{$smktkj10->jenkel41}}" placeholder="Jenis Kelamin" required autocomplete="jenkel41" autofocus>
                  @error('jenkel41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel41" class="form-control @error('jenkel41') is-invalid @enderror" name="jenkel41" required autocomplete="jenkel41" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($smktkj10->jenkel41 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smktkj10->jenkel41 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel41')
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
                  <input id="desa41" type="text" class="form-control @error('desa41') is-invalid @enderror" name="desa41" value="{{$smktkj10->desa41}}" placeholder="Desa" required autocomplete="desa41" autofocus>
                  @error('desa41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec41" type="text" class="form-control @error('kec41') is-invalid @enderror" name="kec41" value="{{$smktkj10->kec41}}" placeholder="Kecamatan" required autocomplete="kec41" autofocus>
                  @error('kec41')
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
                  <input id="kab41" type="text" class="form-control @error('kab41') is-invalid @enderror" name="kab41" value="{{$smktkj10->kab41}}" placeholder="Kabupaten / Kota" required autocomplete="kab41" autofocus>
                  @error('kab41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov41" type="text" class="form-control @error('prov41') is-invalid @enderror" name="prov41" value="{{$smktkj10->prov41}}" placeholder="Provinsi" required autocomplete="prov41" autofocus>
                  @error('prov41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos41" type="text" class="form-control @error('kodepos41') is-invalid @enderror" name="kodepos41" value="{{$smktkj10->kodepos41}}" placeholder="Kode Pos" required autocomplete="kodepos41" autofocus>
                  @error('kodepos41')
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
                  <input id="cita41" type="text" class="form-control @error('cita41') is-invalid @enderror" name="cita41" value="{{$smktkj10->cita41}}" placeholder="Alamat Lengkap" required autocomplete="cita41" autofocus>
                  @error('cita41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara41" type="text" class="form-control @error('jumlahsaudara41') is-invalid @enderror" name="jumlahsaudara41" value="{{$smktkj10->jumlahsaudara41}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara41" autofocus>
                  @error('jumlahsaudara41')
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
                  <input id="asalsekolah41" type="text" class="form-control @error('asalsekolah41') is-invalid @enderror" name="asalsekolah41" value="{{$smktkj10->asalsekolah41}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah41" autofocus>
                  @error('asalsekolah41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah41" type="text" class="form-control @error('alamatasalsekolah41') is-invalid @enderror" name="alamatasalsekolah41" value="{{$smktkj10->alamatasalsekolah41}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah41" autofocus>
                  @error('alamatasalsekolah41')
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
                  <input id="namaayah41" type="text" class="form-control @error('namaayah41') is-invalid @enderror" name="namaayah41" value="{{$smktkj10->namaayah41}}" placeholder="Nama Ayah" required autocomplete="namaayah41" autofocus>
                  @error('namaayah41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah41" type="text" class="form-control @error('nikayah41') is-invalid @enderror" name="nikayah41" value="{{$smktkj10->nikayah41}}" placeholder="NIK Ayah" required autocomplete="nikayah41" autofocus>
                  @error('nikayah41')
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
                  <input id="tahunlahirayah41" type="text" class="form-control @error('tahunlahirayah41') is-invalid @enderror" name="tahunlahirayah41" value="{{$smktkj10->tahunlahirayah41}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah41" autofocus>
                  @error('tahunlahirayah41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah41" type="text" class="form-control @error('pendidikanayah41') is-invalid @enderror" name="pendidikanayah41" value="{{$smktkj10->pendidikanayah41}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah41" autofocus>
                  @error('pendidikanayah41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah41" class="form-control @error('pendidikanayah41') is-invalid @enderror" name="pendidikanayah41" value="{{$smktkj10->pendidikanayah41}}" required autocomplete="pendidikanayah41" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkj10->pendidikanayah41 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkj10->pendidikanayah41 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkj10->pendidikanayah41 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkj10->pendidikanayah41 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkj10->pendidikanayah41 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkj10->pendidikanayah41 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkj10->pendidikanayah41 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah41')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah41" type="text" class="form-control @error('pekerjaanayah41') is-invalid @enderror" name="pekerjaanayah41" value="{{$smktkj10->pekerjaanayah41}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah41" autofocus>
                  @error('pekerjaanayah41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah41" class="form-control @error('pekerjaanayah41') is-invalid @enderror" name="pekerjaanayah41" value="{{$smktkj10->pekerjaanayah41}}" required autocomplete="pekerjaanayah41" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkj10->pekerjaanayah41 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkj10->pekerjaanayah41 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkj10->pekerjaanayah41 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkj10->pekerjaanayah41 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkj10->pekerjaanayah41 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkj10->pekerjaanayah41 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkj10->pekerjaanayah41 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkj10->pekerjaanayah41 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkj10->pekerjaanayah41 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkj10->pekerjaanayah41 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkj10->pekerjaanayah41 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkj10->pekerjaanayah41 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah41')
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
                  <input id="namaibu41" type="text" class="form-control @error('namaibu41') is-invalid @enderror" name="namaibu41" value="{{$smktkj10->namaibu41}}" placeholder="Nama Ibu" required autocomplete="namaibu41" autofocus>
                  @error('namaibu41')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu41" type="text" class="form-control @error('nikibu41') is-invalid @enderror" name="nikibu41" value="{{$smktkj10->nikibu41}}" placeholder="NIK Ibu" required autocomplete="nikibu41" autofocus>
                  @error('nikibu41')
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
                  <input id="tahunlahiribu41" type="text" class="form-control @error('tahunlahiribu41') is-invalid @enderror" name="tahunlahiribu41" value="{{$smktkj10->tahunlahiribu41}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu41" autofocus>
                  @error('tahunlahiribu41')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu41" type="text" class="form-control @error('pendidikanibu41') is-invalid @enderror" name="pendidikanibu41" value="{{$smktkj10->pendidikanibu41}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu41" autofocus>
                  @error('pendidikanibu41')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu41" class="form-control @error('pendidikanibu41') is-invalid @enderror" name="pendidikanibu41" value="{{$smktkj10->pendidikanibu41}}" required autocomplete="pendidikanibu41" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkj10->pendidikanibu41 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkj10->pendidikanibu41 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkj10->pendidikanibu41 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkj10->pendidikanibu41 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkj10->pendidikanibu41 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkj10->pendidikanibu41 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkj10->pendidikanibu41 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu41')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu41" type="text" class="form-control @error('pekerjaanibu41') is-invalid @enderror" name="pekerjaanibu41" value="{{$smktkj10->pekerjaanibu41}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu41" autofocus>
                  @error('pekerjaanibu41')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu41" class="form-control @error('pekerjaanibu41') is-invalid @enderror" name="pekerjaanibu41" value="{{$smktkj10->pekerjaanibu41}}" required autocomplete="pekerjaanibu41" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkj10->pekerjaanibu41 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkj10->pekerjaanibu41 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkj10->pekerjaanibu41 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkj10->pekerjaanibu41 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkj10->pekerjaanibu41 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkj10->pekerjaanibu41 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkj10->pekerjaanibu41 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkj10->pekerjaanibu41 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkj10->pekerjaanibu41 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkj10->pekerjaanibu41 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkj10->pekerjaanibu41 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkj10->pekerjaanibu41 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu41')
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
                  <input id="penghasilan41" type="text" class="form-control @error('penghasilan41') is-invalid @enderror" name="penghasilan41" value="{{$smktkj10->penghasilan41}}" placeholder="Penghasilan" required autocomplete="penghasilan41" autofocus>
                  @error('penghasilan41')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan41" class="form-control @error('penghasilan41') is-invalid @enderror" name="penghasilan41" value="{{$smktkj10->penghasilan41}}" required autocomplete="penghasilan41" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smktkj10->penghasilan41 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smktkj10->penghasilan41 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smktkj10->penghasilan41 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smktkj10->penghasilan41 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smktkj10->penghasilan41 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smktkj10->penghasilan41 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan41')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi41" type="text" class="form-control @error('prestasi41') is-invalid @enderror" name="prestasi41" value="{{$smktkj10->prestasi41}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi41" autofocus>
                  @error('prestasi41')
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
                  <input id="nohp41" type="text" class="form-control @error('nohp41') is-invalid @enderror" name="nohp41" value="{{$smktkj10->nohp41}}" placeholder="No HP" required autocomplete="nohp41" autofocus>
                  @error('nohp41')
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

            