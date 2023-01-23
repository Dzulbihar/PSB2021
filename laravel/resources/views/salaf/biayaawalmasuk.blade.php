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
                        <img src="{{ url('logo/salaf.png')}}" width="100%">
                    </div>
                    <!-- --> 
                    <!-- kolom 2 --> 
                    <div class="col-md-10">
                        <h2></h2>
                        <h3> <b> Registrasi Jenjang Salaf Roudlotul Muttaqin </b> </h3>
                        <table class="table table-striped">
                            <body>

                                <tr>
                                    <td> Nama Lengkap </td>
                                    <td> : </td>
                                    <td>
                                        {{ ($salaf->namalengkap0) }}
                                    </td>
                                </tr>                                    

                                <tr>
                                    <td> Alamat </td>
                                    <td> : </td>
                                    <td>
                                        {{ ($salaf->desa0) }}, {{ ($salaf->kec0) }}, {{ ($salaf->kab0) }}
                                    </td>
                                </tr>

                                <tr>
                                    <td> Biaya Awal Masuk </td>
                                    <td> : </td>
                                    <td>
                                        Rp. 2.000.000
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
            <h3 class="panel-title"> <b> Data History Pembayaran {{ ($salaf->namalengkap0) }} </b> </h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Pembayaran </th>
                        <th> Waktu Membayar </th>
                        <th> Sudah Membayar </th>
                        <th> Aksi </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($salaf->registrasi as $registrasi)
                    <tr>
                        <td> {{$registrasi->biayaawalmasuk}} </td>
                        <td> {{$registrasi->pivot->waktu}} </td>
                        <td> Rp. {{ number_format( $registrasi->pivot->bayar )}} </td>
                        <td><a href="{{ url('salaf') }}/{{$salaf->id}}/{{$registrasi->id}}/{{'deleteregistrasi'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ url('salaf') }}/{{$salaf->id}}/{{('printregistrasisalaf')}}" target="_blank" class="btn btn-success float-right"></i> Print Registrasi </a>
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
        <h0 class="modal-title" id="exampleModalLabel">Tambah Data Biaya Awal Masuk</h0>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>

  <div class="modal-body">

    <form action="{{url('salaf')}}/{{$salaf->id}}/addbiaya"  method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <!-- registrasi -->
        <div class="form-group">
          <label for="registrasi"> Pembayaran </label>
          <select class="form-control" id="registrasi" name="registrasi">
            @foreach($uang as $ua)
            <option value="{{$ua->id}}">{{$ua->biayaawalmasuk}}</option>
            @endforeach
        </select>
    </div>

        <!-- nama -->
        <div class="form-group{{$errors->has('nama') ? 'has-error' : ''}}">
            <label for="nama"> Nama Lengkap </label>
            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" aria-describedby="emailHelp" value="{{$salaf->namalengkap0}}" required autocomplete="nama" autofocus>
            @error('nama')
             <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>

        <!-- status -->
        <div class="form-group{{$errors->has('status') ? 'has-error' : ''}}">
            <label for="status"> Status Pembayaran </label> <br>
            <span> jika <b>baru</b>  registrasi, silahkan pilih = <b>sudah registrasi</b> </span> <br>
            <span> jika <b>sudah pernah</b> registrasi, silahkan pilih = <b>angsuran</b> </span>  <br>
            <span> jika <b>sudah lunas</b> registrasi, silahkan pilih = <b>sudah lunas</b> </span> <br><br>
            <select id="inputState" class="form-control" id="status" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>
                <option selected> sudah registrasi </option>
                <option> angsuran </option>
                <option> sudah lunas </option>
            </select>
            @error('status')
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
            <input name="bayar" type="text" class="form-control @error('bayar') is-invalid @enderror" id="bayar" aria-describedby="emailHelp" value="{{old('bayar')}}" required autocomplete="bayar" autofocus>
            @error('bayar')
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