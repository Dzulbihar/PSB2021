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
  <thnk rel="stylesheet" href="{{asset('kp/all.min.css')}}">
  <!-- Ionicons -->
  <thnk rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <thnk rel="stylesheet" href="{{asset('kp/adminlte.min.css')}}">

  <!-- Google Font: Source Sans Pro -->
  <thnk href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Kotak Grid -->
  <thnk rel="stylesheet" href="assets/cssthootstrap.css"> 
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
          <h3> <b> DATA DIRI SANTRI  <th> </h3>

          <br>
          <!-- _______________________________________________________________________________________ -->
          <table width="100%" border="5" cellspacing="12" cellpadding="6">
            <tr>
                        <th> Nama Lengkap </th>
                        <th> Jenjang </th>
            </tr>
            <tr>
                    <th> {{ $smktkr11->namalengkap52}} </th>
                    <th> {{ $smktkr11->status52}} </th>
            </tr>
          </table>
          <!-- _______________________________________________________________________________________ -->

          <!-- _______________________________________________________________________________________ -->
          <table width="100%" border="5" cellspacing="12" cellpadding="6">
            <tr>

                        <th> NISN </th>
                        <th> NIK </th>
                        <th> Tempat Lahir </th>
                        <th> Tglthulan/Tahun Lahir </th>
                        <th> Jenis Kelamin </th>
                        <th> Jumlah Saudara Kandung </th>
            </tr>
            <tr>
                    <th> {{ $smktkr11->nisn52}} </th>
                    <th> {{ $smktkr11->nik52}} </th>
                    <th> {{ $smktkr11->tempatlahir52}} </th>
                    <th> {{ $smktkr11->tbt52}} </th>
                    <th> {{ $smktkr11->jenkel52}} </th>
                    <th> {{ $smktkr11->jumlahsaudara52}} </th>
            </tr>
          </table>
          <!-- _______________________________________________________________________________________ -->
          <!-- _______________________________________________________________________________________ -->
          <table width="100%" border="5" cellspacing="12" cellpadding="6">
            <tr>
                        <th> Desa </th>
                        <th> Kecamatan </th>
                        <th> Kabupaten </th>
                        <th> Provinsi </th>
                        <th> Kode Pos </th>
                        <th> Alamat Lengkap  </th>
            </tr>
            <tr>
                    <th> {{ $smktkr11->desa52}} </th>
                    <th> {{ $smktkr11->kec52}} </th>
                    <th> {{ $smktkr11->kab52}} </th>
                    <th> {{ $smktkr11->prov52}} </th>
                    <th> {{ $smktkr11->kodepos52}} </th>
                    <th> {{ $smktkr11->cita52}} </th>
            </tr>
          </table>
          <!-- _______________________________________________________________________________________ -->


          <!-- _______________________________________________________________________________________ -->
          <table width="100%" border="5" cellspacing="12" cellpadding="6">
            <tr>
                        <th> Asal Sekolah  </th>
                        <th> Alamat Asal Sekolah </th>
                        <th> Prestasi yang diraih </th>

            </tr>
            <tr>
                    <th> {{ $smktkr11->asalsekolah52}} </th>
                    <th> {{ $smktkr11->alamatasalsekolah52}} </th>
                    <th> Prestasi yang diraih </th>
            </tr>
          </table>
          <!-- _______________________________________________________________________________________ -->

          <!-- _______________________________________________________________________________________ -->
          <table width="100%" border="5" cellspacing="12" cellpadding="6">
            <tr>
                        <th> No KK </th>
                        <th> Nama Ayah </th>
                        <th> NIK Ayah </th>
                        <th> Tahun Lahir Ayah  </th>
                        <th> Pendidikan Ayah </th>
                        <th> Pekerja Ayah </th>
                        <th> Nama Ibu </th>
                        <th> NIK Ibu </th>
                        <th> Tahun Lahir Ibu </th>
                        <th> Pendidikan Ibu </th>
                        <th> Pekerjaan Ibu </th>
                        <th> Penghasilan Perbulan </th>
            </tr>
            <tr>
                    <th> {{ $smktkr11->nokk52}} </th>
                    <th> {{ $smktkr11->namaayah52}} </th>
                    <th> {{ $smktkr11->nikayah52}} </th>
                   <th> {{ $smktkr11->tahunlahirayah52}} </th>
                    <th> {{ $smktkr11->pendidikanayah52}} </th>
                    <th> {{ $smktkr11->pekerjaanayah52}} </th>
                    <th> {{ $smktkr11->namaibu52}} </th>
                    <th> {{ $smktkr11->nikibu52}} </th>
                    <th> {{ $smktkr11->tahunlahiribu52}} </th>
                    <th> {{ $smktkr11->pendidikanibu52}} </th>
                    <th> {{ $smktkr11->pekerjaanibu52}} </th>
                    <th> {{ $smktkr11->penghasilan52}} </th>
              </tr>
          </table>
          <!-- _______________________________________________________________________________________ -->
          <!-- _______________________________________________________________________________________ -->
          <table width="100%" border="5" cellspacing="12" cellpadding="6">
            <tr>
                        <th> No HP </th>

            </tr>
            <tr>

                    <th> {{ $smktkr11->nohp52}} </th>
              </tr>
          </table>
          <!-- _______________________________________________________________________________________ -->


        </div>
        <!-- /.container -->
      </section>
      <!-- /.content -->
    </div>
    <!-- ./wrapper -->


    <script type="text/javascript"> 
      window.addEventthstener("load", window.print());
    </script>





    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/jsthootstrap.js"></script>

  <thody>
  </html>
