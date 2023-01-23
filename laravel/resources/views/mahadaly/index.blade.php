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

              <h1 class="panel-title"><b>Data Mahasantri Baru Jenjang Mahad Aly</b></h1>
              
            </div>
            
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Fasilitas</th>
                      <th scope="col">Tempat Lahir</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Tempat Tinggal</th>
                      <th scope="col">Nama Ayah</th>
                      <th scope="col">Pekerja Ayah</th>
                      <th scope="col">No HP</th>
                      <th scope="col">AKSI</th>

                    </tr>
                  </thead>
                  <tbody>

                    <!-- Variabel php untuk nomor-->    <?php
                    $nomer = 1;
                    ?>
                    <!-- ambil data di database-->
                    @foreach($data_mahadaly as $mahadaly)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $mahadaly->namalengkap}}   </td>
                      <td>{{ $mahadaly->fasilitas}}</td>
                      <td>{{ $mahadaly->tempatlahir7}}</td>
                      <td>{{ $mahadaly->jenkel}}</td>
                      <td>{{ $mahadaly->kab}}</td>
                      <td>{{ $mahadaly->namaayah7}}</td>
                      <td>{{ $mahadaly->pekerjaanayah7}}</td>
                      <td>{{ $mahadaly->nohp7}}</td>
                      <td>
                        <a href="{{url('mahadaly')}}/{{$mahadaly->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('mahadaly') }}/{{$mahadaly->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importMahadaly">
                 Import Excel
               </a> 
               <a href="{{ url('mahadaly/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
               <a href="{{ url('rekapan/administrasi/mahadaly') }}" class="btn btn-sm btn-danger"> Rekapan Administrasi </a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data mahadaly</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('mahadaly/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name7"><b> NAMA LABEL </b></label>t -->
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

            <!-- Jalur Pendaftaran -->
            <div class="form-group row">
              <div class="col-md-4">
                <label> Jalur Pendaftaran </label>
                <input readonly id="jalur" type="text" class="form-control @error('jalur') is-invalid @enderror" name="jalur" value="Offline"  required autocomplete="jalur" autofocus>
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
              <div class="col-md-4">
                <label> Bulan Pendaftaran </label>
                <input readonly id="bulan" type="text" class="form-control @error('bulan') is-invalid @enderror" name="bulan" value="Maret"  required autocomplete="bulan" autofocus>
              </div>

            <!-- Status -->                        
              <div class="col-md-4">
                <label> Jenjang </label>
                <input readonly id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="Mahad Aly"  required autocomplete="status" autofocus>
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
                <input id="tempatlahir7" type="text" class="form-control @error('tempatlahir7') is-invalid @enderror" name="tempatlahir7" value="{{ old('tempatlahir7') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir7" autofocus>
                @error('tempatlahir7')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <label> Tanggal Lahir </label>
                <input id="tbt7" type="date" class="form-control @error('tbt7') is-invalid @enderror" name="tbt7" value="{{ old('tbt7') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt7" autofocus>
                @error('tbt7')
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
                <input id="cita7" type="text" class="form-control @error('cita7') is-invalid @enderror" name="cita7" value="{{ old('cita7') }}" placeholder="Alamat Lengkap" required autocomplete="cita7" autofocus>
                @error('cita7')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              --> 
              <!-- Jumlah Saudara Kandung 
              <div class="col-md-6">
                <input id="jumlahsaudara7" type="number" class="form-control @error('jumlahsaudara7') is-invalid @enderror" name="jumlahsaudara7" value="{{ old('jumlahsaudara7') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara7" autofocus>
                @error('jumlahsaudara7')
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
                <input id="asalsekolah7" type="text" class="form-control @error('asalsekolah7') is-invalid @enderror" name="asalsekolah7" value="{{ old('asalsekolah7') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah7" autofocus>
                @error('asalsekolah7')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <label> Alamat Asal Sekolah </label>
                <input id="alamatasalsekolah7" type="text" class="form-control @error('alamatasalsekolah7') is-invalid @enderror" name="alamatasalsekolah7" value="{{ old('alamatasalsekolah7') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah7" autofocus>
                @error('alamatasalsekolah7')
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
                <input id="namaayah7" type="text" class="form-control @error('namaayah7') is-invalid @enderror" name="namaayah7" value="{{ old('namaayah7') }}" placeholder="Nama Ayah" required autocomplete="namaayah7" autofocus>
                @error('namaayah7')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
               </div>
              <!-- NIK Ayah 
              <div class="col-md-6">
                <input id="nikayah7" type="number" class="form-control @error('nikayah7') is-invalid @enderror" name="nikayah7" value="{{ old('nikayah7') }}" placeholder="NIK Ayah" required autocomplete="nikayah7" autofocus>
                @error('nikayah7')
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
                <input id="tahunlahirayah7" type="number" class="form-control @error('tahunlahirayah7') is-invalid @enderror" name="tahunlahirayah7" value="{{ old('tahunlahirayah7') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah7" autofocus>
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
                <label> Pendidikan Ayah </label>
                <select id="inputState" class="form-control" id="pendidikanayah7" class="form-control @error('pendidikanayah7') is-invalid @enderror" name="pendidikanayah7" value="{{ old('pendidikanayah7') }}" required autocomplete="pendidikanayah7" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah7')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-6">
                <label> Pekerjaan Ayah </label>
                <select id="inputState" class="form-control" id="pekerjaanayah7" class="form-control @error('pekerjaanayah7') is-invalid @enderror" name="pekerjaanayah7" value="{{ old('pekerjaanayah7') }}" required autocomplete="pekerjaanayah7" autofocus>
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
                @error('pekerjaanayah7')
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
                <input id="namaibu7" type="text" class="form-control @error('namaibu7') is-invalid @enderror" name="namaibu7" value="{{ old('namaibu7') }}" placeholder="Nama Ibu" required autocomplete="namaibu7" autofocus>
                @error('namaibu7')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              </div>
              <!-- NIK Ibu 
              <div class="col-md-6">
                <input id="nikibu7" type="number" class="form-control @error('nikibu7') is-invalid @enderror" name="nikibu7" value="{{ old('nikibu7') }}" placeholder="NIK Ibu" required autocomplete="nikibu7" autofocus>
                @error('nikibu7')
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
                <input id="tahunlahiribu7" type="number" class="form-control @error('tahunlahiribu7') is-invalid @enderror" name="tahunlahiribu7" value="{{ old('tahunlahiribu7') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu7" autofocus>
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
                <label> Pendidikan Ibu </label>
                <select id="inputState" class="form-control" id="pendidikanibu7" class="form-control @error('pendidikanibu7') is-invalid @enderror" name="pendidikanibu7" value="{{ old('pendidikanibu7') }}" required autocomplete="pendidikanibu7" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/mahadaly </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu7')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-6">
                <label> Pekerjaan Ibu </label>
                <select id="inputState" class="form-control" id="pekerjaanibu7" class="form-control @error('pekerjaanibu7') is-invalid @enderror" name="pekerjaanibu7" value="{{ old('pekerjaanibu7') }}" required autocomplete="pekerjaanibu7" autofocus>
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
                @error('pekerjaanibu7')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan                         
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan7" class="form-control @error('penghasilan7') is-invalid @enderror" name="penghasilan7" value="{{ old('penghasilan7') }}" required autocomplete="penghasilan7" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
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
                <input id="prestasi7" type="text" class="form-control @error('prestasi7') is-invalid @enderror" name="prestasi7" value="{{ old('prestasi7') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi7" autofocus>
                @error('prestasi7')
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
                <input id="nohp7" type="text" class="form-control @error('nohp7') is-invalid @enderror" name="nohp7" value="{{ old('nohp7') }}" placeholder="No HP" required autocomplete="nohp7" autofocus>
                @error('nohp7')
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

  <!-- Modal Import Mahadaly -->
  <div class="modal fade" id="importMahadaly" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importmahadaly') }}" method="post" enctype="multipart/form-data">
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



  @section('footer')

  <script>
    $(document).ready(function(){

      $('#datatable').DataTable();

      $('.delete').click(function(){
        var mahadaly_id = $(this).attr('mahadaly-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data Mahad Aly dengan id "+mahadaly_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('mahadaly') }}/"+mahadaly_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop