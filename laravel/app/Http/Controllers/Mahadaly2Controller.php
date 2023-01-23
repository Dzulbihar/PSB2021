<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mahadaly2;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Mahadaly2Export;
use App\Imports\Mahadaly2Import;


class Mahadaly2Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_mahadaly2 = \App\Mahadaly2::where('namalengkap72','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_mahadaly2 = \App\Mahadaly2::all();
        }
        return view('mahadaly2.index', ['data_mahadaly2' => $data_mahadaly2]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mahadaly2';
        $user->name = $request->namalengkap72;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel mahadaly2
        $request->request->add(['user_id' => $user->id ]);
        $mahadaly2 = \App\Mahadaly2::create($request->all());
//tambah foto
        if($request->hasFile('avatar72')){
            $request->file('avatar72')->move('images/',$request->file('avatar72')->getClientOriginalName());
            $mahadaly2->avatar72 = $request->file('avatar72')->getClientOriginalName();
            $mahadaly2->save();
        }
//tambah foto        
        return redirect ('/mahadaly2')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        return view('mahadaly2/edit', ['mahadaly2' => $mahadaly2]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mahadaly2';
        $user->name = $request->namalengkap72;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->update($request->all());
//tambah foto      
        if($request->hasFile('avatar72')){
            $request->file('avatar72')->move('images/',$request->file('avatar72')->getClientOriginalName());
            $mahadaly2->avatar72 = $request->file('avatar72')->getClientOriginalName();
            $mahadaly2->save();
        }
//tambah foto
        return redirect ('/mahadaly2')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->delete($mahadaly2);
        return redirect('/mahadaly2')->with('sukses', 'Data berhasil di hapus');
    }

        public function profile($id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
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
            if($mahadaly2->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $mahadaly2->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('mahadaly2.profile',[ 'mahadaly2' => $mahadaly2, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


/////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idmahadaly2)
    {
        //dd($request->all());
        $mahadaly2 = \App\Mahadaly2::find($idmahadaly2);
        if($mahadaly2->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('mahadaly2/'.$idmahadaly2.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $mahadaly2->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('mahadaly2/'.$idmahadaly2.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idmahadaly2)
    {
        //dd($request->all());
        $mahadaly2 = \App\Mahadaly2::find($idmahadaly2);

        $mahadaly2->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('mahadaly2/'.$idmahadaly2.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idmahadaly2)
    {
        //dd($request->all());
        $mahadaly2 = \App\Mahadaly2::find($idmahadaly2);

        $mahadaly2->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('mahadaly2/'.$idmahadaly2.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idmahadaly2)
    {
        //dd($request->all());
        $mahadaly2 = \App\Mahadaly2::find($idmahadaly2);

        $mahadaly2->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('mahadaly2/'.$idmahadaly2.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idmahadaly2)
    {
        //dd($request->all());
        $mahadaly2 = \App\Mahadaly2::find($idmahadaly2);

        $mahadaly2->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('mahadaly2/'.$idmahadaly2.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idmahadaly2)
    {
        //dd($request->all());
        $mahadaly2 = \App\Mahadaly2::find($idmahadaly2);

        $mahadaly2->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('mahadaly2/'.$idmahadaly2.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idmahadaly2,$idmapel)
    {
        $mahadaly2 = \App\Mahadaly2::find($idmahadaly2);
        $mahadaly2->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idmahadaly2,$idhukuman)
    {
        $mahadaly2 = \App\Mahadaly2::find($idmahadaly2);
        $mahadaly2->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Mahadaly2Export, 'mahadaly2.xlsx');
    }

    public function mahadaly2importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMahadaly2', $namaFile);

        Excel::import(new Mahadaly2Import, public_path('/DataMahadaly2/'.$namaFile));
        return redirect('/mahadaly2');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $data_mahadaly2 = \App\Mahadaly2::where('namalengkap72')->get();

        return view('mahadaly2.printdatadiri', ['mahadaly2' => $mahadaly2, 'data_mahadaly2' => $data_mahadaly2]);
    }

    public function printmapel($id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $data_mahadaly2 = \App\Mahadaly2::where('namalengkap72')->get();

        return view('mahadaly2.printmapel', ['mahadaly2' => $mahadaly2, 'data_mahadaly2' => $data_mahadaly2]);
    }

    public function printhukuman($id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $data_mahadaly2 = \App\Mahadaly2::where('namalengkap72')->get();

        return view('mahadaly2.printhukuman', ['mahadaly2' => $mahadaly2, 'data_mahadaly2' => $data_mahadaly2]);
    }

    public function printizin($id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $data_mahadaly2 = \App\Mahadaly2::where('namalengkap72')->get();

        return view('mahadaly2.printizin', ['mahadaly2' => $mahadaly2, 'data_mahadaly2' => $data_mahadaly2]);
    }

    public function printambil($id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $data_mahadaly2 = \App\Mahadaly2::where('namalengkap72')->get();

        return view('mahadaly2.printambil', ['mahadaly2' => $mahadaly2, 'data_mahadaly2' => $data_mahadaly2]);
    }

    public function printprestasi($id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $data_mahadaly2 = \App\Mahadaly2::where('namalengkap72')->get();

        return view('mahadaly2.printprestasi', ['mahadaly2' => $mahadaly2, 'data_mahadaly2' => $data_mahadaly2]);
    }

    public function printcatatan($id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $data_mahadaly2 = \App\Mahadaly2::where('namalengkap72')->get();

        return view('mahadaly2.printcatatan', ['mahadaly2' => $mahadaly2, 'data_mahadaly2' => $data_mahadaly2]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayamahadaly2() 
    {
        $mahadaly2 = auth()->user()->mahadaly2;
        return view('mahadaly2.profilsaya', compact(['mahadaly2']));
    }

}
