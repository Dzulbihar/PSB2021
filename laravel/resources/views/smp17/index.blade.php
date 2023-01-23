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

              <h1 class="panel-title"><b>Data Santri Jenjang SMP 1 Kelas 7</b></h1>
              
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
                    @foreach($data_smp17 as $smp17)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>   {{ $smp17->namalengkap17}}  </td>
                      <td>{{ $smp17->status17}}</td>
                      <td>{{ $smp17->tempatlahir17}}, {{ $smp17->tbt17}}</td>
                      <td>{{ $smp17->jenkel17}}</td>
                      <td>{{ $smp17->cita17}}</td>
                      <td>{{ $smp17->namaayah17}}</td>
                      <td>{{ $smp17->pekerjaanayah17}}</td>
                      <td>{{ $smp17->nohp17}}</td>
                      <td>
                        <a href="{{url('smp17')}}/{{$smp17->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('smp17') }}/{{$smp17->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" smp17-id="{{$smp17->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSmp17">
                 Import Excel
               </a> 
               <a href="{{ url('smp17/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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

        <form action="{{ url('smp17/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name17"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap17" type="text" class="form-control @error('namalengkap17') is-invalid @enderror" name="namalengkap17" value="{{ old('namalengkap17') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap17" autofocus>
                @error('namalengkap17')
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
                <input id="nisn17" type="number" class="form-control @error('nisn17') is-invalid @enderror" name="nisn17" value="{{ old('nisn17') }}" placeholder="NISN" required autocomplete="nisn17" autofocus>
                @error('nisn17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik17" type="number" class="form-control @error('nik17') is-invalid @enderror" name="nik17" value="{{ old('nik17') }}" placeholder="NIK" required autocomplete="nik17" autofocus>
                @error('nik17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk17" type="number" class="form-control @error('nokk17') is-invalid @enderror" name="nokk17" value="{{ old('nokk17') }}" placeholder="No KK" required autocomplete="nokk17" autofocus>
                @error('nokk17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir17" type="text" class="form-control @error('tempatlahir17') is-invalid @enderror" name="tempatlahir17" value="{{ old('tempatlahir17') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir17" autofocus>
                @error('tempatlahir17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt17" type="date" class="form-control @error('tbt17') is-invalid @enderror" name="tbt17" value="{{ old('tbt17') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt17" autofocus>
                @error('tbt17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel17" class="form-control @error('jenkel17') is-invalid @enderror" name="jenkel17" value="{{ old('jenkel17') }}" required autocomplete="jenkel17" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa17" type="text" class="form-control @error('desa17') is-invalid @enderror" name="desa17" value="{{ old('desa17') }}" placeholder="Desa" required autocomplete="desa17" autofocus>
                @error('desa17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec17" type="text" class="form-control @error('kec17') is-invalid @enderror" name="kec17" value="{{ old('kec17') }}" placeholder="Kecamatan" required autocomplete="kec17" autofocus>
                @error('kec17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab17" type="text" class="form-control @error('kab17') is-invalid @enderror" name="kab17" value="{{ old('kab17') }}" placeholder="Kabupaten / Kota" required autocomplete="kab17" autofocus>
                @error('kab17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov17" type="text" class="form-control @error('prov17') is-invalid @enderror" name="prov17" value="{{ old('prov17') }}" placeholder="Provinsi" required autocomplete="prov17" autofocus>
                @error('prov17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos17" type="text" class="form-control @error('kodepos17') is-invalid @enderror" name="kodepos17" value="{{ old('kodepos17') }}" placeholder="Kode Pos" required autocomplete="kodepos17" autofocus>
                @error('kodepos17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita17" type="text" class="form-control @error('cita17') is-invalid @enderror" name="cita17" value="{{ old('cita17') }}" placeholder="Alamat Lengkap" required autocomplete="cita17" autofocus>
                @error('cita17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara17" type="number" class="form-control @error('jumlahsaudara17') is-invalid @enderror" name="jumlahsaudara17" value="{{ old('jumlahsaudara17') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara17" autofocus>
                @error('jumlahsaudara17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah17" type="text" class="form-control @error('asalsekolah17') is-invalid @enderror" name="asalsekolah17" value="{{ old('asalsekolah17') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah17" autofocus>
                @error('asalsekolah17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah17" type="text" class="form-control @error('alamatasalsekolah17') is-invalid @enderror" name="alamatasalsekolah17" value="{{ old('alamatasalsekolah17') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah17" autofocus>
                @error('alamatasalsekolah17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah17" type="text" class="form-control @error('namaayah17') is-invalid @enderror" name="namaayah17" value="{{ old('namaayah17') }}" placeholder="Nama Ayah" required autocomplete="namaayah17" autofocus>
                @error('namaayah17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah17" type="number" class="form-control @error('nikayah17') is-invalid @enderror" name="nikayah17" value="{{ old('nikayah17') }}" placeholder="NIK Ayah" required autocomplete="nikayah17" autofocus>
                @error('nikayah17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah17" type="number" class="form-control @error('tahunlahirayah17') is-invalid @enderror" name="tahunlahirayah17" value="{{ old('tahunlahirayah17') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah17" autofocus>
                @error('tahunlahirayah17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah17" class="form-control @error('pendidikanayah17') is-invalid @enderror" name="pendidikanayah17" value="{{ old('pendidikanayah17') }}" required autocomplete="pendidikanayah17" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah17" class="form-control @error('pekerjaanayah17') is-invalid @enderror" name="pekerjaanayah17" value="{{ old('pekerjaanayah17') }}" required autocomplete="pekerjaanayah17" autofocus>
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
                @error('pekerjaanayah17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu17" type="text" class="form-control @error('namaibu17') is-invalid @enderror" name="namaibu17" value="{{ old('namaibu17') }}" placeholder="Nama Ibu" required autocomplete="namaibu17" autofocus>
                @error('namaibu17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu17" type="number" class="form-control @error('nikibu17') is-invalid @enderror" name="nikibu17" value="{{ old('nikibu17') }}" placeholder="NIK Ibu" required autocomplete="nikibu17" autofocus>
                @error('nikibu17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu17" type="number" class="form-control @error('tahunlahiribu17') is-invalid @enderror" name="tahunlahiribu17" value="{{ old('tahunlahiribu17') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu17" autofocus>
                @error('tahunlahiribu17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu17" class="form-control @error('pendidikanibu17') is-invalid @enderror" name="pendidikanibu17" value="{{ old('pendidikanibu17') }}" required autocomplete="pendidikanibu17" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu17" class="form-control @error('pekerjaanibu17') is-invalid @enderror" name="pekerjaanibu17" value="{{ old('pekerjaanibu17') }}" required autocomplete="pekerjaanibu17" autofocus>
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
                @error('pekerjaanibu17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan17" class="form-control @error('penghasilan17') is-invalid @enderror" name="penghasilan17" value="{{ old('penghasilan17') }}" required autocomplete="penghasilan17" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi17" type="text" class="form-control @error('prestasi17') is-invalid @enderror" name="prestasi17" value="{{ old('prestasi17') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi17" autofocus>
                @error('prestasi17')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp17" type="text" class="form-control @error('nohp17') is-invalid @enderror" name="nohp17" value="{{ old('nohp17') }}" placeholder="No HP" required autocomplete="nohp17" autofocus>
                @error('nohp17')
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

  <!-- Modal Import Smp17 -->
  <div class="modal fade" id="importSmp17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsmp17') }}" method="post" enctype="multipart/form-data">
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
        var smp17_id = $(this).attr('smp17-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMP 1 kelas 7 dengan id "+smp17_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('smp17') }}/"+smp17_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop