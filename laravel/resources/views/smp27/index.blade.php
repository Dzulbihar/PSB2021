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

              <h1 class="panel-title"><b>Data Santri Jenjang SMP 2 Kelas 7</b></h1>
              
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
                    @foreach($data_smp27 as $smp27)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $smp27->namalengkap27}} </td>
                      <td>{{ $smp27->status27}}</td>
                      <td>{{ $smp27->tempatlahir27}}, {{ $smp27->tbt27}}</td>
                      <td>{{ $smp27->jenkel27}}</td>
                      <td>{{ $smp27->cita27}}</td>
                      <td>{{ $smp27->namaayah27}}</td>
                      <td>{{ $smp27->pekerjaanayah27}}</td>
                      <td>{{ $smp27->nohp27}}</td>
                      <td>
                        <a href="{{url('smp27')}}/{{$smp27->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('smp27') }}/{{$smp27->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" smp27-id="{{$smp27->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              
              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSmp27">
                 Import Excel
               </a> 
               <a href="{{ url('smp27/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data SMP 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('smp27/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name27"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap27" type="text" class="form-control @error('namalengkap27') is-invalid @enderror" name="namalengkap27" value="{{ old('namalengkap27') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap27" autofocus>
                @error('namalengkap27')
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
                <input id="nisn27" type="number" class="form-control @error('nisn27') is-invalid @enderror" name="nisn27" value="{{ old('nisn27') }}" placeholder="NISN" required autocomplete="nisn27" autofocus>
                @error('nisn27')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik27" type="number" class="form-control @error('nik27') is-invalid @enderror" name="nik27" value="{{ old('nik27') }}" placeholder="NIK" required autocomplete="nik27" autofocus>
                @error('nik27')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk27" type="number" class="form-control @error('nokk27') is-invalid @enderror" name="nokk27" value="{{ old('nokk27') }}" placeholder="No KK" required autocomplete="nokk27" autofocus>
                @error('nokk27')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir27" type="text" class="form-control @error('tempatlahir27') is-invalid @enderror" name="tempatlahir27" value="{{ old('tempatlahir27') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir27" autofocus>
                @error('tempatlahir27')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt27" type="date" class="form-control @error('tbt27') is-invalid @enderror" name="tbt27" value="{{ old('tbt27') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt27" autofocus>
                @error('tbt27')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel27" class="form-control @error('jenkel27') is-invalid @enderror" name="jenkel27" value="{{ old('jenkel27') }}" required autocomplete="jenkel27" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel27')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
                      <!-- <div class="col-md-4 ">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="lakilaki" name="jenkel27" class="custom-control-input" value="{{ old('jenkel27') }}" required autocomplete="jenkel27" required>
                                <label class="custom-control-label @error('jenkel27') is-invalid @enderror" for="lakilaki">Laki-laki</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="perempuan" name="jenkel27" class="custom-control-input" value="{{ old('jenkel27') }}" required autocomplete="jenkel27" required>
                                <label class="custom-control-label @error('jenkel27') is-invalid @enderror" for="perempuan">Perempuan</label>
                              </div>
                              @error('jenkel27')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                               @enderror
                             </div>    -->
                           </div>
                           <!-- Desa -->                        
                           <div class="form-group row">
                            <div class="col-md-6">
                              <input id="desa27" type="text" class="form-control @error('desa27') is-invalid @enderror" name="desa27" value="{{ old('desa27') }}" placeholder="Desa" required autocomplete="desa27" autofocus>
                              @error('desa27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Kecamatan -->
                            <div class="col-md-6">
                              <input id="kec27" type="text" class="form-control @error('kec27') is-invalid @enderror" name="kec27" value="{{ old('kec27') }}" placeholder="Kecamatan" required autocomplete="kec27" autofocus>
                              @error('kec27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                          </div>
                          <!-- Kabupaten / Kota -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="kab27" type="text" class="form-control @error('kab27') is-invalid @enderror" name="kab27" value="{{ old('kab27') }}" placeholder="Kabupaten / Kota" required autocomplete="kab27" autofocus>
                              @error('kab27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Provinsi -->
                            <div class="col-md-4">
                              <input id="prov27" type="text" class="form-control @error('prov27') is-invalid @enderror" name="prov27" value="{{ old('prov27') }}" placeholder="Provinsi" required autocomplete="prov27" autofocus>
                              @error('prov27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Kode Pos -->
                            <div class="col-md-4">
                              <input id="kodepos27" type="text" class="form-control @error('kodepos27') is-invalid @enderror" name="kodepos27" value="{{ old('kodepos27') }}" placeholder="Kode Pos" required autocomplete="kodepos27" autofocus>
                              @error('kodepos27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
                          <!-- Alamat Lengkap -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="cita27" type="text" class="form-control @error('cita27') is-invalid @enderror" name="cita27" value="{{ old('cita27') }}" placeholder="Alamat Lengkap" required autocomplete="cita27" autofocus>
                              @error('cita27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Jumlah Saudara Kandung -->
                            <div class="col-md-6">
                              <input id="jumlahsaudara27" type="number" class="form-control @error('jumlahsaudara27') is-invalid @enderror" name="jumlahsaudara27" value="{{ old('jumlahsaudara27') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara27" autofocus>
                              @error('jumlahsaudara27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
                          <!-- Asal Sekolah -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="asalsekolah27" type="text" class="form-control @error('asalsekolah27') is-invalid @enderror" name="asalsekolah27" value="{{ old('asalsekolah27') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah27" autofocus>
                              @error('asalsekolah27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Alamat Asal Sekolah -->
                            <div class="col-md-6">
                              <input id="alamatasalsekolah27" type="text" class="form-control @error('alamatasalsekolah27') is-invalid @enderror" name="alamatasalsekolah27" value="{{ old('alamatasalsekolah27') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah27" autofocus>
                              @error('alamatasalsekolah27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
                          <!-- Nama Ayah -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="namaayah27" type="text" class="form-control @error('namaayah27') is-invalid @enderror" name="namaayah27" value="{{ old('namaayah27') }}" placeholder="Nama Ayah" required autocomplete="namaayah27" autofocus>
                              @error('namaayah27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- NIK Ayah -->
                            <div class="col-md-6">
                              <input id="nikayah27" type="number" class="form-control @error('nikayah27') is-invalid @enderror" name="nikayah27" value="{{ old('nikayah27') }}" placeholder="NIK Ayah" required autocomplete="nikayah27" autofocus>
                              @error('nikayah27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
                          <!-- Tahun Lahir Ayah -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="tahunlahirayah27" type="number" class="form-control @error('tahunlahirayah27') is-invalid @enderror" name="tahunlahirayah27" value="{{ old('tahunlahirayah27') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah27" autofocus>
                              @error('tahunlahirayah27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Pendidikan Ayah -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pendidikanayah27" class="form-control @error('pendidikanayah27') is-invalid @enderror" name="pendidikanayah27" value="{{ old('pendidikanayah27') }}" required autocomplete="pendidikanayah27" autofocus>
                                <option selected>-- Pendidikan --</option>
                                <option> TAMAT SD/MI </option>
                                <option> TAMAT SMP/MTS </option>
                                <option> TAMAT SMA/SMK/MA </option>
                                <option> DIPLOMA </option>
                                <option> SARJANA </option>
                                <option> PASCA SARJANA </option>
                                <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                              </select>
                              @error('pendidikanayah27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
                            <!-- Pekerjaan Ayah -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pekerjaanayah27" class="form-control @error('pekerjaanayah27') is-invalid @enderror" name="pekerjaanayah27" value="{{ old('pekerjaanayah27') }}" required autocomplete="pekerjaanayah27" autofocus>
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
                              @error('pekerjaanayah27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                               
                            </div>                           
                          </div>
                          <!-- Nama Ibu -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="namaibu27" type="text" class="form-control @error('namaibu27') is-invalid @enderror" name="namaibu27" value="{{ old('namaibu27') }}" placeholder="Nama Ibu" required autocomplete="namaibu27" autofocus>
                              @error('namaibu27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- NIK Ibu -->
                            <div class="col-md-6">
                              <input id="nikibu27" type="number" class="form-control @error('nikibu27') is-invalid @enderror" name="nikibu27" value="{{ old('nikibu27') }}" placeholder="NIK Ibu" required autocomplete="nikibu27" autofocus>
                              @error('nikibu27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
                          <!-- Tahun Lahir Ibu -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="tahunlahiribu27" type="number" class="form-control @error('tahunlahiribu27') is-invalid @enderror" name="tahunlahiribu27" value="{{ old('tahunlahiribu27') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu27" autofocus>
                              @error('tahunlahiribu27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <!-- Pendidikan Ibu -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pendidikanibu27" class="form-control @error('pendidikanibu27') is-invalid @enderror" name="pendidikanibu27" value="{{ old('pendidikanibu27') }}" required autocomplete="pendidikanibu27" autofocus>
                                <option selected>-- Pendidikan --</option>
                                <option> TAMAT SD/MI </option>
                                <option> TAMAT SMP/MTS </option>
                                <option> TAMAT SMA/SMK/MA </option>
                                <option> DIPLOMA </option>
                                <option> SARJANA </option>
                                <option> PASCA SARJANA </option>
                                <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                              </select>
                              @error('pendidikanibu27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
                            <!-- Pekerjaan Ibu -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pekerjaanibu27" class="form-control @error('pekerjaanibu27') is-invalid @enderror" name="pekerjaanibu27" value="{{ old('pekerjaanibu27') }}" required autocomplete="pekerjaanibu27" autofocus>
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
                              @error('pekerjaanibu27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                           
                          </div>
                          <!-- Penghasilan -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <select id="inputState" class="form-control" id="penghasilan27" class="form-control @error('penghasilan27') is-invalid @enderror" name="penghasilan27" value="{{ old('penghasilan27') }}" required autocomplete="penghasilan27" autofocus>
                                <option selected>-- Penghasilan --</option>
                                <option> < Rp. 1.000.000,-/BULAN </option>
                                <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                                <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                                <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                                <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                                <option> > Rp. 10.000.000,-/BULAN </option>
                              </select>
                              @error('penghasilan27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
                            <!-- Prestasi yang pernah di raih -->
                            <div class="col-md-6">
                              <input id="prestasi27" type="text" class="form-control @error('prestasi27') is-invalid @enderror" name="prestasi27" value="{{ old('prestasi27') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi27" autofocus>
                              @error('prestasi27')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                                                    
                          </div>
                          <!-- No HP -->                        
                          <div class="form-group row">
                            <div class="col-md-12">
                              <input id="nohp27" type="text" class="form-control @error('nohp27') is-invalid @enderror" name="nohp27" value="{{ old('nohp27') }}" placeholder="No HP" required autocomplete="nohp27" autofocus>
                              @error('nohp27')
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

                <!-- Modal Import Smp27 -->
                <div class="modal fade" id="importSmp27" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <form action="{{ route('importsmp27') }}" method="post" enctype="multipart/form-data">
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
                      var smp27_id = $(this).attr('smp27-id');
                      swal({
                        title: "Yakin?",
                        text: "Mau dihapus data SMP 2 kelas 7 dengan id "+smp27_id+" ??",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        console.log(willDelete);
                        if (willDelete) {
                          window.location = "{{ url('smp27') }}/"+smp27_id+"/{{('delete')}}";
                        }
                      });
                    });

                  });

                </script>

                @stop