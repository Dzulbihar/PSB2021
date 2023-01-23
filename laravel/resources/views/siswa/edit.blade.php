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
          <a href="{{url('siswa')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data Santri Baru Pendaftaran Online </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('siswa') }}/{{$siswa->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Status TES  -->
              <div class="form-group row"> 
                <div class="col-md-12">
                  <label for="">Status TES</label>
                  <select id="inputState" class="form-control" id="tes" class="form-control @error('tes') is-invalid @enderror" name="tes" required autocomplete="tes" autofocus>
                    <option selected>-- Status TES --</option>
                    <option value="BELUM TES" @if($siswa->tes == 'BELUM TES') selected @endif> BELUM TES </option>
                    <option value="SUDAH TES" @if($siswa->tes == 'SUDAH TES') selected @endif> SUDAH TES </option>
                  </select>
                  @error('tes')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror                              
                </div>
              </div>

<!-- Fasilitas  -->
              <div class="form-group row"> 
                <div class="col-md-12">
                  <label for="">Fasilitas</label>
                  <select id="inputState" class="form-control" id="fasilitas" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" required autocomplete="fasilitas" autofocus>
                    <option selected>-- Fasilitas --</option>
                    <option value="Reguler" @if($siswa->fasilitas == 'Reguler') selected @endif> Reguler </option>
                    <option value="Non Reguler" @if($siswa->fasilitas == 'Non Reguler') selected @endif> Non Reguler </option>
                  </select>
                  @error('fasilitas')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror                              
                </div>
              </div>

<!-- Jenjang  -->
              <div class="form-group row"> 
                <div class="col-md-12">
                  <label for="">Jenjang</label>
                  <select id="inputState" class="form-control" id="status" class="form-control @error('status') is-invalid @enderror" name="status" required autocomplete="status" autofocus>
                    <option selected>-- Jenjang --</option>
                    <option value="SMP 1" @if($siswa->status == 'SMP 1') selected @endif> SMP 1 </option>
                    <option value="SMP 2" @if($siswa->status == 'SMP 2') selected @endif> SMP 2 </option>
                    <option value="MTs" @if($siswa->status == 'MTs') selected @endif> MTs </option>
                    <option value="SMK TKJ" @if($siswa->status == 'SMK TKJ') selected @endif> SMK TKJ </option>
                    <option value="SMK TKR" @if($siswa->status == 'SMK TKR') selected @endif> SMK TKR </option>
                    <option value="MA" @if($siswa->status == 'MA') selected @endif> MA </option>
                    <option value="Mahad Aly" @if($siswa->status == 'Mahad Aly') selected @endif> Mahad Aly </option>
                  </select>
                  @error('status')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror                              
                </div>
              </div>

<!-- Status                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Jenjang</label>
                  <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{$siswa->status}}" placeholder="Jenjang" required autocomplete="status" autofocus>
                  @error('status')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
 -->
<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap" type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" value="{{$siswa->namalengkap}}" placeholder="Nama Lengkap" required autocomplete="namalengkap" autofocus>
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
                  <select id="inputState" class="form-control" id="status" class="form-control @error('status') is-invalid @enderror" name="status">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($siswa->status == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($siswa->status == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($siswa->status == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($siswa->status == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($siswa->status == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($siswa->status == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status')
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
                  <label for="avatar">Foto (size max 1.90 mb)</label>
                  <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{$siswa->avatar}}" placeholder="Avatar">
                  @error('avatar')
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
                  <input id="tempatlahir" type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{$siswa->tempatlahir}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir" autofocus>
                  @error('tempatlahir')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt" type="text" class="form-control @error('tbt') is-invalid @enderror" name="tbt" value="{{$siswa->tbt}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt" autofocus>
                  @error('tbt')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin 
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel" type="text" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" value="{{$siswa->jenkel}}" placeholder="Jenis Kelamin" required autocomplete="jenkel" autofocus>
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
                    <option value="Laki-laki" @if($siswa->jenkel == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($siswa->jenkel == 'Perempuan') selected @endif> Perempuan </option>
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
                  <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{$siswa->desa}}" placeholder="Desa" required autocomplete="desa" autofocus>
                  @error('desa')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec" type="text" class="form-control @error('kec') is-invalid @enderror" name="kec" value="{{$siswa->kec}}" placeholder="Kecamatan" required autocomplete="kec" autofocus>
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
                  <input id="kab" type="text" class="form-control @error('kab') is-invalid @enderror" name="kab" value="{{$siswa->kab}}" placeholder="Kabupaten / Kota" required autocomplete="kab" autofocus>
                  @error('kab')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-6">
                  <label>Provinsi</label>
                  <input id="prov" type="text" class="form-control @error('prov') is-invalid @enderror" name="prov" value="{{$siswa->prov}}" placeholder="Provinsi" required autocomplete="prov" autofocus>
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
                  <input id="cita" type="text" class="form-control @error('cita') is-invalid @enderror" name="cita" value="{{$siswa->cita}}" placeholder="Alamat Lengkap" required autocomplete="cita" autofocus>
                  @error('cita')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
-->
<!-- Jumlah Saudara Kandung
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara" type="number" class="form-control @error('jumlahsaudara') is-invalid @enderror" name="jumlahsaudara" value="{{$siswa->jumlahsaudara}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara" autofocus>
                  @error('jumlahsaudara')
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
                  <input id="asalsekolah" type="text" class="form-control @error('asalsekolah') is-invalid @enderror" name="asalsekolah" value="{{$siswa->asalsekolah}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah" autofocus>
                  @error('asalsekolah')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah" type="text" class="form-control @error('alamatasalsekolah') is-invalid @enderror" name="alamatasalsekolah" value="{{$siswa->alamatasalsekolah}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah" autofocus>
                  @error('alamatasalsekolah')
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
                  <input id="namaayah" type="text" class="form-control @error('namaayah') is-invalid @enderror" name="namaayah" value="{{$siswa->namaayah}}" placeholder="Nama Ayah" required autocomplete="namaayah" autofocus>
                  @error('namaayah')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ayah 
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah" type="text" class="form-control @error('nikayah') is-invalid @enderror" name="nikayah" value="{{$siswa->nikayah}}" placeholder="NIK Ayah" required autocomplete="nikayah" autofocus>
                  @error('nikayah')
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
                  <input id="tahunlahirayah" type="text" class="form-control @error('tahunlahirayah') is-invalid @enderror" name="tahunlahirayah" value="{{$siswa->tahunlahirayah}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah" autofocus>
                  @error('tahunlahirayah')
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
                  <input id="pendidikanayah" type="text" class="form-control @error('pendidikanayah') is-invalid @enderror" name="pendidikanayah" value="{{$siswa->pendidikanayah}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah" autofocus>
                  @error('pendidikanayah')
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
                  <select id="inputState" class="form-control" id="pendidikanayah" class="form-control @error('pendidikanayah') is-invalid @enderror" name="pendidikanayah" value="{{$siswa->pendidikanayah}}" required autocomplete="pendidikanayah" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($siswa->pendidikanayah == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($siswa->pendidikanayah == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($siswa->pendidikanayah == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($siswa->pendidikanayah == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($siswa->pendidikanayah == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($siswa->pendidikanayah == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($siswa->pendidikanayah == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ayah                        
                <div class="col-md-6">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah" type="text" class="form-control @error('pekerjaanayah') is-invalid @enderror" name="pekerjaanayah" value="{{$siswa->pekerjaanayah}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah" autofocus>
                  @error('pekerjaanayah')
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
                  <select id="inputState" class="form-control" id="pekerjaanayah" class="form-control @error('pekerjaanayah') is-invalid @enderror" name="pekerjaanayah" value="{{$siswa->pekerjaanayah}}" required autocomplete="pekerjaanayah" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($siswa->pekerjaanayah == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($siswa->pekerjaanayah == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($siswa->pekerjaanayah == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($siswa->pekerjaanayah == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($siswa->pekerjaanayah == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($siswa->pekerjaanayah == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($siswa->pekerjaanayah == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($siswa->pekerjaanayah == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($siswa->pekerjaanayah == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($siswa->pekerjaanayah == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($siswa->pekerjaanayah == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($siswa->pekerjaanayah == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah')
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
                  <input id="namaibu" type="text" class="form-control @error('namaibu') is-invalid @enderror" name="namaibu" value="{{$siswa->namaibu}}" placeholder="Nama Ibu" required autocomplete="namaibu" autofocus>
                  @error('namaibu')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- NIK Ibu 
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu" type="text" class="form-control @error('nikibu') is-invalid @enderror" name="nikibu" value="{{$siswa->nikibu}}" placeholder="NIK Ibu" required autocomplete="nikibu" autofocus>
                  @error('nikibu')
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
                  <input id="tahunlahiribu" type="text" class="form-control @error('tahunlahiribu') is-invalid @enderror" name="tahunlahiribu" value="{{$siswa->tahunlahiribu}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu" autofocus>
                  @error('tahunlahiribu')
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
                  <input id="pendidikanibu" type="text" class="form-control @error('pendidikanibu') is-invalid @enderror" name="pendidikanibu" value="{{$siswa->pendidikanibu}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu" autofocus>
                  @error('pendidikanibu')
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
                  <select id="inputState" class="form-control" id="pendidikanibu" class="form-control @error('pendidikanibu') is-invalid @enderror" name="pendidikanibu" value="{{$siswa->pendidikanibu}}" required autocomplete="pendidikanibu" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($siswa->pendidikanibu == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($siswa->pendidikanibu == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($siswa->pendidikanibu == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($siswa->pendidikanibu == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($siswa->pendidikanibu == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($siswa->pendidikanibu == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($siswa->pendidikanibu == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>

<!-- Pekerjaan Ibu                         
                <div class="col-md-6">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu" type="text" class="form-control @error('pekerjaanibu') is-invalid @enderror" name="pekerjaanibu" value="{{$siswa->pekerjaanibu}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu" autofocus>
                  @error('pekerjaanibu')
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
                  <select id="inputState" class="form-control" id="pekerjaanibu" class="form-control @error('pekerjaanibu') is-invalid @enderror" name="pekerjaanibu" value="{{$siswa->pekerjaanibu}}" required autocomplete="pekerjaanibu" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($siswa->pekerjaanibu == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($siswa->pekerjaanibu == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($siswa->pekerjaanibu == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($siswa->pekerjaanibu == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($siswa->pekerjaanibu == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($siswa->pekerjaanibu == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($siswa->pekerjaanibu == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($siswa->pekerjaanibu == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($siswa->pekerjaanibu == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($siswa->pekerjaanibu == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($siswa->pekerjaanibu == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($siswa->pekerjaanibu == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu')
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
                  <input id="penghasilan" type="text" class="form-control @error('penghasilan') is-invalid @enderror" name="penghasilan" value="{{$siswa->penghasilan}}" placeholder="Penghasilan" required autocomplete="penghasilan" autofocus>
                  @error('penghasilan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
-->
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan" class="form-control @error('penghasilan') is-invalid @enderror" name="penghasilan" value="{{$siswa->penghasilan}}" required autocomplete="penghasilan" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($siswa->penghasilan == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($siswa->penghasilan == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($siswa->penghasilan == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($siswa->penghasilan == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($siswa->penghasilan == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($siswa->penghasilan == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih 
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi" type="text" class="form-control @error('prestasi') is-invalid @enderror" name="prestasi" value="{{$siswa->prestasi}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi" autofocus>
                  @error('prestasi')
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
                  <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{$siswa->nohp}}" placeholder="No HP" required autocomplete="nohp" autofocus>
                  @error('nohp')
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

            