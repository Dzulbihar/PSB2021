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

              <h1 class="panel-title"><b>Data Santri Jenjang Mahad Aly Semester 7-8</b></h1>
              
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
                    @foreach($data_mahadaly4 as $mahadaly4)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $mahadaly4->namalengkap74}} </td>
                      <td>{{ $mahadaly4->status74}}</td>
                      <td>{{ $mahadaly4->tempatlahir74}}, {{ $mahadaly4->tbt74}}</td>
                      <td>{{ $mahadaly4->jenkel74}}</td>
                      <td>{{ $mahadaly4->cita74}}</td>
                      <td>{{ $mahadaly4->namaayah74}}</td>
                      <td>{{ $mahadaly4->pekerjaanayah74}}</td>
                      <td>{{ $mahadaly4->nohp74}}</td>
                      <td>
                        <a href="{{url('mahadaly4')}}/{{$mahadaly4->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('mahadaly4') }}/{{$mahadaly4->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" mahadaly4-id="{{$mahadaly4->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importMahadaly4">
                 Import Excel
               </a> 
               <a href="{{ url('mahadaly4/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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

        <form action="{{ url('mahadaly4/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name74"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap74" type="text" class="form-control @error('namalengkap74') is-invalid @enderror" name="namalengkap74" value="{{ old('namalengkap74') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap74" autofocus>
                @error('namalengkap74')
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
                <input id="nisn74" type="number" class="form-control @error('nisn74') is-invalid @enderror" name="nisn74" value="{{ old('nisn74') }}" placeholder="NISN" required autocomplete="nisn74" autofocus>
                @error('nisn74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik74" type="number" class="form-control @error('nik74') is-invalid @enderror" name="nik74" value="{{ old('nik74') }}" placeholder="NIK" required autocomplete="nik74" autofocus>
                @error('nik74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk74" type="number" class="form-control @error('nokk74') is-invalid @enderror" name="nokk74" value="{{ old('nokk74') }}" placeholder="No KK" required autocomplete="nokk74" autofocus>
                @error('nokk74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir74" type="text" class="form-control @error('tempatlahir74') is-invalid @enderror" name="tempatlahir74" value="{{ old('tempatlahir74') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir74" autofocus>
                @error('tempatlahir74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt74" type="date" class="form-control @error('tbt74') is-invalid @enderror" name="tbt74" value="{{ old('tbt74') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt74" autofocus>
                @error('tbt74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel74" class="form-control @error('jenkel74') is-invalid @enderror" name="jenkel74" value="{{ old('jenkel74') }}" required autocomplete="jenkel74" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa74" type="text" class="form-control @error('desa74') is-invalid @enderror" name="desa74" value="{{ old('desa74') }}" placeholder="Desa" required autocomplete="desa74" autofocus>
                @error('desa74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec74" type="text" class="form-control @error('kec74') is-invalid @enderror" name="kec74" value="{{ old('kec74') }}" placeholder="Kecamatan" required autocomplete="kec74" autofocus>
                @error('kec74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab74" type="text" class="form-control @error('kab74') is-invalid @enderror" name="kab74" value="{{ old('kab74') }}" placeholder="Kabupaten / Kota" required autocomplete="kab74" autofocus>
                @error('kab74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov74" type="text" class="form-control @error('prov74') is-invalid @enderror" name="prov74" value="{{ old('prov74') }}" placeholder="Provinsi" required autocomplete="prov74" autofocus>
                @error('prov74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos74" type="text" class="form-control @error('kodepos74') is-invalid @enderror" name="kodepos74" value="{{ old('kodepos74') }}" placeholder="Kode Pos" required autocomplete="kodepos74" autofocus>
                @error('kodepos74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita74" type="text" class="form-control @error('cita74') is-invalid @enderror" name="cita74" value="{{ old('cita74') }}" placeholder="Alamat Lengkap" required autocomplete="cita74" autofocus>
                @error('cita74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara74" type="number" class="form-control @error('jumlahsaudara74') is-invalid @enderror" name="jumlahsaudara74" value="{{ old('jumlahsaudara74') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara74" autofocus>
                @error('jumlahsaudara74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah74" type="text" class="form-control @error('asalsekolah74') is-invalid @enderror" name="asalsekolah74" value="{{ old('asalsekolah74') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah74" autofocus>
                @error('asalsekolah74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah74" type="text" class="form-control @error('alamatasalsekolah74') is-invalid @enderror" name="alamatasalsekolah74" value="{{ old('alamatasalsekolah74') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah74" autofocus>
                @error('alamatasalsekolah74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah74" type="text" class="form-control @error('namaayah74') is-invalid @enderror" name="namaayah74" value="{{ old('namaayah74') }}" placeholder="Nama Ayah" required autocomplete="namaayah74" autofocus>
                @error('namaayah74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah74" type="number" class="form-control @error('nikayah74') is-invalid @enderror" name="nikayah74" value="{{ old('nikayah74') }}" placeholder="NIK Ayah" required autocomplete="nikayah74" autofocus>
                @error('nikayah74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah74" type="number" class="form-control @error('tahunlahirayah74') is-invalid @enderror" name="tahunlahirayah74" value="{{ old('tahunlahirayah74') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah74" autofocus>
                @error('tahunlahirayah74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah74" class="form-control @error('pendidikanayah74') is-invalid @enderror" name="pendidikanayah74" value="{{ old('pendidikanayah74') }}" required autocomplete="pendidikanayah74" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah74" class="form-control @error('pekerjaanayah74') is-invalid @enderror" name="pekerjaanayah74" value="{{ old('pekerjaanayah74') }}" required autocomplete="pekerjaanayah74" autofocus>
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
                @error('pekerjaanayah74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu74" type="text" class="form-control @error('namaibu74') is-invalid @enderror" name="namaibu74" value="{{ old('namaibu74') }}" placeholder="Nama Ibu" required autocomplete="namaibu74" autofocus>
                @error('namaibu74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu74" type="number" class="form-control @error('nikibu74') is-invalid @enderror" name="nikibu74" value="{{ old('nikibu74') }}" placeholder="NIK Ibu" required autocomplete="nikibu74" autofocus>
                @error('nikibu74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu74" type="number" class="form-control @error('tahunlahiribu74') is-invalid @enderror" name="tahunlahiribu74" value="{{ old('tahunlahiribu74') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu74" autofocus>
                @error('tahunlahiribu74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu74" class="form-control @error('pendidikanibu74') is-invalid @enderror" name="pendidikanibu74" value="{{ old('pendidikanibu74') }}" required autocomplete="pendidikanibu74" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu74" class="form-control @error('pekerjaanibu74') is-invalid @enderror" name="pekerjaanibu74" value="{{ old('pekerjaanibu74') }}" required autocomplete="pekerjaanibu74" autofocus>
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
                @error('pekerjaanibu74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan74" class="form-control @error('penghasilan74') is-invalid @enderror" name="penghasilan74" value="{{ old('penghasilan74') }}" required autocomplete="penghasilan74" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi74" type="text" class="form-control @error('prestasi74') is-invalid @enderror" name="prestasi74" value="{{ old('prestasi74') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi74" autofocus>
                @error('prestasi74')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp74" type="text" class="form-control @error('nohp74') is-invalid @enderror" name="nohp74" value="{{ old('nohp74') }}" placeholder="No HP" required autocomplete="nohp74" autofocus>
                @error('nohp74')
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

  <!-- Modal Import Mahadaly4 -->
  <div class="modal fade" id="importMahadaly4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importmahadaly4') }}" method="post" enctype="multipart/form-data">
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
        var mahadaly4_id = $(this).attr('mahadaly4-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data Mahad Aly Semester 7-8 dengan id "+mahadaly4_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('mahadaly4') }}/"+mahadaly4_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop