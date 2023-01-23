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

              <h1 class="panel-title"><b>Data Santri Jenjang MA Kelas 10</b></h1>
              
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
                    @foreach($data_ma10 as $ma10)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $ma10->namalengkap61}} </td>
                      <td>{{ $ma10->status61}}</td>
                      <td>{{ $ma10->tempatlahir61}}, {{ $ma10->tbt61}}</td>
                      <td>{{ $ma10->jenkel61}}</td>
                      <td>{{ $ma10->cita61}}</td>
                      <td>{{ $ma10->namaayah61}}</td>
                      <td>{{ $ma10->pekerjaanayah61}}</td>
                      <td>{{ $ma10->nohp61}}</td>
                      <td>
                        <a href="{{url('ma10')}}/{{$ma10->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('ma10') }}/{{$ma10->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" ma10-id="{{$ma10->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importMa10">
                 Import Excel
               </a> 
               <a href="{{ url('ma10/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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

        <form action="{{ url('ma10/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name61"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap61" type="text" class="form-control @error('namalengkap61') is-invalid @enderror" name="namalengkap61" value="{{ old('namalengkap61') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap61" autofocus>
                @error('namalengkap61')
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
                <input id="nisn61" type="number" class="form-control @error('nisn61') is-invalid @enderror" name="nisn61" value="{{ old('nisn61') }}" placeholder="NISN" required autocomplete="nisn61" autofocus>
                @error('nisn61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik61" type="number" class="form-control @error('nik61') is-invalid @enderror" name="nik61" value="{{ old('nik61') }}" placeholder="NIK" required autocomplete="nik61" autofocus>
                @error('nik61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk61" type="number" class="form-control @error('nokk61') is-invalid @enderror" name="nokk61" value="{{ old('nokk61') }}" placeholder="No KK" required autocomplete="nokk61" autofocus>
                @error('nokk61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir61" type="text" class="form-control @error('tempatlahir61') is-invalid @enderror" name="tempatlahir61" value="{{ old('tempatlahir61') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir61" autofocus>
                @error('tempatlahir61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt61" type="date" class="form-control @error('tbt61') is-invalid @enderror" name="tbt61" value="{{ old('tbt61') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt61" autofocus>
                @error('tbt61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel61" class="form-control @error('jenkel61') is-invalid @enderror" name="jenkel61" value="{{ old('jenkel61') }}" required autocomplete="jenkel61" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa61" type="text" class="form-control @error('desa61') is-invalid @enderror" name="desa61" value="{{ old('desa61') }}" placeholder="Desa" required autocomplete="desa61" autofocus>
                @error('desa61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec61" type="text" class="form-control @error('kec61') is-invalid @enderror" name="kec61" value="{{ old('kec61') }}" placeholder="Kecamatan" required autocomplete="kec61" autofocus>
                @error('kec61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab61" type="text" class="form-control @error('kab61') is-invalid @enderror" name="kab61" value="{{ old('kab61') }}" placeholder="Kabupaten / Kota" required autocomplete="kab61" autofocus>
                @error('kab61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov61" type="text" class="form-control @error('prov61') is-invalid @enderror" name="prov61" value="{{ old('prov61') }}" placeholder="Provinsi" required autocomplete="prov61" autofocus>
                @error('prov61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos61" type="text" class="form-control @error('kodepos61') is-invalid @enderror" name="kodepos61" value="{{ old('kodepos61') }}" placeholder="Kode Pos" required autocomplete="kodepos61" autofocus>
                @error('kodepos61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita61" type="text" class="form-control @error('cita61') is-invalid @enderror" name="cita61" value="{{ old('cita61') }}" placeholder="Alamat Lengkap" required autocomplete="cita61" autofocus>
                @error('cita61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara61" type="number" class="form-control @error('jumlahsaudara61') is-invalid @enderror" name="jumlahsaudara61" value="{{ old('jumlahsaudara61') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara61" autofocus>
                @error('jumlahsaudara61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah61" type="text" class="form-control @error('asalsekolah61') is-invalid @enderror" name="asalsekolah61" value="{{ old('asalsekolah61') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah61" autofocus>
                @error('asalsekolah61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah61" type="text" class="form-control @error('alamatasalsekolah61') is-invalid @enderror" name="alamatasalsekolah61" value="{{ old('alamatasalsekolah61') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah61" autofocus>
                @error('alamatasalsekolah61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah61" type="text" class="form-control @error('namaayah61') is-invalid @enderror" name="namaayah61" value="{{ old('namaayah61') }}" placeholder="Nama Ayah" required autocomplete="namaayah61" autofocus>
                @error('namaayah61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah61" type="number" class="form-control @error('nikayah61') is-invalid @enderror" name="nikayah61" value="{{ old('nikayah61') }}" placeholder="NIK Ayah" required autocomplete="nikayah61" autofocus>
                @error('nikayah61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah61" type="number" class="form-control @error('tahunlahirayah61') is-invalid @enderror" name="tahunlahirayah61" value="{{ old('tahunlahirayah61') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah61" autofocus>
                @error('tahunlahirayah61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah61" class="form-control @error('pendidikanayah61') is-invalid @enderror" name="pendidikanayah61" value="{{ old('pendidikanayah61') }}" required autocomplete="pendidikanayah61" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah61" class="form-control @error('pekerjaanayah61') is-invalid @enderror" name="pekerjaanayah61" value="{{ old('pekerjaanayah61') }}" required autocomplete="pekerjaanayah61" autofocus>
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
                @error('pekerjaanayah61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu61" type="text" class="form-control @error('namaibu61') is-invalid @enderror" name="namaibu61" value="{{ old('namaibu61') }}" placeholder="Nama Ibu" required autocomplete="namaibu61" autofocus>
                @error('namaibu61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu61" type="number" class="form-control @error('nikibu61') is-invalid @enderror" name="nikibu61" value="{{ old('nikibu61') }}" placeholder="NIK Ibu" required autocomplete="nikibu61" autofocus>
                @error('nikibu61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu61" type="number" class="form-control @error('tahunlahiribu61') is-invalid @enderror" name="tahunlahiribu61" value="{{ old('tahunlahiribu61') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu61" autofocus>
                @error('tahunlahiribu61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu61" class="form-control @error('pendidikanibu61') is-invalid @enderror" name="pendidikanibu61" value="{{ old('pendidikanibu61') }}" required autocomplete="pendidikanibu61" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu61" class="form-control @error('pekerjaanibu61') is-invalid @enderror" name="pekerjaanibu61" value="{{ old('pekerjaanibu61') }}" required autocomplete="pekerjaanibu61" autofocus>
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
                @error('pekerjaanibu61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan61" class="form-control @error('penghasilan61') is-invalid @enderror" name="penghasilan61" value="{{ old('penghasilan61') }}" required autocomplete="penghasilan61" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi61" type="text" class="form-control @error('prestasi61') is-invalid @enderror" name="prestasi61" value="{{ old('prestasi61') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi61" autofocus>
                @error('prestasi61')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp61" type="text" class="form-control @error('nohp61') is-invalid @enderror" name="nohp61" value="{{ old('nohp61') }}" placeholder="No HP" required autocomplete="nohp61" autofocus>
                @error('nohp61')
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


  <!-- Modal Import Ma10 -->
  <div class="modal fade" id="importMa10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importma10') }}" method="post" enctype="multipart/form-data">
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
        var ma10_id = $(this).attr('ma10-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data MA kelas 11 dengan id "+ma10_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('ma10') }}/"+ma10_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop