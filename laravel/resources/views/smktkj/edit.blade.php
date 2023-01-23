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
          <a href="{{url('smktkj')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data Santri Baru Jenjang SMK TKJ </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smktkj') }}/{{$smktkj->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Fasilitas                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Fasilitas</label>
                  <input id="fasilitas" type="text" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" value="{{$smktkj->fasilitas}}" placeholder="fasilitas" required autocomplete="fasilitas" autofocus>
                  @error('fasilitas')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
--> 

<!-- Fasilitas  -->
              <div class="form-group row"> 
                <div class="col-md-12">
                  <select id="inputState" class="form-control" id="fasilitas" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" required autocomplete="fasilitas" autofocus>
                    <option selected>-- Fasilitas --</option>
                    <option value="Reguler" @if($smktkj->fasilitas == 'Reguler') selected @endif> Reguler </option>
                    <option value="Non Reguler" @if($smktkj->fasilitas == 'Non Reguler') selected @endif> Non Reguler </option>
                  </select>
                  @error('fasilitas')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror                              
                </div>
              </div>

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap" type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" value="{{$smktkj->namalengkap}}" placeholder="Nama Lengkap" required autocomplete="namalengkap" autofocus>
                  @error('namalengkap')
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
                  <label> <b> Email (kosongi dulu) </b> </label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Email" >
                </div>
              </div>
<!-- __________________________________________________________________________________ -->

<!-- __________________________________________________________________________________ -->
<!-- Status 
              <div class="form-group row">
                <div class="col-md-12">
                  <select id="inputState" class="form-control" id="status4" class="form-control @error('status4') is-invalid @enderror" name="status4">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smktkj->status4 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smktkj->status4 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smktkj->status4 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smktkj->status4 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smktkj->status4 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smktkj->status4 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status4')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror                              
                </div>
              </div>
 -->

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar4">Foto (size max 1.90 mb)</label>
                  <input id="avatar4" type="file" class="form-control @error('avatar4') is-invalid @enderror" name="avatar4" value="{{$smktkj->avatar4}}" placeholder="Avatar">
                  @error('avatar4')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
<!-- __________________________________________________________________________________ -->

<!-- Tempat Lahir -->                        
              <div class="form-group row">
                <div class="col-md-4">
                  <label>Tempat Lahir</label>
                  <input id="tempatlahir4" type="text" class="form-control @error('tempatlahir4') is-invalid @enderror" name="tempatlahir4" value="{{$smktkj->tempatlahir4}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir4" autofocus>
                  @error('tempatlahir4')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt4" type="text" class="form-control @error('tbt4') is-invalid @enderror" name="tbt4" value="{{$smktkj->tbt4}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt4" autofocus>
                  @error('tbt4')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin 
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel" type="text" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" value="{{$smktkj->jenkel}}" placeholder="Jenis Kelamin" required autocomplete="jenkel" autofocus>
                  @error('jenkel')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
-->
<!-- Jenis Kelamin  -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <select id="inputState" class="form-control" id="jenkel" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" required autocomplete="jenkel" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($smktkj->jenkel == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smktkj->jenkel == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel')
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
                  <label>Alamat rt/rw</label>
                  <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{$smktkj->desa}}" placeholder="Desa" required autocomplete="desa" autofocus>
                  @error('desa')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec" type="text" class="form-control @error('kec') is-invalid @enderror" name="kec" value="{{$smktkj->kec}}" placeholder="Kecamatan" required autocomplete="kec" autofocus>
                  @error('kec')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!--  __________________________________________________________________________________ -->
<!-- Kabupaten / Kota -->                        
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Kabupaten</label>
                  <input id="kab" type="text" class="form-control @error('kab') is-invalid @enderror" name="kab" value="{{$smktkj->kab}}" placeholder="Kabupaten / Kota" required autocomplete="kab" autofocus>
                  @error('kab')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-6">
                  <label>Provinsi</label>
                  <input id="prov" type="text" class="form-control @error('prov') is-invalid @enderror" name="prov" value="{{$smktkj->prov}}" placeholder="Provinsi" required autocomplete="prov" autofocus>
                  @error('prov')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                          
              </div>
<!--  __________________________________________________________________________________ -->
<!-- Alamat Lengkap                         
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Alamat Lengkap</label>
                  <input id="cita4" type="text" class="form-control @error('cita4') is-invalid @enderror" name="cita4" value="{{$smktkj->cita4}}" placeholder="Alamat Lengkap" required autocomplete="cita4" autofocus>
                  @error('cita4')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
