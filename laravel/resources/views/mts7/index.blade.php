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

              <h1 class="panel-title"><b>Data Santri Jenjang MTs Kelas 7</b></h1>
              
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
                    @foreach($data_mts7 as $mts7)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $mts7->namalengkap37}} </td>
                      <td>{{ $mts7->status37}}</td>
                      <td>{{ $mts7->tempatlahir37}}, {{ $mts7->tbt37}}</td>
                      <td>{{ $mts7->jenkel37}}</td>
                      <td>{{ $mts7->cita37}}</td>
                      <td>{{ $mts7->namaayah37}}</td>
                      <td>{{ $mts7->pekerjaanayah37}}</td>
                      <td>{{ $mts7->nohp37}}</td>
                      <td>
                        <a href="{{url('mts7')}}/{{$mts7->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('mts7') }}/{{$mts7->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" mts7-id="{{$mts7->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importMts7">
                 Import Excel
               </a> 
               <a href="{{ url('mts7/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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

        <form action="{{ url('mts7/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name37"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap37" type="text" class="form-control @error('namalengkap37') is-invalid @enderror" name="namalengkap37" value="{{ old('namalengkap37') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap37" autofocus>
                @error('namalengkap37')
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
                <input id="nisn37" type="number" class="form-control @error('nisn37') is-invalid @enderror" name="nisn37" value="{{ old('nisn37') }}" placeholder="NISN" required autocomplete="nisn37" autofocus>
                @error('nisn37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik37" type="number" class="form-control @error('nik37') is-invalid @enderror" name="nik37" value="{{ old('nik37') }}" placeholder="NIK" required autocomplete="nik37" autofocus>
                @error('nik37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk37" type="number" class="form-control @error('nokk37') is-invalid @enderror" name="nokk37" value="{{ old('nokk37') }}" placeholder="No KK" required autocomplete="nokk37" autofocus>
                @error('nokk37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir37" type="text" class="form-control @error('tempatlahir37') is-invalid @enderror" name="tempatlahir37" value="{{ old('tempatlahir37') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir37" autofocus>
                @error('tempatlahir37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt37" type="date" class="form-control @error('tbt37') is-invalid @enderror" name="tbt37" value="{{ old('tbt37') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt37" autofocus>
                @error('tbt37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel37" class="form-control @error('jenkel37') is-invalid @enderror" name="jenkel37" value="{{ old('jenkel37') }}" required autocomplete="jenkel37" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa37" type="text" class="form-control @error('desa37') is-invalid @enderror" name="desa37" value="{{ old('desa37') }}" placeholder="Desa" required autocomplete="desa37" autofocus>
                @error('desa37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec37" type="text" class="form-control @error('kec37') is-invalid @enderror" name="kec37" value="{{ old('kec37') }}" placeholder="Kecamatan" required autocomplete="kec37" autofocus>
                @error('kec37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab37" type="text" class="form-control @error('kab37') is-invalid @enderror" name="kab37" value="{{ old('kab37') }}" placeholder="Kabupaten / Kota" required autocomplete="kab37" autofocus>
                @error('kab37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov37" type="text" class="form-control @error('prov37') is-invalid @enderror" name="prov37" value="{{ old('prov37') }}" placeholder="Provinsi" required autocomplete="prov37" autofocus>
                @error('prov37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos37" type="text" class="form-control @error('kodepos37') is-invalid @enderror" name="kodepos37" value="{{ old('kodepos37') }}" placeholder="Kode Pos" required autocomplete="kodepos37" autofocus>
                @error('kodepos37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita37" type="text" class="form-control @error('cita37') is-invalid @enderror" name="cita37" value="{{ old('cita37') }}" placeholder="Alamat Lengkap" required autocomplete="cita37" autofocus>
                @error('cita37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara37" type="number" class="form-control @error('jumlahsaudara37') is-invalid @enderror" name="jumlahsaudara37" value="{{ old('jumlahsaudara37') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara37" autofocus>
                @error('jumlahsaudara37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah37" type="text" class="form-control @error('asalsekolah37') is-invalid @enderror" name="asalsekolah37" value="{{ old('asalsekolah37') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah37" autofocus>
                @error('asalsekolah37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah37" type="text" class="form-control @error('alamatasalsekolah37') is-invalid @enderror" name="alamatasalsekolah37" value="{{ old('alamatasalsekolah37') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah37" autofocus>
                @error('alamatasalsekolah37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah37" type="text" class="form-control @error('namaayah37') is-invalid @enderror" name="namaayah37" value="{{ old('namaayah37') }}" placeholder="Nama Ayah" required autocomplete="namaayah37" autofocus>
                @error('namaayah37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah37" type="number" class="form-control @error('nikayah37') is-invalid @enderror" name="nikayah37" value="{{ old('nikayah37') }}" placeholder="NIK Ayah" required autocomplete="nikayah37" autofocus>
                @error('nikayah37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah37" type="number" class="form-control @error('tahunlahirayah37') is-invalid @enderror" name="tahunlahirayah37" value="{{ old('tahunlahirayah37') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah37" autofocus>
                @error('tahunlahirayah37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah37" class="form-control @error('pendidikanayah37') is-invalid @enderror" name="pendidikanayah37" value="{{ old('pendidikanayah37') }}" required autocomplete="pendidikanayah37" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah37" class="form-control @error('pekerjaanayah37') is-invalid @enderror" name="pekerjaanayah37" value="{{ old('pekerjaanayah37') }}" required autocomplete="pekerjaanayah37" autofocus>
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
                @error('pekerjaanayah37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu37" type="text" class="form-control @error('namaibu37') is-invalid @enderror" name="namaibu37" value="{{ old('namaibu37') }}" placeholder="Nama Ibu" required autocomplete="namaibu37" autofocus>
                @error('namaibu37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu37" type="number" class="form-control @error('nikibu37') is-invalid @enderror" name="nikibu37" value="{{ old('nikibu37') }}" placeholder="NIK Ibu" required autocomplete="nikibu37" autofocus>
                @error('nikibu37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu37" type="number" class="form-control @error('tahunlahiribu37') is-invalid @enderror" name="tahunlahiribu37" value="{{ old('tahunlahiribu37') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu37" autofocus>
                @error('tahunlahiribu37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu37" class="form-control @error('pendidikanibu37') is-invalid @enderror" name="pendidikanibu37" value="{{ old('pendidikanibu37') }}" required autocomplete="pendidikanibu37" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu37" class="form-control @error('pekerjaanibu37') is-invalid @enderror" name="pekerjaanibu37" value="{{ old('pekerjaanibu37') }}" required autocomplete="pekerjaanibu37" autofocus>
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
                @error('pekerjaanibu37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan37" class="form-control @error('penghasilan37') is-invalid @enderror" name="penghasilan37" value="{{ old('penghasilan37') }}" required autocomplete="penghasilan37" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi37" type="text" class="form-control @error('prestasi37') is-invalid @enderror" name="prestasi37" value="{{ old('prestasi37') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi37" autofocus>
                @error('prestasi37')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp37" type="text" class="form-control @error('nohp37') is-invalid @enderror" name="nohp37" value="{{ old('nohp37') }}" placeholder="No HP" required autocomplete="nohp37" autofocus>
                @error('nohp37')
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

  <!-- Modal Import Mts7 -->
  <div class="modal fade" id="importMts7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importmts7') }}" method="post" enctype="multipart/form-data">
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
        var mts7_id = $(this).attr('mts7-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data MTs kelas 7 dengan id "+mts7_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('mts7') }}/"+mts7_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop