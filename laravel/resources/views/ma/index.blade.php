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

              <h1 class="panel-title"><b>Data Santri Baru Jenjang MA</b></h1>
              
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
                    @foreach($data_ma as $ma)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td> {{ $ma->namalengkap}}  </td>
                      <td>{{ $ma->fasilitas}}</td>
                      <td>{{ $ma->tempatlahir6}}</td>
                      <td>{{ $ma->jenkel}}</td>
                      <td>{{ $ma->kab}}</td>
                      <td>{{ $ma->namaayah6}}</td>
                      <td>{{ $ma->pekerjaanayah6}}</td>
                      <td>{{ $ma->nohp6}}</td>
                      <td>
                        <a href="{{url('ma')}}/{{$ma->id}}/{{('profile')}}" class="btn btn-warning btn-sm">Detail Profile</a>
                        <a href="{{ url('ma') }}/{{$ma->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importMa">
                 Import Excel
               </a> 
               <a href="{{ url('ma/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
               <a href="{{ url('rekapan/administrasi/ma') }}" class="btn btn-sm btn-danger"> Rekapan Administrasi </a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data ma</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('ma/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name6"><b> NAMA LABEL </b></label>t -->
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
                <input readonly id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="MA"  required autocomplete="status" autofocus>
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
                <input id="tempatlahir6" type="text" class="form-control @error('tempatlahir6') is-invalid @enderror" name="tempatlahir6" value="{{ old('tempatlahir6') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir6" autofocus>
                @error('tempatlahir6')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <label> Tanggal Lahir </label>
                <input id="tbt6" type="date" class="form-control @error('tbt6') is-invalid @enderror" name="tbt6" value="{{ old('tbt6') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt6" autofocus>
                @error('tbt6')
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
                <input id="cita6" type="text" class="form-control @error('cita6') is-invalid @enderror" name="cita6" value="{{ old('cita6') }}" placeholder="Alamat Lengkap" required autocomplete="cita6" autofocus>
                @error('cita6')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              -->
              <!-- Jumlah Saudara Kandung 
              <div class="col-md-6">
                <input id="jumlahsaudara6" type="number" class="form-control @error('jumlahsaudara6') is-invalid @enderror" name="jumlahsaudara6" value="{{ old('jumlahsaudara6') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara6" autofocus>
                @error('jumlahsaudara6')
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
                <input id="asalsekolah6" type="text" class="form-control @error('asalsekolah6') is-invalid @enderror" name="asalsekolah6" value="{{ old('asalsekolah6') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah6" autofocus>
                @error('asalsekolah6')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <label> Alamat Asal Sekolah </label>
                <input id="alamatasalsekolah6" type="text" class="form-control @error('alamatasalsekolah6') is-invalid @enderror" name="alamatasalsekolah6" value="{{ old('alamatasalsekolah6') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah6" autofocus>
                @error('alamatasalsekolah6')
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
                <input id="namaayah6" type="text" class="form-control @error('namaayah6') is-invalid @enderror" name="namaayah6" value="{{ old('namaayah6') }}" placeholder="Nama Ayah" required autocomplete="namaayah6" autofocus>
                @error('namaayah6')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              </div>
              <!-- NIK Ayah 
              <div class="col-md-6">
                <input id="nikayah6" type="number" class="form-control @error('nikayah6') is-invalid @enderror" name="nikayah6" value="{{ old('nikayah6') }}" placeholder="NIK Ayah" required autocomplete="nikayah6" autofocus>
                @error('nikayah6')
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
                <input id="tahunlahirayah6" type="number" class="form-control @error('tahunlahirayah6') is-invalid @enderror" name="tahunlahirayah6" value="{{ old('tahunlahirayah6') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah6" autofocus>
                @error('tahunlahirayah6')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              --> 
            <div class="form-group row">
              <!-- Pendidikan Ayah -->
              <div class="col-md-6">
                <label> Pendidikan Ayah </label>
                <select id="inputState" class="form-control" id="pendidikanayah6" class="form-control @error('pendidikanayah6') is-invalid @enderror" name="pendidikanayah6" value="{{ old('pendidikanayah6') }}" required autocomplete="pendidikanayah6" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah6')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-6">
                <label> Pekerjaan Ayah </label>
                <select id="inputState" class="form-control" id="pekerjaanayah6" class="form-control @error('pekerjaanayah6') is-invalid @enderror" name="pekerjaanayah6" value="{{ old('pekerjaanayah6') }}" required autocomplete="pekerjaanayah6" autofocus>
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
                @error('pekerjaanayah6')
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
                <input id="namaibu6" type="text" class="form-control @error('namaibu6') is-invalid @enderror" name="namaibu6" value="{{ old('namaibu6') }}" placeholder="Nama Ibu" required autocomplete="namaibu6" autofocus>
                @error('namaibu6')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
              <!-- NIK Ibu 
              <div class="col-md-6">
                <input id="nikibu6" type="number" class="form-control @error('nikibu6') is-invalid @enderror" name="nikibu6" value="{{ old('nikibu6') }}" placeholder="NIK Ibu" required autocomplete="nikibu6" autofocus>
                @error('nikibu6')
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
                <input id="tahunlahiribu6" type="number" class="form-control @error('tahunlahiribu6') is-invalid @enderror" name="tahunlahiribu6" value="{{ old('tahunlahiribu6') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu6" autofocus>
                @error('tahunlahiribu6')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              --> 
            <div class="form-group row">
              <!-- Pendidikan Ibu -->
              <div class="col-md-6">
                <label> Pendidikan Ibu </label>
                <select id="inputState" class="form-control" id="pendidikanibu6" class="form-control @error('pendidikanibu6') is-invalid @enderror" name="pendidikanibu6" value="{{ old('pendidikanibu6') }}" required autocomplete="pendidikanibu6" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu6')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-6">
                <label> Pekerjaan Ibu </label>
                <select id="inputState" class="form-control" id="pekerjaanibu6" class="form-control @error('pekerjaanibu6') is-invalid @enderror" name="pekerjaanibu6" value="{{ old('pekerjaanibu6') }}" required autocomplete="pekerjaanibu6" autofocus>
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
                @error('pekerjaanibu6')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan6" class="form-control @error('penghasilan6') is-invalid @enderror" name="penghasilan6" value="{{ old('penghasilan6') }}" required autocomplete="penghasilan6" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 6.000.000,-/BULAN </option>
                  <option> Rp. 6.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan6')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              --> 
              <!-- Prestasi yang pernah di raih 
              <div class="col-md-6">
                <input id="prestasi6" type="text" class="form-control @error('prestasi6') is-invalid @enderror" name="prestasi6" value="{{ old('prestasi6') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi6" autofocus>
                @error('prestasi6')
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
                <input id="nohp6" type="text" class="form-control @error('nohp6') is-invalid @enderror" name="nohp6" value="{{ old('nohp6') }}" placeholder="No HP" required autocomplete="nohp6" autofocus>
                @error('nohp6')
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


  <!-- Modal Import Ma -->
  <div class="modal fade" id="importMa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importma') }}" method="post" enctype="multipart/form-data">
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
        var ma_id = $(this).attr('ma-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data MA dengan id "+ma_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('ma') }}/"+ma_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop