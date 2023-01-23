<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Smp28;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smp28Export;
use App\Imports\Smp28Import;


class Smp28Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smp28 = \App\Smp28::where('namalengkap28','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smp28 = \App\Smp28::all();
        }
        return view('smp28.index', ['data_smp28' => $data_smp28]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp28';
        $user->name = $request->namalengkap28;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smp28
        $request->request->add(['user_id' => $user->id ]);
        $smp28 = \App\Smp28::create($request->all());
//tambah foto
        if($request->hasFile('avatar28')){
            $request->file('avatar28')->move('images/',$request->file('avatar28')->getClientOriginalName());
            $smp28->avatar28 = $request->file('avatar28')->getClientOriginalName();
            $smp28->save();
        }
//tambah foto        
        return redirect ('/smp28')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smp28 = \App\Smp28::find($id);
        return view('smp28/edit', ['smp28' => $smp28]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp28';
        $user->name = $request->namalengkap28;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smp28 = \App\Smp28::find($id);
        $smp28->update($request->all());
//tambah foto      
        if($request->hasFile('avatar28')){
            $request->file('avatar28')->move('images/',$request->file('avatar28')->getClientOriginalName());
            $smp28->avatar28 = $request->file('avatar28')->getClientOriginalName();
            $smp28->save();
        }
//tambah foto
        return redirect ('/smp28')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->delete($smp28);
        return redirect('/smp28')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smp28 = \App\Smp28::find($id);
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
            if($smp28->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smp28->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smp28.profile',[ 'smp28' => $smp28, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmp28)
    {
        //dd($request->all());
        $smp28 = \App\Smp28::find($idsmp28);
        if($smp28->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smp28/'.$idsmp28.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smp28->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smp28/'.$idsmp28.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmp28)
    {
        //dd($request->all());
        $smp28 = \App\Smp28::find($idsmp28);

        $smp28->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smp28/'.$idsmp28.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmp28)
    {
        //dd($request->all());
        $smp28 = \App\Smp28::find($idsmp28);

        $smp28->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smp28/'.$idsmp28.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmp28)
    {
        //dd($request->all());
        $smp28 = \App\Smp28::find($idsmp28);

        $smp28->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smp28/'.$idsmp28.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmp28)
    {
        //dd($request->all());
        $smp28 = \App\Smp28::find($idsmp28);

        $smp28->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smp28/'.$idsmp28.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmp28)
    {
        //dd($request->all());
        $smp28 = \App\Smp28::find($idsmp28);

        $smp28->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smp28/'.$idsmp28.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmp28,$idmapel)
    {
        $smp28 = \App\Smp28::find($idsmp28);
        $smp28->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmp28,$idhukuman)
    {
        $smp28 = \App\Smp28::find($idsmp28);
        $smp28->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smp28Export, 'smp28.xlsx');
    }


    public function smp28importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmp28', $namaFile);

        Excel::import(new Smp28Import, public_path('/DataSmp28/'.$namaFile));
        return redirect('/smp28');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $smp28 = \App\Smp28::find($id);
        $data_smp28 = \App\Smp28::where('namalengkap28')->get();

        return view('smp28.printdatadiri', ['smp28' => $smp28, 'data_smp28' => $data_smp28]);
    }

    public function printmapel($id)
    {
        $smp28 = \App\Smp28::find($id);
        $data_smp28 = \App\Smp28::where('namalengkap28')->get();

        return view('smp28.printmapel', ['smp28' => $smp28, 'data_smp28' => $data_smp28]);
    }

    public function printhukuman($id)
    {
        $smp28 = \App\Smp28::find($id);
        $data_smp28 = \App\Smp28::where('namalengkap28')->get();

        return view('smp28.printhukuman', ['smp28' => $smp28, 'data_smp28' => $data_smp28]);
    }

    public function printizin($id)
    {
        $smp28 = \App\Smp28::find($id);
        $data_smp28 = \App\Smp28::where('namalengkap28')->get();

        return view('smp28.printizin', ['smp28' => $smp28, 'data_smp28' => $data_smp28]);
    }

    public function printambil($id)
    {
        $smp28 = \App\Smp28::find($id);
        $data_smp28 = \App\Smp28::where('namalengkap28')->get();

        return view('smp28.printambil', ['smp28' => $smp28, 'data_smp28' => $data_smp28]);
    }

    public function printprestasi($id)
    {
        $smp28 = \App\Smp28::find($id);
        $data_smp28 = \App\Smp28::where('namalengkap28')->get();

        return view('smp28.printprestasi', ['smp28' => $smp28, 'data_smp28' => $data_smp28]);
    }

    public function printcatatan($id)
    {
        $smp28 = \App\Smp28::find($id);
        $data_smp28 = \App\Smp28::where('namalengkap28')->get();

        return view('smp28.printcatatan', ['smp28' => $smp28, 'data_smp28' => $data_smp28]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmp28() 
    {
        $smp28 = auth()->user()->smp28;
        return view('smp28.profilsaya', compact(['smp28']));
    }
}
