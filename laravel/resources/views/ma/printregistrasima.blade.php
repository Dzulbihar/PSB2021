<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Kotak Grid -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>.</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('kp/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('kp/adminlte.min.css')}}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Kotak Grid -->
  <link rel="stylesheet" href="assets/css/bootstrap.css"> 
</head>


<body>

	<div class="wrapper">
		<!-- Main content -->
		<section class="invoice">

			<!-- Main content -->
			<div class="invoice p-3 mb-3">

				<!-- title row -->
				<div class="row">
					<div class="col-12">
						<img src="{{asset('kopaska/maregistrasi.jpg')}}" width="100%">
					</div>
				</div>
        <br>
        <div class="container-fluid">
          <h4> <b> Registrasi Jenjang MA Askhabul Kahfi, {{ ($ma->fasilitas) }} </b> </h4>
          <table class="table table-striped">
            <body>

              <tr>
                <td> Nomor Pendaftaran </td>
                <td> : </td>
                <td>
                  A00{{$ma->id}}
                </td>
              </tr> 

              <tr>
                <td> Nama Lengkap </td>
                <td> : </td>
                <td>
                  {{ ($ma->namalengkap) }}
                </td>
              </tr>                                    

              <tr>
                <td> Alamat </td>
                <td> : </td>
                <td>
                  {{ ($ma->desa) }}, {{ ($ma->kec) }}, {{ ($ma->kab) }}
                </td>
              </tr>

            </body>
          </table>

          <div class="panel">
            <div class="panel-body">
              <table width="100%" border="4" cellspacing="2" cellpadding="5">
                <thead>
                  <tr>
                    <th> Tahap Pembayaran </th>
                    <th> Waktu Membayar </th>
                    <th> Sudah Membayar </th>
                    <th> Status Lunas </th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($ma->registrasi as $registrasi)
                  <tr>
                    <td> {{$registrasi->biayaawalmasuk}} </td>
                    <td> {{$registrasi->pivot->waktu}} </td>
                    <td> Rp. {{ number_format( $registrasi->pivot->bayar )}} </td>
                    <td> {{ $registrasi->pivot->lunas }} </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
            </div>
          </div>

<br><br>
          <div class="row">

            <!-- __________________________________________________________________________ -->
            <div class="col-md-1">
              <div class="bg-white text-white"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-white text-white"> .  </div>
            </div>
            <div class="col-md-4">
              <div class="bg-white text-white"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-white text-white"> Semarang,&nbsp;&nbsp; .&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;. </div>
            </div>
            <div class="col-md-1">
              <div class="bg-white text-white"> . </div>
            </div>
            <!-- __________________________________________________________________________ -->
            <div class="col-md-1">
              <div class="bg-white text-white"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-center text-light"> Petugas Pendaftaran PSB  </div>
            </div>
            <div class="col-md-4">
              <div class="bg-white text-white"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-center text-light"> Calon Santri </div>
            </div>
            <div class="col-md-1">
              <div class="bg-white text-white"> . </div>
            </div>
            <!-- __________________________________________________________________________ -->
            <div class="col-md-1">
              <div class="bg-white text-white"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-4">
              <div class="bg-white text-white"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-1">
              <div class="bg-white text-white"> . </div>
            </div>
            <!-- __________________________________________________________________________ -->
            <div class="col-md-1">
              <div class="bg-white text-white"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-4">
              <div class="bg-white text-white"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-1">
              <div class="bg-white text-white"> . </div>
            </div>
            <!-- __________________________________________________________________________ -->
            <div class="col-md-1">
              <div class="bg-white text-white"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-center text-light"> _________________________ </div>
            </div>
            <div class="col-md-4">
              <div class="bg-white text-white"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-center text-light"> _________________________ </div>
            </div>
            <div class="col-md-1">
              <div class="bg-white text-white"> . </div>
            </div>
            <!-- __________________________________________________________________________ -->
            <div class="col-md-1">
              <div class="bg-white text-white"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-center text-light"> (Ttd / Nama Terang) </div>
            </div>
            <div class="col-md-4">
              <div class="bg-white text-white"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-center text-light"> (Ttd / Nama Terang) </div>
            </div>
            <div class="col-md-1">
              <div class="bg-white text-white"> . </div>
            </div>
            <!-- __________________________________________________________________________ -->

<br><br>
<h5 class="text-danger"> <b> BIAYA REGISTRASI YANG SUDAH MASUK TIDAK BISA DITARIK KEMBALI </b> </h5>

          </div>
          <!-- /.row -->




        </div>
        <!-- /.container -->
      </section>
      <!-- /.content -->
    </div>
    <!-- ./wrapper -->


    <script type="text/javascript"> 
      window.addEventListener("load", window.print());
    </script>





    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>

  </body>
  </html>
