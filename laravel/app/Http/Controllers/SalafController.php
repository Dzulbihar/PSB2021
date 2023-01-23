<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Salaf;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SalafExport;
use App\Imports\SalafImport;

use Carbon\Carbon;

class SalafController extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_salaf = \App\Salaf::where('namalengkap0','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_salaf = \App\Salaf::all();
        }
        return view('salaf.index', ['data_salaf' => $data_salaf]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'salaf';
        $user->name = $request->namalengkap0;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel salaf
        $request->request->add(['user_id' => $user->id ]);
        $salaf = \App\Salaf::create($request->all());
//tambah foto
        if($request->hasFile('avatar0')){
            $request->file('avatar0')->move('images/',$request->file('avatar0')->getClientOriginalName());
            $salaf->avatar0 = $request->file('avatar0')->getClientOriginalName();
            $salaf->save();
        }
//tambah foto        
        return redirect ('/salaf')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $salaf = \App\Salaf::find($id);
        return view('salaf/edit', ['salaf' => $salaf]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'salaf';
        $user->name = $request->namalengkap0;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $salaf = \App\Salaf::find($id);
        $salaf->update($request->all());
//tambah foto      
        if($request->hasFile('avatar0')){
            $request->file('avatar0')->move('images/',$request->file('avatar0')->getClientOriginalName());
            $salaf->avatar0 = $request->file('avatar0')->getClientOriginalName();
            $salaf->save();
        }
//tambah foto
        return redirect ('/salaf')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->delete($salaf);
        return redirect('/salaf')->with('sukses', 'Data berhasil di hapus');
    }

    public function profile($id)
    {
        $salaf = \App\Salaf::find($id);
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
            if($salaf->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $salaf->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('salaf.profile',[ 'salaf' => $salaf, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsalaf)
    {
        //dd($request->all());
        $salaf = \App\Salaf::find($idsalaf);
        if($salaf->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('salaf/'.$idsalaf.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $salaf->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('salaf/'.$idsalaf.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsalaf)
    {
        //dd($request->all());
        $salaf = \App\Salaf::find($idsalaf);

        $salaf->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('salaf/'.$idsalaf.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsalaf)
    {
        //dd($request->all());
        $salaf = \App\Salaf::find($idsalaf);

        $salaf->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('salaf/'.$idsalaf.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsalaf)
    {
        //dd($request->all());
        $salaf = \App\Salaf::find($idsalaf);

        $salaf->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('salaf/'.$idsalaf.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsalaf)
    {
        //dd($request->all());
        $salaf = \App\Salaf::find($idsalaf);

        $salaf->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('salaf/'.$idsalaf.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsalaf)
    {
        //dd($request->all());
        $salaf = \App\Salaf::find($idsalaf);

        $salaf->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('salaf/'.$idsalaf.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsalaf,$idmapel)
    {
        $salaf = \App\Salaf::find($idsalaf);
        $salaf->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsalaf,$idhukuman)
    {
        $salaf = \App\Salaf::find($idsalaf);
        $salaf->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new SalafExport, 'salaf.xlsx');
    }


    public function salafimportexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSalaf', $namaFile);

        Excel::import(new SalafImport, public_path('/DataSalaf/'.$namaFile));
        return redirect('/salaf');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function seratusribu($id)
    {
        $salaf = \App\Salaf::find($id);
        $data_salaf = \App\Salaf::where('namalengkap0')->get();

        $salaf->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');

        return view('salaf.seratusribu', ['salaf' => $salaf, 'data_salaf' => $data_salaf]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printsalaf($id)
    {
        $salaf = \App\Salaf::find($id);
        $data_salaf = \App\Salaf::where('namalengkap0')->get();

        $salaf->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');
        $salaf->tbt1 = Carbon::now()->isoFormat('D MMMM Y');        

        return view('salaf.printsalaf', ['salaf' => $salaf, 'data_salaf' => $data_salaf]);
    }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $salaf = \App\Salaf::find($id);
        $data_salaf = \App\Salaf::where('namalengkap0')->get();

        return view('salaf.printdatadiri', ['salaf' => $salaf, 'data_salaf' => $data_salaf]);
    }

    public function printmapel($id)
    {
        $salaf = \App\Salaf::find($id);
        $data_salaf = \App\Salaf::where('namalengkap0')->get();

        return view('salaf.printmapel', ['salaf' => $salaf, 'data_salaf' => $data_salaf]);
    }

    public function printhukuman($id)
    {
        $salaf = \App\Salaf::find($id);
        $data_salaf = \App\Salaf::where('namalengkap0')->get();

        return view('salaf.printhukuman', ['salaf' => $salaf, 'data_salaf' => $data_salaf]);
    }

    public function printizin($id)
    {
        $salaf = \App\Salaf::find($id);
        $data_salaf = \App\Salaf::where('namalengkap0')->get();

        return view('salaf.printizin', ['salaf' => $salaf, 'data_salaf' => $data_salaf]);
    }

    public function printambil($id)
    {
        $salaf = \App\Salaf::find($id);
        $data_salaf = \App\Salaf::where('namalengkap0')->get();

        return view('salaf.printambil', ['salaf' => $salaf, 'data_salaf' => $data_salaf]);
    }

    public function printprestasi($id)
    {
        $salaf = \App\Salaf::find($id);
        $data_salaf = \App\Salaf::where('namalengkap0')->get();

        return view('salaf.printprestasi', ['salaf' => $salaf, 'data_salaf' => $data_salaf]);
    }

    public function printcatatan($id)
    {
        $salaf = \App\Salaf::find($id);
        $data_salaf = \App\Salaf::where('namalengkap0')->get();

        return view('salaf.printcatatan', ['salaf' => $salaf, 'data_salaf' => $data_salaf]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasalaf() 
    {
        $salaf = auth()->user()->salaf;
        return view('salaf.profilsaya', compact(['salaf']));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function biayaawalmasuk($id)
    {

        $salaf = \App\Salaf::find($id);
//registrasi
        $uang = \App\Registrasi::all();

        return view('salaf.biayaawalmasuk', ['salaf' => $salaf, 'uang' => $uang]);
    }

        public function addbiaya(Request $request ,$idsalaf)
    {
        //dd($request->all());
        $salaf = \App\Salaf::find($idsalaf);

        $salaf->registrasi()->attach($request->registrasi, ['waktu' => $request->waktu, 'bayar' => $request->bayar]);

        return redirect('salaf/'.$idsalaf.'/biayaawalmasuk')->with('sukses', 'Data Biaya Awal Masuk berhasil dimasukkan');
    }

        public function deleteregistrasi($idsalaf,$idregistrasi)
    {
        $salaf = \App\Salaf::find($idsalaf);
        $salaf->registrasi()->detach($idregistrasi);
        return redirect()->back()->with('sukses', 'Data Data Biaya Awal berhasil dihapus');
    }

    public function printregistrasisalaf($id)
    {
        $salaf = \App\Salaf::find($id);
        $data_salaf = \App\Salaf::where('namalengkap0')->get();

        return view('salaf.printregistrasisalaf', ['salaf' => $salaf, 'data_salaf' => $data_salaf]);
    }

}
