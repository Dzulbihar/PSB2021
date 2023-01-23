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
                          <div class="col-md-8">
                            <span class="title"> <h1> <b> Selamat Datang Calon Pemimpin Masa Depan di laman web Pondok Pesantren Askhabul Kahfi Semarang </b> </h1> </span>
                          </div>

                          <div class="col-md-4">
                            <img src="{{ url('images/aska.png')}}" width="50%">
                          </div>

                          <br><br>

                          <div class="col-md-12">
                            <hr><hr>
                          </div>

                          <div class="col-md-12">
                            <span class="title"> <h4> <b> Bagi Pendaftar Online Silahkan klik tombol dibawah ini untuk Registrasi Biaya Awal Masuk dan Melengkapi persyaratan </b> </h4> </span>
                          </div>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <!-- ambil data di database-->
                        <tr>
                            <td>
                                
<a href="
                  @if(auth()->user()->role == 'siswa')
                  {{url('profilsayasiswa')}}
                  @elseif(auth()->user()->role == 'salaf')
                  {{url('profilsayasalaf')}} 
                  @elseif(auth()->user()->role == 'smp1')
                  {{url('profilsayasmp1')}}
                  @elseif(auth()->user()->role == 'smp17')
                  {{url('profilsayasmp17')}}
                  @elseif(auth()->user()->role == 'smp18')
                  {{url('profilsayasmp18')}}
                  @elseif(auth()->user()->role == 'smp19')
                  {{url('profilsayasmp19')}}
                  @elseif(auth()->user()->role == 'smp2')
                  {{url('profilsayasmp2')}}
                  @elseif(auth()->user()->role == 'smp27')
                  {{url('profilsayasmp27')}}
                  @elseif(auth()->user()->role == 'smp28')
                  {{url('profilsayasmp28')}}
                  @elseif(auth()->user()->role == 'smp29')
                  {{url('profilsayasmp29')}}
                  @elseif(auth()->user()->role == 'mts')
                  {{url('profilsayamts')}}
                  @elseif(auth()->user()->role == 'mts7')
                  {{url('profilsayamts7')}}
                  @elseif(auth()->user()->role == 'mts8')
                  {{url('profilsayamts8')}}
                  @elseif(auth()->user()->role == 'mts9')
                  {{url('profilsayamts9')}}
                  @elseif(auth()->user()->role == 'smktkj')
                  {{url('profilsayasmktkj')}}
                  @elseif(auth()->user()->role == 'smktkj10')
                  {{url('profilsayasmktkj10')}}
                  @elseif(auth()->user()->role == 'smktkj11')
                  {{url('profilsayasmktkj11')}}
                  @elseif(auth()->user()->role == 'smktkj12')
                  {{url('profilsayasmktkj12')}}
                  @elseif(auth()->user()->role == 'smktkr')
                  {{url('profilsayasmktkr')}}
                  @elseif(auth()->user()->role == 'smktkr10')
                  {{url('profilsayasmktkr10')}}
                  @elseif(auth()->user()->role == 'smktkr11')
                  {{url('profilsayasmktkr11')}}
                  @elseif(auth()->user()->role == 'smktkr12')
                  {{url('profilsayasmktkr12')}}
                  @elseif(auth()->user()->role == 'ma')
                  {{url('profilsayama')}}
                  @elseif(auth()->user()->role == 'ma10')
                  {{url('profilsayama10')}}
                  @elseif(auth()->user()->role == 'ma11')
                  {{url('profilsayama11')}}
                  @elseif(auth()->user()->role == 'ma12')
                  {{url('profilsayama12')}}
                  @elseif(auth()->user()->role == 'mahadaly')
                  {{url('profilsayamahadaly')}}
                  @elseif(auth()->user()->role == 'mahadaly1')
                  {{url('profilsayamahadaly1')}}
                  @elseif(auth()->user()->role == 'mahadaly2')
                  {{url('profilsayamahadaly2')}}
                  @elseif(auth()->user()->role == 'mahadaly3')
                  {{url('profilsayamahadaly3')}}
                  @elseif(auth()->user()->role == 'mahadaly4')
                  {{url('profilsayamahadaly4')}}
                  @else
                  {{url('profilsayaadmin')}}
                  @endif " 
                  class="btn btn-primary"> Profile (khusus) Pendaftar Online 
                </a>

                            </td>                            
                        </tr>
                    </tbody>
                </table>
<!--_______________________________________________
                <table class="table table-hover" id="datatable">
                    <thead>
                        <tr>
                         <div class="col-md-12">
                            <hr><hr>
                          </div>
                          <div class="col-md-8">
                            <span class="title"> <h1> <b> Dashboard (khusus Admin) </b> </h1> </span>
                          </div>
                          <div class="col-md-12">
                            <span class="title"> <h4> <b> Silahkan klik tombol dibawah ini untuk Admin </b> </h4> </span>
                          </div>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td> <a href="{{ url('dashboard') }}" class="btn btn-sm btn-success"> Dashboard (khusus) Admin </a>  </td>
                        </tr>
                    </tbody>
                </table>
_____________________________________________________--->
            </div>
        </div>
    </div>
<!--____________________________________________________________________________________________________--->
<!--____________________________________________________________________________________________________---> 


</div>
</div>
</div>
</div>



@stop