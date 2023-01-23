<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mts7;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Mts7Export;
use App\Imports\Mts7Import;



class Mts7Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_mts7 = \App\Mts7::where('namalengkap37','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_mts7 = \App\Mts7::all();
        }
        return view('mts7.index', ['data_mts7' => $data_mts7]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mts7';
        $user->name = $request->namalengkap37;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel mts7
        $request->request->add(['user_id' => $user->id ]);
        $mts7 = \App\Mts7::create($request->all());
//tambah foto
        if($request->hasFile('avatar37')){
            $request->file('avatar37')->move('images/',$request->file('avatar37')->getClientOriginalName());
            $mts7->avatar37 = $request->file('avatar37')->getClientOriginalName();
            $mts7->save();
        }
//tambah foto        
        return redirect ('/mts7')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $mts7 = \App\Mts7::find($id);
        return view('mts7/edit', ['mts7' => $mts7]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mts7';
        $user->name = $request->namalengkap37;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $mts7 = \App\Mts7::find($id);
        $mts7->update($request->all());
//tambah foto      
        if($request->hasFile('avatar37')){
            $request->file('avatar37')->move('images/',$request->file('avatar37')->getClientOriginalName());
            $mts7->avatar37 = $request->file('avatar37')->getClientOriginalName();
            $mts7->save();
        }
//tambah foto
        return redirect ('/mts7')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->delete($mts7);
        return redirect('/mts7')->with('sukses', 'Data berhasil di hapus');
    }


        public function profile($id)
    {
        $mts7 = \App\Mts7::find($id);
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
            if($mts7->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $mts7->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('mts7.profile',[ 'mts7' => $mts7, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idmts7)
    {
        //dd($request->all());
        $mts7 = \App\Mts7::find($idmts7);
        if($mts7->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('mts7/'.$idmts7.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $mts7->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('mts7/'.$idmts7.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idmts7)
    {
        //dd($request->all());
        $mts7 = \App\Mts7::find($idmts7);

        $mts7->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('mts7/'.$idmts7.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idmts7)
    {
        //dd($request->all());
        $mts7 = \App\Mts7::find($idmts7);

        $mts7->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('mts7/'.$idmts7.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idmts7)
    {
        //dd($request->all());
        $mts7 = \App\Mts7::find($idmts7);

        $mts7->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('mts7/'.$idmts7.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idmts7)
    {
        //dd($request->all());
        $mts7 = \App\Mts7::find($idmts7);

        $mts7->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('mts7/'.$idmts7.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idmts7)
    {
        //dd($request->all());
        $mts7 = \App\Mts7::find($idmts7);

        $mts7->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('mts7/'.$idmts7.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idmts7,$idmapel)
    {
        $mts7 = \App\Mts7::find($idmts7);
        $mts7->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idmts7,$idhukuman)
    {
        $mts7 = \App\Mts7::find($idmts7);
        $mts7->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Mts7Export, 'mts7.xlsx');
    }

    public function mts7importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMts7', $namaFile);

        Excel::import(new Mts7Import, public_path('/DataMts7/'.$namaFile));
        return redirect('/mts7');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $mts37 = \App\Mts37::find($id);
        $data_mts37 = \App\Mts37::where('namalengkap37')->get();

        return view('mts37.printdatadiri', ['mts37' => $mts37, 'data_mts37' => $data_mts37]);
    }

    public function printmapel($id)
    {
        $mts37 = \App\Mts37::find($id);
        $data_mts37 = \App\Mts37::where('namalengkap37')->get();

        return view('mts37.printmapel', ['mts37' => $mts37, 'data_mts37' => $data_mts37]);
    }

    public function printhukuman($id)
    {
        $mts37 = \App\Mts37::find($id);
        $data_mts37 = \App\Mts37::where('namalengkap37')->get();

        return view('mts37.printhukuman', ['mts37' => $mts37, 'data_mts37' => $data_mts37]);
    }

    public function printizin($id)
    {
        $mts37 = \App\Mts37::find($id);
        $data_mts37 = \App\Mts37::where('namalengkap37')->get();

        return view('mts37.printizin', ['mts37' => $mts37, 'data_mts37' => $data_mts37]);
    }

    public function printambil($id)
    {
        $mts37 = \App\Mts37::find($id);
        $data_mts37 = \App\Mts37::where('namalengkap37')->get();

        return view('mts37.printambil', ['mts37' => $mts37, 'data_mts37' => $data_mts37]);
    }

    public function printprestasi($id)
    {
        $mts37 = \App\Mts37::find($id);
        $data_mts37 = \App\Mts37::where('namalengkap37')->get();

        return view('mts37.printprestasi', ['mts37' => $mts37, 'data_mts37' => $data_mts37]);
    }

    public function printcatatan($id)
    {
        $mts37 = \App\Mts37::find($id);
        $data_mts37 = \App\Mts37::where('namalengkap37')->get();

        return view('mts37.printcatatan', ['mts37' => $mts37, 'data_mts37' => $data_mts37]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayamts7() 
    {
        $mts7 = auth()->user()->mts7;
        return view('mts7.profilsaya', compact(['mts7']));
    }

}
