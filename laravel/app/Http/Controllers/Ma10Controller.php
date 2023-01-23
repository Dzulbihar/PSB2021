<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ma10;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Ma10Export;
use App\Imports\Ma10Import;


class Ma10Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_ma10 = \App\Ma10::where('namalengkap61','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_ma10 = \App\Ma10::all();
        }
        return view('ma10.index', ['data_ma10' => $data_ma10]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'ma10';
        $user->name = $request->namalengkap61;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel ma10
        $request->request->add(['user_id' => $user->id ]);
        $ma10 = \App\Ma10::create($request->all());
//tambah foto
        if($request->hasFile('avatar61')){
            $request->file('avatar61')->move('images/',$request->file('avatar61')->getClientOriginalName());
            $ma10->avatar61 = $request->file('avatar61')->getClientOriginalName();
            $ma10->save();
        }
//tambah foto        
        return redirect ('/ma10')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $ma10 = \App\Ma10::find($id);
        return view('ma10/edit', ['ma10' => $ma10]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'ma10';
        $user->name = $request->namalengkap61;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $ma10 = \App\Ma10::find($id);
        $ma10->update($request->all());
//tambah foto      
        if($request->hasFile('avatar61')){
            $request->file('avatar61')->move('images/',$request->file('avatar61')->getClientOriginalName());
            $ma10->avatar61 = $request->file('avatar61')->getClientOriginalName();
            $ma10->save();
        }
//tambah foto
        return redirect ('/ma10')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->delete($ma10);
        return redirect('/ma10')->with('sukses', 'Data berhasil di hapus');
    }


        public function profile($id)
    {
        $ma10 = \App\Ma10::find($id);
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
            if($ma10->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $ma10->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('ma10.profile',[ 'ma10' => $ma10, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idma10)
    {
        //dd($request->all());
        $ma10 = \App\Ma10::find($idma10);
        if($ma10->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('ma10/'.$idma10.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $ma10->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('ma10/'.$idma10.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idma10)
    {
        //dd($request->all());
        $ma10 = \App\Ma10::find($idma10);

        $ma10->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('ma10/'.$idma10.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idma10)
    {
        //dd($request->all());
        $ma10 = \App\Ma10::find($idma10);

        $ma10->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('ma10/'.$idma10.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idma10)
    {
        //dd($request->all());
        $ma10 = \App\Ma10::find($idma10);

        $ma10->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('ma10/'.$idma10.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idma10)
    {
        //dd($request->all());
        $ma10 = \App\Ma10::find($idma10);

        $ma10->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('ma10/'.$idma10.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idma10)
    {
        //dd($request->all());
        $ma10 = \App\Ma10::find($idma10);

        $ma10->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('ma10/'.$idma10.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idma10,$idmapel)
    {
        $ma10 = \App\Ma10::find($idma10);
        $ma10->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idma10,$idhukuman)
    {
        $ma10 = \App\Ma10::find($idma10);
        $ma10->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Ma10Export, 'ma10.xlsx');
    }


    public function ma10importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMa10', $namaFile);

        Excel::import(new Ma10Import, public_path('/DataMa10/'.$namaFile));
        return redirect('/ma10');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $ma10 = \App\Ma10::find($id);
        $data_ma10 = \App\Ma10::where('namalengkap71')->get();

        return view('ma10.printdatadiri', ['ma10' => $ma10, 'data_ma10' => $data_ma10]);
    }

    public function printmapel($id)
    {
        $ma10 = \App\Ma10::find($id);
        $data_ma10 = \App\Ma10::where('namalengkap71')->get();

        return view('ma10.printmapel', ['ma10' => $ma10, 'data_ma10' => $data_ma10]);
    }

    public function printhukuman($id)
    {
        $ma10 = \App\Ma10::find($id);
        $data_ma10 = \App\Ma10::where('namalengkap71')->get();

        return view('ma10.printhukuman', ['ma10' => $ma10, 'data_ma10' => $data_ma10]);
    }

    public function printizin($id)
    {
        $ma10 = \App\Ma10::find($id);
        $data_ma10 = \App\Ma10::where('namalengkap71')->get();

        return view('ma10.printizin', ['ma10' => $ma10, 'data_ma10' => $data_ma10]);
    }

    public function printambil($id)
    {
        $ma10 = \App\Ma10::find($id);
        $data_ma10 = \App\Ma10::where('namalengkap71')->get();

        return view('ma10.printambil', ['ma10' => $ma10, 'data_ma10' => $data_ma10]);
    }

    public function printprestasi($id)
    {
        $ma10 = \App\Ma10::find($id);
        $data_ma10 = \App\Ma10::where('namalengkap71')->get();

        return view('ma10.printprestasi', ['ma10' => $ma10, 'data_ma10' => $data_ma10]);
    }

    public function printcatatan($id)
    {
        $ma10 = \App\Ma10::find($id);
        $data_ma10 = \App\Ma10::where('namalengkap71')->get();

        return view('ma10.printcatatan', ['ma10' => $ma10, 'data_ma10' => $data_ma10]);
    }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayama10() 
    {
        $ma10 = auth()->user()->ma10;
        return view('ma10.profilsaya', compact(['ma10']));
    }

}
