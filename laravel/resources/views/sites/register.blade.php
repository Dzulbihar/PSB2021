@extends('layouts.frontend')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif

<section class="banner-area relative about-banner" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Pendaftaran				
				</h1>	
				<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/about')}}"> Pendaftaran</a></p>
			</div>	
		</div>
	</div>
</section>


<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

<section class="search-course-area relative" style="background: unset;">
	<div class="container">
		<div class="row justify-content-between align-items-center">

<!--      
			<div class="col-lg-3 col-md-6 search-course-left">
	
			<p><img src="{{url('admin/aska.jpg')}}" alt=""  width="300" ></p>
			<p><img src="{{url('admin/ayo.jpg')}}" alt=""  width="300" ></p>
			<p><img src="{{url('admin/kampus1.jpg')}}" alt=""  width="300" ></p>		
			<p><img src="{{url('admin/kampus2.jpg')}}" alt=""  width="300" ></p>
			<p><img src="{{url('admin/kampus3.jpg')}}" alt=""  width="300" ></p>
			<p><img src="{{url('admin/askafm.jpg')}}" alt=""  width="300" ></p> 
			<p><img src="{{url('admin/nu.png')}}" alt=""  width="300" ></p>   

        </div>
      -->
      <div class="col-lg-12 col-md-6 search-course-right section-gap">

        <form action="{{ url('/postregister') }}" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- Keterangan --> 
          <!-- <label for="name"><b> NAMA LABEL </b></b> </label>t -->
          <!-- type = format --> 
          <!-- class = bentuk form -->
          <!-- id = tempat penyimpanan -->
          <!-- placeholder = nama tidak terlihat -->
          <!-- value = nama otomatis muncul -->
          <!-- required = wajib di isi -->
          <!-- <div class="valid-feedback"> = tulisan kecil di bawah -->
            <h1>
              Pendaftaran Online<br>
              Santri Baru Pondok Pesantren Askhabul Kahfi Semarang
            </h1>
            <p>
              Terus istiqomah dalam mencetak generasi pemimpin masa depan yang Berkualitas, Bertaqwa, Berakhlaq Mulia, Bermanfaat dan Barokah.
            </p>

            <!-- Tanggal Masuk                        
            <div class="form-group row">
              <div class="col-md-4">
                <label> Tanggal Masuk </label>
                <input id="tanggal_masuk" type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}" placeholder="Nama Lengkap" required autocomplete="tanggal_masuk" autofocus>
                @error('tanggal_masuk')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            --> 

            <!-- Fasilitas -->
            <div class="form-group row">
              <div class="col-md-6">
                <label> Fasilitas </label>
                <select id="inputState" class="form-control" id="fasilitas" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" value="{{ old('fasilitas') }}" required autocomplete="fasilitas" autofocus>
                  <option selected>-- Pilih Fasilitas --</option>
                  <option> Reguler </option>
                  <option> Non Reguler </option>
                </select>
                @error('fasilitas')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>  

            <!-- Bulan Pendaftaran 
              <div class="col-md-4">
                <label> Bulan Pendaftaran </label>
                <select id="inputState" class="form-control" id="bulan" class="form-control @error('bulan') is-invalid @enderror" name="bulan" value="{{ old('bulan') }}" required autocomplete="bulan" autofocus>
                  <option selected>-- Pilih Bulan --</option>
                  <option> Januari </option>
                  <option> Februari </option>
                  <option> Maret </option>
                  <option> April </option>
                  <option> Mei </option>
                  <option> Juni </option>
                  <option> Juli </option>
                  <option> Agustus </option>
                  <option> September </option>
                  <option> Oktober </option>
                  <option> November </option>
                  <option> Desember </option>
                </select>
                @error('bulan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
              -->

            <!-- Bulan Pendaftaran -->                        
              <div class="col-md-6">
                <label> Bulan Pendaftaran </label>
                <input readonly id="bulan" type="text" class="form-control @error('bulan') is-invalid @enderror" name="bulan" value="Maret"  required autocomplete="bulan" autofocus>
              </div>
            </div>

            <!-- Status -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <label> <b> Jenjang </b> </label>
                <select id="inputState" class="form-control" id="status" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>
                  <option selected>-- Pilih Jenjang --</option>
                  <option> SMP 1 </option>
                  <option> SMP 2 </option>
                  <option> MTs </option>
                  <option> SMK TKJ </option>
                  <option> SMK TKR </option>
                  <option> MA </option>
                  <option> Mahad Aly </option>
                </select>
                @error('status')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
            </div>

            <!-- Nama Lengkap -->                        
            <div class="form-group row">
              <div class="col-md-12">
                <label> <b> Nama Lengkap </b> </label>
                <input id="namalengkap" type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" value="{{ old('namalengkap') }}" placeholder="Nama Lengkap" required autocomplete="namalengkap" autofocus>
                @error('namalengkap')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
<!--
            <div class="form-group row">
NIK 
              <div class="col-md-6">
                <label> <b> NIK </b> </label>
                <input id="nik" type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" placeholder="NIK" required autocomplete="nik" autofocus>
                @error('nik')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
No KK 
              <div class="col-md-6">
                <label> <b> No KK </b> </label>
                <input id="nokk" type="number" class="form-control @error('nokk') is-invalid @enderror" name="nokk" value="{{ old('nokk') }}" placeholder="No KK" required autocomplete="nokk" autofocus>
                @error('nokk')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>  
            </div>
 --> 
            <!-- Tempat Lahir -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <label> <b> Tempat Lahir </b> </label>
                <input id="tempatlahir" type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir" autofocus>
                @error('tempatlahir')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Tanggal, Bulan, Tahun Lahir -->
              <div class="col-md-4">
                <label> <b> Tanggal Lahir </b> </label>
                <input id="tbt" type="date" class="form-control @error('tbt') is-invalid @enderror" name="tbt" value="{{ old('tbt') }}" placeholder="Tanggal, Bulan, Tahun Lahir" required autocomplete="tbt" autofocus>
                @error('tbt')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Jenis Kelamin -->
              <div class="col-md-4">
                <label> <b> Jenis Kelamin </b> </label>
                <select id="inputState" class="form-control" id="jenkel" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" value="{{ old('jenkel') }}" required autocomplete="jenkel" autofocus>
                  <option selected>-- Jenis Kelamin --</option>
                  <option> Laki-laki </option>
                  <option> Perempuan </option>
                </select>
                @error('jenkel')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror                              
              </div>
            </div>
            <!-- Desa -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <label> <b> Alamat rt/rw </b> </label>
                <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{ old('desa') }}" placeholder="Alamat rt/rw" required autocomplete="desa" autofocus>
                @error('desa')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kecamatan -->
              <div class="col-md-6">
                <label> <b> Kecamatan </b> </label>
                <input id="kec" type="text" class="form-control @error('kec') is-invalid @enderror" name="kec" value="{{ old('kec') }}" placeholder="Kecamatan" required autocomplete="kec" autofocus>
                @error('kec')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- Kabupaten / Kota -->                        
            <div class="form-group row">
              <div class="col-md-6">
                <label> <b> Kota </b> </label>
                <input id="kab" type="text" class="form-control @error('kab') is-invalid @enderror" name="kab" value="{{ old('kab') }}" placeholder="Kabupaten / Kota" required autocomplete="kab" autofocus>
                @error('kab')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Provinsi -->
              <div class="col-md-6">
                <label> <b> Provinsi </b> </label>
                <input id="prov" type="text" class="form-control @error('prov') is-invalid @enderror" name="prov" value="{{ old('prov') }}" placeholder="Provinsi" required autocomplete="prov" autofocus>
                @error('prov')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Kode Pos 
              <div class="col-md-4">
                <label> <b> Kode Pos </b> </label>
                <input id="kodepos" type="text" class="form-control @error('kodepos') is-invalid @enderror" name="kodepos" value="{{ old('kodepos') }}" placeholder="Kode Pos" required autocomplete="kodepos" autofocus>
                @error('kodepos')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              -->                           
            </div>
            <!-- Alamat Lengkap                        
            <div class="form-group row">
              <div class="col-md-6">
                <input id="cita" type="text" class="form-control @error('cita') is-invalid @enderror" name="cita" value="{{ old('cita') }}" placeholder="Alamat Lengkap" required autocomplete="cita" autofocus>
                @error('cita')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            --> 
            <!-- Jumlah Saudara Kandung 
              <div class="col-md-6">
                <input id="jumlahsaudara" type="number" class="form-control @error('jumlahsaudara') is-invalid @enderror" name="jumlahsaudara" value="{{ old('jumlahsaudara') }}" placeholder="Jumlah Saudara Kandung" required autocomplete="jumlahsaudara" autofocus>
                @error('jumlahsaudara')
                <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>                            
            </div>
          -->
          <!-- Asal Sekolah -->                        
          <div class="form-group row">
            <div class="col-md-6">
              <label> <b> Asal Sekolah </b> </label>
              <input id="asalsekolah" type="text" class="form-control @error('asalsekolah') is-invalid @enderror" name="asalsekolah" value="{{ old('asalsekolah') }}" placeholder="Asal Sekolah" required autocomplete="asalsekolah" autofocus>
              @error('asalsekolah')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <!-- Alamat Asal Sekolah -->
            <div class="col-md-6">
              <label> <b> Alamat Asal Sekolah </b> </label>
              <input id="alamatasalsekolah" type="text" class="form-control @error('alamatasalsekolah') is-invalid @enderror" name="alamatasalsekolah" value="{{ old('alamatasalsekolah') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah" autofocus>
              @error('alamatasalsekolah')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>                            
          </div>
          <!-- Nama Ayah -->                        
          <div class="form-group row">
            <div class="col-md-12">
              <label> <b> Nama Ayah </b> </label>
              <input id="namaayah" type="text" class="form-control @error('namaayah') is-invalid @enderror" name="namaayah" value="{{ old('namaayah') }}" placeholder="Nama Ayah" required autocomplete="namaayah" autofocus>
              @error('namaayah')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <!-- NIK Ayah 
            <div class="col-md-6">
              <label> <b>  </b> </label>
              <input id="nikayah" type="number" class="form-control @error('nikayah') is-invalid @enderror" name="nikayah" value="{{ old('nikayah') }}" placeholder="NIK Ayah" required autocomplete="nikayah" autofocus>
              @error('nikayah')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>                            
          </div>
        -->
           <!-- Tahun Lahir Ayah                        
          <div class="form-group row">
            <div class="col-md-4">
              <input id="tahunlahirayah" type="number" class="form-control @error('tahunlahirayah') is-invalid @enderror" name="tahunlahirayah" value="{{ old('tahunlahirayah') }}" placeholder="Tahun Lahir Ayah" required autocomplete="tahunlahirayah" autofocus>
              @error('tahunlahirayah')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          --> 
          <!-- Pendidikan Ayah -->
          <div class="form-group row">
            <div class="col-md-6">
              <label> <b> Pendidikan Ayah </b> </label>
              <select id="inputState" class="form-control" id="pendidikanayah" class="form-control @error('pendidikanayah') is-invalid @enderror" name="pendidikanayah" value="{{ old('pendidikanayah') }}" required autocomplete="pendidikanayah" autofocus>
                <option selected>-- Pendidikan --</option>
                <option> TAMAT SD/MI </option>
                <option> TAMAT SMP/MTS </option>
                <option> TAMAT SMA/SMK/MA </option>
                <option> DIPLOMA </option>
                <option> SARJANA </option>
                <option> PASCA SARJANA </option>
                <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
              </select>
              @error('pendidikanayah')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror                              
            </div>
            <!-- Pekerjaan Ayah -->
            <div class="col-md-6">
              <label> <b> Pekerjaan Ayah </b> </label>
              <select id="inputState" class="form-control" id="pekerjaanayah" class="form-control @error('pekerjaanayah') is-invalid @enderror" name="pekerjaanayah" value="{{ old('pekerjaanayah') }}" required autocomplete="pekerjaanayah" autofocus>
                <option selected>-- Pekerjaan --</option>
                <option> SWASTA </option>
                <option> PNS </option>
                <option> PETANI </option>
                <option> WIRASWASTA </option>
                <option> PENSIUNAN </option>
                <option> BURUH </option>
                <option> TIDAK BEKERJA / DI RUMAH </option>
                <option> TNI </option>
                <option> POLRI </option>
                <option> GURU / DOSEN </option>
                <option> PEDAGANG </option>
                <option> Alm </option>
                <option> Lainnya </option>
              </select>
              @error('pekerjaanayah')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror                               
            </div>                           
          </div>
          <!-- Nama Ibu -->                        
          <div class="form-group row">
            <div class="col-md-12">
              <label> <b> Nama Ibu </b> </label>
              <input id="namaibu" type="text" class="form-control @error('namaibu') is-invalid @enderror" name="namaibu" value="{{ old('namaibu') }}" placeholder="Nama Ibu" required autocomplete="namaibu" autofocus>
              @error('namaibu')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <!-- NIK Ibu 
          <div class="col-md-6">
            <input id="nikibu" type="number" class="form-control @error('nikibu') is-invalid @enderror" name="nikibu" value="{{ old('nikibu') }}" placeholder="NIK Ibu" required autocomplete="nikibu" autofocus>
            @error('nikibu')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>                            
         </div>
       -->
        <!-- Tahun Lahir Ibu                      
          <div class="form-group row">
             <div class="col-md-4">
             <input id="tahunlahiribu" type="number" class="form-control @error('tahunlahiribu') is-invalid @enderror" name="tahunlahiribu" value="{{ old('tahunlahiribu') }}" placeholder="Tahun Lahir Ibu" required autocomplete="tahunlahiribu" autofocus>
              @error('tahunlahiribu')
               <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
          -->  
          <!-- Pendidikan Ibu -->
          <div class="form-group row">
            <div class="col-md-6">
              <label> <b> Pendidikan Ibu </b> </label>
              <select id="inputState" class="form-control" id="pendidikanibu" class="form-control @error('pendidikanibu') is-invalid @enderror" name="pendidikanibu" value="{{ old('pendidikanibu') }}" required autocomplete="pendidikanibu" autofocus>
                <option selected>-- Pendidikan --</option>
                <option> TAMAT SD/MI </option>
                <option> TAMAT SMP/MTS </option>
                <option> TAMAT SMA/SMK/MA </option>
                <option> DIPLOMA </option>
                <option> SARJANA </option>
                <option> PASCA SARJANA </option>
                <option> TIDAK TAMAT SD / TIDAK SEKOLAH </option>
              </select>
              @error('pendidikanibu')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror                              
            </div>
            <!-- Pekerjaan Ibu -->
            <div class="col-md-6">
              <label> <b> Pekerjaan Ibu </b> </label>
              <select id="inputState" class="form-control" id="pekerjaanibu" class="form-control @error('pekerjaanibu') is-invalid @enderror" name="pekerjaanibu" value="{{ old('pekerjaanibu') }}" required autocomplete="pekerjaanibu" autofocus>
                <option selected>-- Pekerjaan --</option>
                <option> SWASTA </option>
                <option> PNS </option>
                <option> PETANI </option>
                <option> WIRASWASTA </option>
                <option> PENSIUNAN </option>
                <option> BURUH </option>
                <option> TIDAK BEKERJA / DI RUMAH </option>
                <option> TNI </option>
                <option> POLRI </option>
                <option> GURU / DOSEN </option>
                <option> PEDAGANG </option>
                <option> Alm </option>
                <option> Lainnya </option>
              </select>
              @error('pekerjaanibu')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>                           
          </div>
          <!-- Penghasilan                         
          <div class="form-group row">
            <div class="col-md-6">
            <select id="inputState" class="form-control" id="penghasilan" class="form-control @error('penghasilan') is-invalid @enderror" name="penghasilan" value="{{ old('penghasilan') }}" required autocomplete="penghasilan" autofocus>
            <option selected>-- Penghasilan --</option>
            <option> < Rp. 1.000.000,-/BULAN </option>
            <option> Rp. 1.000.000 - > 2.000.000,-/BULAN </option>
            <option> Rp. 2.000.000 - > 3.000.000,-/BULAN </option>
            <option> Rp. 3.000.000 - > 5.000.000,-/BULAN </option>
            <option> Rp. 5.000.000 - > 10.000.000,-/BULAN </option>
            <option> > Rp. 10.000.000,-/BULAN </option>
            </select>
            @error('penghasilan')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror                              
          </div>
        -->
          <!-- Prestasi yang pernah di raih 
          <div class="col-md-6">
            <input id="prestasi" type="text" class="form-control @error('prestasi') is-invalid @enderror" name="prestasi" value="{{ old('prestasi') }}" placeholder="Prestasi yang pernah di raih" required autocomplete="prestasi" autofocus>
            @error('prestasi')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>                                                    
          </div>
        -->
        <!-- No HP -->                        
        <div class="form-group row">
          <div class="col-md-12">
            <label> <b> No HP </b> </label>
            <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" placeholder="No HP" required autocomplete="nohp" autofocus>
            @error('nohp')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

<!-- __________________________________________________________________________________ 

                <div class="form-group row">
                  <div class="col-md-12">
                    <label> <b> <b> . . . . . . . . Token, Jangan Di Ubah</b> </b> </label>
                    <input id="pendaftaran" type="password"  class="form-control @error('pendaftaran') is-invalid @enderror" name="pendaftaran" value="2000000" placeholder="No HP" required autocomplete="pendaftaran" autofocus>
                    @error('pendaftaran')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
              -->

              <!-- Email -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label> <b> Email untuk login pendaftar  </b> (email tidak harus aktif) </label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Email" >
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label> <b>  Password = aska </b> (tidak bisa di ubah) </label>
                  <input readonly id="password" type="test" class="form-control" name="password" value="aska" required autocomplete="password" autofocus>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!-- Jalur --> 
              <div class="form-group row">
                <div class="col-md-6">
                  <input readonly id="jalur" type="password" class="form-control" name="jalur" value="Online" required autocomplete="jalur" autofocus>
                  @error('jalur')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
<!-- TES --> 
                <div class="col-md-6">
                  <input readonly id="tes" type="password" class="form-control" name="tes" value="BELUM TES" required autocomplete="tes" autofocus>
                  @error('tes')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <a href="#" class="genric-btn disable circle"> Password = aska  </a>

              <a href="#" class="genric-btn disable circle">Kemudian Anda akan dihadapkan Tampilan Login sebagai pendaftar, Login dengan email yang baru saja anda isi dan dengan <b>Password = aska</b> . untuk informasi Registrasi dan Pengumpulan Persyaratan, atau untuk informasi selengkapnya bisa hubungi nomor 0856-0150-5818 </a>

              <br><br><br>
              <!-- __________________________________________________________________________________ -->


              <!-- Tombol -->
              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-2">
                  <button type="submit" class="btn btn-primary">
                    Simpan
                  </button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>

            </form>  



          </div>
        </div>
      </div>	
    </section>


            </div>
        </div>
      </div>
    </div>
  </div>

    @stop