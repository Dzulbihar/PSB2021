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

              <h1 class="panel-title"><b>Data Santri Jenjang Mahad Aly Semester 5-6</b></h1>
              
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
                    @foreach($data_mahadaly3 as $mahadaly3)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $mahadaly3->namalengkap73}} </td>
                      <td>{{ $mahadaly3->status73}}</td>
                      <td>{{ $mahadaly3->tempatlahir73}}, {{ $mahadaly3->tbt73}}</td>
                      <td>{{ $mahadaly3->jenkel73}}</td>
                      <td>{{ $mahadaly3->cita73}}</td>
                      <td>{{ $mahadaly3->namaayah73}}</td>
                      <td>{{ $mahadaly3->pekerjaanayah73}}</td>
                      <td>{{ $mahadaly3->nohp73}}</td>
                      <td>
                        <a href="{{url('mahadaly3')}}/{{$mahadaly3->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('mahadaly3') }}/{{$mahadaly3->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" mahadaly3-id="{{$mahadaly3->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importMahadaly3">
                 Import Excel
               </a> 
               <a href="{{ url('mahadaly3/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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

        <form action="{{ url('mahadaly3/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name73"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap73" type="text" class="form-control @error('namalengkap73') is-invalid @enderror" name="namalengkap73" value="{{ old('namalengkap73') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap73" autofocus>
                @error('namalengkap73')
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
                <input id="nisn73" type="number" class="form-control @error('nisn73') is-invalid @enderror" name="nisn73" value="{{ old('nisn73') }}" placeholder="NISN" required autocomplete="nisn73" autofocus>
                @error('nisn73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik73" type="number" class="form-control @error('nik73') is-invalid @enderror" name="nik73" value="{{ old('nik73') }}" placeholder="NIK" required autocomplete="nik73" autofocus>
                @error('nik73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk73" type="number" class="form-control @error('nokk73') is-invalid @enderror" name="nokk73" value="{{ old('nokk73') }}" placeholder="No KK" required autocomplete="nokk73" autofocus>
                @error('nokk73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir73" type="text" class="form-control @error('tempatlahir73') is-invalid @enderror" name="tempatlahir73" value="{{ old('tempatlahir73') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir73" autofocus>
                @error('tempatlahir73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt73" type="date" class="form-control @error('tbt73') is-invalid @enderror" name="tbt73" value="{{ old('tbt73') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt73" autofocus>
                @error('tbt73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel73" class="form-control @error('jenkel73') is-invalid @enderror" name="jenkel73" value="{{ old('jenkel73') }}" required autocomplete="jenkel73" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa73" type="text" class="form-control @error('desa73') is-invalid @enderror" name="desa73" value="{{ old('desa73') }}" placeholder="Desa" required autocomplete="desa73" autofocus>
                @error('desa73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec73" type="text" class="form-control @error('kec73') is-invalid @enderror" name="kec73" value="{{ old('kec73') }}" placeholder="Kecamatan" required autocomplete="kec73" autofocus>
                @error('kec73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab73" type="text" class="form-control @error('kab73') is-invalid @enderror" name="kab73" value="{{ old('kab73') }}" placeholder="Kabupaten / Kota" required autocomplete="kab73" autofocus>
                @error('kab73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov73" type="text" class="form-control @error('prov73') is-invalid @enderror" name="prov73" value="{{ old('prov73') }}" placeholder="Provinsi" required autocomplete="prov73" autofocus>
                @error('prov73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos73" type="text" class="form-control @error('kodepos73') is-invalid @enderror" name="kodepos73" value="{{ old('kodepos73') }}" placeholder="Kode Pos" required autocomplete="kodepos73" autofocus>
                @error('kodepos73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita73" type="text" class="form-control @error('cita73') is-invalid @enderror" name="cita73" value="{{ old('cita73') }}" placeholder="Alamat Lengkap" required autocomplete="cita73" autofocus>
                @error('cita73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara73" type="number" class="form-control @error('jumlahsaudara73') is-invalid @enderror" name="jumlahsaudara73" value="{{ old('jumlahsaudara73') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara73" autofocus>
                @error('jumlahsaudara73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah73" type="text" class="form-control @error('asalsekolah73') is-invalid @enderror" name="asalsekolah73" value="{{ old('asalsekolah73') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah73" autofocus>
                @error('asalsekolah73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah73" type="text" class="form-control @error('alamatasalsekolah73') is-invalid @enderror" name="alamatasalsekolah73" value="{{ old('alamatasalsekolah73') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah73" autofocus>
                @error('alamatasalsekolah73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah73" type="text" class="form-control @error('namaayah73') is-invalid @enderror" name="namaayah73" value="{{ old('namaayah73') }}" placeholder="Nama Ayah" required autocomplete="namaayah73" autofocus>
                @error('namaayah73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah73" type="number" class="form-control @error('nikayah73') is-invalid @enderror" name="nikayah73" value="{{ old('nikayah73') }}" placeholder="NIK Ayah" required autocomplete="nikayah73" autofocus>
                @error('nikayah73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah73" type="number" class="form-control @error('tahunlahirayah73') is-invalid @enderror" name="tahunlahirayah73" value="{{ old('tahunlahirayah73') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah73" autofocus>
                @error('tahunlahirayah73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah73" class="form-control @error('pendidikanayah73') is-invalid @enderror" name="pendidikanayah73" value="{{ old('pendidikanayah73') }}" required autocomplete="pendidikanayah73" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah73" class="form-control @error('pekerjaanayah73') is-invalid @enderror" name="pekerjaanayah73" value="{{ old('pekerjaanayah73') }}" required autocomplete="pekerjaanayah73" autofocus>
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
                @error('pekerjaanayah73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu73" type="text" class="form-control @error('namaibu73') is-invalid @enderror" name="namaibu73" value="{{ old('namaibu73') }}" placeholder="Nama Ibu" required autocomplete="namaibu73" autofocus>
                @error('namaibu73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu73" type="number" class="form-control @error('nikibu73') is-invalid @enderror" name="nikibu73" value="{{ old('nikibu73') }}" placeholder="NIK Ibu" required autocomplete="nikibu73" autofocus>
                @error('nikibu73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu73" type="number" class="form-control @error('tahunlahiribu73') is-invalid @enderror" name="tahunlahiribu73" value="{{ old('tahunlahiribu73') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu73" autofocus>
                @error('tahunlahiribu73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu73" class="form-control @error('pendidikanibu73') is-invalid @enderror" name="pendidikanibu73" value="{{ old('pendidikanibu73') }}" required autocomplete="pendidikanibu73" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu73" class="form-control @error('pekerjaanibu73') is-invalid @enderror" name="pekerjaanibu73" value="{{ old('pekerjaanibu73') }}" required autocomplete="pekerjaanibu73" autofocus>
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
                @error('pekerjaanibu73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan73" class="form-control @error('penghasilan73') is-invalid @enderror" name="penghasilan73" value="{{ old('penghasilan73') }}" required autocomplete="penghasilan73" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi73" type="text" class="form-control @error('prestasi73') is-invalid @enderror" name="prestasi73" value="{{ old('prestasi73') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi73" autofocus>
                @error('prestasi73')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp73" type="text" class="form-control @error('nohp73') is-invalid @enderror" name="nohp73" value="{{ old('nohp73') }}" placeholder="No HP" required autocomplete="nohp73" autofocus>
                @error('nohp73')
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

  <!-- Modal Import Mahadaly3 -->
  <div class="modal fade" id="importMahadaly3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importmahadaly3') }}" method="post" enctype="multipart/form-data">
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
        var mahadaly3_id = $(this).attr('mahadaly3-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data Mahad Aly Semester 5-6 dengan id "+mahadaly3_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('mahadaly3') }}/"+mahadaly3_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop