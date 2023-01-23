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

              <h1 class="panel-title"><b>Data Santri Jenjang MA Kelas 11</b></h1>
              
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
                    @foreach($data_ma11 as $ma11)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $ma11->namalengkap62}} </td>
                      <td>{{ $ma11->status62}}</td>
                      <td>{{ $ma11->tempatlahir62}}, {{ $ma11->tbt62}}</td>
                      <td>{{ $ma11->jenkel62}}</td>
                      <td>{{ $ma11->cita62}}</td>
                      <td>{{ $ma11->namaayah62}}</td>
                      <td>{{ $ma11->pekerjaanayah62}}</td>
                      <td>{{ $ma11->nohp62}}</td>
                      <td>
                        <a href="{{url('ma11')}}/{{$ma11->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('ma11') }}/{{$ma11->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" ma11-id="{{$ma11->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importMa11">
                 Import Excel
               </a> 
               <a href="{{ url('ma11/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data MA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('ma11/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name62"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap62" type="text" class="form-control @error('namalengkap62') is-invalid @enderror" name="namalengkap62" value="{{ old('namalengkap62') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap62" autofocus>
                @error('namalengkap62')
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
                <input id="nisn62" type="number" class="form-control @error('nisn62') is-invalid @enderror" name="nisn62" value="{{ old('nisn62') }}" placeholder="NISN" required autocomplete="nisn62" autofocus>
                @error('nisn62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik62" type="number" class="form-control @error('nik62') is-invalid @enderror" name="nik62" value="{{ old('nik62') }}" placeholder="NIK" required autocomplete="nik62" autofocus>
                @error('nik62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk62" type="number" class="form-control @error('nokk62') is-invalid @enderror" name="nokk62" value="{{ old('nokk62') }}" placeholder="No KK" required autocomplete="nokk62" autofocus>
                @error('nokk62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir62" type="text" class="form-control @error('tempatlahir62') is-invalid @enderror" name="tempatlahir62" value="{{ old('tempatlahir62') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir62" autofocus>
                @error('tempatlahir62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt62" type="date" class="form-control @error('tbt62') is-invalid @enderror" name="tbt62" value="{{ old('tbt62') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt62" autofocus>
                @error('tbt62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel62" class="form-control @error('jenkel62') is-invalid @enderror" name="jenkel62" value="{{ old('jenkel62') }}" required autocomplete="jenkel62" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa62" type="text" class="form-control @error('desa62') is-invalid @enderror" name="desa62" value="{{ old('desa62') }}" placeholder="Desa" required autocomplete="desa62" autofocus>
                @error('desa62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec62" type="text" class="form-control @error('kec62') is-invalid @enderror" name="kec62" value="{{ old('kec62') }}" placeholder="Kecamatan" required autocomplete="kec62" autofocus>
                @error('kec62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab62" type="text" class="form-control @error('kab62') is-invalid @enderror" name="kab62" value="{{ old('kab62') }}" placeholder="Kabupaten / Kota" required autocomplete="kab62" autofocus>
                @error('kab62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov62" type="text" class="form-control @error('prov62') is-invalid @enderror" name="prov62" value="{{ old('prov62') }}" placeholder="Provinsi" required autocomplete="prov62" autofocus>
                @error('prov62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos62" type="text" class="form-control @error('kodepos62') is-invalid @enderror" name="kodepos62" value="{{ old('kodepos62') }}" placeholder="Kode Pos" required autocomplete="kodepos62" autofocus>
                @error('kodepos62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita62" type="text" class="form-control @error('cita62') is-invalid @enderror" name="cita62" value="{{ old('cita62') }}" placeholder="Alamat Lengkap" required autocomplete="cita62" autofocus>
                @error('cita62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara62" type="number" class="form-control @error('jumlahsaudara62') is-invalid @enderror" name="jumlahsaudara62" value="{{ old('jumlahsaudara62') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara62" autofocus>
                @error('jumlahsaudara62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah62" type="text" class="form-control @error('asalsekolah62') is-invalid @enderror" name="asalsekolah62" value="{{ old('asalsekolah62') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah62" autofocus>
                @error('asalsekolah62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah62" type="text" class="form-control @error('alamatasalsekolah62') is-invalid @enderror" name="alamatasalsekolah62" value="{{ old('alamatasalsekolah62') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah62" autofocus>
                @error('alamatasalsekolah62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah62" type="text" class="form-control @error('namaayah62') is-invalid @enderror" name="namaayah62" value="{{ old('namaayah62') }}" placeholder="Nama Ayah" required autocomplete="namaayah62" autofocus>
                @error('namaayah62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah62" type="number" class="form-control @error('nikayah62') is-invalid @enderror" name="nikayah62" value="{{ old('nikayah62') }}" placeholder="NIK Ayah" required autocomplete="nikayah62" autofocus>
                @error('nikayah62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah62" type="number" class="form-control @error('tahunlahirayah62') is-invalid @enderror" name="tahunlahirayah62" value="{{ old('tahunlahirayah62') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah62" autofocus>
                @error('tahunlahirayah62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah62" class="form-control @error('pendidikanayah62') is-invalid @enderror" name="pendidikanayah62" value="{{ old('pendidikanayah62') }}" required autocomplete="pendidikanayah62" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah62" class="form-control @error('pekerjaanayah62') is-invalid @enderror" name="pekerjaanayah62" value="{{ old('pekerjaanayah62') }}" required autocomplete="pekerjaanayah62" autofocus>
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
                @error('pekerjaanayah62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu62" type="text" class="form-control @error('namaibu62') is-invalid @enderror" name="namaibu62" value="{{ old('namaibu62') }}" placeholder="Nama Ibu" required autocomplete="namaibu62" autofocus>
                @error('namaibu62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu62" type="number" class="form-control @error('nikibu62') is-invalid @enderror" name="nikibu62" value="{{ old('nikibu62') }}" placeholder="NIK Ibu" required autocomplete="nikibu62" autofocus>
                @error('nikibu62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu62" type="number" class="form-control @error('tahunlahiribu62') is-invalid @enderror" name="tahunlahiribu62" value="{{ old('tahunlahiribu62') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu62" autofocus>
                @error('tahunlahiribu62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu62" class="form-control @error('pendidikanibu62') is-invalid @enderror" name="pendidikanibu62" value="{{ old('pendidikanibu62') }}" required autocomplete="pendidikanibu62" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu62" class="form-control @error('pekerjaanibu62') is-invalid @enderror" name="pekerjaanibu62" value="{{ old('pekerjaanibu62') }}" required autocomplete="pekerjaanibu62" autofocus>
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
                @error('pekerjaanibu62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan62" class="form-control @error('penghasilan62') is-invalid @enderror" name="penghasilan62" value="{{ old('penghasilan62') }}" required autocomplete="penghasilan62" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi62" type="text" class="form-control @error('prestasi62') is-invalid @enderror" name="prestasi62" value="{{ old('prestasi62') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi62" autofocus>
                @error('prestasi62')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp62" type="text" class="form-control @error('nohp62') is-invalid @enderror" name="nohp62" value="{{ old('nohp62') }}" placeholder="No HP" required autocomplete="nohp62" autofocus>
                @error('nohp62')
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

  <!-- Modal Import Ma11 -->
  <div class="modal fade" id="importMa11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importma11') }}" method="post" enctype="multipart/form-data">
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
        var ma11_id = $(this).attr('ma11-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data MA kelas 11 dengan id "+ma11_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('ma11') }}/"+ma11_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop