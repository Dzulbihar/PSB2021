<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Smp27;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smp27Export;
use App\Imports\Smp27Import;


class Smp27Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smp27 = \App\Smp27::where('namalengkap27','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smp27 = \App\Smp27::all();
        }
        return view('smp27.index', ['data_smp27' => $data_smp27]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp27';
        $user->name = $request->namalengkap27;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smp27
        $request->request->add(['user_id' => $user->id ]);
        $smp27 = \App\Smp27::create($request->all());
//tambah foto
        if($request->hasFile('avatar27')){
            $request->file('avatar27')->move('images/',$request->file('avatar27')->getClientOriginalName());
            $smp27->avatar27 = $request->file('avatar27')->getClientOriginalName();
            $smp27->save();
        }
//tambah foto        
        return redirect ('/smp27')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smp27 = \App\Smp27::find($id);
        return view('smp27/edit', ['smp27' => $smp27]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp27';
        $user->name = $request->namalengkap27;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smp27 = \App\Smp27::find($id);
        $smp27->update($request->all());
//tambah foto      
        if($request->hasFile('avatar27')){
            $request->file('avatar27')->move('images/',$request->file('avatar27')->getClientOriginalName());
            $smp27->avatar27 = $request->file('avatar27')->getClientOriginalName();
            $smp27->save();
        }
//tambah foto
        return redirect ('/smp27')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->delete($smp27);
        return redirect('/smp27')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smp27 = \App\Smp27::find($id);
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
            if($smp27->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smp27->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smp27.profile',[ 'smp27' => $smp27, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmp27)
    {
        //dd($request->all());
        $smp27 = \App\Smp27::find($idsmp27);
        if($smp27->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smp27/'.$idsmp27.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smp27->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smp27/'.$idsmp27.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmp27)
    {
        //dd($request->all());
        $smp27 = \App\Smp27::find($idsmp27);

        $smp27->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smp27/'.$idsmp27.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmp27)
    {
        //dd($request->all());
        $smp27 = \App\Smp27::find($idsmp27);

        $smp27->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smp27/'.$idsmp27.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmp27)
    {
        //dd($request->all());
        $smp27 = \App\Smp27::find($idsmp27);

        $smp27->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smp27/'.$idsmp27.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmp27)
    {
        //dd($request->all());
        $smp27 = \App\Smp27::find($idsmp27);

        $smp27->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smp27/'.$idsmp27.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmp27)
    {
        //dd($request->all());
        $smp27 = \App\Smp27::find($idsmp27);

        $smp27->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smp27/'.$idsmp27.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmp27,$idmapel)
    {
        $smp27 = \App\Smp27::find($idsmp27);
        $smp27->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmp27,$idhukuman)
    {
        $smp27 = \App\Smp27::find($idsmp27);
        $smp27->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smp27Export, 'smp27.xlsx');
    }


    public function smp27importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmp27', $namaFile);

        Excel::import(new Smp27Import, public_path('/DataSmp27/'.$namaFile));
        return redirect('/smp27');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $smp27 = \App\Smp27::find($id);
        $data_smp27 = \App\Smp27::where('namalengkap27')->get();

        return view('smp27.printdatadiri', ['smp27' => $smp27, 'data_smp27' => $data_smp27]);
    }

    public function printmapel($id)
    {
        $smp27 = \App\Smp27::find($id);
        $data_smp27 = \App\Smp27::where('namalengkap27')->get();

        return view('smp27.printmapel', ['smp27' => $smp27, 'data_smp27' => $data_smp27]);
    }

    public function printhukuman($id)
    {
        $smp27 = \App\Smp27::find($id);
        $data_smp27 = \App\Smp27::where('namalengkap27')->get();

        return view('smp27.printhukuman', ['smp27' => $smp27, 'data_smp27' => $data_smp27]);
    }

    public function printizin($id)
    {
        $smp27 = \App\Smp27::find($id);
        $data_smp27 = \App\Smp27::where('namalengkap27')->get();

        return view('smp27.printizin', ['smp27' => $smp27, 'data_smp27' => $data_smp27]);
    }

    public function printambil($id)
    {
        $smp27 = \App\Smp27::find($id);
        $data_smp27 = \App\Smp27::where('namalengkap27')->get();

        return view('smp27.printambil', ['smp27' => $smp27, 'data_smp27' => $data_smp27]);
    }

    public function printprestasi($id)
    {
        $smp27 = \App\Smp27::find($id);
        $data_smp27 = \App\Smp27::where('namalengkap27')->get();

        return view('smp27.printprestasi', ['smp27' => $smp27, 'data_smp27' => $data_smp27]);
    }

    public function printcatatan($id)
    {
        $smp27 = \App\Smp27::find($id);
        $data_smp27 = \App\Smp27::where('namalengkap27')->get();

        return view('smp27.printcatatan', ['smp27' => $smp27, 'data_smp27' => $data_smp27]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmp27() 
    {
        $smp27 = auth()->user()->smp27;
        return view('smp27.profilsaya', compact(['smp27']));
    }

}
