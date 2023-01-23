<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mahadaly4;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Mahadaly4Export;
use App\Imports\Mahadaly4Import;


class Mahadaly4Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_mahadaly4 = \App\Mahadaly4::where('namalengkap74','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_mahadaly4 = \App\Mahadaly4::all();
        }
        return view('mahadaly4.index', ['data_mahadaly4' => $data_mahadaly4]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mahadaly4';
        $user->name = $request->namalengkap74;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel mahadaly4
        $request->request->add(['user_id' => $user->id ]);
        $mahadaly4 = \App\Mahadaly4::create($request->all());
//tambah foto
        if($request->hasFile('avatar74')){
            $request->file('avatar74')->move('images/',$request->file('avatar74')->getClientOriginalName());
            $mahadaly4->avatar74 = $request->file('avatar74')->getClientOriginalName();
            $mahadaly4->save();
        }
//tambah foto        
        return redirect ('/mahadaly4')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        return view('mahadaly4/edit', ['mahadaly4' => $mahadaly4]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mahadaly4';
        $user->name = $request->namalengkap74;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->update($request->all());
//tambah foto      
        if($request->hasFile('avatar74')){
            $request->file('avatar74')->move('images/',$request->file('avatar74')->getClientOriginalName());
            $mahadaly4->avatar74 = $request->file('avatar74')->getClientOriginalName();
            $mahadaly4->save();
        }
//tambah foto
        return redirect ('/mahadaly4')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->delete($mahadaly4);
        return redirect('/mahadaly4')->with('sukses', 'Data berhasil di hapus');
    }


        public function profile($id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
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
            if($mahadaly4->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $mahadaly4->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('mahadaly4.profile',[ 'mahadaly4' => $mahadaly4, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idmahadaly4)
    {
        //dd($request->all());
        $mahadaly4 = \App\Mahadaly4::find($idmahadaly4);
        if($mahadaly4->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('mahadaly4/'.$idmahadaly4.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $mahadaly4->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('mahadaly4/'.$idmahadaly4.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idmahadaly4)
    {
        //dd($request->all());
        $mahadaly4 = \App\Mahadaly4::find($idmahadaly4);

        $mahadaly4->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('mahadaly4/'.$idmahadaly4.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idmahadaly4)
    {
        //dd($request->all());
        $mahadaly4 = \App\Mahadaly4::find($idmahadaly4);

        $mahadaly4->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('mahadaly4/'.$idmahadaly4.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idmahadaly4)
    {
        //dd($request->all());
        $mahadaly4 = \App\Mahadaly4::find($idmahadaly4);

        $mahadaly4->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('mahadaly4/'.$idmahadaly4.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idmahadaly4)
    {
        //dd($request->all());
        $mahadaly4 = \App\Mahadaly4::find($idmahadaly4);

        $mahadaly4->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('mahadaly4/'.$idmahadaly4.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idmahadaly4)
    {
        //dd($request->all());
        $mahadaly4 = \App\Mahadaly4::find($idmahadaly4);

        $mahadaly4->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('mahadaly4/'.$idmahadaly4.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idmahadaly4,$idmapel)
    {
        $mahadaly4 = \App\Mahadaly4::find($idmahadaly4);
        $mahadaly4->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idmahadaly4,$idhukuman)
    {
        $mahadaly4 = \App\Mahadaly4::find($idmahadaly4);
        $mahadaly4->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Mahadaly4Export, 'mahadaly4.xlsx');
    }

    public function mahadaly4importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMahadaly4', $namaFile);

        Excel::import(new Mahadaly4Import, public_path('/DataMahadaly4/'.$namaFile));
        return redirect('/mahadaly4');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $data_mahadaly4 = \App\Mahadaly4::where('namalengkap74')->get();

        return view('mahadaly4.printdatadiri', ['mahadaly4' => $mahadaly4, 'data_mahadaly4' => $data_mahadaly4]);
    }

    public function printmapel($id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $data_mahadaly4 = \App\Mahadaly4::where('namalengkap74')->get();

        return view('mahadaly4.printmapel', ['mahadaly4' => $mahadaly4, 'data_mahadaly4' => $data_mahadaly4]);
    }

    public function printhukuman($id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $data_mahadaly4 = \App\Mahadaly4::where('namalengkap74')->get();

        return view('mahadaly4.printhukuman', ['mahadaly4' => $mahadaly4, 'data_mahadaly4' => $data_mahadaly4]);
    }

    public function printizin($id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $data_mahadaly4 = \App\Mahadaly4::where('namalengkap74')->get();

        return view('mahadaly4.printizin', ['mahadaly4' => $mahadaly4, 'data_mahadaly4' => $data_mahadaly4]);
    }

    public function printambil($id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $data_mahadaly4 = \App\Mahadaly4::where('namalengkap74')->get();

        return view('mahadaly4.printambil', ['mahadaly4' => $mahadaly4, 'data_mahadaly4' => $data_mahadaly4]);
    }

    public function printprestasi($id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $data_mahadaly4 = \App\Mahadaly4::where('namalengkap74')->get();

        return view('mahadaly4.printprestasi', ['mahadaly4' => $mahadaly4, 'data_mahadaly4' => $data_mahadaly4]);
    }

    public function printcatatan($id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $data_mahadaly4 = \App\Mahadaly4::where('namalengkap74')->get();

        return view('mahadaly4.printcatatan', ['mahadaly4' => $mahadaly4, 'data_mahadaly4' => $data_mahadaly4]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayamahadaly4() 
    {
        $mahadaly4 = auth()->user()->mahadaly4;
        return view('mahadaly4.profilsaya', compact(['mahadaly4']));
    }

}
