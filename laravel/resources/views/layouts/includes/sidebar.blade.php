    <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">

            <br><br>

            <li>

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
                  @endif
                  ">
                  <i class="lnr lnr-user"></i> <span>Profile Pendaftar Online</span></a>

            </li>


            @if(auth()->user()->role == 'admin')

            <li><a href="{{url('/dashboard')}}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

            <li>
              <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>PENDAFTARAN</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="subPages" class="collapse ">
                <ul class="nav">
                    <li><a href="{{url('/smp1')}}" class=""><i class="lnr lnr-user"></i> <span>SMP 1</span></a></li>
                    <li><a href="{{url('/smp2')}}" class=""><i class="lnr lnr-user"></i> <span>SMP 2</span></a></li>
                    <li><a href="{{url('/mts')}}" class=""><i class="lnr lnr-user"></i> <span>MTS</span></a></li>
                    <li><a href="{{url('/smktkj')}}" class=""><i class="lnr lnr-user"></i> <span>SMK TKJ</span></a></li>
                    <li><a href="{{url('/smktkr')}}" class=""><i class="lnr lnr-user"></i> <span>SMK TKR</span></a></li>
                    <li><a href="{{url('santrikeluar')}}" class=""><i class="lnr lnr-user"></i> <span>SMA</span></a></li>
                    <li><a href="{{url('/ma')}}" class=""><i class="lnr lnr-user"></i> <span>MA</span></a></li>
                    <li><a href="{{url('/mahadaly')}}" class=""><i class="lnr lnr-user"></i> <span>MAHAD ALY</span></a></li>
                    <li><a href="{{url('siswa')}}" class=""><i class="lnr lnr-user"></i> <span>DAFTAR ONLINE</span></a></li>
                </ul>
              </div>
            </li>
            
            <li><a href="{{url('/dashboard1')}}" class="active"><i class="lnr lnr-home"></i> <span>Ranking 10 besar</span></a></li>
            <li><a href="{{url('/dashboard2')}}" class="active"><i class="lnr lnr-home"></i> <span>Prestasi 10 besar</span></a></li>
            <li><a href="{{url('/dashboard3')}}" class="active"><i class="lnr lnr-home"></i> <span>Pelanggaran 10 besar</span></a></li>
            <li><a href="{{url('/dashboard4')}}" class="active"><i class="lnr lnr-home"></i> <span>Perizinan</span></a></li>
            <li><a href="{{url('/dashboard5')}}" class="active"><i class="lnr lnr-home"></i> <span>Pengambilan Seragam</span></a></li>

            <li><a href="{{url('/posts')}}" class="active"><i class="lnr lnr-home"></i> <span>Post</span></a></li>



            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span> PENDATAAN SMP 1 </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                    <li><a href="{{url('/smp17')}}" class=""><i class="lnr lnr-user"></i> <span>SMP 1 KELAS 7</span></a></li>
                    <li><a href="{{url('/smp18')}}" class=""><i class="lnr lnr-user"></i> <span>SMP 1 KELAS 8</span></a></li>
                    <li><a href="{{url('/smp19')}}" class=""><i class="lnr lnr-user"></i> <span>SMP 1 KELAS 9</span></a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span> PENDATAAN SMP 2 </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                    <li><a href="{{url('/smp27')}}" class=""><i class="lnr lnr-user"></i> <span>SMP 2 KELAS 7</span></a></li>
                    <li><a href="{{url('/smp28')}}" class=""><i class="lnr lnr-user"></i> <span>SMP 2 KELAS 8</span></a></li>
                    <li><a href="{{url('/smp29')}}" class=""><i class="lnr lnr-user"></i> <span>SMP 2 KELAS 9</span></a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span> PENDATAAN MTS </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                    <li><a href="{{url('/mts7')}}" class=""><i class="lnr lnr-user"></i> <span>MTS KELAS 7</span></a></li>
                    <li><a href="{{url('/mts8')}}" class=""><i class="lnr lnr-user"></i> <span>MTS KELAS 8</span></a></li>
                    <li><a href="{{url('/mts9')}}" class=""><i class="lnr lnr-user"></i> <span>MTS KELAS 9</span></a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>PENDATAAN SMK TKJ</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                    <li><a href="{{url('/smktkj10')}}" class=""><i class="lnr lnr-user"></i> <span>SMK TKJ KELAS 10</span></a></li>
                    <li><a href="{{url('/smktkj11')}}" class=""><i class="lnr lnr-user"></i> <span>SMK TKJ KELAS 11</span></a></li>
                    <li><a href="{{url('/smktkj12')}}" class=""><i class="lnr lnr-user"></i> <span>SMK TKJ KELAS 12</span></a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>PENDATAAN SMK TKR</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                    <li><a href="{{url('/smktkr10')}}" class=""><i class="lnr lnr-user"></i> <span>SMK TKR KELAS 10</span></a></li>
                    <li><a href="{{url('/smktkr11')}}" class=""><i class="lnr lnr-user"></i> <span>SMK TKR KELAS 11</span></a></li>
                    <li><a href="{{url('/smktkr12')}}" class=""><i class="lnr lnr-user"></i> <span>SMK TKR KELAS 12</span></a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span> PENDATAAN MA </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                    <li><a href="{{url('/ma10')}}" class=""><i class="lnr lnr-user"></i> <span>MA KELAS 10</span></a></li>
                    <li><a href="{{url('/ma11')}}" class=""><i class="lnr lnr-user"></i> <span>MA KELAS 11</span></a></li>
                    <li><a href="{{url('/ma12')}}" class=""><i class="lnr lnr-user"></i> <span>MA KELAS 12</span></a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>PENDATAAN MAHAD ALY</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                    <li><a href="{{url('/mahadaly1')}}" class=""><i class="lnr lnr-user"></i> <span>MAHAD ALY SEMESTER 1-2</span></a></li>
                    <li><a href="{{url('/mahadaly2')}}" class=""><i class="lnr lnr-user"></i> <span>MAHAD ALY SEMESTER 3-4</span></a></li>
                    <li><a href="{{url('/mahadaly3')}}" class=""><i class="lnr lnr-user"></i> <span>MAHAD ALY SEMESTER 5-6</span></a></li>
                    <li><a href="{{url('/mahadaly4')}}" class=""><i class="lnr lnr-user"></i> <span>MAHAD ALY SEMESTER 7-8</span></a></li>
              </ul>
            </li>

            <li><a href="{{url('/salaf')}}" class=""> <span> PENDATAAN SALAF </span></a></li>
            <li><a href="{{url('/alumni')}}" class=""> <span> PENDATAAN ALUMNI </span></a></li>
            <li><a href="{{url('/santrikeluar')}}" class=""> <span> PENDATAAN SANTRI KELUAR </span></a></li>
            <li><a href="{{url('/emailusers')}}" class=""> <span> CARI EMAIL </span></a></li>

            @endif
          </ul>
        </nav>
      </div>
    </div>