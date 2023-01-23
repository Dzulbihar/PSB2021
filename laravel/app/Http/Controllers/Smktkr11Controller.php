<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Smktkr11;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smktkr11Export;
use App\Imports\Smktkr11Import;


class Smktkr11Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smktkr11 = \App\Smktkr11::where('namalengkap52','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smktkr11 = \App\Smktkr11::all();
        }
        return view('smktkr11.index', ['data_smktkr11' => $data_smktkr11]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkr11';
        $user->name = $request->namalengkap52;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smktkr11
        $request->request->add(['user_id' => $user->id ]);
        $smktkr11 = \App\Smktkr11::create($request->all());
//tambah foto
        if($request->hasFile('avatar52')){
            $request->file('avatar52')->move('images/',$request->file('avatar52')->getClientOriginalName());
            $smktkr11->avatar52 = $request->file('avatar52')->getClientOriginalName();
            $smktkr11->save();
        }
//tambah foto        
        return redirect ('/smktkr11')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        return view('smktkr11/edit', ['smktkr11' => $smktkr11]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkr11';
        $user->name = $request->namalengkap52;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->update($request->all());
//tambah foto      
        if($request->hasFile('avatar52')){
            $request->file('avatar52')->move('images/',$request->file('avatar52')->getClientOriginalName());
            $smktkr11->avatar52 = $request->file('avatar52')->getClientOriginalName();
            $smktkr11->save();
        }
//tambah foto
        return redirect ('/smktkr11')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smktkr11 = \App\smktkr11::find($id);
        $smktkr11->delete($smktkr11);
        return redirect('/smktkr11')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
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
            if($smktkr11->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smktkr11->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smktkr11.profile',[ 'smktkr11' => $smktkr11, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmktkr11)
    {
        //dd($request->all());
        $smktkr11 = \App\Smktkr11::find($idsmktkr11);
        if($smktkr11->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smktkr11/'.$idsmktkr11.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smktkr11->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smktkr11/'.$idsmktkr11.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmktkr11)
    {
        //dd($request->all());
        $smktkr11 = \App\Smktkr11::find($idsmktkr11);

        $smktkr11->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smktkr11/'.$idsmktkr11.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmktkr11)
    {
        //dd($request->all());
        $smktkr11 = \App\Smktkr11::find($idsmktkr11);

        $smktkr11->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smktkr11/'.$idsmktkr11.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmktkr11)
    {
        //dd($request->all());
        $smktkr11 = \App\Smktkr11::find($idsmktkr11);

        $smktkr11->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smktkr11/'.$idsmktkr11.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmktkr11)
    {
        //dd($request->all());
        $smktkr11 = \App\Smktkr11::find($idsmktkr11);

        $smktkr11->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smktkr11/'.$idsmktkr11.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmktkr11)
    {
        //dd($request->all());
        $smktkr11 = \App\Smktkr11::find($idsmktkr11);

        $smktkr11->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smktkr11/'.$idsmktkr11.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmktkr11,$idmapel)
    {
        $smktkr11 = \App\Smktkr11::find($idsmktkr11);
        $smktkr11->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmktkr11,$idhukuman)
    {
        $smktkr11 = \App\Smktkr11::find($idsmktkr11);
        $smktkr11->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smktkr11Export, 'smktkr11.xlsx');
    }


    public function smktkr11importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmktkr11', $namaFile);

        Excel::import(new Smktkr11Import, public_path('/DataSmktkr11/'.$namaFile));
        return redirect('/smktkr11');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $data_smktkr11 = \App\Smktkr11::where('namalengkap52')->get();

        return view('smktkr11.printdatadiri', ['smktkr11' => $smktkr11, 'data_smktkr11' => $data_smktkr11]);
    }

    public function printmapel($id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $data_smktkr11 = \App\Smktkr11::where('namalengkap52')->get();

        return view('smktkr11.printmapel', ['smktkr11' => $smktkr11, 'data_smktkr11' => $data_smktkr11]);
    }

    public function printhukuman($id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $data_smktkr11 = \App\Smktkr11::where('namalengkap52')->get();

        return view('smktkr11.printhukuman', ['smktkr11' => $smktkr11, 'data_smktkr11' => $data_smktkr11]);
    }

    public function printizin($id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $data_smktkr11 = \App\Smktkr11::where('namalengkap52')->get();

        return view('smktkr11.printizin', ['smktkr11' => $smktkr11, 'data_smktkr11' => $data_smktkr11]);
    }

    public function printambil($id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $data_smktkr11 = \App\Smktkr11::where('namalengkap52')->get();

        return view('smktkr11.printambil', ['smktkr11' => $smktkr11, 'data_smktkr11' => $data_smktkr11]);
    }

    public function printprestasi($id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $data_smktkr11 = \App\Smktkr11::where('namalengkap52')->get();

        return view('smktkr11.printprestasi', ['smktkr11' => $smktkr11, 'data_smktkr11' => $data_smktkr11]);
    }

    public function printcatatan($id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $data_smktkr11 = \App\Smktkr11::where('namalengkap52')->get();

        return view('smktkr11.printcatatan', ['smktkr11' => $smktkr11, 'data_smktkr11' => $data_smktkr11]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmktkr11() 
    {
        $smktkr11 = auth()->user()->smktkr11;
        return view('smktkr11.profilsaya', compact(['smktkr11']));
    }


}
