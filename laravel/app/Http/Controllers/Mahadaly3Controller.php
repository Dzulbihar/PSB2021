<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mahadaly3;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Mahadaly3Export;
use App\Imports\Mahadaly3Import;

class Mahadaly3Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_mahadaly3 = \App\Mahadaly3::where('namalengkap73','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_mahadaly3 = \App\Mahadaly3::all();
        }
        return view('mahadaly3.index', ['data_mahadaly3' => $data_mahadaly3]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mahadaly3';
        $user->name = $request->namalengkap73;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel mahadaly3
        $request->request->add(['user_id' => $user->id ]);
        $mahadaly3 = \App\Mahadaly3::create($request->all());
//tambah foto
        if($request->hasFile('avatar73')){
            $request->file('avatar73')->move('images/',$request->file('avatar73')->getClientOriginalName());
            $mahadaly3->avatar73 = $request->file('avatar73')->getClientOriginalName();
            $mahadaly3->save();
        }
//tambah foto        
        return redirect ('/mahadaly3')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        return view('mahadaly3/edit', ['mahadaly3' => $mahadaly3]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'mahadaly3';
        $user->name = $request->namalengkap73;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->update($request->all());
//tambah foto      
        if($request->hasFile('avatar73')){
            $request->file('avatar73')->move('images/',$request->file('avatar73')->getClientOriginalName());
            $mahadaly3->avatar73 = $request->file('avatar73')->getClientOriginalName();
            $mahadaly3->save();
        }
//tambah foto
        return redirect ('/mahadaly3')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->delete($mahadaly3);
        return redirect('/mahadaly3')->with('sukses', 'Data berhasil di hapus');
    }



        public function profile($id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
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
            if($mahadaly3->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $mahadaly3->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('mahadaly3.profile',[ 'mahadaly3' => $mahadaly3, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idmahadaly3)
    {
        //dd($request->all());
        $mahadaly3 = \App\Mahadaly3::find($idmahadaly3);
        if($mahadaly3->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('mahadaly3/'.$idmahadaly3.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $mahadaly3->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('mahadaly3/'.$idmahadaly3.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idmahadaly3)
    {
        //dd($request->all());
        $mahadaly3 = \App\Mahadaly3::find($idmahadaly3);

        $mahadaly3->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('mahadaly3/'.$idmahadaly3.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idmahadaly3)
    {
        //dd($request->all());
        $mahadaly3 = \App\Mahadaly3::find($idmahadaly3);

        $mahadaly3->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('mahadaly3/'.$idmahadaly3.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idmahadaly3)
    {
        //dd($request->all());
        $mahadaly3 = \App\Mahadaly3::find($idmahadaly3);

        $mahadaly3->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('mahadaly3/'.$idmahadaly3.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idmahadaly3)
    {
        //dd($request->all());
        $mahadaly3 = \App\Mahadaly3::find($idmahadaly3);

        $mahadaly3->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('mahadaly3/'.$idmahadaly3.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idmahadaly3)
    {
        //dd($request->all());
        $mahadaly3 = \App\Mahadaly3::find($idmahadaly3);

        $mahadaly3->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('mahadaly3/'.$idmahadaly3.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idmahadaly3,$idmapel)
    {
        $mahadaly3 = \App\Mahadaly3::find($idmahadaly3);
        $mahadaly3->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idmahadaly3,$idhukuman)
    {
        $mahadaly3 = \App\Mahadaly3::find($idmahadaly3);
        $mahadaly3->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Mahadaly3Export, 'mahadaly3.xlsx');
    }

    public function mahadaly3importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMahadaly3', $namaFile);

        Excel::import(new Mahadaly3Import, public_path('/DataMahadaly3/'.$namaFile));
        return redirect('/mahadaly3');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $data_mahadaly3 = \App\Mahadaly3::where('namalengkap73')->get();

        return view('mahadaly3.printdatadiri', ['mahadaly3' => $mahadaly3, 'data_mahadaly3' => $data_mahadaly3]);
    }

    public function printmapel($id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $data_mahadaly3 = \App\Mahadaly3::where('namalengkap73')->get();

        return view('mahadaly3.printmapel', ['mahadaly3' => $mahadaly3, 'data_mahadaly3' => $data_mahadaly3]);
    }

    public function printhukuman($id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $data_mahadaly3 = \App\Mahadaly3::where('namalengkap73')->get();

        return view('mahadaly3.printhukuman', ['mahadaly3' => $mahadaly3, 'data_mahadaly3' => $data_mahadaly3]);
    }

    public function printizin($id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $data_mahadaly3 = \App\Mahadaly3::where('namalengkap73')->get();

        return view('mahadaly3.printizin', ['mahadaly3' => $mahadaly3, 'data_mahadaly3' => $data_mahadaly3]);
    }

    public function printambil($id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $data_mahadaly3 = \App\Mahadaly3::where('namalengkap73')->get();

        return view('mahadaly3.printambil', ['mahadaly3' => $mahadaly3, 'data_mahadaly3' => $data_mahadaly3]);
    }

    public function printprestasi($id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $data_mahadaly3 = \App\Mahadaly3::where('namalengkap73')->get();

        return view('mahadaly3.printprestasi', ['mahadaly3' => $mahadaly3, 'data_mahadaly3' => $data_mahadaly3]);
    }

    public function printcatatan($id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $data_mahadaly3 = \App\Mahadaly3::where('namalengkap73')->get();

        return view('mahadaly3.printcatatan', ['mahadaly3' => $mahadaly3, 'data_mahadaly3' => $data_mahadaly3]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayamahadaly3() 
    {
        $mahadaly3 = auth()->user()->mahadaly3;
        return view('mahadaly3.profilsaya', compact(['mahadaly3']));
    }

}
