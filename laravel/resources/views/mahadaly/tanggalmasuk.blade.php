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
                    <th> <h3> <b> Data Rincian Pendaftaran Perbulan  </b> </h3> </th>
                  </tr>
                </thead>
                <tbody>
                  <!-- ambil data di database-->
                  <td>
                    <a href="{{url('/mahadaly/tanggalmasuk/januari')}}" class="btn btn-danger btn-sm">Januari</a>
                    <a href="{{url('/mahadaly/tanggalmasuk/februari')}}" class="btn btn-danger btn-sm">Februari</a>
                    <a href="{{url('/mahadaly/tanggalmasuk/maret')}}" class="btn btn-danger btn-sm">Maret</a>
                    <a href="{{url('/mahadaly/tanggalmasuk/april')}}" class="btn btn-danger btn-sm">April</a>
                    <a href="{{url('/mahadaly/tanggalmasuk/mei')}}" class="btn btn-danger btn-sm">Mei</a>
                    <a href="{{url('/mahadaly/tanggalmasuk/juni')}}" class="btn btn-danger btn-sm">Juni</a>
                    <a href="{{url('/mahadaly/tanggalmasuk/juli')}}" class="btn btn-danger btn-sm">Juli</a>
                    <a href="{{url('/mahadaly/tanggalmasuk/agustus')}}" class="btn btn-danger btn-sm">Agustus</a>
                    <a href="{{url('/mahadaly/tanggalmasuk/september')}}" class="btn btn-danger btn-sm">September</a>
                    <a href="{{url('/mahadaly/tanggalmasuk/oktober')}}" class="btn btn-danger btn-sm">Oktober</a>
                    <a href="{{url('/mahadaly/tanggalmasuk/november')}}" class="btn btn-danger btn-sm">November</a>
                    <a href="{{url('/mahadaly/tanggalmasuk/desember')}}" class="btn btn-danger btn-sm">Desember</a>
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