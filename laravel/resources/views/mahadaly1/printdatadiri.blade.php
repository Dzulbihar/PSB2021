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
                    <th> {{ $mahadaly1->namalengkap71}} </th>
                    <th> {{ $mahadaly1->status71}} </th>
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
                    <th> {{ $mahadaly1->nisn71}} </th>
                    <th> {{ $mahadaly1->nik71}} </th>
                    <th> {{ $mahadaly1->tempatlahir71}} </th>
                    <th> {{ $mahadaly1->tbt71}} </th>
                    <th> {{ $mahadaly1->jenkel71}} </th>
                    <th> {{ $mahadaly1->jumlahsaudara71}} </th>
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
                    <th> {{ $mahadaly1->desa71}} </th>
                    <th> {{ $mahadaly1->kec71}} </th>
                    <th> {{ $mahadaly1->kab71}} </th>
                    <th> {{ $mahadaly1->prov71}} </th>
                    <th> {{ $mahadaly1->kodepos71}} </th>
                    <th> {{ $mahadaly1->cita71}} </th>
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
                    <th> {{ $mahadaly1->asalsekolah71}} </th>
                    <th> {{ $mahadaly1->alamatasalsekolah71}} </th>
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
                    <th> {{ $mahadaly1->nokk71}} </th>
                    <th> {{ $mahadaly1->namaayah71}} </th>
                    <th> {{ $mahadaly1->nikayah71}} </th>
                   <th> {{ $mahadaly1->tahunlahirayah71}} </th>
                    <th> {{ $mahadaly1->pendidikanayah71}} </th>
                    <th> {{ $mahadaly1->pekerjaanayah71}} </th>
                    <th> {{ $mahadaly1->namaibu71}} </th>
                    <th> {{ $mahadaly1->nikibu71}} </th>
                    <th> {{ $mahadaly1->tahunlahiribu71}} </th>
                    <th> {{ $mahadaly1->pendidikanibu71}} </th>
                    <th> {{ $mahadaly1->pekerjaanibu71}} </th>
                    <th> {{ $mahadaly1->penghasilan71}} </th>
              </tr>
          </table>
          <!-- _______________________________________________________________________________________ -->
          <!-- _______________________________________________________________________________________ -->
          <table width="100%" border="5" cellspacing="12" cellpadding="6">
            <tr>
                        <th> No HP </th>

            </tr>
            <tr>

                    <th> {{ $mahadaly1->nohp71}} </th>
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
