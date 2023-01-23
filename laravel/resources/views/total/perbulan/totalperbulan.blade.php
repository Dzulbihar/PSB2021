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
                    <th> <h3> <b> Data Rincian Pendaftaran Perbulan (semua jalur)  </b> </h3> </th>
                  </tr>
                </thead>
                <tbody>
                  <!-- ambil data di database-->
                  <td>
                    <a href="{{url('/totalperbulanjanuari')}}" class="btn btn-primary btn-sm">Januari</a>
                    <a href="{{url('/totalperbulanfebruari')}}" class="btn btn-primary btn-sm">Februari</a>
                    <a href="{{url('/totalperbulanmaret')}}" class="btn btn-primary btn-sm">Maret</a>
                    <a href="{{url('/totalperbulanapril')}}" class="btn btn-primary btn-sm">April</a>
                    <a href="{{url('/totalperbulanmei')}}" class="btn btn-primary btn-sm">Mei</a>
                    <a href="{{url('/totalperbulanjuni')}}" class="btn btn-primary btn-sm">Juni</a>
                    <a href="{{url('/totalperbulanjuli')}}" class="btn btn-primary btn-sm">Juli</a>
                    <a href="{{url('/totalperbulanagustus')}}" class="btn btn-primary btn-sm">Agustus</a>
                    <a href="{{url('/totalperbulanseptember')}}" class="btn btn-primary btn-sm">September</a>
                    <a href="{{url('/totalperbulanoktober')}}" class="btn btn-primary btn-sm">Oktober</a>
                    <a href="{{url('/totalperbulannovember')}}" class="btn btn-primary btn-sm">November</a>
                    <a href="{{url('/totalperbulandesember')}}" class="btn btn-primary btn-sm">Desember</a>
                  </td>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--____________________________________________________________________________________________________--->
        <!--____________________________________________________________________________________________________--->

        <!--____________________________________________________________________________________________________--->
        <!--____________________________________________________________________________________________________--->
        <div class="col-md-12">
          <div class="p-3 mb-2 bg-primary  text-white">
            <div class="metric">
              <table class="table table-hover" id="datatable">
                <thead>
                  <tr>
                    <th> <h3> <b> Data Pendaftaran Perbulan (jalur OFFLINE)  </b> </h3> </th>
                  </tr>
                </thead>
                <tbody>
                  <!-- ambil data di database-->
                  <td>
                    <a href="{{url('/totalperbulanjanuarioffline')}}" class="btn btn-primary btn-sm">Januari</a>
                    <a href="{{url('/totalperbulanfebruarioffline')}}" class="btn btn-primary btn-sm">Februari</a>
                    <a href="{{url('/totalperbulanmaretoffline')}}" class="btn btn-primary btn-sm">Maret</a>
                    <a href="{{url('/totalperbulanapriloffline')}}" class="btn btn-primary btn-sm">April</a>
                    <a href="{{url('/totalperbulanmeioffline')}}" class="btn btn-primary btn-sm">Mei</a>
                    <a href="{{url('/totalperbulanjunioffline')}}" class="btn btn-primary btn-sm">Juni</a>
                    <a href="{{url('/totalperbulanjulioffline')}}" class="btn btn-primary btn-sm">Juli</a>
                    <a href="{{url('/totalperbulanagustusoffline')}}" class="btn btn-primary btn-sm">Agustus</a>
                    <a href="{{url('/totalperbulanseptemberoffline')}}" class="btn btn-primary btn-sm">September</a>
                    <a href="{{url('/totalperbulanoktoberoffline')}}" class="btn btn-primary btn-sm">Oktober</a>
                    <a href="{{url('/totalperbulannovemberoffline')}}" class="btn btn-primary btn-sm">November</a>
                    <a href="{{url('/totalperbulandesemberoffline')}}" class="btn btn-primary btn-sm">Desember</a>
                  </td>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--____________________________________________________________________________________________________--->
        <!--____________________________________________________________________________________________________--->

        <!--____________________________________________________________________________________________________--->
        <!--____________________________________________________________________________________________________--->
        <div class="col-md-12">
          <div class="p-3 mb-2 bg-primary  text-white">
            <div class="metric">
              <table class="table table-hover" id="datatable">
                <thead>
                  <tr>
                    <th> <h3> <b> Data Pendaftaran Perbulan (jalur ONLINE)  </b> </h3> </th>
                  </tr>
                </thead>
                <tbody>
                  <!-- ambil data di database-->
                  <td>
                    <a href="{{url('/totalperbulanjanuarionline')}}" class="btn btn-primary btn-sm">Januari</a>
                    <a href="{{url('/totalperbulanfebruarionline')}}" class="btn btn-primary btn-sm">Februari</a>
                    <a href="{{url('/totalperbulanmaretonline')}}" class="btn btn-primary btn-sm">Maret</a>
                    <a href="{{url('/totalperbulanaprilonline')}}" class="btn btn-primary btn-sm">April</a>
                    <a href="{{url('/totalperbulanmeionline')}}" class="btn btn-primary btn-sm">Mei</a>
                    <a href="{{url('/totalperbulanjunionline')}}" class="btn btn-primary btn-sm">Juni</a>
                    <a href="{{url('/totalperbulanjulionline')}}" class="btn btn-primary btn-sm">Juli</a>
                    <a href="{{url('/totalperbulanagustusonline')}}" class="btn btn-primary btn-sm">Agustus</a>
                    <a href="{{url('/totalperbulanseptemberonline')}}" class="btn btn-primary btn-sm">September</a>
                    <a href="{{url('/totalperbulanoktoberonline')}}" class="btn btn-primary btn-sm">Oktober</a>
                    <a href="{{url('/totalperbulannovemberonline')}}" class="btn btn-primary btn-sm">November</a>
                    <a href="{{url('/totalperbulandesemberonline')}}" class="btn btn-primary btn-sm">Desember</a>
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