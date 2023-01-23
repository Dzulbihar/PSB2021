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

              <h1 class="panel-title"><b>Data Santri Jenjang SMP 2 Kelas 8</b></h1>
              
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
                    @foreach($data_smp28 as $smp28)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>   {{ $smp28->namalengkap28}}   </td>
                      <td>{{ $smp28->tempatlahir28}}</td>
                      <td>{{ $smp28->tbt28}}</td>
                      <td>{{ $smp28->jenkel28}}</td>
                      <td>{{ $smp28->kab28}}</td>
                      <td>{{ $smp28->namaayah28}}</td>
                      <td>{{ $smp28->pekerjaanayah28}}</td>
                      <td>{{ $smp28->nohp28}}</td>
                      <td>
                        <a href="{{url('smp28')}}/{{$smp28->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('smp28') }}/{{$smp28->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSmp28">
                 Import Excel
               </a> 
               <a href="{{ url('smp28/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data smp28</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('smp28/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name28"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap28" type="text" class="form-control @error('namalengkap28') is-invalid @enderror" name="namalengkap28" value="{{ old('namalengkap28') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap28" autofocus>
                @error('namalengkap28')
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
                <input id="nisn28" type="number" class="form-control @error('nisn28') is-invalid @enderror" name="nisn28" value="{{ old('nisn28') }}" placeholder="NISN" required autocomplete="nisn28" autofocus>
                @error('nisn28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik28" type="number" class="form-control @error('nik28') is-invalid @enderror" name="nik28" value="{{ old('nik28') }}" placeholder="NIK" required autocomplete="nik28" autofocus>
                @error('nik28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk28" type="number" class="form-control @error('nokk28') is-invalid @enderror" name="nokk28" value="{{ old('nokk28') }}" placeholder="No KK" required autocomplete="nokk28" autofocus>
                @error('nokk28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir28" type="text" class="form-control @error('tempatlahir28') is-invalid @enderror" name="tempatlahir28" value="{{ old('tempatlahir28') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir28" autofocus>
                @error('tempatlahir28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt28" type="date" class="form-control @error('tbt28') is-invalid @enderror" name="tbt28" value="{{ old('tbt28') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt28" autofocus>
                @error('tbt28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel28" class="form-control @error('jenkel28') is-invalid @enderror" name="jenkel28" value="{{ old('jenkel28') }}" required autocomplete="jenkel28" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa28" type="text" class="form-control @error('desa28') is-invalid @enderror" name="desa28" value="{{ old('desa28') }}" placeholder="Desa" required autocomplete="desa28" autofocus>
                @error('desa28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec28" type="text" class="form-control @error('kec28') is-invalid @enderror" name="kec28" value="{{ old('kec28') }}" placeholder="Kecamatan" required autocomplete="kec28" autofocus>
                @error('kec28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab28" type="text" class="form-control @error('kab28') is-invalid @enderror" name="kab28" value="{{ old('kab28') }}" placeholder="Kabupaten / Kota" required autocomplete="kab28" autofocus>
                @error('kab28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov28" type="text" class="form-control @error('prov28') is-invalid @enderror" name="prov28" value="{{ old('prov28') }}" placeholder="Provinsi" required autocomplete="prov28" autofocus>
                @error('prov28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos28" type="text" class="form-control @error('kodepos28') is-invalid @enderror" name="kodepos28" value="{{ old('kodepos28') }}" placeholder="Kode Pos" required autocomplete="kodepos28" autofocus>
                @error('kodepos28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita28" type="text" class="form-control @error('cita28') is-invalid @enderror" name="cita28" value="{{ old('cita28') }}" placeholder="Alamat Lengkap" required autocomplete="cita28" autofocus>
                @error('cita28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara28" type="number" class="form-control @error('jumlahsaudara28') is-invalid @enderror" name="jumlahsaudara28" value="{{ old('jumlahsaudara28') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara28" autofocus>
                @error('jumlahsaudara28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah28" type="text" class="form-control @error('asalsekolah28') is-invalid @enderror" name="asalsekolah28" value="{{ old('asalsekolah28') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah28" autofocus>
                @error('asalsekolah28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah28" type="text" class="form-control @error('alamatasalsekolah28') is-invalid @enderror" name="alamatasalsekolah28" value="{{ old('alamatasalsekolah28') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah28" autofocus>
                @error('alamatasalsekolah28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah28" type="text" class="form-control @error('namaayah28') is-invalid @enderror" name="namaayah28" value="{{ old('namaayah28') }}" placeholder="Nama Ayah" required autocomplete="namaayah28" autofocus>
                @error('namaayah28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah28" type="number" class="form-control @error('nikayah28') is-invalid @enderror" name="nikayah28" value="{{ old('nikayah28') }}" placeholder="NIK Ayah" required autocomplete="nikayah28" autofocus>
                @error('nikayah28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah28" type="number" class="form-control @error('tahunlahirayah28') is-invalid @enderror" name="tahunlahirayah28" value="{{ old('tahunlahirayah28') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah28" autofocus>
                @error('tahunlahirayah28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah28" class="form-control @error('pendidikanayah28') is-invalid @enderror" name="pendidikanayah28" value="{{ old('pendidikanayah28') }}" required autocomplete="pendidikanayah28" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah28" class="form-control @error('pekerjaanayah28') is-invalid @enderror" name="pekerjaanayah28" value="{{ old('pekerjaanayah28') }}" required autocomplete="pekerjaanayah28" autofocus>
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
                @error('pekerjaanayah28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu28" type="text" class="form-control @error('namaibu28') is-invalid @enderror" name="namaibu28" value="{{ old('namaibu28') }}" placeholder="Nama Ibu" required autocomplete="namaibu28" autofocus>
                @error('namaibu28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu28" type="number" class="form-control @error('nikibu28') is-invalid @enderror" name="nikibu28" value="{{ old('nikibu28') }}" placeholder="NIK Ibu" required autocomplete="nikibu28" autofocus>
                @error('nikibu28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu28" type="number" class="form-control @error('tahunlahiribu28') is-invalid @enderror" name="tahunlahiribu28" value="{{ old('tahunlahiribu28') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu28" autofocus>
                @error('tahunlahiribu28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu28" class="form-control @error('pendidikanibu28') is-invalid @enderror" name="pendidikanibu28" value="{{ old('pendidikanibu28') }}" required autocomplete="pendidikanibu28" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu28" class="form-control @error('pekerjaanibu28') is-invalid @enderror" name="pekerjaanibu28" value="{{ old('pekerjaanibu28') }}" required autocomplete="pekerjaanibu28" autofocus>
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
                @error('pekerjaanibu28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan28" class="form-control @error('penghasilan28') is-invalid @enderror" name="penghasilan28" value="{{ old('penghasilan28') }}" required autocomplete="penghasilan28" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi28" type="text" class="form-control @error('prestasi28') is-invalid @enderror" name="prestasi28" value="{{ old('prestasi28') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi28" autofocus>
                @error('prestasi28')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp28" type="text" class="form-control @error('nohp28') is-invalid @enderror" name="nohp28" value="{{ old('nohp28') }}" placeholder="No HP" required autocomplete="nohp28" autofocus>
                @error('nohp28')
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

  <!-- Modal Import Smp28 -->
  <div class="modal fade" id="importSmp28" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsmp28') }}" method="post" enctype="multipart/form-data">
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
        var smp28_id = $(this).attr('smp28-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMP 2 kelas 8 dengan id "+smp28_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('smp28') }}/"+smp28_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop