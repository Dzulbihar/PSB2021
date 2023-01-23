<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use App\Siswa;

use App\Registrasi_siswa;
use App\Registrasiseratus;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SiswaExport;
use App\Imports\SiswaImport;

use Carbon\Carbon;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_siswa = \App\Siswa::where('namalengkap','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_siswa = \App\Siswa::all();
        }
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel siswa
        $request->request->add(['user_id' => $user->id ]);
        $siswa = \App\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
//tambah foto        
        return redirect ('/siswa')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa/edit', ['siswa' => $siswa]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
//tambah foto      
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
//tambah foto
        return redirect ('/siswa')->with('sukses', 'Data berhasil di update');
    }


                public function edit_online($id)
                {
                    $siswa = \App\Siswa::find($id);
                    return view('siswa/edit-online', ['siswa' => $siswa]);
                }

                public function update_online(Request $request ,$id)
                {
                    //dd($request->all());

                    //insert ke tabel user
                    $user = new \App\User;
                    $user->role = 'siswa';
                    $user->name = $request->namalengkap;
                    $user->email = $request->email;
                    $user->password = bcrypt('aska');
            //        $user->remember_token = str_random(60);
                    $user->save();
                    
                    $siswa = \App\Siswa::find($id);
                    $siswa->update($request->all());
            //tambah foto      
                    if($request->hasFile('avatar')){
                        $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
                        $siswa->avatar = $request->file('avatar')->getClientOriginalName();
                        $siswa->save();
                    }
            //tambah foto
                    return redirect ('/profilsayasiswa')->with('sukses', 'Data berhasil di update');
                }


        public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $siswa = \App\Siswa::find($id);
//mapel
        $matapelajaran = \App\Mapel::all();
//hukuman
        $dosa = \App\Hukuman::all();
//izin
        $libur = \App\Izin::all();
//ambil
        $benda = \App\Ambil::all();
//prestasi
        $luarbiasa = \App\Prestasi::all();
//catatan
        $pribadi = \App\Catatan::all();

        //dd($mapel);

        //Menyiapkan Data untuk Chart
        $categories = [];
        $data = [];

        foreach ($matapelajaran as $mp) {
            if($siswa->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $siswa->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('siswa.profile',[ 'siswa' => $siswa, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsiswa)
    {
        //dd($request->all());
        $siswa = \App\Siswa::find($idsiswa);
        if($siswa->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('siswa/'.$idsiswa.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $siswa->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('siswa/'.$idsiswa.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsiswa)
    {
        //dd($request->all());
        $siswa = \App\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('siswa/'.$idsiswa.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsiswa)
    {
        //dd($request->all());
        $siswa = \App\Siswa::find($idsiswa);

        $siswa->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('siswa/'.$idsiswa.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsiswa)
    {
        //dd($request->all());
        $siswa = \App\Siswa::find($idsiswa);

        $siswa->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('siswa/'.$idsiswa.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsiswa)
    {
        //dd($request->all());
        $siswa = \App\Siswa::find($idsiswa);

        $siswa->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('siswa/'.$idsiswa.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsiswa)
    {
        //dd($request->all());
        $siswa = \App\Siswa::find($idsiswa);

        $siswa->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('siswa/'.$idsiswa.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsiswa,$idmapel)
    {
        $siswa = \App\Siswa::find($idsiswa);
        $siswa->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsiswa,$idhukuman)
    {
        $siswa = \App\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    }


    public function siswaimportexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSiswa', $namaFile);

        Excel::import(new SiswaImport, public_path('/DataSiswa/'.$namaFile));
        return redirect('/siswa');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function seratusribu($id)
    {
        $siswa = \App\Siswa::find($id);
        $data_siswa = \App\Siswa::where('namalengkap')->get();

        $siswa->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');

        return view('siswa.seratusribu', ['siswa' => $siswa, 'data_siswa' => $data_siswa]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printsiswa($id)
    {
        $siswa = \App\Siswa::find($id);
        $data_siswa = \App\Siswa::where('namalengkap')->get();

        $siswa->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');
        //$siswa->tbt1 = Carbon::now()->isoFormat('D MMMM Y');        

        return view('siswa.printsiswa', ['siswa' => $siswa, 'data_siswa' => $data_siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasiswa() 
    {
        $siswa = auth()->user()->siswa;
        return view('siswa.profilsaya', compact(['siswa']));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function registrasipendaftaran($id)
    {

        $siswa = \App\Siswa::find($id);
//registrasiseratus
        $uang = \App\Registrasiseratus::all();

        return view('siswa.registrasipendaftaran', ['siswa' => $siswa, 'uang' => $uang]);
    }

        public function addbiayaregistrasipendaftaran(Request $request ,$idsiswa)
    {
        //dd($request->all());
        $siswa = \App\Siswa::find($idsiswa);

//tambah foto      
        $request->file('upload')->move('images/', $request->file('upload')->getClientOriginalName());

        $siswa->Registrasiseratus()->attach
        ($request->registrasiseratus, 
            ['upload' => $request->file('upload')->getClientOriginalName(),
            'nama' => $request->nama,
            'jenjang' => $request->jenjang,
            'fasilitas' => $request->fasilitas, 
            'jenis_kelamin' => $request->jenis_kelamin,
            'waktu' => $request->waktu,
            'bayar' => $request->bayar]
        );

        return redirect('siswa/'.$idsiswa.'/registrasipendaftaran')->with('sukses', 'Data Registrasi Pendaftaran berhasil dimasukkan');
    }

        public function deleteregistrasipendaftaran($idsiswa,$idregistrasiseratus)
    {
        $siswa = \App\Siswa::find($idsiswa);
        $siswa->Registrasiseratus()->detach($idregistrasiseratus);
        return redirect()->back()->with('sukses', 'Data Registrasi Pendaftaran berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function biayaawalmasuk($id)
    {

        $siswa = \App\Siswa::find($id);
//registrasi
        $uang = \App\Registrasi::all();

        return view('siswa.biayaawalmasuk', ['siswa' => $siswa, 'uang' => $uang]);
    }

        public function addbiaya(Request $request ,$idsiswa)
    {
        //dd($request->all());
        $siswa = \App\Siswa::find($idsiswa);

//tambah foto      
        $request->file('upload')->move('images/', $request->file('upload')->getClientOriginalName());

        $siswa->registrasi()->attach
        ($request->registrasi, 
            ['upload' => $request->file('upload')->getClientOriginalName(),
            'jalur' => $request->jalur,
            'nama' => $request->nama,
            'jenjang' => $request->jenjang,
            'status' => $request->status,
            'fasilitas' => $request->fasilitas, 
            'jenis_kelamin' => $request->jenis_kelamin,
            'lunas' => $request->lunas,
            'waktu' => $request->waktu,
            'bayar' => $request->bayar, 
            'ukuran_batik' => $request->ukuran_batik, 
            'ukuran_olahraga' => $request->ukuran_olahraga, 
            'ukuran_jas' => $request->ukuran_jas]
        );

        return redirect('siswa/'.$idsiswa.'/biayaawalmasuk')->with('sukses', 'Data Biaya Awal Masuk berhasil dimasukkan');
    }

        public function deleteregistrasi($idsiswa,$idregistrasi)
    {
        $siswa = \App\Siswa::find($idsiswa);
        $siswa->registrasi()->detach($idregistrasi);
        return redirect()->back()->with('sukses', 'Data Biaya Awal Masuk berhasil dihapus');
    }

    public function printregistrasisiswa($id)
    {
        $siswa = \App\Siswa::find($id);
        $data_siswa = \App\Siswa::where('namalengkap')->get();

        return view('siswa.printregistrasisiswa', ['siswa' => $siswa, 'data_siswa' => $data_siswa]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function persyaratan($id)
    {

        $siswa = \App\Siswa::find($id);
//Persyaratan
        $awal = \App\Persyaratan::all();

        return view('siswa.persyaratan', ['siswa' => $siswa, 'awal' => $awal]);
    }

        public function addsyarat(Request $request ,$idsiswa)
    {
       // dd($request->all());
        $siswa = \App\Siswa::find($idsiswa);   

//tambah foto      
        $request->file('akte')->move('images/', $request->file('akte')->getClientOriginalName());
        $request->file('kk')->move('images/', $request->file('kk')->getClientOriginalName());
        $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());

        $siswa->persyaratan()->attach
        ($request->persyaratan, 
            ['akte' => $request->file('akte')->getClientOriginalName(), 
            'kk' => $request->file('kk')->getClientOriginalName(), 
            'foto' => $request->file('foto')->getClientOriginalName(),
            ]
        );
        return redirect('siswa/'.$idsiswa.'/persyaratan')->with('sukses', 'Data Persyaratan berhasil dimasukkan');
    }

        public function deletepersyaratan($idsiswa,$idpersyaratan)
    {
        $siswa = \App\Siswa::find($idsiswa);
        $siswa->persyaratan()->detach($idpersyaratan);
        return redirect()->back()->with('sukses', 'Data Persyaratan berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function indexlakilaki(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi laki-laki
        $siswa = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from siswa WHERE `jenkel`="Laki-laki"');

        return view('siswa.lakilaki', ['siswa' => $siswa]);
    }

    public function indexperempuan(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi perempuan
        $siswa = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from siswa WHERE `jenkel`="Perempuan"');

        return view('siswa.perempuan', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function reguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $siswa = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa WHERE `fasilitas`="Reguler"');

        return view('siswa.reguler', ['siswa' => $siswa]);
    }

    public function nonreguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $siswa = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa WHERE `fasilitas`="Non Reguler"');

        return view('siswa.nonreguler', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function regulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler Laki-laki
        $siswa = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

        return view('siswa.regulerlk', ['siswa' => $siswa]);
    }

    public function nonregulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler Laki-laki
        $siswa = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

        return view('siswa.nonregulerlk', ['siswa' => $siswa]);
    }

    public function regulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler Perempuan
        $siswa = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `fasilitas`="Reguler" and `jenkel`="Perempuan"');

        return view('siswa.regulerpr', ['siswa' => $siswa]);
    }

    public function nonregulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler Perempuan
        $siswa = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

        return view('siswa.nonregulerpr', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function smp1(Request $request)
    {
//// hanya menampilkan kolom status SMP 1
        $siswa = DB::select('select `created_at`,`status`,`fasilitas`,`jenkel`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 1"');

        return view('siswa.status.smp1', ['siswa' => $siswa]);
    }

        public function smp1lakilaki(Request $request)
        {
    //// hanya menampilkan kolom status SMP 1
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 1" and `jenkel`="Laki-laki"');

            return view('siswa.status.smp1.lakilaki', ['siswa' => $siswa]);
        }

        public function smp1perempuan(Request $request)
        {
    //// hanya menampilkan kolom status SMP 1
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 1" and `jenkel`="Perempuan"');

            return view('siswa.status.smp1.perempuan', ['siswa' => $siswa]);
        }

        public function smp1reguler(Request $request)
        {
    //// hanya menampilkan kolom status SMP 1
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 1" and `fasilitas`="Reguler"');

            return view('siswa.status.smp1.reguler', ['siswa' => $siswa]);
        }

        public function smp1nonreguler(Request $request)
        {
    //// hanya menampilkan kolom status SMP 1
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 1" and `fasilitas`="Non Reguler"');

            return view('siswa.status.smp1.nonreguler', ['siswa' => $siswa]);
        }

        public function smp1regulerlk(Request $request)
        {
    //// hanya menampilkan kolom status SMP 1
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 1" and `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.smp1.regulerlakilaki', ['siswa' => $siswa]);
        }

        public function smp1regulerpr(Request $request)
        {
    //// hanya menampilkan kolom status SMP 1
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 1" and `fasilitas`="Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.smp1.regulerperempuan', ['siswa' => $siswa]);
        }

        public function smp1nonregulerlk(Request $request)
        {
    //// hanya menampilkan kolom status SMP 1
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 1" and `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.smp1.nonregulerlakilaki', ['siswa' => $siswa]);
        }

        public function smp1nonregulerpr(Request $request)
        {
    //// hanya menampilkan kolom status SMP 1
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 1" and `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.smp1.nonregulerperempuan', ['siswa' => $siswa]);
        }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function smp2(Request $request)
    {
//// hanya menampilkan kolom status SMP 2
        $siswa = DB::select('select `created_at`,`status`,`fasilitas`,`jenkel`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 2"');

        return view('siswa.status.smp2', ['siswa' => $siswa]);
    }

        public function smp2lakilaki(Request $request)
        {
    //// hanya menampilkan kolom status SMP 2
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 2" and `jenkel`="Laki-laki"');

            return view('siswa.status.smp2.lakilaki', ['siswa' => $siswa]);
        }

        public function smp2perempuan(Request $request)
        {
    //// hanya menampilkan kolom status SMP 2
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 2" and `jenkel`="Perempuan"');

            return view('siswa.status.smp2.perempuan', ['siswa' => $siswa]);
        }

        public function smp2reguler(Request $request)
        {
    //// hanya menampilkan kolom status SMP 2
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 2" and `fasilitas`="Reguler"');

            return view('siswa.status.smp2.reguler', ['siswa' => $siswa]);
        }

        public function smp2nonreguler(Request $request)
        {
    //// hanya menampilkan kolom status SMP 2
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 2" and `fasilitas`="Non Reguler"');

            return view('siswa.status.smp2.nonreguler', ['siswa' => $siswa]);
        }

        public function smp2regulerlk(Request $request)
        {
    //// hanya menampilkan kolom status SMP 2
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 2" and `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.smp2.regulerlakilaki', ['siswa' => $siswa]);
        }

        public function smp2regulerpr(Request $request)
        {
    //// hanya menampilkan kolom status SMP 2
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 2" and `fasilitas`="Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.smp2.regulerperempuan', ['siswa' => $siswa]);
        }

        public function smp2nonregulerlk(Request $request)
        {
    //// hanya menampilkan kolom status SMP 2
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 2" and `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.smp2.nonregulerlakilaki', ['siswa' => $siswa]);
        }

        public function smp2nonregulerpr(Request $request)
        {
    //// hanya menampilkan kolom status SMP 2
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMP 2" and `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.smp2.nonregulerperempuan', ['siswa' => $siswa]);
        }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function mts(Request $request)
    {
//// hanya menampilkan kolom status MTs
        $siswa = DB::select('select `created_at`,`status`,`fasilitas`,`jenkel`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MTs"');

        return view('siswa.status.mts', ['siswa' => $siswa]);
    }

        public function mtslakilaki(Request $request)
        {
    //// hanya menampilkan kolom status MTs
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MTs" and `jenkel`="Laki-laki"');

            return view('siswa.status.mts.lakilaki', ['siswa' => $siswa]);
        }

        public function mtsperempuan(Request $request)
        {
    //// hanya menampilkan kolom status MTs
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MTs" and `jenkel`="Perempuan"');

            return view('siswa.status.mts.perempuan', ['siswa' => $siswa]);
        }

        public function mtsreguler(Request $request)
        {
    //// hanya menampilkan kolom status MTs
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MTs" and `fasilitas`="Reguler"');

            return view('siswa.status.mts.reguler', ['siswa' => $siswa]);
        }

        public function mtsnonreguler(Request $request)
        {
    //// hanya menampilkan kolom status MTs
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MTs" and `fasilitas`="Non Reguler"');

            return view('siswa.status.mts.nonreguler', ['siswa' => $siswa]);
        }


        public function mtsregulerlk(Request $request)
        {
    //// hanya menampilkan kolom status MTs
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MTs" and `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.mts.regulerlakilaki', ['siswa' => $siswa]);
        }

        public function mtsregulerpr(Request $request)
        {
    //// hanya menampilkan kolom status MTs
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MTs" and `fasilitas`="Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.mts.regulerperempuan', ['siswa' => $siswa]);
        }

        public function mtsnonregulerlk(Request $request)
        {
    //// hanya menampilkan kolom status MTs
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MTs" and `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.mts.nonregulerlakilaki', ['siswa' => $siswa]);
        }

        public function mtsnonregulerpr(Request $request)
        {
    //// hanya menampilkan kolom status MTs
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MTs" and `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.mts.nonregulerperempuan', ['siswa' => $siswa]);
        }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function smktkj(Request $request)
    {
//// hanya menampilkan kolom status SMK TKJ
        $siswa = DB::select('select `created_at`,`status`,`fasilitas`,`jenkel`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKJ"');

        return view('siswa.status.smktkj', ['siswa' => $siswa]);
    }

        public function smktkjlakilaki(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKJ
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKJ" and `jenkel`="Laki-laki"');

            return view('siswa.status.smktkj.lakilaki', ['siswa' => $siswa]);
        }

        public function smktkjperempuan(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKJ
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKJ" and `jenkel`="Perempuan"');

            return view('siswa.status.smktkj.perempuan', ['siswa' => $siswa]);
        }

        public function smktkjreguler(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKJ
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKJ" and `fasilitas`="Reguler"');

            return view('siswa.status.smktkj.reguler', ['siswa' => $siswa]);
        }

        public function smktkjnonreguler(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKJ
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKJ" and `fasilitas`="Non Reguler"');

            return view('siswa.status.smktkj.nonreguler', ['siswa' => $siswa]);
        }


        public function smktkjregulerlk(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKJ
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKJ" and `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.smktkj.regulerlakilaki', ['siswa' => $siswa]);
        }

        public function smktkjregulerpr(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKJ
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKJ" and `fasilitas`="Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.smktkj.regulerperempuan', ['siswa' => $siswa]);
        }

        public function smktkjnonregulerlk(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKJ
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKJ" and `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.smktkj.nonregulerlakilaki', ['siswa' => $siswa]);
        }

        public function smktkjnonregulerpr(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKJ
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKJ" and `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.smktkj.nonregulerperempuan', ['siswa' => $siswa]);
        }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function smktkr(Request $request)
    {
//// hanya menampilkan kolom status SMK TKR
        $siswa = DB::select('select `created_at`,`status`,`fasilitas`,`jenkel`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKR"');

        return view('siswa.status.smktkr', ['siswa' => $siswa]);
    }

        public function smktkrlakilaki(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKR
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKR" and `jenkel`="Laki-laki"');

            return view('siswa.status.smktkr.lakilaki', ['siswa' => $siswa]);
        }

        public function smktkrperempuan(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKR
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKR" and `jenkel`="Perempuan"');

            return view('siswa.status.smktkr.perempuan', ['siswa' => $siswa]);
        }

        public function smktkrreguler(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKR
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKR" and `fasilitas`="Reguler"');

            return view('siswa.status.smktkr.reguler', ['siswa' => $siswa]);
        }

        public function smktkrnonreguler(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKR
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKR" and `fasilitas`="Non Reguler"');

            return view('siswa.status.smktkr.nonreguler', ['siswa' => $siswa]);
        }


        public function smktkrregulerlk(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKR
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKR" and `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.smktkr.regulerlakilaki', ['siswa' => $siswa]);
        }

        public function smktkrregulerpr(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKR
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKR" and `fasilitas`="Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.smktkr.regulerperempuan', ['siswa' => $siswa]);
        }

        public function smktkrnonregulerlk(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKR
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKR" and `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.smktkr.nonregulerlakilaki', ['siswa' => $siswa]);
        }

        public function smktkrnonregulerpr(Request $request)
        {
    //// hanya menampilkan kolom status SMK TKR
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="SMK TKR" and `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.smktkr.nonregulerperempuan', ['siswa' => $siswa]);
        }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function ma(Request $request)
    {
//// hanya menampilkan kolom status MA
        $siswa = DB::select('select `created_at`,`status`,`fasilitas`,`jenkel`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MA"');

        return view('siswa.status.ma', ['siswa' => $siswa]);
    }

        public function malakilaki(Request $request)
        {
    //// hanya menampilkan kolom status MA
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MA" and `jenkel`="Laki-laki"');

            return view('siswa.status.ma.lakilaki', ['siswa' => $siswa]);
        }

        public function maperempuan(Request $request)
        {
    //// hanya menampilkan kolom status MA
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MA" and `jenkel`="Perempuan"');

            return view('siswa.status.ma.perempuan', ['siswa' => $siswa]);
        }

        public function mareguler(Request $request)
        {
    //// hanya menampilkan kolom status MA
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MA" and `fasilitas`="Reguler"');

            return view('siswa.status.ma.reguler', ['siswa' => $siswa]);
        }

        public function manonreguler(Request $request)
        {
    //// hanya menampilkan kolom status MA
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MA" and `fasilitas`="Non Reguler"');

            return view('siswa.status.ma.nonreguler', ['siswa' => $siswa]);
        }


        public function maregulerlk(Request $request)
        {
    //// hanya menampilkan kolom status MA
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MA" and `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.ma.regulerlakilaki', ['siswa' => $siswa]);
        }

        public function maregulerpr(Request $request)
        {
    //// hanya menampilkan kolom status MA
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MA" and `fasilitas`="Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.ma.regulerperempuan', ['siswa' => $siswa]);
        }

        public function manonregulerlk(Request $request)
        {
    //// hanya menampilkan kolom status MA
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MA" and `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.ma.nonregulerlakilaki', ['siswa' => $siswa]);
        }

        public function manonregulerpr(Request $request)
        {
    //// hanya menampilkan kolom status MA
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="MA" and `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.ma.nonregulerperempuan', ['siswa' => $siswa]);
        }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function mahadaly(Request $request)
    {
//// hanya menampilkan kolom status Mahad Aly
        $siswa = DB::select('select `created_at`,`status`,`fasilitas`,`jenkel`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="Mahad Aly"');

        return view('siswa.status.mahadaly', ['siswa' => $siswa]);
    }

        public function mahadalylakilaki(Request $request)
        {
    //// hanya menampilkan kolom status Mahad Aly
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="Mahad Aly" and `jenkel`="Laki-laki"');

            return view('siswa.status.mahadaly.lakilaki', ['siswa' => $siswa]);
        }

        public function mahadalyperempuan(Request $request)
        {
    //// hanya menampilkan kolom status Mahad Aly
            $siswa = DB::select('select `status`,`jenkel`,`created_at`,`fasilitas`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="Mahad Aly" and `jenkel`="Perempuan"');

            return view('siswa.status.mahadaly.perempuan', ['siswa' => $siswa]);
        }

        public function mahadalyreguler(Request $request)
        {
    //// hanya menampilkan kolom status Mahad Aly
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="Mahad Aly" and `fasilitas`="Reguler"');

            return view('siswa.status.mahadaly.reguler', ['siswa' => $siswa]);
        }

        public function mahadalynonreguler(Request $request)
        {
    //// hanya menampilkan kolom status Mahad Aly
            $siswa = DB::select('select `status`,`fasilitas`,`created_at`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="Mahad Aly" and `fasilitas`="Non Reguler"');

            return view('siswa.status.mahadaly.nonreguler', ['siswa' => $siswa]);
        }


        public function mahadalyregulerlk(Request $request)
        {
    //// hanya menampilkan kolom status Mahad Aly
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="Mahad Aly" and `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.mahadaly.regulerlakilaki', ['siswa' => $siswa]);
        }

        public function mahadalyregulerpr(Request $request)
        {
    //// hanya menampilkan kolom status Mahad Aly
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="Mahad Aly" and `fasilitas`="Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.mahadaly.regulerperempuan', ['siswa' => $siswa]);
        }

        public function mahadalynonregulerlk(Request $request)
        {
    //// hanya menampilkan kolom status Mahad Aly
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="Mahad Aly" and `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

            return view('siswa.status.mahadaly.nonregulerlakilaki', ['siswa' => $siswa]);
        }

        public function mahadalynonregulerpr(Request $request)
        {
    //// hanya menampilkan kolom status Mahad Aly
            $siswa = DB::select('select `status`,`fasilitas`,`jenkel`,`created_at`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from siswa where `status`="Mahad Aly" and `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

            return view('siswa.status.mahadaly.nonregulerperempuan', ['siswa' => $siswa]);
        }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function uang(Request $request)
    {
//// hanya menampilkan kolom status dan isi sudah segistrasi
        $registrasi_siswa = DB::select('select `status`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from registrasi_siswa where `status`="sudah registrasi"');

        return view('siswa.uang', ['registrasi_siswa' => $registrasi_siswa]);
    }

    public function lunas(Request $request)
    {
//// hanya menampilkan kolom lunas dan isi sudah lunas
        $registrasi_siswa = DB::select('select `lunas`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from registrasi_siswa where `lunas`="sudah lunas"');

        return view('siswa.lunas', ['registrasi_siswa' => $registrasi_siswa]);
    }

            public function uangregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_siswa = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_siswa where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('siswa.uang.regulerlakilaki', ['registrasi_siswa' => $registrasi_siswa]);
            }

            public function uangregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_siswa = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_siswa where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Perempuan"');

                return view('siswa.uang.regulerperempuan', ['registrasi_siswa' => $registrasi_siswa]);
            }

            public function uangnonregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_siswa = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_siswa where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('siswa.uang.nonregulerlakilaki', ['registrasi_siswa' => $registrasi_siswa]);
            }

            public function uangnonregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_siswa = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_siswa where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Perempuan"');

                return view('siswa.uang.nonregulerperempuan', ['registrasi_siswa' => $registrasi_siswa]);
            }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function tanggalmasuk(Request $request)
    {
//// hanya menampilkan kolom tanggal masuk 
        $siswa = DB::select('select * from `siswa`');

        return view('siswa.tanggalmasuk', ['siswa' => $siswa]);
    }

    public function januari(Request $request)
    {
        $siswa = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa WHERE `bulan`="Januari"');

        return view('siswa.tanggalmasuk.januari', ['siswa' => $siswa]);
    }

    public function februari(Request $request)
    {
        $siswa = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa WHERE `bulan`="Februari"');

        return view('siswa.tanggalmasuk.februari', ['siswa' => $siswa]);
    }

    public function maret(Request $request)
    {
        $siswa = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa WHERE `bulan`="Maret"');

        return view('siswa.tanggalmasuk.maret', ['siswa' => $siswa]);
    }

    public function april(Request $request)
    {
        $siswa = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa WHERE `bulan`="April"');

        return view('siswa.tanggalmasuk.april', ['siswa' => $siswa]);
    }

    public function mei(Request $request)
    {
        $siswa = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa WHERE `bulan`="Mei"');

        return view('siswa.tanggalmasuk.mei', ['siswa' => $siswa]);
    }

    public function juni(Request $request)
    {
        $siswa = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa WHERE `bulan`="Juni"');

        return view('siswa.tanggalmasuk.juni', ['siswa' => $siswa]);
    }

    public function juli(Request $request)
    {
        $siswa = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa WHERE `bulan`="Juli"');

        return view('siswa.tanggalmasuk.juli', ['siswa' => $siswa]);
    }

    public function agustus(Request $request)
    {
        $siswa = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa WHERE `bulan`="Agustus"');

        return view('siswa.tanggalmasuk.agustus', ['siswa' => $siswa]);
    }

    public function september(Request $request)
    {
        $siswa = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa WHERE `bulan`="September"');

        return view('siswa.tanggalmasuk.september', ['siswa' => $siswa]);
    }

    public function oktober(Request $request)
    {
        $siswa = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa WHERE `bulan`="Oktober"');

        return view('siswa.tanggalmasuk.oktober', ['siswa' => $siswa]);
    }

    public function november(Request $request)
    {
        $siswa = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa WHERE `bulan`="November"');

        return view('siswa.tanggalmasuk.november', ['siswa' => $siswa]);
    }

    public function desember(Request $request)
    {
        $siswa = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa WHERE `bulan`="Desember"');

        return view('siswa.tanggalmasuk.desember', ['siswa' => $siswa]);
    }

}
