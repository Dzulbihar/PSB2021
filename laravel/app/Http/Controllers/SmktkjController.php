<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use App\Smktkj;

use App\Registrasi_smktkj;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SmktkjExport;
use App\Imports\SmktkjImport;

use Carbon\Carbon;

class SmktkjController extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smktkj = \App\Smktkj::where('namalengkap','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smktkj = \App\Smktkj::all();
        }
        return view('smktkj.index', ['data_smktkj' => $data_smktkj]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkj';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smktkj
        $request->request->add(['user_id' => $user->id ]);
        $smktkj = \App\Smktkj::create($request->all());
//tambah foto
        if($request->hasFile('avatar4')){
            $request->file('avatar4')->move('images/',$request->file('avatar4')->getClientOriginalName());
            $smktkj->avatar4 = $request->file('avatar4')->getClientOriginalName();
            $smktkj->save();
        }
//tambah foto        
        return redirect ('/smktkj')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smktkj = \App\Smktkj::find($id);
        return view('smktkj/edit', ['smktkj' => $smktkj]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkj';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smktkj = \App\Smktkj::find($id);
        $smktkj->update($request->all());
//tambah foto      
        if($request->hasFile('avatar4')){
            $request->file('avatar4')->move('images/',$request->file('avatar4')->getClientOriginalName());
            $smktkj->avatar4 = $request->file('avatar4')->getClientOriginalName();
            $smktkj->save();
        }
//tambah foto
        return redirect ('/smktkj')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->delete($smktkj);
        return redirect('/smktkj')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smktkj = \App\Smktkj::find($id);
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
            if($smktkj->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smktkj->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smktkj.profile',[ 'smktkj' => $smktkj, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmktkj)
    {
        //dd($request->all());
        $smktkj = \App\Smktkj::find($idsmktkj);
        if($smktkj->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smktkj/'.$idsmktkj.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smktkj->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smktkj/'.$idsmktkj.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmktkj)
    {
        //dd($request->all());
        $smktkj = \App\Smktkj::find($idsmktkj);

        $smktkj->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smktkj/'.$idsmktkj.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmktkj)
    {
        //dd($request->all());
        $smktkj = \App\Smktkj::find($idsmktkj);

        $smktkj->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smktkj/'.$idsmktkj.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmktkj)
    {
        //dd($request->all());
        $smktkj = \App\Smktkj::find($idsmktkj);

        $smktkj->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smktkj/'.$idsmktkj.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmktkj)
    {
        //dd($request->all());
        $smktkj = \App\Smktkj::find($idsmktkj);

        $smktkj->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smktkj/'.$idsmktkj.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmktkj)
    {
        //dd($request->all());
        $smktkj = \App\Smktkj::find($idsmktkj);

        $smktkj->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smktkj/'.$idsmktkj.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmktkj,$idmapel)
    {
        $smktkj = \App\Smktkj::find($idsmktkj);
        $smktkj->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmktkj,$idhukuman)
    {
        $smktkj = \App\Smktkj::find($idsmktkj);
        $smktkj->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new SmktkjExport, 'smktkj.xlsx');
    }


    public function smktkjimportexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmktkj', $namaFile);

        Excel::import(new SmktkjImport, public_path('/DataSmktkj/'.$namaFile));
        return redirect('/smktkj');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function seratusribu($id)
    {
        $smktkj = \App\Smktkj::find($id);
        $data_smktkj = \App\Smktkj::where('namalengkap')->get();

        $smktkj->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');

        return view('smktkj.seratusribu', ['smktkj' => $smktkj, 'data_smktkj' => $data_smktkj]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printsmktkj($id)
    {
        $smktkj = \App\Smktkj::find($id);
        $data_smktkj = \App\Smktkj::where('namalengkap')->get();

        $smktkj->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');
        //$smktkj->tbt1 = Carbon::now()->isoFormat('D MMMM Y');        

        return view('smktkj.printsmktkj', ['smktkj' => $smktkj, 'data_smktkj' => $data_smktkj]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmktkj() 
    {
        $smktkj = auth()->user()->smktkj;
        return view('smktkj.profilsaya', compact(['smktkj']));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function biayaawalmasuk($id)
    {

        $smktkj = \App\Smktkj::find($id);
//registrasi
        $uang = \App\Registrasi::all();

        return view('smktkj.biayaawalmasuk', ['smktkj' => $smktkj, 'uang' => $uang]);
    }

        public function addbiaya(Request $request ,$idsmktkj)
    {
        //dd($request->all());
        $smktkj = \App\Smktkj::find($idsmktkj);

        $smktkj->registrasi()->attach($request->registrasi, ['jalur' => $request->jalur, 'jenjang' => $request->jenjang, 'nama' => $request->nama, 'fasilitas' => $request->fasilitas, 'jenis_kelamin' => $request->jenis_kelamin, 'status' => $request->status, 'lunas' => $request->lunas, 'waktu' => $request->waktu, 'bayar' => $request->bayar, 'ukuran_batik' => $request->ukuran_batik, 'ukuran_olahraga' => $request->ukuran_olahraga, 'ukuran_jas' => $request->ukuran_jas]);

        return redirect('smktkj/'.$idsmktkj.'/biayaawalmasuk')->with('sukses', 'Data Biaya Awal Masuk berhasil dimasukkan');
    }

        public function deleteregistrasi($idsmktkj,$idregistrasi)
    {
        $smktkj = \App\Smktkj::find($idsmktkj);
        $smktkj->registrasi()->detach($idregistrasi);
        return redirect()->back()->with('sukses', 'Data Data Biaya Awal berhasil dihapus');
    }

    public function printregistrasismktkj($id)
    {
        $smktkj = \App\Smktkj::find($id);
        $data_smktkj = \App\Smktkj::where('namalengkap')->get();

        return view('smktkj.printregistrasismktkj', ['smktkj' => $smktkj, 'data_smktkj' => $data_smktkj]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function indexlakilaki(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi laki-laki
        $smktkj = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from smktkj WHERE `jenkel`="Laki-laki"');

        return view('smktkj.lakilaki', ['smktkj' => $smktkj]);
    }

    public function indexperempuan(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi perempuan
        $smktkj = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from smktkj WHERE `jenkel`="Perempuan"');

        return view('smktkj.perempuan', ['smktkj' => $smktkj]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function reguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $smktkj = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from smktkj WHERE `fasilitas`="Reguler"');

        return view('smktkj.reguler', ['smktkj' => $smktkj]);
    }

    public function nonreguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $smktkj = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from smktkj WHERE `fasilitas`="Non Reguler"');

        return view('smktkj.nonreguler', ['smktkj' => $smktkj]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function regulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $smktkj = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smktkj where `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

        return view('smktkj.regulerlk', ['smktkj' => $smktkj]);
    }

    public function nonregulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $smktkj = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smktkj where `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

        return view('smktkj.nonregulerlk', ['smktkj' => $smktkj]);
    }

    public function regulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $smktkj = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smktkj where `fasilitas`="Reguler" and `jenkel`="Perempuan"');

        return view('smktkj.regulerpr', ['smktkj' => $smktkj]);
    }

    public function nonregulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $smktkj = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smktkj where `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

        return view('smktkj.nonregulerpr', ['smktkj' => $smktkj]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function uang(Request $request)
    {
//// hanya menampilkan kolom status dan isi sudah segistrasi
        $registrasi_smktkj = DB::select('select `status`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from registrasi_smktkj where `status`="sudah registrasi"');

        return view('smktkj.uang', ['registrasi_smktkj' => $registrasi_smktkj]);
    }

    public function lunas(Request $request)
    {
//// hanya menampilkan kolom lunas dan isi sudah lunas
        $registrasi_smktkj = DB::select('select `lunas`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from registrasi_smktkj where `lunas`="sudah lunas"');

        return view('smktkj.lunas', ['registrasi_smktkj' => $registrasi_smktkj]);
    }

            public function uangregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smktkj = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smktkj where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('smktkj.uang.regulerlakilaki', ['registrasi_smktkj' => $registrasi_smktkj]);
            }

            public function uangregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smktkj = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smktkj where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Perempuan"');

                return view('smktkj.uang.regulerperempuan', ['registrasi_smktkj' => $registrasi_smktkj]);
            }

            public function uangnonregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smktkj = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smktkj where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('smktkj.uang.nonregulerlakilaki', ['registrasi_smktkj' => $registrasi_smktkj]);
            }

            public function uangnonregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smktkj = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smktkj where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Perempuan"');

                return view('smktkj.uang.nonregulerperempuan', ['registrasi_smktkj' => $registrasi_smktkj]);
            }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function tanggalmasuk(Request $request)
    {
//// hanya menampilkan kolom tanggal masuk 
        $smktkj = DB::select('select * from `smktkj`');

        return view('smktkj.tanggalmasuk', ['smktkj' => $smktkj]);
    }

    public function januari(Request $request)
    {
        $smktkj = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj WHERE `bulan`="Januari"');

        return view('smktkj.tanggalmasuk.januari', ['smktkj' => $smktkj]);
    }

    public function februari(Request $request)
    {
        $smktkj = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj WHERE `bulan`="Februari"');

        return view('smktkj.tanggalmasuk.februari', ['smktkj' => $smktkj]);
    }

    public function maret(Request $request)
    {
        $smktkj = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj WHERE `bulan`="Maret"');

        return view('smktkj.tanggalmasuk.maret', ['smktkj' => $smktkj]);
    }

    public function april(Request $request)
    {
        $smktkj = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj WHERE `bulan`="April"');

        return view('smktkj.tanggalmasuk.april', ['smktkj' => $smktkj]);
    }

    public function mei(Request $request)
    {
        $smktkj = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj WHERE `bulan`="Mei"');

        return view('smktkj.tanggalmasuk.mei', ['smktkj' => $smktkj]);
    }

    public function juni(Request $request)
    {
        $smktkj = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj WHERE `bulan`="Juni"');

        return view('smktkj.tanggalmasuk.juni', ['smktkj' => $smktkj]);
    }

    public function juli(Request $request)
    {
        $smktkj = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj WHERE `bulan`="Juli"');

        return view('smktkj.tanggalmasuk.juli', ['smktkj' => $smktkj]);
    }

    public function agustus(Request $request)
    {
        $smktkj = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj WHERE `bulan`="Agustus"');

        return view('smktkj.tanggalmasuk.agustus', ['smktkj' => $smktkj]);
    }

    public function september(Request $request)
    {
        $smktkj = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj WHERE `bulan`="September"');

        return view('smktkj.tanggalmasuk.september', ['smktkj' => $smktkj]);
    }

    public function oktober(Request $request)
    {
        $smktkj = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj WHERE `bulan`="Oktober"');

        return view('smktkj.tanggalmasuk.oktober', ['smktkj' => $smktkj]);
    }

    public function november(Request $request)
    {
        $smktkj = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj WHERE `bulan`="November"');

        return view('smktkj.tanggalmasuk.november', ['smktkj' => $smktkj]);
    }

    public function desember(Request $request)
    {
        $smktkj = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj WHERE `bulan`="Desember"');

        return view('smktkj.tanggalmasuk.desember', ['smktkj' => $smktkj]);
    }

}
