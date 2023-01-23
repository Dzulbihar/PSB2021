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

              <h1 class="panel-title"><b>Data Santri Jenjang SMK TKR Kelas 11</b></h1>
              
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
                    @foreach($data_smktkr11 as $smktkr11)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>   {{ $smktkr11->namalengkap52}}  </td>
                      <td>{{ $smktkr11->status52}}</td>
                      <td>{{ $smktkr11->tempatlahir52}}, {{ $smktkr11->tbt52}}</td>
                      <td>{{ $smktkr11->jenkel52}}</td>
                      <td>{{ $smktkr11->cita52}}</td>
                      <td>{{ $smktkr11->namaayah52}}</td>
                      <td>{{ $smktkr11->pekerjaanayah52}}</td>
                      <td>{{ $smktkr11->nohp52}}</td>
                      <td>
                        <a href="{{url('smktkr11')}}/{{$smktkr11->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('smktkr11') }}/{{$smktkr11->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" smktkr11-id="{{$smktkr11->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSmktkr11">
                 Import Excel
               </a> 
               <a href="{{ url('smktkr11/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data SMK TKR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{ url('smktkr11/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name52"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap52" type="text" class="form-control @error('namalengkap52') is-invalid @enderror" name="namalengkap52" value="{{ old('namalengkap52') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap52" autofocus>
                @error('namalengkap52')
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
                <input id="nisn52" type="number" class="form-control @error('nisn52') is-invalid @enderror" name="nisn52" value="{{ old('nisn52') }}" placeholder="NISN" required autocomplete="nisn52" autofocus>
                @error('nisn52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik52" type="number" class="form-control @error('nik52') is-invalid @enderror" name="nik52" value="{{ old('nik52') }}" placeholder="NIK" required autocomplete="nik52" autofocus>
                @error('nik52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk52" type="number" class="form-control @error('nokk52') is-invalid @enderror" name="nokk52" value="{{ old('nokk52') }}" placeholder="No KK" required autocomplete="nokk52" autofocus>
                @error('nokk52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir52" type="text" class="form-control @error('tempatlahir52') is-invalid @enderror" name="tempatlahir52" value="{{ old('tempatlahir52') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir52" autofocus>
                @error('tempatlahir52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt52" type="date" class="form-control @error('tbt52') is-invalid @enderror" name="tbt52" value="{{ old('tbt52') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt52" autofocus>
                @error('tbt52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel52" class="form-control @error('jenkel52') is-invalid @enderror" name="jenkel52" value="{{ old('jenkel52') }}" required autocomplete="jenkel52" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa52" type="text" class="form-control @error('desa52') is-invalid @enderror" name="desa52" value="{{ old('desa52') }}" placeholder="Desa" required autocomplete="desa52" autofocus>
                @error('desa52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec52" type="text" class="form-control @error('kec52') is-invalid @enderror" name="kec52" value="{{ old('kec52') }}" placeholder="Kecamatan" required autocomplete="kec52" autofocus>
                @error('kec52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab52" type="text" class="form-control @error('kab52') is-invalid @enderror" name="kab52" value="{{ old('kab52') }}" placeholder="Kabupaten / Kota" required autocomplete="kab52" autofocus>
                @error('kab52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov52" type="text" class="form-control @error('prov52') is-invalid @enderror" name="prov52" value="{{ old('prov52') }}" placeholder="Provinsi" required autocomplete="prov52" autofocus>
                @error('prov52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos52" type="text" class="form-control @error('kodepos52') is-invalid @enderror" name="kodepos52" value="{{ old('kodepos52') }}" placeholder="Kode Pos" required autocomplete="kodepos52" autofocus>
                @error('kodepos52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita52" type="text" class="form-control @error('cita52') is-invalid @enderror" name="cita52" value="{{ old('cita52') }}" placeholder="Alamat Lengkap" required autocomplete="cita52" autofocus>
                @error('cita52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara52" type="number" class="form-control @error('jumlahsaudara52') is-invalid @enderror" name="jumlahsaudara52" value="{{ old('jumlahsaudara52') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara52" autofocus>
                @error('jumlahsaudara52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah52" type="text" class="form-control @error('asalsekolah52') is-invalid @enderror" name="asalsekolah52" value="{{ old('asalsekolah52') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah52" autofocus>
                @error('asalsekolah52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah52" type="text" class="form-control @error('alamatasalsekolah52') is-invalid @enderror" name="alamatasalsekolah52" value="{{ old('alamatasalsekolah52') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah52" autofocus>
                @error('alamatasalsekolah52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah52" type="text" class="form-control @error('namaayah52') is-invalid @enderror" name="namaayah52" value="{{ old('namaayah52') }}" placeholder="Nama Ayah" required autocomplete="namaayah52" autofocus>
                @error('namaayah52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah52" type="number" class="form-control @error('nikayah52') is-invalid @enderror" name="nikayah52" value="{{ old('nikayah52') }}" placeholder="NIK Ayah" required autocomplete="nikayah52" autofocus>
                @error('nikayah52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah52" type="number" class="form-control @error('tahunlahirayah52') is-invalid @enderror" name="tahunlahirayah52" value="{{ old('tahunlahirayah52') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah52" autofocus>
                @error('tahunlahirayah52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah52" class="form-control @error('pendidikanayah52') is-invalid @enderror" name="pendidikanayah52" value="{{ old('pendidikanayah52') }}" required autocomplete="pendidikanayah52" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah52" class="form-control @error('pekerjaanayah52') is-invalid @enderror" name="pekerjaanayah52" value="{{ old('pekerjaanayah52') }}" required autocomplete="pekerjaanayah52" autofocus>
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
                @error('pekerjaanayah52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu52" type="text" class="form-control @error('namaibu52') is-invalid @enderror" name="namaibu52" value="{{ old('namaibu52') }}" placeholder="Nama Ibu" required autocomplete="namaibu52" autofocus>
                @error('namaibu52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu52" type="number" class="form-control @error('nikibu52') is-invalid @enderror" name="nikibu52" value="{{ old('nikibu52') }}" placeholder="NIK Ibu" required autocomplete="nikibu52" autofocus>
                @error('nikibu52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu52" type="number" class="form-control @error('tahunlahiribu52') is-invalid @enderror" name="tahunlahiribu52" value="{{ old('tahunlahiribu52') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu52" autofocus>
                @error('tahunlahiribu52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu52" class="form-control @error('pendidikanibu52') is-invalid @enderror" name="pendidikanibu52" value="{{ old('pendidikanibu52') }}" required autocomplete="pendidikanibu52" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu52" class="form-control @error('pekerjaanibu52') is-invalid @enderror" name="pekerjaanibu52" value="{{ old('pekerjaanibu52') }}" required autocomplete="pekerjaanibu52" autofocus>
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
                @error('pekerjaanibu52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan52" class="form-control @error('penghasilan52') is-invalid @enderror" name="penghasilan52" value="{{ old('penghasilan52') }}" required autocomplete="penghasilan52" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi52" type="text" class="form-control @error('prestasi52') is-invalid @enderror" name="prestasi52" value="{{ old('prestasi52') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi52" autofocus>
                @error('prestasi52')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp52" type="text" class="form-control @error('nohp52') is-invalid @enderror" name="nohp52" value="{{ old('nohp52') }}" placeholder="No HP" required autocomplete="nohp52" autofocus>
                @error('nohp52')
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

  <!-- Modal Import Smktkr11 -->
  <div class="modal fade" id="importSmktkr11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsmktkr11') }}" method="post" enctype="multipart/form-data">
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
        var smktkr11_id = $(this).attr('smktkr11-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMK TKR kelas 11 dengan id "+smktkr11_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('smktkr11') }}/"+smktkr11_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop