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
          <a href="{{url('smp2')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data Santri Baru Jenjang SMP 2 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smp2') }}/{{$smp2->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Fasilitas                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Fasilitas</label>
                  <input id="fasilitas" type="text" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" value="{{$smp2->fasilitas}}" placeholder="fasilitas" required autocomplete="fasilitas" autofocus>
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
                    <option value="Reguler" @if($smp2->fasilitas == 'Reguler') selected @endif> Reguler </option>
                    <option value="Non Reguler" @if($smp2->fasilitas == 'Non Reguler') selected @endif> Non Reguler </option>
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
                  <input id="namalengkap" type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" value="{{$smp2->namalengkap}}" placeholder="Nama Lengkap" required autocomplete="namalengkap" autofocus>
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
                  <select id="inputState" class="form-control" id="status2" class="form-control @error('status2') is-invalid @enderror" name="status2">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smp2->status2 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smp2->status2 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smp2->status2 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smp2->status2 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smp2->status2 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smp2->status2 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status2')
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
                  <label for="avatar2">Foto (size max 1.90 mb)</label>
                  <input id="avatar2" type="file" class="form-control @error('avatar2') is-invalid @enderror" name="avatar2" value="{{$smp2->avatar2}}" placeholder="Avatar">
                  @error('avatar2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
<!-- __________________________________________________________________________________ -->

<!--
              <div class="form-group row">
NIK 
                <div class="col-md-6">
                  <label>NIK</label>
                  <input id="nik2" type="text" class="form-control @error('nik2') is-invalid @enderror" name="nik2" value="{{$smp2->nik2}}" placeholder="NIK" required autocomplete="nik2" autofocus>
                  @error('nik2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
 No KK 
                <div class="col-md-6">
                  <label>No KK</label>
                  <input id="nokk2" type="text" class="form-control @error('nokk2') is-invalid @enderror" name="nokk2" value="{{$smp2->nokk2}}" placeholder="No KK" required autocomplete="nokk2" autofocus>
                  @error('nokk2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                                                                                   
              </div>
 -->
<!--  __________________________________________________________________________________ -->
<!-- Tempat Lahir -->                        
              <div class="form-group row">
                <div class="col-md-4">
                  <label>Tempat Lahir</label>
                  <input id="tempatlahir2" type="text" class="form-control @error('tempatlahir2') is-invalid @enderror" name="tempatlahir2" value="{{$smp2->tempatlahir2}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir2" autofocus>
                  @error('tempatlahir2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt2" type="text" class="form-control @error('tbt2') is-invalid @enderror" name="tbt2" value="{{$smp2->tbt2}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt2" autofocus>
                  @error('tbt2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin 
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel" type="text" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" value="{{$smp2->jenkel}}" placeholder="Jenis Kelamin" required autocomplete="jenkel" autofocus>
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
                    <option value="Laki-laki" @if($smp2->jenkel == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smp2->jenkel == 'Perempuan') selected @endif> Perempuan </option>
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
                  <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{$smp2->desa}}" placeholder="Desa" required autocomplete="desa" autofocus>
                  @error('desa')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec" type="text" class="form-control @error('kec') is-invalid @enderror" name="kec" value="{{$smp2->kec}}" placeholder="Kecamatan" required autocomplete="kec" autofocus>
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
                  <input id="kab" type="text" class="form-control @error('kab') is-invalid @enderror" name="kab" value="{{$smp2->kab}}" placeholder="Kabupaten / Kota" required autocomplete="kab" autofocus>
                  @error('kab')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-6">
                  <label>Provinsi</label>
                  <input id="prov" type="text" class="form-control @error('prov') is-invalid @enderror" name="prov" value="{{$smp2->prov}}" placeholder="Provinsi" required autocomplete="prov" autofocus>
                  @error('prov')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                          
              </div>
<!-- Kode Pos 
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos2" type="text" class="form-control @error('kodepos2') is-invalid @enderror" name="kodepos2" value="{{$smp2->kodepos2}}" placeholder="Kode Pos" required autocomplete="kodepos2" autofocus>
                  @error('kodepos2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
-->                           
              </div>
<!--  __________________________________________________________________________________ -->
<!-- Alamat Lengkap                        
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Alamat Lengkap</label>
                  <input id="cita2" type="text" class="form-control @error('cita2') is-invalid @enderror" name="cita2" value="{{$smp2->cita2}}" placeholder="Alamat Lengkap" required autocomplete="cita2" autofocus>
                  @error('cita2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
--> 
<!-- Jumlah Saudara Kandung 
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara2" type="number" class="form-control @error('jumlahsaudara2') is-invalid @enderror" name="jumlahsaudara2" value="{{$smp2->jumlahsaudara2}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara2" autofocus>
                  @error('jumlahsaudara2')
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
                  <input id="asalsekolah2" type="text" class="form-control @error('asalsekolah2') is-invalid @enderror" name="asalsekolah2" value="{{$smp2->asalsekolah2}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah2" autofocus>
                  @error('asalsekolah2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah2" type="text" class="form-control @error('alamatasalsekolah2') is-invalid @enderror" name="alamatasalsekolah2" value="{{$smp2->alamatasalsekolah2}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah2" autofocus>
                  @error('alamatasalsekolah2')
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
                  <input id="namaayah2" type="text" class="form-control @error('namaayah2') is-invalid @enderror" name="namaayah2" value="{{$smp2->namaayah2}}" placeholder="Nama Ayah" required autocomplete="namaayah2" autofocus>
                  @error('namaayah2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ayah 
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah2" type="text" class="form-control @error('nikayah2') is-invalid @enderror" name="nikayah2" value="{{$smp2->nikayah2}}" placeholder="NIK Ayah" required autocomplete="nikayah2" autofocus>
                  @error('nikayah2')
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
                  <input id="tahunlahirayah2" type="text" class="form-control @error('tahunlahirayah2') is-invalid @enderror" name="tahunlahirayah2" value="{{$smp2->tahunlahirayah2}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah2" autofocus>
                  @error('tahunlahirayah2')
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
                  <input id="pendidikanayah2" type="text" class="form-control @error('pendidikanayah2') is-invalid @enderror" name="pendidikanayah2" value="{{$smp2->pendidikanayah2}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah2" autofocus>
                  @error('pendidikanayah2')
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
                  <select id="inputState" class="form-control" id="pendidikanayah2" class="form-control @error('pendidikanayah2') is-invalid @enderror" name="pendidikanayah2" value="{{$smp2->pendidikanayah2}}" required autocomplete="pendidikanayah2" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp2->pendidikanayah2 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp2->pendidikanayah2 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp2->pendidikanayah2 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp2->pendidikanayah2 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp2->pendidikanayah2 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp2->pendidikanayah2 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp2->pendidikanayah2 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah2')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ayah                      
                <div class="col-md-6">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah2" type="text" class="form-control @error('pekerjaanayah2') is-invalid @enderror" name="pekerjaanayah2" value="{{$smp2->pekerjaanayah2}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah2" autofocus>
                  @error('pekerjaanayah2')
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
                  <select id="inputState" class="form-control" id="pekerjaanayah2" class="form-control @error('pekerjaanayah2') is-invalid @enderror" name="pekerjaanayah2" value="{{$smp2->pekerjaanayah2}}" required autocomplete="pekerjaanayah2" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp2->pekerjaanayah2 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp2->pekerjaanayah2 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp2->pekerjaanayah2 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp2->pekerjaanayah2 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp2->pekerjaanayah2 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp2->pekerjaanayah2 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp2->pekerjaanayah2 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp2->pekerjaanayah2 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp2->pekerjaanayah2 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp2->pekerjaanayah2 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp2->pekerjaanayah2 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp2->pekerjaanayah2 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah2')
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
                  <input id="namaibu2" type="text" class="form-control @error('namaibu2') is-invalid @enderror" name="namaibu2" value="{{$smp2->namaibu2}}" placeholder="Nama Ibu" required autocomplete="namaibu2" autofocus>
                  @error('namaibu2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ibu 
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu2" type="text" class="form-control @error('nikibu2') is-invalid @enderror" name="nikibu2" value="{{$smp2->nikibu2}}" placeholder="NIK Ibu" required autocomplete="nikibu2" autofocus>
                  @error('nikibu2')
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
                  <input id="tahunlahiribu2" type="text" class="form-control @error('tahunlahiribu2') is-invalid @enderror" name="tahunlahiribu2" value="{{$smp2->tahunlahiribu2}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu2" autofocus>
                  @error('tahunlahiribu2')
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
                  <input id="pendidikanibu2" type="text" class="form-control @error('pendidikanibu2') is-invalid @enderror" name="pendidikanibu2" value="{{$smp2->pendidikanibu2}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu2" autofocus>
                  @error('pendidikanibu2')
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
                  <select id="inputState" class="form-control" id="pendidikanibu2" class="form-control @error('pendidikanibu2') is-invalid @enderror" name="pendidikanibu2" value="{{$smp2->pendidikanibu2}}" required autocomplete="pendidikanibu2" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp2->pendidikanibu2 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp2->pendidikanibu2 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp2->pendidikanibu2 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp2->pendidikanibu2 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp2->pendidikanibu2 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp2->pendidikanibu2 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp2->pendidikanibu2 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ibu                       
                <div class="col-md-6">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu2" type="text" class="form-control @error('pekerjaanibu2') is-invalid @enderror" name="pekerjaanibu2" value="{{$smp2->pekerjaanibu2}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu2" autofocus>
                  @error('pekerjaanibu2')
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
                  <select id="inputState" class="form-control" id="pekerjaanibu2" class="form-control @error('pekerjaanibu2') is-invalid @enderror" name="pekerjaanibu2" value="{{$smp2->pekerjaanibu2}}" required autocomplete="pekerjaanibu2" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp2->pekerjaanibu2 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp2->pekerjaanibu2 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp2->pekerjaanibu2 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp2->pekerjaanibu2 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp2->pekerjaanibu2 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp2->pekerjaanibu2 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp2->pekerjaanibu2 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp2->pekerjaanibu2 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp2->pekerjaanibu2 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp2->pekerjaanibu2 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp2->pekerjaanibu2 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp2->pekerjaanibu2 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu2')
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
                  <input id="penghasilan2" type="text" class="form-control @error('penghasilan2') is-invalid @enderror" name="penghasilan2" value="{{$smp2->penghasilan2}}" placeholder="Penghasilan" required autocomplete="penghasilan2" autofocus>
                  @error('penghasilan2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
-->
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan2" class="form-control @error('penghasilan2') is-invalid @enderror" name="penghasilan2" value="{{$smp2->penghasilan2}}" required autocomplete="penghasilan2" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smp2->penghasilan2 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smp2->penghasilan2 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smp2->penghasilan2 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smp2->penghasilan2 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smp2->penghasilan2 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smp2->penghasilan2 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih 
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi2" type="text" class="form-control @error('prestasi2') is-invalid @enderror" name="prestasi2" value="{{$smp2->prestasi2}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi2" autofocus>
                  @error('prestasi2')
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
                  <input id="nohp2" type="text" class="form-control @error('nohp2') is-invalid @enderror" name="nohp2" value="{{$smp2->nohp2}}" placeholder="No HP" required autocomplete="nohp2" autofocus>
                  @error('nohp2')
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

            