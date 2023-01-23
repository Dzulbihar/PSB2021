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
						<img src="{{asset('kopaska/smp1registrasi.jpg')}}" width="100%">
					</div>
				</div>

        <div class="container-fluid">
          <br>
          <h3> <b> DATA NILAI MATA PELAJARAN PESANTREN </b> </h3>
          <table class="table table-striped">
            <body>
              <tr>
                <td> Nama Lengkap </td>
                <td> : </td>
                <td>
                  {{ ($smktkr11->namalengkap52) }}
                </td>
              </tr>                                    
              <tr>
                <td> Alamat </td>
                <td> : </td>
                <td>
                  {{ ($smktkr11->desa52) }}, {{ ($smktkr11->kec52) }}, {{ ($smktkr11->kab52) }}
                </td>
              </tr>
            </body>
          </table>
          <br>
          <!-- _______________________________________________________________________________________ -->
          <table width="100%" border="5" cellspacing="12" cellpadding="6">
            <tr>
              <th scope="col">KODE</th>
              <th scope="col">MATA PELAJARAN</th>
              <th scope="col">KELAS</th>
              <th scope="col">NILAI</th>
            </tr>
            @foreach($smktkr11->mapel as $mapel)
            <tr>
              <td>{{$mapel->kode}}</td>
              <td>{{$mapel->nama}}</td>
              <td>{{$mapel->kelas}}</td>
              <td> {{$mapel->pivot->nilai}}   </td>
            </tr>
            @endforeach
          </table>
          <!-- _______________________________________________________________________________________ -->
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