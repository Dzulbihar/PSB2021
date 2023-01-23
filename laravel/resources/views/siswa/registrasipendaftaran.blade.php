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
                        <img src="{{ url('images/aska.jpg')}}" width="100%">
                    </div>
                    <!-- --> 
                    <!-- kolom 2 --> 
                    <div class="col-md-10">
                        <h2></h2>
                        <h3> <b> Registrasi Pendaftaran </b> </h3>
                        <table class="table table-striped">
                            <body>

              <tr>
                <td> Nama Lengkap </td>
                <td> : </td>
                <td>
                  {{ ($siswa->namalengkap) }}
                </td>
              </tr>                                    

              <tr>
                <td> Alamat </td>
                <td> : </td>
                <td>
                  {{ ($siswa->desa) }}, {{ ($siswa->kec) }}, {{ ($siswa->kab) }}
                </td>
              </tr>

              <tr>
                <td> Biaya Registrasi Pendaftaran </td>
                <td> : </td>
                <td>
                  Rp. 200.000
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
            <h3 class="panel-title"> <b> Data History Pembayaran {{ ($siswa->namalengkap) }} </b> </h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Nama </th>
                        <th> Waktu Membayar </th>
                        <th> Nominal </th>
                        <th> Bukti Pembayaran </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa->registrasiseratus as $registrasiseratus)
                    <tr>
                        <td> {{ $registrasiseratus->pivot->nama }} </td>
                        <td> {{ $registrasiseratus->pivot->waktu }} </td>
                        <td> Rp. {{ number_format( $registrasiseratus->pivot->bayar )}} </td>
                        <td> <img src="{{asset('images/'.$registrasiseratus->pivot->upload)}}" width="100%"> </td>
                        <td><a href="{{ url('siswa') }}/{{$siswa->id}}/{{$registrasiseratus->id}}/{{'deleteregistrasipendaftaran'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('seratusribu')}}" target="_blank" class="btn btn-success float-right"></i> Print Biaya Registrasi Pendaftaran </a>

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
        <h class="modal-title" id="exampleModalLabel">Tambah Data Registrasi</h>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>

  <div class="modal-body">

    <form action="{{url('siswa')}}/{{$siswa->id}}/addbiayaregistrasipendaftaran"  method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <!-- registrasiseratus -->
        <div class="form-group">
            <label for="registrasiseratus"> Tahap Pembayaran </label>
            <select class="form-control" id="registrasiseratus" name="registrasiseratus">
            @foreach($uang as $ua)
                <option value="{{$ua->id}}">{{$ua->registrasiseratus}}</option>
            @endforeach
            </select>
        </div>

        <!-- jenjang -->
        <div class="form-group">
          <div class="col-md-3">
            <label for="jenjang"> Jenjang </label>
            <input readonly name="jenjang" type="text" class="form-control @error('jenjang') is-invalid @enderror" id="jenjang" aria-describedby="emailHelp" value="{{$siswa->status}}" required autocomplete="jenjang" autofocus>
          </div> 
        </div>

        <!-- nama -->
        <div class="form-group">
          <div class="col-md-3">
            <label for="nama"> Nama Lengkap </label>
            <input readonly name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" aria-describedby="emailHelp" value="{{$siswa->namalengkap}}" required autocomplete="nama" autofocus>
          </div> 
        </div>

        <!-- fasilitas -->
        <div class="form-group">
          <div class="col-md-3">
            <label for="fasilitas"> Fasilitas </label>
            <input readonly name="fasilitas" type="text" class="form-control @error('fasilitas') is-invalid @enderror" id="fasilitas" aria-describedby="emailHelp" value="{{$siswa->fasilitas}}" required autocomplete="fasilitas" autofocus>
          </div> 
        </div>

        <!-- jenis_kelamin -->
        <div class="form-group">
          <div class="col-md-3">
            <label for="jenis_kelamin"> Jenis Kelamin </label>
            <input readonly name="jenis_kelamin" type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" aria-describedby="emailHelp" value="{{$siswa->jenkel}}" required autocomplete="jenis_kelamin" autofocus>
          </div> 
        </div>    

        <!-- waktu -->
        <div class="form-group">
            <label for="waktu"> Waktu Membayar</label>
            <input name="waktu" type="date" class="form-control @error('waktu') is-invalid @enderror" id="waktu" aria-describedby="emailHelp" value="{{old('waktu')}}" required autocomplete="waktu" autofocus>
            @error('waktu')
             <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
        
        <!-- bayar -->
        <div class="form-group">
            <label for="bayar"> Masukan Biaya</label>
            <input name="bayar" type="number" class="form-control @error('bayar') is-invalid @enderror" id="bayar" aria-describedby="emailHelp" value="{{old('bayar')}}" required autocomplete="bayar" autofocus>
            @error('bayar')
             <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>

        <!-- upload -->
        <div class="form-group">
            <label for="upload"> Upload Bukti Pembayaran </label>
            <input name="upload" type="file" class="form-control @error('upload') is-invalid @enderror" id="upload" aria-describedby="emailHelp" value="{{old('upload')}}" required autocomplete="upload" autofocus>
            @error('upload')
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