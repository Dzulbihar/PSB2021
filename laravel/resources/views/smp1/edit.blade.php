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
          <a href="{{url('smp1')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b> Edit Data Santri Baru Jenjang SMP 1 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smp1') }}/{{$smp1->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Fasilitas                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Fasilitas</label>
                  <input id="fasilitas" type="text" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" value="{{$smp1->fasilitas}}" placeholder="fasilitas" required autocomplete="fasilitas" autofocus>
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
                    <option value="Reguler" @if($smp1->fasilitas == 'Reguler') selected @endif> Reguler </option>
                    <option value="Non Reguler" @if($smp1->fasilitas == 'Non Reguler') selected @endif> Non Reguler </option>
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
                  <input id="namalengkap" type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" value="{{$smp1->namalengkap}}" placeholder="Nama Lengkap" required autocomplete="namalengkap" autofocus>
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
                    <option value="KELAS A" @if($smp1->status1 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smp1->status1 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smp1->status1 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smp1->status1 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smp1->status1 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smp1->status1 == 'KELAS F') selected @endif> KELAS F </option>
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
                  <input id="avatar1" type="file" class="form-control @error('avatar1') is-invalid @enderror" name="avatar1" value="{{$smp1->avatar1}}" placeholder="Avatar">
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
                  <input id="tempatlahir1" type="text" class="form-control @error('tempatlahir1') is-invalid @enderror" name="tempatlahir1" value="{{$smp1->tempatlahir1}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir1" autofocus>
                  @error('tempatlahir1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt1" type="text" class="form-control @error('tbt1') is-invalid @enderror" name="tbt1" value="{{$smp1->tbt1}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt1" autofocus>
                  @error('tbt1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin 
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel" type="text" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" value="{{$smp1->jenkel}}" placeholder="Jenis Kelamin" required autocomplete="jenkel" autofocus>
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
                    <option value="Laki-laki" @if($smp1->jenkel == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smp1->jenkel == 'Perempuan') selected @endif> Perempuan </option>
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
                  <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{$smp1->desa}}" placeholder="Desa" required autocomplete="desa" autofocus>
                  @error('desa')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec" type="text" class="form-control @error('kec') is-invalid @enderror" name="kec" value="{{$smp1->kec}}" placeholder="Kecamatan" required autocomplete="kec" autofocus>
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
                  <input id="kab" type="text" class="form-control @error('kab') is-invalid @enderror" name="kab" value="{{$smp1->kab}}" placeholder="Kabupaten / Kota" required autocomplete="kab" autofocus>
                  @error('kab')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-6">
                  <label>Provinsi</label>
                  <input id="prov" type="text" class="form-control @error('prov') is-invalid @enderror" name="prov" value="{{$smp1->prov}}" placeholder="Provinsi" required autocomplete="prov" autofocus>
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
                  <input id="cita1" type="text" class="form-control @error('cita1') is-invalid @enderror" name="cita1" value="{{$smp1->cita1}}" placeholder="Alamat Lengkap" required autocomplete="cita1" autofocus>
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
                  <input id="jumlahsaudara1" type="number" class="form-control @error('jumlahsaudara1') is-invalid @enderror" name="jumlahsaudara1" value="{{$smp1->jumlahsaudara1}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara1" autofocus>
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
                  <input id="asalsekolah1" type="text" class="form-control @error('asalsekolah1') is-invalid @enderror" name="asalsekolah1" value="{{$smp1->asalsekolah1}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah1" autofocus>
                  @error('asalsekolah1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah1" type="text" class="form-control @error('alamatasalsekolah1') is-invalid @enderror" name="alamatasalsekolah1" value="{{$smp1->alamatasalsekolah1}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah1" autofocus>
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
                  <input id="namaayah1" type="text" class="form-control @error('namaayah1') is-invalid @enderror" name="namaayah1" value="{{$smp1->namaayah1}}" placeholder="Nama Ayah" required autocomplete="namaayah1" autofocus>
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
                  <input id="nikayah1" type="text" class="form-control @error('nikayah1') is-invalid @enderror" name="nikayah1" value="{{$smp1->nikayah1}}" placeholder="NIK Ayah" required autocomplete="nikayah1" autofocus>
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
                  <input id="tahunlahirayah1" type="text" class="form-control @error('tahunlahirayah1') is-invalid @enderror" name="tahunlahirayah1" value="{{$smp1->tahunlahirayah1}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah1" autofocus>
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
                  <input id="pendidikanayah1" type="text" class="form-control @error('pendidikanayah1') is-invalid @enderror" name="pendidikanayah1" value="{{$smp1->pendidikanayah1}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah1" autofocus>
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
                  <select id="inputState" class="form-control" id="pendidikanayah1" class="form-control @error('pendidikanayah1') is-invalid @enderror" name="pendidikanayah1" value="{{$smp1->pendidikanayah1}}" required autocomplete="pendidikanayah1" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp1->pendidikanayah1 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp1->pendidikanayah1 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp1->pendidikanayah1 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp1->pendidikanayah1 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp1->pendidikanayah1 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp1->pendidikanayah1 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp1->pendidikanayah1 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
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
                  <input id="pekerjaanayah1" type="text" class="form-control @error('pekerjaanayah1') is-invalid @enderror" name="pekerjaanayah1" value="{{$smp1->pekerjaanayah1}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah1" autofocus>
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
                  <select id="inputState" class="form-control" id="pekerjaanayah1" class="form-control @error('pekerjaanayah1') is-invalid @enderror" name="pekerjaanayah1" value="{{$smp1->pekerjaanayah1}}" required autocomplete="pekerjaanayah1" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp1->pekerjaanayah1 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp1->pekerjaanayah1 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp1->pekerjaanayah1 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp1->pekerjaanayah1 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp1->pekerjaanayah1 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp1->pekerjaanayah1 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp1->pekerjaanayah1 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp1->pekerjaanayah1 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp1->pekerjaanayah1 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp1->pekerjaanayah1 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp1->pekerjaanayah1 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp1->pekerjaanayah1 == 'Alm') selected @endif> Alm </option>
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
                  <input id="namaibu1" type="text" class="form-control @error('namaibu1') is-invalid @enderror" name="namaibu1" value="{{$smp1->namaibu1}}" placeholder="Nama Ibu" required autocomplete="namaibu1" autofocus>
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
                  <input id="nikibu1" type="text" class="form-control @error('nikibu1') is-invalid @enderror" name="nikibu1" value="{{$smp1->nikibu1}}" placeholder="NIK Ibu" required autocomplete="nikibu1" autofocus>
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
                  <input id="tahunlahiribu1" type="text" class="form-control @error('tahunlahiribu1') is-invalid @enderror" name="tahunlahiribu1" value="{{$smp1->tahunlahiribu1}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu1" autofocus>
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
                  <input id="pendidikanibu1" type="text" class="form-control @error('pendidikanibu1') is-invalid @enderror" name="pendidikanibu1" value="{{$smp1->pendidikanibu1}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu1" autofocus>
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
                  <select id="inputState" class="form-control" id="pendidikanibu1" class="form-control @error('pendidikanibu1') is-invalid @enderror" name="pendidikanibu1" value="{{$smp1->pendidikanibu1}}" required autocomplete="pendidikanibu1" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp1->pendidikanibu1 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp1->pendidikanibu1 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp1->pendidikanibu1 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp1->pendidikanibu1 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp1->pendidikanibu1 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp1->pendidikanibu1 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp1->pendidikanibu1 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
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
                  <input id="pekerjaanibu1" type="text" class="form-control @error('pekerjaanibu1') is-invalid @enderror" name="pekerjaanibu1" value="{{$smp1->pekerjaanibu1}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu1" autofocus>
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
                  <select id="inputState" class="form-control" id="pekerjaanibu1" class="form-control @error('pekerjaanibu1') is-invalid @enderror" name="pekerjaanibu1" value="{{$smp1->pekerjaanibu1}}" required autocomplete="pekerjaanibu1" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp1->pekerjaanibu1 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp1->pekerjaanibu1 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp1->pekerjaanibu1 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp1->pekerjaanibu1 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp1->pekerjaanibu1 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp1->pekerjaanibu1 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp1->pekerjaanibu1 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp1->pekerjaanibu1 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp1->pekerjaanibu1 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp1->pekerjaanibu1 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp1->pekerjaanibu1 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp1->pekerjaanibu1 == 'Alm') selected @endif> Alm </option>
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
                  <input id="penghasilan1" type="text" class="form-control @error('penghasilan1') is-invalid @enderror" name="penghasilan1" value="{{$smp1->penghasilan1}}" placeholder="Penghasilan" required autocomplete="penghasilan1" autofocus>
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
                  <select id="inputState" class="form-control" id="penghasilan1" class="form-control @error('penghasilan1') is-invalid @enderror" name="penghasilan1" value="{{$smp1->penghasilan1}}" required autocomplete="penghasilan1" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smp1->penghasilan1 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smp1->penghasilan1 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smp1->penghasilan1 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smp1->penghasilan1 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smp1->penghasilan1 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smp1->penghasilan1 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan1')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
              <div class="form-group row">
                <div class="col-md-12">
                  <label>Kategori Siswa</label>
                  <select id="inputState" class="form-control" id="prestasi1" class="form-control" name="prestasi1" value="{{$smp1->prestasi1}}" required autocomplete="prestasi1" autofocus>
                    <option selected>-- Kategori Siswa --</option>
                    <option value="Prestasi" @if($smp1->prestasi1 == 'Prestasi') selected @endif> Prestasi </option>
                    <option value="Biasa" @if($smp1->prestasi1 == 'Biasa') selected @endif> Biasa </option>
                    <option value="Istimewah" @if($smp1->prestasi1 == 'Istimewah') selected @endif> Istimewah </option>
                  </select>
                </div>                           
              </div>
<!--  __________________________________________________________________________________ -->
<!-- No HP -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label>No HP</label>
                  <input id="nohp1" type="text" class="form-control @error('nohp1') is-invalid @enderror" name="nohp1" value="{{$smp1->nohp1}}" placeholder="No HP" required autocomplete="nohp1" autofocus>
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

            