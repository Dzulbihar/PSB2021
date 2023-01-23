<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use App\Mahadaly;

use App\Mahadaly_registrasi;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MahadalyExport;
use App\Imports\MahadalyImport;

use Carbon\Carbon;

class MahadalyController extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_mahadaly = \App\Mahadaly::where('namalengkap','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_mahadaly = \App\Mahadaly::all();
        }
        return view('mahadaly.index', ['data_mahadaly' => $data_mahadaly]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mahadaly';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel mahadaly
        $request->request->add(['user_id' => $user->id ]);
        $mahadaly = \App\Mahadaly::create($request->all());
//tambah foto
        if($request->hasFile('avatar7')){
            $request->file('avatar7')->move('images/',$request->file('avatar7')->getClientOriginalName());
            $mahadaly->avatar7 = $request->file('avatar7')->getClientOriginalName();
            $mahadaly->save();
        }
//tambah foto        
        return redirect ('/mahadaly')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        return view('mahadaly/edit', ['mahadaly' => $mahadaly]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mahadaly';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->update($request->all());
//tambah foto      
        if($request->hasFile('avatar7')){
            $request->file('avatar7')->move('images/',$request->file('avatar7')->getClientOriginalName());
            $mahadaly->avatar7 = $request->file('avatar7')->getClientOriginalName();
            $mahadaly->save();
        }
//tambah foto
        return redirect ('/mahadaly')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->delete($mahadaly);
        return redirect('/mahadaly')->with('sukses', 'Data berhasil di hapus');
    }



        public function profile($id)
    {
        $mahadaly = \App\Mahadaly::find($id);
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
            if($mahadaly->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $mahadaly->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('mahadaly.profile',[ 'mahadaly' => $mahadaly, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idmahadaly)
    {
        //dd($request->all());
        $mahadaly = \App\Mahadaly::find($idmahadaly);
        if($mahadaly->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('mahadaly/'.$idmahadaly.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $mahadaly->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('mahadaly/'.$idmahadaly.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idmahadaly)
    {
        //dd($request->all());
        $mahadaly = \App\Mahadaly::find($idmahadaly);

        $mahadaly->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('mahadaly/'.$idmahadaly.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idmahadaly)
    {
        //dd($request->all());
        $mahadaly = \App\Mahadaly::find($idmahadaly);

        $mahadaly->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('mahadaly/'.$idmahadaly.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idmahadaly)
    {
        //dd($request->all());
        $mahadaly = \App\Mahadaly::find($idmahadaly);

        $mahadaly->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('mahadaly/'.$idmahadaly.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idmahadaly)
    {
        //dd($request->all());
        $mahadaly = \App\Mahadaly::find($idmahadaly);

        $mahadaly->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('mahadaly/'.$idmahadaly.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idmahadaly)
    {
        //dd($request->all());
        $mahadaly = \App\Mahadaly::find($idmahadaly);

        $mahadaly->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('mahadaly/'.$idmahadaly.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idmahadaly,$idmapel)
    {
        $mahadaly = \App\Mahadaly::find($idmahadaly);
        $mahadaly->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idmahadaly,$idhukuman)
    {
        $mahadaly = \App\Mahadaly::find($idmahadaly);
        $mahadaly->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new MahadalyExport, 'mahadaly.xlsx');
    }

    public function mahadalyimportexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMahadaly', $namaFile);

        Excel::import(new MahadalyImport, public_path('/DataMahadaly/'.$namaFile));
        return redirect('/mahadaly');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function seratusribu($id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $data_mahadaly = \App\Mahadaly::where('namalengkap')->get();

        $mahadaly->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');

        return view('mahadaly.seratusribu', ['mahadaly' => $mahadaly, 'data_mahadaly' => $data_mahadaly]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printmahadaly($id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $data_mahadaly = \App\Mahadaly::where('namalengkap')->get();

        $mahadaly->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');
        //$mahadaly->tbt1 = Carbon::now()->isoFormat('D MMMM Y');        

        return view('mahadaly.printmahadaly', ['mahadaly' => $mahadaly, 'data_mahadaly' => $data_mahadaly]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayamahadaly() 
    {
        $mahadaly = auth()->user()->mahadaly;
        return view('mahadaly.profilsaya', compact(['mahadaly']));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function biayaawalmasuk($id)
    {

        $mahadaly = \App\Mahadaly::find($id);
//registrasi
        $uang = \App\Registrasi::all();

        return view('mahadaly.biayaawalmasuk', ['mahadaly' => $mahadaly, 'uang' => $uang]);
    }

        public function addbiaya(Request $request ,$idmahadaly)
    {
        //dd($request->all());
        $mahadaly = \App\Mahadaly::find($idmahadaly);

        $mahadaly->registrasi()->attach($request->registrasi, ['jalur' => $request->jalur, 'jenjang' => $request->jenjang, 'nama' => $request->nama, 'fasilitas' => $request->fasilitas, 'jenis_kelamin' => $request->jenis_kelamin, 'status' => $request->status, 'lunas' => $request->lunas, 'waktu' => $request->waktu, 'bayar' => $request->bayar, 'ukuran_batik' => $request->ukuran_batik, 'ukuran_olahraga' => $request->ukuran_olahraga, 'ukuran_jas' => $request->ukuran_jas]);

        return redirect('mahadaly/'.$idmahadaly.'/biayaawalmasuk')->with('sukses', 'Data Biaya Awal Masuk berhasil dimasukkan');
    }

        public function deleteregistrasi($idmahadaly,$idregistrasi)
    {
        $mahadaly = \App\Mahadaly::find($idmahadaly);
        $mahadaly->registrasi()->detach($idregistrasi);
        return redirect()->back()->with('sukses', 'Data Data Biaya Awal berhasil dihapus');
    }

    public function printregistrasimahadaly($id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $data_mahadaly = \App\Mahadaly::where('namalengkap')->get();

        return view('mahadaly.printregistrasimahadaly', ['mahadaly' => $mahadaly, 'data_mahadaly' => $data_mahadaly]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function indexlakilaki(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi laki-laki
        $mahadaly = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from mahadaly WHERE `jenkel`="Laki-laki"');

        return view('mahadaly.lakilaki', ['mahadaly' => $mahadaly]);
    }

    public function indexperempuan(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi perempuan
        $mahadaly = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from mahadaly WHERE `jenkel`="Perempuan"');

        return view('mahadaly.perempuan', ['mahadaly' => $mahadaly]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function reguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $mahadaly = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from mahadaly WHERE `fasilitas`="Reguler"');

        return view('mahadaly.reguler', ['mahadaly' => $mahadaly]);
    }

    public function nonreguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $mahadaly = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from mahadaly WHERE `fasilitas`="Non Reguler"');

        return view('mahadaly.nonreguler', ['mahadaly' => $mahadaly]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function regulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $mahadaly = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from mahadaly where `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

        return view('mahadaly.regulerlk', ['mahadaly' => $mahadaly]);
    }

    public function nonregulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $mahadaly = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from mahadaly where `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

        return view('mahadaly.nonregulerlk', ['mahadaly' => $mahadaly]);
    }

    public function regulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $mahadaly = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from mahadaly where `fasilitas`="Reguler" and `jenkel`="Perempuan"');

        return view('mahadaly.regulerpr', ['mahadaly' => $mahadaly]);
    }

    public function nonregulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $mahadaly = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from mahadaly where `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

        return view('mahadaly.nonregulerpr', ['mahadaly' => $mahadaly]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function uang(Request $request)
    {
//// hanya menampilkan kolom status dan isi sudah segistrasi
        $mahadaly_registrasi = DB::select('select `status`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from mahadaly_registrasi where `status`="sudah registrasi"');

        return view('mahadaly.uang', ['mahadaly_registrasi' => $mahadaly_registrasi]);
    }

    public function lunas(Request $request)
    {
//// hanya menampilkan kolom lunas dan isi sudah lunas
        $mahadaly_registrasi = DB::select('select `lunas`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from mahadaly_registrasi where `lunas`="sudah lunas"');

        return view('mahadaly.lunas', ['mahadaly_registrasi' => $mahadaly_registrasi]);
    }

            public function uangregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $mahadaly_registrasi = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from mahadaly_registrasi where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('mahadaly.uang.regulerlakilaki', ['mahadaly_registrasi' => $mahadaly_registrasi]);
            }

            public function uangregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $mahadaly_registrasi = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from mahadaly_registrasi where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Perempuan"');

                return view('mahadaly.uang.regulerperempuan', ['mahadaly_registrasi' => $mahadaly_registrasi]);
            }

            public function uangnonregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $mahadaly_registrasi = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from mahadaly_registrasi where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('mahadaly.uang.nonregulerlakilaki', ['mahadaly_registrasi' => $mahadaly_registrasi]);
            }

            public function uangnonregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $mahadaly_registrasi = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from mahadaly_registrasi where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Perempuan"');

                return view('mahadaly.uang.nonregulerperempuan', ['mahadaly_registrasi' => $mahadaly_registrasi]);
            }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function tanggalmasuk(Request $request)
    {
//// hanya menampilkan kolom tanggal masuk 
        $mahadaly = DB::select('select * from `mahadaly`');

        return view('mahadaly.tanggalmasuk', ['mahadaly' => $mahadaly]);
    }

    public function januari(Request $request)
    {
        $mahadaly = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mahadaly WHERE `bulan`="Januari"');

        return view('mahadaly.tanggalmasuk.januari', ['mahadaly' => $mahadaly]);
    }

    public function februari(Request $request)
    {
        $mahadaly = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mahadaly WHERE `bulan`="Februari"');

        return view('mahadaly.tanggalmasuk.februari', ['mahadaly' => $mahadaly]);
    }

    public function maret(Request $request)
    {
        $mahadaly = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mahadaly WHERE `bulan`="Maret"');

        return view('mahadaly.tanggalmasuk.maret', ['mahadaly' => $mahadaly]);
    }

    public function april(Request $request)
    {
        $mahadaly = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mahadaly WHERE `bulan`="April"');

        return view('mahadaly.tanggalmasuk.april', ['mahadaly' => $mahadaly]);
    }

    public function mei(Request $request)
    {
        $mahadaly = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mahadaly WHERE `bulan`="Mei"');

        return view('mahadaly.tanggalmasuk.mei', ['mahadaly' => $mahadaly]);
    }

    public function juni(Request $request)
    {
        $mahadaly = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mahadaly WHERE `bulan`="Juni"');

        return view('mahadaly.tanggalmasuk.juni', ['mahadaly' => $mahadaly]);
    }

    public function juli(Request $request)
    {
        $mahadaly = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mahadaly WHERE `bulan`="Juli"');

        return view('mahadaly.tanggalmasuk.juli', ['mahadaly' => $mahadaly]);
    }

    public function agustus(Request $request)
    {
        $mahadaly = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mahadaly WHERE `bulan`="Agustus"');

        return view('mahadaly.tanggalmasuk.agustus', ['mahadaly' => $mahadaly]);
    }

    public function september(Request $request)
    {
        $mahadaly = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mahadaly WHERE `bulan`="September"');

        return view('mahadaly.tanggalmasuk.september', ['mahadaly' => $mahadaly]);
    }

    public function oktober(Request $request)
    {
        $mahadaly = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mahadaly WHERE `bulan`="Oktober"');

        return view('mahadaly.tanggalmasuk.oktober', ['mahadaly' => $mahadaly]);
    }

    public function november(Request $request)
    {
        $mahadaly = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mahadaly WHERE `bulan`="November"');

        return view('mahadaly.tanggalmasuk.november', ['mahadaly' => $mahadaly]);
    }

    public function desember(Request $request)
    {
        $mahadaly = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mahadaly WHERE `bulan`="Desember"');

        return view('mahadaly.tanggalmasuk.desember', ['mahadaly' => $mahadaly]);
    }

}
