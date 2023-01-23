<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use App\Smp2;

use App\Registrasi_smp2;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smp2Export;
use App\Imports\Smp2Import;

use Carbon\Carbon;

class Smp2Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smp2 = \App\Smp2::where('namalengkap','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smp2 = \App\Smp2::all();
        }
        return view('smp2.index', ['data_smp2' => $data_smp2]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp2';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smp2
        $request->request->add(['user_id' => $user->id ]);
        $smp2 = \App\Smp2::create($request->all());
//tambah foto
        if($request->hasFile('avatar2')){
            $request->file('avatar2')->move('images/',$request->file('avatar2')->getClientOriginalName());
            $smp2->avatar2 = $request->file('avatar2')->getClientOriginalName();
            $smp2->save();
        }
//tambah foto        
        return redirect ('/smp2')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smp2 = \App\Smp2::find($id);
        return view('smp2/edit', ['smp2' => $smp2]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp2';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smp2 = \App\Smp2::find($id);
        $smp2->update($request->all());
//tambah foto      
        if($request->hasFile('avatar2')){
            $request->file('avatar2')->move('images/',$request->file('avatar2')->getClientOriginalName());
            $smp2->avatar2 = $request->file('avatar2')->getClientOriginalName();
            $smp2->save();
        }
//tambah foto
        return redirect ('/smp2')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->delete($smp2);
        return redirect('/smp2')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smp2 = \App\Smp2::find($id);
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
            if($smp2->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smp2->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smp2.profile',[ 'smp2' => $smp2, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmp2)
    {
        //dd($request->all());
        $smp2 = \App\Smp2::find($idsmp2);
        if($smp2->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smp2/'.$idsmp2.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smp2->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smp2/'.$idsmp2.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmp2)
    {
        //dd($request->all());
        $smp2 = \App\Smp2::find($idsmp2);

        $smp2->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'data' => $request->data]);

        return redirect('smp2/'.$idsmp2.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmp2)
    {
        //dd($request->all());
        $smp2 = \App\Smp2::find($idsmp2);

        $smp2->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smp2/'.$idsmp2.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmp2)
    {
        //dd($request->all());
        $smp2 = \App\Smp2::find($idsmp2);

        $smp2->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smp2/'.$idsmp2.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmp2)
    {
        //dd($request->all());
        $smp2 = \App\Smp2::find($idsmp2);

        $smp2->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smp2/'.$idsmp2.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmp2)
    {
        //dd($request->all());
        $smp2 = \App\Smp2::find($idsmp2);

        $smp2->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smp2/'.$idsmp2.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmp2,$idmapel)
    {
        $smp2 = \App\Smp2::find($idsmp2);
        $smp2->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmp2,$idhukuman)
    {
        $smp2 = \App\Smp2::find($idsmp2);
        $smp2->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smp2Export, 'smp2.xlsx');
    }


    public function smp2importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmp2', $namaFile);

        Excel::import(new Smp2Import, public_path('/DataSmp2/'.$namaFile));
        return redirect('/smp2');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function seratusribu($id)
    {
        $smp2 = \App\Smp2::find($id);
        $data_smp2 = \App\Smp2::where('namalengkap')->get();

        $smp2->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');

        return view('smp2.seratusribu', ['smp2' => $smp2, 'data_smp2' => $data_smp2]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printsmp2($id)
    {
        $smp2 = \App\Smp2::find($id);
        $data_smp2 = \App\Smp2::where('namalengkap')->get();

        $smp2->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');
        //$smp2->tbt1 = Carbon::now()->isoFormat('D MMMM Y');        

        return view('smp2.printsmp2', ['smp2' => $smp2, 'data_smp2' => $data_smp2]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmp2() 
    {
        $smp2 = auth()->user()->smp2;
        return view('smp2.profilsaya', compact(['smp2']));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function biayaawalmasuk($id)
    {

        $smp2 = \App\Smp2::find($id);
//registrasi
        $uang = \App\Registrasi::all();

        return view('smp2.biayaawalmasuk', ['smp2' => $smp2, 'uang' => $uang]);
    }

        public function addbiaya(Request $request ,$idsmp2)
    {
        //dd($request->all());
        $smp2 = \App\Smp2::find($idsmp2);

        $smp2->registrasi()->attach($request->registrasi, ['jalur' => $request->jalur, 'jenjang' => $request->jenjang, 'nama' => $request->nama, 'fasilitas' => $request->fasilitas, 'jenis_kelamin' => $request->jenis_kelamin, 'status' => $request->status, 'lunas' => $request->lunas, 'waktu' => $request->waktu, 'bayar' => $request->bayar, 'ukuran_batik' => $request->ukuran_batik, 'ukuran_olahraga' => $request->ukuran_olahraga, 'ukuran_jas' => $request->ukuran_jas]);

        return redirect('smp2/'.$idsmp2.'/biayaawalmasuk')->with('sukses', 'Data Biaya Awal Masuk berhasil dimasukkan');
    }

        public function deleteregistrasi($idsmp2,$idregistrasi)
    {
        $smp2 = \App\Smp2::find($idsmp2);
        $smp2->registrasi()->detach($idregistrasi);
        return redirect()->back()->with('sukses', 'Data Data Biaya Awal berhasil dihapus');
    }

    public function printregistrasismp2($id)
    {
        $smp2 = \App\Smp2::find($id);
        $data_smp2 = \App\Smp2::where('namalengkap')->get();

        return view('smp2.printregistrasismp2', ['smp2' => $smp2, 'data_smp2' => $data_smp2]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function indexlakilaki(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi laki-laki
        $smp2 = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from smp2 WHERE `jenkel`="Laki-laki"');

        return view('smp2.lakilaki', ['smp2' => $smp2]);
    }

    public function indexperempuan(Request $request)
    {
//// hanya menampilkan kolom jenkel dan isi perempuan
        $smp2 = DB::select('select `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` from smp2 WHERE `jenkel`="Perempuan"');

        return view('smp2.perempuan', ['smp2' => $smp2]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function reguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $smp2 = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from smp2 WHERE `fasilitas`="Reguler"');

        return view('smp2.reguler', ['smp2' => $smp2]);
    }

    public function nonreguler(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $smp2 = DB::select('select `fasilitas`,`created_at`,`status`,`namalengkap`,`jenkel`,`desa`,`kec`,`kab`,`prov` from smp2 WHERE `fasilitas`="Non Reguler"');

        return view('smp2.nonreguler', ['smp2' => $smp2]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function regulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $smp2 = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smp2 where `fasilitas`="Reguler" and `jenkel`="Laki-laki"');

        return view('smp2.regulerlk', ['smp2' => $smp2]);
    }

    public function nonregulerlk(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $smp2 = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smp2 where `fasilitas`="Non Reguler" and `jenkel`="Laki-laki"');

        return view('smp2.nonregulerlk', ['smp2' => $smp2]);
    }

    public function regulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Reguler
        $smp2 = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smp2 where `fasilitas`="Reguler" and `jenkel`="Perempuan"');

        return view('smp2.regulerpr', ['smp2' => $smp2]);
    }

    public function nonregulerpr(Request $request)
    {
//// hanya menampilkan kolom fasilitas dan isi Non Reguler
        $smp2 = DB::select('select `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` from smp2 where `fasilitas`="Non Reguler" and `jenkel`="Perempuan"');

        return view('smp2.nonregulerpr', ['smp2' => $smp2]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function uang(Request $request)
    {
//// hanya menampilkan kolom status dan isi sudah segistrasi
        $registrasi_smp2 = DB::select('select `status`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from registrasi_smp2 where `status`="sudah registrasi"');

        return view('smp2.uang', ['registrasi_smp2' => $registrasi_smp2]);
    }

    public function lunas(Request $request)
    {
//// hanya menampilkan kolom lunas dan isi sudah lunas
        $registrasi_smp2 = DB::select('select `lunas`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` from registrasi_smp2 where `lunas`="sudah lunas"');

        return view('smp2.lunas', ['registrasi_smp2' => $registrasi_smp2]);
    }

            public function uangregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smp2 = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smp2 where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('smp2.uang.regulerlakilaki', ['registrasi_smp2' => $registrasi_smp2]);
            }

            public function uangregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smp2 = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smp2 where `status`="sudah registrasi" and `fasilitas`="Reguler" and `jenis_kelamin`="Perempuan"');

                return view('smp2.uang.regulerperempuan', ['registrasi_smp2' => $registrasi_smp2]);
            }

            public function uangnonregulerlakilaki(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smp2 = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smp2 where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Laki-laki"');

                return view('smp2.uang.nonregulerlakilaki', ['registrasi_smp2' => $registrasi_smp2]);
            }

            public function uangnonregulerperempuan(Request $request)
            {
        //// hanya menampilkan kolom status dan isi sudah segistrasi
                $registrasi_smp2 = DB::select('select `fasilitas`, `jenis_kelamin`, `status`, `jenjang`, `nama`, `created_at` from registrasi_smp2 where `status`="sudah registrasi" and `fasilitas`="Non Reguler" and `jenis_kelamin`="Perempuan"');

                return view('smp2.uang.nonregulerperempuan', ['registrasi_smp2' => $registrasi_smp2]);
            }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function tanggalmasuk(Request $request)
    {
//// hanya menampilkan kolom tanggal masuk 
        $smp2 = DB::select('select * from `smp2`');

        return view('smp2.tanggalmasuk', ['smp2' => $smp2]);
    }

    public function januari(Request $request)
    {
        $smp2 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2 WHERE `bulan`="Januari"');

        return view('smp2.tanggalmasuk.januari', ['smp2' => $smp2]);
    }

    public function februari(Request $request)
    {
        $smp2 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2 WHERE `bulan`="Februari"');

        return view('smp2.tanggalmasuk.februari', ['smp2' => $smp2]);
    }

    public function maret(Request $request)
    {
        $smp2 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2 WHERE `bulan`="Maret"');

        return view('smp2.tanggalmasuk.maret', ['smp2' => $smp2]);
    }

    public function april(Request $request)
    {
        $smp2 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2 WHERE `bulan`="April"');

        return view('smp2.tanggalmasuk.april', ['smp2' => $smp2]);
    }

    public function mei(Request $request)
    {
        $smp2 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2 WHERE `bulan`="Mei"');

        return view('smp2.tanggalmasuk.mei', ['smp2' => $smp2]);
    }

    public function juni(Request $request)
    {
        $smp2 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2 WHERE `bulan`="Juni"');

        return view('smp2.tanggalmasuk.juni', ['smp2' => $smp2]);
    }

    public function juli(Request $request)
    {
        $smp2 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2 WHERE `bulan`="Juli"');

        return view('smp2.tanggalmasuk.juli', ['smp2' => $smp2]);
    }

    public function agustus(Request $request)
    {
        $smp2 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2 WHERE `bulan`="Agustus"');

        return view('smp2.tanggalmasuk.agustus', ['smp2' => $smp2]);
    }

    public function september(Request $request)
    {
        $smp2 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2 WHERE `bulan`="September"');

        return view('smp2.tanggalmasuk.september', ['smp2' => $smp2]);
    }

    public function oktober(Request $request)
    {
        $smp2 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2 WHERE `bulan`="Oktober"');

        return view('smp2.tanggalmasuk.oktober', ['smp2' => $smp2]);
    }

    public function november(Request $request)
    {
        $smp2 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2 WHERE `bulan`="November"');

        return view('smp2.tanggalmasuk.november', ['smp2' => $smp2]);
    }

    public function desember(Request $request)
    {
        $smp2 = DB::select('select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2 WHERE `bulan`="Desember"');

        return view('smp2.tanggalmasuk.desember', ['smp2' => $smp2]);
    }

}
