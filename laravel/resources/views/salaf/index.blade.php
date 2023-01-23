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

              <h1 class="panel-title"><b>Data Santri Salaf Roudlotul Muttaqin</b></h1>

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
                      <th scope="col">Tinggal di Kabupaten</th>
                      <th scope="col">Nama Ayah</th>
                      <th scope="col">Pekerja Ayah</th>
                      <th scope="col">No HP</th>
                      <th scope="col">AKSI</th>

                    </tr>
                  </thead>
                  <tbody>

                    <!-- Variabel php untuk nomor-->
                    <?php
                    $nomer = 1;
                    ?>
                    <!-- ambil data di database-->
                    @foreach($data_salaf as $salaf)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $salaf->namalengkap0}} </td>
                      <td>{{ $salaf->tempatlahir0}}</td>
                      <td>{{ $salaf->tbt0}}</td>
                      <td>{{ $salaf->jenkel0}}</td>
                      <td>{{ $salaf->kab0}}</td>
                      <td>{{ $salaf->namaayah0}}</td>
                      <td>{{ $salaf->pekerjaanayah0}}</td>
                      <td>{{ $salaf->nohp0}}</td>
                      <td>
                        <a href="{{url('salaf')}}/{{$salaf->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('salaf') }}/{{$salaf->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSalaf">
                 Import Excel
               </a> 
               <a href="{{ url('salaf/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data salaf</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('salaf/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name0"><b> NAMA LABEL </b></label>t -->
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
                <label> Nama Lengkap </label>
                <input id="namalengkap0" type="text" class="form-control @error('namalengkap0') is-invalid @enderror" name="namalengkap0" value="{{ old('namalengkap0') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap0" autofocus>
                @error('namalengkap0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <label> Tempat Lahir </label>
                <input id="tempatlahir0" type="text" class="form-control @error('tempatlahir0') is-invalid @enderror" name="tempatlahir0" value="{{ old('tempatlahir0') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir0" autofocus>
                @error('tempatlahir0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <label> Tanggal Lahir </label>
                <input id="tbt0" type="date" class="form-control @error('tbt0') is-invalid @enderror" name="tbt0" value="{{ old('tbt0') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt0" autofocus>
                @error('tbt0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <label> Jenis Kelamin </label>
                <select id="inputState" class="form-control" id="jenkel0" class="form-control @error('jenkel0') is-invalid @enderror" name="jenkel0" value="{{ old('jenkel0') }}" required autocomplete="jenkel0" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <label> Desa </label>
                <input id="desa0" type="text" class="form-control @error('desa0') is-invalid @enderror" name="desa0" value="{{ old('desa0') }}" placeholder="Desa" required autocomplete="desa0" autofocus>
                @error('desa0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <label> Kecamatan </label>
                <input id="kec0" type="text" class="form-control @error('kec0') is-invalid @enderror" name="kec0" value="{{ old('kec0') }}" placeholder="Kecamatan" required autocomplete="kec0" autofocus>
                @error('kec0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <label> Kota </label>
                <input id="kab0" type="text" class="form-control @error('kab0') is-invalid @enderror" name="kab0" value="{{ old('kab0') }}" placeholder="Kabupaten / Kota" required autocomplete="kab0" autofocus>
                @error('kab0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-6">
                <label> Provinsi </label>
                <input id="prov0" type="text" class="form-control @error('prov0') is-invalid @enderror" name="prov0" value="{{ old('prov0') }}" placeholder="Provinsi" required autocomplete="prov0" autofocus>
                @error('prov0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Alamat Lengkap                         
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita0" type="text" class="form-control @error('cita0') is-invalid @enderror" name="cita0" value="{{ old('cita0') }}" placeholder="Alamat Lengkap" required autocomplete="cita0" autofocus>
                @error('cita0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              -->
              <!-- Jumlah Saudara Kandung 
              <div class="col-md-6">
                <input id="jumlahsaudara0" type="number" class="form-control @error('jumlahsaudara0') is-invalid @enderror" name="jumlahsaudara0" value="{{ old('jumlahsaudara0') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara0" autofocus>
                @error('jumlahsaudara0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            -->
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <label> Asal Sekolah </label>
                <input id="asalsekolah0" type="text" class="form-control @error('asalsekolah0') is-invalid @enderror" name="asalsekolah0" value="{{ old('asalsekolah0') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah0" autofocus>
                @error('asalsekolah0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <label> Alamat Asal Sekolah </label>
                <input id="alamatasalsekolah0" type="text" class="form-control @error('alamatasalsekolah0') is-invalid @enderror" name="alamatasalsekolah0" value="{{ old('alamatasalsekolah0') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah0" autofocus>
                @error('alamatasalsekolah0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <label> Nama Ayah </label>
                <input id="namaayah0" type="text" class="form-control @error('namaayah0') is-invalid @enderror" name="namaayah0" value="{{ old('namaayah0') }}" placeholder="Nama Ayah" required autocomplete="namaayah0" autofocus>
                @error('namaayah0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
              <!-- NIK Ayah 
              <div class="col-md-6">
                <input id="nikayah0" type="number" class="form-control @error('nikayah0') is-invalid @enderror" name="nikayah0" value="{{ old('nikayah0') }}" placeholder="NIK Ayah" required autocomplete="nikayah0" autofocus>
                @error('nikayah0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            -->
            <!-- Tahun Lahir Ayah                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah0" type="number" class="form-control @error('tahunlahirayah0') is-invalid @enderror" name="tahunlahirayah0" value="{{ old('tahunlahirayah0') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah0" autofocus>
                @error('tahunlahirayah0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              --> 
              <!-- Pendidikan Ayah -->
            <div class="form-group row">
              <div class="col-md-6">
              <label> Pendidikan Ayah </label>
                <select id="inputState" class="form-control" id="pendidikanayah0" class="form-control @error('pendidikanayah0') is-invalid @enderror" name="pendidikanayah0" value="{{ old('pendidikanayah0') }}" required autocomplete="pendidikanayah0" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-6">
                <label> Pekerjaan Ayah </label>
                <select id="inputState" class="form-control" id="pekerjaanayah0" class="form-control @error('pekerjaanayah0') is-invalid @enderror" name="pekerjaanayah0" value="{{ old('pekerjaanayah0') }}" required autocomplete="pekerjaanayah0" autofocus>
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
                  <option> Lainnya </option>
                </select>
                @error('pekerjaanayah0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-12">
              <label> Nama Ibu </label>
                <input id="namaibu0" type="text" class="form-control @error('namaibu0') is-invalid @enderror" name="namaibu0" value="{{ old('namaibu0') }}" placeholder="Nama Ibu" required autocomplete="namaibu0" autofocus>
                @error('namaibu0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
              <!-- NIK Ibu 
              <div class="col-md-6">
                <input id="nikibu0" type="number" class="form-control @error('nikibu0') is-invalid @enderror" name="nikibu0" value="{{ old('nikibu0') }}" placeholder="NIK Ibu" required autocomplete="nikibu0" autofocus>
                @error('nikibu0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            -->
            <!-- Tahun Lahir Ibu                         
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu0" type="number" class="form-control @error('tahunlahiribu0') is-invalid @enderror" name="tahunlahiribu0" value="{{ old('tahunlahiribu0') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu0" autofocus>
                @error('tahunlahiribu0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              -->
              <!-- Pendidikan Ibu -->
            <div class="form-group row">
              <div class="col-md-6">
                <label> Pendidikan Ibu </label>
                <select id="inputState" class="form-control" id="pendidikanibu0" class="form-control @error('pendidikanibu0') is-invalid @enderror" name="pendidikanibu0" value="{{ old('pendidikanibu0') }}" required autocomplete="pendidikanibu0" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-6">
              <label> Pekerjaan Ibu </label>
                <select id="inputState" class="form-control" id="pekerjaanibu0" class="form-control @error('pekerjaanibu0') is-invalid @enderror" name="pekerjaanibu0" value="{{ old('pekerjaanibu0') }}" required autocomplete="pekerjaanibu0" autofocus>
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
                  <option> Lainnya </option>
                </select>
                @error('pekerjaanibu0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan0" class="form-control @error('penghasilan0') is-invalid @enderror" name="penghasilan0" value="{{ old('penghasilan0') }}" required autocomplete="penghasilan0" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              --> 
              <!-- Prestasi yang pernah di raih 
              <div class="col-md-6">
                <input id="prestasi0" type="text" class="form-control @error('prestasi0') is-invalid @enderror" name="prestasi0" value="{{ old('prestasi0') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi0" autofocus>
                @error('prestasi0')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            -->
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <label> NO HP </label>
                <input id="nohp0" type="text" class="form-control @error('nohp0') is-invalid @enderror" name="nohp0" value="{{ old('nohp0') }}" placeholder="No HP" required autocomplete="nohp0" autofocus>
                @error('nohp0')
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



  <!-- Modal Import Salaf -->
  <div class="modal fade" id="importSalaf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsalaf') }}" method="post" enctype="multipart/form-data">
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
        var salaf_id = $(this).attr('salaf-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data Salaf dengan id "+salaf_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('salaf') }}/"+salaf_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop