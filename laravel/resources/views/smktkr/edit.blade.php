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
          <a href="{{url('smktkr')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data Santri Baru Jenjang SMK TKR </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smktkr') }}/{{$smktkr->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Fasilitas                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Fasilitas</label>
                  <input id="fasilitas" type="text" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" value="{{$smktkr->fasilitas}}" placeholder="fasilitas" required autocomplete="fasilitas" autofocus>
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
                    <option value="Reguler" @if($smktkr->fasilitas == 'Reguler') selected @endif> Reguler </option>
                    <option value="Non Reguler" @if($smktkr->fasilitas == 'Non Reguler') selected @endif> Non Reguler </option>
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
                  <input id="namalengkap" type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" value="{{$smktkr->namalengkap}}" placeholder="Nama Lengkap" required autocomplete="namalengkap" autofocus>
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
                  <select id="inputState" class="form-control" id="status5" class="form-control @error('status5') is-invalid @enderror" name="status5">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smktkr->status5 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smktkr->status5 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smktkr->status5 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smktkr->status5 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smktkr->status5 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smktkr->status5 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status5')
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
                  <label for="avatar5">Foto (size max 1.90 mb)</label>
                  <input id="avatar5" type="file" class="form-control @error('avatar5') is-invalid @enderror" name="avatar5" value="{{$smktkr->avatar5}}" placeholder="Avatar">
                  @error('avatar5')
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
                  <input id="tempatlahir5" type="text" class="form-control @error('tempatlahir5') is-invalid @enderror" name="tempatlahir5" value="{{$smktkr->tempatlahir5}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir5" autofocus>
                  @error('tempatlahir5')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt5" type="text" class="form-control @error('tbt5') is-invalid @enderror" name="tbt5" value="{{$smktkr->tbt5}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt5" autofocus>
                  @error('tbt5')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin 
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel" type="text" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" value="{{$smktkr->jenkel}}" placeholder="Jenis Kelamin" required autocomplete="jenkel" autofocus>
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
                    <option value="Laki-laki" @if($smktkr->jenkel == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smktkr->jenkel == 'Perempuan') selected @endif> Perempuan </option>
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
                  <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{$smktkr->desa}}" placeholder="Desa" required autocomplete="desa" autofocus>
                  @error('desa')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec" type="text" class="form-control @error('kec') is-invalid @enderror" name="kec" value="{{$smktkr->kec}}" placeholder="Kecamatan" required autocomplete="kec" autofocus>
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
                  <input id="kab" type="text" class="form-control @error('kab') is-invalid @enderror" name="kab" value="{{$smktkr->kab}}" placeholder="Kabupaten / Kota" required autocomplete="kab" autofocus>
                  @error('kab')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-6">
                  <label>Provinsi</label>
                  <input id="prov" type="text" class="form-control @error('prov') is-invalid @enderror" name="prov" value="{{$smktkr->prov}}" placeholder="Provinsi" required autocomplete="prov" autofocus>
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
                  <input id="cita5" type="text" class="form-control @error('cita5') is-invalid @enderror" name="cita5" value="{{$smktkr->cita5}}" placeholder="Alamat Lengkap" required autocomplete="cita5" autofocus>
                  @error('cita5')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
--> 
<!-- Jumlah Saudara Kandung 
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara5" type="number" class="form-control @error('jumlahsaudara5') is-invalid @enderror" name="jumlahsaudara5" value="{{$smktkr->jumlahsaudara5}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara5" autofocus>
                  @error('jumlahsaudara5')
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
                  <input id="asalsekolah5" type="text" class="form-control @error('asalsekolah5') is-invalid @enderror" name="asalsekolah5" value="{{$smktkr->asalsekolah5}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah5" autofocus>
                  @error('asalsekolah5')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah5" type="text" class="form-control @error('alamatasalsekolah5') is-invalid @enderror" name="alamatasalsekolah5" value="{{$smktkr->alamatasalsekolah5}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah5" autofocus>
                  @error('alamatasalsekolah5')
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
                  <input id="namaayah5" type="text" class="form-control @error('namaayah5') is-invalid @enderror" name="namaayah5" value="{{$smktkr->namaayah5}}" placeholder="Nama Ayah" required autocomplete="namaayah5" autofocus>
                  @error('namaayah5')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ayah 
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah5" type="text" class="form-control @error('nikayah5') is-invalid @enderror" name="nikayah5" value="{{$smktkr->nikayah5}}" placeholder="NIK Ayah" required autocomplete="nikayah5" autofocus>
                  @error('nikayah5')
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
                  <input id="tahunlahirayah5" type="text" class="form-control @error('tahunlahirayah5') is-invalid @enderror" name="tahunlahirayah5" value="{{$smktkr->tahunlahirayah5}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah5" autofocus>
                  @error('tahunlahirayah5')
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
                  <input id="pendidikanayah5" type="text" class="form-control @error('pendidikanayah5') is-invalid @enderror" name="pendidikanayah5" value="{{$smktkr->pendidikanayah5}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah5" autofocus>
                  @error('pendidikanayah5')
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
                  <select id="inputState" class="form-control" id="pendidikanayah5" class="form-control @error('pendidikanayah5') is-invalid @enderror" name="pendidikanayah5" value="{{$smktkr->pendidikanayah5}}" required autocomplete="pendidikanayah5" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkr->pendidikanayah5 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkr->pendidikanayah5 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkr->pendidikanayah5 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkr->pendidikanayah5 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkr->pendidikanayah5 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkr->pendidikanayah5 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkr->pendidikanayah5 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah5')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ayah                        
                <div class="col-md-6">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah5" type="text" class="form-control @error('pekerjaanayah5') is-invalid @enderror" name="pekerjaanayah5" value="{{$smktkr->pekerjaanayah5}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah5" autofocus>
                  @error('pekerjaanayah5')
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
                  <select id="inputState" class="form-control" id="pekerjaanayah5" class="form-control @error('pekerjaanayah5') is-invalid @enderror" name="pekerjaanayah5" value="{{$smktkr->pekerjaanayah5}}" required autocomplete="pekerjaanayah5" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkr->pekerjaanayah5 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkr->pekerjaanayah5 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkr->pekerjaanayah5 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkr->pekerjaanayah5 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkr->pekerjaanayah5 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkr->pekerjaanayah5 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkr->pekerjaanayah5 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkr->pekerjaanayah5 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkr->pekerjaanayah5 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkr->pekerjaanayah5 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkr->pekerjaanayah5 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkr->pekerjaanayah5 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah5')
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
                  <input id="namaibu5" type="text" class="form-control @error('namaibu5') is-invalid @enderror" name="namaibu5" value="{{$smktkr->namaibu5}}" placeholder="Nama Ibu" required autocomplete="namaibu5" autofocus>
                  @error('namaibu5')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ibu 
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu5" type="text" class="form-control @error('nikibu5') is-invalid @enderror" name="nikibu5" value="{{$smktkr->nikibu5}}" placeholder="NIK Ibu" required autocomplete="nikibu5" autofocus>
                  @error('nikibu5')
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
                  <input id="tahunlahiribu5" type="text" class="form-control @error('tahunlahiribu5') is-invalid @enderror" name="tahunlahiribu5" value="{{$smktkr->tahunlahiribu5}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu5" autofocus>
                  @error('tahunlahiribu5')
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
                  <input id="pendidikanibu5" type="text" class="form-control @error('pendidikanibu5') is-invalid @enderror" name="pendidikanibu5" value="{{$smktkr->pendidikanibu5}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu5" autofocus>
                  @error('pendidikanibu5')
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
                  <select id="inputState" class="form-control" id="pendidikanibu5" class="form-control @error('pendidikanibu5') is-invalid @enderror" name="pendidikanibu5" value="{{$smktkr->pendidikanibu5}}" required autocomplete="pendidikanibu5" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smktkr->pendidikanibu5 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smktkr->pendidikanibu5 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smktkr->pendidikanibu5 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smktkr->pendidikanibu5 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smktkr->pendidikanibu5 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smktkr->pendidikanibu5 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smktkr->pendidikanibu5 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu5')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ibu                        
                <div class="col-md-6">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu5" type="text" class="form-control @error('pekerjaanibu5') is-invalid @enderror" name="pekerjaanibu5" value="{{$smktkr->pekerjaanibu5}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu5" autofocus>
                  @error('pekerjaanibu5')
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
                  <select id="inputState" class="form-control" id="pekerjaanibu5" class="form-control @error('pekerjaanibu5') is-invalid @enderror" name="pekerjaanibu5" value="{{$smktkr->pekerjaanibu5}}" required autocomplete="pekerjaanibu5" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smktkr->pekerjaanibu5 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smktkr->pekerjaanibu5 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smktkr->pekerjaanibu5 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smktkr->pekerjaanibu5 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smktkr->pekerjaanibu5 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smktkr->pekerjaanibu5 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smktkr->pekerjaanibu5 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smktkr->pekerjaanibu5 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smktkr->pekerjaanibu5 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smktkr->pekerjaanibu5 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smktkr->pekerjaanibu5 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smktkr->pekerjaanibu5 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu5')
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
                  <input id="penghasilan5" type="text" class="form-control @error('penghasilan5') is-invalid @enderror" name="penghasilan5" value="{{$smktkr->penghasilan5}}" placeholder="Penghasilan" required autocomplete="penghasilan5" autofocus>
                  @error('penghasilan5')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
-->
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan5" class="form-control @error('penghasilan5') is-invalid @enderror" name="penghasilan5" value="{{$smktkr->penghasilan5}}" required autocomplete="penghasilan5" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smktkr->penghasilan5 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smktkr->penghasilan5 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smktkr->penghasilan5 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smktkr->penghasilan5 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smktkr->penghasilan5 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smktkr->penghasilan5 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan5')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih 
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi5" type="text" class="form-control @error('prestasi5') is-invalid @enderror" name="prestasi5" value="{{$smktkr->prestasi5}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi5" autofocus>
                  @error('prestasi5')
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
                  <input id="nohp5" type="text" class="form-control @error('nohp5') is-invalid @enderror" name="nohp5" value="{{$smktkr->nohp5}}" placeholder="No HP" required autocomplete="nohp5" autofocus>
                  @error('nohp5')
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

            