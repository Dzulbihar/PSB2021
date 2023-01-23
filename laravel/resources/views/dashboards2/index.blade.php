@extends('layouts.master')

@section('content')


    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">

<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->



                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi SMP 1 KELAS 7</b></h3>
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
                                        @foreach(notesmp17() as $smp17)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp17->namalengkap17}} </td>
                                                <td> {{$smp17->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi SMP 1 KELAS 8</b></h3>
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
                                        @foreach(notesmp18() as $smp18)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp18->namalengkap18}} </td>
                                                <td> {{$smp18->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi SMP 1 KELAS 9</b></h3>
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
                                        @foreach(notesmp19() as $smp19)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp19->namalengkap19}} </td>
                                                <td> {{$smp19->rataRataNote}} </td>
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

<!--_____________________________________________________________________________________________________________--->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi MTS KELAS 7</b></h3>
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
                                        @foreach(notemts7() as $mts7)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mts7->namalengkap37}} </td>
                                                <td> {{$mts7->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi MTS KELAS 8</b></h3>
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
                                        @foreach(notemts8() as $mts8)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mts8->namalengkap38}} </td>
                                                <td> {{$mts8->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi MTS KELAS 9</b></h3>
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
                                        @foreach(notemts9() as $mts9)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mts9->namalengkap39}} </td>
                                                <td> {{$mts9->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi SMK TKJ KELAS 10</b></h3>
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
                                        @foreach(notesmktkj10() as $smktkj10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkj10->namalengkap41}} </td>
                                                <td> {{$smktkj10->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi SMK TKJ KELAS 11</b></h3>
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
                                        @foreach(notesmktkj11() as $smktkj11)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkj11->namalengkap42}} </td>
                                                <td> {{$smktkj11->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi SMK TKJ KELAS 12</b></h3>
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
                                        @foreach(notesmktkj12() as $smktkj12)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkj12->namalengkap43}} </td>
                                                <td> {{$smktkj12->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi Mahad Aly Semester 1 - 2</b></h3>
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
                                        @foreach(notemahadaly1() as $mahadaly1)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly1->namalengkap71}} </td>
                                                <td> {{$mahadaly1->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi Mahad Aly Semester 3 - 4</b></h3>
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
                                        @foreach(notemahadaly2() as $mahadaly2)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly2->namalengkap72}} </td>
                                                <td> {{$mahadaly2->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi Salaf Roudlotul Muttaqin</b></h3>
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
                                        @foreach(notesalaf() as $salaf)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$salaf->namalengkap0}} </td>
                                                <td> {{$salaf->rataRataNote}} </td>
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
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi SMP 2 KELAS 7</b></h3>
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
                                        @foreach(notesmp27() as $smp27)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp27->namalengkap27}} </td>
                                                <td> {{$smp27->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi SMP 2 KELAS 8</b></h3>
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
                                        @foreach(notesmp28() as $smp28)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp28->namalengkap28}} </td>
                                                <td> {{$smp28->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi SMP 2 KELAS 9</b></h3>
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
                                        @foreach(notesmp29() as $smp29)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp29->namalengkap29}} </td>
                                                <td> {{$smp29->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi MA KELAS 10</b></h3>
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
                                        @foreach(notema10() as $ma10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$ma10->namalengkap61}} </td>
                                                <td> {{$ma10->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi MA KELAS 11</b></h3>
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
                                        @foreach(notema11() as $ma11)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$ma11->namalengkap62}} </td>
                                                <td> {{$ma11->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi MA KELAS 12</b></h3>
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
                                        @foreach(notema12() as $ma12)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$ma12->namalengkap63}} </td>
                                                <td> {{$ma12->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi SMK TKR KELAS 10</b></h3>
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
                                        @foreach(notesmktkr10() as $smktkr10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkr10->namalengkap51}} </td>
                                                <td> {{$smktkr10->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi SMK TKR KELAS 11</b></h3>
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
                                        @foreach(notesmktkr11() as $smktkr11)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkr11->namalengkap52}} </td>
                                                <td> {{$smktkr11->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi SMK TKR KELAS 12</b></h3>
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
                                        @foreach(notesmktkr12() as $smktkr12)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkr12->namalengkap53}} </td>
                                                <td> {{$smktkr12->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi Mahad Aly Semester 5 - 6</b></h3>
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
                                        @foreach(notemahadaly3() as $mahadaly3)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly3->namalengkap73}} </td>
                                                <td> {{$mahadaly3->rataRataNote}} </td>
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
                                <h3 class="panel-title"><b>Data Prestasi Tertinggi Mahad Aly Semester 7 - 8</b></h3>
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
                                        @foreach(notemahadaly4() as $mahadaly4)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mahadaly4->namalengkap74}} </td>
                                                <td> {{$mahadaly4->rataRataNote}} </td>
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





</div>
</div>
</div>
</div>



@stop