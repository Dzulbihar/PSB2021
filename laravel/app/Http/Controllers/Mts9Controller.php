<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mts9;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Mts9Export;
use App\Imports\Mts9Import;


class Mts9Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_mts9 = \App\Mts9::where('namalengkap39','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_mts9 = \App\Mts9::all();
        }
        return view('mts9.index', ['data_mts9' => $data_mts9]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mts9';
        $user->name = $request->namalengkap39;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel mts9
        $request->request->add(['user_id' => $user->id ]);
        $mts9 = \App\Mts9::create($request->all());
//tambah foto
        if($request->hasFile('avatar39')){
            $request->file('avatar39')->move('images/',$request->file('avatar39')->getClientOriginalName());
            $mts9->avatar39 = $request->file('avatar39')->getClientOriginalName();
            $mts9->save();
        }
//tambah foto        
        return redirect ('/mts9')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $mts9 = \App\Mts9::find($id);
        return view('mts9/edit', ['mts9' => $mts9]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mts9';
        $user->name = $request->namalengkap39;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $mts9 = \App\Mts9::find($id);
        $mts9->update($request->all());
//tambah foto      
        if($request->hasFile('avatar39')){
            $request->file('avatar39')->move('images/',$request->file('avatar39')->getClientOriginalName());
            $mts9->avatar39 = $request->file('avatar39')->getClientOriginalName();
            $mts9->save();
        }
//tambah foto
        return redirect ('/mts9')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->delete($mts9);
        return redirect('/mts9')->with('sukses', 'Data berhasil di hapus');
    }

      
        public function profile($id)
    {
        $mts9 = \App\Mts9::find($id);
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
            if($mts9->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $mts9->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('mts9.profile',[ 'mts9' => $mts9, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idmts9)
    {
        //dd($request->all());
        $mts9 = \App\Mts9::find($idmts9);
        if($mts9->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('mts9/'.$idmts9.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $mts9->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('mts9/'.$idmts9.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idmts9)
    {
        //dd($request->all());
        $mts9 = \App\Mts9::find($idmts9);

        $mts9->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('mts9/'.$idmts9.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idmts9)
    {
        //dd($request->all());
        $mts9 = \App\Mts9::find($idmts9);

        $mts9->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('mts9/'.$idmts9.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idmts9)
    {
        //dd($request->all());
        $mts9 = \App\Mts9::find($idmts9);

        $mts9->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('mts9/'.$idmts9.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idmts9)
    {
        //dd($request->all());
        $mts9 = \App\Mts9::find($idmts9);

        $mts9->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('mts9/'.$idmts9.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idmts9)
    {
        //dd($request->all());
        $mts9 = \App\Mts9::find($idmts9);

        $mts9->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('mts9/'.$idmts9.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idmts9,$idmapel)
    {
        $mts9 = \App\Mts9::find($idmts9);
        $mts9->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idmts9,$idhukuman)
    {
        $mts9 = \App\Mts9::find($idmts9);
        $mts9->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Mts9Export, 'mts9.xlsx');
    }

    public function mts9importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMts9', $namaFile);

        Excel::import(new Mts9Import, public_path('/DataMts9/'.$namaFile));
        return redirect('/mts9');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $mts39 = \App\Mts39::find($id);
        $data_mts39 = \App\Mts39::where('namalengkap39')->get();

        return view('mts39.printdatadiri', ['mts39' => $mts39, 'data_mts39' => $data_mts39]);
    }

    public function printmapel($id)
    {
        $mts39 = \App\Mts39::find($id);
        $data_mts39 = \App\Mts39::where('namalengkap39')->get();

        return view('mts39.printmapel', ['mts39' => $mts39, 'data_mts39' => $data_mts39]);
    }

    public function printhukuman($id)
    {
        $mts39 = \App\Mts39::find($id);
        $data_mts39 = \App\Mts39::where('namalengkap39')->get();

        return view('mts39.printhukuman', ['mts39' => $mts39, 'data_mts39' => $data_mts39]);
    }

    public function printizin($id)
    {
        $mts39 = \App\Mts39::find($id);
        $data_mts39 = \App\Mts39::where('namalengkap39')->get();

        return view('mts39.printizin', ['mts39' => $mts39, 'data_mts39' => $data_mts39]);
    }

    public function printambil($id)
    {
        $mts39 = \App\Mts39::find($id);
        $data_mts39 = \App\Mts39::where('namalengkap39')->get();

        return view('mts39.printambil', ['mts39' => $mts39, 'data_mts39' => $data_mts39]);
    }

    public function printprestasi($id)
    {
        $mts39 = \App\Mts39::find($id);
        $data_mts39 = \App\Mts39::where('namalengkap39')->get();

        return view('mts39.printprestasi', ['mts39' => $mts39, 'data_mts39' => $data_mts39]);
    }

    public function printcatatan($id)
    {
        $mts39 = \App\Mts39::find($id);
        $data_mts39 = \App\Mts39::where('namalengkap39')->get();

        return view('mts39.printcatatan', ['mts39' => $mts39, 'data_mts39' => $data_mts39]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayamts9() 
    {
        $mts9 = auth()->user()->mts9;
        return view('mts9.profilsaya', compact(['mts9']));
    }

}
