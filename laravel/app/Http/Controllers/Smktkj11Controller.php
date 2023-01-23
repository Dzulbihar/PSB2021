<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Smktkj11;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smktkj11Export;
use App\Imports\Smktkj11Import;


class Smktkj11Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smktkj11 = \App\Smktkj11::where('namalengkap42','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smktkj11 = \App\Smktkj11::all();
        }
        return view('smktkj11.index', ['data_smktkj11' => $data_smktkj11]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkj11';
        $user->name = $request->namalengkap42;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smktkj11
        $request->request->add(['user_id' => $user->id ]);
        $smktkj11 = \App\Smktkj11::create($request->all());
//tambah foto
        if($request->hasFile('avatar42')){
            $request->file('avatar42')->move('images/',$request->file('avatar42')->getClientOriginalName());
            $smktkj11->avatar42 = $request->file('avatar42')->getClientOriginalName();
            $smktkj11->save();
        }
//tambah foto        
        return redirect ('/smktkj11')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        return view('smktkj11/edit', ['smktkj11' => $smktkj11]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkj11';
        $user->name = $request->namalengkap42;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->update($request->all());
//tambah foto      
        if($request->hasFile('avatar42')){
            $request->file('avatar42')->move('images/',$request->file('avatar42')->getClientOriginalName());
            $smktkj11->avatar42 = $request->file('avatar42')->getClientOriginalName();
            $smktkj11->save();
        }
//tambah foto
        return redirect ('/smktkj11')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smktkj11 = \App\smktkj11::find($id);
        $smktkj11->delete($smktkj11);
        return redirect('/smktkj11')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
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
            if($smktkj11->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smktkj11->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smktkj11.profile',[ 'smktkj11' => $smktkj11, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmktkj11)
    {
        //dd($request->all());
        $smktkj11 = \App\Smktkj11::find($idsmktkj11);
        if($smktkj11->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smktkj11/'.$idsmktkj11.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smktkj11->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smktkj11/'.$idsmktkj11.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmktkj11)
    {
        //dd($request->all());
        $smktkj11 = \App\Smktkj11::find($idsmktkj11);

        $smktkj11->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smktkj11/'.$idsmktkj11.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmktkj11)
    {
        //dd($request->all());
        $smktkj11 = \App\Smktkj11::find($idsmktkj11);

        $smktkj11->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smktkj11/'.$idsmktkj11.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmktkj11)
    {
        //dd($request->all());
        $smktkj11 = \App\Smktkj11::find($idsmktkj11);

        $smktkj11->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smktkj11/'.$idsmktkj11.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmktkj11)
    {
        //dd($request->all());
        $smktkj11 = \App\Smktkj11::find($idsmktkj11);

        $smktkj11->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smktkj11/'.$idsmktkj11.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmktkj11)
    {
        //dd($request->all());
        $smktkj11 = \App\Smktkj11::find($idsmktkj11);

        $smktkj11->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smktkj11/'.$idsmktkj11.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmktkj11,$idmapel)
    {
        $smktkj11 = \App\Smktkj11::find($idsmktkj11);
        $smktkj11->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmktkj11,$idhukuman)
    {
        $smktkj11 = \App\Smktkj11::find($idsmktkj11);
        $smktkj11->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smktkj11Export, 'smktkj11.xlsx');
    }


    public function smktkj11importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmktkj11', $namaFile);

        Excel::import(new Smktkj11Import, public_path('/DataSmktkj11/'.$namaFile));
        return redirect('/smktkj11');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $data_smktkj11 = \App\Smktkj11::where('namalengkap42')->get();

        return view('smktkj11.printdatadiri', ['smktkj11' => $smktkj11, 'data_smktkj11' => $data_smktkj11]);
    }

    public function printmapel($id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $data_smktkj11 = \App\Smktkj11::where('namalengkap42')->get();

        return view('smktkj11.printmapel', ['smktkj11' => $smktkj11, 'data_smktkj11' => $data_smktkj11]);
    }

    public function printhukuman($id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $data_smktkj11 = \App\Smktkj11::where('namalengkap42')->get();

        return view('smktkj11.printhukuman', ['smktkj11' => $smktkj11, 'data_smktkj11' => $data_smktkj11]);
    }

    public function printizin($id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $data_smktkj11 = \App\Smktkj11::where('namalengkap42')->get();

        return view('smktkj11.printizin', ['smktkj11' => $smktkj11, 'data_smktkj11' => $data_smktkj11]);
    }

    public function printambil($id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $data_smktkj11 = \App\Smktkj11::where('namalengkap42')->get();

        return view('smktkj11.printambil', ['smktkj11' => $smktkj11, 'data_smktkj11' => $data_smktkj11]);
    }

    public function printprestasi($id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $data_smktkj11 = \App\Smktkj11::where('namalengkap42')->get();

        return view('smktkj11.printprestasi', ['smktkj11' => $smktkj11, 'data_smktkj11' => $data_smktkj11]);
    }

    public function printcatatan($id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $data_smktkj11 = \App\Smktkj11::where('namalengkap42')->get();

        return view('smktkj11.printcatatan', ['smktkj11' => $smktkj11, 'data_smktkj11' => $data_smktkj11]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmktkj11() 
    {
        $smktkj11 = auth()->user()->smktkj11;
        return view('smktkj11.profilsaya', compact(['smktkj11']));
    }


}
