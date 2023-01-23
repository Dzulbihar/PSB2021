<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mahadaly1;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Mahadaly1Export;
use App\Imports\Mahadaly1Import;


class Mahadaly1Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_mahadaly1 = \App\Mahadaly1::where('namalengkap71','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_mahadaly1 = \App\Mahadaly1::all();
        }
        return view('mahadaly1.index', ['data_mahadaly1' => $data_mahadaly1]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mahadaly1';
        $user->name = $request->namalengkap71;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel mahadaly1
        $request->request->add(['user_id' => $user->id ]);
        $mahadaly1 = \App\Mahadaly1::create($request->all());
//tambah foto
        if($request->hasFile('avatar71')){
            $request->file('avatar71')->move('images/',$request->file('avatar71')->getClientOriginalName());
            $mahadaly1->avatar71 = $request->file('avatar71')->getClientOriginalName();
            $mahadaly1->save();
        }
//tambah foto        
        return redirect ('/mahadaly1')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        return view('mahadaly1/edit', ['mahadaly1' => $mahadaly1]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mahadaly1';
        $user->name = $request->namalengkap71;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->update($request->all());
//tambah foto      
        if($request->hasFile('avatar71')){
            $request->file('avatar71')->move('images/',$request->file('avatar71')->getClientOriginalName());
            $mahadaly1->avatar71 = $request->file('avatar71')->getClientOriginalName();
            $mahadaly1->save();
        }
//tambah foto
        return redirect ('/mahadaly1')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->delete($mahadaly1);
        return redirect('/mahadaly1')->with('sukses', 'Data berhasil di hapus');
    }

        public function profile($id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
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
            if($mahadaly1->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $mahadaly1->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('mahadaly1.profile',[ 'mahadaly1' => $mahadaly1, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idmahadaly1)
    {
        //dd($request->all());
        $mahadaly1 = \App\Mahadaly1::find($idmahadaly1);
        if($mahadaly1->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('mahadaly1/'.$idmahadaly1.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $mahadaly1->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('mahadaly1/'.$idmahadaly1.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idmahadaly1)
    {
        //dd($request->all());
        $mahadaly1 = \App\Mahadaly1::find($idmahadaly1);

        $mahadaly1->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('mahadaly1/'.$idmahadaly1.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idmahadaly1)
    {
        //dd($request->all());
        $mahadaly1 = \App\Mahadaly1::find($idmahadaly1);

        $mahadaly1->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('mahadaly1/'.$idmahadaly1.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idmahadaly1)
    {
        //dd($request->all());
        $mahadaly1 = \App\Mahadaly1::find($idmahadaly1);

        $mahadaly1->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('mahadaly1/'.$idmahadaly1.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idmahadaly1)
    {
        //dd($request->all());
        $mahadaly1 = \App\Mahadaly1::find($idmahadaly1);

        $mahadaly1->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('mahadaly1/'.$idmahadaly1.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idmahadaly1)
    {
        //dd($request->all());
        $mahadaly1 = \App\Mahadaly1::find($idmahadaly1);

        $mahadaly1->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('mahadaly1/'.$idmahadaly1.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idmahadaly1,$idmapel)
    {
        $mahadaly1 = \App\Mahadaly1::find($idmahadaly1);
        $mahadaly1->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idmahadaly1,$idhukuman)
    {
        $mahadaly1 = \App\Mahadaly1::find($idmahadaly1);
        $mahadaly1->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Mahadaly1Export, 'mahadaly1.xlsx');
    }

    public function mahadaly1importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMahadaly1', $namaFile);

        Excel::import(new Mahadaly1Import, public_path('/DataMahadaly1/'.$namaFile));
        return redirect('/mahadaly1');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $data_mahadaly1 = \App\Mahadaly1::where('namalengkap71')->get();

        return view('mahadaly1.printdatadiri', ['mahadaly1' => $mahadaly1, 'data_mahadaly1' => $data_mahadaly1]);
    }

    public function printmapel($id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $data_mahadaly1 = \App\Mahadaly1::where('namalengkap71')->get();

        return view('mahadaly1.printmapel', ['mahadaly1' => $mahadaly1, 'data_mahadaly1' => $data_mahadaly1]);
    }

    public function printhukuman($id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $data_mahadaly1 = \App\Mahadaly1::where('namalengkap71')->get();

        return view('mahadaly1.printhukuman', ['mahadaly1' => $mahadaly1, 'data_mahadaly1' => $data_mahadaly1]);
    }

    public function printizin($id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $data_mahadaly1 = \App\Mahadaly1::where('namalengkap71')->get();

        return view('mahadaly1.printizin', ['mahadaly1' => $mahadaly1, 'data_mahadaly1' => $data_mahadaly1]);
    }

    public function printambil($id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $data_mahadaly1 = \App\Mahadaly1::where('namalengkap71')->get();

        return view('mahadaly1.printambil', ['mahadaly1' => $mahadaly1, 'data_mahadaly1' => $data_mahadaly1]);
    }

    public function printprestasi($id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $data_mahadaly1 = \App\Mahadaly1::where('namalengkap71')->get();

        return view('mahadaly1.printprestasi', ['mahadaly1' => $mahadaly1, 'data_mahadaly1' => $data_mahadaly1]);
    }

    public function printcatatan($id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $data_mahadaly1 = \App\Mahadaly1::where('namalengkap71')->get();

        return view('mahadaly1.printcatatan', ['mahadaly1' => $mahadaly1, 'data_mahadaly1' => $data_mahadaly1]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayamahadaly1() 
    {
        $mahadaly1 = auth()->user()->mahadaly1;
        return view('mahadaly1.profilsaya', compact(['mahadaly1']));
    }

}
