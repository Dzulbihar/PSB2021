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

              <h1 class="panel-title"><b>Data Santri Jenjang Mahad Aly Semester 1-2</b></h1>
              
            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Asal Sekolah</th>
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
                    @foreach($data_mahadaly1 as $mahadaly1)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $mahadaly1->namalengkap71}} </td>
                      <td>{{ $mahadaly1->asalsekolah71}}</td>
                      <td>{{ $mahadaly1->tempatlahir71}}, {{ $mahadaly1->tbt71}}</td>
                      <td>{{ $mahadaly1->jenkel71}}</td>
                      <td>{{ $mahadaly1->cita71}}</td>
                      <td>{{ $mahadaly1->namaayah71}}</td>
                      <td>{{ $mahadaly1->pekerjaanayah71}}</td>
                      <td>{{ $mahadaly1->nohp71}}</td>
                      <td>
                        <a href="{{url('mahadaly1')}}/{{$mahadaly1->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('mahadaly1') }}/{{$mahadaly1->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" mahadaly1-id="{{$mahadaly1->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importMahadaly1">
                 Import Excel
               </a> 
               <a href="{{ url('mahadaly1/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahad Aly</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('mahadaly1/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name71"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap71" type="text" class="form-control @error('namalengkap71') is-invalid @enderror" name="namalengkap71" value="{{ old('namalengkap71') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap71" autofocus>
                @error('namalengkap71')
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
                <input id="nisn71" type="number" class="form-control @error('nisn71') is-invalid @enderror" name="nisn71" value="{{ old('nisn71') }}" placeholder="NISN" required autocomplete="nisn71" autofocus>
                @error('nisn71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik71" type="number" class="form-control @error('nik71') is-invalid @enderror" name="nik71" value="{{ old('nik71') }}" placeholder="NIK" required autocomplete="nik71" autofocus>
                @error('nik71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk71" type="number" class="form-control @error('nokk71') is-invalid @enderror" name="nokk71" value="{{ old('nokk71') }}" placeholder="No KK" required autocomplete="nokk71" autofocus>
                @error('nokk71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir71" type="text" class="form-control @error('tempatlahir71') is-invalid @enderror" name="tempatlahir71" value="{{ old('tempatlahir71') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir71" autofocus>
                @error('tempatlahir71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt71" type="date" class="form-control @error('tbt71') is-invalid @enderror" name="tbt71" value="{{ old('tbt71') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt71" autofocus>
                @error('tbt71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel71" class="form-control @error('jenkel71') is-invalid @enderror" name="jenkel71" value="{{ old('jenkel71') }}" required autocomplete="jenkel71" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa71" type="text" class="form-control @error('desa71') is-invalid @enderror" name="desa71" value="{{ old('desa71') }}" placeholder="Desa" required autocomplete="desa71" autofocus>
                @error('desa71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec71" type="text" class="form-control @error('kec71') is-invalid @enderror" name="kec71" value="{{ old('kec71') }}" placeholder="Kecamatan" required autocomplete="kec71" autofocus>
                @error('kec71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab71" type="text" class="form-control @error('kab71') is-invalid @enderror" name="kab71" value="{{ old('kab71') }}" placeholder="Kabupaten / Kota" required autocomplete="kab71" autofocus>
                @error('kab71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov71" type="text" class="form-control @error('prov71') is-invalid @enderror" name="prov71" value="{{ old('prov71') }}" placeholder="Provinsi" required autocomplete="prov71" autofocus>
                @error('prov71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos71" type="text" class="form-control @error('kodepos71') is-invalid @enderror" name="kodepos71" value="{{ old('kodepos71') }}" placeholder="Kode Pos" required autocomplete="kodepos71" autofocus>
                @error('kodepos71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita71" type="text" class="form-control @error('cita71') is-invalid @enderror" name="cita71" value="{{ old('cita71') }}" placeholder="Alamat Lengkap" required autocomplete="cita71" autofocus>
                @error('cita71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara71" type="number" class="form-control @error('jumlahsaudara71') is-invalid @enderror" name="jumlahsaudara71" value="{{ old('jumlahsaudara71') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara71" autofocus>
                @error('jumlahsaudara71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah71" type="text" class="form-control @error('asalsekolah71') is-invalid @enderror" name="asalsekolah71" value="{{ old('asalsekolah71') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah71" autofocus>
                @error('asalsekolah71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah71" type="text" class="form-control @error('alamatasalsekolah71') is-invalid @enderror" name="alamatasalsekolah71" value="{{ old('alamatasalsekolah71') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah71" autofocus>
                @error('alamatasalsekolah71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah71" type="text" class="form-control @error('namaayah71') is-invalid @enderror" name="namaayah71" value="{{ old('namaayah71') }}" placeholder="Nama Ayah" required autocomplete="namaayah71" autofocus>
                @error('namaayah71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah71" type="number" class="form-control @error('nikayah71') is-invalid @enderror" name="nikayah71" value="{{ old('nikayah71') }}" placeholder="NIK Ayah" required autocomplete="nikayah71" autofocus>
                @error('nikayah71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah71" type="number" class="form-control @error('tahunlahirayah71') is-invalid @enderror" name="tahunlahirayah71" value="{{ old('tahunlahirayah71') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah71" autofocus>
                @error('tahunlahirayah71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah71" class="form-control @error('pendidikanayah71') is-invalid @enderror" name="pendidikanayah71" value="{{ old('pendidikanayah71') }}" required autocomplete="pendidikanayah71" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah71" class="form-control @error('pekerjaanayah71') is-invalid @enderror" name="pekerjaanayah71" value="{{ old('pekerjaanayah71') }}" required autocomplete="pekerjaanayah71" autofocus>
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
                @error('pekerjaanayah71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu71" type="text" class="form-control @error('namaibu71') is-invalid @enderror" name="namaibu71" value="{{ old('namaibu71') }}" placeholder="Nama Ibu" required autocomplete="namaibu71" autofocus>
                @error('namaibu71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu71" type="number" class="form-control @error('nikibu71') is-invalid @enderror" name="nikibu71" value="{{ old('nikibu71') }}" placeholder="NIK Ibu" required autocomplete="nikibu71" autofocus>
                @error('nikibu71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu71" type="number" class="form-control @error('tahunlahiribu71') is-invalid @enderror" name="tahunlahiribu71" value="{{ old('tahunlahiribu71') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu71" autofocus>
                @error('tahunlahiribu71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu71" class="form-control @error('pendidikanibu71') is-invalid @enderror" name="pendidikanibu71" value="{{ old('pendidikanibu71') }}" required autocomplete="pendidikanibu71" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu71" class="form-control @error('pekerjaanibu71') is-invalid @enderror" name="pekerjaanibu71" value="{{ old('pekerjaanibu71') }}" required autocomplete="pekerjaanibu71" autofocus>
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
                @error('pekerjaanibu71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan71" class="form-control @error('penghasilan71') is-invalid @enderror" name="penghasilan71" value="{{ old('penghasilan71') }}" required autocomplete="penghasilan71" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi71" type="text" class="form-control @error('prestasi71') is-invalid @enderror" name="prestasi71" value="{{ old('prestasi71') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi71" autofocus>
                @error('prestasi71')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp71" type="text" class="form-control @error('nohp71') is-invalid @enderror" name="nohp71" value="{{ old('nohp71') }}" placeholder="No HP" required autocomplete="nohp71" autofocus>
                @error('nohp71')
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

  <!-- Modal Import Mahadaly1 -->
  <div class="modal fade" id="importMahadaly1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importmahadaly1') }}" method="post" enctype="multipart/form-data">
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
        var mahadaly1_id = $(this).attr('mahadaly1-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data Mahad Aly Semester 1-2 dengan id "+mahadaly1_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('mahadaly1') }}/"+mahadaly1_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop