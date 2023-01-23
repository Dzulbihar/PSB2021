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
          <a href="{{url('mahadaly')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data Mahasantri Baru Jenjang Mahad Aly </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('mahadaly') }}/{{$mahadaly->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Fasilitas                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Fasilitas</label>
                  <input id="fasilitas" type="text" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" value="{{$mahadaly->fasilitas}}" placeholder="fasilitas" required autocomplete="fasilitas" autofocus>
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
                    <option value="Reguler" @if($mahadaly->fasilitas == 'Reguler') selected @endif> Reguler </option>
                    <option value="Non Reguler" @if($mahadaly->fasilitas == 'Non Reguler') selected @endif> Non Reguler </option>
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
                  <input id="namalengkap" type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" value="{{$mahadaly->namalengkap}}" placeholder="Nama Lengkap" required autocomplete="namalengkap" autofocus>
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
                  <select id="inputState" class="form-control" id="status7" class="form-control @error('status7') is-invalid @enderror" name="status7">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($mahadaly->status7 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($mahadaly->status7 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($mahadaly->status7 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($mahadaly->status7 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($mahadaly->status7 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($mahadaly->status7 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status7')
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
                  <input id="status7" type="text" class="form-control @error('status7') is-invalid @enderror" name="status7" value="{{$mahadaly->status7}}" placeholder="Status" >
                  @error('status7')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar7">Foto (size max 1.90 mb)</label>
                  <input id="avatar7" type="file" class="form-control @error('avatar7') is-invalid @enderror" name="avatar7" value="{{$mahadaly->avatar7}}" placeholder="Avatar">
                  @error('avatar7')
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
                  <input id="tempatlahir7" type="text" class="form-control @error('tempatlahir7') is-invalid @enderror" name="tempatlahir7" value="{{$mahadaly->tempatlahir7}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir7" autofocus>
                  @error('tempatlahir7')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt7" type="text" class="form-control @error('tbt7') is-invalid @enderror" name="tbt7" value="{{$mahadaly->tbt7}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt7" autofocus>
                  @error('tbt7')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin 
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel" type="text" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" value="{{$mahadaly->jenkel}}" placeholder="Jenis Kelamin" required autocomplete="jenkel" autofocus>
                  @error('jenkel')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
-->
<!-- Jenis Kelamin   -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <select id="inputState" class="form-control" id="jenkel" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" required autocomplete="jenkel" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($mahadaly->jenkel == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($mahadaly->jenkel == 'Perempuan') selected @endif> Perempuan </option>
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
                  <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{$mahadaly->desa}}" placeholder="Desa" required autocomplete="desa" autofocus>
                  @error('desa')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec" type="text" class="form-control @error('kec') is-invalid @enderror" name="kec" value="{{$mahadaly->kec}}" placeholder="Kecamatan" required autocomplete="kec" autofocus>
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
                  <input id="kab" type="text" class="form-control @error('kab') is-invalid @enderror" name="kab" value="{{$mahadaly->kab}}" placeholder="Kabupaten / Kota" required autocomplete="kab" autofocus>
                  @error('kab')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-6">
                  <label>Provinsi</label>
                  <input id="prov" type="text" class="form-control @error('prov') is-invalid @enderror" name="prov" value="{{$mahadaly->prov}}" placeholder="Provinsi" required autocomplete="prov" autofocus>
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
                  <input id="cita7" type="text" class="form-control @error('cita7') is-invalid @enderror" name="cita7" value="{{$mahadaly->cita7}}" placeholder="Alamat Lengkap" required autocomplete="cita7" autofocus>
                  @error('cita7')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
 --> 
<!-- Jumlah Saudara Kandung 
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara7" type="number" class="form-control @error('jumlahsaudara7') is-invalid @enderror" name="jumlahsaudara7" value="{{$mahadaly->jumlahsaudara7}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara7" autofocus>
                  @error('jumlahsaudara7')
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
                  <input id="asalsekolah7" type="text" class="form-control @error('asalsekolah7') is-invalid @enderror" name="asalsekolah7" value="{{$mahadaly->asalsekolah7}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah7" autofocus>
                  @error('asalsekolah7')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah7" type="text" class="form-control @error('alamatasalsekolah7') is-invalid @enderror" name="alamatasalsekolah7" value="{{$mahadaly->alamatasalsekolah7}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah7" autofocus>
                  @error('alamatasalsekolah7')
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
                  <input id="namaayah7" type="text" class="form-control @error('namaayah7') is-invalid @enderror" name="namaayah7" value="{{$mahadaly->namaayah7}}" placeholder="Nama Ayah" required autocomplete="namaayah7" autofocus>
                  @error('namaayah7')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ayah 
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah7" type="text" class="form-control @error('nikayah7') is-invalid @enderror" name="nikayah7" value="{{$mahadaly->nikayah7}}" placeholder="NIK Ayah" required autocomplete="nikayah7" autofocus>
                  @error('nikayah7')
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
                  <input id="tahunlahirayah7" type="text" class="form-control @error('tahunlahirayah7') is-invalid @enderror" name="tahunlahirayah7" value="{{$mahadaly->tahunlahirayah7}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah7" autofocus>
                  @error('tahunlahirayah7')
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
                  <input id="pendidikanayah7" type="text" class="form-control @error('pendidikanayah7') is-invalid @enderror" name="pendidikanayah7" value="{{$mahadaly->pendidikanayah7}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah7" autofocus>
                  @error('pendidikanayah7')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah7" class="form-control @error('pendidikanayah7') is-invalid @enderror" name="pendidikanayah7" value="{{$mahadaly->pendidikanayah7}}" required autocomplete="pendidikanayah7" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mahadaly->pendidikanayah7 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mahadaly->pendidikanayah7 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mahadaly->pendidikanayah7 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mahadaly->pendidikanayah7 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mahadaly->pendidikanayah7 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mahadaly->pendidikanayah7 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mahadaly->pendidikanayah7 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah7')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-6">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah7" type="text" class="form-control @error('pekerjaanayah7') is-invalid @enderror" name="pekerjaanayah7" value="{{$mahadaly->pekerjaanayah7}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah7" autofocus>
                  @error('pekerjaanayah7')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah7" class="form-control @error('pekerjaanayah7') is-invalid @enderror" name="pekerjaanayah7" value="{{$mahadaly->pekerjaanayah7}}" required autocomplete="pekerjaanayah7" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mahadaly->pekerjaanayah7 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mahadaly->pekerjaanayah7 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mahadaly->pekerjaanayah7 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mahadaly->pekerjaanayah7 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mahadaly->pekerjaanayah7 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mahadaly->pekerjaanayah7 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mahadaly->pekerjaanayah7 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mahadaly->pekerjaanayah7 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mahadaly->pekerjaanayah7 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mahadaly->pekerjaanayah7 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mahadaly->pekerjaanayah7 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mahadaly->pekerjaanayah7 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah7')
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
                <div class="col-md-12">
                  <label>Nama Ibu</label>
                  <input id="namaibu7" type="text" class="form-control @error('namaibu7') is-invalid @enderror" name="namaibu7" value="{{$mahadaly->namaibu7}}" placeholder="Nama Ibu" required autocomplete="namaibu7" autofocus>
                  @error('namaibu7')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ibu 
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu7" type="text" class="form-control @error('nikibu7') is-invalid @enderror" name="nikibu7" value="{{$mahadaly->nikibu7}}" placeholder="NIK Ibu" required autocomplete="nikibu7" autofocus>
                  @error('nikibu7')
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
                  <input id="tahunlahiribu7" type="text" class="form-control @error('tahunlahiribu7') is-invalid @enderror" name="tahunlahiribu7" value="{{$mahadaly->tahunlahiribu7}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu7" autofocus>
                  @error('tahunlahiribu7')
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
                  <input id="pendidikanibu7" type="text" class="form-control @error('pendidikanibu7') is-invalid @enderror" name="pendidikanibu7" value="{{$mahadaly->pendidikanibu7}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu7" autofocus>
                  @error('pendidikanibu7')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu7" class="form-control @error('pendidikanibu7') is-invalid @enderror" name="pendidikanibu7" value="{{$mahadaly->pendidikanibu7}}" required autocomplete="pendidikanibu7" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($mahadaly->pendidikanibu7 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($mahadaly->pendidikanibu7 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($mahadaly->pendidikanibu7 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($mahadaly->pendidikanibu7 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($mahadaly->pendidikanibu7 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($mahadaly->pendidikanibu7 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($mahadaly->pendidikanibu7 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu7')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu                       
                <div class="col-md-6">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu7" type="text" class="form-control @error('pekerjaanibu7') is-invalid @enderror" name="pekerjaanibu7" value="{{$mahadaly->pekerjaanibu7}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu7" autofocus>
                  @error('pekerjaanibu7')
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
                  <select id="inputState" class="form-control" id="pekerjaanibu7" class="form-control @error('pekerjaanibu7') is-invalid @enderror" name="pekerjaanibu7" value="{{$mahadaly->pekerjaanibu7}}" required autocomplete="pekerjaanibu7" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($mahadaly->pekerjaanibu7 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($mahadaly->pekerjaanibu7 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($mahadaly->pekerjaanibu7 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($mahadaly->pekerjaanibu7 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($mahadaly->pekerjaanibu7 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($mahadaly->pekerjaanibu7 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($mahadaly->pekerjaanibu7 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($mahadaly->pekerjaanibu7 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($mahadaly->pekerjaanibu7 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($mahadaly->pekerjaanibu7 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($mahadaly->pekerjaanibu7 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($mahadaly->pekerjaanibu7 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu7')
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
                  <input id="penghasilan7" type="text" class="form-control @error('penghasilan7') is-invalid @enderror" name="penghasilan7" value="{{$mahadaly->penghasilan7}}" placeholder="Penghasilan" required autocomplete="penghasilan7" autofocus>
                  @error('penghasilan7')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
-->
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan7" class="form-control @error('penghasilan7') is-invalid @enderror" name="penghasilan7" value="{{$mahadaly->penghasilan7}}" required autocomplete="penghasilan7" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($mahadaly->penghasilan7 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($mahadaly->penghasilan7 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($mahadaly->penghasilan7 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($mahadaly->penghasilan7 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($mahadaly->penghasilan7 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($mahadaly->penghasilan7 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan7')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih 
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi7" type="text" class="form-control @error('prestasi7') is-invalid @enderror" name="prestasi7" value="{{$mahadaly->prestasi7}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi7" autofocus>
                  @error('prestasi7')
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
                  <input id="nohp7" type="text" class="form-control @error('nohp7') is-invalid @enderror" name="nohp7" value="{{$mahadaly->nohp7}}" placeholder="No HP" required autocomplete="nohp7" autofocus>
                  @error('nohp7')
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

            