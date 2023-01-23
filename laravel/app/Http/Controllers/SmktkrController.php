<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use App\Smktkr;

use App\Registrasi_smktkr;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SmktkrExport;
use App\Imports\SmktkrImport;

use Carbon\Carbon;

class SmktkrController extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smktkr = \App\Smktkr::where('namalengkap','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smktkr = \App\Smktkr::all();
        }
        return view('smktkr.index', ['data_smktkr' => $data_smktkr]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkr';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smktkr
        $request->request->add(['user_id' => $user->id ]);
        $smktkr = \App\Smktkr::create($request->all());
//tambah foto
        if($request->hasFile('avatar5')){
            $request->file('avatar5')->move('images/',$request->file('avatar5')->getClientOriginalName());
            $smktkr->avatar5 = $request->file('avatar5')->getClientOriginalName();
            $smktkr->save();
        }
//tambah foto        
        return redirect ('/smktkr')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smktkr = \App\Smktkr::find($id);
        return view('smktkr/edit', ['smktkr' => $smktkr]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkr';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smktkr = \App\Smktkr::find($id);
        $smktkr->update($request->all());
//tambah foto      
        if($request->hasFile('avatar5')){
            $request->file('avatar5')->move('images/',$request->file('avatar5')->getClientOriginalName());
            $smktkr->avatar5 = $request->file('avatar5')->getClientOriginalName();
            $smktkr->save();
        }
//tambah foto
        return redirect ('/smktkr')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->delete($smktkr);
        return redirect('/smktkr')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smktkr = \App\Smktkr::find($id);
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
            if($smktkr->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smktkr->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smktkr.profile',[ 'smktkr' => $smktkr, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmktkr)
    {
        //dd($request->all());
        $smktkr = \App\Smktkr::find($idsmktkr);
        if($smktkr->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smktkr/'.$idsmktkr.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smktkr->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smktkr/'.$idsmktkr.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmktkr)
    {
        //dd($request->all());
        $smktkr = \App\Smktkr::find($idsmktkr);

        $smktkr->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smktkr/'.$idsmktkr.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmktkr)
    {
        //dd($request->all());
        $smktkr = \App\Smktkr::find($idsmktkr);

        $smktkr->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smktkr/'.$idsmktkr.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmktkr)
    {
        //dd($request->all());
        $smktkr = \App\Smktkr::find($idsmktkr);

        $smktkr->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smktkr/'.$idsmktkr.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmktkr)
    {
        //dd($request->all());
        $smktkr = \App\Smktkr::find($idsmktkr);

        $smktkr->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smktkr/'.$idsmktkr.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmktkr)
    {
        //dd($request->all());
        $smktkr = \App\Smktkr::find($idsmktkr);

        $smktkr->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smktkr/'.$idsmktkr.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmktkr,$idmapel)
    {
        $smktkr = \App\Smktkr::find($idsmktkr);
        $smktkr->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmktkr,$idhukuman)
    {
        $smktkr = \App\Smktkr::find($idsmktkr);
        $smktkr->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new SmktkrExport, 'smktkr.xlsx');
    }


    public function smktkrimportexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmktkr', $namaFile);

        Excel::import(new SmktkrImport, public_path('/DataSmktkr/'.$namaFile));
        return redirect('/smktkr');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function seratusribu($id)
    {
        $smktkr = \App\Smktkr::find($id);
        $data_smktkr = \App\Smktkr::where('namalengkap')->get();

        $smktkr->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');

        return view('smktkr.seratusribu', ['smktkr' => $smktkr, 'data_smktkr' => $data_smktkr]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printsmktkr($id)
    {
        $smktkr = \App\Smktkr::find($id);
        $data_smktkr = \App\Smktkr::where('namalengkap')->get();

        $smktkr->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');
        //$smktkr->tbt1 = Carbon::now()->isoFormat('D MMMM Y');        

        return view('smktkr.printsmktkr', ['smktkr' => $smktkr, 'data_smktkr' => $data_smktkr]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmktkr() 
    {
        $smktkr = auth()->user()->smktkr;
        return view('smktkr.profilsaya', compact(['smktkr']));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function biayaawalmasuk($id)
    {

        $smktkr = \App\Smktkr::find($id);
//registrasi
        $uang = \App\Registrasi::all();

        return view('smktkr.biayaawalmasuk', ['smktkr' => $smktkr, 'uang' => $uang]);
    }

        public function addbiaya(Request $request ,$idsmktkr)
    {
        //dd($request->all());
        $smktkr = \App\Smktkr::find($idsmktkr);

        $smktkr->registrasi()->attach($request->registrasi, ['jalur' => $request->jalur, 'jenjang' => $request->jenjang, 'nama' => $request->nama, 'fasilitas' => $request->fasilitas, 'jenis_kelamin' => $request->jenis_kelamin, 'status' => $request->status, 'lunas' => $request->lunas, 'waktu' => $request->waktu, 'bayar' => $request->bayar, 'ukuran_batik' => $request->ukuran_batik, 'ukuran_olahraga' => $request->ukuran_olahraga, 'ukuran_jas' => $request->ukuran_jas]);

        return redirect('smktkr/'.$idsmktkr.'/biayaawalmasuk')->with('sukses', 'Data Biaya Awal Masuk berhasil dimasukkan');
    }

        public function deleteregistrasi($idsmktkr,$idregistrasi)
    {
        $smktkr = \App\Smktkr::find($idsmktkr);
        $smktkr->registrasi()->detach($idregistrasi);
        return redirect()->back()->with('sukses', 'Data Data Biaya Awal berhasil dihapus');
    }

    public function printregistrasismktkr($id)
    {
        $smktkr = \App\Smktkr::find($id);
        $data_smktkr = \App\Smktkr::where('namalengkap')->get();

        return view('smktkr.printregistrasismktkr', ['smktkr' => $smktkr, 'data_smktkr' => $data_smktkr]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function indexlakilaki(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi laki-laki
        $smktkr = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from smktkr WHERE `jenkel`="Laki-laki"');

        return view('smktkr.lakilaki', ['smktkr' => $smktkr]);
    }

    public function indexperempuan(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi perempuan
        $smktkr = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from smktkr WHERE `jenkel`="Perempuan"');

        return view('smktkr.perempuan', ['smktkr' => $smktkr]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function reguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $smktkr = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from smktkr WHERE `fasilitas`="Reguler"');

        return view('smktkr.reguler', ['smktkr' => $smktkr]);
    }

    public function nonreguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $smktkr = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from smktkr WHERE `fasilitas`="Non Reguler"');

        return view('smktkr.nonreguler', ['smktkr' => $smktkr]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function regulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $smktkr = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smktkr where `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

        return view('smktkr.regulerlk', ['smktkr' => $smktkr]);
    }

    public function nonregulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $smktkr = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smktkr where `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

        return view('smktkr.nonregulerlk', ['smktkr' => $smktkr]);
    }

    public function regulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $smktkr = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smktkr where `fasilitas`="Reguler" and `jenkel`="Perempuan"');

        return view('smktkr.regulerpr', ['smktkr' => $smktkr]);
    }

    public function nonregulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $smktkr = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smktkr where `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

        return view('smktkr.nonregulerpr', ['smktkr' => $smktkr]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function uang(Request $request)
    {
//// hanya menampilkan kolom status dan isi sudah segistrasi
        $registrasi_smktkr = DB::select('select `status`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from registrasi_smktkr where `status`="sudah registrasi"');

        return view('smktkr.uang', ['registrasi_smktkr' => $registrasi_smktkr]);
    }

    public function lunas(Request $request)
    {
//// hanya menampilkan kolom lunas dan isi sudah lunas
        $registrasi_smktkr = DB::select('select `lunas`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from registrasi_smktkr where `lunas`="sudah lunas"');

        return view('smktkr.lunas', ['registrasi_smktkr' => $registrasi_smktkr]);
    }

            public function uangregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smktkr = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smktkr where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('smktkr.uang.regulerlakilaki', ['registrasi_smktkr' => $registrasi_smktkr]);
            }

            public function uangregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smktkr = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smktkr where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Perempuan"');

                return view('smktkr.uang.regulerperempuan', ['registrasi_smktkr' => $registrasi_smktkr]);
            }

            public function uangnonregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smktkr = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smktkr where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('smktkr.uang.nonregulerlakilaki', ['registrasi_smktkr' => $registrasi_smktkr]);
            }

            public function uangnonregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smktkr = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smktkr where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Perempuan"');

                return view('smktkr.uang.nonregulerperempuan', ['registrasi_smktkr' => $registrasi_smktkr]);
            }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function tanggalmasuk(Request $request)
    {
//// hanya menampilkan kolom tanggal masuk 
        $smktkr = DB::select('select * from `smktkr`');

        return view('smktkr.tanggalmasuk', ['smktkr' => $smktkr]);
    }

    public function januari(Request $request)
    {
        $smktkr = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr WHERE `bulan`="Januari"');

        return view('smktkr.tanggalmasuk.januari', ['smktkr' => $smktkr]);
    }

    public function februari(Request $request)
    {
        $smktkr = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr WHERE `bulan`="Februari"');

        return view('smktkr.tanggalmasuk.februari', ['smktkr' => $smktkr]);
    }

    public function maret(Request $request)
    {
        $smktkr = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr WHERE `bulan`="Maret"');

        return view('smktkr.tanggalmasuk.maret', ['smktkr' => $smktkr]);
    }

    public function april(Request $request)
    {
        $smktkr = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr WHERE `bulan`="April"');

        return view('smktkr.tanggalmasuk.april', ['smktkr' => $smktkr]);
    }

    public function mei(Request $request)
    {
        $smktkr = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr WHERE `bulan`="Mei"');

        return view('smktkr.tanggalmasuk.mei', ['smktkr' => $smktkr]);
    }

    public function juni(Request $request)
    {
        $smktkr = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr WHERE `bulan`="Juni"');

        return view('smktkr.tanggalmasuk.juni', ['smktkr' => $smktkr]);
    }

    public function juli(Request $request)
    {
        $smktkr = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr WHERE `bulan`="Juli"');

        return view('smktkr.tanggalmasuk.juli', ['smktkr' => $smktkr]);
    }

    public function agustus(Request $request)
    {
        $smktkr = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr WHERE `bulan`="Agustus"');

        return view('smktkr.tanggalmasuk.agustus', ['smktkr' => $smktkr]);
    }

    public function september(Request $request)
    {
        $smktkr = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr WHERE `bulan`="September"');

        return view('smktkr.tanggalmasuk.september', ['smktkr' => $smktkr]);
    }

    public function oktober(Request $request)
    {
        $smktkr = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr WHERE `bulan`="Oktober"');

        return view('smktkr.tanggalmasuk.oktober', ['smktkr' => $smktkr]);
    }

    public function november(Request $request)
    {
        $smktkr = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr WHERE `bulan`="November"');

        return view('smktkr.tanggalmasuk.november', ['smktkr' => $smktkr]);
    }

    public function desember(Request $request)
    {
        $smktkr = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr WHERE `bulan`="Desember"');

        return view('smktkr.tanggalmasuk.desember', ['smktkr' => $smktkr]);
    }

}
