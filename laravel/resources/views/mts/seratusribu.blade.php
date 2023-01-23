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
						<img src="{{asset('kopaska/mtsregistrasi.jpg')}}" width="100%">
					</div>
				</div>
        <br>
        <div class="container-fluid">
          <h4>  <b> Tanda Terima Pembayaran </b> </h4>
          <hr>
          <table class="table table-striped">
            <body>
              <tr>
                <td> Nomor Pendaftaran </td>
                <td> : </td>
                <td>
                  S00{{ ($mts->id) }}
                </td>
              </tr>                                    

              <tr>
                <td> Sudah terima dari </td>
                <td> : </td>
                <td>
                  {{ ($mts->namalengkap) }}
                </td>
              </tr>

              <tr>
                <td> Uang sebanyak </td>
                <td> : </td>
                <td>
                  <b> Dua ratus ribu rupiah </b>
                </td>
              </tr>

              <tr>
                <td> Untuk membayar </td>
                <td> : </td>
                <td>
                   Pendaftaran Santri Baru
                </td>
              </tr>

              <tr>
                <td> Terbilang </td>
                <td> : </td>
                <td>
                   Rp. 200.000,-
                </td>
              </tr>

            </body>
          </table>

<hr>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-family: Georgia, "Times New Roman", Times, serif}
-->
</style>
</head>

<body>
<p align="right">Semarang, {{ ($mts->tanggal_masuk) }} <br />
  Penerima,</p>
<p align="right">&nbsp;</p>
<p align="right">_____________</p>
</body>
</html>


<h5 class="text-danger"> <b> BIAYA REGISTRASI YANG SUDAH MASUK TIDAK BISA DITARIK KEMBALI </b> </h5>



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
