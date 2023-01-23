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

              <h1 class="panel-title"><b>Data Santri Jenjang SMP 1 Kelas 8</b></h1>

            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Jenjang</th>
                      <th scope="col">Tempat TanggalLahir</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Alamat Lengkap</th>
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
                    @foreach($data_smp18 as $smp18)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $smp18->namalengkap18}}   </td>
                      <td>{{ $smp18->status18}}</td>
                      <td>{{ $smp18->tempatlahir18}}, {{ $smp18->tbt18}}</td>
                      <td>{{ $smp18->jenkel18}}</td>
                      <td>{{ $smp18->cita18}}</td>
                      <td>{{ $smp18->namaayah18}}</td>
                      <td>{{ $smp18->pekerjaanayah18}}</td>
                      <td>{{ $smp18->nohp18}}</td>
                      <td>
                        <a href="{{url('smp18')}}/{{$smp18->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('smp18') }}/{{$smp18->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" smp18-id="{{$smp18->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSmp18">
                 Import Excel
               </a> 
               <a href="{{ url('smp18/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data SMP 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('smp18/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name18"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap18" type="text" class="form-control @error('namalengkap18') is-invalid @enderror" name="namalengkap18" value="{{ old('namalengkap18') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap18" autofocus>
                @error('namalengkap18')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>


            <!-- __________________________________________________________________________________ -->

            <!-- Email -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="email" type="email" class="form-control" name="email" placeholder="Email" >
              </div>
            </div>

            <!-- __________________________________________________________________________________ -->


            <!-- NISN -->
            <div class="form-group row">
              <div class="col-md-4">
                <input id="nisn18" type="number" class="form-control @error('nisn18') is-invalid @enderror" name="nisn18" value="{{ old('nisn18') }}" placeholder="NISN" required autocomplete="nisn18" autofocus>
                @error('nisn18')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik18" type="number" class="form-control @error('nik18') is-invalid @enderror" name="nik18" value="{{ old('nik18') }}" placeholder="NIK" required autocomplete="nik18" autofocus>
                @error('nik18')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk18" type="number" class="form-control @error('nokk18') is-invalid @enderror" name="nokk18" value="{{ old('nokk18') }}" placeholder="No KK" required autocomplete="nokk18" autofocus>
                @error('nokk18')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir18" type="text" class="form-control @error('tempatlahir18') is-invalid @enderror" name="tempatlahir18" value="{{ old('tempatlahir18') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir18" autofocus>
                @error('tempatlahir18')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt18" type="date" class="form-control @error('tbt18') is-invalid @enderror" name="tbt18" value="{{ old('tbt18') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt18" autofocus>
                @error('tbt18')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel18" class="form-control @error('jenkel18') is-invalid @enderror" name="jenkel18" value="{{ old('jenkel18') }}" required autocomplete="jenkel18" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel18')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
                      <!-- <div class="col-md-4 ">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="lakilaki" name="jenkel18" class="custom-control-input" value="{{ old('jenkel18') }}" required autocomplete="jenkel18" required>
                                <label class="custom-control-label @error('jenkel18') is-invalid @enderror" for="lakilaki">Laki-laki</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="perempuan" name="jenkel18" class="custom-control-input" value="{{ old('jenkel18') }}" required autocomplete="jenkel18" required>
                                <label class="custom-control-label @error('jenkel18') is-invalid @enderror" for="perempuan">Perempuan</label>
                              </div>
                              @error('jenkel18')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                               @enderror
                             </div>    -->
                           </div>
                           <!-- Desa -->                        
                           <div class="form-group row">
                            <div class="col-md-6">
                              <input id="desa18" type="text" class="form-control @error('desa18') is-invalid @enderror" name="desa18" value="{{ old('desa18') }}" placeholder="Desa" required autocomplete="desa18" autofocus>
                              @error('desa18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Kecamatan -->
                            <div class="col-md-6">
                              <input id="kec18" type="text" class="form-control @error('kec18') is-invalid @enderror" name="kec18" value="{{ old('kec18') }}" placeholder="Kecamatan" required autocomplete="kec18" autofocus>
                              @error('kec18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                          </div>
                          <!-- Kabupaten / Kota -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="kab18" type="text" class="form-control @error('kab18') is-invalid @enderror" name="kab18" value="{{ old('kab18') }}" placeholder="Kabupaten / Kota" required autocomplete="kab18" autofocus>
                              @error('kab18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Provinsi -->
                            <div class="col-md-4">
                              <input id="prov18" type="text" class="form-control @error('prov18') is-invalid @enderror" name="prov18" value="{{ old('prov18') }}" placeholder="Provinsi" required autocomplete="prov18" autofocus>
                              @error('prov18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Kode Pos -->
                            <div class="col-md-4">
                              <input id="kodepos18" type="text" class="form-control @error('kodepos18') is-invalid @enderror" name="kodepos18" value="{{ old('kodepos18') }}" placeholder="Kode Pos" required autocomplete="kodepos18" autofocus>
                              @error('kodepos18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
                          <!-- Alamat Lengkap -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="cita18" type="text" class="form-control @error('cita18') is-invalid @enderror" name="cita18" value="{{ old('cita18') }}" placeholder="Alamat Lengkap" required autocomplete="cita18" autofocus>
                              @error('cita18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Jumlah Saudara Kandung -->
                            <div class="col-md-6">
                              <input id="jumlahsaudara18" type="number" class="form-control @error('jumlahsaudara18') is-invalid @enderror" name="jumlahsaudara18" value="{{ old('jumlahsaudara18') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara18" autofocus>
                              @error('jumlahsaudara18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
                          <!-- Asal Sekolah -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="asalsekolah18" type="text" class="form-control @error('asalsekolah18') is-invalid @enderror" name="asalsekolah18" value="{{ old('asalsekolah18') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah18" autofocus>
                              @error('asalsekolah18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Alamat Asal Sekolah -->
                            <div class="col-md-6">
                              <input id="alamatasalsekolah18" type="text" class="form-control @error('alamatasalsekolah18') is-invalid @enderror" name="alamatasalsekolah18" value="{{ old('alamatasalsekolah18') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah18" autofocus>
                              @error('alamatasalsekolah18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
                          <!-- Nama Ayah -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="namaayah18" type="text" class="form-control @error('namaayah18') is-invalid @enderror" name="namaayah18" value="{{ old('namaayah18') }}" placeholder="Nama Ayah" required autocomplete="namaayah18" autofocus>
                              @error('namaayah18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- NIK Ayah -->
                            <div class="col-md-6">
                              <input id="nikayah18" type="number" class="form-control @error('nikayah18') is-invalid @enderror" name="nikayah18" value="{{ old('nikayah18') }}" placeholder="NIK Ayah" required autocomplete="nikayah18" autofocus>
                              @error('nikayah18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
                          <!-- Tahun Lahir Ayah -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="tahunlahirayah18" type="number" class="form-control @error('tahunlahirayah18') is-invalid @enderror" name="tahunlahirayah18" value="{{ old('tahunlahirayah18') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah18" autofocus>
                              @error('tahunlahirayah18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Pendidikan Ayah -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pendidikanayah18" class="form-control @error('pendidikanayah18') is-invalid @enderror" name="pendidikanayah18" value="{{ old('pendidikanayah18') }}" required autocomplete="pendidikanayah18" autofocus>
                                <option selected>-- Pendidikan --</option>
                                <option> TAMAT SD/MI </option>
                                <option> TAMAT SMP/MTS </option>
                                <option> TAMAT SMA/SMK/MA </option>
                                <option> DIPLOMA </option>
                                <option> SARJANA </option>
                                <option> PASCA SARJANA </option>
                                <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                              </select>
                              @error('pendidikanayah18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
                            <!-- Pekerjaan Ayah -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pekerjaanayah18" class="form-control @error('pekerjaanayah18') is-invalid @enderror" name="pekerjaanayah18" value="{{ old('pekerjaanayah18') }}" required autocomplete="pekerjaanayah18" autofocus>
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
                              @error('pekerjaanayah18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                               
                            </div>                           
                          </div>
                          <!-- Nama Ibu -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="namaibu18" type="text" class="form-control @error('namaibu18') is-invalid @enderror" name="namaibu18" value="{{ old('namaibu18') }}" placeholder="Nama Ibu" required autocomplete="namaibu18" autofocus>
                              @error('namaibu18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- NIK Ibu -->
                            <div class="col-md-6">
                              <input id="nikibu18" type="number" class="form-control @error('nikibu18') is-invalid @enderror" name="nikibu18" value="{{ old('nikibu18') }}" placeholder="NIK Ibu" required autocomplete="nikibu18" autofocus>
                              @error('nikibu18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
                          <!-- Tahun Lahir Ibu -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="tahunlahiribu18" type="number" class="form-control @error('tahunlahiribu18') is-invalid @enderror" name="tahunlahiribu18" value="{{ old('tahunlahiribu18') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu18" autofocus>
                              @error('tahunlahiribu18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Pendidikan Ibu -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pendidikanibu18" class="form-control @error('pendidikanibu18') is-invalid @enderror" name="pendidikanibu18" value="{{ old('pendidikanibu18') }}" required autocomplete="pendidikanibu18" autofocus>
                                <option selected>-- Pendidikan --</option>
                                <option> TAMAT SD/MI </option>
                                <option> TAMAT SMP/MTS </option>
                                <option> TAMAT SMA/SMK/MA </option>
                                <option> DIPLOMA </option>
                                <option> SARJANA </option>
                                <option> PASCA SARJANA </option>
                                <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                              </select>
                              @error('pendidikanibu18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
                            <!-- Pekerjaan Ibu -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pekerjaanibu18" class="form-control @error('pekerjaanibu18') is-invalid @enderror" name="pekerjaanibu18" value="{{ old('pekerjaanibu18') }}" required autocomplete="pekerjaanibu18" autofocus>
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
                              @error('pekerjaanibu18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                           
                          </div>
                          <!-- Penghasilan -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <select id="inputState" class="form-control" id="penghasilan18" class="form-control @error('penghasilan18') is-invalid @enderror" name="penghasilan18" value="{{ old('penghasilan18') }}" required autocomplete="penghasilan18" autofocus>
                                <option selected>-- Penghasilan --</option>
                                <option> < Rp. 1.000.000,-/BULAN </option>
                                <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                                <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                                <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                                <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                                <option> > Rp. 10.000.000,-/BULAN </option>
                              </select>
                              @error('penghasilan18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
                            <!-- Prestasi yang pernah di raih -->
                            <div class="col-md-6">
                              <input id="prestasi18" type="text" class="form-control @error('prestasi18') is-invalid @enderror" name="prestasi18" value="{{ old('prestasi18') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi18" autofocus>
                              @error('prestasi18')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                                                    
                          </div>
                          <!-- No HP -->                        
                          <div class="form-group row">
                            <div class="col-md-12">
                              <input id="nohp18" type="text" class="form-control @error('nohp18') is-invalid @enderror" name="nohp18" value="{{ old('nohp18') }}" placeholder="No HP" required autocomplete="nohp18" autofocus>
                              @error('nohp18')
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

                <!-- Modal Import Smp18 -->
                <div class="modal fade" id="importSmp18" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <form action="{{ route('importsmp18') }}" method="post" enctype="multipart/form-data">
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
                      var smp18_id = $(this).attr('smp18-id');
                      swal({
                        title: "Yakin?",
                        text: "Mau dihapus data SMP 1 kelas 8 dengan id "+smp18_id+" ??",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        console.log(willDelete);
                        if (willDelete) {
                          window.location = "{{ url('smp18') }}/"+smp18_id+"/{{('delete')}}";
                        }
                      });
                    });

                  });

                </script>

                @stop