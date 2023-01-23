<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ma11;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Ma11Export;
use App\Imports\Ma11Import;


class Ma11Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_ma11 = \App\Ma11::where('namalengkap62','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_ma11 = \App\Ma11::all();
        }
        return view('ma11.index', ['data_ma11' => $data_ma11]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'ma11';
        $user->name = $request->namalengkap62;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel ma11
        $request->request->add(['user_id' => $user->id ]);
        $ma11 = \App\Ma11::create($request->all());
//tambah foto
        if($request->hasFile('avatar62')){
            $request->file('avatar62')->move('images/',$request->file('avatar62')->getClientOriginalName());
            $ma11->avatar62 = $request->file('avatar62')->getClientOriginalName();
            $ma11->save();
        }
//tambah foto        
        return redirect ('/ma11')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $ma11 = \App\Ma11::find($id);
        return view('ma11/edit', ['ma11' => $ma11]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'ma11';
        $user->name = $request->namalengkap62;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $ma11 = \App\Ma11::find($id);
        $ma11->update($request->all());
//tambah foto      
        if($request->hasFile('avatar62')){
            $request->file('avatar62')->move('images/',$request->file('avatar62')->getClientOriginalName());
            $ma11->avatar62 = $request->file('avatar62')->getClientOriginalName();
            $ma11->save();
        }
//tambah foto
        return redirect ('/ma11')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->delete($ma11);
        return redirect('/ma11')->with('sukses', 'Data berhasil di hapus');
    }


        public function profile($id)
    {
        $ma11 = \App\Ma11::find($id);
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
            if($ma11->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $ma11->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('ma11.profile',[ 'ma11' => $ma11, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idma11)
    {
        //dd($request->all());
        $ma11 = \App\Ma11::find($idma11);
        if($ma11->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('ma11/'.$idma11.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $ma11->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('ma11/'.$idma11.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idma11)
    {
        //dd($request->all());
        $ma11 = \App\Ma11::find($idma11);

        $ma11->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('ma11/'.$idma11.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idma11)
    {
        //dd($request->all());
        $ma11 = \App\Ma11::find($idma11);

        $ma11->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('ma11/'.$idma11.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idma11)
    {
        //dd($request->all());
        $ma11 = \App\Ma11::find($idma11);

        $ma11->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('ma11/'.$idma11.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idma11)
    {
        //dd($request->all());
        $ma11 = \App\Ma11::find($idma11);

        $ma11->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('ma11/'.$idma11.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idma11)
    {
        //dd($request->all());
        $ma11 = \App\Ma11::find($idma11);

        $ma11->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('ma11/'.$idma11.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idma11,$idmapel)
    {
        $ma11 = \App\Ma11::find($idma11);
        $ma11->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idma11,$idhukuman)
    {
        $ma11 = \App\Ma11::find($idma11);
        $ma11->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Ma11Export, 'ma11.xlsx');
    }


    public function ma11importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMa11', $namaFile);

        Excel::import(new Ma11Import, public_path('/DataMa11/'.$namaFile));
        return redirect('/ma11');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $ma11 = \App\Ma11::find($id);
        $data_ma11 = \App\Ma11::where('namalengkap62')->get();

        return view('ma11.printdatadiri', ['ma11' => $ma11, 'data_ma11' => $data_ma11]);
    }

    public function printmapel($id)
    {
        $ma11 = \App\Ma11::find($id);
        $data_ma11 = \App\Ma11::where('namalengkap62')->get();

        return view('ma11.printmapel', ['ma11' => $ma11, 'data_ma11' => $data_ma11]);
    }

    public function printhukuman($id)
    {
        $ma11 = \App\Ma11::find($id);
        $data_ma11 = \App\Ma11::where('namalengkap62')->get();

        return view('ma11.printhukuman', ['ma11' => $ma11, 'data_ma11' => $data_ma11]);
    }

    public function printizin($id)
    {
        $ma11 = \App\Ma11::find($id);
        $data_ma11 = \App\Ma11::where('namalengkap62')->get();

        return view('ma11.printizin', ['ma11' => $ma11, 'data_ma11' => $data_ma11]);
    }

    public function printambil($id)
    {
        $ma11 = \App\Ma11::find($id);
        $data_ma11 = \App\Ma11::where('namalengkap62')->get();

        return view('ma11.printambil', ['ma11' => $ma11, 'data_ma11' => $data_ma11]);
    }

    public function printprestasi($id)
    {
        $ma11 = \App\Ma11::find($id);
        $data_ma11 = \App\Ma11::where('namalengkap62')->get();

        return view('ma11.printprestasi', ['ma11' => $ma11, 'data_ma11' => $data_ma11]);
    }

    public function printcatatan($id)
    {
        $ma11 = \App\Ma11::find($id);
        $data_ma11 = \App\Ma11::where('namalengkap62')->get();

        return view('ma11.printcatatan', ['ma11' => $ma11, 'data_ma11' => $data_ma11]);
    }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayama11() 
    {
        $ma11 = auth()->user()->ma11;
        return view('ma11.profilsaya', compact(['ma11']));
    }
}
