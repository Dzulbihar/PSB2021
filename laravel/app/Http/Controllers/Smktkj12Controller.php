<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Smktkj12;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smktkj12Export;
use App\Imports\Smktkj12Import;


class Smktkj12Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smktkj12 = \App\Smktkj12::where('namalengkap43','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smktkj12 = \App\Smktkj12::all();
        }
        return view('smktkj12.index', ['data_smktkj12' => $data_smktkj12]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkj12';
        $user->name = $request->namalengkap43;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smktkj12
        $request->request->add(['user_id' => $user->id ]);
        $smktkj12 = \App\Smktkj12::create($request->all());
//tambah foto
        if($request->hasFile('avatar43')){
            $request->file('avatar43')->move('images/',$request->file('avatar43')->getClientOriginalName());
            $smktkj12->avatar43 = $request->file('avatar43')->getClientOriginalName();
            $smktkj12->save();
        }
//tambah foto        
        return redirect ('/smktkj12')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        return view('smktkj12/edit', ['smktkj12' => $smktkj12]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkj12';
        $user->name = $request->namalengkap43;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->update($request->all());
//tambah foto      
        if($request->hasFile('avatar43')){
            $request->file('avatar43')->move('images/',$request->file('avatar43')->getClientOriginalName());
            $smktkj12->avatar43 = $request->file('avatar43')->getClientOriginalName();
            $smktkj12->save();
        }
//tambah foto
        return redirect ('/smktkj12')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smktkj12 = \App\smktkj12::find($id);
        $smktkj12->delete($smktkj12);
        return redirect('/smktkj12')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
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
            if($smktkj12->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smktkj12->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smktkj12.profile',[ 'smktkj12' => $smktkj12, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmktkj12)
    {
        //dd($request->all());
        $smktkj12 = \App\Smktkj12::find($idsmktkj12);
        if($smktkj12->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smktkj12/'.$idsmktkj12.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smktkj12->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smktkj12/'.$idsmktkj12.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmktkj12)
    {
        //dd($request->all());
        $smktkj12 = \App\Smktkj12::find($idsmktkj12);

        $smktkj12->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smktkj12/'.$idsmktkj12.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmktkj12)
    {
        //dd($request->all());
        $smktkj12 = \App\Smktkj12::find($idsmktkj12);

        $smktkj12->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smktkj12/'.$idsmktkj12.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmktkj12)
    {
        //dd($request->all());
        $smktkj12 = \App\Smktkj12::find($idsmktkj12);

        $smktkj12->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smktkj12/'.$idsmktkj12.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmktkj12)
    {
        //dd($request->all());
        $smktkj12 = \App\Smktkj12::find($idsmktkj12);

        $smktkj12->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smktkj12/'.$idsmktkj12.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmktkj12)
    {
        //dd($request->all());
        $smktkj12 = \App\Smktkj12::find($idsmktkj12);

        $smktkj12->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smktkj12/'.$idsmktkj12.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmktkj12,$idmapel)
    {
        $smktkj12 = \App\Smktkj12::find($idsmktkj12);
        $smktkj12->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmktkj12,$idhukuman)
    {
        $smktkj12 = \App\Smktkj12::find($idsmktkj12);
        $smktkj12->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smktkj12Export, 'smktkj12.xlsx');
    }


    public function smktkj12importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmktkj12', $namaFile);

        Excel::import(new Smktkj12Import, public_path('/DataSmktkj12/'.$namaFile));
        return redirect('/smktkj12');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $data_smktkj12 = \App\Smktkj12::where('namalengkap43')->get();

        return view('smktkj12.printdatadiri', ['smktkj12' => $smktkj12, 'data_smktkj12' => $data_smktkj12]);
    }

    public function printmapel($id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $data_smktkj12 = \App\Smktkj12::where('namalengkap43')->get();

        return view('smktkj12.printmapel', ['smktkj12' => $smktkj12, 'data_smktkj12' => $data_smktkj12]);
    }

    public function printhukuman($id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $data_smktkj12 = \App\Smktkj12::where('namalengkap43')->get();

        return view('smktkj12.printhukuman', ['smktkj12' => $smktkj12, 'data_smktkj12' => $data_smktkj12]);
    }

    public function printizin($id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $data_smktkj12 = \App\Smktkj12::where('namalengkap43')->get();

        return view('smktkj12.printizin', ['smktkj12' => $smktkj12, 'data_smktkj12' => $data_smktkj12]);
    }

    public function printambil($id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $data_smktkj12 = \App\Smktkj12::where('namalengkap43')->get();

        return view('smktkj12.printambil', ['smktkj12' => $smktkj12, 'data_smktkj12' => $data_smktkj12]);
    }

    public function printprestasi($id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $data_smktkj12 = \App\Smktkj12::where('namalengkap43')->get();

        return view('smktkj12.printprestasi', ['smktkj12' => $smktkj12, 'data_smktkj12' => $data_smktkj12]);
    }

    public function printcatatan($id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $data_smktkj12 = \App\Smktkj12::where('namalengkap43')->get();

        return view('smktkj12.printcatatan', ['smktkj12' => $smktkj12, 'data_smktkj12' => $data_smktkj12]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmktkj12() 
    {
        $smktkj12 = auth()->user()->smktkj12;
        return view('smktkj12.profilsaya', compact(['smktkj12']));
    }


}
