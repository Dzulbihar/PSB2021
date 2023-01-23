<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Smp17;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smp17Export;
use App\Imports\Smp17Import;


class Smp17Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smp17 = \App\Smp17::where('namalengkap17','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smp17 = \App\Smp17::all();
        }
        return view('smp17.index', ['data_smp17' => $data_smp17]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp17';
        $user->name = $request->namalengkap17;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smp17
        $request->request->add(['user_id' => $user->id ]);
        $smp17 = \App\Smp17::create($request->all());
//tambah foto
        if($request->hasFile('avatar17')){
            $request->file('avatar17')->move('images/',$request->file('avatar17')->getClientOriginalName());
            $smp17->avatar17 = $request->file('avatar17')->getClientOriginalName();
            $smp17->save();
        }
//tambah foto        
        return redirect ('/smp17')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smp17 = \App\Smp17::find($id);
        return view('smp17/edit', ['smp17' => $smp17]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp17';
        $user->name = $request->namalengkap17;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smp17 = \App\Smp17::find($id);
        $smp17->update($request->all());
//tambah foto      
        if($request->hasFile('avatar17')){
            $request->file('avatar17')->move('images/',$request->file('avatar17')->getClientOriginalName());
            $smp17->avatar17 = $request->file('avatar17')->getClientOriginalName();
            $smp17->save();
        }
//tambah foto
        return redirect ('/smp17')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->delete($smp17);
        return redirect('/smp17')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smp17 = \App\Smp17::find($id);
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
            if($smp17->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smp17->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smp17.profile',[ 'smp17' => $smp17, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmp17)
    {
        //dd($request->all());
        $smp17 = \App\Smp17::find($idsmp17);
        if($smp17->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smp17/'.$idsmp17.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smp17->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smp17/'.$idsmp17.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmp17)
    {
        //dd($request->all());
        $smp17 = \App\Smp17::find($idsmp17);

        $smp17->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smp17/'.$idsmp17.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmp17)
    {
        //dd($request->all());
        $smp17 = \App\Smp17::find($idsmp17);

        $smp17->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smp17/'.$idsmp17.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmp17)
    {
        //dd($request->all());
        $smp17 = \App\Smp17::find($idsmp17);

        $smp17->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smp17/'.$idsmp17.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmp17)
    {
        //dd($request->all());
        $smp17 = \App\Smp17::find($idsmp17);

        $smp17->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smp17/'.$idsmp17.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmp17)
    {
        //dd($request->all());
        $smp17 = \App\Smp17::find($idsmp17);

        $smp17->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smp17/'.$idsmp17.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

        public function deletenilai($idsmp17,$idmapel)
    {
        $smp17 = \App\Smp17::find($idsmp17);
        $smp17->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmp17,$idhukuman)
    {
        $smp17 = \App\Smp17::find($idsmp17);
        $smp17->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smp17Export, 'smp17.xlsx');
    }


    public function smp17importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmp17', $namaFile);

        Excel::import(new Smp17Import, public_path('/DataSmp17/'.$namaFile));
        return redirect('/smp17');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $smp17 = \App\Smp17::find($id);
        $data_smp17 = \App\Smp17::where('namalengkap17')->get();

        return view('smp17.printdatadiri', ['smp17' => $smp17, 'data_smp17' => $data_smp17]);
    }

    public function printmapel($id)
    {
        $smp17 = \App\Smp17::find($id);
        $data_smp17 = \App\Smp17::where('namalengkap17')->get();

        return view('smp17.printmapel', ['smp17' => $smp17, 'data_smp17' => $data_smp17]);
    }

    public function printhukuman($id)
    {
        $smp17 = \App\Smp17::find($id);
        $data_smp17 = \App\Smp17::where('namalengkap17')->get();

        return view('smp17.printhukuman', ['smp17' => $smp17, 'data_smp17' => $data_smp17]);
    }

    public function printizin($id)
    {
        $smp17 = \App\Smp17::find($id);
        $data_smp17 = \App\Smp17::where('namalengkap17')->get();

        return view('smp17.printizin', ['smp17' => $smp17, 'data_smp17' => $data_smp17]);
    }

    public function printambil($id)
    {
        $smp17 = \App\Smp17::find($id);
        $data_smp17 = \App\Smp17::where('namalengkap17')->get();

        return view('smp17.printambil', ['smp17' => $smp17, 'data_smp17' => $data_smp17]);
    }

    public function printprestasi($id)
    {
        $smp17 = \App\Smp17::find($id);
        $data_smp17 = \App\Smp17::where('namalengkap17')->get();

        return view('smp17.printprestasi', ['smp17' => $smp17, 'data_smp17' => $data_smp17]);
    }

    public function printcatatan($id)
    {
        $smp17 = \App\Smp17::find($id);
        $data_smp17 = \App\Smp17::where('namalengkap17')->get();

        return view('smp17.printcatatan', ['smp17' => $smp17, 'data_smp17' => $data_smp17]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmp17() 
    {
        $smp17 = auth()->user()->smp17;
        return view('smp17.profilsaya', compact(['smp17']));
    }

}
