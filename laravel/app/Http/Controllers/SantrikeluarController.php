<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use App\Santrikeluar;
use App\Registrasi_santrikeluar;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SantrikeluarExport;
use App\Imports\SantrikeluarImport;

use Carbon\Carbon;

class SantrikeluarController extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_santrikeluar = \App\Santrikeluar::where('namalengkap','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_santrikeluar = \App\Santrikeluar::all();
        }
        return view('santrikeluar.index', ['data_santrikeluar' => $data_santrikeluar]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'santrikeluar';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel santrikeluar
        $request->request->add(['user_id' => $user->id ]);
        $santrikeluar = \App\Santrikeluar::create($request->all());
//tambah foto
        if($request->hasFile('avatar00')){
            $request->file('avatar00')->move('images/',$request->file('avatar00')->getClientOriginalName());
            $santrikeluar->avatar00 = $request->file('avatar00')->getClientOriginalName();
            $santrikeluar->save();
        }
//tambah foto        
        return redirect ('/santrikeluar')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $santrikeluar = \App\Santrikeluar::find($id);
        return view('santrikeluar/edit', ['santrikeluar' => $santrikeluar]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'santrikeluar';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $santrikeluar = \App\Santrikeluar::find($id);
        $santrikeluar->update($request->all());
//tambah foto      
        if($request->hasFile('avatar00')){
            $request->file('avatar00')->move('images/',$request->file('avatar00')->getClientOriginalName());
            $santrikeluar->avatar00 = $request->file('avatar00')->getClientOriginalName();
            $santrikeluar->save();
        }
//tambah foto
        return redirect ('/santrikeluar')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $santrikeluar = \App\Santrikeluar::find($id);
        $santrikeluar->delete($santrikeluar);
        return redirect('/santrikeluar')->with('sukses', 'Data berhasil di hapus');
    }



        public function profile($id)
    {
       $santrikeluar = \App\Santrikeluar::find($id);
//mapel
//        $matapelajaran = \App\Mapel::all();
//hukuman
//        $dosa = \App\Hukuman::all();
//izin
//        $libur = \App\Izin::all();
//ambil
//        $benda = \App\Ambil::all();
//prestasi
//        $luarbiasa = \App\Prestasi::all();
//catatan
//        $pribadi = \App\Catatan::all();

        //dd($mapel);

        //Menyiapkan Data untuk Chart
//        $categories = [];
//        $data = [];

//        foreach ($matapelajaran as $mp) {
//            if($santrikeluar->mapel()->wherePivot('mapel_id',$mp->id)->first()){
//            $categories[] = $mp->nama;
//            $data[] = $santrikeluar->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
//          }
//        }

        return view('santrikeluar.profile'
       	,[ 'santrikeluar' => $santrikeluar
 //      	, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi 
       ]
        );
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsantrikeluar)
    {
        //dd($request->all());
        $santrikeluar = \App\Santrikeluar::find($idsantrikeluar);
        if($santrikeluar->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('santrikeluar/'.$idsantrikeluar.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $santrikeluar->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('santrikeluar/'.$idsantrikeluar.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsantrikeluar)
    {
        //dd($request->all());
        $santrikeluar = \App\Santrikeluar::find($idsantrikeluar);

        $santrikeluar->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('santrikeluar/'.$idsantrikeluar.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsantrikeluar)
    {
        //dd($request->all());
        $santrikeluar = \App\Santrikeluar::find($idsantrikeluar);

        $santrikeluar->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('santrikeluar/'.$idsantrikeluar.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsantrikeluar)
    {
        //dd($request->all());
        $santrikeluar = \App\Santrikeluar::find($idsantrikeluar);

        $santrikeluar->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('santrikeluar/'.$idsantrikeluar.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsantrikeluar)
    {
        //dd($request->all());
        $santrikeluar = \App\Santrikeluar::find($idsantrikeluar);

        $santrikeluar->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('santrikeluar/'.$idsantrikeluar.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////00000000000000000000000000000000///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsantrikeluar)
    {
        //dd($request->all());
        $santrikeluar = \App\Santrikeluar::find($idsantrikeluar);

        $santrikeluar->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('santrikeluar/'.$idsantrikeluar.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsantrikeluar,$idmapel)
    {
        $santrikeluar = \App\Santrikeluar::find($idsantrikeluar);
        $santrikeluar->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsantrikeluar,$idhukuman)
    {
        $santrikeluar = \App\Santrikeluar::find($idsantrikeluar);
        $santrikeluar->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new SantrikeluarExport, 'santrikeluar.xlsx');
    }


    public function santrikeluarimportexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSantrikeluar', $namaFile);

        Excel::import(new SantrikeluarImport, public_path('/DataSantrikeluar/'.$namaFile));
        return redirect('/santrikeluar');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function seratusribu($id)
    {
        $santrikeluar = \App\Santrikeluar::find($id);
        $data_santrikeluar = \App\Santrikeluar::where('namalengkap')->get();

        $santrikeluar->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');

        return view('santrikeluar.seratusribu', ['santrikeluar' => $santrikeluar, 'data_santrikeluar' => $data_santrikeluar]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function printsantrikeluar($id)
    {
        $santrikeluar = \App\Santrikeluar::find($id);
        $data_santrikeluar = \App\Santrikeluar::where('namalengkap')->get();

        return view('santrikeluar.printsantrikeluar', ['santrikeluar' => $santrikeluar, 'data_santrikeluar' => $data_santrikeluar]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasantrikeluar() 
    {
        $santrikeluar = auth()->user()->santrikeluar;
        return view('santrikeluar.profilsaya', compact(['santrikeluar']));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function biayaawalmasuk($id)
    {

        $santrikeluar = \App\Santrikeluar::find($id);
//registrasi
        $uang = \App\Registrasi::all();

        return view('santrikeluar.biayaawalmasuk', ['santrikeluar' => $santrikeluar, 'uang' => $uang]);
    }

        public function addbiaya(Request $request ,$idsantrikeluar)
    {
        //dd($request->all());
        $santrikeluar = \App\Santrikeluar::find($idsantrikeluar);

        $santrikeluar->registrasi()->attach($request->registrasi, ['jalur' => $request->jalur, 'jenjang' => $request->jenjang, 'nama' => $request->nama, 'fasilitas' => $request->fasilitas, 'jenis_kelamin' => $request->jenis_kelamin, 'status' => $request->status, 'lunas' => $request->lunas, 'waktu' => $request->waktu, 'bayar' => $request->bayar, 'ukuran_batik' => $request->ukuran_batik, 'ukuran_olahraga' => $request->ukuran_olahraga, 'ukuran_jas' => $request->ukuran_jas, 'created_at' => $request->created_at]);

        return redirect('santrikeluar/'.$idsantrikeluar.'/biayaawalmasuk')->with('sukses', 'Data Biaya Awal Masuk berhasil dimasukkan');
    }

        public function deleteregistrasi($idsantrikeluar,$idregistrasi)
    {
        $santrikeluar = \App\Santrikeluar::find($idsantrikeluar);
        $santrikeluar->registrasi()->detach($idregistrasi);
        return redirect()->back()->with('sukses', 'Data Data Biaya Awal berhasil dihapus');
    }

    public function printregistrasisantrikeluar($id)
    {
        $santrikeluar = \App\Santrikeluar::find($id);
        $data_santrikeluar = \App\Santrikeluar::where('namalengkap')->get();

        return view('santrikeluar.printregistrasisantrikeluar', ['santrikeluar' => $santrikeluar, 'data_santrikeluar' => $data_santrikeluar]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function indexlakilaki(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi laki-laki
        $santrikeluar = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from santrikeluar WHERE `jenkel`="Laki-laki"');

        return view('santrikeluar.lakilaki', ['santrikeluar' => $santrikeluar]);
    }

    public function indexperempuan(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi perempuan
        $santrikeluar = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from santrikeluar WHERE `jenkel`="Perempuan"');

        return view('santrikeluar.perempuan', ['santrikeluar' => $santrikeluar]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function reguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $santrikeluar = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from santrikeluar WHERE `fasilitas`="Reguler"');

        return view('santrikeluar.reguler', ['santrikeluar' => $santrikeluar]);
    }

    public function nonreguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $santrikeluar = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from santrikeluar WHERE `fasilitas`="Non Reguler"');

        return view('santrikeluar.nonreguler', ['santrikeluar' => $santrikeluar]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function regulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $santrikeluar = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from santrikeluar where `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

        return view('santrikeluar.regulerlk', ['santrikeluar' => $santrikeluar]);
    }

    public function nonregulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $santrikeluar = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from santrikeluar where `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

        return view('santrikeluar.nonregulerlk', ['santrikeluar' => $santrikeluar]);
    }

    public function regulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $santrikeluar = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from santrikeluar where `fasilitas`="Reguler" and `jenkel`="Perempuan"');

        return view('santrikeluar.regulerpr', ['santrikeluar' => $santrikeluar]);
    }

    public function nonregulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $santrikeluar = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from santrikeluar where `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

        return view('santrikeluar.nonregulerpr', ['santrikeluar' => $santrikeluar]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function uang(Request $request)
    {
//// hanya menampilkan kolom status dan isi sudah segistrasi
        $registrasi_santrikeluar = DB::select('select `status`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from registrasi_santrikeluar where `status`="sudah registrasi"');

        return view('santrikeluar.uang', ['registrasi_santrikeluar' => $registrasi_santrikeluar]);
    }

    public function lunas(Request $request)
    {
//// hanya menampilkan kolom lunas dan isi sudah lunas
        $registrasi_santrikeluar = DB::select('select `lunas`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from registrasi_santrikeluar where `lunas`="sudah lunas"');

        return view('santrikeluar.lunas', ['registrasi_santrikeluar' => $registrasi_santrikeluar]);
    }

            public function uangregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_santrikeluar = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_santrikeluar where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('santrikeluar.uang.regulerlakilaki', ['registrasi_santrikeluar' => $registrasi_santrikeluar]);
            }

            public function uangregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_santrikeluar = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_santrikeluar where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Perempuan"');

                return view('santrikeluar.uang.regulerperempuan', ['registrasi_santrikeluar' => $registrasi_santrikeluar]);
            }

            public function uangnonregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_santrikeluar = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_santrikeluar where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('santrikeluar.uang.nonregulerlakilaki', ['registrasi_santrikeluar' => $registrasi_santrikeluar]);
            }

            public function uangnonregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_santrikeluar = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_santrikeluar where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Perempuan"');

                return view('santrikeluar.uang.nonregulerperempuan', ['registrasi_santrikeluar' => $registrasi_santrikeluar]);
            }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function tanggalmasuk(Request $request)
    {
//// hanya menampilkan kolom tanggal masuk 
        $santrikeluar = DB::select('select * from `santrikeluar`');

        return view('santrikeluar.tanggalmasuk', ['santrikeluar' => $santrikeluar]);
    }

    public function januari(Request $request)
    {
        $santrikeluar = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar WHERE `bulan`="Januari"');

        return view('santrikeluar.tanggalmasuk.januari', ['santrikeluar' => $santrikeluar]);
    }

    public function februari(Request $request)
    {
        $santrikeluar = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar WHERE `bulan`="Februari"');

        return view('santrikeluar.tanggalmasuk.februari', ['santrikeluar' => $santrikeluar]);
    }

    public function maret(Request $request)
    {
        $santrikeluar = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar WHERE `bulan`="Maret"');

        return view('santrikeluar.tanggalmasuk.maret', ['santrikeluar' => $santrikeluar]);
    }

    public function april(Request $request)
    {
        $santrikeluar = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar WHERE `bulan`="April"');

        return view('santrikeluar.tanggalmasuk.april', ['santrikeluar' => $santrikeluar]);
    }

    public function mei(Request $request)
    {
        $santrikeluar = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar WHERE `bulan`="Mei"');

        return view('santrikeluar.tanggalmasuk.mei', ['santrikeluar' => $santrikeluar]);
    }

    public function juni(Request $request)
    {
        $santrikeluar = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar WHERE `bulan`="Juni"');

        return view('santrikeluar.tanggalmasuk.juni', ['santrikeluar' => $santrikeluar]);
    }

    public function juli(Request $request)
    {
        $santrikeluar = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar WHERE `bulan`="Juli"');

        return view('santrikeluar.tanggalmasuk.juli', ['santrikeluar' => $santrikeluar]);
    }

    public function agustus(Request $request)
    {
        $santrikeluar = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar WHERE `bulan`="Agustus"');

        return view('santrikeluar.tanggalmasuk.agustus', ['santrikeluar' => $santrikeluar]);
    }

    public function september(Request $request)
    {
        $santrikeluar = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar WHERE `bulan`="September"');

        return view('santrikeluar.tanggalmasuk.september', ['santrikeluar' => $santrikeluar]);
    }

    public function oktober(Request $request)
    {
        $santrikeluar = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar WHERE `bulan`="Oktober"');

        return view('santrikeluar.tanggalmasuk.oktober', ['santrikeluar' => $santrikeluar]);
    }

    public function november(Request $request)
    {
        $santrikeluar = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar WHERE `bulan`="November"');

        return view('santrikeluar.tanggalmasuk.november', ['santrikeluar' => $santrikeluar]);
    }

    public function desember(Request $request)
    {
        $santrikeluar = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar WHERE `bulan`="Desember"');

        return view('santrikeluar.tanggalmasuk.desember', ['santrikeluar' => $santrikeluar]);
    }

}
