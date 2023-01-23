@extends('layouts.master')

@section('content')


<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">

        <!--____________________________________________________________________________________________________--->
        <!--____________________________________________________________________________________________________--->
        <div class="col-md-12">
          <div class="p-3 mb-2 bg-primary  text-white">
            <div class="metric">
              <table class="table table-hover" id="datatable">
                <thead>
                  <tr>
                    <th> 
                      <h3> 
                        <b> Data Detail Pendaftaran Mahad Aly  </b>
                        <hr>
                        <b> Total Pendaftaran Mahad Aly = {{totalMahadaly()}}  </b>
                      </h3>
                    </th>

                  </tr>
                </thead>
                <tbody>
                  <!-- ambil data di database-->
                  <td>
                      <a href="{{url('/mahadaly/tanggalmasuk')}}" class="btn btn-primary btn-sm">Rincian Pendaftaran Perbulan</a>
                      <hr>
                      <a href="{{url('/mahadaly/lakilaki')}}" class="btn btn-danger btn-sm">Jumlah Laki-laki</a>
                      <a href="{{url('/mahadaly/perempuan')}}" class="btn btn-danger btn-sm">Jumlah Perempuan</a>
                      <hr>
                      <a href="{{url('/mahadaly/reguler')}}" class="btn btn-success btn-sm">Reguler</a>
                      <a href="{{url('/mahadaly/nonreguler')}}" class="btn btn-success btn-sm">Non Reguler</a>
                      <hr>
                      <a href="{{url('/mahadaly/regulerlk')}}" class="btn btn-warning btn-sm">Reguler Laki-laki</a>
                      <a href="{{url('/mahadaly/regulerpr')}}" class="btn btn-warning btn-sm">Reguler Perempuan</a>
                      <a href="{{url('/mahadaly/nonregulerlk')}}" class="btn btn-warning btn-sm">Non Reguler Laki-laki</a>
                      <a href="{{url('/mahadaly/nonregulerpr')}}" class="btn btn-warning btn-sm">Non Reguler Perempuan</a>
                      <hr><hr>
                      <a href="{{url('/mahadaly/uang')}}" class="btn btn-primary btn-sm">Sudah Registrasi</a>
                      <a href="{{url('/mahadaly/lunas')}}" class="btn btn-primary btn-sm">Sudah Lunas</a>
                      <br><br>
                      <a href="{{url('/mahadaly/uang/reguler/lakilaki')}}" class="btn btn-primary btn-sm">Sudah Registrasi Reguler Laki-laki</a>
                      <a href="{{url('/mahadaly/uang/reguler/perempuan')}}" class="btn btn-primary btn-sm">Sudah Registrasi Reguler Perempuan</a>
                      <a href="{{url('/mahadaly/uang/nonreguler/lakilaki')}}" class="btn btn-primary btn-sm">Sudah Registrasi Non Reguler Laki-laki</a>
                      <a href="{{url('/mahadaly/uang/nonreguler/perempuan')}}" class="btn btn-primary btn-sm">Sudah Registrasi Non Reguler Perempuan</a>
                  </td>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--____________________________________________________________________________________________________--->
        <!--____________________________________________________________________________________________________--->

      </div>
    </div>
  </div>
</div>



@stop