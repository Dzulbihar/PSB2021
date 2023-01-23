<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ma12;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Ma12Export;
use App\Imports\Ma12Import;


class Ma12Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_ma12 = \App\Ma12::where('namalengkap63','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_ma12 = \App\Ma12::all();
        }
        return view('ma12.index', ['data_ma12' => $data_ma12]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'ma12';
        $user->name = $request->namalengkap63;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel ma12
        $request->request->add(['user_id' => $user->id ]);
        $ma12 = \App\Ma12::create($request->all());
//tambah foto
        if($request->hasFile('avatar63')){
            $request->file('avatar63')->move('images/',$request->file('avatar63')->getClientOriginalName());
            $ma12->avatar63 = $request->file('avatar63')->getClientOriginalName();
            $ma12->save();
        }
//tambah foto        
        return redirect ('/ma12')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $ma12 = \App\Ma12::find($id);
        return view('ma12/edit', ['ma12' => $ma12]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'ma12';
        $user->name = $request->namalengkap63;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $ma12 = \App\Ma12::find($id);
        $ma12->update($request->all());
//tambah foto      
        if($request->hasFile('avatar63')){
            $request->file('avatar63')->move('images/',$request->file('avatar63')->getClientOriginalName());
            $ma12->avatar63 = $request->file('avatar63')->getClientOriginalName();
            $ma12->save();
        }
//tambah foto
        return redirect ('/ma12')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->delete($ma12);
        return redirect('/ma12')->with('sukses', 'Data berhasil di hapus');
    }


        public function profile($id)
    {
        $ma12 = \App\Ma12::find($id);
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
            if($ma12->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $ma12->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('ma12.profile',[ 'ma12' => $ma12, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idma12)
    {
        //dd($request->all());
        $ma12 = \App\Ma12::find($idma12);
        if($ma12->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('ma12/'.$idma12.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $ma12->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('ma12/'.$idma12.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idma12)
    {
        //dd($request->all());
        $ma12 = \App\Ma12::find($idma12);

        $ma12->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('ma12/'.$idma12.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idma12)
    {
        //dd($request->all());
        $ma12 = \App\Ma12::find($idma12);

        $ma12->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('ma12/'.$idma12.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idma12)
    {
        //dd($request->all());
        $ma12 = \App\Ma12::find($idma12);

        $ma12->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('ma12/'.$idma12.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idma12)
    {
        //dd($request->all());
        $ma12 = \App\Ma12::find($idma12);

        $ma12->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('ma12/'.$idma12.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idma12)
    {
        //dd($request->all());
        $ma12 = \App\Ma12::find($idma12);

        $ma12->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('ma12/'.$idma12.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idma12,$idmapel)
    {
        $ma12 = \App\Ma12::find($idma12);
        $ma12->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idma12,$idhukuman)
    {
        $ma12 = \App\Ma12::find($idma12);
        $ma12->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Ma12Export, 'ma12.xlsx');
    }


    public function ma12importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMa12', $namaFile);

        Excel::import(new Ma12Import, public_path('/DataMa12/'.$namaFile));
        return redirect('/ma12');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $ma12 = \App\Ma12::find($id);
        $data_ma12 = \App\Ma12::where('namalengkap63')->get();

        return view('ma12.printdatadiri', ['ma12' => $ma12, 'data_ma12' => $data_ma12]);
    }

    public function printmapel($id)
    {
        $ma12 = \App\Ma12::find($id);
        $data_ma12 = \App\Ma12::where('namalengkap63')->get();

        return view('ma12.printmapel', ['ma12' => $ma12, 'data_ma12' => $data_ma12]);
    }

    public function printhukuman($id)
    {
        $ma12 = \App\Ma12::find($id);
        $data_ma12 = \App\Ma12::where('namalengkap63')->get();

        return view('ma12.printhukuman', ['ma12' => $ma12, 'data_ma12' => $data_ma12]);
    }

    public function printizin($id)
    {
        $ma12 = \App\Ma12::find($id);
        $data_ma12 = \App\Ma12::where('namalengkap63')->get();

        return view('ma12.printizin', ['ma12' => $ma12, 'data_ma12' => $data_ma12]);
    }

    public function printambil($id)
    {
        $ma12 = \App\Ma12::find($id);
        $data_ma12 = \App\Ma12::where('namalengkap63')->get();

        return view('ma12.printambil', ['ma12' => $ma12, 'data_ma12' => $data_ma12]);
    }

    public function printprestasi($id)
    {
        $ma12 = \App\Ma12::find($id);
        $data_ma12 = \App\Ma12::where('namalengkap63')->get();

        return view('ma12.printprestasi', ['ma12' => $ma12, 'data_ma12' => $data_ma12]);
    }

    public function printcatatan($id)
    {
        $ma12 = \App\Ma12::find($id);
        $data_ma12 = \App\Ma12::where('namalengkap63')->get();

        return view('ma12.printcatatan', ['ma12' => $ma12, 'data_ma12' => $data_ma12]);
    }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayama12() 
    {
        $ma12 = auth()->user()->ma12;
        return view('ma12.profilsaya', compact(['ma12']));
    }

}
