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
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->
<!--_____________________________________________________________________________________________________________--->

                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Daftar Santri yang belum dapat seragam SMP 1 KELAS 7</b></h3>
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
                                        @foreach(keterangansmp17() as $smp17)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp17->namalengkap17}} </td>
                                                <td> {{$smp17->rataRataKeterangan}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum dapat seragam MTS KELAS 7</b></h3>
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
                                        @foreach(keteranganmts7() as $mts7)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$mts7->namalengkap37}} </td>
                                                <td> {{$mts7->rataRataKeterangan}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum dapat seragam SMK TKJ KELAS 10</b></h3>
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
                                        @foreach(keterangansmktkj10() as $smktkj10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkj10->namalengkap41}} </td>
                                                <td> {{$smktkj10->rataRataKeterangan}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum dapat seragam SMP 2 KELAS 7</b></h3>
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
                                        @foreach(keterangansmp27() as $smp27)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smp27->namalengkap27}} </td>
                                                <td> {{$smp27->rataRataKeterangan}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum dapat seragam MA KELAS 10</b></h3>
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
                                        @foreach(keteranganma10() as $ma10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$ma10->namalengkap61}} </td>
                                                <td> {{$ma10->rataRataKeterangan}} </td>
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
                                <h3 class="panel-title"><b>Daftar Santri yang belum dapat seragam SMK TKR KELAS 10</b></h3>
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
                                        @foreach(keterangansmktkr10() as $smktkr10)
                                            <tr>
                                                <td> {{$ranking}} </td>
                                                <td> {{$smktkr10->namalengkap51}} </td>
                                                <td> {{$smktkr10->rataRataKeterangan}} </td>
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