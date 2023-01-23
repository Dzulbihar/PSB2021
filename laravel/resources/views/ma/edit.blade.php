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
          <a href="{{url('ma')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data Santri Baru Jenjang MA </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('ma') }}/{{$ma->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Fasilitas                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Fasilitas</label>
                  <input id="fasilitas" type="text" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" value="{{$ma->fasilitas}}" placeholder="fasilitas" required autocomplete="fasilitas" autofocus>
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
                    <option value="Reguler" @if($ma->fasilitas == 'Reguler') selected @endif> Reguler </option>
                    <option value="Non Reguler" @if($ma->fasilitas == 'Non Reguler') selected @endif> Non Reguler </option>
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
                  <input id="namalengkap" type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" value="{{$ma->namalengkap}}" placeholder="Nama Lengkap" required autocomplete="namalengkap" autofocus>
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
                  <select id="inputState" class="form-control" id="status6" class="form-control @error('status6') is-invalid @enderror" name="status6">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($ma->status6 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($ma->status6 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($ma->status6 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($ma->status6 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($ma->status6 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($ma->status6 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status6')
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
                  <label for="avatar6">Foto (size max 1.90 mb)</label>
                  <input id="avatar6" type="file" class="form-control @error('avatar6') is-invalid @enderror" name="avatar6" value="{{$ma->avatar6}}" placeholder="Avatar">
                  @error('avatar6')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
<!--  __________________________________________________________________________________ -->
<!-- Tempat Lahir -->                        
              <div class="form-group row">
                <div class="col-md-4">
                  <label>Tempat Lahir</label>
                  <input id="tempatlahir6" type="text" class="form-control @error('tempatlahir6') is-invalid @enderror" name="tempatlahir6" value="{{$ma->tempatlahir6}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir6" autofocus>
                  @error('tempatlahir6')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt6" type="text" class="form-control @error('tbt6') is-invalid @enderror" name="tbt6" value="{{$ma->tbt6}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt6" autofocus>
                  @error('tbt6')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin 
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel" type="text" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" value="{{$ma->jenkel}}" placeholder="Jenis Kelamin" required autocomplete="jenkel" autofocus>
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
                    <option value="Laki-laki" @if($ma->jenkel == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($ma->jenkel == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror                              
                </div>
              </div>

<!--  __________________________________________________________________________________ -->
<!-- Desa -->                        
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Alamat rt/rw</label>
                  <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{$ma->desa}}" placeholder="Desa" required autocomplete="desa" autofocus>
                  @error('desa')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec" type="text" class="form-control @error('kec') is-invalid @enderror" name="kec" value="{{$ma->kec}}" placeholder="Kecamatan" required autocomplete="kec" autofocus>
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
                  <input id="kab" type="text" class="form-control @error('kab') is-invalid @enderror" name="kab" value="{{$ma->kab}}" placeholder="Kabupaten / Kota" required autocomplete="kab" autofocus>
                  @error('kab')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-6">
                  <label>Provinsi</label>
                  <input id="prov" type="text" class="form-control @error('prov') is-invalid @enderror" name="prov" value="{{$ma->prov}}" placeholder="Provinsi" required autocomplete="prov" autofocus>
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
                  <input id="cita6" type="text" class="form-control @error('cita6') is-invalid @enderror" name="cita6" value="{{$ma->cita6}}" placeholder="Alamat Lengkap" required autocomplete="cita6" autofocus>
                  @error('cita6')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
--> 
<!-- Jumlah Saudara Kandung 
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara6" type="number" class="form-control @error('jumlahsaudara6') is-invalid @enderror" name="jumlahsaudara6" value="{{$ma->jumlahsaudara6}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara6" autofocus>
                  @error('jumlahsaudara6')
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
                  <input id="asalsekolah6" type="text" class="form-control @error('asalsekolah6') is-invalid @enderror" name="asalsekolah6" value="{{$ma->asalsekolah6}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah6" autofocus>
                  @error('asalsekolah6')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah6" type="text" class="form-control @error('alamatasalsekolah6') is-invalid @enderror" name="alamatasalsekolah6" value="{{$ma->alamatasalsekolah6}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah6" autofocus>
                  @error('alamatasalsekolah6')
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
                  <input id="namaayah6" type="text" class="form-control @error('namaayah6') is-invalid @enderror" name="namaayah6" value="{{$ma->namaayah6}}" placeholder="Nama Ayah" required autocomplete="namaayah6" autofocus>
                  @error('namaayah6')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ayah 
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah6" type="text" class="form-control @error('nikayah6') is-invalid @enderror" name="nikayah6" value="{{$ma->nikayah6}}" placeholder="NIK Ayah" required autocomplete="nikayah6" autofocus>
                  @error('nikayah6')
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
                  <input id="tahunlahirayah6" type="text" class="form-control @error('tahunlahirayah6') is-invalid @enderror" name="tahunlahirayah6" value="{{$ma->tahunlahirayah6}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah6" autofocus>
                  @error('tahunlahirayah6')
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
                  <input id="pendidikanayah6" type="text" class="form-control @error('pendidikanayah6') is-invalid @enderror" name="pendidikanayah6" value="{{$ma->pendidikanayah6}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah6" autofocus>
                  @error('pendidikanayah6')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
 -->
<!-- Pendidikan Ayah -->
                <div class="col-md-6">
                  <label>Pendidikan Ayah</label>
                  <select id="inputState" class="form-control" id="pendidikanayah6" class="form-control @error('pendidikanayah6') is-invalid @enderror" name="pendidikanayah6" value="{{$ma->pendidikanayah6}}" required autocomplete="pendidikanayah6" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($ma->pendidikanayah6 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($ma->pendidikanayah6 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($ma->pendidikanayah6 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($ma->pendidikanayah6 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($ma->pendidikanayah6 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($ma->pendidikanayah6 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($ma->pendidikanayah6 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah6')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ayah                         
                <div class="col-md-6">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah6" type="text" class="form-control @error('pekerjaanayah6') is-invalid @enderror" name="pekerjaanayah6" value="{{$ma->pekerjaanayah6}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah6" autofocus>
                  @error('pekerjaanayah6')
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
                  <select id="inputState" class="form-control" id="pekerjaanayah6" class="form-control @error('pekerjaanayah6') is-invalid @enderror" name="pekerjaanayah6" value="{{$ma->pekerjaanayah6}}" required autocomplete="pekerjaanayah6" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($ma->pekerjaanayah6 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($ma->pekerjaanayah6 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($ma->pekerjaanayah6 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($ma->pekerjaanayah6 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($ma->pekerjaanayah6 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($ma->pekerjaanayah6 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($ma->pekerjaanayah6 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($ma->pekerjaanayah6 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($ma->pekerjaanayah6 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($ma->pekerjaanayah6 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($ma->pekerjaanayah6 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($ma->pekerjaanayah6 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah6')
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
                  <input id="namaibu6" type="text" class="form-control @error('namaibu6') is-invalid @enderror" name="namaibu6" value="{{$ma->namaibu6}}" placeholder="Nama Ibu" required autocomplete="namaibu6" autofocus>
                  @error('namaibu6')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ibu 
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu6" type="text" class="form-control @error('nikibu6') is-invalid @enderror" name="nikibu6" value="{{$ma->nikibu6}}" placeholder="NIK Ibu" required autocomplete="nikibu6" autofocus>
                  @error('nikibu6')
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
                  <input id="tahunlahiribu6" type="text" class="form-control @error('tahunlahiribu6') is-invalid @enderror" name="tahunlahiribu6" value="{{$ma->tahunlahiribu6}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu6" autofocus>
                  @error('tahunlahiribu6')
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
                  <input id="pendidikanibu6" type="text" class="form-control @error('pendidikanibu6') is-invalid @enderror" name="pendidikanibu6" value="{{$ma->pendidikanibu6}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu6" autofocus>
                  @error('pendidikanibu6')
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
                  <select id="inputState" class="form-control" id="pendidikanibu6" class="form-control @error('pendidikanibu6') is-invalid @enderror" name="pendidikanibu6" value="{{$ma->pendidikanibu6}}" required autocomplete="pendidikanibu6" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($ma->pendidikanibu6 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($ma->pendidikanibu6 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($ma->pendidikanibu6 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($ma->pendidikanibu6 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($ma->pendidikanibu6 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($ma->pendidikanibu6 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($ma->pendidikanibu6 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu6')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ibu                        
                <div class="col-md-6">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu6" type="text" class="form-control @error('pekerjaanibu6') is-invalid @enderror" name="pekerjaanibu6" value="{{$ma->pekerjaanibu6}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu6" autofocus>
                  @error('pekerjaanibu6')
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
                  <select id="inputState" class="form-control" id="pekerjaanibu6" class="form-control @error('pekerjaanibu6') is-invalid @enderror" name="pekerjaanibu6" value="{{$ma->pekerjaanibu6}}" required autocomplete="pekerjaanibu6" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($ma->pekerjaanibu6 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($ma->pekerjaanibu6 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($ma->pekerjaanibu6 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($ma->pekerjaanibu6 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($ma->pekerjaanibu6 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($ma->pekerjaanibu6 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($ma->pekerjaanibu6 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($ma->pekerjaanibu6 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($ma->pekerjaanibu6 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($ma->pekerjaanibu6 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($ma->pekerjaanibu6 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($ma->pekerjaanibu6 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu6')
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
                  <input id="penghasilan6" type="text" class="form-control @error('penghasilan6') is-invalid @enderror" name="penghasilan6" value="{{$ma->penghasilan6}}" placeholder="Penghasilan" required autocomplete="penghasilan6" autofocus>
                  @error('penghasilan6')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
-->
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan6" class="form-control @error('penghasilan6') is-invalid @enderror" name="penghasilan6" value="{{$ma->penghasilan6}}" required autocomplete="penghasilan6" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($ma->penghasilan6 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($ma->penghasilan6 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($ma->penghasilan6 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($ma->penghasilan6 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($ma->penghasilan6 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($ma->penghasilan6 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan6')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi6" type="text" class="form-control @error('prestasi6') is-invalid @enderror" name="prestasi6" value="{{$ma->prestasi6}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi6" autofocus>
                  @error('prestasi6')
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
                  <input id="nohp6" type="text" class="form-control @error('nohp6') is-invalid @enderror" name="nohp6" value="{{$ma->nohp6}}" placeholder="No HP" required autocomplete="nohp6" autofocus>
                  @error('nohp6')
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

            