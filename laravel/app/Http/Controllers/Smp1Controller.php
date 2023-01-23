<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use App\Smp1;
use App\Registrasi_smp1;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smp1Export;
use App\Imports\Smp1Import;

use Carbon\Carbon;

class Smp1Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smp1 = \App\Smp1::where('namalengkap','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smp1 = \App\Smp1::all();
        }
        return view('smp1.index', ['data_smp1' => $data_smp1]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp1';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smp1
        $request->request->add(['user_id' => $user->id ]);
        $smp1 = \App\Smp1::create($request->all());
//tambah foto
        if($request->hasFile('avatar1')){
            $request->file('avatar1')->move('images/',$request->file('avatar1')->getClientOriginalName());
            $smp1->avatar1 = $request->file('avatar1')->getClientOriginalName();
            $smp1->save();
        }
//tambah foto        
        return redirect ('/smp1')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smp1 = \App\Smp1::find($id);
        return view('smp1/edit', ['smp1' => $smp1]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp1';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smp1 = \App\Smp1::find($id);
        $smp1->update($request->all());
//tambah foto      
        if($request->hasFile('avatar1')){
            $request->file('avatar1')->move('images/',$request->file('avatar1')->getClientOriginalName());
            $smp1->avatar1 = $request->file('avatar1')->getClientOriginalName();
            $smp1->save();
        }
//tambah foto
        return redirect ('/smp1')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->delete($smp1);
        return redirect('/smp1')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smp1 = \App\Smp1::find($id);
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
            if($smp1->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smp1->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smp1.profile',[ 'smp1' => $smp1, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmp1)
    {
        //dd($request->all());
        $smp1 = \App\Smp1::find($idsmp1);
        if($smp1->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smp1/'.$idsmp1.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smp1->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smp1/'.$idsmp1.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmp1)
    {
        //dd($request->all());
        $smp1 = \App\Smp1::find($idsmp1);

        $smp1->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smp1/'.$idsmp1.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmp1)
    {
        //dd($request->all());
        $smp1 = \App\Smp1::find($idsmp1);

        $smp1->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smp1/'.$idsmp1.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmp1)
    {
        //dd($request->all());
        $smp1 = \App\Smp1::find($idsmp1);

        $smp1->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smp1/'.$idsmp1.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmp1)
    {
        //dd($request->all());
        $smp1 = \App\Smp1::find($idsmp1);

        $smp1->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smp1/'.$idsmp1.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmp1)
    {
        //dd($request->all());
        $smp1 = \App\Smp1::find($idsmp1);

        $smp1->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smp1/'.$idsmp1.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmp1,$idmapel)
    {
        $smp1 = \App\Smp1::find($idsmp1);
        $smp1->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmp1,$idhukuman)
    {
        $smp1 = \App\Smp1::find($idsmp1);
        $smp1->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smp1Export, 'smp1.xlsx');
    }


    public function smp1importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmp1', $namaFile);

        Excel::import(new Smp1Import, public_path('/DataSmp1/'.$namaFile));
        return redirect('/smp1');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function seratusribu($id)
    {
        $smp1 = \App\Smp1::find($id);
        $data_smp1 = \App\Smp1::where('namalengkap')->get();

        $smp1->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');

        return view('smp1.seratusribu', ['smp1' => $smp1, 'data_smp1' => $data_smp1]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printsmp1($id)
    {
        $smp1 = \App\Smp1::find($id);
        $data_smp1 = \App\Smp1::where('namalengkap')->get();

        $smp1->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');
        //$smp1->tbt1 = Carbon::now()->isoFormat('D MMMM Y');



        return view('smp1.printsmp1', ['smp1' => $smp1, 'data_smp1' => $data_smp1]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmp1() 
    {
        $smp1 = auth()->user()->smp1;
        return view('smp1.profilsaya', compact(['smp1']));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function biayaawalmasuk($id)
    {

        $smp1 = \App\Smp1::find($id);
//registrasi
        $uang = \App\Registrasi::all();

        return view('smp1.biayaawalmasuk', ['smp1' => $smp1, 'uang' => $uang]);
    }

        public function addbiaya(Request $request ,$idsmp1)
    {
        //dd($request->all());
        $smp1 = \App\Smp1::find($idsmp1);

        $smp1->registrasi()->attach($request->registrasi, ['jalur' => $request->jalur, 'jenjang' => $request->jenjang, 'nama' => $request->nama, 'fasilitas' => $request->fasilitas, 'jenis_kelamin' => $request->jenis_kelamin, 'status' => $request->status, 'lunas' => $request->lunas, 'waktu' => $request->waktu, 'bayar' => $request->bayar, 'ukuran_batik' => $request->ukuran_batik, 'ukuran_olahraga' => $request->ukuran_olahraga, 'ukuran_jas' => $request->ukuran_jas, 'created_at' => $request->created_at]);

        return redirect('smp1/'.$idsmp1.'/biayaawalmasuk')->with('sukses', 'Data Biaya Awal Masuk berhasil dimasukkan');
    }

        public function deleteregistrasi($idsmp1,$idregistrasi)
    {
        $smp1 = \App\Smp1::find($idsmp1);
        $smp1->registrasi()->detach($idregistrasi);
        return redirect()->back()->with('sukses', 'Data Data Biaya Awal berhasil dihapus');
    }

    public function printregistrasismp1($id)
    {
        $smp1 = \App\Smp1::find($id);
        $data_smp1 = \App\Smp1::where('namalengkap')->get();

        return view('smp1.printregistrasismp1', ['smp1' => $smp1, 'data_smp1' => $data_smp1]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function indexlakilaki(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi laki-laki
        $smp1 = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from smp1 WHERE `jenkel`="Laki-laki"');

        return view('smp1.lakilaki', ['smp1' => $smp1]);
    }

    public function indexperempuan(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi perempuan
        $smp1 = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from smp1 WHERE `jenkel`="Perempuan"');

        return view('smp1.perempuan', ['smp1' => $smp1]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function reguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $smp1 = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from smp1 WHERE `fasilitas`="Reguler"');

        return view('smp1.reguler', ['smp1' => $smp1]);
    }

    public function nonreguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $smp1 = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from smp1 WHERE `fasilitas`="Non Reguler"');

        return view('smp1.nonreguler', ['smp1' => $smp1]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function regulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $smp1 = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smp1 where `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

        return view('smp1.regulerlk', ['smp1' => $smp1]);
    }

    public function nonregulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $smp1 = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smp1 where `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

        return view('smp1.nonregulerlk', ['smp1' => $smp1]);
    }

    public function regulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $smp1 = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smp1 where `fasilitas`="Reguler" and `jenkel`="Perempuan"');

        return view('smp1.regulerpr', ['smp1' => $smp1]);
    }

    public function nonregulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $smp1 = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smp1 where `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

        return view('smp1.nonregulerpr', ['smp1' => $smp1]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function uang(Request $request)
    {
//// hanya menampilkan kolom status dan isi sudah segistrasi
        $registrasi_smp1 = DB::select('select `status`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from registrasi_smp1 where `status`="sudah registrasi"');

        return view('smp1.uang', ['registrasi_smp1' => $registrasi_smp1]);
    }

    public function lunas(Request $request)
    {
//// hanya menampilkan kolom lunas dan isi sudah lunas
        $registrasi_smp1 = DB::select('select `lunas`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from registrasi_smp1 where `lunas`="sudah lunas"');

        return view('smp1.lunas', ['registrasi_smp1' => $registrasi_smp1]);
    }

            public function uangregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smp1 = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smp1 where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('smp1.uang.regulerlakilaki', ['registrasi_smp1' => $registrasi_smp1]);
            }

            public function uangregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smp1 = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smp1 where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Perempuan"');

                return view('smp1.uang.regulerperempuan', ['registrasi_smp1' => $registrasi_smp1]);
            }

            public function uangnonregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smp1 = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smp1 where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('smp1.uang.nonregulerlakilaki', ['registrasi_smp1' => $registrasi_smp1]);
            }

            public function uangnonregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smp1 = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smp1 where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Perempuan"');

                return view('smp1.uang.nonregulerperempuan', ['registrasi_smp1' => $registrasi_smp1]);
            }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function tanggalmasuk(Request $request)
    {
//// hanya menampilkan kolom tanggal masuk 
        $smp1 = DB::select('select * from `smp1`');

        return view('smp1.tanggalmasuk', ['smp1' => $smp1]);
    }

    public function januari(Request $request)
    {
        $smp1 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1 WHERE `bulan`="Januari"');

        return view('smp1.tanggalmasuk.januari', ['smp1' => $smp1]);
    }

    public function februari(Request $request)
    {
        $smp1 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1 WHERE `bulan`="Februari"');

        return view('smp1.tanggalmasuk.februari', ['smp1' => $smp1]);
    }

    public function maret(Request $request)
    {
        $smp1 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1 WHERE `bulan`="Maret"');

        return view('smp1.tanggalmasuk.maret', ['smp1' => $smp1]);
    }

    public function april(Request $request)
    {
        $smp1 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1 WHERE `bulan`="April"');

        return view('smp1.tanggalmasuk.april', ['smp1' => $smp1]);
    }

    public function mei(Request $request)
    {
        $smp1 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1 WHERE `bulan`="Mei"');

        return view('smp1.tanggalmasuk.mei', ['smp1' => $smp1]);
    }

    public function juni(Request $request)
    {
        $smp1 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1 WHERE `bulan`="Juni"');

        return view('smp1.tanggalmasuk.juni', ['smp1' => $smp1]);
    }

    public function juli(Request $request)
    {
        $smp1 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1 WHERE `bulan`="Juli"');

        return view('smp1.tanggalmasuk.juli', ['smp1' => $smp1]);
    }

    public function agustus(Request $request)
    {
        $smp1 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1 WHERE `bulan`="Agustus"');

        return view('smp1.tanggalmasuk.agustus', ['smp1' => $smp1]);
    }

    public function september(Request $request)
    {
        $smp1 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1 WHERE `bulan`="September"');

        return view('smp1.tanggalmasuk.september', ['smp1' => $smp1]);
    }

    public function oktober(Request $request)
    {
        $smp1 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1 WHERE `bulan`="Oktober"');

        return view('smp1.tanggalmasuk.oktober', ['smp1' => $smp1]);
    }

    public function november(Request $request)
    {
        $smp1 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1 WHERE `bulan`="November"');

        return view('smp1.tanggalmasuk.november', ['smp1' => $smp1]);
    }

    public function desember(Request $request)
    {
        $smp1 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1 WHERE `bulan`="Desember"');

        return view('smp1.tanggalmasuk.desember', ['smp1' => $smp1]);
    }




}
