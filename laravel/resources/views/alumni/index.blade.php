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

              <h1 class="panel-title"><b>Data Alumni Ponpes Askhabul Kahfi</b></h1>
              
            </div>
            
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Jenjang</th>
                      <th scope="col">Tahun Lulus</th>
                      <th scope="col">Pendidikan Lanjut</th>
                      <th scope="col">Tempat Tanggal Lahir</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Tinggal di Kecamatan</th>
                      <th scope="col">No HP</th>
                      <th scope="col">AKSI</th>

                    </tr>
                  </thead>
                  <tbody>

                    <!-- Variabel php untuk nomor-->    <?php
                    $nomer = 1;
                    ?>
                    <!-- ambil data di database-->
                    @foreach($data_alumni as $alumni)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td> {{ $alumni->namalengkap99}} </td>
                      <td>{{ $alumni->jenjang99}}</td>
                      <td>{{ $alumni->tahunlulus99}}</td>
                      <td>{{ $alumni->pendidikanlanjut99}}</td>
                      <td>{{ $alumni->tempatlahir99}}, {{ $alumni->tbt99}}</td>
                      <td>{{ $alumni->jenkel99}}</td>
                      <td>{{ $alumni->kec99}}</td>
                      <td>{{ $alumni->nohp99}}</td>
                      <td>
                        <a href="{{url('alumni')}}/{{$alumni->id}}/{{('profile')}}" class="btn btn-warning btn-sm">Detail Profile</a>
                        <a href="{{ url('alumni') }}/{{$alumni->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importAlumni">
                 Import Excel
               </a> 
               <a href="{{ url('alumni/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data alumni</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('alumni/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name99"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap99" type="text" class="form-control @error('namalengkap99') is-invalid @enderror" name="namalengkap99" value="{{ old('namalengkap99') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap99" autofocus>
                @error('namalengkap99')
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
              <div class="col-md-4">
                <input id="jenjang99" type="text" class="form-control @error('jenjang99') is-invalid @enderror" name="jenjang99" value="{{ old('jenjang99') }}" placeholder="JENJANG" required autocomplete="jenjang99" autofocus>
                @error('jenjang99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- TAHUN LULUS -->
              <div class="col-md-4">
                <input id="tahunlulus99" type="number" class="form-control @error('tahunlulus99') is-invalid @enderror" name="tahunlulus99" value="{{ old('tahunlulus99') }}" placeholder="TAHUN LULUS" required autocomplete="tahunlulus99" autofocus>
                @error('tahunlulus99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- PENDIDIKAN LANJUT -->
              <div class="col-md-4">
                <input id="pendidikanlanjut99" type="text" class="form-control @error('pendidikanlanjut99') is-invalid @enderror" name="pendidikanlanjut99" value="{{ old('pendidikanlanjut99') }}" placeholder="PENDIDIKAN LANJUT" required autocomplete="pendidikanlanjut99" autofocus>
                @error('pendidikanlanjut99')
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
                <input id="nisn99" type="number" class="form-control @error('nisn99') is-invalid @enderror" name="nisn99" value="{{ old('nisn99') }}" placeholder="NISN" required autocomplete="nisn99" autofocus>
                @error('nisn99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik99" type="number" class="form-control @error('nik99') is-invalid @enderror" name="nik99" value="{{ old('nik99') }}" placeholder="NIK" required autocomplete="nik99" autofocus>
                @error('nik99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk99" type="number" class="form-control @error('nokk99') is-invalid @enderror" name="nokk99" value="{{ old('nokk99') }}" placeholder="No KK" required autocomplete="nokk99" autofocus>
                @error('nokk99')
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
                <input id="tempatlahir99" type="text" class="form-control @error('tempatlahir99') is-invalid @enderror" name="tempatlahir99" value="{{ old('tempatlahir99') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir99" autofocus>
                @error('tempatlahir99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt99" type="date" class="form-control @error('tbt99') is-invalid @enderror" name="tbt99" value="{{ old('tbt99') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt99" autofocus>
                @error('tbt99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel99" class="form-control @error('jenkel99') is-invalid @enderror" name="jenkel99" value="{{ old('jenkel99') }}" required autocomplete="jenkel99" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel99')
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
                <input id="desa99" type="text" class="form-control @error('desa99') is-invalid @enderror" name="desa99" value="{{ old('desa99') }}" placeholder="Desa" required autocomplete="desa99" autofocus>
                @error('desa99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec99" type="text" class="form-control @error('kec99') is-invalid @enderror" name="kec99" value="{{ old('kec99') }}" placeholder="Kecamatan" required autocomplete="kec99" autofocus>
                @error('kec99')
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
                <input id="kab99" type="text" class="form-control @error('kab99') is-invalid @enderror" name="kab99" value="{{ old('kab99') }}" placeholder="Kabupaten / Kota" required autocomplete="kab99" autofocus>
                @error('kab99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov99" type="text" class="form-control @error('prov99') is-invalid @enderror" name="prov99" value="{{ old('prov99') }}" placeholder="Provinsi" required autocomplete="prov99" autofocus>
                @error('prov99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos99" type="text" class="form-control @error('kodepos99') is-invalid @enderror" name="kodepos99" value="{{ old('kodepos99') }}" placeholder="Kode Pos" required autocomplete="kodepos99" autofocus>
                @error('kodepos99')
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
                <input id="cita99" type="text" class="form-control @error('cita99') is-invalid @enderror" name="cita99" value="{{ old('cita99') }}" placeholder="Alamat Lengkap" required autocomplete="cita99" autofocus>
                @error('cita99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara99" type="number" class="form-control @error('jumlahsaudara99') is-invalid @enderror" name="jumlahsaudara99" value="{{ old('jumlahsaudara99') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara99" autofocus>
                @error('jumlahsaudara99')
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
                <input id="asalsekolah99" type="text" class="form-control @error('asalsekolah99') is-invalid @enderror" name="asalsekolah99" value="{{ old('asalsekolah99') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah99" autofocus>
                @error('asalsekolah99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah99" type="text" class="form-control @error('alamatasalsekolah99') is-invalid @enderror" name="alamatasalsekolah99" value="{{ old('alamatasalsekolah99') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah99" autofocus>
                @error('alamatasalsekolah99')
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
                <input id="namaayah99" type="text" class="form-control @error('namaayah99') is-invalid @enderror" name="namaayah99" value="{{ old('namaayah99') }}" placeholder="Nama Ayah" required autocomplete="namaayah99" autofocus>
                @error('namaayah99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah99" type="number" class="form-control @error('nikayah99') is-invalid @enderror" name="nikayah99" value="{{ old('nikayah99') }}" placeholder="NIK Ayah" required autocomplete="nikayah99" autofocus>
                @error('nikayah99')
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
                <input id="tahunlahirayah99" type="number" class="form-control @error('tahunlahirayah99') is-invalid @enderror" name="tahunlahirayah99" value="{{ old('tahunlahirayah99') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah99" autofocus>
                @error('tahunlahirayah99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah99" class="form-control @error('pendidikanayah99') is-invalid @enderror" name="pendidikanayah99" value="{{ old('pendidikanayah99') }}" required autocomplete="pendidikanayah99" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah99" class="form-control @error('pekerjaanayah99') is-invalid @enderror" name="pekerjaanayah99" value="{{ old('pekerjaanayah99') }}" required autocomplete="pekerjaanayah99" autofocus>
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
                @error('pekerjaanayah99')
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
                <input id="namaibu99" type="text" class="form-control @error('namaibu99') is-invalid @enderror" name="namaibu99" value="{{ old('namaibu99') }}" placeholder="Nama Ibu" required autocomplete="namaibu99" autofocus>
                @error('namaibu99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu99" type="number" class="form-control @error('nikibu99') is-invalid @enderror" name="nikibu99" value="{{ old('nikibu99') }}" placeholder="NIK Ibu" required autocomplete="nikibu99" autofocus>
                @error('nikibu99')
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
                <input id="tahunlahiribu99" type="number" class="form-control @error('tahunlahiribu99') is-invalid @enderror" name="tahunlahiribu99" value="{{ old('tahunlahiribu99') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu99" autofocus>
                @error('tahunlahiribu99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu99" class="form-control @error('pendidikanibu99') is-invalid @enderror" name="pendidikanibu99" value="{{ old('pendidikanibu99') }}" required autocomplete="pendidikanibu99" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/alumni </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu99" class="form-control @error('pekerjaanibu99') is-invalid @enderror" name="pekerjaanibu99" value="{{ old('pekerjaanibu99') }}" required autocomplete="pekerjaanibu99" autofocus>
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
                @error('pekerjaanibu99')
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
                <select id="inputState" class="form-control" id="penghasilan99" class="form-control @error('penghasilan99') is-invalid @enderror" name="penghasilan99" value="{{ old('penghasilan99') }}" required autocomplete="penghasilan99" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan99')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi99" type="text" class="form-control @error('prestasi99') is-invalid @enderror" name="prestasi99" value="{{ old('prestasi99') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi99" autofocus>
                @error('prestasi99')
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
                <input id="nohp99" type="text" class="form-control @error('nohp99') is-invalid @enderror" name="nohp99" value="{{ old('nohp99') }}" placeholder="No HP" required autocomplete="nohp99" autofocus>
                @error('nohp99')
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

  <!-- Modal Import Alumni -->
  <div class="modal fade" id="importAlumni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importalumni') }}" method="post" enctype="multipart/form-data">
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
        var alumni_id = $(this).attr('alumni-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data Mahad Aly dengan id "+alumni_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('alumni') }}/"+alumni_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop