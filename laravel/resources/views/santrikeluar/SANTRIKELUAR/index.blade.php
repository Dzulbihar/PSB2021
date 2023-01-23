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

              <h1 class="panel-title"><b>Data Santri Keluar Ponpes Askhabul Kahfi</b></h1>

            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Jenjang</th>
                      <th scope="col">Tahun Ajaran</th>
                      <th scope="col">Alasan Keluar</th>
                      <th scope="col">Tempat Tanggal Lahir</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Tinggal di Kecamatan</th>
                      <th scope="col">No HP</th>
                      <th scope="col">AKSI</th>

                    </tr>
                  </thead>
                  <tbody>

                    <!-- Variabel php untuk nomor-->    
                    <?php
                    $nomer = 1;
                    ?>
                    <!-- ambil data di database-->
                    @foreach($data_santrikeluar as $santrikeluar)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $santrikeluar->namalengkap00}}  </td>
                      <td>{{ $santrikeluar->jenjang00}}</td>
                      <td>{{ $santrikeluar->tahunajaran00}}</td>
                      <td>{{ $santrikeluar->alasan00}}</td>
                      <td>{{ $santrikeluar->tempatlahir00}}, {{ $santrikeluar->tbt00}}</td>
                      <td>{{ $santrikeluar->jenkel00}}</td>
                      <td>{{ $santrikeluar->kec00}}</td>
                      <td>{{ $santrikeluar->nohp00}}</td>
                      <td>
                        <a href="{{url('santrikeluar')}}/{{$santrikeluar->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('santrikeluar') }}/{{$santrikeluar->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSantrikeluar">
                 Import Excel
               </a> 
               <a href="{{ url('santrikeluar/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data santrikeluar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('santrikeluar/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name00"><b> NAMA LABEL </b></label>t -->
          <!-- type = format --> 
          <!-- class = bentuk form -->
          <!-- id = tempat penyimpanan -->
          <!-- placeholder = nama tidak terlihat -->
          <!-- value = nama otomatis muncul -->
          <!-- required = wajib di isi -->
          <!-- <div class="valid-feedback"> = tulisan kecil di bawah -->

            <!-- Nama Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="namalengkap00" type="text" class="form-control @error('namalengkap00') is-invalid @enderror" name="namalengkap00" value="{{ old('namalengkap00') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap00" autofocus>
                @error('namalengkap00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <!-- __________________________________________________________________________________ -->

            <!-- Email -->                        
            <div class="form-group row">

              <label for="signin-email" class="control-label sr-only">Email</label>
              <div class="col-md-12">
                <input name="email" type="email" class="form-control" id="signin-email"  placeholder="Email">
              </div>

            </div>

            <!-- __________________________________________________________________________________ -->

            <!-- JENJANG -->
            <div class="form-group row">
              <div class="col-md-6">
                <input id="jenjang00" type="text" class="form-control @error('jenjang00') is-invalid @enderror" name="jenjang00" value="{{ old('jenjang00') }}" placeholder="JENJANG" required autocomplete="jenjang00" autofocus>
                @error('jenjang00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- TAHUN AJARAN -->
              <div class="col-md-6">
                <input id="tahunajaran00" type="number" class="form-control @error('tahunajaran00') is-invalid @enderror" name="tahunajaran00" value="{{ old('tahunajaran00') }}" placeholder="TAHUN AJARAN" required autocomplete="tahunajaran00" autofocus>
                @error('tahunajaran00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 

            </div>
            <!-- __________________________________________________________________________________ -->

            <!-- Alasan Keluar -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="alasan00" type="text" class="form-control @error('alasan00') is-invalid @enderror" name="alasan00" value="{{ old('alasan00') }}" placeholder="Alasan Keluar" required autocomplete="alasan00" autofocus>
                @error('alasan00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- __________________________________________________________________________________ -->

            <!-- NISN -->
            <div class="form-group row">
              <div class="col-md-4">
                <input id="nisn00" type="number" class="form-control @error('nisn00') is-invalid @enderror" name="nisn00" value="{{ old('nisn00') }}" placeholder="NISN" required autocomplete="nisn00" autofocus>
                @error('nisn00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik00" type="number" class="form-control @error('nik00') is-invalid @enderror" name="nik00" value="{{ old('nik00') }}" placeholder="NIK" required autocomplete="nik00" autofocus>
                @error('nik00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk00" type="number" class="form-control @error('nokk00') is-invalid @enderror" name="nokk00" value="{{ old('nokk00') }}" placeholder="No KK" required autocomplete="nokk00" autofocus>
                @error('nokk00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- __________________________________________________________________________________ -->

            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir00" type="text" class="form-control @error('tempatlahir00') is-invalid @enderror" name="tempatlahir00" value="{{ old('tempatlahir00') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir00" autofocus>
                @error('tempatlahir00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt00" type="date" class="form-control @error('tbt00') is-invalid @enderror" name="tbt00" value="{{ old('tbt00') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt00" autofocus>
                @error('tbt00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel00" class="form-control @error('jenkel00') is-invalid @enderror" name="jenkel00" value="{{ old('jenkel00') }}" required autocomplete="jenkel00" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- __________________________________________________________________________________ -->

            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa00" type="text" class="form-control @error('desa00') is-invalid @enderror" name="desa00" value="{{ old('desa00') }}" placeholder="Desa" required autocomplete="desa00" autofocus>
                @error('desa00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec00" type="text" class="form-control @error('kec00') is-invalid @enderror" name="kec00" value="{{ old('kec00') }}" placeholder="Kecamatan" required autocomplete="kec00" autofocus>
                @error('kec00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- __________________________________________________________________________________ -->

            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab00" type="text" class="form-control @error('kab00') is-invalid @enderror" name="kab00" value="{{ old('kab00') }}" placeholder="Kabupaten / Kota" required autocomplete="kab00" autofocus>
                @error('kab00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov00" type="text" class="form-control @error('prov00') is-invalid @enderror" name="prov00" value="{{ old('prov00') }}" placeholder="Provinsi" required autocomplete="prov00" autofocus>
                @error('prov00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos00" type="text" class="form-control @error('kodepos00') is-invalid @enderror" name="kodepos00" value="{{ old('kodepos00') }}" placeholder="Kode Pos" required autocomplete="kodepos00" autofocus>
                @error('kodepos00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- __________________________________________________________________________________ -->

            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita00" type="text" class="form-control @error('cita00') is-invalid @enderror" name="cita00" value="{{ old('cita00') }}" placeholder="Alamat Lengkap" required autocomplete="cita00" autofocus>
                @error('cita00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara00" type="number" class="form-control @error('jumlahsaudara00') is-invalid @enderror" name="jumlahsaudara00" value="{{ old('jumlahsaudara00') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara00" autofocus>
                @error('jumlahsaudara00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- __________________________________________________________________________________ -->

            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah00" type="text" class="form-control @error('asalsekolah00') is-invalid @enderror" name="asalsekolah00" value="{{ old('asalsekolah00') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah00" autofocus>
                @error('asalsekolah00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah00" type="text" class="form-control @error('alamatasalsekolah00') is-invalid @enderror" name="alamatasalsekolah00" value="{{ old('alamatasalsekolah00') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah00" autofocus>
                @error('alamatasalsekolah00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- __________________________________________________________________________________ -->

            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah00" type="text" class="form-control @error('namaayah00') is-invalid @enderror" name="namaayah00" value="{{ old('namaayah00') }}" placeholder="Nama Ayah" required autocomplete="namaayah00" autofocus>
                @error('namaayah00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah00" type="number" class="form-control @error('nikayah00') is-invalid @enderror" name="nikayah00" value="{{ old('nikayah00') }}" placeholder="NIK Ayah" required autocomplete="nikayah00" autofocus>
                @error('nikayah00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- __________________________________________________________________________________ -->

            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah00" type="number" class="form-control @error('tahunlahirayah00') is-invalid @enderror" name="tahunlahirayah00" value="{{ old('tahunlahirayah00') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah00" autofocus>
                @error('tahunlahirayah00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah00" class="form-control @error('pendidikanayah00') is-invalid @enderror" name="pendidikanayah00" value="{{ old('pendidikanayah00') }}" required autocomplete="pendidikanayah00" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah00" class="form-control @error('pekerjaanayah00') is-invalid @enderror" name="pekerjaanayah00" value="{{ old('pekerjaanayah00') }}" required autocomplete="pekerjaanayah00" autofocus>
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
                </select>
                @error('pekerjaanayah00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- __________________________________________________________________________________ -->

            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu00" type="text" class="form-control @error('namaibu00') is-invalid @enderror" name="namaibu00" value="{{ old('namaibu00') }}" placeholder="Nama Ibu" required autocomplete="namaibu00" autofocus>
                @error('namaibu00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu00" type="number" class="form-control @error('nikibu00') is-invalid @enderror" name="nikibu00" value="{{ old('nikibu00') }}" placeholder="NIK Ibu" required autocomplete="nikibu00" autofocus>
                @error('nikibu00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- __________________________________________________________________________________ -->

            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu00" type="number" class="form-control @error('tahunlahiribu00') is-invalid @enderror" name="tahunlahiribu00" value="{{ old('tahunlahiribu00') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu00" autofocus>
                @error('tahunlahiribu00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu00" class="form-control @error('pendidikanibu00') is-invalid @enderror" name="pendidikanibu00" value="{{ old('pendidikanibu00') }}" required autocomplete="pendidikanibu00" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/santrikeluar </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu00" class="form-control @error('pekerjaanibu00') is-invalid @enderror" name="pekerjaanibu00" value="{{ old('pekerjaanibu00') }}" required autocomplete="pekerjaanibu00" autofocus>
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
                </select>
                @error('pekerjaanibu00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- __________________________________________________________________________________ -->

            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan00" class="form-control @error('penghasilan00') is-invalid @enderror" name="penghasilan00" value="{{ old('penghasilan00') }}" required autocomplete="penghasilan00" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi00" type="text" class="form-control @error('prestasi00') is-invalid @enderror" name="prestasi00" value="{{ old('prestasi00') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi00" autofocus>
                @error('prestasi00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- __________________________________________________________________________________ -->

            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp00" type="text" class="form-control @error('nohp00') is-invalid @enderror" name="nohp00" value="{{ old('nohp00') }}" placeholder="No HP" required autocomplete="nohp00" autofocus>
                @error('nohp00')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- __________________________________________________________________________________ -->

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

  <!-- Modal Import Santrikeluar -->
  <div class="modal fade" id="importSantrikeluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsantrikeluar') }}" method="post" enctype="multipart/form-data">
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
        var santrikeluar_id = $(this).attr('santrikeluar-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data Mahad Aly dengan id "+santrikeluar_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('santrikeluar') }}/"+santrikeluar_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop