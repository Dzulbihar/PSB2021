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
          <a href="{{url('santrikeluar')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b> Edit Data Santri Baru Jenjang SMA </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('santrikeluar') }}/{{$santrikeluar->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Fasilitas                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Fasilitas</label>
                  <input id="fasilitas" type="text" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" value="{{$santrikeluar->fasilitas}}" placeholder="fasilitas" required autocomplete="fasilitas" autofocus>
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
                    <option value="Reguler" @if($santrikeluar->fasilitas == 'Reguler') selected @endif> Reguler </option>
                    <option value="Non Reguler" @if($santrikeluar->fasilitas == 'Non Reguler') selected @endif> Non Reguler </option>
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
                  <input id="namalengkap" type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" value="{{$santrikeluar->namalengkap}}" placeholder="Nama Lengkap" required autocomplete="namalengkap" autofocus>
                  @error('namalengkap')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!--  __________________________________________________________________________________ -->
<!-- __________________________________________________________________________________ -->
              <!-- Email -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label> <b> Email (kosongi dulu) </b> </label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Email" >
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
<!-- Status 
              <div class="form-group row">
                <div class="col-md-12">
                  <select id="inputState" class="form-control" id="status1" class="form-control @error('status1') is-invalid @enderror" name="status1">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($santrikeluar->status00 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($santrikeluar->status00 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($santrikeluar->status00 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($santrikeluar->status00 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($santrikeluar->status00 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($santrikeluar->status00 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status1')
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
                  <label for="avatar1">Foto (size max 1.90 mb)</label>
                  <input id="avatar1" type="file" class="form-control @error('avatar1') is-invalid @enderror" name="avatar1" value="{{$santrikeluar->avatar00}}" placeholder="Avatar">
                  @error('avatar1')
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
                  <input id="tempatlahir1" type="text" class="form-control @error('tempatlahir1') is-invalid @enderror" name="tempatlahir1" value="{{$santrikeluar->tempatlahir00}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir1" autofocus>
                  @error('tempatlahir1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt1" type="text" class="form-control @error('tbt1') is-invalid @enderror" name="tbt1" value="{{$santrikeluar->tbt00}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt1" autofocus>
                  @error('tbt1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin 
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel" type="text" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" value="{{$santrikeluar->jenkel}}" placeholder="Jenis Kelamin" required autocomplete="jenkel" autofocus>
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
                    <option value="Laki-laki" @if($santrikeluar->jenkel == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($santrikeluar->jenkel == 'Perempuan') selected @endif> Perempuan </option>
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
                  <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{$santrikeluar->desa}}" placeholder="Desa" required autocomplete="desa" autofocus>
                  @error('desa')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec" type="text" class="form-control @error('kec') is-invalid @enderror" name="kec" value="{{$santrikeluar->kec}}" placeholder="Kecamatan" required autocomplete="kec" autofocus>
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
                  <input id="kab" type="text" class="form-control @error('kab') is-invalid @enderror" name="kab" value="{{$santrikeluar->kab}}" placeholder="Kabupaten / Kota" required autocomplete="kab" autofocus>
                  @error('kab')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-6">
                  <label>Provinsi</label>
                  <input id="prov" type="text" class="form-control @error('prov') is-invalid @enderror" name="prov" value="{{$santrikeluar->prov}}" placeholder="Provinsi" required autocomplete="prov" autofocus>
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
                  <input id="cita1" type="text" class="form-control @error('cita1') is-invalid @enderror" name="cita1" value="{{$santrikeluar->cita00}}" placeholder="Alamat Lengkap" required autocomplete="cita1" autofocus>
                  @error('cita1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
-->
<!-- Jumlah Saudara Kandung 
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara1" type="number" class="form-control @error('jumlahsaudara1') is-invalid @enderror" name="jumlahsaudara1" value="{{$santrikeluar->jumlahsaudara00}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara1" autofocus>
                  @error('jumlahsaudara1')
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
                  <input id="asalsekolah1" type="text" class="form-control @error('asalsekolah1') is-invalid @enderror" name="asalsekolah1" value="{{$santrikeluar->asalsekolah00}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah1" autofocus>
                  @error('asalsekolah1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah1" type="text" class="form-control @error('alamatasalsekolah1') is-invalid @enderror" name="alamatasalsekolah1" value="{{$santrikeluar->alamatasalsekolah00}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah1" autofocus>
                  @error('alamatasalsekolah1')
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
                  <input id="namaayah1" type="text" class="form-control @error('namaayah1') is-invalid @enderror" name="namaayah1" value="{{$santrikeluar->namaayah00}}" placeholder="Nama Ayah" required autocomplete="namaayah1" autofocus>
                  @error('namaayah1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ayah 
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah1" type="text" class="form-control @error('nikayah1') is-invalid @enderror" name="nikayah1" value="{{$santrikeluar->nikayah00}}" placeholder="NIK Ayah" required autocomplete="nikayah1" autofocus>
                  @error('nikayah1')
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
                  <input id="tahunlahirayah1" type="text" class="form-control @error('tahunlahirayah1') is-invalid @enderror" name="tahunlahirayah1" value="{{$santrikeluar->tahunlahirayah00}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah1" autofocus>
                  @error('tahunlahirayah1')
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
                  <input id="pendidikanayah1" type="text" class="form-control @error('pendidikanayah1') is-invalid @enderror" name="pendidikanayah1" value="{{$santrikeluar->pendidikanayah00}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah1" autofocus>
                  @error('pendidikanayah1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
 -->
<!-- Pendidikan Ayah  -->
              <div class="form-group row"> 
                <div class="col-md-6">
                  <label>Pendidikan Ayah</label>
                  <select id="inputState" class="form-control" id="pendidikanayah1" class="form-control @error('pendidikanayah1') is-invalid @enderror" name="pendidikanayah1" value="{{$santrikeluar->pendidikanayah00}}" required autocomplete="pendidikanayah1" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($santrikeluar->pendidikanayah00 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($santrikeluar->pendidikanayah00 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($santrikeluar->pendidikanayah00 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($santrikeluar->pendidikanayah00 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($santrikeluar->pendidikanayah00 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($santrikeluar->pendidikanayah00 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($santrikeluar->pendidikanayah00 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah1')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ayah                         
                <div class="col-md-6">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah1" type="text" class="form-control @error('pekerjaanayah1') is-invalid @enderror" name="pekerjaanayah1" value="{{$santrikeluar->pekerjaanayah00}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah1" autofocus>
                  @error('pekerjaanayah1')
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
                  <select id="inputState" class="form-control" id="pekerjaanayah1" class="form-control @error('pekerjaanayah1') is-invalid @enderror" name="pekerjaanayah1" value="{{$santrikeluar->pekerjaanayah00}}" required autocomplete="pekerjaanayah1" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($santrikeluar->pekerjaanayah00 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($santrikeluar->pekerjaanayah00 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($santrikeluar->pekerjaanayah00 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($santrikeluar->pekerjaanayah00 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($santrikeluar->pekerjaanayah00 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($santrikeluar->pekerjaanayah00 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($santrikeluar->pekerjaanayah00 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($santrikeluar->pekerjaanayah00 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($santrikeluar->pekerjaanayah00 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($santrikeluar->pekerjaanayah00 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($santrikeluar->pekerjaanayah00 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($santrikeluar->pekerjaanayah00 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah1')
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
                  <input id="namaibu1" type="text" class="form-control @error('namaibu1') is-invalid @enderror" name="namaibu1" value="{{$santrikeluar->namaibu00}}" placeholder="Nama Ibu" required autocomplete="namaibu1" autofocus>
                  @error('namaibu1')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ibu 
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu1" type="text" class="form-control @error('nikibu1') is-invalid @enderror" name="nikibu1" value="{{$santrikeluar->nikibu00}}" placeholder="NIK Ibu" required autocomplete="nikibu1" autofocus>
                  @error('nikibu1')
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
                  <input id="tahunlahiribu1" type="text" class="form-control @error('tahunlahiribu1') is-invalid @enderror" name="tahunlahiribu1" value="{{$santrikeluar->tahunlahiribu00}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu1" autofocus>
                  @error('tahunlahiribu1')
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
                  <input id="pendidikanibu1" type="text" class="form-control @error('pendidikanibu1') is-invalid @enderror" name="pendidikanibu1" value="{{$santrikeluar->pendidikanibu00}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu1" autofocus>
                  @error('pendidikanibu1')
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
                  <select id="inputState" class="form-control" id="pendidikanibu1" class="form-control @error('pendidikanibu1') is-invalid @enderror" name="pendidikanibu1" value="{{$santrikeluar->pendidikanibu00}}" required autocomplete="pendidikanibu1" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($santrikeluar->pendidikanibu00 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($santrikeluar->pendidikanibu00 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($santrikeluar->pendidikanibu00 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($santrikeluar->pendidikanibu00 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($santrikeluar->pendidikanibu00 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($santrikeluar->pendidikanibu00 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($santrikeluar->pendidikanibu00 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu1')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ibu                        
                <div class="col-md-6">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu1" type="text" class="form-control @error('pekerjaanibu1') is-invalid @enderror" name="pekerjaanibu1" value="{{$santrikeluar->pekerjaanibu00}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu1" autofocus>
                  @error('pekerjaanibu1')
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
                  <select id="inputState" class="form-control" id="pekerjaanibu1" class="form-control @error('pekerjaanibu1') is-invalid @enderror" name="pekerjaanibu1" value="{{$santrikeluar->pekerjaanibu00}}" required autocomplete="pekerjaanibu1" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($santrikeluar->pekerjaanibu00 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($santrikeluar->pekerjaanibu00 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($santrikeluar->pekerjaanibu00 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($santrikeluar->pekerjaanibu00 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($santrikeluar->pekerjaanibu00 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($santrikeluar->pekerjaanibu00 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($santrikeluar->pekerjaanibu00 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($santrikeluar->pekerjaanibu00 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($santrikeluar->pekerjaanibu00 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($santrikeluar->pekerjaanibu00 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($santrikeluar->pekerjaanibu00 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($santrikeluar->pekerjaanibu00 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu1')
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
                  <input id="penghasilan1" type="text" class="form-control @error('penghasilan1') is-invalid @enderror" name="penghasilan1" value="{{$santrikeluar->penghasilan00}}" placeholder="Penghasilan" required autocomplete="penghasilan1" autofocus>
                  @error('penghasilan1')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
--> 
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan1" class="form-control @error('penghasilan1') is-invalid @enderror" name="penghasilan1" value="{{$santrikeluar->penghasilan00}}" required autocomplete="penghasilan1" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($santrikeluar->penghasilan00 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($santrikeluar->penghasilan00 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($santrikeluar->penghasilan00 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($santrikeluar->penghasilan00 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($santrikeluar->penghasilan00 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($santrikeluar->penghasilan00 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan1')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
<!--               <div class="form-group row">
                <div class="col-md-12">
                  <label>Kategori Siswa</label>
                  <select id="inputState" class="form-control" id="prestasi1" class="form-control" name="prestasi1" value="{{$santrikeluar->prestasi00}}" required autocomplete="prestasi1" autofocus>
                    <option selected>-- Kategori Siswa --</option>
                    <option value="Prestasi" @if($santrikeluar->prestasi00 == 'Prestasi') selected @endif> Prestasi </option>
                    <option value="Biasa" @if($santrikeluar->prestasi00 == 'Biasa') selected @endif> Biasa </option>
                    <option value="Istimewah" @if($santrikeluar->prestasi00 == 'Istimewah') selected @endif> Istimewah </option>
                  </select>
                </div>                           
              </div> -->
<!--  __________________________________________________________________________________ -->
<!-- No HP -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label>No HP</label>
                  <input id="nohp1" type="text" class="form-control @error('nohp1') is-invalid @enderror" name="nohp1" value="{{$santrikeluar->nohp00}}" placeholder="No HP" required autocomplete="nohp1" autofocus>
                  @error('nohp1')
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

            