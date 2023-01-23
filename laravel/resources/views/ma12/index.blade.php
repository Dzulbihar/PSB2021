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

              <h1 class="panel-title"><b>Data Santri Jenjang MA Kelas 12</b></h1>
              
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
                    @foreach($data_ma12 as $ma12)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td> {{ $ma12->namalengkap63}}  </td>
                      <td>{{ $ma12->status63}}</td>
                      <td>{{ $ma12->tempatlahir63}}, {{ $ma12->tbt63}}</td>
                      <td>{{ $ma12->jenkel63}}</td>
                      <td>{{ $ma12->cita63}}</td>
                      <td>{{ $ma12->namaayah63}}</td>
                      <td>{{ $ma12->pekerjaanayah63}}</td>
                      <td>{{ $ma12->nohp63}}</td>
                      <td>
                        <a href="{{url('ma12')}}/{{$ma12->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('ma12') }}/{{$ma12->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" ma12-id="{{$ma12->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importMa12">
                 Import Excel
               </a> 
               <a href="{{ url('ma12/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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

        <form action="{{ url('ma12/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name63"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap63" type="text" class="form-control @error('namalengkap63') is-invalid @enderror" name="namalengkap63" value="{{ old('namalengkap63') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap63" autofocus>
                @error('namalengkap63')
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
                <input id="nisn63" type="number" class="form-control @error('nisn63') is-invalid @enderror" name="nisn63" value="{{ old('nisn63') }}" placeholder="NISN" required autocomplete="nisn63" autofocus>
                @error('nisn63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik63" type="number" class="form-control @error('nik63') is-invalid @enderror" name="nik63" value="{{ old('nik63') }}" placeholder="NIK" required autocomplete="nik63" autofocus>
                @error('nik63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk63" type="number" class="form-control @error('nokk63') is-invalid @enderror" name="nokk63" value="{{ old('nokk63') }}" placeholder="No KK" required autocomplete="nokk63" autofocus>
                @error('nokk63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir63" type="text" class="form-control @error('tempatlahir63') is-invalid @enderror" name="tempatlahir63" value="{{ old('tempatlahir63') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir63" autofocus>
                @error('tempatlahir63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt63" type="date" class="form-control @error('tbt63') is-invalid @enderror" name="tbt63" value="{{ old('tbt63') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt63" autofocus>
                @error('tbt63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel63" class="form-control @error('jenkel63') is-invalid @enderror" name="jenkel63" value="{{ old('jenkel63') }}" required autocomplete="jenkel63" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa63" type="text" class="form-control @error('desa63') is-invalid @enderror" name="desa63" value="{{ old('desa63') }}" placeholder="Desa" required autocomplete="desa63" autofocus>
                @error('desa63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec63" type="text" class="form-control @error('kec63') is-invalid @enderror" name="kec63" value="{{ old('kec63') }}" placeholder="Kecamatan" required autocomplete="kec63" autofocus>
                @error('kec63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab63" type="text" class="form-control @error('kab63') is-invalid @enderror" name="kab63" value="{{ old('kab63') }}" placeholder="Kabupaten / Kota" required autocomplete="kab63" autofocus>
                @error('kab63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov63" type="text" class="form-control @error('prov63') is-invalid @enderror" name="prov63" value="{{ old('prov63') }}" placeholder="Provinsi" required autocomplete="prov63" autofocus>
                @error('prov63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos63" type="text" class="form-control @error('kodepos63') is-invalid @enderror" name="kodepos63" value="{{ old('kodepos63') }}" placeholder="Kode Pos" required autocomplete="kodepos63" autofocus>
                @error('kodepos63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita63" type="text" class="form-control @error('cita63') is-invalid @enderror" name="cita63" value="{{ old('cita63') }}" placeholder="Alamat Lengkap" required autocomplete="cita63" autofocus>
                @error('cita63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara63" type="number" class="form-control @error('jumlahsaudara63') is-invalid @enderror" name="jumlahsaudara63" value="{{ old('jumlahsaudara63') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara63" autofocus>
                @error('jumlahsaudara63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah63" type="text" class="form-control @error('asalsekolah63') is-invalid @enderror" name="asalsekolah63" value="{{ old('asalsekolah63') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah63" autofocus>
                @error('asalsekolah63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah63" type="text" class="form-control @error('alamatasalsekolah63') is-invalid @enderror" name="alamatasalsekolah63" value="{{ old('alamatasalsekolah63') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah63" autofocus>
                @error('alamatasalsekolah63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah63" type="text" class="form-control @error('namaayah63') is-invalid @enderror" name="namaayah63" value="{{ old('namaayah63') }}" placeholder="Nama Ayah" required autocomplete="namaayah63" autofocus>
                @error('namaayah63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah63" type="number" class="form-control @error('nikayah63') is-invalid @enderror" name="nikayah63" value="{{ old('nikayah63') }}" placeholder="NIK Ayah" required autocomplete="nikayah63" autofocus>
                @error('nikayah63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah63" type="number" class="form-control @error('tahunlahirayah63') is-invalid @enderror" name="tahunlahirayah63" value="{{ old('tahunlahirayah63') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah63" autofocus>
                @error('tahunlahirayah63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah63" class="form-control @error('pendidikanayah63') is-invalid @enderror" name="pendidikanayah63" value="{{ old('pendidikanayah63') }}" required autocomplete="pendidikanayah63" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah63" class="form-control @error('pekerjaanayah63') is-invalid @enderror" name="pekerjaanayah63" value="{{ old('pekerjaanayah63') }}" required autocomplete="pekerjaanayah63" autofocus>
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
                @error('pekerjaanayah63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu63" type="text" class="form-control @error('namaibu63') is-invalid @enderror" name="namaibu63" value="{{ old('namaibu63') }}" placeholder="Nama Ibu" required autocomplete="namaibu63" autofocus>
                @error('namaibu63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu63" type="number" class="form-control @error('nikibu63') is-invalid @enderror" name="nikibu63" value="{{ old('nikibu63') }}" placeholder="NIK Ibu" required autocomplete="nikibu63" autofocus>
                @error('nikibu63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu63" type="number" class="form-control @error('tahunlahiribu63') is-invalid @enderror" name="tahunlahiribu63" value="{{ old('tahunlahiribu63') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu63" autofocus>
                @error('tahunlahiribu63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu63" class="form-control @error('pendidikanibu63') is-invalid @enderror" name="pendidikanibu63" value="{{ old('pendidikanibu63') }}" required autocomplete="pendidikanibu63" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu63" class="form-control @error('pekerjaanibu63') is-invalid @enderror" name="pekerjaanibu63" value="{{ old('pekerjaanibu63') }}" required autocomplete="pekerjaanibu63" autofocus>
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
                @error('pekerjaanibu63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan63" class="form-control @error('penghasilan63') is-invalid @enderror" name="penghasilan63" value="{{ old('penghasilan63') }}" required autocomplete="penghasilan63" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi63" type="text" class="form-control @error('prestasi63') is-invalid @enderror" name="prestasi63" value="{{ old('prestasi63') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi63" autofocus>
                @error('prestasi63')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp63" type="text" class="form-control @error('nohp63') is-invalid @enderror" name="nohp63" value="{{ old('nohp63') }}" placeholder="No HP" required autocomplete="nohp63" autofocus>
                @error('nohp63')
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

  <!-- Modal Import Ma12 -->
  <div class="modal fade" id="importMa12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importma12') }}" method="post" enctype="multipart/form-data">
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
        var ma12_id = $(this).attr('ma12-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data MA kelas 11 dengan id "+ma12_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('ma12') }}/"+ma12_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop