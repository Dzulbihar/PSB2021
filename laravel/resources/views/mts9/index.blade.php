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
                    @foreach($data_mts9 as $mts9)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $mts9->namalengkap39}}</td>
                      <td>{{ $mts9->status39}}</td>
                      <td>{{ $mts9->tempatlahir39}}, {{ $mts9->tbt39}}</td>
                      <td>{{ $mts9->jenkel39}}</td>
                      <td>{{ $mts9->cita39}}</td>
                      <td>{{ $mts9->namaayah39}}</td>
                      <td>{{ $mts9->pekerjaanayah39}}</td>
                      <td>{{ $mts9->nohp39}}</td>
                      <td>
                        <a href="{{url('mts9')}}/{{$mts9->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('mts9') }}/{{$mts9->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" mts9-id="{{$mts9->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importMts9">
                 Import Excel
               </a> 
               <a href="{{ url('mts9/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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

        <form action="{{ url('mts9/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name39"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap39" type="text" class="form-control @error('namalengkap39') is-invalid @enderror" name="namalengkap39" value="{{ old('namalengkap39') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap39" autofocus>
                @error('namalengkap39')
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
                <input id="nisn39" type="number" class="form-control @error('nisn39') is-invalid @enderror" name="nisn39" value="{{ old('nisn39') }}" placeholder="NISN" required autocomplete="nisn39" autofocus>
                @error('nisn39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik39" type="number" class="form-control @error('nik39') is-invalid @enderror" name="nik39" value="{{ old('nik39') }}" placeholder="NIK" required autocomplete="nik39" autofocus>
                @error('nik39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk39" type="number" class="form-control @error('nokk39') is-invalid @enderror" name="nokk39" value="{{ old('nokk39') }}" placeholder="No KK" required autocomplete="nokk39" autofocus>
                @error('nokk39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir39" type="text" class="form-control @error('tempatlahir39') is-invalid @enderror" name="tempatlahir39" value="{{ old('tempatlahir39') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir39" autofocus>
                @error('tempatlahir39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt39" type="date" class="form-control @error('tbt39') is-invalid @enderror" name="tbt39" value="{{ old('tbt39') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt39" autofocus>
                @error('tbt39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel39" class="form-control @error('jenkel39') is-invalid @enderror" name="jenkel39" value="{{ old('jenkel39') }}" required autocomplete="jenkel39" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa39" type="text" class="form-control @error('desa39') is-invalid @enderror" name="desa39" value="{{ old('desa39') }}" placeholder="Desa" required autocomplete="desa39" autofocus>
                @error('desa39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec39" type="text" class="form-control @error('kec39') is-invalid @enderror" name="kec39" value="{{ old('kec39') }}" placeholder="Kecamatan" required autocomplete="kec39" autofocus>
                @error('kec39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab39" type="text" class="form-control @error('kab39') is-invalid @enderror" name="kab39" value="{{ old('kab39') }}" placeholder="Kabupaten / Kota" required autocomplete="kab39" autofocus>
                @error('kab39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov39" type="text" class="form-control @error('prov39') is-invalid @enderror" name="prov39" value="{{ old('prov39') }}" placeholder="Provinsi" required autocomplete="prov39" autofocus>
                @error('prov39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos39" type="text" class="form-control @error('kodepos39') is-invalid @enderror" name="kodepos39" value="{{ old('kodepos39') }}" placeholder="Kode Pos" required autocomplete="kodepos39" autofocus>
                @error('kodepos39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita39" type="text" class="form-control @error('cita39') is-invalid @enderror" name="cita39" value="{{ old('cita39') }}" placeholder="Alamat Lengkap" required autocomplete="cita39" autofocus>
                @error('cita39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara39" type="number" class="form-control @error('jumlahsaudara39') is-invalid @enderror" name="jumlahsaudara39" value="{{ old('jumlahsaudara39') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara39" autofocus>
                @error('jumlahsaudara39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah39" type="text" class="form-control @error('asalsekolah39') is-invalid @enderror" name="asalsekolah39" value="{{ old('asalsekolah39') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah39" autofocus>
                @error('asalsekolah39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah39" type="text" class="form-control @error('alamatasalsekolah39') is-invalid @enderror" name="alamatasalsekolah39" value="{{ old('alamatasalsekolah39') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah39" autofocus>
                @error('alamatasalsekolah39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah39" type="text" class="form-control @error('namaayah39') is-invalid @enderror" name="namaayah39" value="{{ old('namaayah39') }}" placeholder="Nama Ayah" required autocomplete="namaayah39" autofocus>
                @error('namaayah39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah39" type="number" class="form-control @error('nikayah39') is-invalid @enderror" name="nikayah39" value="{{ old('nikayah39') }}" placeholder="NIK Ayah" required autocomplete="nikayah39" autofocus>
                @error('nikayah39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah39" type="number" class="form-control @error('tahunlahirayah39') is-invalid @enderror" name="tahunlahirayah39" value="{{ old('tahunlahirayah39') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah39" autofocus>
                @error('tahunlahirayah39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah39" class="form-control @error('pendidikanayah39') is-invalid @enderror" name="pendidikanayah39" value="{{ old('pendidikanayah39') }}" required autocomplete="pendidikanayah39" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah39" class="form-control @error('pekerjaanayah39') is-invalid @enderror" name="pekerjaanayah39" value="{{ old('pekerjaanayah39') }}" required autocomplete="pekerjaanayah39" autofocus>
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
                @error('pekerjaanayah39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu39" type="text" class="form-control @error('namaibu39') is-invalid @enderror" name="namaibu39" value="{{ old('namaibu39') }}" placeholder="Nama Ibu" required autocomplete="namaibu39" autofocus>
                @error('namaibu39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu39" type="number" class="form-control @error('nikibu39') is-invalid @enderror" name="nikibu39" value="{{ old('nikibu39') }}" placeholder="NIK Ibu" required autocomplete="nikibu39" autofocus>
                @error('nikibu39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu39" type="number" class="form-control @error('tahunlahiribu39') is-invalid @enderror" name="tahunlahiribu39" value="{{ old('tahunlahiribu39') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu39" autofocus>
                @error('tahunlahiribu39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu39" class="form-control @error('pendidikanibu39') is-invalid @enderror" name="pendidikanibu39" value="{{ old('pendidikanibu39') }}" required autocomplete="pendidikanibu39" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu39" class="form-control @error('pekerjaanibu39') is-invalid @enderror" name="pekerjaanibu39" value="{{ old('pekerjaanibu39') }}" required autocomplete="pekerjaanibu39" autofocus>
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
                @error('pekerjaanibu39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan39" class="form-control @error('penghasilan39') is-invalid @enderror" name="penghasilan39" value="{{ old('penghasilan39') }}" required autocomplete="penghasilan39" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi39" type="text" class="form-control @error('prestasi39') is-invalid @enderror" name="prestasi39" value="{{ old('prestasi39') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi39" autofocus>
                @error('prestasi39')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp39" type="text" class="form-control @error('nohp39') is-invalid @enderror" name="nohp39" value="{{ old('nohp39') }}" placeholder="No HP" required autocomplete="nohp39" autofocus>
                @error('nohp39')
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

  <!-- Modal Import Mts9 -->
  <div class="modal fade" id="importMts9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importmts9') }}" method="post" enctype="multipart/form-data">
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
        var mts9_id = $(this).attr('mts9-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data MTs kelas 9 dengan id "+mts9_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('mts9') }}/"+mts9_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop