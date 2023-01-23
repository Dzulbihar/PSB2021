<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Smktkr12;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smktkr12Export;
use App\Imports\Smktkr12Import;


class Smktkr12Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smktkr12 = \App\Smktkr12::where('namalengkap53','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smktkr12 = \App\Smktkr12::all();
        }
        return view('smktkr12.index', ['data_smktkr12' => $data_smktkr12]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkr12';
        $user->name = $request->namalengkap53;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smktkr12
        $request->request->add(['user_id' => $user->id ]);
        $smktkr12 = \App\Smktkr12::create($request->all());
//tambah foto
        if($request->hasFile('avatar53')){
            $request->file('avatar53')->move('images/',$request->file('avatar53')->getClientOriginalName());
            $smktkr12->avatar53 = $request->file('avatar53')->getClientOriginalName();
            $smktkr12->save();
        }
//tambah foto        
        return redirect ('/smktkr12')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        return view('smktkr12/edit', ['smktkr12' => $smktkr12]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smktkr12';
        $user->name = $request->namalengkap53;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->update($request->all());
//tambah foto      
        if($request->hasFile('avatar53')){
            $request->file('avatar53')->move('images/',$request->file('avatar53')->getClientOriginalName());
            $smktkr12->avatar53 = $request->file('avatar53')->getClientOriginalName();
            $smktkr12->save();
        }
//tambah foto
        return redirect ('/smktkr12')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smktkr12 = \App\smktkr12::find($id);
        $smktkr12->delete($smktkr12);
        return redirect('/smktkr12')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
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
            if($smktkr12->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smktkr12->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smktkr12.profile',[ 'smktkr12' => $smktkr12, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmktkr12)
    {
        //dd($request->all());
        $smktkr12 = \App\Smktkr12::find($idsmktkr12);
        if($smktkr12->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smktkr12/'.$idsmktkr12.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smktkr12->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smktkr12/'.$idsmktkr12.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmktkr12)
    {
        //dd($request->all());
        $smktkr12 = \App\Smktkr12::find($idsmktkr12);

        $smktkr12->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smktkr12/'.$idsmktkr12.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmktkr12)
    {
        //dd($request->all());
        $smktkr12 = \App\Smktkr12::find($idsmktkr12);

        $smktkr12->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smktkr12/'.$idsmktkr12.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmktkr12)
    {
        //dd($request->all());
        $smktkr12 = \App\Smktkr12::find($idsmktkr12);

        $smktkr12->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smktkr12/'.$idsmktkr12.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmktkr12)
    {
        //dd($request->all());
        $smktkr12 = \App\Smktkr12::find($idsmktkr12);

        $smktkr12->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smktkr12/'.$idsmktkr12.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmktkr12)
    {
        //dd($request->all());
        $smktkr12 = \App\Smktkr12::find($idsmktkr12);

        $smktkr12->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smktkr12/'.$idsmktkr12.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmktkr12,$idmapel)
    {
        $smktkr12 = \App\Smktkr12::find($idsmktkr12);
        $smktkr12->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmktkr12,$idhukuman)
    {
        $smktkr12 = \App\Smktkr12::find($idsmktkr12);
        $smktkr12->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smktkr12Export, 'smktkr12.xlsx');
    }


    public function smktkr12importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmktkr12', $namaFile);

        Excel::import(new Smktkr12Import, public_path('/DataSmktkr12/'.$namaFile));
        return redirect('/smktkr12');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $data_smktkr12 = \App\Smktkr12::where('namalengkap53')->get();

        return view('smktkr12.printdatadiri', ['smktkr12' => $smktkr12, 'data_smktkr12' => $data_smktkr12]);
    }

    public function printmapel($id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $data_smktkr12 = \App\Smktkr12::where('namalengkap53')->get();

        return view('smktkr12.printmapel', ['smktkr12' => $smktkr12, 'data_smktkr12' => $data_smktkr12]);
    }

    public function printhukuman($id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $data_smktkr12 = \App\Smktkr12::where('namalengkap53')->get();

        return view('smktkr12.printhukuman', ['smktkr12' => $smktkr12, 'data_smktkr12' => $data_smktkr12]);
    }

    public function printizin($id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $data_smktkr12 = \App\Smktkr12::where('namalengkap53')->get();

        return view('smktkr12.printizin', ['smktkr12' => $smktkr12, 'data_smktkr12' => $data_smktkr12]);
    }

    public function printambil($id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $data_smktkr12 = \App\Smktkr12::where('namalengkap53')->get();

        return view('smktkr12.printambil', ['smktkr12' => $smktkr12, 'data_smktkr12' => $data_smktkr12]);
    }

    public function printprestasi($id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $data_smktkr12 = \App\Smktkr12::where('namalengkap53')->get();

        return view('smktkr12.printprestasi', ['smktkr12' => $smktkr12, 'data_smktkr12' => $data_smktkr12]);
    }

    public function printcatatan($id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $data_smktkr12 = \App\Smktkr12::where('namalengkap53')->get();

        return view('smktkr12.printcatatan', ['smktkr12' => $smktkr12, 'data_smktkr12' => $data_smktkr12]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmktkr12() 
    {
        $smktkr12 = auth()->user()->smktkr12;
        return view('smktkr12.profilsaya', compact(['smktkr12']));
    }


}
