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

              <h1 class="panel-title"><b>Data Santri Jenjang Mahad Aly Semester 3-4</b></h1>
              
            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Asal Sekolah</th>
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
                    @foreach($data_mahadaly2 as $mahadaly2)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td>  {{ $mahadaly2->namalengkap72}} </td>
                      <td>{{ $mahadaly2->asalsekolah72}}</td>
                      <td>{{ $mahadaly2->tempatlahir72}}, {{ $mahadaly2->tbt72}}</td>
                      <td>{{ $mahadaly2->jenkel72}}</td>
                      <td>{{ $mahadaly2->cita72}}</td>
                      <td>{{ $mahadaly2->namaayah72}}</td>
                      <td>{{ $mahadaly2->pekerjaanayah72}}</td>
                      <td>{{ $mahadaly2->nohp72}}</td>
                      <td>
                        <a href="{{url('mahadaly2')}}/{{$mahadaly2->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                        <a href="{{ url('mahadaly2') }}/{{$mahadaly2->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                        <!--     GAGAL --- SWEET ALERT GAGAL --> 
                        <!--      <a href="#" class="btn btn-danger btn-sm delete" mahadaly2-id="{{$mahadaly2->id}}">Delete</a>   --> 

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importMahadaly2">
                 Import Excel
               </a> 
               <a href="{{ url('mahadaly2/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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

        <form action="{{ url('mahadaly2/create') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name72"><b> NAMA LABEL </b></label>t -->
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
                <input id="namalengkap72" type="text" class="form-control @error('namalengkap72') is-invalid @enderror" name="namalengkap72" value="{{ old('namalengkap72') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap72" autofocus>
                @error('namalengkap72')
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
                <input id="nisn72" type="number" class="form-control @error('nisn72') is-invalid @enderror" name="nisn72" value="{{ old('nisn72') }}" placeholder="NISN" required autocomplete="nisn72" autofocus>
                @error('nisn72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK -->
              <div class="col-md-4">
                <input id="nik72" type="number" class="form-control @error('nik72') is-invalid @enderror" name="nik72" value="{{ old('nik72') }}" placeholder="NIK" required autocomplete="nik72" autofocus>
                @error('nik72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <!-- No KK -->
              <div class="col-md-4">
                <input id="nokk72" type="number" class="form-control @error('nokk72') is-invalid @enderror" name="nokk72" value="{{ old('nokk72') }}" placeholder="No KK" required autocomplete="nokk72" autofocus>
                @error('nokk72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                                                   
            </div>
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tempatlahir72" type="text" class="form-control @error('tempatlahir72') is-invalid @enderror" name="tempatlahir72" value="{{ old('tempatlahir72') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir72" autofocus>
                @error('tempatlahir72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <input id="tbt72" type="date" class="form-control @error('tbt72') is-invalid @enderror" name="tbt72" value="{{ old('tbt72') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt72" autofocus>
                @error('tbt72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="jenkel72" class="form-control @error('jenkel72') is-invalid @enderror" name="jenkel72" value="{{ old('jenkel72') }}" required autocomplete="jenkel72" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>

            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="desa72" type="text" class="form-control @error('desa72') is-invalid @enderror" name="desa72" value="{{ old('desa72') }}" placeholder="Desa" required autocomplete="desa72" autofocus>
                @error('desa72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <input id="kec72" type="text" class="form-control @error('kec72') is-invalid @enderror" name="kec72" value="{{ old('kec72') }}" placeholder="Kecamatan" required autocomplete="kec72" autofocus>
                @error('kec72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="kab72" type="text" class="form-control @error('kab72') is-invalid @enderror" name="kab72" value="{{ old('kab72') }}" placeholder="Kabupaten / Kota" required autocomplete="kab72" autofocus>
                @error('kab72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-4">
                <input id="prov72" type="text" class="form-control @error('prov72') is-invalid @enderror" name="prov72" value="{{ old('prov72') }}" placeholder="Provinsi" required autocomplete="prov72" autofocus>
                @error('prov72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos -->
              <div class="col-md-4">
                <input id="kodepos72" type="text" class="form-control @error('kodepos72') is-invalid @enderror" name="kodepos72" value="{{ old('kodepos72') }}" placeholder="Kode Pos" required autocomplete="kodepos72" autofocus>
                @error('kodepos72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Alamat Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita72" type="text" class="form-control @error('cita72') is-invalid @enderror" name="cita72" value="{{ old('cita72') }}" placeholder="Alamat Lengkap" required autocomplete="cita72" autofocus>
                @error('cita72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jumlah Saudara Kandung -->
              <div class="col-md-6">
                <input id="jumlahsaudara72" type="number" class="form-control @error('jumlahsaudara72') is-invalid @enderror" name="jumlahsaudara72" value="{{ old('jumlahsaudara72') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara72" autofocus>
                @error('jumlahsaudara72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Asal Sekolah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="asalsekolah72" type="text" class="form-control @error('asalsekolah72') is-invalid @enderror" name="asalsekolah72" value="{{ old('asalsekolah72') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah72" autofocus>
                @error('asalsekolah72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Alamat Asal Sekolah -->
              <div class="col-md-6">
                <input id="alamatasalsekolah72" type="text" class="form-control @error('alamatasalsekolah72') is-invalid @enderror" name="alamatasalsekolah72" value="{{ old('alamatasalsekolah72') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah72" autofocus>
                @error('alamatasalsekolah72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Nama Ayah -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaayah72" type="text" class="form-control @error('namaayah72') is-invalid @enderror" name="namaayah72" value="{{ old('namaayah72') }}" placeholder="Nama Ayah" required autocomplete="namaayah72" autofocus>
                @error('namaayah72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ayah -->
              <div class="col-md-6">
                <input id="nikayah72" type="number" class="form-control @error('nikayah72') is-invalid @enderror" name="nikayah72" value="{{ old('nikayah72') }}" placeholder="NIK Ayah" required autocomplete="nikayah72" autofocus>
                @error('nikayah72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ayah -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahirayah72" type="number" class="form-control @error('tahunlahirayah72') is-invalid @enderror" name="tahunlahirayah72" value="{{ old('tahunlahirayah72') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah72" autofocus>
                @error('tahunlahirayah72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanayah72" class="form-control @error('pendidikanayah72') is-invalid @enderror" name="pendidikanayah72" value="{{ old('pendidikanayah72') }}" required autocomplete="pendidikanayah72" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanayah72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ayah -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanayah72" class="form-control @error('pekerjaanayah72') is-invalid @enderror" name="pekerjaanayah72" value="{{ old('pekerjaanayah72') }}" required autocomplete="pekerjaanayah72" autofocus>
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
                @error('pekerjaanayah72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                               
              </div>                           
            </div>
            <!-- Nama Ibu -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="namaibu72" type="text" class="form-control @error('namaibu72') is-invalid @enderror" name="namaibu72" value="{{ old('namaibu72') }}" placeholder="Nama Ibu" required autocomplete="namaibu72" autofocus>
                @error('namaibu72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- NIK Ibu -->
              <div class="col-md-6">
                <input id="nikibu72" type="number" class="form-control @error('nikibu72') is-invalid @enderror" name="nikibu72" value="{{ old('nikibu72') }}" placeholder="NIK Ibu" required autocomplete="nikibu72" autofocus>
                @error('nikibu72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
            <!-- Tahun Lahir Ibu -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <input id="tahunlahiribu72" type="number" class="form-control @error('tahunlahiribu72') is-invalid @enderror" name="tahunlahiribu72" value="{{ old('tahunlahiribu72') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu72" autofocus>
                @error('tahunlahiribu72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Pendidikan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pendidikanibu72" class="form-control @error('pendidikanibu72') is-invalid @enderror" name="pendidikanibu72" value="{{ old('pendidikanibu72') }}" required autocomplete="pendidikanibu72" autofocus>
                  <option selected>-- Pendidikan --</option>
                  <option> TAMAT SD/MI </option>
                  <option> TAMAT SMP/MTS </option>
                  <option> TAMAT SMA/SMK/MA </option>
                  <option> DIPLOMA </option>
                  <option> SARJANA </option>
                  <option> PASCA SARJANA </option>
                  <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                </select>
                @error('pendidikanibu72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Pekerjaan Ibu -->
              <div class="col-md-4">
                <select id="inputState" class="form-control" id="pekerjaanibu72" class="form-control @error('pekerjaanibu72') is-invalid @enderror" name="pekerjaanibu72" value="{{ old('pekerjaanibu72') }}" required autocomplete="pekerjaanibu72" autofocus>
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
                @error('pekerjaanibu72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                           
            </div>
            <!-- Penghasilan -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <select id="inputState" class="form-control" id="penghasilan72" class="form-control @error('penghasilan72') is-invalid @enderror" name="penghasilan72" value="{{ old('penghasilan72') }}" required autocomplete="penghasilan72" autofocus>
                  <option selected>-- Penghasilan --</option>
                  <option> < Rp. 1.000.000,-/BULAN </option>
                  <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                  <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                  <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                  <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                  <option> > Rp. 10.000.000,-/BULAN </option>
                </select>
                @error('penghasilan72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              <!-- Prestasi yang pernah di raih -->
              <div class="col-md-6">
                <input id="prestasi72" type="text" class="form-control @error('prestasi72') is-invalid @enderror" name="prestasi72" value="{{ old('prestasi72') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi72" autofocus>
                @error('prestasi72')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                                                    
            </div>
            <!-- No HP -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <input id="nohp72" type="text" class="form-control @error('nohp72') is-invalid @enderror" name="nohp72" value="{{ old('nohp72') }}" placeholder="No HP" required autocomplete="nohp72" autofocus>
                @error('nohp72')
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

  <!-- Modal Import Mahadaly2 -->
  <div class="modal fade" id="importMahadaly2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importmahadaly2') }}" method="post" enctype="multipart/form-data">
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
        var mahadaly2_id = $(this).attr('mahadaly2-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data Mahad Aly Semester 3-4 dengan id "+mahadaly2_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('mahadaly2') }}/"+mahadaly2_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop