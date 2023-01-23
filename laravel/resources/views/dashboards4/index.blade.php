@extends('layouts.master')

@section('content')


    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
<!--_______________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->


                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok SMP 1 KELAS 7</b></h3>
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
                                        @foreach(datangsmp17() as $smp17)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp17->namalengkap17}} </td>
                                                <td> {{$smp17->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok SMP 1 KELAS 8</b></h3>
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
                                        @foreach(datangsmp18() as $smp18)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp18->namalengkap18}} </td>
                                                <td> {{$smp18->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok SMP 1 KELAS 9</b></h3>
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
                                        @foreach(datangsmp19() as $smp19)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp19->namalengkap19}} </td>
                                                <td> {{$smp19->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok MTS KELAS 7</b></h3>
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
                                        @foreach(datangmts7() as $mts7)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mts7->namalengkap37}} </td>
                                                <td> {{$mts7->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok MTS KELAS 8</b></h3>
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
                                        @foreach(datangmts8() as $mts8)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mts8->namalengkap38}} </td>
                                                <td> {{$mts8->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok MTS KELAS 9</b></h3>
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
                                        @foreach(datangmts9() as $mts9)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mts9->namalengkap39}} </td>
                                                <td> {{$mts9->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok SMK TKJ KELAS 10</b></h3>
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
                                        @foreach(datangsmktkj10() as $smktkj10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkj10->namalengkap41}} </td>
                                                <td> {{$smktkj10->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok SMK TKJ KELAS 11</b></h3>
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
                                        @foreach(datangsmktkj11() as $smktkj11)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkj11->namalengkap42}} </td>
                                                <td> {{$smktkj11->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok SMK TKJ KELAS 12</b></h3>
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
                                        @foreach(datangsmktkj12() as $smktkj12)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkj12->namalengkap43}} </td>
                                                <td> {{$smktkj12->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok Mahad Aly Semester 1 - 2</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(datangmahadaly1() as $mahadaly1)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly1->namalengkap71}} </td>
                                                <td> {{$mahadaly1->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok Mahad Aly Semester 3 - 4</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(datangmahadaly2() as $mahadaly2)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly2->namalengkap72}} </td>
                                                <td> {{$mahadaly2->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok Salaf Roudlotul Muttaqin</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(datangsalaf() as $salaf)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$salaf->namalengkap0}} </td>
                                                <td> {{$salaf->rataRataDatang}} </td>
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
<!--_______________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->


                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok SMP 2 KELAS 7</b></h3>
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
                                        @foreach(datangsmp27() as $smp27)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp27->namalengkap27}} </td>
                                                <td> {{$smp27->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok SMP 2 KELAS 8</b></h3>
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
                                        @foreach(datangsmp28() as $smp28)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp28->namalengkap28}} </td>
                                                <td> {{$smp28->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok SMP 2 KELAS 9</b></h3>
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
                                        @foreach(datangsmp29() as $smp29)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp29->namalengkap29}} </td>
                                                <td> {{$smp29->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok MA KELAS 10</b></h3>
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
                                        @foreach(datangma10() as $ma10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$ma10->namalengkap61}} </td>
                                                <td> {{$ma10->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok MA KELAS 11</b></h3>
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
                                        @foreach(datangma11() as $ma11)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$ma11->namalengkap62}} </td>
                                                <td> {{$ma11->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok MA KELAS 12</b></h3>
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
                                        @foreach(datangma12() as $ma12)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$ma12->namalengkap63}} </td>
                                                <td> {{$ma12->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok SMK TKR KELAS 10</b></h3>
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
                                        @foreach(datangsmktkr10() as $smktkr10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkr10->namalengkap51}} </td>
                                                <td> {{$smktkr10->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok SMK TKR KELAS 11</b></h3>
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
                                        @foreach(datangsmktkr11() as $smktkr11)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkr11->namalengkap52}} </td>
                                                <td> {{$smktkr11->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok SMK TKR KELAS 12</b></h3>
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
                                        @foreach(datangsmktkr12() as $smktkr12)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkr12->namalengkap53}} </td>
                                                <td> {{$smktkr12->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok Mahad Aly Semester 5 - 6</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(datangmahadaly3() as $mahadaly3)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly3->namalengkap73}} </td>
                                                <td> {{$mahadaly3->rataRataDatang}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum kembali di Pondok Mahad Aly Semester 7 - 8</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(datangmahadaly4() as $mahadaly4)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly4->namalengkap74}} </td>
                                                <td> {{$mahadaly4->rataRataDatang}} </td>
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
