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

              <h1 class="panel-title"><b>Data Santri Jenjang SMK TKR Kelas 12</b></h1>

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
                    @foreach($data_smktkr12 as $smktkr12)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $smktkr12->namalengkap53}}  </td>
                      <td>{{ $smktkr12->status53}}</td>
                      <td>{{ $smktkr12->tempatlahir53}}, {{ $smktkr12->tbt53}}</td>
                      <td>{{ $smktkr12->jenkel53}}</td>
                      <td>{{ $smktkr12->cita53}}</td>
                      <td>{{ $smktkr12->namaayah53}}</td>
                      <td>{{ $smktkr12->pekerjaanayah53}}</td>
                      <td>{{ $smktkr12->nohp53}}</td>
                      <td>
                        <a href="{{url('smktkr12')}}/{{$smktkr12->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile</a>
                        <a href="{{ url('smktkr12') }}/{{$smktkr12->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" smktkr12-id="{{$smktkr12->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSmktkr12">
                 Import Excel
               </a> 
               <a href="{{ url('smktkr12/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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

        <form action="{{ url('smktkr12/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name53"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap53" type="text" class="form-control @error('namalengkap53') is-invalid @enderror" name="namalengkap53" value="{{ old('namalengkap53') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap53" autofocus>
                @error('namalengkap53')
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
                <input id="nisn53" type="number" class="form-control @error('nisn53') is-invalid @enderror" name="nisn53" value="{{ old('nisn53') }}" placeholder="NISN" required autocomplete="nisn53" autofocus>
                @error('nisn53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik53" type="number" class="form-control @error('nik53') is-invalid @enderror" name="nik53" value="{{ old('nik53') }}" placeholder="NIK" required autocomplete="nik53" autofocus>
                @error('nik53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk53" type="number" class="form-control @error('nokk53') is-invalid @enderror" name="nokk53" value="{{ old('nokk53') }}" placeholder="No KK" required autocomplete="nokk53" autofocus>
                @error('nokk53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir53" type="text" class="form-control @error('tempatlahir53') is-invalid @enderror" name="tempatlahir53" value="{{ old('tempatlahir53') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir53" autofocus>
                @error('tempatlahir53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt53" type="date" class="form-control @error('tbt53') is-invalid @enderror" name="tbt53" value="{{ old('tbt53') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt53" autofocus>
                @error('tbt53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel53" class="form-control @error('jenkel53') is-invalid @enderror" name="jenkel53" value="{{ old('jenkel53') }}" required autocomplete="jenkel53" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa53" type="text" class="form-control @error('desa53') is-invalid @enderror" name="desa53" value="{{ old('desa53') }}" placeholder="Desa" required autocomplete="desa53" autofocus>
                @error('desa53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec53" type="text" class="form-control @error('kec53') is-invalid @enderror" name="kec53" value="{{ old('kec53') }}" placeholder="Kecamatan" required autocomplete="kec53" autofocus>
                @error('kec53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab53" type="text" class="form-control @error('kab53') is-invalid @enderror" name="kab53" value="{{ old('kab53') }}" placeholder="Kabupaten / Kota" required autocomplete="kab53" autofocus>
                @error('kab53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov53" type="text" class="form-control @error('prov53') is-invalid @enderror" name="prov53" value="{{ old('prov53') }}" placeholder="Provinsi" required autocomplete="prov53" autofocus>
                @error('prov53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos53" type="text" class="form-control @error('kodepos53') is-invalid @enderror" name="kodepos53" value="{{ old('kodepos53') }}" placeholder="Kode Pos" required autocomplete="kodepos53" autofocus>
                @error('kodepos53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita53" type="text" class="form-control @error('cita53') is-invalid @enderror" name="cita53" value="{{ old('cita53') }}" placeholder="Alamat Lengkap" required autocomplete="cita53" autofocus>
                @error('cita53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara53" type="number" class="form-control @error('jumlahsaudara53') is-invalid @enderror" name="jumlahsaudara53" value="{{ old('jumlahsaudara53') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara53" autofocus>
                @error('jumlahsaudara53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah53" type="text" class="form-control @error('asalsekolah53') is-invalid @enderror" name="asalsekolah53" value="{{ old('asalsekolah53') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah53" autofocus>
                @error('asalsekolah53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah53" type="text" class="form-control @error('alamatasalsekolah53') is-invalid @enderror" name="alamatasalsekolah53" value="{{ old('alamatasalsekolah53') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah53" autofocus>
                @error('alamatasalsekolah53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah53" type="text" class="form-control @error('namaayah53') is-invalid @enderror" name="namaayah53" value="{{ old('namaayah53') }}" placeholder="Nama Ayah" required autocomplete="namaayah53" autofocus>
                @error('namaayah53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah53" type="number" class="form-control @error('nikayah53') is-invalid @enderror" name="nikayah53" value="{{ old('nikayah53') }}" placeholder="NIK Ayah" required autocomplete="nikayah53" autofocus>
                @error('nikayah53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah53" type="number" class="form-control @error('tahunlahirayah53') is-invalid @enderror" name="tahunlahirayah53" value="{{ old('tahunlahirayah53') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah53" autofocus>
                @error('tahunlahirayah53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah53" class="form-control @error('pendidikanayah53') is-invalid @enderror" name="pendidikanayah53" value="{{ old('pendidikanayah53') }}" required autocomplete="pendidikanayah53" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah53" class="form-control @error('pekerjaanayah53') is-invalid @enderror" name="pekerjaanayah53" value="{{ old('pekerjaanayah53') }}" required autocomplete="pekerjaanayah53" autofocus>
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
                @error('pekerjaanayah53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu53" type="text" class="form-control @error('namaibu53') is-invalid @enderror" name="namaibu53" value="{{ old('namaibu53') }}" placeholder="Nama Ibu" required autocomplete="namaibu53" autofocus>
                @error('namaibu53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu53" type="number" class="form-control @error('nikibu53') is-invalid @enderror" name="nikibu53" value="{{ old('nikibu53') }}" placeholder="NIK Ibu" required autocomplete="nikibu53" autofocus>
                @error('nikibu53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu53" type="number" class="form-control @error('tahunlahiribu53') is-invalid @enderror" name="tahunlahiribu53" value="{{ old('tahunlahiribu53') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu53" autofocus>
                @error('tahunlahiribu53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu53" class="form-control @error('pendidikanibu53') is-invalid @enderror" name="pendidikanibu53" value="{{ old('pendidikanibu53') }}" required autocomplete="pendidikanibu53" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu53" class="form-control @error('pekerjaanibu53') is-invalid @enderror" name="pekerjaanibu53" value="{{ old('pekerjaanibu53') }}" required autocomplete="pekerjaanibu53" autofocus>
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
                @error('pekerjaanibu53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan53" class="form-control @error('penghasilan53') is-invalid @enderror" name="penghasilan53" value="{{ old('penghasilan53') }}" required autocomplete="penghasilan53" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi53" type="text" class="form-control @error('prestasi53') is-invalid @enderror" name="prestasi53" value="{{ old('prestasi53') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi53" autofocus>
                @error('prestasi53')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp53" type="text" class="form-control @error('nohp53') is-invalid @enderror" name="nohp53" value="{{ old('nohp53') }}" placeholder="No HP" required autocomplete="nohp53" autofocus>
                @error('nohp53')
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

  <!-- Modal Import Smktkr12 -->
  <div class="modal fade" id="importSmktkr12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsmktkr12') }}" method="post" enctype="multipart/form-data">
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
        var smktkr12_id = $(this).attr('smktkr12-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMK TKR kelas 12 dengan id "+smktkr12_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('smktkr12') }}/"+smktkr12_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop