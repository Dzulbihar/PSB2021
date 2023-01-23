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

              <h1 class="panel-title"><b>Data Santri Jenjang SMP 1 Kelas 9</b></h1>

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
                    @foreach($data_smp19 as $smp19)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>   {{ $smp19->namalengkap19}}  </td>
                      <td>{{ $smp19->status19}}</td>
                      <td>{{ $smp19->tempatlahir19}}, {{ $smp19->tbt19}}</td>
                      <td>{{ $smp19->jenkel19}}</td>
                      <td>{{ $smp19->cita19}}</td>
                      <td>{{ $smp19->namaayah19}}</td>
                      <td>{{ $smp19->pekerjaanayah19}}</td>
                      <td>{{ $smp19->nohp19}}</td>
                      <td>
                        <a href="{{url('smp19')}}/{{$smp19->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('smp19') }}/{{$smp19->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" smp19-id="{{$smp19->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSmp19">
                 Import Excel
               </a> 
               <a href="{{ url('smp19/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data SMP 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('smp19/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name19"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap19" type="text" class="form-control @error('namalengkap19') is-invalid @enderror" name="namalengkap19" value="{{ old('namalengkap19') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap19" autofocus>
                @error('namalengkap19')
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
                <input id="nisn19" type="number" class="form-control @error('nisn19') is-invalid @enderror" name="nisn19" value="{{ old('nisn19') }}" placeholder="NISN" required autocomplete="nisn19" autofocus>
                @error('nisn19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik19" type="number" class="form-control @error('nik19') is-invalid @enderror" name="nik19" value="{{ old('nik19') }}" placeholder="NIK" required autocomplete="nik19" autofocus>
                @error('nik19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk19" type="number" class="form-control @error('nokk19') is-invalid @enderror" name="nokk19" value="{{ old('nokk19') }}" placeholder="No KK" required autocomplete="nokk19" autofocus>
                @error('nokk19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir19" type="text" class="form-control @error('tempatlahir19') is-invalid @enderror" name="tempatlahir19" value="{{ old('tempatlahir19') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir19" autofocus>
                @error('tempatlahir19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt19" type="date" class="form-control @error('tbt19') is-invalid @enderror" name="tbt19" value="{{ old('tbt19') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt19" autofocus>
                @error('tbt19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel19" class="form-control @error('jenkel19') is-invalid @enderror" name="jenkel19" value="{{ old('jenkel19') }}" required autocomplete="jenkel19" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa19" type="text" class="form-control @error('desa19') is-invalid @enderror" name="desa19" value="{{ old('desa19') }}" placeholder="Desa" required autocomplete="desa19" autofocus>
                @error('desa19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec19" type="text" class="form-control @error('kec19') is-invalid @enderror" name="kec19" value="{{ old('kec19') }}" placeholder="Kecamatan" required autocomplete="kec19" autofocus>
                @error('kec19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab19" type="text" class="form-control @error('kab19') is-invalid @enderror" name="kab19" value="{{ old('kab19') }}" placeholder="Kabupaten / Kota" required autocomplete="kab19" autofocus>
                @error('kab19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov19" type="text" class="form-control @error('prov19') is-invalid @enderror" name="prov19" value="{{ old('prov19') }}" placeholder="Provinsi" required autocomplete="prov19" autofocus>
                @error('prov19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos19" type="text" class="form-control @error('kodepos19') is-invalid @enderror" name="kodepos19" value="{{ old('kodepos19') }}" placeholder="Kode Pos" required autocomplete="kodepos19" autofocus>
                @error('kodepos19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita19" type="text" class="form-control @error('cita19') is-invalid @enderror" name="cita19" value="{{ old('cita19') }}" placeholder="Alamat Lengkap" required autocomplete="cita19" autofocus>
                @error('cita19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara19" type="number" class="form-control @error('jumlahsaudara19') is-invalid @enderror" name="jumlahsaudara19" value="{{ old('jumlahsaudara19') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara19" autofocus>
                @error('jumlahsaudara19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah19" type="text" class="form-control @error('asalsekolah19') is-invalid @enderror" name="asalsekolah19" value="{{ old('asalsekolah19') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah19" autofocus>
                @error('asalsekolah19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah19" type="text" class="form-control @error('alamatasalsekolah19') is-invalid @enderror" name="alamatasalsekolah19" value="{{ old('alamatasalsekolah19') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah19" autofocus>
                @error('alamatasalsekolah19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah19" type="text" class="form-control @error('namaayah19') is-invalid @enderror" name="namaayah19" value="{{ old('namaayah19') }}" placeholder="Nama Ayah" required autocomplete="namaayah19" autofocus>
                @error('namaayah19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah19" type="number" class="form-control @error('nikayah19') is-invalid @enderror" name="nikayah19" value="{{ old('nikayah19') }}" placeholder="NIK Ayah" required autocomplete="nikayah19" autofocus>
                @error('nikayah19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah19" type="number" class="form-control @error('tahunlahirayah19') is-invalid @enderror" name="tahunlahirayah19" value="{{ old('tahunlahirayah19') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah19" autofocus>
                @error('tahunlahirayah19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah19" class="form-control @error('pendidikanayah19') is-invalid @enderror" name="pendidikanayah19" value="{{ old('pendidikanayah19') }}" required autocomplete="pendidikanayah19" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah19" class="form-control @error('pekerjaanayah19') is-invalid @enderror" name="pekerjaanayah19" value="{{ old('pekerjaanayah19') }}" required autocomplete="pekerjaanayah19" autofocus>
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
                @error('pekerjaanayah19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu19" type="text" class="form-control @error('namaibu19') is-invalid @enderror" name="namaibu19" value="{{ old('namaibu19') }}" placeholder="Nama Ibu" required autocomplete="namaibu19" autofocus>
                @error('namaibu19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu19" type="number" class="form-control @error('nikibu19') is-invalid @enderror" name="nikibu19" value="{{ old('nikibu19') }}" placeholder="NIK Ibu" required autocomplete="nikibu19" autofocus>
                @error('nikibu19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu19" type="number" class="form-control @error('tahunlahiribu19') is-invalid @enderror" name="tahunlahiribu19" value="{{ old('tahunlahiribu19') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu19" autofocus>
                @error('tahunlahiribu19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu19" class="form-control @error('pendidikanibu19') is-invalid @enderror" name="pendidikanibu19" value="{{ old('pendidikanibu19') }}" required autocomplete="pendidikanibu19" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu19" class="form-control @error('pekerjaanibu19') is-invalid @enderror" name="pekerjaanibu19" value="{{ old('pekerjaanibu19') }}" required autocomplete="pekerjaanibu19" autofocus>
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
                @error('pekerjaanibu19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan19" class="form-control @error('penghasilan19') is-invalid @enderror" name="penghasilan19" value="{{ old('penghasilan19') }}" required autocomplete="penghasilan19" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi19" type="text" class="form-control @error('prestasi19') is-invalid @enderror" name="prestasi19" value="{{ old('prestasi19') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi19" autofocus>
                @error('prestasi19')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp19" type="text" class="form-control @error('nohp19') is-invalid @enderror" name="nohp19" value="{{ old('nohp19') }}" placeholder="No HP" required autocomplete="nohp19" autofocus>
                @error('nohp19')
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

  <!-- Modal Import Smp19 -->
  <div class="modal fade" id="importSmp19" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsmp19') }}" method="post" enctype="multipart/form-data">
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
        var smp19_id = $(this).attr('smp19-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMP 1 kelas 9 dengan id "+smp19_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('smp19') }}/"+smp19_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop