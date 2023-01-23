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
          <a href="{{url('mts')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data Santri Baru Jenjang MTs </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('mts') }}/{{$mts->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Fasilitas                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Fasilitas</label>
                  <input id="fasilitas" type="text" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" value="{{$mts->fasilitas}}" placeholder="fasilitas" required autocomplete="fasilitas" autofocus>
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
                    <option value="Reguler" @if($mts->fasilitas == 'Reguler') selected @endif> Reguler </option>
                    <option value="Non Reguler" @if($mts->fasilitas == 'Non Reguler') selected @endif> Non Reguler </option>
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
                  <input id="namalengkap" type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" value="{{$mts->namalengkap}}" placeholder="Nama Lengkap" required autocomplete="namalengkap" autofocus>
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
                  <select id="inputState" class="form-control" id="status3" class="form-control @error('status3') is-invalid @enderror" name="status3">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($mts->status3 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($mts->status3 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($mts->status3 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($mts->status3 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($mts->status3 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($mts->status3 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status3')
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
                  <label for="avatar3">Foto (size max 1.90 mb)</label>
                  <input id="avatar3" type="file" class="form-control @error('avatar3') is-invalid @enderror" name="avatar3" value="{{$mts->avatar3}}" placeholder="Avatar">
                  @error('avatar3')
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
                  <input id="tempatlahir3" type="text" class="form-control @error('tempatlahir3') is-invalid @enderror" name="tempatlahir3" value="{{$mts->tempatlahir3}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir3" autofocus>
                  @error('tempatlahir3')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt3" type="text" class="form-control @error('tbt3') is-invalid @enderror" name="tbt3" value="{{$mts->tbt3}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt3" autofocus>
                  @error('tbt3')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel" type="text" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" value="{{$mts->jenkel}}" placeholder="Jenis Kelamin" required autocomplete="jenkel" autofocus>
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
                    <option value="Laki-laki" @if($mts->jenkel == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($mts->jenkel == 'Perempuan') selected @endif> Perempuan </option>
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
                  <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{$mts->desa}}" placeholder="Desa" required autocomplete="desa" autofocus>
                  @error('desa')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec" type="text" class="form-control @error('kec') is-invalid @enderror" name="kec" value="{{$mts->kec}}" placeholder="Kecamatan" required autocomplete="kec" autofocus>
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
                  <input id="kab" type="text" class="form-control @error('kab') is-invalid @enderror" name="kab" value="{{$mts->kab}}" placeholder="Kabupaten / Kota" required autocomplete="kab" autofocus>
                  @error('kab')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-6">
                  <label>Provinsi</label>
                  <input id="prov" type="text" class="form-control @error('prov') is-invalid @enderror" name="prov" value="{{$mts->prov}}" placeholder="Provinsi" required autocomplete="prov" autofocus>
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
                  <input id="cita3" type="text" class="form-control @error('cita3') is-invalid @enderror" name="cita3" value="{{$mts->cita3}}" placeholder="Alamat Lengkap" required autocomplete="cita3" autofocus>
                  @error('cita3')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
-->
<!-- Jumlah Saudara Kandung 
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara3" type="number" class="form-control @error('jumlahsaudara3') is-invalid @enderror" name="jumlahsaudara3" value="{{$mts->jumlahsaudara3}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara3" autofocus>
                  @error('jumlahsaudara3')
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
                  <input id="asalsekolah3" type="text" class="form-control @error('asalsekolah3') is-invalid @enderror" name="asalsekolah3" value="{{$mts->asalsekolah3}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah3" autofocus>
                  @error('asalsekolah3')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah3" type="text" class="form-control @error('alamatasalsekolah3') is-invalid @enderror" name="alamatasalsekolah3" value="{{$mts->alamatasalsekolah3}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah3" autofocus>
                  @error('alamatasalsekolah3')
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
                  <input id="namaayah3" type="text" class="form-control @error('namaayah3') is-invalid @enderror" name="namaayah3" value="{{$mts->namaayah3}}" placeholder="Nama Ayah" required autocomplete="namaayah3" autofocus>
                  @error('namaayah3')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ayah 
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah3" type="text" class="form-control @error('nikayah3') is-invalid @enderror" name="nikayah3" value="{{$mts->nikayah3}}" placeholder="NIK Ayah" required autocomplete="nikayah3" autofocus>
                  @error('nikayah3')
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
                  <input id="tahunlahirayah3" type="text" class="form-control @error('tahunlahirayah3') is-invalid @enderror" name="tahunlahirayah3" value="{{$mts->tahunlahirayah3}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah3" autofocus>
                  @error('tahunlahirayah3')
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
                  <input id="pendidikanayah3" type="text" class="form-control @error('pendidikanayah3') is-invalid @enderror" name="pendidikanayah3" value="{{$mts->pendidikanayah3}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah3" autofocus>
                  @error('pendidikanayah3')
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
                  <select id="inputState" class="form-control" id="pendidikanayah3" class="form-control @error('pendidikanayah3') is-invalid @enderror" name="pendidikanayah3" value="{{$mts->pendidikanayah3}}" required autocomplete="pendidikanayah3" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mts->pendidikanayah3 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mts->pendidikanayah3 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mts->pendidikanayah3 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mts->pendidikanayah3 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mts->pendidikanayah3 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mts->pendidikanayah3 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mts->pendidikanayah3 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah3')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ayah                      
                <div class="col-md-6">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah3" type="text" class="form-control @error('pekerjaanayah3') is-invalid @enderror" name="pekerjaanayah3" value="{{$mts->pekerjaanayah3}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah3" autofocus>
                  @error('pekerjaanayah3')
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
                  <select id="inputState" class="form-control" id="pekerjaanayah3" class="form-control @error('pekerjaanayah3') is-invalid @enderror" name="pekerjaanayah3" value="{{$mts->pekerjaanayah3}}" required autocomplete="pekerjaanayah3" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mts->pekerjaanayah3 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mts->pekerjaanayah3 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mts->pekerjaanayah3 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mts->pekerjaanayah3 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mts->pekerjaanayah3 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mts->pekerjaanayah3 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mts->pekerjaanayah3 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mts->pekerjaanayah3 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mts->pekerjaanayah3 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mts->pekerjaanayah3 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mts->pekerjaanayah3 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mts->pekerjaanayah3 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah3')
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
                  <input id="namaibu3" type="text" class="form-control @error('namaibu3') is-invalid @enderror" name="namaibu3" value="{{$mts->namaibu3}}" placeholder="Nama Ibu" required autocomplete="namaibu3" autofocus>
                  @error('namaibu3')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ibu
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu3" type="text" class="form-control @error('nikibu3') is-invalid @enderror" name="nikibu3" value="{{$mts->nikibu3}}" placeholder="NIK Ibu" required autocomplete="nikibu3" autofocus>
                  @error('nikibu3')
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
                  <input id="tahunlahiribu3" type="text" class="form-control @error('tahunlahiribu3') is-invalid @enderror" name="tahunlahiribu3" value="{{$mts->tahunlahiribu3}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu3" autofocus>
                  @error('tahunlahiribu3')
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
                  <input id="pendidikanibu3" type="text" class="form-control @error('pendidikanibu3') is-invalid @enderror" name="pendidikanibu3" value="{{$mts->pendidikanibu3}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu3" autofocus>
                  @error('pendidikanibu3')
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
                  <select id="inputState" class="form-control" id="pendidikanibu3" class="form-control @error('pendidikanibu3') is-invalid @enderror" name="pendidikanibu3" value="{{$mts->pendidikanibu3}}" required autocomplete="pendidikanibu3" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mts->pendidikanibu3 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mts->pendidikanibu3 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mts->pendidikanibu3 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mts->pendidikanibu3 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mts->pendidikanibu3 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mts->pendidikanibu3 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mts->pendidikanibu3 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu3')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ibu                       
                <div class="col-md-6">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu3" type="text" class="form-control @error('pekerjaanibu3') is-invalid @enderror" name="pekerjaanibu3" value="{{$mts->pekerjaanibu3}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu3" autofocus>
                  @error('pekerjaanibu3')
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
                  <select id="inputState" class="form-control" id="pekerjaanibu3" class="form-control @error('pekerjaanibu3') is-invalid @enderror" name="pekerjaanibu3" value="{{$mts->pekerjaanibu3}}" required autocomplete="pekerjaanibu3" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mts->pekerjaanibu3 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mts->pekerjaanibu3 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mts->pekerjaanibu3 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mts->pekerjaanibu3 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mts->pekerjaanibu3 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mts->pekerjaanibu3 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mts->pekerjaanibu3 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mts->pekerjaanibu3 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mts->pekerjaanibu3 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mts->pekerjaanibu3 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mts->pekerjaanibu3 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mts->pekerjaanibu3 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu3')
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
                  <input id="penghasilan3" type="text" class="form-control @error('penghasilan3') is-invalid @enderror" name="penghasilan3" value="{{$mts->penghasilan3}}" placeholder="Penghasilan" required autocomplete="penghasilan3" autofocus>
                  @error('penghasilan3')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
-->
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan3" class="form-control @error('penghasilan3') is-invalid @enderror" name="penghasilan3" value="{{$mts->penghasilan3}}" required autocomplete="penghasilan3" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($mts->penghasilan3 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($mts->penghasilan3 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($mts->penghasilan3 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($mts->penghasilan3 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($mts->penghasilan3 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($mts->penghasilan3 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan3')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih 
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi3" type="text" class="form-control @error('prestasi3') is-invalid @enderror" name="prestasi3" value="{{$mts->prestasi3}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi3" autofocus>
                  @error('prestasi3')
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
                  <input id="nohp3" type="text" class="form-control @error('nohp3') is-invalid @enderror" name="nohp3" value="{{$mts->nohp3}}" placeholder="No HP" required autocomplete="nohp3" autofocus>
                  @error('nohp3')
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

            