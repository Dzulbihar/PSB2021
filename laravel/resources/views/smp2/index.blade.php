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

              <h1 class="panel-title"><b>Data Santri Baru Jenjang SMP 2</b></h1>
              
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
                    @foreach($data_smp2 as $smp2)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $smp2->namalengkap}}   </td>
                      <td>{{ $smp2->fasilitas}}</td>
                      <td>{{ $smp2->tempatlahir2}}</td>
                      <td>{{ $smp2->jenkel}}</td>
                      <td>{{ $smp2->kab}}</td>
                      <td>{{ $smp2->namaayah2}}</td>
                      <td>{{ $smp2->pekerjaanayah2}}</td>
                      <td>{{ $smp2->nohp2}}</td>
                      <td>
                        <a href="{{url('smp2')}}/{{$smp2->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('smp2') }}/{{$smp2->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSmp2">
                 Import Excel
               </a> 
               <a href="{{ url('smp2/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
               <a href="{{ url('rekapan/administrasi/smp2') }}" class="btn btn-sm btn-danger"> Rekapan Administrasi </a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data smp2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('smp2/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name2"><b> NAMA LABEL </b></label>t -->
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
                <input readonly id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="SMP 2"  required autocomplete="status" autofocus>
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
                <input id="tempatlahir2" type="text" class="form-control @error('tempatlahir2') is-invalid @enderror" name="tempatlahir2" value="{{ old('tempatlahir2') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir2" autofocus>
                @error('tempatlahir2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <label> Tanggal Lahir </label>
                <input id="tbt2" type="date" class="form-control @error('tbt2') is-invalid @enderror" name="tbt2" value="{{ old('tbt2') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt2" autofocus>
                @error('tbt2')
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
                <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{ old('desa') }}" placeholder="Alamat rt/rw" required autocomplete="desa" autofocus>
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
                <input id="cita2" type="text" class="form-control @error('cita2') is-invalid @enderror" name="cita2" value="{{ old('cita2') }}" placeholder="Alamat Lengkap" required autocomplete="cita2" autofocus>
                @error('cita2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              --> 
              <!-- Jumlah Saudara Kandung
              <div class="col-md-6">
                <input id="jumlahsaudara2" type="number" class="form-control @error('jumlahsaudara2') is-invalid @enderror" name="jumlahsaudara2" value="{{ old('jumlahsaudara2') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara2" autofocus>
                @error('jumlahsaudara2')
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
                <input id="asalsekolah2" type="text" class="form-control @error('asalsekolah2') is-invalid @enderror" name="asalsekolah2" value="{{ old('asalsekolah2') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah2" autofocus>
                @error('asalsekolah2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <label> Alamat Asal Sekolah </label>
                <input id="alamatasalsekolah2" type="text" class="form-control @error('alamatasalsekolah2') is-invalid @enderror" name="alamatasalsekolah2" value="{{ old('alamatasalsekolah2') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah2" autofocus>
                @error('alamatasalsekolah2')
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
                <input id="namaayah2" type="text" class="form-control @error('namaayah2') is-invalid @enderror" name="namaayah2" value="{{ old('namaayah2') }}" placeholder="Nama Ayah" required autocomplete="namaayah2" autofocus>
                @error('namaayah2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
              <!-- NIK Ayah 
              <div class="col-md-6">
                <input id="nikayah2" type="number" class="form-control @error('nikayah2') is-invalid @enderror" name="nikayah2" value="{{ old('nikayah2') }}" placeholder="NIK Ayah" required autocomplete="nikayah2" autofocus>
                @error('nikayah2')
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
                <input id="tahunlahirayah2" type="number" class="form-control @error('tahunlahirayah2') is-invalid @enderror" name="tahunlahirayah2" value="{{ old('tahunlahirayah2') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah2" autofocus>
                @error('tahunlahirayah2')
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
                <select id="inputState" class="form-control" id="pendidikanayah2" class="form-control @error('pendidikanayah2') is-invalid @enderror" name="pendidikanayah2" value="{{ old('pendidikanayah2') }}" required autocomplete="pendidikanayah2" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-6">
                <label> Pekerjaan Ayah </label>
                <select id="inputState" class="form-control" id="pekerjaanayah2" class="form-control @error('pekerjaanayah2') is-invalid @enderror" name="pekerjaanayah2" value="{{ old('pekerjaanayah2') }}" required autocomplete="pekerjaanayah2" autofocus>
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
                @error('pekerjaanayah2')
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
                <input id="namaibu2" type="text" class="form-control @error('namaibu2') is-invalid @enderror" name="namaibu2" value="{{ old('namaibu2') }}" placeholder="Nama Ibu" required autocomplete="namaibu2" autofocus>
                @error('namaibu2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
              <!-- NIK Ibu 
              <div class="col-md-6">
                <input id="nikibu2" type="number" class="form-control @error('nikibu2') is-invalid @enderror" name="nikibu2" value="{{ old('nikibu2') }}" placeholder="NIK Ibu" required autocomplete="nikibu2" autofocus>
                @error('nikibu2')
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
                <input id="tahunlahiribu2" type="number" class="form-control @error('tahunlahiribu2') is-invalid @enderror" name="tahunlahiribu2" value="{{ old('tahunlahiribu2') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu2" autofocus>
                @error('tahunlahiribu2')
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
                <select id="inputState" class="form-control" id="pendidikanibu2" class="form-control @error('pendidikanibu2') is-invalid @enderror" name="pendidikanibu2" value="{{ old('pendidikanibu2') }}" required autocomplete="pendidikanibu2" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-6">
                <label>  Pekerjaan Ibu </label>
                <select id="inputState" class="form-control" id="pekerjaanibu2" class="form-control @error('pekerjaanibu2') is-invalid @enderror" name="pekerjaanibu2" value="{{ old('pekerjaanibu2') }}" required autocomplete="pekerjaanibu2" autofocus>
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
                @error('pekerjaanibu2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan2" class="form-control @error('penghasilan2') is-invalid @enderror" name="penghasilan2" value="{{ old('penghasilan2') }}" required autocomplete="penghasilan2" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
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
                <input id="prestasi2" type="text" class="form-control @error('prestasi2') is-invalid @enderror" name="prestasi2" value="{{ old('prestasi2') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi2" autofocus>
                @error('prestasi2')
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
                <input id="nohp2" type="text" class="form-control @error('nohp2') is-invalid @enderror" name="nohp2" value="{{ old('nohp2') }}" placeholder="No HP" required autocomplete="nohp2" autofocus>
                @error('nohp2')
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

  <!-- Modal Import Smp2 -->
  <div class="modal fade" id="importSmp2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsmp2') }}" method="post" enctype="multipart/form-data">
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
        var smp2_id = $(this).attr('smp2-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMP 2 dengan id "+smp2_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('smp2') }}/"+smp2_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop