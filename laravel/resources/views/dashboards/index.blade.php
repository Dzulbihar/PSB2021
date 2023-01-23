@extends('layouts.master')

@section('content')


<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
<!--_______________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
    <div class="col-md-12">
        <div class="p-3 mb-2 bg-primary  text-white">
            <div class="metric">

                <table class="table table-hover" id="datatable">
                    <thead>
                        <tr>
                            <span class="title"> <h3> <b> Total Semua Pendaftaran = {{totalSemua()}} </b> </h3> </span>
                            <hr>
                            <span class="title"> <h4> <b> Total Pendaftaran Offline = {{Offline()}} </b> </h4> </span>
                            <span class="title"> <h4> <b> Total Pendaftaran Online = {{Online()}}  </b> </b> </h4> </span>
                            <a href="{{url('/pendaftaranOnlineBelumTes')}}" class="btn btn-primary btn-sm"> Pendaftar Online Yang BELUM TES </a>
                            <a href="#" class="btn btn-info btn-sm"> . </a>
                            <a href="{{url('/pendaftaranOnlineSudahTes')}}" class="btn btn-primary btn-sm"> Pendaftar Online Yang SUDAH TES </a>
                            <br><br>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- ambil data di database-->
                        <tr>
                            <td>
                                <a href="{{url('/totallakilaki')}}" class="btn btn-danger btn-sm">Laki-laki</a>
                                <a href="{{url('/totalperempuan')}}" class="btn btn-danger btn-sm">Perempuan</a>
                                 <br><br>
                                <a href="{{url('/totalreguler')}}" class="btn btn-success btn-sm">Reguler</a>
                                <a href="{{url ('/totalnonreguler')}}" class="btn btn-success btn-sm">Non Reguler</a>
                                 <br><br>
                                <a href="{{url('/totalregulerlk')}}" class="btn btn-warning btn-sm">Reguler Laki-laki</a>
                                <a href="{{url('/totalregulerpr')}}" class="btn btn-warning btn-sm">Reguler Perempuan</a>
                                <a href="{{url('/totalnonregulerlk')}}" class="btn btn-warning btn-sm">Non Reguler Laki-laki</a>
                                <a href="{{url('/totalnonregulerpr')}}" class="btn btn-warning btn-sm">Non Reguler Perempuan</a>
                                 <br><br>
                                <a href="{{url('/totalsmp1')}}" class="btn btn-primary btn-sm"> SMP 1</a>
                                <a href="{{url('/totalsmp2')}}" class="btn btn-primary btn-sm"> SMP 2</a>
                                <a href="{{url('/totalmts')}}" class="btn btn-primary btn-sm"> MTs </a>
                                <a href="{{url('/totalsmktkj')}}" class="btn btn-primary btn-sm"> SMK TKJ </a>
                                <a href="{{url('/totalsmktkr')}}" class="btn btn-primary btn-sm"> SMK TKR </a>
                                <a href="{{url('/totalma')}}" class="btn btn-primary btn-sm"> MA </a>
                                <a href="{{url('/totalmahadaly')}}" class="btn btn-primary btn-sm"> Mahad Aly </a>
                                 <br><br>
                                <a href="{{url('/totalregistrasi')}}" class="btn btn-danger btn-sm">Total Sudah Registrasi</a>
                                <a href="{{url('/totallunas')}}" class="btn btn-danger btn-sm">Total Sudah Lunas</a>
                                 <br><br>
                                <a href="{{url('/totalperbulan')}}" class="btn btn-success btn-sm">Rincian Pendaftaran Perbulan</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________---> 
<div class="col-md-12">
        <div class="p-3 mb-2 bg-primary  text-white">
            <div class="metric">
                <table class="table table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <h3>
                                    <b> Total Pendaftaran SMA =
                                    {{totalSantrikeluar()}}  </b>
                                </h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- ambil data di database-->
                        <tr>
                            <td>
                                <a href="{{url('/smadetail')}}" class="btn btn-primary">Detail Pendaftaran</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
