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

                    <h1 class="panel-title"><b>Data Santri Jenjang SMK TKR Kelas 10</b></h1>

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
                            @foreach($data_smktkr10 as $smktkr10)
                            <tr>
                              <th>{{ $nomer++}}</th>
                              <td>   {{ $smktkr10->namalengkap51}}  </td>
                              <td>{{ $smktkr10->status51}}</td>
                              <td>{{ $smktkr10->tempatlahir51}}, {{ $smktkr10->tbt51}}</td>
                              <td>{{ $smktkr10->jenkel51}}</td>
                              <td>{{ $smktkr10->cita51}}</td>
                              <td>{{ $smktkr10->namaayah51}}</td>
                              <td>{{ $smktkr10->pekerjaanayah51}}</td>
                              <td>{{ $smktkr10->nohp51}}</td>
                              <td>
                                  <a href="{{url('smktkr10')}}/{{$smktkr10->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                                  <a href="{{ url('smktkr10') }}/{{$smktkr10->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                            <!--     GAGAL --- SWEET ALERT GAGAL --> 
                            <!--      <a href="#" class="btn btn-danger btn-sm delete" smktkr10-id="{{$smktkr10->id}}">Delete</a>   --> 

                              </td>
                            </tr>
                            @endforeach

                        </tbody>
                      </table>
                  </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSmktkr10">
                 Import Excel
               </a> 
               <a href="{{ url('smktkr10/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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

          <form action="{{ url('smktkr10/create') }}" method="POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            <!-- Keterangan --> 
            <!-- <label for="name51"><b> NAMA LABEL </b></label>t -->
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
                  <input id="namalengkap51" type="text" class="form-control @error('namalengkap51') is-invalid @enderror" name="namalengkap51" value="{{ old('namalengkap51') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap51" autofocus>
                  @error('namalengkap51')
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
                  <input id="nisn51" type="number" class="form-control @error('nisn51') is-invalid @enderror" name="nisn51" value="{{ old('nisn51') }}" placeholder="NISN" required autocomplete="nisn51" autofocus>
                  @error('nisn51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- NIK -->
                <div class="col-md-4">
                  <input id="nik51" type="number" class="form-control @error('nik51') is-invalid @enderror" name="nik51" value="{{ old('nik51') }}" placeholder="NIK" required autocomplete="nik51" autofocus>
                  @error('nik51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
    <!-- No KK -->
                <div class="col-md-4">
                  <input id="nokk51" type="number" class="form-control @error('nokk51') is-invalid @enderror" name="nokk51" value="{{ old('nokk51') }}" placeholder="No KK" required autocomplete="nokk51" autofocus>
                  @error('nokk51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                                                                                   
              </div>
    <!-- Tempat Lahir -->                        
              <div class="form-group row">
                <div class="col-md-4">
                  <input id="tempatlahir51" type="text" class="form-control @error('tempatlahir51') is-invalid @enderror" name="tempatlahir51" value="{{ old('tempatlahir51') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir51" autofocus>
                  @error('tempatlahir51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <input id="tbt51" type="date" class="form-control @error('tbt51') is-invalid @enderror" name="tbt51" value="{{ old('tbt51') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt51" autofocus>
                  @error('tbt51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel51" class="form-control @error('jenkel51') is-invalid @enderror" name="jenkel51" value="{{ old('jenkel51') }}" required autocomplete="jenkel51" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option> Laki-laki </option>
                    <option> Perempuan </option>
                  </select>
                  @error('jenkel51')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror                              
                </div>

                           </div>
    <!-- Desa -->                        
                           <div class="form-group row">
                            <div class="col-md-6">
                              <input id="desa51" type="text" class="form-control @error('desa51') is-invalid @enderror" name="desa51" value="{{ old('desa51') }}" placeholder="Desa" required autocomplete="desa51" autofocus>
                              @error('desa51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Kecamatan -->
                            <div class="col-md-6">
                              <input id="kec51" type="text" class="form-control @error('kec51') is-invalid @enderror" name="kec51" value="{{ old('kec51') }}" placeholder="Kecamatan" required autocomplete="kec51" autofocus>
                              @error('kec51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                          </div>
    <!-- Kabupaten / Kota -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="kab51" type="text" class="form-control @error('kab51') is-invalid @enderror" name="kab51" value="{{ old('kab51') }}" placeholder="Kabupaten / Kota" required autocomplete="kab51" autofocus>
                              @error('kab51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Provinsi -->
                            <div class="col-md-4">
                              <input id="prov51" type="text" class="form-control @error('prov51') is-invalid @enderror" name="prov51" value="{{ old('prov51') }}" placeholder="Provinsi" required autocomplete="prov51" autofocus>
                              @error('prov51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Kode Pos -->
                            <div class="col-md-4">
                              <input id="kodepos51" type="text" class="form-control @error('kodepos51') is-invalid @enderror" name="kodepos51" value="{{ old('kodepos51') }}" placeholder="Kode Pos" required autocomplete="kodepos51" autofocus>
                              @error('kodepos51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Alamat Lengkap -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="cita51" type="text" class="form-control @error('cita51') is-invalid @enderror" name="cita51" value="{{ old('cita51') }}" placeholder="Alamat Lengkap" required autocomplete="cita51" autofocus>
                              @error('cita51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Jumlah Saudara Kandung -->
                            <div class="col-md-6">
                              <input id="jumlahsaudara51" type="number" class="form-control @error('jumlahsaudara51') is-invalid @enderror" name="jumlahsaudara51" value="{{ old('jumlahsaudara51') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara51" autofocus>
                              @error('jumlahsaudara51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Asal Sekolah -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="asalsekolah51" type="text" class="form-control @error('asalsekolah51') is-invalid @enderror" name="asalsekolah51" value="{{ old('asalsekolah51') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah51" autofocus>
                              @error('asalsekolah51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Alamat Asal Sekolah -->
                            <div class="col-md-6">
                              <input id="alamatasalsekolah51" type="text" class="form-control @error('alamatasalsekolah51') is-invalid @enderror" name="alamatasalsekolah51" value="{{ old('alamatasalsekolah51') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah51" autofocus>
                              @error('alamatasalsekolah51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Nama Ayah -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="namaayah51" type="text" class="form-control @error('namaayah51') is-invalid @enderror" name="namaayah51" value="{{ old('namaayah51') }}" placeholder="Nama Ayah" required autocomplete="namaayah51" autofocus>
                              @error('namaayah51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- NIK Ayah -->
                            <div class="col-md-6">
                              <input id="nikayah51" type="number" class="form-control @error('nikayah51') is-invalid @enderror" name="nikayah51" value="{{ old('nikayah51') }}" placeholder="NIK Ayah" required autocomplete="nikayah51" autofocus>
                              @error('nikayah51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Tahun Lahir Ayah -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="tahunlahirayah51" type="number" class="form-control @error('tahunlahirayah51') is-invalid @enderror" name="tahunlahirayah51" value="{{ old('tahunlahirayah51') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah51" autofocus>
                              @error('tahunlahirayah51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Pendidikan Ayah -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pendidikanayah51" class="form-control @error('pendidikanayah51') is-invalid @enderror" name="pendidikanayah51" value="{{ old('pendidikanayah51') }}" required autocomplete="pendidikanayah51" autofocus>
                                <option selected>-- Pendidikan --</option>
                                <option> TAMAT SD/MI </option>
                                <option> TAMAT SMP/MTS </option>
                                <option> TAMAT SMA/SMK/MA </option>
                                <option> DIPLOMA </option>
                                <option> SARJANA </option>
                                <option> PASCA SARJANA </option>
                                <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                              </select>
                              @error('pendidikanayah51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
    <!-- Pekerjaan Ayah -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pekerjaanayah51" class="form-control @error('pekerjaanayah51') is-invalid @enderror" name="pekerjaanayah51" value="{{ old('pekerjaanayah51') }}" required autocomplete="pekerjaanayah51" autofocus>
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
                              @error('pekerjaanayah51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                               
                            </div>                           
                          </div>
    <!-- Nama Ibu -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="namaibu51" type="text" class="form-control @error('namaibu51') is-invalid @enderror" name="namaibu51" value="{{ old('namaibu51') }}" placeholder="Nama Ibu" required autocomplete="namaibu51" autofocus>
                              @error('namaibu51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- NIK Ibu -->
                            <div class="col-md-6">
                              <input id="nikibu51" type="number" class="form-control @error('nikibu51') is-invalid @enderror" name="nikibu51" value="{{ old('nikibu51') }}" placeholder="NIK Ibu" required autocomplete="nikibu51" autofocus>
                              @error('nikibu51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Tahun Lahir Ibu -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="tahunlahiribu51" type="number" class="form-control @error('tahunlahiribu51') is-invalid @enderror" name="tahunlahiribu51" value="{{ old('tahunlahiribu51') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu51" autofocus>
                              @error('tahunlahiribu51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Pendidikan Ibu -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pendidikanibu51" class="form-control @error('pendidikanibu51') is-invalid @enderror" name="pendidikanibu51" value="{{ old('pendidikanibu51') }}" required autocomplete="pendidikanibu51" autofocus>
                                <option selected>-- Pendidikan --</option>
                                <option> TAMAT SD/MI </option>
                                <option> TAMAT SMP/MTS </option>
                                <option> TAMAT SMA/SMK/MA </option>
                                <option> DIPLOMA </option>
                                <option> SARJANA </option>
                                <option> PASCA SARJANA </option>
                                <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                              </select>
                              @error('pendidikanibu51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
    <!-- Pekerjaan Ibu -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pekerjaanibu51" class="form-control @error('pekerjaanibu51') is-invalid @enderror" name="pekerjaanibu51" value="{{ old('pekerjaanibu51') }}" required autocomplete="pekerjaanibu51" autofocus>
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
                              @error('pekerjaanibu51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                           
                          </div>
    <!-- Penghasilan -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <select id="inputState" class="form-control" id="penghasilan51" class="form-control @error('penghasilan51') is-invalid @enderror" name="penghasilan51" value="{{ old('penghasilan51') }}" required autocomplete="penghasilan51" autofocus>
                                <option selected>-- Penghasilan --</option>
                                <option> < Rp. 1.000.000,-/BULAN </option>
                                <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                                <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                                <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                                <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                                <option> > Rp. 10.000.000,-/BULAN </option>
                              </select>
                              @error('penghasilan51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
    <!-- Prestasi yang pernah di raih -->
                            <div class="col-md-6">
                              <input id="prestasi51" type="text" class="form-control @error('prestasi51') is-invalid @enderror" name="prestasi51" value="{{ old('prestasi51') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi51" autofocus>
                              @error('prestasi51')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                                                    
                          </div>
    <!-- No HP -->                        
                          <div class="form-group row">
                            <div class="col-md-12">
                              <input id="nohp51" type="text" class="form-control @error('nohp51') is-invalid @enderror" name="nohp51" value="{{ old('nohp51') }}" placeholder="No HP" required autocomplete="nohp51" autofocus>
                              @error('nohp51')
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

  <!-- Modal Import Smktkr10 -->
  <div class="modal fade" id="importSmktkr10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsmktkr10') }}" method="post" enctype="multipart/form-data">
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
        var smktkr10_id = $(this).attr('smktkr10-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMK TKR kelas 10 dengan id "+smktkr10_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('smktkr10') }}/"+smktkr10_id+"/{{('delete')}}";
          }
        });
      });

  });

</script>

@stop