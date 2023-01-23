<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Smp19;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smp19Export;
use App\Imports\Smp19Import;


class Smp19Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smp19 = \App\Smp19::where('namalengkap19','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smp19 = \App\Smp19::all();
        }
        return view('smp19.index', ['data_smp19' => $data_smp19]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp19';
        $user->name = $request->namalengkap19;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smp19
        $request->request->add(['user_id' => $user->id ]);
        $smp19 = \App\Smp19::create($request->all());
//tambah foto
        if($request->hasFile('avatar19')){
            $request->file('avatar19')->move('images/',$request->file('avatar19')->getClientOriginalName());
            $smp19->avatar19 = $request->file('avatar19')->getClientOriginalName();
            $smp19->save();
        }
//tambah foto        
        return redirect ('/smp19')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smp19 = \App\Smp19::find($id);
        return view('smp19/edit', ['smp19' => $smp19]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp19';
        $user->name = $request->namalengkap19;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        $smp19 = \App\Smp19::find($id);
        $smp19->update($request->all());
//tambah foto      
        if($request->hasFile('avatar19')){
            $request->file('avatar19')->move('images/',$request->file('avatar19')->getClientOriginalName());
            $smp19->avatar19 = $request->file('avatar19')->getClientOriginalName();
            $smp19->save();
        }
//tambah foto
        return redirect ('/smp19')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->delete($smp19);
        return redirect('/smp19')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smp19 = \App\Smp19::find($id);
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
            if($smp19->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smp19->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smp19.profile',[ 'smp19' => $smp19, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmp19)
    {
        //dd($request->all());
        $smp19 = \App\Smp19::find($idsmp19);
        if($smp19->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smp19/'.$idsmp19.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smp19->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smp19/'.$idsmp19.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmp19)
    {
        //dd($request->all());
        $smp19 = \App\Smp19::find($idsmp19);

        $smp19->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smp19/'.$idsmp19.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmp19)
    {
        //dd($request->all());
        $smp19 = \App\Smp19::find($idsmp19);

        $smp19->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smp19/'.$idsmp19.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmp19)
    {
        //dd($request->all());
        $smp19 = \App\Smp19::find($idsmp19);

        $smp19->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smp19/'.$idsmp19.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmp19)
    {
        //dd($request->all());
        $smp19 = \App\Smp19::find($idsmp19);

        $smp19->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smp19/'.$idsmp19.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmp19)
    {
        //dd($request->all());
        $smp19 = \App\Smp19::find($idsmp19);

        $smp19->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smp19/'.$idsmp19.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmp19,$idmapel)
    {
        $smp19 = \App\Smp19::find($idsmp19);
        $smp19->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmp19,$idhukuman)
    {
        $smp19 = \App\Smp19::find($idsmp19);
        $smp19->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smp19Export, 'smp19.xlsx');
    }


    public function smp19importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmp19', $namaFile);

        Excel::import(new Smp19Import, public_path('/DataSmp19/'.$namaFile));
        return redirect('/smp19');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $smp19 = \App\Smp19::find($id);
        $data_smp19 = \App\Smp19::where('namalengkap19')->get();

        return view('smp19.printdatadiri', ['smp19' => $smp19, 'data_smp19' => $data_smp19]);
    }

    public function printmapel($id)
    {
        $smp19 = \App\Smp19::find($id);
        $data_smp19 = \App\Smp19::where('namalengkap19')->get();

        return view('smp19.printmapel', ['smp19' => $smp19, 'data_smp19' => $data_smp19]);
    }

    public function printhukuman($id)
    {
        $smp19 = \App\Smp19::find($id);
        $data_smp19 = \App\Smp19::where('namalengkap19')->get();

        return view('smp19.printhukuman', ['smp19' => $smp19, 'data_smp19' => $data_smp19]);
    }

    public function printizin($id)
    {
        $smp19 = \App\Smp19::find($id);
        $data_smp19 = \App\Smp19::where('namalengkap19')->get();

        return view('smp19.printizin', ['smp19' => $smp19, 'data_smp19' => $data_smp19]);
    }

    public function printambil($id)
    {
        $smp19 = \App\Smp19::find($id);
        $data_smp19 = \App\Smp19::where('namalengkap19')->get();

        return view('smp19.printambil', ['smp19' => $smp19, 'data_smp19' => $data_smp19]);
    }

    public function printprestasi($id)
    {
        $smp19 = \App\Smp19::find($id);
        $data_smp19 = \App\Smp19::where('namalengkap19')->get();

        return view('smp19.printprestasi', ['smp19' => $smp19, 'data_smp19' => $data_smp19]);
    }

    public function printcatatan($id)
    {
        $smp19 = \App\Smp19::find($id);
        $data_smp19 = \App\Smp19::where('namalengkap19')->get();

        return view('smp19.printcatatan', ['smp19' => $smp19, 'data_smp19' => $data_smp19]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmp19() 
    {
        $smp19 = auth()->user()->smp19;
        return view('smp19.profilsaya', compact(['smp19']));
    }

}
