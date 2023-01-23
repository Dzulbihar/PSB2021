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

                    <h1 class="panel-title"><b>Data Santri Jenjang SMK TKJ Kelas 12</b></h1>
                    
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
                            @foreach($data_smktkj12 as $smktkj12)
                            <tr>
                              <th>{{ $nomer++}}</th>
                              <td>  {{ $smktkj12->namalengkap43}}  </td>
                              <td>{{ $smktkj12->status43}}</td>
                              <td>{{ $smktkj12->tempatlahir43}}, {{ $smktkj12->tbt43}}</td>
                              <td>{{ $smktkj12->jenkel43}}</td>
                              <td>{{ $smktkj12->cita43}}</td>
                              <td>{{ $smktkj12->namaayah43}}</td>
                              <td>{{ $smktkj12->pekerjaanayah43}}</td>
                              <td>{{ $smktkj12->nohp43}}</td>
                              <td>
                                  <a href="{{url('smktkj12')}}/{{$smktkj12->id}}/{{('profile')}}" class="btn btn-warning btn-sm"> Detail Profile </a>
                                  <a href="{{ url('smktkj12') }}/{{$smktkj12->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>

                            <!--     GAGAL --- SWEET ALERT GAGAL --> 
                            <!--      <a href="#" class="btn btn-danger btn-sm delete" smktkj12-id="{{$smktkj12->id}}">Delete</a>   --> 

                              </td>
                            </tr>
                            @endforeach

                        </tbody>
                      </table>
                  </div>

              <div>
                <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importSmktkj12">
                 Import Excel
               </a> 
               <a href="{{ url('smktkj12/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data MA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

<!-- Formulir ______________________________________________________________________________________________ -->
        <div class="modal-body">

          <form action="{{ url('smktkj12/create') }}" method="POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            <!-- Keterangan --> 
            <!-- <label for="name43"><b> NAMA LABEL </b></label>t -->
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
                  <input id="namalengkap43" type="text" class="form-control @error('namalengkap43') is-invalid @enderror" name="namalengkap43" value="{{ old('namalengkap43') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap43" autofocus>
                  @error('namalengkap43')
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
                  <input id="nisn43" type="number" class="form-control @error('nisn43') is-invalid @enderror" name="nisn43" value="{{ old('nisn43') }}" placeholder="NISN" required autocomplete="nisn43" autofocus>
                  @error('nisn43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- NIK -->
                <div class="col-md-4">
                  <input id="nik43" type="number" class="form-control @error('nik43') is-invalid @enderror" name="nik43" value="{{ old('nik43') }}" placeholder="NIK" required autocomplete="nik43" autofocus>
                  @error('nik43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
    <!-- No KK -->
                <div class="col-md-4">
                  <input id="nokk43" type="number" class="form-control @error('nokk43') is-invalid @enderror" name="nokk43" value="{{ old('nokk43') }}" placeholder="No KK" required autocomplete="nokk43" autofocus>
                  @error('nokk43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>                                                                                   
              </div>
    <!-- Tempat Lahir -->                        
              <div class="form-group row">
                <div class="col-md-4">
                  <input id="tempatlahir43" type="text" class="form-control @error('tempatlahir43') is-invalid @enderror" name="tempatlahir43" value="{{ old('tempatlahir43') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir43" autofocus>
                  @error('tempatlahir43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- Tanggal, Bulan, Tahun Lahir -->
                <div class="col-md-4">
                  <input id="tbt43" type="date" class="form-control @error('tbt43') is-invalid @enderror" name="tbt43" value="{{ old('tbt43') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt43" autofocus>
                  @error('tbt43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- Jenis Kelamin -->
                <div class="col-md-4">
                  <select id="inputState" class="form-control" id="jenkel43" class="form-control @error('jenkel43') is-invalid @enderror" name="jenkel43" value="{{ old('jenkel43') }}" required autocomplete="jenkel43" autofocus>
                    <option selected>-- Jenis Kelamin --</option>
                    <option> Laki-laki </option>
                    <option> Perempuan </option>
                  </select>
                  @error('jenkel43')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror                              
                </div>

                           </div>
    <!-- Desa -->                        
                           <div class="form-group row">
                            <div class="col-md-6">
                              <input id="desa43" type="text" class="form-control @error('desa43') is-invalid @enderror" name="desa43" value="{{ old('desa43') }}" placeholder="Desa" required autocomplete="desa43" autofocus>
                              @error('desa43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Kecamatan -->
                            <div class="col-md-6">
                              <input id="kec43" type="text" class="form-control @error('kec43') is-invalid @enderror" name="kec43" value="{{ old('kec43') }}" placeholder="Kecamatan" required autocomplete="kec43" autofocus>
                              @error('kec43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                          </div>
    <!-- Kabupaten / Kota -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="kab43" type="text" class="form-control @error('kab43') is-invalid @enderror" name="kab43" value="{{ old('kab43') }}" placeholder="Kabupaten / Kota" required autocomplete="kab43" autofocus>
                              @error('kab43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Provinsi -->
                            <div class="col-md-4">
                              <input id="prov43" type="text" class="form-control @error('prov43') is-invalid @enderror" name="prov43" value="{{ old('prov43') }}" placeholder="Provinsi" required autocomplete="prov43" autofocus>
                              @error('prov43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Kode Pos -->
                            <div class="col-md-4">
                              <input id="kodepos43" type="text" class="form-control @error('kodepos43') is-invalid @enderror" name="kodepos43" value="{{ old('kodepos43') }}" placeholder="Kode Pos" required autocomplete="kodepos43" autofocus>
                              @error('kodepos43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Alamat Lengkap -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="cita43" type="text" class="form-control @error('cita43') is-invalid @enderror" name="cita43" value="{{ old('cita43') }}" placeholder="Alamat Lengkap" required autocomplete="cita43" autofocus>
                              @error('cita43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Jumlah Saudara Kandung -->
                            <div class="col-md-6">
                              <input id="jumlahsaudara43" type="number" class="form-control @error('jumlahsaudara43') is-invalid @enderror" name="jumlahsaudara43" value="{{ old('jumlahsaudara43') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara43" autofocus>
                              @error('jumlahsaudara43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Asal Sekolah -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="asalsekolah43" type="text" class="form-control @error('asalsekolah43') is-invalid @enderror" name="asalsekolah43" value="{{ old('asalsekolah43') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah43" autofocus>
                              @error('asalsekolah43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Alamat Asal Sekolah -->
                            <div class="col-md-6">
                              <input id="alamatasalsekolah43" type="text" class="form-control @error('alamatasalsekolah43') is-invalid @enderror" name="alamatasalsekolah43" value="{{ old('alamatasalsekolah43') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah43" autofocus>
                              @error('alamatasalsekolah43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Nama Ayah -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="namaayah43" type="text" class="form-control @error('namaayah43') is-invalid @enderror" name="namaayah43" value="{{ old('namaayah43') }}" placeholder="Nama Ayah" required autocomplete="namaayah43" autofocus>
                              @error('namaayah43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- NIK Ayah -->
                            <div class="col-md-6">
                              <input id="nikayah43" type="number" class="form-control @error('nikayah43') is-invalid @enderror" name="nikayah43" value="{{ old('nikayah43') }}" placeholder="NIK Ayah" required autocomplete="nikayah43" autofocus>
                              @error('nikayah43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Tahun Lahir Ayah -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="tahunlahirayah43" type="number" class="form-control @error('tahunlahirayah43') is-invalid @enderror" name="tahunlahirayah43" value="{{ old('tahunlahirayah43') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah43" autofocus>
                              @error('tahunlahirayah43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Pendidikan Ayah -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pendidikanayah43" class="form-control @error('pendidikanayah43') is-invalid @enderror" name="pendidikanayah43" value="{{ old('pendidikanayah43') }}" required autocomplete="pendidikanayah43" autofocus>
                                <option selected>-- Pendidikan --</option>
                                <option> TAMAT SD/MI </option>
                                <option> TAMAT SMP/MTS </option>
                                <option> TAMAT SMA/SMK/MA </option>
                                <option> DIPLOMA </option>
                                <option> SARJANA </option>
                                <option> PASCA SARJANA </option>
                                <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                              </select>
                              @error('pendidikanayah43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
    <!-- Pekerjaan Ayah -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pekerjaanayah43" class="form-control @error('pekerjaanayah43') is-invalid @enderror" name="pekerjaanayah43" value="{{ old('pekerjaanayah43') }}" required autocomplete="pekerjaanayah43" autofocus>
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
                              @error('pekerjaanayah43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                               
                            </div>                           
                          </div>
    <!-- Nama Ibu -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <input id="namaibu43" type="text" class="form-control @error('namaibu43') is-invalid @enderror" name="namaibu43" value="{{ old('namaibu43') }}" placeholder="Nama Ibu" required autocomplete="namaibu43" autofocus>
                              @error('namaibu43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- NIK Ibu -->
                            <div class="col-md-6">
                              <input id="nikibu43" type="number" class="form-control @error('nikibu43') is-invalid @enderror" name="nikibu43" value="{{ old('nikibu43') }}" placeholder="NIK Ibu" required autocomplete="nikibu43" autofocus>
                              @error('nikibu43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                            
                          </div>
    <!-- Tahun Lahir Ibu -->                        
                          <div class="form-group row">
                            <div class="col-md-4">
                              <input id="tahunlahiribu43" type="number" class="form-control @error('tahunlahiribu43') is-invalid @enderror" name="tahunlahiribu43" value="{{ old('tahunlahiribu43') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu43" autofocus>
                              @error('tahunlahiribu43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
    <!-- Pendidikan Ibu -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pendidikanibu43" class="form-control @error('pendidikanibu43') is-invalid @enderror" name="pendidikanibu43" value="{{ old('pendidikanibu43') }}" required autocomplete="pendidikanibu43" autofocus>
                                <option selected>-- Pendidikan --</option>
                                <option> TAMAT SD/MI </option>
                                <option> TAMAT SMP/MTS </option>
                                <option> TAMAT SMA/SMK/MA </option>
                                <option> DIPLOMA </option>
                                <option> SARJANA </option>
                                <option> PASCA SARJANA </option>
                                <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
                              </select>
                              @error('pendidikanibu43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
    <!-- Pekerjaan Ibu -->
                            <div class="col-md-4">
                              <select id="inputState" class="form-control" id="pekerjaanibu43" class="form-control @error('pekerjaanibu43') is-invalid @enderror" name="pekerjaanibu43" value="{{ old('pekerjaanibu43') }}" required autocomplete="pekerjaanibu43" autofocus>
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
                              @error('pekerjaanibu43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                           
                          </div>
    <!-- Penghasilan -->                        
                          <div class="form-group row">
                            <div class="col-md-6">
                              <select id="inputState" class="form-control" id="penghasilan43" class="form-control @error('penghasilan43') is-invalid @enderror" name="penghasilan43" value="{{ old('penghasilan43') }}" required autocomplete="penghasilan43" autofocus>
                                <option selected>-- Penghasilan --</option>
                                <option> < Rp. 1.000.000,-/BULAN </option>
                                <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
                                <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
                                <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
                                <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
                                <option> > Rp. 10.000.000,-/BULAN </option>
                              </select>
                              @error('penghasilan43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror                              
                            </div>
    <!-- Prestasi yang pernah di raih -->
                            <div class="col-md-6">
                              <input id="prestasi43" type="text" class="form-control @error('prestasi43') is-invalid @enderror" name="prestasi43" value="{{ old('prestasi43') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi43" autofocus>
                              @error('prestasi43')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>                                                    
                          </div>
    <!-- No HP -->                        
                          <div class="form-group row">
                            <div class="col-md-12">
                              <input id="nohp43" type="text" class="form-control @error('nohp43') is-invalid @enderror" name="nohp43" value="{{ old('nohp43') }}" placeholder="No HP" required autocomplete="nohp43" autofocus>
                              @error('nohp43')
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

  <!-- Modal Import Smktkj12 -->
  <div class="modal fade" id="importSmktkj12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('importsmktkj12') }}" method="post" enctype="multipart/form-data">
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
        var smktkj12_id = $(this).attr('smktkj12-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMK TKJ kelas 12 dengan id "+smktkj12_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('smktkj12') }}/"+smktkj12_id+"/{{('delete')}}";
          }
        });
      });

  });

</script>

@stop