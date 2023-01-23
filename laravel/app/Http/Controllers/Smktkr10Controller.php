<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Smktkr10;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smktkr10Export;
use App\Imports\Smktkr10Import;


class Smktkr10Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smktkr10 = \App\Smktkr10::where('namalengkap51','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smktkr10 = \App\Smktkr10::all();
        }
        return view('smktkr10.index', ['data_smktkr10' => $data_smktkr10]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkr10';
        $user->name = $request->namalengkap51;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smktkr10
        $request->request->add(['user_id' => $user->id ]);
        $smktkr10 = \App\Smktkr10::create($request->all());
//tambah foto
        if($request->hasFile('avatar51')){
            $request->file('avatar51')->move('images/',$request->file('avatar51')->getClientOriginalName());
            $smktkr10->avatar51 = $request->file('avatar51')->getClientOriginalName();
            $smktkr10->save();
        }
//tambah foto        
        return redirect ('/smktkr10')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        return view('smktkr10/edit', ['smktkr10' => $smktkr10]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkr10';
        $user->name = $request->namalengkap51;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->update($request->all());
//tambah foto      
        if($request->hasFile('avatar51')){
            $request->file('avatar51')->move('images/',$request->file('avatar51')->getClientOriginalName());
            $smktkr10->avatar51 = $request->file('avatar51')->getClientOriginalName();
            $smktkr10->save();
        }
//tambah foto
        return redirect ('/smktkr10')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smktkr10 = \App\smktkr10::find($id);
        $smktkr10->delete($smktkr10);
        return redirect('/smktkr10')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
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
            if($smktkr10->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smktkr10->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smktkr10.profile',[ 'smktkr10' => $smktkr10, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmktkr10)
    {
        //dd($request->all());
        $smktkr10 = \App\Smktkr10::find($idsmktkr10);
        if($smktkr10->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smktkr10/'.$idsmktkr10.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smktkr10->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smktkr10/'.$idsmktkr10.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmktkr10)
    {
        //dd($request->all());
        $smktkr10 = \App\Smktkr10::find($idsmktkr10);

        $smktkr10->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smktkr10/'.$idsmktkr10.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmktkr10)
    {
        //dd($request->all());
        $smktkr10 = \App\Smktkr10::find($idsmktkr10);

        $smktkr10->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smktkr10/'.$idsmktkr10.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmktkr10)
    {
        //dd($request->all());
        $smktkr10 = \App\Smktkr10::find($idsmktkr10);

        $smktkr10->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smktkr10/'.$idsmktkr10.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmktkr10)
    {
        //dd($request->all());
        $smktkr10 = \App\Smktkr10::find($idsmktkr10);

        $smktkr10->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smktkr10/'.$idsmktkr10.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmktkr10)
    {
        //dd($request->all());
        $smktkr10 = \App\Smktkr10::find($idsmktkr10);

        $smktkr10->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smktkr10/'.$idsmktkr10.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmktkr10,$idmapel)
    {
        $smktkr10 = \App\Smktkr10::find($idsmktkr10);
        $smktkr10->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmktkr10,$idhukuman)
    {
        $smktkr10 = \App\Smktkr10::find($idsmktkr10);
        $smktkr10->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smktkr10Export, 'smktkr10.xlsx');
    }


    public function smktkr10importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmktkr10', $namaFile);

        Excel::import(new Smktkr10Import, public_path('/DataSmktkr10/'.$namaFile));
        return redirect('/smktkr10');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $data_smktkr10 = \App\Smktkr10::where('namalengkap51')->get();

        return view('smktkr10.printdatadiri', ['smktkr10' => $smktkr10, 'data_smktkr10' => $data_smktkr10]);
    }

    public function printmapel($id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $data_smktkr10 = \App\Smktkr10::where('namalengkap51')->get();

        return view('smktkr10.printmapel', ['smktkr10' => $smktkr10, 'data_smktkr10' => $data_smktkr10]);
    }

    public function printhukuman($id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $data_smktkr10 = \App\Smktkr10::where('namalengkap51')->get();

        return view('smktkr10.printhukuman', ['smktkr10' => $smktkr10, 'data_smktkr10' => $data_smktkr10]);
    }

    public function printizin($id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $data_smktkr10 = \App\Smktkr10::where('namalengkap51')->get();

        return view('smktkr10.printizin', ['smktkr10' => $smktkr10, 'data_smktkr10' => $data_smktkr10]);
    }

    public function printambil($id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $data_smktkr10 = \App\Smktkr10::where('namalengkap51')->get();

        return view('smktkr10.printambil', ['smktkr10' => $smktkr10, 'data_smktkr10' => $data_smktkr10]);
    }

    public function printprestasi($id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $data_smktkr10 = \App\Smktkr10::where('namalengkap51')->get();

        return view('smktkr10.printprestasi', ['smktkr10' => $smktkr10, 'data_smktkr10' => $data_smktkr10]);
    }

    public function printcatatan($id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $data_smktkr10 = \App\Smktkr10::where('namalengkap51')->get();

        return view('smktkr10.printcatatan', ['smktkr10' => $smktkr10, 'data_smktkr10' => $data_smktkr10]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmktkr10() 
    {
        $smktkr10 = auth()->user()->smktkr10;
        return view('smktkr10.profilsaya', compact(['smktkr10']));
    }


}
