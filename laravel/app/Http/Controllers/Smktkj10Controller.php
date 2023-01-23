<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Smktkj10;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smktkj10Export;
use App\Imports\Smktkj10Import;


class Smktkj10Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smktkj10 = \App\Smktkj10::where('namalengkap41','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smktkj10 = \App\Smktkj10::all();
        }
        return view('smktkj10.index', ['data_smktkj10' => $data_smktkj10]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkj10';
        $user->name = $request->namalengkap41;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smktkj10
        $request->request->add(['user_id' => $user->id ]);
        $smktkj10 = \App\Smktkj10::create($request->all());
//tambah foto
        if($request->hasFile('avatar41')){
            $request->file('avatar41')->move('images/',$request->file('avatar41')->getClientOriginalName());
            $smktkj10->avatar41 = $request->file('avatar41')->getClientOriginalName();
            $smktkj10->save();
        }
//tambah foto        
        return redirect ('/smktkj10')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        return view('smktkj10/edit', ['smktkj10' => $smktkj10]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkj10';
        $user->name = $request->namalengkap41;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->update($request->all());
//tambah foto      
        if($request->hasFile('avatar41')){
            $request->file('avatar41')->move('images/',$request->file('avatar41')->getClientOriginalName());
            $smktkj10->avatar41 = $request->file('avatar41')->getClientOriginalName();
            $smktkj10->save();
        }
//tambah foto
        return redirect ('/smktkj10')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smktkj10 = \App\smktkj10::find($id);
        $smktkj10->delete($smktkj10);
        return redirect('/smktkj10')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
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
            if($smktkj10->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smktkj10->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smktkj10.profile',[ 'smktkj10' => $smktkj10, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmktkj10)
    {
        //dd($request->all());
        $smktkj10 = \App\Smktkj10::find($idsmktkj10);
        if($smktkj10->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smktkj10/'.$idsmktkj10.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smktkj10->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smktkj10/'.$idsmktkj10.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmktkj10)
    {
        //dd($request->all());
        $smktkj10 = \App\Smktkj10::find($idsmktkj10);

        $smktkj10->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smktkj10/'.$idsmktkj10.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmktkj10)
    {
        //dd($request->all());
        $smktkj10 = \App\Smktkj10::find($idsmktkj10);

        $smktkj10->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smktkj10/'.$idsmktkj10.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmktkj10)
    {
        //dd($request->all());
        $smktkj10 = \App\Smktkj10::find($idsmktkj10);

        $smktkj10->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smktkj10/'.$idsmktkj10.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmktkj10)
    {
        //dd($request->all());
        $smktkj10 = \App\Smktkj10::find($idsmktkj10);

        $smktkj10->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smktkj10/'.$idsmktkj10.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmktkj10)
    {
        //dd($request->all());
        $smktkj10 = \App\Smktkj10::find($idsmktkj10);

        $smktkj10->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smktkj10/'.$idsmktkj10.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmktkj10,$idmapel)
    {
        $smktkj10 = \App\Smktkj10::find($idsmktkj10);
        $smktkj10->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmktkj10,$idhukuman)
    {
        $smktkj10 = \App\Smktkj10::find($idsmktkj10);
        $smktkj10->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smktkj10Export, 'smktkj10.xlsx');
    }


    public function smktkj10importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmktkj10', $namaFile);

        Excel::import(new Smktkj10Import, public_path('/DataSmktkj10/'.$namaFile));
        return redirect('/smktkj10');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $data_smktkj10 = \App\Smktkj10::where('namalengkap41')->get();

        return view('smktkj10.printdatadiri', ['smktkj10' => $smktkj10, 'data_smktkj10' => $data_smktkj10]);
    }

    public function printmapel($id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $data_smktkj10 = \App\Smktkj10::where('namalengkap41')->get();

        return view('smktkj10.printmapel', ['smktkj10' => $smktkj10, 'data_smktkj10' => $data_smktkj10]);
    }

    public function printhukuman($id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $data_smktkj10 = \App\Smktkj10::where('namalengkap41')->get();

        return view('smktkj10.printhukuman', ['smktkj10' => $smktkj10, 'data_smktkj10' => $data_smktkj10]);
    }

    public function printizin($id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $data_smktkj10 = \App\Smktkj10::where('namalengkap41')->get();

        return view('smktkj10.printizin', ['smktkj10' => $smktkj10, 'data_smktkj10' => $data_smktkj10]);
    }

    public function printambil($id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $data_smktkj10 = \App\Smktkj10::where('namalengkap41')->get();

        return view('smktkj10.printambil', ['smktkj10' => $smktkj10, 'data_smktkj10' => $data_smktkj10]);
    }

    public function printprestasi($id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $data_smktkj10 = \App\Smktkj10::where('namalengkap41')->get();

        return view('smktkj10.printprestasi', ['smktkj10' => $smktkj10, 'data_smktkj10' => $data_smktkj10]);
    }

    public function printcatatan($id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $data_smktkj10 = \App\Smktkj10::where('namalengkap41')->get();

        return view('smktkj10.printcatatan', ['smktkj10' => $smktkj10, 'data_smktkj10' => $data_smktkj10]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmktkj10() 
    {
        $smktkj10 = auth()->user()->smktkj10;
        return view('smktkj10.profilsaya', compact(['smktkj10']));
    }


}
