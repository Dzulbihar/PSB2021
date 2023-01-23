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

              <h1 class="panel-title"><b>Data Santri Jenjang MTs Kelas 8</b></h1>
              
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
                    @foreach($data_mts8 as $mts8)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $mts8->namalengkap38}}  </td>
                      <td>{{ $mts8->status38}}</td>
                      <td>{{ $mts8->tempatlahir38}}, {{ $mts8->tbt38}}</td>
                      <td>{{ $mts8->jenkel38}}</td>
                      <td>{{ $mts8->cita38}}</td>
                      <td>{{ $mts8->namaayah38}}</td>
                      <td>{{ $mts8->pekerjaanayah38}}</td>
                      <td>{{ $mts8->nohp38}}</td>
                      <td>
                        <a href="{{url('mts8')}}/{{$mts8->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('mts8') }}/{{$mts8->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" mts8-id="{{$mts8->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importMts8">
                 Import Excel
               </a> 
               <a href="{{ url('mts8/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data MTs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('mts8/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name38"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap38" type="text" class="form-control @error('namalengkap38') is-invalid @enderror" name="namalengkap38" value="{{ old('namalengkap38') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap38" autofocus>
                @error('namalengkap38')
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
                <input id="nisn38" type="number" class="form-control @error('nisn38') is-invalid @enderror" name="nisn38" value="{{ old('nisn38') }}" placeholder="NISN" required autocomplete="nisn38" autofocus>
                @error('nisn38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik38" type="number" class="form-control @error('nik38') is-invalid @enderror" name="nik38" value="{{ old('nik38') }}" placeholder="NIK" required autocomplete="nik38" autofocus>
                @error('nik38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk38" type="number" class="form-control @error('nokk38') is-invalid @enderror" name="nokk38" value="{{ old('nokk38') }}" placeholder="No KK" required autocomplete="nokk38" autofocus>
                @error('nokk38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir38" type="text" class="form-control @error('tempatlahir38') is-invalid @enderror" name="tempatlahir38" value="{{ old('tempatlahir38') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir38" autofocus>
                @error('tempatlahir38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt38" type="date" class="form-control @error('tbt38') is-invalid @enderror" name="tbt38" value="{{ old('tbt38') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt38" autofocus>
                @error('tbt38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel38" class="form-control @error('jenkel38') is-invalid @enderror" name="jenkel38" value="{{ old('jenkel38') }}" required autocomplete="jenkel38" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa38" type="text" class="form-control @error('desa38') is-invalid @enderror" name="desa38" value="{{ old('desa38') }}" placeholder="Desa" required autocomplete="desa38" autofocus>
                @error('desa38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec38" type="text" class="form-control @error('kec38') is-invalid @enderror" name="kec38" value="{{ old('kec38') }}" placeholder="Kecamatan" required autocomplete="kec38" autofocus>
                @error('kec38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab38" type="text" class="form-control @error('kab38') is-invalid @enderror" name="kab38" value="{{ old('kab38') }}" placeholder="Kabupaten / Kota" required autocomplete="kab38" autofocus>
                @error('kab38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov38" type="text" class="form-control @error('prov38') is-invalid @enderror" name="prov38" value="{{ old('prov38') }}" placeholder="Provinsi" required autocomplete="prov38" autofocus>
                @error('prov38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos38" type="text" class="form-control @error('kodepos38') is-invalid @enderror" name="kodepos38" value="{{ old('kodepos38') }}" placeholder="Kode Pos" required autocomplete="kodepos38" autofocus>
                @error('kodepos38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita38" type="text" class="form-control @error('cita38') is-invalid @enderror" name="cita38" value="{{ old('cita38') }}" placeholder="Alamat Lengkap" required autocomplete="cita38" autofocus>
                @error('cita38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara38" type="number" class="form-control @error('jumlahsaudara38') is-invalid @enderror" name="jumlahsaudara38" value="{{ old('jumlahsaudara38') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara38" autofocus>
                @error('jumlahsaudara38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah38" type="text" class="form-control @error('asalsekolah38') is-invalid @enderror" name="asalsekolah38" value="{{ old('asalsekolah38') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah38" autofocus>
                @error('asalsekolah38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah38" type="text" class="form-control @error('alamatasalsekolah38') is-invalid @enderror" name="alamatasalsekolah38" value="{{ old('alamatasalsekolah38') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah38" autofocus>
                @error('alamatasalsekolah38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah38" type="text" class="form-control @error('namaayah38') is-invalid @enderror" name="namaayah38" value="{{ old('namaayah38') }}" placeholder="Nama Ayah" required autocomplete="namaayah38" autofocus>
                @error('namaayah38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah38" type="number" class="form-control @error('nikayah38') is-invalid @enderror" name="nikayah38" value="{{ old('nikayah38') }}" placeholder="NIK Ayah" required autocomplete="nikayah38" autofocus>
                @error('nikayah38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah38" type="number" class="form-control @error('tahunlahirayah38') is-invalid @enderror" name="tahunlahirayah38" value="{{ old('tahunlahirayah38') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah38" autofocus>
                @error('tahunlahirayah38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah38" class="form-control @error('pendidikanayah38') is-invalid @enderror" name="pendidikanayah38" value="{{ old('pendidikanayah38') }}" required autocomplete="pendidikanayah38" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah38" class="form-control @error('pekerjaanayah38') is-invalid @enderror" name="pekerjaanayah38" value="{{ old('pekerjaanayah38') }}" required autocomplete="pekerjaanayah38" autofocus>
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
                @error('pekerjaanayah38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu38" type="text" class="form-control @error('namaibu38') is-invalid @enderror" name="namaibu38" value="{{ old('namaibu38') }}" placeholder="Nama Ibu" required autocomplete="namaibu38" autofocus>
                @error('namaibu38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu38" type="number" class="form-control @error('nikibu38') is-invalid @enderror" name="nikibu38" value="{{ old('nikibu38') }}" placeholder="NIK Ibu" required autocomplete="nikibu38" autofocus>
                @error('nikibu38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu38" type="number" class="form-control @error('tahunlahiribu38') is-invalid @enderror" name="tahunlahiribu38" value="{{ old('tahunlahiribu38') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu38" autofocus>
                @error('tahunlahiribu38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu38" class="form-control @error('pendidikanibu38') is-invalid @enderror" name="pendidikanibu38" value="{{ old('pendidikanibu38') }}" required autocomplete="pendidikanibu38" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu38" class="form-control @error('pekerjaanibu38') is-invalid @enderror" name="pekerjaanibu38" value="{{ old('pekerjaanibu38') }}" required autocomplete="pekerjaanibu38" autofocus>
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
                @error('pekerjaanibu38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan38" class="form-control @error('penghasilan38') is-invalid @enderror" name="penghasilan38" value="{{ old('penghasilan38') }}" required autocomplete="penghasilan38" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi38" type="text" class="form-control @error('prestasi38') is-invalid @enderror" name="prestasi38" value="{{ old('prestasi38') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi38" autofocus>
                @error('prestasi38')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp38" type="text" class="form-control @error('nohp38') is-invalid @enderror" name="nohp38" value="{{ old('nohp38') }}" placeholder="No HP" required autocomplete="nohp38" autofocus>
                @error('nohp38')
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

  <!-- Modal Import Mts8 -->
  <div class="modal fade" id="importMts8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importmts8') }}" method="post" enctype="multipart/form-data">
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
        var mts8_id = $(this).attr('mts8-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data MTs kelas 8 dengan id "+mts8_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('mts8') }}/"+mts8_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop