@extends('layouts.master')

@section('content')


<div class="main">
  <div class="main-content">
    <div class="container-fluid">


        <div class="card">
            <div class="card-body">  
                <div class="row">
                    <!-- kolom 1 -->                    
                    <div class="col-md-2">
                        <h2></h2><br><br>
                        <img src="{{ url('logo/smp.png')}}" width="100%">
                    </div>
                    <!-- --> 
                    <!-- kolom 2 --> 
                    <div class="col-md-10">
                        <h2></h2>
                        <h3> <b> Registrasi Jenjang SMP 2 Askhabul Kahfi, {{ ($smp2->fasilitas) }} </b> </h3>
                        <table class="table table-striped">
                            <body>

                                <tr>
                                    <td> Nama Lengkap </td>
                                    <td> : </td>
                                    <td>
                                        {{ ($smp2->namalengkap) }}
                                    </td>
                                </tr>                                    

                                <tr>
                                    <td> Alamat </td>
                                    <td> : </td>
                                    <td>
                                        {{ ($smp2->desa) }}, {{ ($smp2->kec) }}, {{ ($smp2->kab) }}
                                    </td>
                                </tr>

                                <tr>
                                    <td> Biaya Awal Masuk Fasilitas Reguler, Gelombang 1 </td>
                                    <td> : </td>
                                    <td>
                                        Rp. 3.600.000
                                    </td>
                                </tr>

                                <tr>
                                    <td> Biaya Awal Masuk Fasilitas Non Reguler, Gelombang 1 </td>
                                    <td> : </td>
                                    <td>
                                        Rp. 4.600.000
                                    </td>
                                </tr>

                                <tr>
                                    <td> Biaya Awal Masuk Fasilitas Reguler, Gelombang 2 </td>
                                    <td> : </td>
                                    <td>
                                        Rp. 6.050.0000
                                    </td>
                                </tr>

                                <tr>
                                    <td> Biaya Awal Masuk Fasilitas Non Reguler, Gelombang 2 </td>
                                    <td> : </td>
                                    <td>
                                        Rp. 7.050.000
                                    </td>
                                </tr>

                                <tr>
                                    <td>Sudah Membayar</td>
                                    <td></td>
                                    <td>
                                        <!--MASUKAN BIAYA-->
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrasi">
                                          Masukan Biaya 
                                      </button>

                                  </td>
                              </tr>

                          </body>
                      </table>
                  </div>
                  <!--  -->                
              </div>  
          </div>
      </div>

<br><br>

      <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title"> <b> Data History Pembayaran {{ ($smp2->namalengkap) }} </b> </h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <tr>
                        <th> Tahap Pembayaran </th>
                        <th> Nama </th>
                        <th> Status Registrasi </th>
                        <th> Status Lunas </th>
                        <th> Waktu Membayar </th>
                        <th> Sudah Membayar </th>
                        <th> Ukuran Batik </th>
                        <th> Ukuran Olahraga </th>
                        <th> Ukuran Jas </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($smp2->registrasi as $registrasi)
                    <tr>
                        <td> {{ $registrasi->biayaawalmasuk }} </td>
                        <td> {{ $registrasi->pivot->nama }} </td>
                        <td> {{ $registrasi->pivot->status }} </td>
                        <td> {{ $registrasi->pivot->lunas }} </td>
                        <td> {{ $registrasi->pivot->waktu }} </td>
                        <td> Rp. {{ number_format( $registrasi->pivot->bayar )}} </td>
                        <td> {{ $registrasi->pivot->ukuran_batik }} </td>
                        <td> {{ $registrasi->pivot->ukuran_olahraga }} </td>
                        <td> {{ $registrasi->pivot->ukuran_jas }} </td>
                        <td><a href="{{ url('smp2') }}/{{$smp2->id}}/{{$registrasi->id}}/{{'deleteregistrasi'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ url('smp2') }}/{{$smp2->id}}/{{('printregistrasismp2')}}" target="_blank" class="btn btn-success float-right"></i> Print Registrasi </a>
        </div>
    </div>



</div>
</div>
</div>


<!-- Tambah Data Biaya Awal Masuk -->
<div class="modal fade" id="registrasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Biaya Awal Masuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>

  <div class="modal-body">

    <form action="{{url('smp2')}}/{{$smp2->id}}/addbiaya"  method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <!-- registrasi -->
        <div class="form-group">
            <label for="registrasi"> Tahap Pembayaran </label>
            <select class="form-control" id="registrasi" name="registrasi">
            @foreach($uang as $ua)
                <option value="{{$ua->id}}">{{$ua->biayaawalmasuk}}</option>
            @endforeach
            </select>
        </div>

        <!-- Jalur -->
        <div class="form-group">
            <div class="col-md-6">
                <label for="jalur"> Jalur </label>
                <input readonly name="jalur" type="text" class="form-control @error('jalur') is-invalid @enderror" id="jalur" aria-describedby="emailHelp" value="{{$smp2->jalur}}" required autocomplete="jalur" autofocus>
            </div>

        <!-- Jenjang -->
            <div class="col-md-6">
                <label for="jenjang"> Jenjang </label>
                <input readonly name="jenjang" type="text" class="form-control @error('jenjang') is-invalid @enderror" id="jenjang" aria-describedby="emailHelp" value="{{$smp2->status}}" required autocomplete="jenjang" autofocus>
            </div>
        </div>

        <!-- nama -->
        <div class="form-group">
            <div class="col-md-4">
                <label for="nama"> Nama Lengkap </label>
                <input readonly name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" aria-describedby="emailHelp" value="{{$smp2->namalengkap}}" required autocomplete="nama" autofocus>
            </div>

        <!-- fasilitas -->
            <div class="col-md-4">
                <label for="fasilitas"> Fasilitas </label>
                <input readonly name="fasilitas" type="text" class="form-control @error('fasilitas') is-invalid @enderror" id="fasilitas" aria-describedby="emailHelp" value="{{$smp2->fasilitas}}" required autocomplete="fasilitas" autofocus>
            </div>

        <!-- jenis_kelamin -->
            <div class="col-md-4">
                <label for="jenis_kelamin"> Jenis Kelamin </label>
                <input readonly name="jenis_kelamin" type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" aria-describedby="emailHelp" value="{{$smp2->jenkel}}" required autocomplete="jenis_kelamin" autofocus>
            </div>
            <br><br><br>
        </div>
        <br><br><br>

        <!-- status -->
        <div class="form-group{{$errors->has('status') ? 'has-error' : ''}}">
            <label for="status"> Registrasi / Angsuran </label> <br>
            <span> jika <b>baru</b>  registrasi, silahkan pilih = <b>sudah registrasi</b> </span> <br>
            <span> jika <b>sudah pernah</b> registrasi, silahkan pilih = <b>angsuran</b> </span>  <br><br>
            <select id="inputState" class="form-control" id="status" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>
                <option selected> sudah registrasi </option>
                <option> angsuran </option>
            </select>
            @error('status')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror    
        </div>   

        <!-- lunas -->
        <div class="form-group{{$errors->has('lunas') ? 'has-error' : ''}}">
            <label for="lunas"> Belum Lunas / Sudah Lunas </label> <br>
            <span> jika <b>belum lunas</b> registrasi, silahkan pilih = <b>belum lunas</b> </span> <br>
            <span> jika <b>sudah lunas</b> registrasi, silahkan pilih = <b>sudah lunas</b> </span> <br><br>
            <select id="inputState" class="form-control" id="lunas" class="form-control @error('lunas') is-invalid @enderror" name="lunas" value="{{ old('lunas') }}" required autocomplete="lunas" autofocus>
                <option selected> belum lunas </option>
                <option> sudah lunas </option>
            </select>
            @error('lunas')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror    
        </div>   

        <!-- waktu -->
        <div class="form-group{{$errors->has('waktu') ? 'has-error' : ''}}">
            <label for="waktu"> Waktu Membayar</label>
            <input name="waktu" type="date" class="form-control @error('waktu') is-invalid @enderror" id="waktu" aria-describedby="emailHelp" value="{{old('waktu')}}" required autocomplete="waktu" autofocus>
            @error('waktu')
             <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
        <!-- bayar -->
        <div class="form-group{{$errors->has('bayar') ? 'has-error' : ''}}">
            <label for="bayar"> Masukan Biaya</label>
            <input name="bayar" type="number" class="form-control @error('bayar') is-invalid @enderror" id="bayar" aria-describedby="emailHelp" value="{{old('bayar')}}" required autocomplete="bayar" autofocus>
            @error('bayar')
             <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>

        <!-- ukuran_batik -->
        <div class="form-group{{$errors->has('ukuran_batik') ? 'has-error' : ''}}">
            <label for="ukuran_batik"> Ukuran Batik  </label> <br>
            <select id="inputState" class="form-control" id="ukuran_batik" class="form-control @error('ukuran_batik') is-invalid @enderror" name="ukuran_batik" value="{{ old('ukuran_batik') }}" required autocomplete="ukuran_batik" autofocus>
                <option selected> S </option>
                <option> M </option>
                <option> L </option>
                <option> XL </option>
                <option> XXL </option>
                <option> XXXL </option>
            </select>
            @error('ukuran_batik')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror    
        </div>

        <!-- ukuran_olahraga -->
        <div class="form-group{{$errors->has('ukuran_olahraga') ? 'has-error' : ''}}">
            <label for="ukuran_olahraga"> Ukuran Olahraga  </label> <br>
            <select id="inputState" class="form-control" id="ukuran_olahraga" class="form-control @error('ukuran_olahraga') is-invalid @enderror" name="ukuran_olahraga" value="{{ old('ukuran_olahraga') }}" required autocomplete="ukuran_olahraga" autofocus>
                <option selected> S </option>
                <option> M </option>
                <option> L </option>
                <option> XL </option>
                <option> XXL </option>
                <option> XXXL </option>
            </select>
            @error('ukuran_olahraga')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror    
        </div>

        <!-- ukuran_jas -->
        <div class="form-group{{$errors->has('ukuran_jas') ? 'has-error' : ''}}">
            <label for="ukuran_jas"> Ukuran Jas  </label> <br>
            <select id="inputState" class="form-control" id="ukuran_jas" class="form-control @error('ukuran_jas') is-invalid @enderror" name="ukuran_jas" value="{{ old('ukuran_jas') }}" required autocomplete="ukuran_jas" autofocus>
                <option selected> S </option>
                <option> M </option>
                <option> L </option>
                <option> XL </option>
                <option> XXL </option>
                <option> XXXL </option>
            </select>
            @error('ukuran_jas')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror    
        </div>

</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>

</form>

</div>
</div>
</div>

@endsection