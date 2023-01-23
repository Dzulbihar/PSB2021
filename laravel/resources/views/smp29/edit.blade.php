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
          <a href="{{url('smp29')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
        </div>

        <!-- Tabel -->
        <div class="card">

          <br><br>
          <div class="card-header">
            <h2> <b>Edit Data SMP 2 KELAS 9 </b> </h2>
          </div>
          <br>
<!-- Data Edit lalu Update -->

<!-- Formulir __________________________________________________________________________________ -->
          <div class="card-body">

<form action="{{ url('smp29') }}/{{$smp29->id}}/{{('update')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

<!-- Nama Lengkap -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Nama Lengkap</label>
                  <input id="namalengkap29" type="text" class="form-control @error('namalengkap29') is-invalid @enderror" name="namalengkap29" value="{{$smp29->namalengkap29}}" placeholder="Nama Lengkap" required autocomplete="namalengkap29" autofocus>
                  @error('namalengkap29')
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
                  <select id="inputState" class="form-control" id="status29" class="form-control @error('status29') is-invalid @enderror" name="status29">
                    <option selected>-- Status --</option>
                    <option value="KELAS A" @if($smp29->status29 == 'KELAS A') selected @endif> KELAS A </option>
                    <option value="KELAS B" @if($smp29->status29 == 'KELAS B') selected @endif> KELAS B </option>
                    <option value="KELAS C" @if($smp29->status29 == 'KELAS C') selected @endif> KELAS C </option>
                    <option value="KELAS D" @if($smp29->status29 == 'KELAS D') selected @endif> KELAS D </option>
                    <option value="KELAS E" @if($smp29->status29 == 'KELAS E') selected @endif> KELAS E </option>
                    <option value="KELAS F" @if($smp29->status29 == 'KELAS F') selected @endif> KELAS F </option>
                  </select>
                  @error('status29')
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
                  <input id="status29" type="text" class="form-control @error('status29') is-invalid @enderror" name="status29" value="{{$smp29->status29}}" placeholder="Status" >
                  @error('status29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!--  __________________________________________________________________________________ -->

<!-- Avatar      -->                
              <div class="form-group row">
                  <label for="avatar29">Foto (size max 1.90 mb)</label>
                  <input id="avatar29" type="file" class="form-control @error('avatar29') is-invalid @enderror" name="avatar29" value="{{$smp29->avatar29}}" placeholder="Avatar">
                  @error('avatar29')
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
                  <input id="nisn29" type="text" class="form-control @error('nisn29') is-invalid @enderror" name="nisn29" value="{{$smp29->nisn29}}" placeholder="NISN" required autocomplete="nisn29" autofocus>
                  @error('nisn29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK -->
                <div class="col-md-4">
                  <label>NIK</label>
                  <input id="nik29" type="text" class="form-control @error('nik29') is-invalid @enderror" name="nik29" value="{{$smp29->nik29}}" placeholder="NIK" required autocomplete="nik29" autofocus>
                  @error('nik29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
<!-- No KK -->
                <div class="col-md-4">
                  <label>No KK</label>
                  <input id="nokk29" type="text" class="form-control @error('nokk29') is-invalid @enderror" name="nokk29" value="{{$smp29->nokk29}}" placeholder="No KK" required autocomplete="nokk29" autofocus>
                  @error('nokk29')
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
                  <input id="tempatlahir29" type="text" class="form-control @error('tempatlahir29') is-invalid @enderror" name="tempatlahir29" value="{{$smp29->tempatlahir29}}" placeholder="Tempat Lahir" required autocomplete="tempatlahir29" autofocus>
                  @error('tempatlahir29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input id="tbt29" type="text" class="form-control @error('tbt29') is-invalid @enderror" name="tbt29" value="{{$smp29->tbt29}}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt29" autofocus>
                  @error('tbt29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <input id="jenkel29" type="text" class="form-control @error('jenkel29') is-invalid @enderror" name="jenkel29" value="{{$smp29->jenkel29}}" placeholder="Jenis Kelamin" required autocomplete="jenkel29" autofocus>
                  @error('jenkel29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Jenis Kelamin
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel29" class="form-control @error('jenkel29') is-invalid @enderror" name="jenkel29" required autocomplete="jenkel29" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki" @if($smp29->jenkel29 == 'Laki-laki') selected @endif> Laki-laki </option>
                    <option value="Perempuan" @if($smp29->jenkel29 == 'Perempuan') selected @endif> Perempuan </option>
                  </select>
                  @error('jenkel29')
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
                  <input id="desa29" type="text" class="form-control @error('desa29') is-invalid @enderror" name="desa29" value="{{$smp29->desa29}}" placeholder="Desa" required autocomplete="desa29" autofocus>
                  @error('desa29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kecamatan -->
                <div class="col-md-6">
                  <label>Kecamatan</label>
                  <input id="kec29" type="text" class="form-control @error('kec29') is-invalid @enderror" name="kec29" value="{{$smp29->kec29}}" placeholder="Kecamatan" required autocomplete="kec29" autofocus>
                  @error('kec29')
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
                  <input id="kab29" type="text" class="form-control @error('kab29') is-invalid @enderror" name="kab29" value="{{$smp29->kab29}}" placeholder="Kabupaten / Kota" required autocomplete="kab29" autofocus>
                  @error('kab29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Provinsi -->
                <div class="col-md-4">
                  <label>Provinsi</label>
                  <input id="prov29" type="text" class="form-control @error('prov29') is-invalid @enderror" name="prov29" value="{{$smp29->prov29}}" placeholder="Provinsi" required autocomplete="prov29" autofocus>
                  @error('prov29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Kode Pos -->
                <div class="col-md-4">
                  <label>Kode Pos</label>
                  <input id="kodepos29" type="text" class="form-control @error('kodepos29') is-invalid @enderror" name="kodepos29" value="{{$smp29->kodepos29}}" placeholder="Kode Pos" required autocomplete="kodepos29" autofocus>
                  @error('kodepos29')
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
                  <input id="cita29" type="text" class="form-control @error('cita29') is-invalid @enderror" name="cita29" value="{{$smp29->cita29}}" placeholder="Alamat Lengkap" required autocomplete="cita29" autofocus>
                  @error('cita29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Jumlah Saudara Kandung -->
                <div class="col-md-6">
                  <label>Jumlah Saudara</label>
                  <input id="jumlahsaudara29" type="number" class="form-control @error('jumlahsaudara29') is-invalid @enderror" name="jumlahsaudara29" value="{{$smp29->jumlahsaudara29}}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara29" autofocus>
                  @error('jumlahsaudara29')
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
                  <input id="asalsekolah29" type="text" class="form-control @error('asalsekolah29') is-invalid @enderror" name="asalsekolah29" value="{{$smp29->asalsekolah29}}" placeholder="Asal Sekolah" required autocomplete="asalsekolah29" autofocus>
                  @error('asalsekolah29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Alamat Asal Sekolah -->
                <div class="col-md-6">
                  <label>Alamat Asal Sekolah</label>
                  <input id="alamatasalsekolah29" type="text" class="form-control @error('alamatasalsekolah29') is-invalid @enderror" name="alamatasalsekolah29" value="{{$smp29->alamatasalsekolah29}}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah29" autofocus>
                  @error('alamatasalsekolah29')
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
                  <input id="namaayah29" type="text" class="form-control @error('namaayah29') is-invalid @enderror" name="namaayah29" value="{{$smp29->namaayah29}}" placeholder="Nama Ayah" required autocomplete="namaayah29" autofocus>
                  @error('namaayah29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- NIK Ayah -->
                <div class="col-md-6">
                  <label>NIK Ayah</label>
                  <input id="nikayah29" type="text" class="form-control @error('nikayah29') is-invalid @enderror" name="nikayah29" value="{{$smp29->nikayah29}}" placeholder="NIK Ayah" required autocomplete="nikayah29" autofocus>
                  @error('nikayah29')
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
                  <input id="tahunlahirayah29" type="text" class="form-control @error('tahunlahirayah29') is-invalid @enderror" name="tahunlahirayah29" value="{{$smp29->tahunlahirayah29}}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah29" autofocus>
                  @error('tahunlahirayah29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ayah</label>
                  <input id="pendidikanayah29" type="text" class="form-control @error('pendidikanayah29') is-invalid @enderror" name="pendidikanayah29" value="{{$smp29->pendidikanayah29}}" placeholder="Pendidikan Ayah" required autocomplete="pendidikanayah29" autofocus>
                  @error('pendidikanayah29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- Pendidikan Ayah
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanayah29" class="form-control @error('pendidikanayah29') is-invalid @enderror" name="pendidikanayah29" value="{{$smp29->pendidikanayah29}}" required autocomplete="pendidikanayah29" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp29->pendidikanayah29 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp29->pendidikanayah29 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp29->pendidikanayah29 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp29->pendidikanayah29 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp29->pendidikanayah29 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp29->pendidikanayah29 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp29->pendidikanayah29 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanayah29')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ayah -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ayah</label>
                  <input id="pekerjaanayah29" type="text" class="form-control @error('pekerjaanayah29') is-invalid @enderror" name="pekerjaanayah29" value="{{$smp29->pekerjaanayah29}}" placeholder="Pekerjaan Ayah" required autocomplete="pekerjaanayah29" autofocus>
                  @error('pekerjaanayah29')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ayah 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanayah29" class="form-control @error('pekerjaanayah29') is-invalid @enderror" name="pekerjaanayah29" value="{{$smp29->pekerjaanayah29}}" required autocomplete="pekerjaanayah29" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp29->pekerjaanayah29 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp29->pekerjaanayah29 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp29->pekerjaanayah29 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp29->pekerjaanayah29 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp29->pekerjaanayah29 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp29->pekerjaanayah29 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp29->pekerjaanayah29 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp29->pekerjaanayah29 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp29->pekerjaanayah29 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp29->pekerjaanayah29 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp29->pekerjaanayah29 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp29->pekerjaanayah29 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanayah29')
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
                  <input id="namaibu29" type="text" class="form-control @error('namaibu29') is-invalid @enderror" name="namaibu29" value="{{$smp29->namaibu29}}" placeholder="Nama Ibu" required autocomplete="namaibu29" autofocus>
                  @error('namaibu29')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- NIK Ibu -->
                <div class="col-md-6">
                  <label>NIK Ibu</label>
                  <input id="nikibu29" type="text" class="form-control @error('nikibu29') is-invalid @enderror" name="nikibu29" value="{{$smp29->nikibu29}}" placeholder="NIK Ibu" required autocomplete="nikibu29" autofocus>
                  @error('nikibu29')
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
                  <input id="tahunlahiribu29" type="text" class="form-control @error('tahunlahiribu29') is-invalid @enderror" name="tahunlahiribu29" value="{{$smp29->tahunlahiribu29}}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu29" autofocus>
                  @error('tahunlahiribu29')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu -->                        
                <div class="col-md-4">
                  <label>Pendidikan Ibu</label>
                  <input id="pendidikanibu29" type="text" class="form-control @error('pendidikanibu29') is-invalid @enderror" name="pendidikanibu29" value="{{$smp29->pendidikanibu29}}" placeholder="Pendidikan Ibu" required autocomplete="pendidikanibu29" autofocus>
                  @error('pendidikanibu29')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Pendidikan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pendidikanibu29" class="form-control @error('pendidikanibu29') is-invalid @enderror" name="pendidikanibu29" value="{{$smp29->pendidikanibu29}}" required autocomplete="pendidikanibu29" autofocus>
                    <option selected>-- Pendidikan --</option>
                    <option value="TAMAT SD/MI" @if($smp29->pendidikanibu29 == 'TAMAT SD/MI') selected @endif> TAMAT SD/MI </option>
                    <option value="TAMAT SMP/MTS" @if($smp29->pendidikanibu29 == 'TAMAT SMP/MTS') selected @endif> TAMAT SMP/MTS </option>
                    <option value="TAMAT SMA/SMK/MA" @if($smp29->pendidikanibu29 == 'TAMAT SMA/SMK/MA') selected @endif> TAMAT SMA/SMK/MA </option>
                    <option value="DIPLOMA" @if($smp29->pendidikanibu29 == 'DIPLOMA') selected @endif> DIPLOMA </option>
                    <option value="SARJANA" @if($smp29->pendidikanibu29 == 'SARJANA') selected @endif> SARJANA </option>
                    <option value="PASCA SARJANA" @if($smp29->pendidikanibu29 == 'PASCA SARJANA') selected @endif> PASCA SARJANA </option>
                    <option value="TIDAK TAMAT SD / TIDAK SEKOLAH" @if($smp29->pendidikanibu29 == 'TIDAK TAMAT SD / TIDAK SEKOLAH') selected @endif> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                  </select>
                  @error('pendidikanibu29')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                              
                </div>
-->
<!-- Pekerjaan Ibu -->                        
                <div class="col-md-4">
                  <label>Pekerjaan Ibu</label>
                  <input id="pekerjaanibu29" type="text" class="form-control @error('pekerjaanibu29') is-invalid @enderror" name="pekerjaanibu29" value="{{$smp29->pekerjaanibu29}}" placeholder="Pekerjaan Ibu" required autocomplete="pekerjaanibu29" autofocus>
                  @error('pekerjaanibu29')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
<!-- Pekerjaan Ibu 
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="pekerjaanibu29" class="form-control @error('pekerjaanibu29') is-invalid @enderror" name="pekerjaanibu29" value="{{$smp29->pekerjaanibu29}}" required autocomplete="pekerjaanibu29" autofocus>
                    <option selected>-- Pekerjaan --</option>
                    <option value="SWASTA" @if($smp29->pekerjaanibu29 == 'SWASTA') selected @endif> SWASTA </option>
                    <option value="PNS" @if($smp29->pekerjaanibu29 == 'PNS') selected @endif> PNS </option>
                    <option value="PETANI" @if($smp29->pekerjaanibu29 == 'PETANI') selected @endif> PETANI </option>
                    <option value="WIRASWASTA" @if($smp29->pekerjaanibu29 == 'WIRASWASTA') selected @endif> WIRASWASTA </option>
                    <option value="PENSIUNAN" @if($smp29->pekerjaanibu29 == 'PENSIUNAN') selected @endif> PENSIUNAN </option>
                    <option value="BURUH" @if($smp29->pekerjaanibu29 == 'BURUH') selected @endif> BURUH </option>
                    <option value="TIDAK BEKERJA / DI RUMAH" @if($smp29->pekerjaanibu29 == 'TIDAK BEKERJA / DI RUMAH') selected @endif> TIDAK BEKERJA / DI RUMAH </option>
                    <option value="TNI" @if($smp29->pekerjaanibu29 == 'TNI') selected @endif> TNI </option>
                    <option value="POLRI" @if($smp29->pekerjaanibu29 == 'POLRI') selected @endif> POLRI </option>
                    <option value="GURU / DOSEN" @if($smp29->pekerjaanibu29 == 'GURU / DOSEN') selected @endif> GURU / DOSEN </option>
                    <option value="PEDAGANG" @if($smp29->pekerjaanibu29 == 'PEDAGANG') selected @endif> PEDAGANG </option>
                    <option value="Alm" @if($smp29->pekerjaanibu29 == 'Alm') selected @endif> Alm </option>
                  </select>
                  @error('pekerjaanibu29')
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
                  <input id="penghasilan29" type="text" class="form-control @error('penghasilan29') is-invalid @enderror" name="penghasilan29" value="{{$smp29->penghasilan29}}" placeholder="Penghasilan" required autocomplete="penghasilan29" autofocus>
                  @error('penghasilan29')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
<!-- Penghasilan                       
              <div class="form-group row">
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="penghasilan29" class="form-control @error('penghasilan29') is-invalid @enderror" name="penghasilan29" value="{{$smp29->penghasilan29}}" required autocomplete="penghasilan29" autofocus>
                    <option selected>-- Penghasilan --</option>
                    <option value="< Rp. 1.000.000,-/BULAN" @if($smp29->penghasilan29 == '< Rp. 1.000.000,-/BULAN') selected @endif> < Rp. 1.000.000,-/BULAN </option>
                    <option value="Rp. 1.000.000 - > 2.000.000,-/BULAN" @if($smp29->penghasilan29 == 'Rp. 1.000.000 - > 2.000.000,-/BULAN') selected @endif> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                    <option value="Rp. 2.000.000 - > 3.000.000,-/BULAN" @if($smp29->penghasilan29 == 'Rp. 2.000.000 - > 3.000.000,-/BULAN') selected @endif> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                    <option value="Rp. 3.000.000 - > 5.000.000,-/BULAN" @if($smp29->penghasilan29 == 'Rp. 3.000.000 - > 5.000.000,-/BULAN') selected @endif> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                    <option value="Rp. 5.000.000 - > 10.000.000,-/BULAN" @if($smp29->penghasilan29 == 'Rp. 5.000.000 - > 10.000.000,-/BULAN') selected @endif> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                    <option value="> Rp. 10.000.000,-/BULAN" @if($smp29->penghasilan29 == '> Rp. 10.000.000,-/BULAN') selected @endif> > Rp. 10.000.000,-/BULAN </option>
                  </select>
                  @error('penghasilan29')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror                             
                </div>
-->  
<!-- Prestasi yang pernah di raih -->
                <div class="col-md-6">
                  <label>Prestasi yang pernah di raih</label>
                  <input id="prestasi29" type="text" class="form-control @error('prestasi29') is-invalid @enderror" name="prestasi29" value="{{$smp29->prestasi29}}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi29" autofocus>
                  @error('prestasi29')
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
                  <input id="nohp29" type="text" class="form-control @error('nohp29') is-invalid @enderror" name="nohp29" value="{{$smp29->nohp29}}" placeholder="No HP" required autocomplete="nohp29" autofocus>
                  @error('nohp29')
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

            