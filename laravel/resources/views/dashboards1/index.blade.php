@extends('layouts.master')

@section('content')


    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
<!--_______________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________--->




                    <div class="col-md-6">
<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Ranking 10 Besar SMP 1 KELAS 7</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarsmp17() as $mp17)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mp17->namalengkap17}} </td>
                                                <td> {{$mp17->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar SMP 1 KELAS 8</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarsmp18() as $smp18)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp18->namalengkap18}} </td>
                                                <td> {{$smp18->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar SMP 1 KELAS 9</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarsmp19() as $smp19)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp19->namalengkap19}} </td>
                                                <td> {{$smp19->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar MTS KELAS 7</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarmts7() as $mts7)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mts7->namalengkap37}} </td>
                                                <td> {{$mts7->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar MTS KELAS 8</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarmts8() as $mts8)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mts8->namalengkap38}} </td>
                                                <td> {{$mts8->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar MTS KELAS 9</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarmts9() as $mts9)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mts9->namalengkap39}} </td>
                                                <td> {{$mts9->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar SMK TKJ KELAS 10</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarsmktkj10() as $smktkj10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkj10->namalengkap41}} </td>
                                                <td> {{$smktkj10->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar SMK TKJ KELAS 11</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarsmktkj11() as $smktkj11)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkj11->namalengkap42}} </td>
                                                <td> {{$smktkj11->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar SMK TKJ KELAS 12</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarsmktkj12() as $smktkj12)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkj12->namalengkap43}} </td>
                                                <td> {{$smktkj12->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar Mahad Aly Semester 1 - 2</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarmahadaly1() as $mahadaly1)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly1->namalengkap71}} </td>
                                                <td> {{$mahadaly1->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar Mahad Aly Semester 3 - 4</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarmahadaly2() as $mahadaly2)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly2->namalengkap72}} </td>
                                                <td> {{$mahadaly2->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar Salaf Roudlotul Muttaqin</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarsalaf() as $salaf)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$salaf->namalengkap0}} </td>
                                                <td> {{$salaf->rataRataNilai}} </td>
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
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->



                    <div class="col-md-6">
<!--_____________________________________________________________________________________________________________--->

<div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Ranking 10 Besar SMP 2 KELAS 7</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarsmp27() as $smp27)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp27->namalengkap27}} </td>
                                                <td> {{$smp27->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar SMP 2 KELAS 8</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarsmp28() as $smp28)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp28->namalengkap28}} </td>
                                                <td> {{$smp28->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar SMP 2 KELAS 9</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarsmp29() as $smp29)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp29->namalengkap29}} </td>
                                                <td> {{$smp29->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar MA KELAS 10</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarma10() as $ma10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$ma10->namalengkap61}} </td>
                                                <td> {{$ma10->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar MA KELAS 11</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarma11() as $ma11)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$ma11->namalengkap62}} </td>
                                                <td> {{$ma11->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar MA KELAS 12</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarma12() as $ma12)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$ma12->namalengkap63}} </td>
                                                <td> {{$ma12->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar SMK TKR KELAS 10</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarsmktkr10() as $smktkr10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkr10->namalengkap51}} </td>
                                                <td> {{$smktkr10->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar SMK TKR KELAS 11</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarsmktkr11() as $smktkr11)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkr11->namalengkap52}} </td>
                                                <td> {{$smktkr11->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar SMK TKR KELAS 12</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarsmktkr12() as $smktkr12)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkr12->namalengkap53}} </td>
                                                <td> {{$smktkr12->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar Mahad Aly Semester 5 - 6</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarmahadaly3() as $mahadaly3)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly3->namalengkap73}} </td>
                                                <td> {{$mahadaly3->rataRataNilai}} </td>
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
                                <h3 class="panel-title"><b>Ranking 10 Besar Mahad Aly Semester 7 - 8</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach(ranking5Besarmahadaly4() as $mahadaly4)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly4->namalengkap74}} </td>
                                                <td> {{$mahadaly4->rataRataNilai}} </td>
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
                    </div>


<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->

                    
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->





</div>
</div>
</div>
</div>



@stop