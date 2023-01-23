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

              <h1 class="panel-title"><b>Data Santri Jenjang SMP 2 Kelas 9</b></h1>

            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Tempat Lahir</th>
                      <th scope="col">Tgl/Bulan/Tahun Lahir</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Kabupaten</th>
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
                    @foreach($data_smp29 as $smp29)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $smp29->namalengkap29}}   </td>
                      <td>{{ $smp29->tempatlahir29}}</td>
                      <td>{{ $smp29->tbt29}}</td>
                      <td>{{ $smp29->jenkel29}}</td>
                      <td>{{ $smp29->kab29}}</td>
                      <td>{{ $smp29->namaayah29}}</td>
                      <td>{{ $smp29->pekerjaanayah29}}</td>
                      <td>{{ $smp29->nohp29}}</td>
                      <td>
                        <a href="{{url('smp29')}}/{{$smp29->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="#" class="btn btn-danger btn-sm delete" smp29-id="{{$smp29->id}}">Delete</a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSmp29">
                 Import Excel
               </a> 
               <a href="{{ url('smp29/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data smp29</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('smp29/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name29"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap29" type="text" class="form-control @error('namalengkap29') is-invalid @enderror" name="namalengkap29" value="{{ old('namalengkap29') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap29" autofocus>
                @error('namalengkap29')
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
                <input id="nisn29" type="number" class="form-control @error('nisn29') is-invalid @enderror" name="nisn29" value="{{ old('nisn29') }}" placeholder="NISN" required autocomplete="nisn29" autofocus>
                @error('nisn29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik29" type="number" class="form-control @error('nik29') is-invalid @enderror" name="nik29" value="{{ old('nik29') }}" placeholder="NIK" required autocomplete="nik29" autofocus>
                @error('nik29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk29" type="number" class="form-control @error('nokk29') is-invalid @enderror" name="nokk29" value="{{ old('nokk29') }}" placeholder="No KK" required autocomplete="nokk29" autofocus>
                @error('nokk29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir29" type="text" class="form-control @error('tempatlahir29') is-invalid @enderror" name="tempatlahir29" value="{{ old('tempatlahir29') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir29" autofocus>
                @error('tempatlahir29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt29" type="date" class="form-control @error('tbt29') is-invalid @enderror" name="tbt29" value="{{ old('tbt29') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt29" autofocus>
                @error('tbt29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel29" class="form-control @error('jenkel29') is-invalid @enderror" name="jenkel29" value="{{ old('jenkel29') }}" required autocomplete="jenkel29" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa29" type="text" class="form-control @error('desa29') is-invalid @enderror" name="desa29" value="{{ old('desa29') }}" placeholder="Desa" required autocomplete="desa29" autofocus>
                @error('desa29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec29" type="text" class="form-control @error('kec29') is-invalid @enderror" name="kec29" value="{{ old('kec29') }}" placeholder="Kecamatan" required autocomplete="kec29" autofocus>
                @error('kec29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab29" type="text" class="form-control @error('kab29') is-invalid @enderror" name="kab29" value="{{ old('kab29') }}" placeholder="Kabupaten / Kota" required autocomplete="kab29" autofocus>
                @error('kab29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov29" type="text" class="form-control @error('prov29') is-invalid @enderror" name="prov29" value="{{ old('prov29') }}" placeholder="Provinsi" required autocomplete="prov29" autofocus>
                @error('prov29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos29" type="text" class="form-control @error('kodepos29') is-invalid @enderror" name="kodepos29" value="{{ old('kodepos29') }}" placeholder="Kode Pos" required autocomplete="kodepos29" autofocus>
                @error('kodepos29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita29" type="text" class="form-control @error('cita29') is-invalid @enderror" name="cita29" value="{{ old('cita29') }}" placeholder="Alamat Lengkap" required autocomplete="cita29" autofocus>
                @error('cita29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara29" type="number" class="form-control @error('jumlahsaudara29') is-invalid @enderror" name="jumlahsaudara29" value="{{ old('jumlahsaudara29') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara29" autofocus>
                @error('jumlahsaudara29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah29" type="text" class="form-control @error('asalsekolah29') is-invalid @enderror" name="asalsekolah29" value="{{ old('asalsekolah29') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah29" autofocus>
                @error('asalsekolah29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah29" type="text" class="form-control @error('alamatasalsekolah29') is-invalid @enderror" name="alamatasalsekolah29" value="{{ old('alamatasalsekolah29') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah29" autofocus>
                @error('alamatasalsekolah29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah29" type="text" class="form-control @error('namaayah29') is-invalid @enderror" name="namaayah29" value="{{ old('namaayah29') }}" placeholder="Nama Ayah" required autocomplete="namaayah29" autofocus>
                @error('namaayah29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah29" type="number" class="form-control @error('nikayah29') is-invalid @enderror" name="nikayah29" value="{{ old('nikayah29') }}" placeholder="NIK Ayah" required autocomplete="nikayah29" autofocus>
                @error('nikayah29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah29" type="number" class="form-control @error('tahunlahirayah29') is-invalid @enderror" name="tahunlahirayah29" value="{{ old('tahunlahirayah29') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah29" autofocus>
                @error('tahunlahirayah29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah29" class="form-control @error('pendidikanayah29') is-invalid @enderror" name="pendidikanayah29" value="{{ old('pendidikanayah29') }}" required autocomplete="pendidikanayah29" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah29" class="form-control @error('pekerjaanayah29') is-invalid @enderror" name="pekerjaanayah29" value="{{ old('pekerjaanayah29') }}" required autocomplete="pekerjaanayah29" autofocus>
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
                @error('pekerjaanayah29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu29" type="text" class="form-control @error('namaibu29') is-invalid @enderror" name="namaibu29" value="{{ old('namaibu29') }}" placeholder="Nama Ibu" required autocomplete="namaibu29" autofocus>
                @error('namaibu29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu29" type="number" class="form-control @error('nikibu29') is-invalid @enderror" name="nikibu29" value="{{ old('nikibu29') }}" placeholder="NIK Ibu" required autocomplete="nikibu29" autofocus>
                @error('nikibu29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu29" type="number" class="form-control @error('tahunlahiribu29') is-invalid @enderror" name="tahunlahiribu29" value="{{ old('tahunlahiribu29') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu29" autofocus>
                @error('tahunlahiribu29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu29" class="form-control @error('pendidikanibu29') is-invalid @enderror" name="pendidikanibu29" value="{{ old('pendidikanibu29') }}" required autocomplete="pendidikanibu29" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu29" class="form-control @error('pekerjaanibu29') is-invalid @enderror" name="pekerjaanibu29" value="{{ old('pekerjaanibu29') }}" required autocomplete="pekerjaanibu29" autofocus>
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
                @error('pekerjaanibu29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan29" class="form-control @error('penghasilan29') is-invalid @enderror" name="penghasilan29" value="{{ old('penghasilan29') }}" required autocomplete="penghasilan29" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi29" type="text" class="form-control @error('prestasi29') is-invalid @enderror" name="prestasi29" value="{{ old('prestasi29') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi29" autofocus>
                @error('prestasi29')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp29" type="text" class="form-control @error('nohp29') is-invalid @enderror" name="nohp29" value="{{ old('nohp29') }}" placeholder="No HP" required autocomplete="nohp29" autofocus>
                @error('nohp29')
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

  <!-- Modal Import Smp29 -->
  <div class="modal fade" id="importSmp29" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsmp29') }}" method="post" enctype="multipart/form-data">
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
        var smp29_id = $(this).attr('smp29-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMP 2 kelas 9 dengan id "+smp29_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('smp29') }}/"+smp29_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop