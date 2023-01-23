@extends('layouts.master')


@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          
          <!-- TABLE HOVER -->
          <div class="panel">
            <div class="panel-heading">

              <div class="col-md-4">
                <!-- Button trigger modal -->
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"> <i class="lnr lnr-plus-circle">
                  Tambah Data
                </i> </button>
              </div>

              <h1 class="panel-title"><b>Data Santri Baru Daftar Online</b></h1>
              
            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Waktu</th>
                      <th scope="col">JENJANG</th>
                      <th scope="col">Fasilitas</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Tempat Tanggal Lahir</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Pekerja Ayah</th>
                      <th scope="col">No HP</th>
                      <th scope="col">TES</th>
                      <th scope="col">AKSI</th>

                    </tr>
                  </thead>
                  <tbody>

                    <!-- Variabel php untuk nomor-->    <?php
                    $nomer = 1;
                    ?>
                    <!-- ambil data di database-->
                    @foreach($data_siswa as $siswa)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>{{ $siswa->created_at}}</td>
                      <td>{{ $siswa->status}}</td>
                      <td> {{ $siswa->fasilitas}}  </td>
                      <td> {{ $siswa->namalengkap}}  </td>
                      <td>{{ $siswa->tempatlahir}}, {{ $siswa->tbt}}</td>
                      <td>{{ $siswa->jenkel}}</td>
                      <td>{{ $siswa->pekerjaanayah}}</td>
                      <td>{{ $siswa->nohp}}</td>
                      <td> <b>  {{ $siswa->tes}} </b> </td>
                      <td>
                        <a href="{{url('siswa')}}/{{$siswa->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSiswa">
                 Import Excel
               </a> 
               <a href="{{ url('siswa/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
               <a href="{{ url('rekapan/administrasi/siswa') }}" class="btn btn-sm btn-danger"> Rekapan Administrasi </a>
             </div>

           </div>
         </div>
         <!-- END TABLE HOVER -->


       </div>
     </div>
   </div>
 </div>
</div>

<!-- Notifikasi ------------------------------------------------- -->
@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif


<!-- Modal ------------------------------------------------- -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('siswa/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name"><b> NAMA LABEL </b></label>t -->
          <!-- type = format --> 
          <!-- class = bentuk form -->
          <!-- id = tempat penyimpanan -->
          <!-- placeholder = nama tidak terlihat -->
          <!-- value = nama otomatis muncul -->
          <!-- required = wajib di isi -->
          <!-- <div class="valid-feedback"> = tulisan kecil di bawah -->

            <!-- Tanggal Masuk                        
            <div class="form-group row">
              <div class="col-md-4">
                <label> Tanggal Masuk </label>
                <input id="tanggal_masuk" type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}" placeholder="Nama Lengkap" required autocomplete="tanggal_masuk" autofocus>
                @error('tanggal_masuk')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            --> 

<!-- Jalur --> 
              <div class="form-group row">
                <div class="col-md-6">
                  <input readonly id="jalur" type="password" class="form-control" name="jalur" value="Online" required autocomplete="jalur" autofocus>
                  @error('jalur')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 

            <!-- Bulan Pendaftaran 
              <div class="col-md-4">
                <label> Bulan Pendaftaran </label>
                <select id="inputState" class="form-control" id="bulan" class="form-control @error('bulan') is-invalid @enderror" name="bulan" value="{{ old('bulan') }}" required autocomplete="bulan" autofocus>
                  <option selected>-- Pilih Bulan --</option>
                  <option> Januari </option>
                  <option> Februari </option>
                  <option> Maret </option>
                  <option> April </option>
                  <option> Mei </option>
                  <option> Juni </option>
                  <option> Juli </option>
                  <option> Agustus </option>
                  <option> September </option>
                  <option> Oktober </option>
                  <option> November </option>
                  <option> Desember </option>
                </select>
                @error('bulan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              -->

            <!-- Bulan Pendaftaran -->                        
              <div class="col-md-6">
                <label> Bulan Pendaftaran </label>
                <input readonly id="bulan" type="text" class="form-control @error('bulan') is-invalid @enderror" name="bulan" value="Maret"  required autocomplete="bulan" autofocus>
              </div>
            </div>

            <!-- Status -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <label> Jenjang  </label>
                <select id="inputState" class="form-control" id="status" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>
                  <option selected>-- Jenjang --</option>
                  <option> SMP 1 </option>
                  <option> SMP 2 </option>
                  <option> MTs </option>
                  <option> SMK TKJ </option>
                  <option> SMK TKR </option>
                  <option> MA </option>
                  <option> Mahad Aly </option>
                </select>
                @error('status')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
            </div>
            

            <!-- Fasilitas -->
            <div class="form-group row">
              <div class="col-md-12">
                <label> Fasilitas </label>
                <select id="inputState" class="form-control" id="fasilitas" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" value="{{ old('fasilitas') }}" required autocomplete="fasilitas" autofocus>
                  <option selected>-- Pilih Fasilitas --</option>
                  <option> Reguler </option>
                  <option> Non Reguler </option>
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
                <label> Nama Lengkap </label>
                <input id="namalengkap" type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" value="{{ old('namalengkap') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap" autofocus>
                @error('namalengkap')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>


            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <label> Tempat Lahir </label>
                <input id="tempatlahir" type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir" autofocus>
                @error('tempatlahir')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <label> Tanggal Lahir </label>
                <input id="tbt" type="date" class="form-control @error('tbt') is-invalid @enderror" name="tbt" value="{{ old('tbt') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt" autofocus>
                @error('tbt')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <label> Jenis Kelamin </label>
                <select id="inputState" class="form-control" id="jenkel" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" value="{{ old('jenkel') }}" required autocomplete="jenkel" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <label> Alamat rt/rw </label>
                <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{ old('desa') }}" placeholder="Desa" required autocomplete="desa" autofocus>
                @error('desa')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <label> Kecamatan </label>
                <input id="kec" type="text" class="form-control @error('kec') is-invalid @enderror" name="kec" value="{{ old('kec') }}" placeholder="Kecamatan" required autocomplete="kec" autofocus>
                @error('kec')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <label> Kota </label>
                <input id="kab" type="text" class="form-control @error('kab') is-invalid @enderror" name="kab" value="{{ old('kab') }}" placeholder="Kabupaten / Kota" required autocomplete="kab" autofocus>
                @error('kab')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-6">
                <label> Provinsi </label>
                <input id="prov" type="text" class="form-control @error('prov') is-invalid @enderror" name="prov" value="{{ old('prov') }}" placeholder="Provinsi" required autocomplete="prov" autofocus>
                @error('prov')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap                         
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita" type="text" class="form-control @error('cita') is-invalid @enderror" name="cita" value="{{ old('cita') }}" placeholder="Alamat Lengkap" required autocomplete="cita" autofocus>
                @error('cita')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              -->
              <!-- Jumlah Saudara Kandung 
              <div class="col-md-6">
                <input id="jumlahsaudara" type="number" class="form-control @error('jumlahsaudara') is-invalid @enderror" name="jumlahsaudara" value="{{ old('jumlahsaudara') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara" autofocus>
                @error('jumlahsaudara')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            -->
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <label> Asal Sekolah </label>
                <input id="asalsekolah" type="text" class="form-control @error('asalsekolah') is-invalid @enderror" name="asalsekolah" value="{{ old('asalsekolah') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah" autofocus>
                @error('asalsekolah')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <label> Alamat Asal Sekolah </label>
                <input id="alamatasalsekolah" type="text" class="form-control @error('alamatasalsekolah') is-invalid @enderror" name="alamatasalsekolah" value="{{ old('alamatasalsekolah') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah" autofocus>
                @error('alamatasalsekolah')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <label> Nama Ayah </label>
                <input id="namaayah" type="text" class="form-control @error('namaayah') is-invalid @enderror" name="namaayah" value="{{ old('namaayah') }}" placeholder="Nama Ayah" required autocomplete="namaayah" autofocus>
                @error('namaayah')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
              <!-- NIK Ayah 
              <div class="col-md-6">
                <input id="nikayah" type="number" class="form-control @error('nikayah') is-invalid @enderror" name="nikayah" value="{{ old('nikayah') }}" placeholder="NIK Ayah" required autocomplete="nikayah" autofocus>
                @error('nikayah')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            -->
            <!-- Tahun Lahir Ayah                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah" type="number" class="form-control @error('tahunlahirayah') is-invalid @enderror" name="tahunlahirayah" value="{{ old('tahunlahirayah') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah" autofocus>
                @error('tahunlahirayah')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              --> 
              <!-- Pendidikan Ayah -->
            <div class="form-group row">
              <div class="col-md-6">
                <label> Pendidikan Ayah </label>
                <select id="inputState" class="form-control" id="pendidikanayah" class="form-control @error('pendidikanayah') is-invalid @enderror" name="pendidikanayah" value="{{ old('pendidikanayah') }}" required autocomplete="pendidikanayah" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-6">
                <label> Pekerjaan Ayah </label>
                <select id="inputState" class="form-control" id="pekerjaanayah" class="form-control @error('pekerjaanayah') is-invalid @enderror" name="pekerjaanayah" value="{{ old('pekerjaanayah') }}" required autocomplete="pekerjaanayah" autofocus>
                  <option selected>-- Pekerjaan --</option>
                  <option> SWASTA </option>
                  <option> PNS </option>
                  <option> PETANI </option>
                  <option> WIRASWASTA </option>
                  <option> PENSIUNAN </option>
                  <option> BURUH </option>
                  <option> TIDAK BEKERJA / DI RUMAH </option>
                  <option> TNI </option>
                  <option> POLRI </option>
                  <option> GURU / DOSEN </option>
                  <option> PEDAGANG </option>
                  <option> Alm </option>
                  <option> Lainnya </option>
                </select>
                @error('pekerjaanayah')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <label> Nama Ibu </label>
                <input id="namaibu" type="text" class="form-control @error('namaibu') is-invalid @enderror" name="namaibu" value="{{ old('namaibu') }}" placeholder="Nama Ibu" required autocomplete="namaibu" autofocus>
                @error('namaibu')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
              <!-- NIK Ibu 
              <div class="col-md-6">
                <input id="nikibu" type="number" class="form-control @error('nikibu') is-invalid @enderror" name="nikibu" value="{{ old('nikibu') }}" placeholder="NIK Ibu" required autocomplete="nikibu" autofocus>
                @error('nikibu')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            -->
            <!-- Tahun Lahir Ibu                         
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu" type="number" class="form-control @error('tahunlahiribu') is-invalid @enderror" name="tahunlahiribu" value="{{ old('tahunlahiribu') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu" autofocus>
                @error('tahunlahiribu')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              -->
              <!-- Pendidikan Ibu -->
            <div class="form-group row">
              <div class="col-md-6">
                <label> Pendidikan Ibu </label>
                <select id="inputState" class="form-control" id="pendidikanibu" class="form-control @error('pendidikanibu') is-invalid @enderror" name="pendidikanibu" value="{{ old('pendidikanibu') }}" required autocomplete="pendidikanibu" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-6">
                <label> Pekerjaan Ibu </label>
                <select id="inputState" class="form-control" id="pekerjaanibu" class="form-control @error('pekerjaanibu') is-invalid @enderror" name="pekerjaanibu" value="{{ old('pekerjaanibu') }}" required autocomplete="pekerjaanibu" autofocus>
                  <option selected>-- Pekerjaan --</option>
                  <option> SWASTA </option>
                  <option> PNS </option>
                  <option> PETANI </option>
                  <option> WIRASWASTA </option>
                  <option> PENSIUNAN </option>
                  <option> BURUH </option>
                  <option> TIDAK BEKERJA / DI RUMAH </option>
                  <option> TNI </option>
                  <option> POLRI </option>
                  <option> GURU / DOSEN </option>
                  <option> PEDAGANG </option>
                  <option> Alm </option>
                  <option> Lainnya </option>
                </select>
                @error('pekerjaanibu')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan                         
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan" class="form-control @error('penghasilan') is-invalid @enderror" name="penghasilan" value="{{ old('penghasilan') }}" required autocomplete="penghasilan" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
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
                <input id="prestasi" type="text" class="form-control @error('prestasi') is-invalid @enderror" name="prestasi" value="{{ old('prestasi') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi" autofocus>
                @error('prestasi')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            -->
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <label> No HP </label>
                <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" placeholder="No HP" required autocomplete="nohp" autofocus>
                @error('nohp')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <!-- Tombol -->
            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-2">
                <button type="submit" class="btn btn-primary">
                  Simpan
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>

          </form>  
        </div>
        <!-- EndFormulir __________________________________________________________________________________________ -->
      </div>
    </div>
  </div>
  <!-- EndModal ------------------------------------------------- -->

  <!-- Modal Import Siswa -->
  <div class="modal fade" id="importSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsiswa') }}" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="file" name="file" required="required">
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Import</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

  @endsection

  id="datatable"

  @section('footer')

  <script>
    $(document).ready(function(){

      $('#datatable').DataTable();

      $('.delete').click(function(){
        var siswa_id = $(this).attr('siswa-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data Siswa dengan id "+siswa_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('siswa') }}/"+siswa_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop