<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Smp18;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smp18Export;
use App\Imports\Smp18Import;


class Smp18Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smp18 = \App\Smp18::where('namalengkap18','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smp18 = \App\Smp18::all();
        }
        return view('smp18.index', ['data_smp18' => $data_smp18]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp18';
        $user->name = $request->namalengkap18;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smp18
        $request->request->add(['user_id' => $user->id ]);
        $smp18 = \App\Smp18::create($request->all());
//tambah foto
        if($request->hasFile('avatar18')){
            $request->file('avatar18')->move('images/',$request->file('avatar18')->getClientOriginalName());
            $smp18->avatar18 = $request->file('avatar18')->getClientOriginalName();
            $smp18->save();
        }
//tambah foto        
        return redirect ('/smp18')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smp18 = \App\Smp18::find($id);
        return view('smp18/edit', ['smp18' => $smp18]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp18';
        $user->name = $request->namalengkap18;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smp18 = \App\Smp18::find($id);
        $smp18->update($request->all());
//tambah foto      
        if($request->hasFile('avatar18')){
            $request->file('avatar18')->move('images/',$request->file('avatar18')->getClientOriginalName());
            $smp18->avatar18 = $request->file('avatar18')->getClientOriginalName();
            $smp18->save();
        }
//tambah foto
        return redirect ('/smp18')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smp18 = \App\Smp18::find($id);
        $smp18->delete($smp18);
        return redirect('/smp18')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smp18 = \App\Smp18::find($id);
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
            if($smp18->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smp18->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smp18.profile',[ 'smp18' => $smp18, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmp18)
    {
        //dd($request->all());
        $smp18 = \App\Smp18::find($idsmp18);
        if($smp18->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smp18/'.$idsmp18.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smp18->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smp18/'.$idsmp18.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmp18)
    {
        //dd($request->all());
        $smp18 = \App\Smp18::find($idsmp18);

        $smp18->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smp18/'.$idsmp18.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmp18)
    {
        //dd($request->all());
        $smp18 = \App\Smp18::find($idsmp18);

        $smp18->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smp18/'.$idsmp18.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmp18)
    {
        //dd($request->all());
        $smp18 = \App\Smp18::find($idsmp18);

        $smp18->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smp18/'.$idsmp18.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmp18)
    {
        //dd($request->all());
        $smp18 = \App\Smp18::find($idsmp18);

        $smp18->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smp18/'.$idsmp18.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmp18)
    {
        //dd($request->all());
        $smp18 = \App\Smp18::find($idsmp18);

        $smp18->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smp18/'.$idsmp18.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmp18,$idmapel)
    {
        $smp18 = \App\Smp18::find($idsmp18);
        $smp18->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmp18,$idhukuman)
    {
        $smp18 = \App\Smp18::find($idsmp18);
        $smp18->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smp18Export, 'smp18.xlsx');
    }


    public function smp18importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmp18', $namaFile);

        Excel::import(new Smp18Import, public_path('/DataSmp18/'.$namaFile));
        return redirect('/smp18');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $smp18 = \App\Smp18::find($id);
        $data_smp18 = \App\Smp18::where('namalengkap18')->get();

        return view('smp18.printdatadiri', ['smp18' => $smp18, 'data_smp18' => $data_smp18]);
    }

    public function printmapel($id)
    {
        $smp18 = \App\Smp18::find($id);
        $data_smp18 = \App\Smp18::where('namalengkap18')->get();

        return view('smp18.printmapel', ['smp18' => $smp18, 'data_smp18' => $data_smp18]);
    }

    public function printhukuman($id)
    {
        $smp18 = \App\Smp18::find($id);
        $data_smp18 = \App\Smp18::where('namalengkap18')->get();

        return view('smp18.printhukuman', ['smp18' => $smp18, 'data_smp18' => $data_smp18]);
    }

    public function printizin($id)
    {
        $smp18 = \App\Smp18::find($id);
        $data_smp18 = \App\Smp18::where('namalengkap18')->get();

        return view('smp18.printizin', ['smp18' => $smp18, 'data_smp18' => $data_smp18]);
    }

    public function printambil($id)
    {
        $smp18 = \App\Smp18::find($id);
        $data_smp18 = \App\Smp18::where('namalengkap18')->get();

        return view('smp18.printambil', ['smp18' => $smp18, 'data_smp18' => $data_smp18]);
    }

    public function printprestasi($id)
    {
        $smp18 = \App\Smp18::find($id);
        $data_smp18 = \App\Smp18::where('namalengkap18')->get();

        return view('smp18.printprestasi', ['smp18' => $smp18, 'data_smp18' => $data_smp18]);
    }

    public function printcatatan($id)
    {
        $smp18 = \App\Smp18::find($id);
        $data_smp18 = \App\Smp18::where('namalengkap18')->get();

        return view('smp18.printcatatan', ['smp18' => $smp18, 'data_smp18' => $data_smp18]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmp18() 
    {
        $smp18 = auth()->user()->smp18;
        return view('smp18.profilsaya', compact(['smp18']));
    }

}