<div class="col-md-4">
        <div class="p-3 mb-2 bg-success  text-white">
            <div class="metric">
                <table class="table table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <img src="{{asset('logo/smp.png')}}" width="100%">
                                <br>
                                <h3 class="text-warning">
                                    <b> Total Pendaftaran SMP 1 =
                                    {{totalSmp1()}}  </b>
                                </h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- ambil data di database-->
                        <tr>
                            <td>
                                <a href="{{url('/smp1detail')}}" class="btn btn-warning">Detail Pendaftaran</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
    <div class="col-md-4">
        <div class="p-3 mb-2 bg-success  text-white">
            <div class="metric">
                <table class="table table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <img src="{{asset('logo/smp.png')}}" width="100%">
                                <br>
                                <h3 class="text-warning">
                                    <b> Total Pendaftaran SMP 2 =
                                    {{totalSmp2()}}  </b>
                                </h3>
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- ambil data di database-->
                        <tr>
                            <td>
                                <a href="{{url('/smp2detail')}}" class="btn btn-warning">Detail Pendaftaran</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
    <div class="col-md-4">
        <div class="p-3 mb-2 bg-success  text-white">
            <div class="metric">
                <table class="table table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <img src="{{asset('logo/mts.png')}}" width="100%">
                                <br>
                                <h3 class="text-warning">
                                    <b> Total Pendaftaran MTs = 
                                    {{totalMts()}}  </b>
                                </h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- ambil data di database-->
                        <tr>
                            <td>
                                <a href="{{url('/mtsdetail')}}" class="btn btn-warning">Detail Pendaftaran</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
    <div class="col-md-4">
        <div class="p-3 mb-2 bg-success  text-white">
            <div class="metric">
                <table class="table table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <img src="{{asset('logo/ma.png')}}" width="100%">
                                <br>
                                <h3 class="text-warning">
                                    <b> Total Pendaftaran MA =
                                    {{totalMa()}}  </b>
                                </h3>
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- ambil data di database-->
                        <tr>
                            <td>
                                <a href="{{url('/madetail')}}" class="btn btn-warning">Detail Pendaftaran</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
    <div class="col-md-4">
        <div class="p-3 mb-2 bg-success  text-white">
            <div class="metric">
                <table class="table table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <img src="{{asset('logo/smk.png')}}" width="100%">
                                <br>
                                <h3 class="text-warning">
                                    <b> Total Pendaftaran SMK TKJ =
                                    {{totalSmktkj()}}  </b>
                                </h3>
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- ambil data di database-->
                        <tr>
                            <td>
                                <a href="{{url('/smktkjdetail')}}" class="btn btn-warning">Detail Pendaftaran</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
    <div class="col-md-4">
        <div class="p-3 mb-2 bg-success  text-white">
            <div class="metric">
                <table class="table table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <img src="{{asset('logo/smk.png')}}" width="100%">
                                <br>
                                <h3 class="text-warning">
                                    <b> Total Pendaftaran SMK TKR =
                                    {{totalSmktkr()}}  </b>
                                </h3>
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- ambil data di database-->
                        <tr>
                            <td>
                                <a href="{{url('/smktkrdetail')}}" class="btn btn-warning">Detail Pendaftaran</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
    <div class="col-md-12">
        <div class="p-3 mb-2 bg-success  text-white">
            <div class="metric">
                <table class="table table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <h3 class="text-warning">
                                    <b> Total Pendaftaran Online =
                                    {{totalSiswa()}}  </b>
                                </h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- ambil data di database-->
                            <td>
                                <a href="{{url('/siswadetail')}}" class="btn btn-warning">Detail Pendaftaran</a>
                            </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
    <div class="col-md-6">
        <div class="p-3 mb-2 bg-danger  text-white">
            <div class="metric">
                <table class="table table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <img src="{{asset('logo/mahadaly.png')}}" width="50%">
                                <br>
                                <h3 class="text-warning">
                                    <b> Total Pendaftaran Mahad Aly =
                                    {{totalMahadaly()}}  </b>
                                </h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- ambil data di database-->
                            <td>
                               <a href="{{url('/mahadalydetail')}}" class="btn btn-warning">Detail Pendaftaran</a>
                            </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->

<div class="col-md-6">
    <div class="p-3 mb-2 bg-danger  text-white">
        <div class="metric">
                <table class="table table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <img src="{{asset('logo/salaf.png')}}" width="50%">
                                <br>
                                <h3 class="text-warning">
                                    <b> Total Pendaftaran Salaf =
                                    {{totalSalaf()}}  </b>
                                </h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- ambil data di database-->
                            <td>
                               <a href="#" class="btn btn-warning">Detail Pendaftaran</a>
                            </td>
                    </tbody>
                </table>
        </div>
    </div>
</div>
<!--____________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->   
             
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->

<div class="col-md-12">
    <div class="col-md-4">
        <div class="p-3 mb-2 bg-primary  text-white">
            <div class="metric">
                <span class="icon"><i class="fa fa-user"></i></span>
                <p>
                    <span class="number">{{totalSmp17()}}</span>
                    <span class="title">Total Siswa SMP 1 KELAS 7</span>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="p-3 mb-2 bg-primary  text-white">
            <div class="metric">
                <span class="icon"><i class="fa fa-user"></i></span>
                <p>
                   <span class="number">{{totalSmp18()}}</span>
                   <span class="title">Total Siswa SMP 1 KELAS 8</span>
               </p>
           </div>
       </div>
   </div>

   <div class="col-md-4">
    <div class="p-3 mb-2 bg-primary  text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalSmp19()}}</span>
                <span class="title">Total Siswa SMP 1 KELAS 9</span>
            </p>
        </div>
    </div>
</div>
<!--_____________________________________________________________________________________________________________--->

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalSmp27()}}</span>
                <span class="title">Total Siswa SMP 2 KELAS 7</span>
            </p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
               <span class="number">{{totalSmp28()}}</span>
               <span class="title">Total Siswa SMP 2 KELAS 8</span>
           </p>
       </div>
   </div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalSmp29()}}</span>
                <span class="title">Total Siswa SMP 2 KELAS 9</span>
            </p>
        </div>
    </div>
</div>
<!--_____________________________________________________________________________________________________________--->
<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-dark">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalMts7()}}</span>
                <span class="title">Total Siswa MTs KELAS 7</span>
            </p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-dark">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
               <span class="number">{{totalMts8()}}</span>
               <span class="title">Total Siswa MTs KELAS 8</span>
           </p>
       </div>
   </div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-dark">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalMts9()}}</span>
                <span class="title">Total Siswa MTs KELAS 9</span>
            </p>
        </div>
    </div>
</div>
<!--_____________________________________________________________________________________________________________--->
<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalSmktkj10()}}</span>
                <span class="title">Total Siswa SMK TKJ KELAS 10</span>
            </p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
               <span class="number">{{totalSmktkj11()}}</span>
               <span class="title">Total Siswa SMK TKJ KELAS 11</span>
           </p>
       </div>
   </div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalSmktkj12()}}</span>
                <span class="title">Total Siswa SMK TKJ KELAS 12</span>
            </p>
        </div>
    </div>
</div>
<!--_____________________________________________________________________________________________________________--->
<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalSmktkr10()}}</span>
                <span class="title">Total Siswa SMK TKR KELAS 10</span>
            </p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
               <span class="number">{{totalSmktkr11()}}</span>
               <span class="title">Total Siswa SMK TKR KELAS 11</span>
           </p>
       </div>
   </div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalSmktkr12()}}</span>
                <span class="title">Total Siswa SMK TKR KELAS 12</span>
            </p>
        </div>
    </div>
</div>
<!--_____________________________________________________________________________________________________________--->
<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalMa10()}}</span>
                <span class="title">Total Siswa MA KELAS 10</span>
            </p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
               <span class="number">{{totalMa11()}}</span>
               <span class="title">Total Siswa MA KELAS 11</span>
           </p>
       </div>
   </div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalMa12()}}</span>
                <span class="title">Total Siswa MA KELAS 12</span>
            </p>
        </div>
    </div>
</div>
<!--_____________________________________________________________________________________________________________--->
<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalMahadaly1()}}</span>
                <span class="title">Total Mahasiswa Mahad Aly Semester 1 - 2</span>
            </p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
               <span class="number">{{totalMahadaly2()}}</span>
               <span class="title">Total Mahasiswa Mahad Aly Semester 3 - 4</span>
           </p>
       </div>
   </div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalMahadaly3()}}</span>
                <span class="title">Total Mahasiswa Mahad Aly Semester 5 - 6</span>
            </p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalMahadaly4()}}</span>
                <span class="title">Total Mahasiswa Mahad Aly Semester 7 - 8</span>
            </p>
        </div>
    </div>
</div>
<!--_____________________________________________________________________________________________________________--->

<div class="col-md-8">
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
                <span class="number">{{totalSalaf()}}</span>
                <span class="title">Total Santri Salaf Raudlotul Muttaqin</span>
            </p>
        </div>
    </div>
</div>

</div>
<!--_________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->






<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->




</div>
</div>
</div>
</div>



@stop