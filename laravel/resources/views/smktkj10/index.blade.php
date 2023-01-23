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

                    <h1 class="panel-title"><b>Data Santri Jenjang SMK TKJ Kelas 10</b></h1>
                    
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
                            @foreach($data_smktkj10 as $smktkj10)
                            <tr>
                              <th>{{ $nomer++}}</th>
                              <td> {{ $smktkj10->namalengkap41}}   </td>
                              <td>{{ $smktkj10->status41}}</td>
                              <td>{{ $smktkj10->tempatlahir41}}, {{ $smktkj10->tbt41}}</td>
                              <td>{{ $smktkj10->jenkel41}}</td>
                              <td>{{ $smktkj10->cita41}}</td>
                              <td>{{ $smktkj10->namaayah41}}</td>
                              <td>{{ $smktkj10->pekerjaanayah41}}</td>
                              <td>{{ $smktkj10->nohp41}}</td>
                              <td>
                                  <a href="{{url('smktkj10')}}/{{$smktkj10->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                                  <a href="{{ url('smktkj10') }}/{{$smktkj10->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                            <!--     GAGAL --- SWEET ALERT GAGAL --> 
                            <!--      <a href="#" class="btn btn-danger btn-sm delete" smktkj10-id="{{$smktkj10->id}}">Delete</a>   --> 

                              </td>
                            </tr>
                            @endforeach

                        </tbody>
                      </table>
                  </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSmktkj10">
                 Import Excel
               </a> 
               <a href="{{ url('smktkj10/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data SMK TKJ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

<!-- Formulir ______________________________________________________________________________________________ -->
        <div class="modal-body">

          <form action="{{ url('smktkj10/create') }}" method="POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            <!-- Keterangan --> 
            <!-- <label for="name41"><b> NAMA LABEL </b></label>t -->
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
                  <input id="namalengkap41" type="text" class="form-control @error('namalengkap41') is-invalid @enderror" name="namalengkap41" value="{{ old('namalengkap41') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap41" autofocus>
                  @error('namalengkap41')
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
                  <input id="nisn41" type="number" class="form-control @error('nisn41') is-invalid @enderror" name="nisn41" value="{{ old('nisn41') }}" placeholder="NISN" required autocomplete="nisn41" autofocus>
                  @error('nisn41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- NIK -->
                <div class="col-md-4">
                  <input id="nik41" type="number" class="form-control @error('nik41') is-invalid @enderror" name="nik41" value="{{ old('nik41') }}" placeholder="NIK" required autocomplete="nik41" autofocus>
                  @error('nik41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
    <!-- No KK -->
                <div class="col-md-4">
                  <input id="nokk41" type="number" class="form-control @error('nokk41') is-invalid @enderror" name="nokk41" value="{{ old('nokk41') }}" placeholder="No KK" required autocomplete="nokk41" autofocus>
                  @error('nokk41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                                                                                   
              </div>
    <!-- Tempat Lahir -->                        
              <div class="form-group row">
                <div class="col-md-4">
                  <input id="tempatlahir41" type="text" class="form-control @error('tempatlahir41') is-invalid @enderror" name="tempatlahir41" value="{{ old('tempatlahir41') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir41" autofocus>
                  @error('tempatlahir41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <input id="tbt41" type="date" class="form-control @error('tbt41') is-invalid @enderror" name="tbt41" value="{{ old('tbt41') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt41" autofocus>
                  @error('tbt41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel41" class="form-control @error('jenkel41') is-invalid @enderror" name="jenkel41" value="{{ old('jenkel41') }}" required autocomplete="jenkel41" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option> Laki-laki </option>
                    <option> Perempuan </option>
                  </select>
                  @error('jenkel41')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror                              
                </div>

                           </div>
    <!-- Desa -->                        
                           <div class="form-group row">
                            <div class="col-md-6">
                              <input id="desa41" type="text" class="form-control @error('desa41') is-invalid @enderror" name="desa41" value="{{ old('desa41') }}" placeholder="Desa" required autocomplete="desa41" autofocus>
                              @error('desa41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Kecamatan -->
                            <div class="col-md-6">
                              <input id="kec41" type="text" class="form-control @error('kec41') is-invalid @enderror" name="kec41" value="{{ old('kec41') }}" placeholder="Kecamatan" required autocomplete="kec41" autofocus>
                              @error('kec41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                          </div>
    <!-- Kabupaten / Kota -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="kab41" type="text" class="form-control @error('kab41') is-invalid @enderror" name="kab41" value="{{ old('kab41') }}" placeholder="Kabupaten / Kota" required autocomplete="kab41" autofocus>
                              @error('kab41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Provinsi -->
                            <div class="col-md-4">
                              <input id="prov41" type="text" class="form-control @error('prov41') is-invalid @enderror" name="prov41" value="{{ old('prov41') }}" placeholder="Provinsi" required autocomplete="prov41" autofocus>
                              @error('prov41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Kode Pos -->
                            <div class="col-md-4">
                              <input id="kodepos41" type="text" class="form-control @error('kodepos41') is-invalid @enderror" name="kodepos41" value="{{ old('kodepos41') }}" placeholder="Kode Pos" required autocomplete="kodepos41" autofocus>
                              @error('kodepos41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Alamat Lengkap -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="cita41" type="text" class="form-control @error('cita41') is-invalid @enderror" name="cita41" value="{{ old('cita41') }}" placeholder="Alamat Lengkap" required autocomplete="cita41" autofocus>
                              @error('cita41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Jumlah Saudara Kandung -->
                            <div class="col-md-6">
                              <input id="jumlahsaudara41" type="number" class="form-control @error('jumlahsaudara41') is-invalid @enderror" name="jumlahsaudara41" value="{{ old('jumlahsaudara41') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara41" autofocus>
                              @error('jumlahsaudara41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Asal Sekolah -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="asalsekolah41" type="text" class="form-control @error('asalsekolah41') is-invalid @enderror" name="asalsekolah41" value="{{ old('asalsekolah41') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah41" autofocus>
                              @error('asalsekolah41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Alamat Asal Sekolah -->
                            <div class="col-md-6">
                              <input id="alamatasalsekolah41" type="text" class="form-control @error('alamatasalsekolah41') is-invalid @enderror" name="alamatasalsekolah41" value="{{ old('alamatasalsekolah41') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah41" autofocus>
                              @error('alamatasalsekolah41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Nama Ayah -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="namaayah41" type="text" class="form-control @error('namaayah41') is-invalid @enderror" name="namaayah41" value="{{ old('namaayah41') }}" placeholder="Nama Ayah" required autocomplete="namaayah41" autofocus>
                              @error('namaayah41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- NIK Ayah -->
                            <div class="col-md-6">
                              <input id="nikayah41" type="number" class="form-control @error('nikayah41') is-invalid @enderror" name="nikayah41" value="{{ old('nikayah41') }}" placeholder="NIK Ayah" required autocomplete="nikayah41" autofocus>
                              @error('nikayah41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Tahun Lahir Ayah -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="tahunlahirayah41" type="number" class="form-control @error('tahunlahirayah41') is-invalid @enderror" name="tahunlahirayah41" value="{{ old('tahunlahirayah41') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah41" autofocus>
                              @error('tahunlahirayah41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Pendidikan Ayah -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pendidikanayah41" class="form-control @error('pendidikanayah41') is-invalid @enderror" name="pendidikanayah41" value="{{ old('pendidikanayah41') }}" required autocomplete="pendidikanayah41" autofocus>
                                <option selected>-- Pendidikan --</option>
                                <option> TAMAT SD/MI </option>
                                <option> TAMAT SMP/MTS </option>
                                <option> TAMAT SMA/SMK/MA </option>
                                <option> DIPLOMA </option>
                                <option> SARJANA </option>
                                <option> PASCA SARJANA </option>
                                <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                              </select>
                              @error('pendidikanayah41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
    <!-- Pekerjaan Ayah -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pekerjaanayah41" class="form-control @error('pekerjaanayah41') is-invalid @enderror" name="pekerjaanayah41" value="{{ old('pekerjaanayah41') }}" required autocomplete="pekerjaanayah41" autofocus>
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
                              @error('pekerjaanayah41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                               
                            </div>                           
                          </div>
    <!-- Nama Ibu -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="namaibu41" type="text" class="form-control @error('namaibu41') is-invalid @enderror" name="namaibu41" value="{{ old('namaibu41') }}" placeholder="Nama Ibu" required autocomplete="namaibu41" autofocus>
                              @error('namaibu41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- NIK Ibu -->
                            <div class="col-md-6">
                              <input id="nikibu41" type="number" class="form-control @error('nikibu41') is-invalid @enderror" name="nikibu41" value="{{ old('nikibu41') }}" placeholder="NIK Ibu" required autocomplete="nikibu41" autofocus>
                              @error('nikibu41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Tahun Lahir Ibu -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="tahunlahiribu41" type="number" class="form-control @error('tahunlahiribu41') is-invalid @enderror" name="tahunlahiribu41" value="{{ old('tahunlahiribu41') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu41" autofocus>
                              @error('tahunlahiribu41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Pendidikan Ibu -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pendidikanibu41" class="form-control @error('pendidikanibu41') is-invalid @enderror" name="pendidikanibu41" value="{{ old('pendidikanibu41') }}" required autocomplete="pendidikanibu41" autofocus>
                                <option selected>-- Pendidikan --</option>
                                <option> TAMAT SD/MI </option>
                                <option> TAMAT SMP/MTS </option>
                                <option> TAMAT SMA/SMK/MA </option>
                                <option> DIPLOMA </option>
                                <option> SARJANA </option>
                                <option> PASCA SARJANA </option>
                                <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                              </select>
                              @error('pendidikanibu41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
    <!-- Pekerjaan Ibu -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pekerjaanibu41" class="form-control @error('pekerjaanibu41') is-invalid @enderror" name="pekerjaanibu41" value="{{ old('pekerjaanibu41') }}" required autocomplete="pekerjaanibu41" autofocus>
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
                              @error('pekerjaanibu41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                           
                          </div>
    <!-- Penghasilan -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <select id="inputState" class="form-control" id="penghasilan41" class="form-control @error('penghasilan41') is-invalid @enderror" name="penghasilan41" value="{{ old('penghasilan41') }}" required autocomplete="penghasilan41" autofocus>
                                <option selected>-- Penghasilan --</option>
                                <option> < Rp. 1.000.000,-/BULAN </option>
                                <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                                <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                                <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                                <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                                <option> > Rp. 10.000.000,-/BULAN </option>
                              </select>
                              @error('penghasilan41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
    <!-- Prestasi yang pernah di raih -->
                            <div class="col-md-6">
                              <input id="prestasi41" type="text" class="form-control @error('prestasi41') is-invalid @enderror" name="prestasi41" value="{{ old('prestasi41') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi41" autofocus>
                              @error('prestasi41')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                                                    
                          </div>
    <!-- No HP -->                        
                          <div class="form-group row">
                            <div class="col-md-12">
                              <input id="nohp41" type="text" class="form-control @error('nohp41') is-invalid @enderror" name="nohp41" value="{{ old('nohp41') }}" placeholder="No HP" required autocomplete="nohp41" autofocus>
                              @error('nohp41')
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

  <!-- Modal Import Smktkj10 -->
  <div class="modal fade" id="importSmktkj10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsmktkj10') }}" method="post" enctype="multipart/form-data">
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
        var smktkj10_id = $(this).attr('smktkj10-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMK TKJ kelas 10 dengan id "+smktkj10_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('smktkj10') }}/"+smktkj10_id+"/{{('delete')}}";
          }
        });
      });

  });

</script>

@stop