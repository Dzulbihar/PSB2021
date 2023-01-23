   
    <nav class="navbar navbar-default navbar-fixed-top" >

      <div class="navbar-btn">
        <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        <!--<a href="#"><img src="{{asset('admin/aska.jpg')}}" width="30" ></a>--> 
        <a href="{{url('/dashboard')}}"><img src="{{asset('admin/font.png')}}" width="300"> </a>
      </div>

      <div class="brand">
        <a href="{{url('/dashboard')}}"><img src="{{asset('admin/aska.jpg')}}" width="30" ></a>
      </div>

      <div class="container-fluid">

<!--
        <form class="navbar-form navbar-left">
          <div class="input-group">
            <input type="text" value="" class="form-control" placeholder="Search dashboard...">
            <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
          </div>
        </form>
-->       

        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="
                @if(auth()->user()->role == 'siswa')
                {{auth()->user()->siswa->getAvatar()}} 
                @elseif(auth()->user()->role == 'salaf')
                {{auth()->user()->salaf->getAvatar()}}
                @elseif(auth()->user()->role == 'smp1')
                {{auth()->user()->smp1->getAvatar()}} 
                @elseif(auth()->user()->role == 'smp17')
                {{auth()->user()->smp17->getAvatar()}} 
                @elseif(auth()->user()->role == 'smp18')
                {{auth()->user()->smp18->getAvatar()}} 
                @elseif(auth()->user()->role == 'smp19')
                {{auth()->user()->smp19->getAvatar()}} 
                @elseif(auth()->user()->role == 'smp2')
                {{auth()->user()->smp2->getAvatar()}} 
                @elseif(auth()->user()->role == 'smp27')
                {{auth()->user()->smp27->getAvatar()}} 
                @elseif(auth()->user()->role == 'smp28')
                {{auth()->user()->smp28->getAvatar()}} 
                @elseif(auth()->user()->role == 'smp29')
                {{auth()->user()->smp29->getAvatar()}} 
                @elseif(auth()->user()->role == 'mts')
                {{auth()->user()->mts->getAvatar()}} 
                @elseif(auth()->user()->role == 'mts7')
                {{auth()->user()->mts7->getAvatar()}} 
                @elseif(auth()->user()->role == 'mts8')
                {{auth()->user()->mts8->getAvatar()}} 
                @elseif(auth()->user()->role == 'mts9')
                {{auth()->user()->mts9->getAvatar()}} 
                @elseif(auth()->user()->role == 'smktkj')
                {{auth()->user()->smktkj->getAvatar()}} 
                @elseif(auth()->user()->role == 'smktkj10')
                {{auth()->user()->smktkj10->getAvatar()}} 
                @elseif(auth()->user()->role == 'smktkj11')
                {{auth()->user()->smktkj11->getAvatar()}} 
                @elseif(auth()->user()->role == 'smktkj12')
                {{auth()->user()->smktkj12->getAvatar()}} 
                @elseif(auth()->user()->role == 'smktkr')
                {{auth()->user()->smktkr->getAvatar()}} 
                @elseif(auth()->user()->role == 'smktkr10')
                {{auth()->user()->smktkr10->getAvatar()}} 
                @elseif(auth()->user()->role == 'smktkr11')
                {{auth()->user()->smktkr11->getAvatar()}} 
                @elseif(auth()->user()->role == 'smktkr12')
                {{auth()->user()->smktkr12->getAvatar()}} 
                @elseif(auth()->user()->role == 'ma')
                {{auth()->user()->ma->getAvatar()}} 
                @elseif(auth()->user()->role == 'ma10')
                {{auth()->user()->ma10->getAvatar()}} 
                @elseif(auth()->user()->role == 'ma11')
                {{auth()->user()->ma11->getAvatar()}} 
                @elseif(auth()->user()->role == 'ma12')
                {{auth()->user()->ma12->getAvatar()}} 
                @elseif(auth()->user()->role == 'mahadaly')
                {{auth()->user()->mahadaly->getAvatar()}} 
                @elseif(auth()->user()->role == 'mahadaly1')
                {{auth()->user()->mahadaly1->getAvatar()}} 
                @elseif(auth()->user()->role == 'mahadaly2')
                {{auth()->user()->mahadaly2->getAvatar()}} 
                @elseif(auth()->user()->role == 'mahadaly3')
                {{auth()->user()->mahadaly3->getAvatar()}} 
                @elseif(auth()->user()->role == 'mahadaly4')
                {{auth()->user()->mahadaly4->getAvatar()}} 
                
                @else
                /images/default.jpg
                @endif
                "
                class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
            </li>

            <li class="dropdown">
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
                  <i class="lnr lnr-user"></i> Profile Pendaftar Online
                </a>
            </li>

            <li class="dropdown">
                <a href="{{url('logout')}}"><i class="lnr lnr-exit"></i> <span>Logout</span></a>
            </li>

            
            <!-- <li>
              <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>