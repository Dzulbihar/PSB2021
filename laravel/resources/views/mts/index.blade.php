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

              <h1 class="panel-title"><b>Data Santri Baru Jenjang MTs</b></h1>
              
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
                    @foreach($data_mts as $mts)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td> {{ $mts->namalengkap}} </td>
                      <td> {{ $mts->fasilitas}} </td>
                      <td>{{ $mts->tempatlahir3}}</td>
                      <td>{{ $mts->jenkel}}</td>
                      <td>{{ $mts->kab}}</td>
                      <td>{{ $mts->namaayah3}}</td>
                      <td>{{ $mts->pekerjaanayah3}}</td>
                      <td>{{ $mts->nohp3}}</td>
                      <td>
                        <a href="{{url('mts')}}/{{$mts->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('mts') }}/{{$mts->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importMts">
                 Import Excel
               </a> 
               <a href="{{ url('mts/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
               <a href="{{ url('rekapan/administrasi/mts') }}" class="btn btn-sm btn-danger"> Rekapan Administrasi </a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data mts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('mts/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name3"><b> NAMA LABEL </b></label>t -->
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
                <input readonly id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="MTs"  required autocomplete="status" autofocus>
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
                <input id="tempatlahir3" type="text" class="form-control @error('tempatlahir3') is-invalid @enderror" name="tempatlahir3" value="{{ old('tempatlahir3') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir3" autofocus>
                @error('tempatlahir3')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <label> Tanggal Lahir </label>
                <input id="tbt3" type="date" class="form-control @error('tbt3') is-invalid @enderror" name="tbt3" value="{{ old('tbt3') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt3" autofocus>
                @error('tbt3')
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
                <input id="cita3" type="text" class="form-control @error('cita3') is-invalid @enderror" name="cita3" value="{{ old('cita3') }}" placeholder="Alamat Lengkap" required autocomplete="cita3" autofocus>
                @error('cita3')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              --> 
              <!-- Jumlah Saudara Kandung
              <div class="col-md-6">
                <input id="jumlahsaudara3" type="number" class="form-control @error('jumlahsaudara3') is-invalid @enderror" name="jumlahsaudara3" value="{{ old('jumlahsaudara3') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara3" autofocus>
                @error('jumlahsaudara3')
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
                <input id="asalsekolah3" type="text" class="form-control @error('asalsekolah3') is-invalid @enderror" name="asalsekolah3" value="{{ old('asalsekolah3') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah3" autofocus>
                @error('asalsekolah3')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <label> Alamat Asal Sekolah </label>
                <input id="alamatasalsekolah3" type="text" class="form-control @error('alamatasalsekolah3') is-invalid @enderror" name="alamatasalsekolah3" value="{{ old('alamatasalsekolah3') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah3" autofocus>
                @error('alamatasalsekolah3')
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
                <input id="namaayah3" type="text" class="form-control @error('namaayah3') is-invalid @enderror" name="namaayah3" value="{{ old('namaayah3') }}" placeholder="Nama Ayah" required autocomplete="namaayah3" autofocus>
                @error('namaayah3')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              </div>
              <!-- NIK Ayah 
              <div class="col-md-6">
                <input id="nikayah3" type="number" class="form-control @error('nikayah3') is-invalid @enderror" name="nikayah3" value="{{ old('nikayah3') }}" placeholder="NIK Ayah" required autocomplete="nikayah3" autofocus>
                @error('nikayah3')
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
                <input id="tahunlahirayah3" type="number" class="form-control @error('tahunlahirayah3') is-invalid @enderror" name="tahunlahirayah3" value="{{ old('tahunlahirayah3') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah3" autofocus>
                @error('tahunlahirayah3')
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
                <select id="inputState" class="form-control" id="pendidikanayah3" class="form-control @error('pendidikanayah3') is-invalid @enderror" name="pendidikanayah3" value="{{ old('pendidikanayah3') }}" required autocomplete="pendidikanayah3" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/mts </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah3')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-6">
                <label> Pekerjaan Ayah </label>
                <select id="inputState" class="form-control" id="pekerjaanayah3" class="form-control @error('pekerjaanayah3') is-invalid @enderror" name="pekerjaanayah3" value="{{ old('pekerjaanayah3') }}" required autocomplete="pekerjaanayah3" autofocus>
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
                @error('pekerjaanayah3')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <label>  Nama Ibu </label>
                <input id="namaibu3" type="text" class="form-control @error('namaibu3') is-invalid @enderror" name="namaibu3" value="{{ old('namaibu3') }}" placeholder="Nama Ibu" required autocomplete="namaibu3" autofocus>
                @error('namaibu3')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
              <!-- NIK Ibu 
              <div class="col-md-6">
                <input id="nikibu3" type="number" class="form-control @error('nikibu3') is-invalid @enderror" name="nikibu3" value="{{ old('nikibu3') }}" placeholder="NIK Ibu" required autocomplete="nikibu3" autofocus>
                @error('nikibu3')
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
                <input id="tahunlahiribu3" type="number" class="form-control @error('tahunlahiribu3') is-invalid @enderror" name="tahunlahiribu3" value="{{ old('tahunlahiribu3') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu3" autofocus>
                @error('tahunlahiribu3')
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
                <select id="inputState" class="form-control" id="pendidikanibu3" class="form-control @error('pendidikanibu3') is-invalid @enderror" name="pendidikanibu3" value="{{ old('pendidikanibu3') }}" required autocomplete="pendidikanibu3" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/mts </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu3')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-6">
                <label> Pekerjaan Ibu </label>
                <select id="inputState" class="form-control" id="pekerjaanibu3" class="form-control @error('pekerjaanibu3') is-invalid @enderror" name="pekerjaanibu3" value="{{ old('pekerjaanibu3') }}" required autocomplete="pekerjaanibu3" autofocus>
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
                @error('pekerjaanibu3')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan                         
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan3" class="form-control @error('penghasilan3') is-invalid @enderror" name="penghasilan3" value="{{ old('penghasilan3') }}" required autocomplete="penghasilan3" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
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
                <input id="prestasi3" type="text" class="form-control @error('prestasi3') is-invalid @enderror" name="prestasi3" value="{{ old('prestasi3') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi3" autofocus>
                @error('prestasi3')
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
                <input id="nohp3" type="text" class="form-control @error('nohp3') is-invalid @enderror" name="nohp3" value="{{ old('nohp3') }}" placeholder="No HP" required autocomplete="nohp3" autofocus>
                @error('nohp3')
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


  <!-- Modal Import Mts -->
  <div class="modal fade" id="importMts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importmts') }}" method="post" enctype="multipart/form-data">
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
        var mts_id = $(this).attr('mts-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data MTs dengan id "+mts_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('mts') }}/"+mts_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop