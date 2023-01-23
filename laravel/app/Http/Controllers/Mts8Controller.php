<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mts8;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Mts8Export;
use App\Imports\Mts8Import;


class Mts8Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_mts8 = \App\Mts8::where('namalengkap38','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_mts8 = \App\Mts8::all();
        }
        return view('mts8.index', ['data_mts8' => $data_mts8]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mts8';
        $user->name = $request->namalengkap38;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel mts8
        $request->request->add(['user_id' => $user->id ]);
        $mts8 = \App\Mts8::create($request->all());
//tambah foto
        if($request->hasFile('avatar38')){
            $request->file('avatar38')->move('images/',$request->file('avatar38')->getClientOriginalName());
            $mts8->avatar38 = $request->file('avatar38')->getClientOriginalName();
            $mts8->save();
        }
//tambah foto        
        return redirect ('/mts8')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $mts8 = \App\Mts8::find($id);
        return view('mts8/edit', ['mts8' => $mts8]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mts8';
        $user->name = $request->namalengkap38;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $mts8 = \App\Mts8::find($id);
        $mts8->update($request->all());
//tambah foto      
        if($request->hasFile('avatar38')){
            $request->file('avatar38')->move('images/',$request->file('avatar38')->getClientOriginalName());
            $mts8->avatar38 = $request->file('avatar38')->getClientOriginalName();
            $mts8->save();
        }
//tambah foto
        return redirect ('/mts8')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->delete($mts8);
        return redirect('/mts8')->with('sukses', 'Data berhasil di hapus');
    }


        public function profile($id)
    {
        $mts8 = \App\Mts8::find($id);
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
            if($mts8->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $mts8->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('mts8.profile',[ 'mts8' => $mts8, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idmts8)
    {
        //dd($request->all());
        $mts8 = \App\Mts8::find($idmts8);
        if($mts8->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('mts8/'.$idmts8.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $mts8->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('mts8/'.$idmts8.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idmts8)
    {
        //dd($request->all());
        $mts8 = \App\Mts8::find($idmts8);

        $mts8->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('mts8/'.$idmts8.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idmts8)
    {
        //dd($request->all());
        $mts8 = \App\Mts8::find($idmts8);

        $mts8->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('mts8/'.$idmts8.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idmts8)
    {
        //dd($request->all());
        $mts8 = \App\Mts8::find($idmts8);

        $mts8->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('mts8/'.$idmts8.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idmts8)
    {
        //dd($request->all());
        $mts8 = \App\Mts8::find($idmts8);

        $mts8->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('mts8/'.$idmts8.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idmts8)
    {
        //dd($request->all());
        $mts8 = \App\Mts8::find($idmts8);

        $mts8->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('mts8/'.$idmts8.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idmts8,$idmapel)
    {
        $mts8 = \App\Mts8::find($idmts8);
        $mts8->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idmts8,$idhukuman)
    {
        $mts8 = \App\Mts8::find($idmts8);
        $mts8->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Mts8Export, 'mts8.xlsx');
    }

    public function mts8importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMts8', $namaFile);

        Excel::import(new Mts8Import, public_path('/DataMts8/'.$namaFile));
        return redirect('/mts8');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $mts38 = \App\Mts38::find($id);
        $data_mts38 = \App\Mts38::where('namalengkap38')->get();

        return view('mts38.printdatadiri', ['mts38' => $mts38, 'data_mts38' => $data_mts38]);
    }

    public function printmapel($id)
    {
        $mts38 = \App\Mts38::find($id);
        $data_mts38 = \App\Mts38::where('namalengkap38')->get();

        return view('mts38.printmapel', ['mts38' => $mts38, 'data_mts38' => $data_mts38]);
    }

    public function printhukuman($id)
    {
        $mts38 = \App\Mts38::find($id);
        $data_mts38 = \App\Mts38::where('namalengkap38')->get();

        return view('mts38.printhukuman', ['mts38' => $mts38, 'data_mts38' => $data_mts38]);
    }

    public function printizin($id)
    {
        $mts38 = \App\Mts38::find($id);
        $data_mts38 = \App\Mts38::where('namalengkap38')->get();

        return view('mts38.printizin', ['mts38' => $mts38, 'data_mts38' => $data_mts38]);
    }

    public function printambil($id)
    {
        $mts38 = \App\Mts38::find($id);
        $data_mts38 = \App\Mts38::where('namalengkap38')->get();

        return view('mts38.printambil', ['mts38' => $mts38, 'data_mts38' => $data_mts38]);
    }

    public function printprestasi($id)
    {
        $mts38 = \App\Mts38::find($id);
        $data_mts38 = \App\Mts38::where('namalengkap38')->get();

        return view('mts38.printprestasi', ['mts38' => $mts38, 'data_mts38' => $data_mts38]);
    }

    public function printcatatan($id)
    {
        $mts38 = \App\Mts38::find($id);
        $data_mts38 = \App\Mts38::where('namalengkap38')->get();

        return view('mts38.printcatatan', ['mts38' => $mts38, 'data_mts38' => $data_mts38]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayamts8() 
    {
        $mts8 = auth()->user()->mts8;
        return view('mts8.profilsaya', compact(['mts8']));
    }

}
