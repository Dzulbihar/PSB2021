<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use App\Mts;

use App\Mts_registrasi;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MtsExport;
use App\Imports\MtsImport;

use Carbon\Carbon;

class MtsController extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_mts = \App\Mts::where('namalengkap','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_mts = \App\Mts::all();
        }
        return view('mts.index', ['data_mts' => $data_mts]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mts';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel mts
        $request->request->add(['user_id' => $user->id ]);
        $mts = \App\Mts::create($request->all());
//tambah foto
        if($request->hasFile('avatar3')){
            $request->file('avatar3')->move('images/',$request->file('avatar3')->getClientOriginalName());
            $mts->avatar3 = $request->file('avatar3')->getClientOriginalName();
            $mts->save();
        }
//tambah foto        
        return redirect ('/mts')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $mts = \App\Mts::find($id);
        return view('mts/edit', ['mts' => $mts]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mts';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $mts = \App\Mts::find($id);
        $mts->update($request->all());
//tambah foto      
        if($request->hasFile('avatar3')){
            $request->file('avatar3')->move('images/',$request->file('avatar3')->getClientOriginalName());
            $mts->avatar3 = $request->file('avatar3')->getClientOriginalName();
            $mts->save();
        }
//tambah foto
        return redirect ('/mts')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $mts = \App\Mts::find($id);
        $mts->delete($mts);
        return redirect('/mts')->with('sukses', 'Data berhasil di hapus');
    }

       
        public function profile($id)
    {
        $mts = \App\Mts::find($id);
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
            if($mts->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $mts->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('mts.profile',[ 'mts' => $mts, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idmts)
    {
        //dd($request->all());
        $mts = \App\Mts::find($idmts);
        if($mts->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('mts/'.$idmts.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $mts->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('mts/'.$idmts.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idmts)
    {
        //dd($request->all());
        $mts = \App\Mts::find($idmts);

        $mts->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('mts/'.$idmts.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idmts)
    {
        //dd($request->all());
        $mts = \App\Mts::find($idmts);

        $mts->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('mts/'.$idmts.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idmts)
    {
        //dd($request->all());
        $mts = \App\Mts::find($idmts);

        $mts->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('mts/'.$idmts.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idmts)
    {
        //dd($request->all());
        $mts = \App\Mts::find($idmts);

        $mts->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('mts/'.$idmts.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idmts)
    {
        //dd($request->all());
        $mts = \App\Mts::find($idmts);

        $mts->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('mts/'.$idmts.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idmts,$idmapel)
    {
        $mts = \App\Mts::find($idmts);
        $mts->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idmts,$idhukuman)
    {
        $mts = \App\Mts::find($idmts);
        $mts->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new MtsExport, 'mts.xlsx');
    }

    public function mtsimportexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMts', $namaFile);

        Excel::import(new MtsImport, public_path('/DataMts/'.$namaFile));
        return redirect('/mts');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function seratusribu($id)
    {
        $mts = \App\Mts::find($id);
        $data_mts = \App\Mts::where('namalengkap')->get();

        $mts->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');

        return view('mts.seratusribu', ['mts' => $mts, 'data_mts' => $data_mts]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printmts($id)
    {
        $mts = \App\Mts::find($id);
        $data_mts = \App\Mts::where('namalengkap')->get();

        $mts->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');
        //$mts->tbt1 = Carbon::now()->isoFormat('D MMMM Y');        

        return view('mts.printmts', ['mts' => $mts, 'data_mts' => $data_mts]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayamts() 
    {
        $mts = auth()->user()->mts;
        return view('mts.profilsaya', compact(['mts']));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function biayaawalmasuk($id)
    {

        $mts = \App\Mts::find($id);
//registrasi
        $uang = \App\Registrasi::all();

        return view('mts.biayaawalmasuk', ['mts' => $mts, 'uang' => $uang]);
    }

        public function addbiaya(Request $request ,$idmts)
    {
        //dd($request->all());
        $mts = \App\Mts::find($idmts);

        $mts->registrasi()->attach($request->registrasi, ['jalur' => $request->jalur, 'jenjang' => $request->jenjang, 'nama' => $request->nama, 'fasilitas' => $request->fasilitas, 'jenis_kelamin' => $request->jenis_kelamin, 'status' => $request->status, 'lunas' => $request->lunas, 'waktu' => $request->waktu, 'bayar' => $request->bayar, 'ukuran_batik' => $request->ukuran_batik, 'ukuran_olahraga' => $request->ukuran_olahraga, 'ukuran_jas' => $request->ukuran_jas]);

        return redirect('mts/'.$idmts.'/biayaawalmasuk')->with('sukses', 'Data Biaya Awal Masuk berhasil dimasukkan');
    }

        public function deleteregistrasi($idmts,$idregistrasi)
    {
        $mts = \App\Mts::find($idmts);
        $mts->registrasi()->detach($idregistrasi);
        return redirect()->back()->with('sukses', 'Data Data Biaya Awal berhasil dihapus');
    }

    public function printregistrasimts($id)
    {
        $mts = \App\Mts::find($id);
        $data_mts = \App\Mts::where('namalengkap')->get();

        return view('mts.printregistrasimts', ['mts' => $mts, 'data_mts' => $data_mts]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function indexlakilaki(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi laki-laki
        $mts = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from mts WHERE `jenkel`="Laki-laki"');

        return view('mts.lakilaki', ['mts' => $mts]);
    }

    public function indexperempuan(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi perempuan
        $mts = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from mts WHERE `jenkel`="Perempuan"');

        return view('mts.perempuan', ['mts' => $mts]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function reguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $mts = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from mts WHERE `fasilitas`="Reguler"');

        return view('mts.reguler', ['mts' => $mts]);
    }

    public function nonreguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $mts = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from mts WHERE `fasilitas`="Non Reguler"');

        return view('mts.nonreguler', ['mts' => $mts]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function regulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $mts = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from mts where `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

        return view('mts.regulerlk', ['mts' => $mts]);
    }

    public function nonregulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $mts = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from mts where `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

        return view('mts.nonregulerlk', ['mts' => $mts]);
    }

    public function regulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $mts = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from mts where `fasilitas`="Reguler" and `jenkel`="Perempuan"');

        return view('mts.regulerpr', ['mts' => $mts]);
    }

    public function nonregulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $mts = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from mts where `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

        return view('mts.nonregulerpr', ['mts' => $mts]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function uang(Request $request)
    {
//// hanya menampilkan kolom status dan isi sudah segistrasi
        $mts_registrasi = DB::select('select `status`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from mts_registrasi where `status`="sudah registrasi"');

        return view('mts.uang', ['mts_registrasi' => $mts_registrasi]);
    }

    public function lunas(Request $request)
    {
//// hanya menampilkan kolom lunas dan isi sudah lunas
        $mts_registrasi = DB::select('select `lunas`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from mts_registrasi where `lunas`="sudah lunas"');

        return view('mts.lunas', ['mts_registrasi' => $mts_registrasi]);
    }

            public function uangregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $mts_registrasi = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from mts_registrasi where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('mts.uang.regulerlakilaki', ['mts_registrasi' => $mts_registrasi]);
            }

            public function uangregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $mts_registrasi = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from mts_registrasi where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Perempuan"');

                return view('mts.uang.regulerperempuan', ['mts_registrasi' => $mts_registrasi]);
            }

            public function uangnonregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $mts_registrasi = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from mts_registrasi where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('mts.uang.nonregulerlakilaki', ['mts_registrasi' => $mts_registrasi]);
            }

            public function uangnonregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $mts_registrasi = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from mts_registrasi where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Perempuan"');

                return view('mts.uang.nonregulerperempuan', ['mts_registrasi' => $mts_registrasi]);
            }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function tanggalmasuk(Request $request)
    {
//// hanya menampilkan kolom tanggal masuk 
        $mts = DB::select('select * from `mts`');

        return view('mts.tanggalmasuk', ['mts' => $mts]);
    }

    public function januari(Request $request)
    {
        $mts = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts WHERE `bulan`="Januari"');

        return view('mts.tanggalmasuk.januari', ['mts' => $mts]);
    }

    public function februari(Request $request)
    {
        $mts = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts WHERE `bulan`="Februari"');

        return view('mts.tanggalmasuk.februari', ['mts' => $mts]);
    }

    public function maret(Request $request)
    {
        $mts = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts WHERE `bulan`="Maret"');

        return view('mts.tanggalmasuk.maret', ['mts' => $mts]);
    }

    public function april(Request $request)
    {
        $mts = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts WHERE `bulan`="April"');

        return view('mts.tanggalmasuk.april', ['mts' => $mts]);
    }

    public function mei(Request $request)
    {
        $mts = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts WHERE `bulan`="Mei"');

        return view('mts.tanggalmasuk.mei', ['mts' => $mts]);
    }

    public function juni(Request $request)
    {
        $mts = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts WHERE `bulan`="Juni"');

        return view('mts.tanggalmasuk.juni', ['mts' => $mts]);
    }

    public function juli(Request $request)
    {
        $mts = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts WHERE `bulan`="Juli"');

        return view('mts.tanggalmasuk.juli', ['mts' => $mts]);
    }

    public function agustus(Request $request)
    {
        $mts = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts WHERE `bulan`="Agustus"');

        return view('mts.tanggalmasuk.agustus', ['mts' => $mts]);
    }

    public function september(Request $request)
    {
        $mts = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts WHERE `bulan`="September"');

        return view('mts.tanggalmasuk.september', ['mts' => $mts]);
    }

    public function oktober(Request $request)
    {
        $mts = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts WHERE `bulan`="Oktober"');

        return view('mts.tanggalmasuk.oktober', ['mts' => $mts]);
    }

    public function november(Request $request)
    {
        $mts = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts WHERE `bulan`="November"');

        return view('mts.tanggalmasuk.november', ['mts' => $mts]);
    }

    public function desember(Request $request)
    {
        $mts = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts WHERE `bulan`="Desember"');

        return view('mts.tanggalmasuk.desember', ['mts' => $mts]);
    }

}