-->
<!-- Jumlah Saudara Kandung 
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara4" type="number" class="form-control @error('jumlahsaudara4') is-invalid @enderror" name="jumlahsaudara4" value="{{$smktkj->jumlahsaudara4}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara4" autofocus>
                  @error('jumlahsaudara4')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                            
              </div>
-->
<!--  __________________________________________________________________________________ -->
<!-- Asal Sekolah -->                        
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Asal Sekolah</label>
                  <input id="asalsekolah4" type="text" class="form-control @error('asalsekolah4') is-invalid @enderror" name="asalsekolah4" value="{{$smktkj->asalsekolah4}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah4" autofocus>
                  @error('asalsekolah4')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah4" type="text" class="form-control @error('alamatasalsekolah4') is-invalid @enderror" name="alamatasalsekolah4" value="{{$smktkj->alamatasalsekolah4}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah4" autofocus>
                  @error('alamatasalsekolah4')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                            
              </div>
<!--  __________________________________________________________________________________ -->
<!-- Nama Ayah -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label>Nama Ayah</label>
                  <input id="namaayah4" type="text" class="form-control @error('namaayah4') is-invalid @enderror" name="namaayah4" value="{{$smktkj->namaayah4}}" placeholder="Nama Ayah" required autocomplete="namaayah4" autofocus>
                  @error('namaayah4')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ayah 
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah4" type="text" class="form-control @error('nikayah4') is-invalid @enderror" name="nikayah4" value="{{$smktkj->nikayah4}}" placeholder="NIK Ayah" required autocomplete="nikayah4" autofocus>
                  @error('nikayah4')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                            
              </div>
-->
<!--  __________________________________________________________________________________ -->
<!-- Tahun Lahir Ayah                         
              <div class="form-group row">
                <div class="col-md-4">
                  <label>Tahun Lahir Ayah</label>
                  <input id="tahunlahirayah4" type="text" class="form-control @error('tahunlahirayah4') is-invalid @enderror" name="tahunlahirayah4" value="{{$smktkj->tahunlahirayah4}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah4" autofocus>
                  @error('tahunlahirayah4')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
-->
<!-- Pendidikan Ayah 
              <div class="form-group row">                      
                <div class="col-md-6">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah4" type="text" class="form-control @error('pendidikanayah4') is-invalid @enderror" name="pendidikanayah4" value="{{$smktkj->pendidikanayah4}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah4" autofocus>
                  @error('pendidikanayah4')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
-->  
<!-- Pendidikan Ayah -->
              <div class="form-group row"> 
                <div class="col-md-6">
                  <label>Pendidikan Ayah</label>
                  <select id="inputState" class="form-control" id="pendidikanayah4" class="form-control @error('pendidikanayah4') is-invalid @enderror" name="pendidikanayah4" value="{{$smktkj->pendidikanayah4}}" required autocomplete="pendidikanayah4" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkj->pendidikanayah4 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkj->pendidikanayah4 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkj->pendidikanayah4 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkj->pendidikanayah4 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkj->pendidikanayah4 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkj->pendidikanayah4 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkj->pendidikanayah4 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah4')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ayah                         
                <div class="col-md-6">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah4" type="text" class="form-control @error('pekerjaanayah4') is-invalid @enderror" name="pekerjaanayah4" value="{{$smktkj->pekerjaanayah4}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah4" autofocus>
                  @error('pekerjaanayah4')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
-->
<!-- Pekerjaan Ayah -->
                <div class="col-md-6">
                  <label>Pekerjaan Ayah</label>
                  <select id="inputState" class="form-control" id="pekerjaanayah4" class="form-control @error('pekerjaanayah4') is-invalid @enderror" name="pekerjaanayah4" value="{{$smktkj->pekerjaanayah4}}" required autocomplete="pekerjaanayah4" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkj->pekerjaanayah4 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkj->pekerjaanayah4 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkj->pekerjaanayah4 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkj->pekerjaanayah4 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkj->pekerjaanayah4 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkj->pekerjaanayah4 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkj->pekerjaanayah4 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkj->pekerjaanayah4 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkj->pekerjaanayah4 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkj->pekerjaanayah4 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkj->pekerjaanayah4 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkj->pekerjaanayah4 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah4')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                               
                </div>                           
              </div>

<!--  __________________________________________________________________________________ -->
<!-- Nama Ibu -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label>Nama Ibu</label>
                  <input id="namaibu4" type="text" class="form-control @error('namaibu4') is-invalid @enderror" name="namaibu4" value="{{$smktkj->namaibu4}}" placeholder="Nama Ibu" required autocomplete="namaibu4" autofocus>
                  @error('namaibu4')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ibu 
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu4" type="text" class="form-control @error('nikibu4') is-invalid @enderror" name="nikibu4" value="{{$smktkj->nikibu4}}" placeholder="NIK Ibu" required autocomplete="nikibu4" autofocus>
                  @error('nikibu4')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>                            
              </div>
-->
<!--  __________________________________________________________________________________ -->
<!-- Tahun Lahir Ibu                         
              <div class="form-group row">
                <div class="col-md-4">
                  <label>Tahun Lahir Ibu</label>
                  <input id="tahunlahiribu4" type="text" class="form-control @error('tahunlahiribu4') is-invalid @enderror" name="tahunlahiribu4" value="{{$smktkj->tahunlahiribu4}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu4" autofocus>
                  @error('tahunlahiribu4')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
-->
<!-- Pendidikan Ibu 
              <div class="form-group row">                      
                <div class="col-md-6">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu4" type="text" class="form-control @error('pendidikanibu4') is-invalid @enderror" name="pendidikanibu4" value="{{$smktkj->pendidikanibu4}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu4" autofocus>
                  @error('pendidikanibu4')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
 --> 
<!-- Pendidikan Ibu -->
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Pendidikan Ibu</label>
                  <select id="inputState" class="form-control" id="pendidikanibu4" class="form-control @error('pendidikanibu4') is-invalid @enderror" name="pendidikanibu4" value="{{$smktkj->pendidikanibu4}}" required autocomplete="pendidikanibu4" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkj->pendidikanibu4 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkj->pendidikanibu4 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkj->pendidikanibu4 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkj->pendidikanibu4 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkj->pendidikanibu4 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkj->pendidikanibu4 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkj->pendidikanibu4 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu4')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ibu                        
                <div class="col-md-6">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu4" type="text" class="form-control @error('pekerjaanibu4') is-invalid @enderror" name="pekerjaanibu4" value="{{$smktkj->pekerjaanibu4}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu4" autofocus>
                  @error('pekerjaanibu4')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
 -->
<!-- Pekerjaan Ibu -->
                <div class="col-md-6">
                  <label>Pekerjaan Ibu</label>
                  <select id="inputState" class="form-control" id="pekerjaanibu4" class="form-control @error('pekerjaanibu4') is-invalid @enderror" name="pekerjaanibu4" value="{{$smktkj->pekerjaanibu4}}" required autocomplete="pekerjaanibu4" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkj->pekerjaanibu4 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkj->pekerjaanibu4 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkj->pekerjaanibu4 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkj->pekerjaanibu4 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkj->pekerjaanibu4 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkj->pekerjaanibu4 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkj->pekerjaanibu4 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkj->pekerjaanibu4 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkj->pekerjaanibu4 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkj->pekerjaanibu4 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkj->pekerjaanibu4 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkj->pekerjaanibu4 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu4')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>                           
              </div>

<!--  __________________________________________________________________________________ -->
<!-- Penghasilan                        
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Penghasilan</label>
                  <input id="penghasilan4" type="text" class="form-control @error('penghasilan4') is-invalid @enderror" name="penghasilan4" value="{{$smktkj->penghasilan4}}" placeholder="Penghasilan" required autocomplete="penghasilan4" autofocus>
                  @error('penghasilan4')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
--> 
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan4" class="form-control @error('penghasilan4') is-invalid @enderror" name="penghasilan4" value="{{$smktkj->penghasilan4}}" required autocomplete="penghasilan4" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smktkj->penghasilan4 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smktkj->penghasilan4 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smktkj->penghasilan4 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smktkj->penghasilan4 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smktkj->penghasilan4 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smktkj->penghasilan4 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan4')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih 
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi4" type="text" class="form-control @error('prestasi4') is-invalid @enderror" name="prestasi4" value="{{$smktkj->prestasi4}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi4" autofocus>
                  @error('prestasi4')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>                                                    
              </div>
-->
<!--  __________________________________________________________________________________ -->
<!-- No HP -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label>No HP</label>
                  <input id="nohp4" type="text" class="form-control @error('nohp4') is-invalid @enderror" name="nohp4" value="{{$smktkj->nohp4}}" placeholder="No HP" required autocomplete="nohp4" autofocus>
                  @error('nohp4')
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

            