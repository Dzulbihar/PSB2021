@extends('layouts.master')

@section('content')


    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
<!--_______________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->


                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi SMP 1 KELAS 7</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaransmp17() as $smp17)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp17->namalengkap17}} </td>
                                                <td> {{$smp17->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi SMP 1 KELAS 8</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaransmp18() as $smp18)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp18->namalengkap18}} </td>
                                                <td> {{$smp18->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi SMP 1 KELAS 9</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaransmp19() as $smp19)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp19->namalengkap19}} </td>
                                                <td> {{$smp19->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

<!--_____________________________________________________________________________________________________________--->

<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi MTS KELAS 7</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaranmts7() as $mts7)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mts7->namalengkap37}} </td>
                                                <td> {{$mts7->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi MTS KELAS 8</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaranmts8() as $mts8)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mts8->namalengkap38}} </td>
                                                <td> {{$mts8->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi MTS KELAS 9</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaranmts9() as $mts9)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mts9->namalengkap39}} </td>
                                                <td> {{$mts9->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


<!--_____________________________________________________________________________________________________________--->

<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi SMK TKJ KELAS 10</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaransmktkj10() as $smktkj10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkj10->namalengkap41}} </td>
                                                <td> {{$smktkj10->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi SMK TKJ KELAS 11</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaransmktkj11() as $smktkj11)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkj11->namalengkap42}} </td>
                                                <td> {{$smktkj11->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi SMK TKJ KELAS 12</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaransmktkj12() as $smktkj12)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkj12->namalengkap43}} </td>
                                                <td> {{$smktkj12->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->

<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi Mahad Aly Semester 1 - 2</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaranmahadaly1() as $mahadaly1)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly1->namalengkap71}} </td>
                                                <td> {{$mahadaly1->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->                       
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi Mahad Aly Semester 3 - 4</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaranmahadaly2() as $mahadaly2)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly2->namalengkap72}} </td>
                                                <td> {{$mahadaly2->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi Salaf Roudlotul Muttaqin</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaransalaf() as $salaf)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$salaf->namalengkap0}} </td>
                                                <td> {{$salaf->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


<!--_______________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->


                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi SMP 2 KELAS 7</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaransmp27() as $smp27)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp27->namalengkap27}} </td>
                                                <td> {{$smp27->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi SMP 2 KELAS 8</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaransmp28() as $smp28)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp28->namalengkap28}} </td>
                                                <td> {{$smp28->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi SMP 2 KELAS 9</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaransmp29() as $smp29)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp29->namalengkap29}} </td>
                                                <td> {{$smp29->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

<!--_____________________________________________________________________________________________________________--->

<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi MA KELAS 10</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaranma10() as $ma10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$ma10->namalengkap61}} </td>
                                                <td> {{$ma10->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi MA KELAS 11</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaranma11() as $ma11)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$ma11->namalengkap62}} </td>
                                                <td> {{$ma11->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi MA KELAS 12</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaranma12() as $ma12)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$ma12->namalengkap63}} </td>
                                                <td> {{$ma12->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

<!--_____________________________________________________________________________________________________________--->

<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi SMK TKR KELAS 10</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaransmktkr10() as $smktkr10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkr10->namalengkap51}} </td>
                                                <td> {{$smktkr10->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi SMK TKR KELAS 11</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaransmktkr11() as $smktkr11)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkr11->namalengkap52}} </td>
                                                <td> {{$smktkr11->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi SMK TKR KELAS 12</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaransmktkr12() as $smktkr12)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkr12->namalengkap53}} </td>
                                                <td> {{$smktkr12->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->

<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi Mahad Aly Semester 5 - 6</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaranmahadaly3() as $mahadaly3)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly3->namalengkap73}} </td>
                                                <td> {{$mahadaly3->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Pelanggaran Tertinggi Mahad Aly Semester 7 - 8</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(skorPelanggaranmahadaly4() as $mahadaly4)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly4->namalengkap74}} </td>
                                                <td> {{$mahadaly4->rataRataSkor}} </td>
                                            </tr>
                                        @php
                                            $ranking++;
                                        @endphp 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>                        

                    </div>





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