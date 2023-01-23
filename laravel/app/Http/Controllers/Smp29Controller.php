<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Smp29;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Smp29Export;
use App\Imports\Smp29Import;


class Smp29Controller extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_smp29 = \App\Smp29::where('namalengkap29','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_smp29 = \App\Smp29::all();
        }
        return view('smp29.index', ['data_smp29' => $data_smp29]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp29';
        $user->name = $request->namalengkap29;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel smp29
        $request->request->add(['user_id' => $user->id ]);
        $smp29 = \App\Smp29::create($request->all());
//tambah foto
        if($request->hasFile('avatar29')){
            $request->file('avatar29')->move('images/',$request->file('avatar29')->getClientOriginalName());
            $smp29->avatar29 = $request->file('avatar29')->getClientOriginalName();
            $smp29->save();
        }
//tambah foto        
        return redirect ('/smp29')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $smp29 = \App\Smp29::find($id);
        return view('smp29/edit', ['smp29' => $smp29]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'smp29';
        $user->name = $request->namalengkap29;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $smp29 = \App\Smp29::find($id);
        $smp29->update($request->all());
//tambah foto      
        if($request->hasFile('avatar29')){
            $request->file('avatar29')->move('images/',$request->file('avatar29')->getClientOriginalName());
            $smp29->avatar29 = $request->file('avatar29')->getClientOriginalName();
            $smp29->save();
        }
//tambah foto
        return redirect ('/smp29')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->delete($smp29);
        return redirect('/smp29')->with('sukses', 'Data berhasil di hapus');
    }


    public function profile($id)
    {
        $smp29 = \App\Smp29::find($id);
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
            if($smp29->mapel()->wherePivot('mapel_id',$mp->id)->first()){
            $categories[] = $mp->nama;
            $data[] = $smp29->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
          }
        }

        return view('smp29.profile',[ 'smp29' => $smp29, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi ]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idsmp29)
    {
        //dd($request->all());
        $smp29 = \App\Smp29::find($idsmp29);
        if($smp29->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('smp29/'.$idsmp29.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $smp29->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('smp29/'.$idsmp29.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idsmp29)
    {
        //dd($request->all());
        $smp29 = \App\Smp29::find($idsmp29);

        $smp29->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('smp29/'.$idsmp29.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idsmp29)
    {
        //dd($request->all());
        $smp29 = \App\Smp29::find($idsmp29);

        $smp29->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('smp29/'.$idsmp29.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idsmp29)
    {
        //dd($request->all());
        $smp29 = \App\Smp29::find($idsmp29);

        $smp29->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('smp29/'.$idsmp29.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idsmp29)
    {
        //dd($request->all());
        $smp29 = \App\Smp29::find($idsmp29);

        $smp29->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('smp29/'.$idsmp29.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////7777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idsmp29)
    {
        //dd($request->all());
        $smp29 = \App\Smp29::find($idsmp29);

        $smp29->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('smp29/'.$idsmp29.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idsmp29,$idmapel)
    {
        $smp29 = \App\Smp29::find($idsmp29);
        $smp29->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idsmp29,$idhukuman)
    {
        $smp29 = \App\Smp29::find($idsmp29);
        $smp29->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new Smp29Export, 'smp29.xlsx');
    }


    public function smp29importexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSmp29', $namaFile);

        Excel::import(new Smp29Import, public_path('/DataSmp29/'.$namaFile));
        return redirect('/smp29');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printdatadiri($id)
    {
        $smp29 = \App\Smp29::find($id);
        $data_smp29 = \App\Smp29::where('namalengkap29')->get();

        return view('smp29.printdatadiri', ['smp29' => $smp29, 'data_smp29' => $data_smp29]);
    }

    public function printmapel($id)
    {
        $smp29 = \App\Smp29::find($id);
        $data_smp29 = \App\Smp29::where('namalengkap29')->get();

        return view('smp29.printmapel', ['smp29' => $smp29, 'data_smp29' => $data_smp29]);
    }

    public function printhukuman($id)
    {
        $smp29 = \App\Smp29::find($id);
        $data_smp29 = \App\Smp29::where('namalengkap29')->get();

        return view('smp29.printhukuman', ['smp29' => $smp29, 'data_smp29' => $data_smp29]);
    }

    public function printizin($id)
    {
        $smp29 = \App\Smp29::find($id);
        $data_smp29 = \App\Smp29::where('namalengkap29')->get();

        return view('smp29.printizin', ['smp29' => $smp29, 'data_smp29' => $data_smp29]);
    }

    public function printambil($id)
    {
        $smp29 = \App\Smp29::find($id);
        $data_smp29 = \App\Smp29::where('namalengkap29')->get();

        return view('smp29.printambil', ['smp29' => $smp29, 'data_smp29' => $data_smp29]);
    }

    public function printprestasi($id)
    {
        $smp29 = \App\Smp29::find($id);
        $data_smp29 = \App\Smp29::where('namalengkap29')->get();

        return view('smp29.printprestasi', ['smp29' => $smp29, 'data_smp29' => $data_smp29]);
    }

    public function printcatatan($id)
    {
        $smp29 = \App\Smp29::find($id);
        $data_smp29 = \App\Smp29::where('namalengkap29')->get();

        return view('smp29.printcatatan', ['smp29' => $smp29, 'data_smp29' => $data_smp29]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayasmp29() 
    {
        $smp29 = auth()->user()->smp29;
        return view('smp29.profilsaya', compact(['smp29']));
    }
}
