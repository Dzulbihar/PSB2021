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

              <h1 class="panel-title"><b>Data Santri Jenjang SMK TKJ Kelas 11</b></h1>
              
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
                    @foreach($data_smktkj11 as $smktkj11)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $smktkj11->namalengkap42}}  </td>
                      <td>{{ $smktkj11->status42}}</td>
                      <td>{{ $smktkj11->tempatlahir42}}, {{ $smktkj11->tbt42}}</td>
                      <td>{{ $smktkj11->jenkel42}}</td>
                      <td>{{ $smktkj11->cita42}}</td>
                      <td>{{ $smktkj11->namaayah42}}</td>
                      <td>{{ $smktkj11->pekerjaanayah42}}</td>
                      <td>{{ $smktkj11->nohp42}}</td>
                      <td>
                        <a href="{{url('smktkj11')}}/{{$smktkj11->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('smktkj11') }}/{{$smktkj11->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" smktkj11-id="{{$smktkj11->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSmktkj11">
                 Import Excel
               </a> 
               <a href="{{ url('smktkj11/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data SMK TKJ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('smktkj11/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name42"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap42" type="text" class="form-control @error('namalengkap42') is-invalid @enderror" name="namalengkap42" value="{{ old('namalengkap42') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap42" autofocus>
                @error('namalengkap42')
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
                <input id="nisn42" type="number" class="form-control @error('nisn42') is-invalid @enderror" name="nisn42" value="{{ old('nisn42') }}" placeholder="NISN" required autocomplete="nisn42" autofocus>
                @error('nisn42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik42" type="number" class="form-control @error('nik42') is-invalid @enderror" name="nik42" value="{{ old('nik42') }}" placeholder="NIK" required autocomplete="nik42" autofocus>
                @error('nik42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk42" type="number" class="form-control @error('nokk42') is-invalid @enderror" name="nokk42" value="{{ old('nokk42') }}" placeholder="No KK" required autocomplete="nokk42" autofocus>
                @error('nokk42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir42" type="text" class="form-control @error('tempatlahir42') is-invalid @enderror" name="tempatlahir42" value="{{ old('tempatlahir42') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir42" autofocus>
                @error('tempatlahir42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt42" type="date" class="form-control @error('tbt42') is-invalid @enderror" name="tbt42" value="{{ old('tbt42') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt42" autofocus>
                @error('tbt42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel42" class="form-control @error('jenkel42') is-invalid @enderror" name="jenkel42" value="{{ old('jenkel42') }}" required autocomplete="jenkel42" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa42" type="text" class="form-control @error('desa42') is-invalid @enderror" name="desa42" value="{{ old('desa42') }}" placeholder="Desa" required autocomplete="desa42" autofocus>
                @error('desa42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec42" type="text" class="form-control @error('kec42') is-invalid @enderror" name="kec42" value="{{ old('kec42') }}" placeholder="Kecamatan" required autocomplete="kec42" autofocus>
                @error('kec42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab42" type="text" class="form-control @error('kab42') is-invalid @enderror" name="kab42" value="{{ old('kab42') }}" placeholder="Kabupaten / Kota" required autocomplete="kab42" autofocus>
                @error('kab42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov42" type="text" class="form-control @error('prov42') is-invalid @enderror" name="prov42" value="{{ old('prov42') }}" placeholder="Provinsi" required autocomplete="prov42" autofocus>
                @error('prov42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos42" type="text" class="form-control @error('kodepos42') is-invalid @enderror" name="kodepos42" value="{{ old('kodepos42') }}" placeholder="Kode Pos" required autocomplete="kodepos42" autofocus>
                @error('kodepos42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita42" type="text" class="form-control @error('cita42') is-invalid @enderror" name="cita42" value="{{ old('cita42') }}" placeholder="Alamat Lengkap" required autocomplete="cita42" autofocus>
                @error('cita42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara42" type="number" class="form-control @error('jumlahsaudara42') is-invalid @enderror" name="jumlahsaudara42" value="{{ old('jumlahsaudara42') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara42" autofocus>
                @error('jumlahsaudara42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah42" type="text" class="form-control @error('asalsekolah42') is-invalid @enderror" name="asalsekolah42" value="{{ old('asalsekolah42') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah42" autofocus>
                @error('asalsekolah42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah42" type="text" class="form-control @error('alamatasalsekolah42') is-invalid @enderror" name="alamatasalsekolah42" value="{{ old('alamatasalsekolah42') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah42" autofocus>
                @error('alamatasalsekolah42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah42" type="text" class="form-control @error('namaayah42') is-invalid @enderror" name="namaayah42" value="{{ old('namaayah42') }}" placeholder="Nama Ayah" required autocomplete="namaayah42" autofocus>
                @error('namaayah42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah42" type="number" class="form-control @error('nikayah42') is-invalid @enderror" name="nikayah42" value="{{ old('nikayah42') }}" placeholder="NIK Ayah" required autocomplete="nikayah42" autofocus>
                @error('nikayah42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah42" type="number" class="form-control @error('tahunlahirayah42') is-invalid @enderror" name="tahunlahirayah42" value="{{ old('tahunlahirayah42') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah42" autofocus>
                @error('tahunlahirayah42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah42" class="form-control @error('pendidikanayah42') is-invalid @enderror" name="pendidikanayah42" value="{{ old('pendidikanayah42') }}" required autocomplete="pendidikanayah42" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah42" class="form-control @error('pekerjaanayah42') is-invalid @enderror" name="pekerjaanayah42" value="{{ old('pekerjaanayah42') }}" required autocomplete="pekerjaanayah42" autofocus>
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
                @error('pekerjaanayah42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu42" type="text" class="form-control @error('namaibu42') is-invalid @enderror" name="namaibu42" value="{{ old('namaibu42') }}" placeholder="Nama Ibu" required autocomplete="namaibu42" autofocus>
                @error('namaibu42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu42" type="number" class="form-control @error('nikibu42') is-invalid @enderror" name="nikibu42" value="{{ old('nikibu42') }}" placeholder="NIK Ibu" required autocomplete="nikibu42" autofocus>
                @error('nikibu42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu42" type="number" class="form-control @error('tahunlahiribu42') is-invalid @enderror" name="tahunlahiribu42" value="{{ old('tahunlahiribu42') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu42" autofocus>
                @error('tahunlahiribu42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu42" class="form-control @error('pendidikanibu42') is-invalid @enderror" name="pendidikanibu42" value="{{ old('pendidikanibu42') }}" required autocomplete="pendidikanibu42" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu42" class="form-control @error('pekerjaanibu42') is-invalid @enderror" name="pekerjaanibu42" value="{{ old('pekerjaanibu42') }}" required autocomplete="pekerjaanibu42" autofocus>
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
                @error('pekerjaanibu42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan42" class="form-control @error('penghasilan42') is-invalid @enderror" name="penghasilan42" value="{{ old('penghasilan42') }}" required autocomplete="penghasilan42" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi42" type="text" class="form-control @error('prestasi42') is-invalid @enderror" name="prestasi42" value="{{ old('prestasi42') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi42" autofocus>
                @error('prestasi42')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp42" type="text" class="form-control @error('nohp42') is-invalid @enderror" name="nohp42" value="{{ old('nohp42') }}" placeholder="No HP" required autocomplete="nohp42" autofocus>
                @error('nohp42')
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

  <!-- Modal Import Smktkj11 -->
  <div class="modal fade" id="importSmktkj11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsmktkj11') }}" method="post" enctype="multipart/form-data">
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
        var smktkj11_id = $(this).attr('smktkj11-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMK TKJ kelas 11 dengan id "+smktkj11_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('smktkj11') }}/"+smktkj11_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop