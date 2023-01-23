<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use App\Ma;

use App\Ma_registrasi;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MaExport;
use App\Imports\MaImport;

use Carbon\Carbon;

class MaController extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_ma = \App\Ma::where('namalengkap','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_ma = \App\Ma::all();
        }
        return view('ma.index', ['data_ma' => $data_ma]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'ma';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel ma
        $request->request->add(['user_id' => $user->id ]);
        $ma = \App\Ma::create($request->all());
//tambah foto
        if($request->hasFile('avatar6')){
            $request->file('avatar6')->move('images/',$request->file('avatar6')->getClientOriginalName());
            $ma->avatar6 = $request->file('avatar6')->getClientOriginalName();
            $ma->save();
        }
//tambah foto        
        return redirect ('/ma')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $ma = \App\Ma::find($id);
        return view('ma/edit', ['ma' => $ma]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'ma';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $ma = \App\Ma::find($id);
        $ma->update($request->all());
//tambah foto      
        if($request->hasFile('avatar6')){
            $request->file('avatar6')->move('images/',$request->file('avatar6')->getClientOriginalName());
            $ma->avatar6 = $request->file('avatar6')->getClientOriginalName();
            $ma->save();
        }
//tambah foto
        return redirect ('/ma')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $ma = \App\Ma::find($id);
        $ma->delete($ma);
        return redirect('/ma')->with('sukses', 'Data berhasil di hapus');
    }


        public function profile($id)
    {
        $ma = \App\Ma::find($id);
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
            if($ma->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $ma->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('ma.profile',[ 'ma' => $ma, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idma)
    {
        //dd($request->all());
        $ma = \App\Ma::find($idma);
        if($ma->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('ma/'.$idma.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $ma->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('ma/'.$idma.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idma)
    {
        //dd($request->all());
        $ma = \App\Ma::find($idma);

        $ma->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('ma/'.$idma.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idma)
    {
        //dd($request->all());
        $ma = \App\Ma::find($idma);

        $ma->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('ma/'.$idma.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idma)
    {
        //dd($request->all());
        $ma = \App\Ma::find($idma);

        $ma->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('ma/'.$idma.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idma)
    {
        //dd($request->all());
        $ma = \App\Ma::find($idma);

        $ma->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('ma/'.$idma.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idma)
    {
        //dd($request->all());
        $ma = \App\Ma::find($idma);

        $ma->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('ma/'.$idma.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idma,$idmapel)
    {
        $ma = \App\Ma::find($idma);
        $ma->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idma,$idhukuman)
    {
        $ma = \App\Ma::find($idma);
        $ma->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new MaExport, 'ma.xlsx');
    }


    public function maimportexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMa', $namaFile);

        Excel::import(new MaImport, public_path('/DataMa/'.$namaFile));
        return redirect('/ma');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function seratusribu($id)
    {
        $ma = \App\Ma::find($id);
        $data_ma = \App\Ma::where('namalengkap')->get();

        $ma->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');

        return view('ma.seratusribu', ['ma' => $ma, 'data_ma' => $data_ma]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printma($id)
    {
        $ma = \App\Ma::find($id);
        $data_ma = \App\Ma::where('namalengkap')->get();

        $ma->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');
        //$ma->tbt1 = Carbon::now()->isoFormat('D MMMM Y');

        return view('ma.printma', ['ma' => $ma, 'data_ma' => $data_ma]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayama() 
    {
        $ma = auth()->user()->ma;
        return view('ma.profilsaya', compact(['ma']));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function biayaawalmasuk($id)
    {

        $ma = \App\Ma::find($id);
//registrasi
        $uang = \App\Registrasi::all();

        return view('ma.biayaawalmasuk', ['ma' => $ma, 'uang' => $uang]);
    }

        public function addbiaya(Request $request ,$idma)
    {
        //dd($request->all());
        $ma = \App\Ma::find($idma);

        $ma->registrasi()->attach($request->registrasi, ['jalur' => $request->jalur, 'jenjang' => $request->jenjang, 'nama' => $request->nama, 'fasilitas' => $request->fasilitas, 'jenis_kelamin' => $request->jenis_kelamin, 'status' => $request->status, 'lunas' => $request->lunas, 'waktu' => $request->waktu, 'bayar' => $request->bayar, 'ukuran_batik' => $request->ukuran_batik, 'ukuran_olahraga' => $request->ukuran_olahraga, 'ukuran_jas' => $request->ukuran_jas]);

        return redirect('ma/'.$idma.'/biayaawalmasuk')->with('sukses', 'Data Biaya Awal Masuk berhasil dimasukkan');
    }

        public function deleteregistrasi($idma,$idregistrasi)
    {
        $ma = \App\Ma::find($idma);
        $ma->registrasi()->detach($idregistrasi);
        return redirect()->back()->with('sukses', 'Data Data Biaya Awal berhasil dihapus');
    }

    public function printregistrasima($id)
    {
        $ma = \App\Ma::find($id);
        $data_ma = \App\Ma::where('namalengkap')->get();

        return view('ma.printregistrasima', ['ma' => $ma, 'data_ma' => $data_ma]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function indexlakilaki(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi laki-laki
        $ma = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from ma WHERE `jenkel`="Laki-laki"');

        return view('ma.lakilaki', ['ma' => $ma]);
    }

    public function indexperempuan(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi perempuan
        $ma = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from ma WHERE `jenkel`="Perempuan"');

        return view('ma.perempuan', ['ma' => $ma]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function reguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $ma = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from ma WHERE `fasilitas`="Reguler"');

        return view('ma.reguler', ['ma' => $ma]);
    }

    public function nonreguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $ma = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from ma WHERE `fasilitas`="Non Reguler"');

        return view('ma.nonreguler', ['ma' => $ma]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function regulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $ma = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from ma where `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

        return view('ma.regulerlk', ['ma' => $ma]);
    }

    public function nonregulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $ma = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from ma where `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

        return view('ma.nonregulerlk', ['ma' => $ma]);
    }

    public function regulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $ma = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from ma where `fasilitas`="Reguler" and `jenkel`="Perempuan"');

        return view('ma.regulerpr', ['ma' => $ma]);
    }

    public function nonregulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $ma = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from ma where `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

        return view('ma.nonregulerpr', ['ma' => $ma]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function uang(Request $request)
    {
//// hanya menampilkan kolom status dan isi sudah segistrasi
        $ma_registrasi = DB::select('select `status`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from ma_registrasi where `status`="sudah registrasi"');

        return view('ma.uang', ['ma_registrasi' => $ma_registrasi]);
    }

    public function lunas(Request $request)
    {
//// hanya menampilkan kolom lunas dan isi sudah lunas
        $ma_registrasi = DB::select('select `lunas`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from ma_registrasi where `lunas`="sudah lunas"');

        return view('ma.lunas', ['ma_registrasi' => $ma_registrasi]);
    }

            public function uangregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $ma_registrasi = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from ma_registrasi where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('ma.uang.regulerlakilaki', ['ma_registrasi' => $ma_registrasi]);
            }

            public function uangregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $ma_registrasi = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from ma_registrasi where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Perempuan"');

                return view('ma.uang.regulerperempuan', ['ma_registrasi' => $ma_registrasi]);
            }

            public function uangnonregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $ma_registrasi = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from ma_registrasi where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('ma.uang.nonregulerlakilaki', ['ma_registrasi' => $ma_registrasi]);
            }

            public function uangnonregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $ma_registrasi = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from ma_registrasi where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Perempuan"');

                return view('ma.uang.nonregulerperempuan', ['ma_registrasi' => $ma_registrasi]);
            }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function tanggalmasuk(Request $request)
    {
//// hanya menampilkan kolom tanggal masuk 
        $ma = DB::select('select * from `ma`');

        return view('ma.tanggalmasuk', ['ma' => $ma]);
    }

    public function januari(Request $request)
    {
        $ma = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma WHERE `bulan`="Januari"');

        return view('ma.tanggalmasuk.januari', ['ma' => $ma]);
    }

    public function februari(Request $request)
    {
        $ma = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma WHERE `bulan`="Februari"');

        return view('ma.tanggalmasuk.februari', ['ma' => $ma]);
    }

    public function maret(Request $request)
    {
        $ma = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma WHERE `bulan`="Maret"');

        return view('ma.tanggalmasuk.maret', ['ma' => $ma]);
    }

    public function april(Request $request)
    {
        $ma = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma WHERE `bulan`="April"');

        return view('ma.tanggalmasuk.april', ['ma' => $ma]);
    }

    public function mei(Request $request)
    {
        $ma = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma WHERE `bulan`="Mei"');

        return view('ma.tanggalmasuk.mei', ['ma' => $ma]);
    }

    public function juni(Request $request)
    {
        $ma = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma WHERE `bulan`="Juni"');

        return view('ma.tanggalmasuk.juni', ['ma' => $ma]);
    }

    public function juli(Request $request)
    {
        $ma = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma WHERE `bulan`="Juli"');

        return view('ma.tanggalmasuk.juli', ['ma' => $ma]);
    }

    public function agustus(Request $request)
    {
        $ma = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma WHERE `bulan`="Agustus"');

        return view('ma.tanggalmasuk.agustus', ['ma' => $ma]);
    }

    public function september(Request $request)
    {
        $ma = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma WHERE `bulan`="September"');

        return view('ma.tanggalmasuk.september', ['ma' => $ma]);
    }

    public function oktober(Request $request)
    {
        $ma = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma WHERE `bulan`="Oktober"');

        return view('ma.tanggalmasuk.oktober', ['ma' => $ma]);
    }

    public function november(Request $request)
    {
        $ma = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma WHERE `bulan`="November"');

        return view('ma.tanggalmasuk.november', ['ma' => $ma]);
    }

    public function desember(Request $request)
    {
        $ma = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma WHERE `bulan`="Desember"');

        return view('ma.tanggalmasuk.desember', ['ma' => $ma]);
    }

}
