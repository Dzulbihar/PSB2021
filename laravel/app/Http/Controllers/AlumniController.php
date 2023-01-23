<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Alumni;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AlumniExport;
use App\Imports\AlumniImport;


class AlumniController extends Controller
{
    public function index(Request $request)
    {
//search       
        if($request->has('cari')){
            $data_alumni = \App\Alumni::where('namalengkap99','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_alumni = \App\Alumni::all();
        }
        return view('alumni.index', ['data_alumni' => $data_alumni]);
    }

    public function create(Request $request)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'alumni';
        $user->name = $request->namalengkap99;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel alumni
        $request->request->add(['user_id' => $user->id ]);
        $alumni = \App\Alumni::create($request->all());
//tambah foto
        if($request->hasFile('avatar99')){
            $request->file('avatar99')->move('images/',$request->file('avatar99')->getClientOriginalName());
            $alumni->avatar99 = $request->file('avatar99')->getClientOriginalName();
            $alumni->save();
        }
//tambah foto        
        return redirect ('/alumni')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $alumni = \App\Alumni::find($id);
        return view('alumni/edit', ['alumni' => $alumni]);
    }

    public function update(Request $request ,$id)
    {
        //dd($request->all());

        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'alumni';
        $user->name = $request->namalengkap99;
        $user->email = $request->email;
        $user->password = bcrypt('aska');
//        $user->remember_token = str_random(60);
        $user->save();
        
        $alumni = \App\Alumni::find($id);
        $alumni->update($request->all());
//tambah foto      
        if($request->hasFile('avatar99')){
            $request->file('avatar99')->move('images/',$request->file('avatar99')->getClientOriginalName());
            $alumni->avatar99 = $request->file('avatar99')->getClientOriginalName();
            $alumni->save();
        }
//tambah foto
        return redirect ('/alumni')->with('sukses', 'Data berhasil di update');
    }

        public function delete($id)
    {
        $alumni = \App\Alumni::find($id);
        $alumni->delete($alumni);
        return redirect('/alumni')->with('sukses', 'Data berhasil di hapus');
    }



        public function profile($id)
    {
       $alumni = \App\Alumni::find($id);
//mapel
//        $matapelajaran = \App\Mapel::all();
//hukuman
//        $dosa = \App\Hukuman::all();
//izin
//        $libur = \App\Izin::all();
//ambil
//        $benda = \App\Ambil::all();
//prestasi
//        $luarbiasa = \App\Prestasi::all();
//catatan
//        $pribadi = \App\Catatan::all();

        //dd($mapel);

        //Menyiapkan Data untuk Chart
//        $categories = [];
//        $data = [];

//        foreach ($matapelajaran as $mp) {
//            if($alumni->mapel()->wherePivot('mapel_id',$mp->id)->first()){
//            $categories[] = $mp->nama;
//            $data[] = $alumni->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai; 
//          }
//        }

        return view('alumni.profile'
       	,[ 'alumni' => $alumni
 //      	, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data, 'dosa' => $dosa, 'libur' => $libur, 'benda' => $benda, 'luarbiasa' => $luarbiasa, 'pribadi' => $pribadi 
       ]
        );
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////222222222222222222///////////////////////////////////////////////////////////////////
        public function addnilai(Request $request ,$idalumni)
    {
        //dd($request->all());
        $alumni = \App\Alumni::find($idalumni);
        if($alumni->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('alumni/'.$idalumni.'/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
        $alumni->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);

        return redirect('alumni/'.$idalumni.'/profile')->with('sukses', 'Data Nilai berhasil dimasukkan');
    }

///////333333333333333333///////////////////////////////////////////////////////////////////
        public function adddata(Request $request ,$idalumni)
    {
        //dd($request->all());
        $alumni = \App\Alumni::find($idalumni);

        $alumni->hukuman()->attach($request->hukuman, ['jenis' => $request->jenis, 'sanksi' => $request->sanksi, 'skor' => $request->skor, 'data' => $request->data]);

        return redirect('alumni/'.$idalumni.'/profile')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

///////444444444444444444444///////////////////////////////////////////////////////////////////
        public function addpulang(Request $request ,$idalumni)
    {
        //dd($request->all());
        $alumni = \App\Alumni::find($idalumni);

        $alumni->izin()->attach($request->izin, ['rumah' => $request->rumah, 'jangka' => $request->jangka, 'pondok' => $request->pondok, 'datang' => $request->datang, 'hukum' => $request->hukum, 'ket' => $request->ket]);

        return redirect('alumni/'.$idalumni.'/profile')->with('sukses', 'Data izin berhasil dimasukkan');
    }

///////5555555555555555555///////////////////////////////////////////////////////////////////
        public function addbarang(Request $request ,$idalumni)
    {
        //dd($request->all());
        $alumni = \App\Alumni::find($idalumni);

        $alumni->ambil()->attach($request->ambil, ['pelunasan' => $request->pelunasan, 'pengambilan' => $request->pengambilan, 'keterangan' => $request->keterangan]);

        return redirect('alumni/'.$idalumni.'/profile')->with('sukses', 'Data Ambil berhasil dimasukkan');
    }

///////666666666666666///////////////////////////////////////////////////////////////////
        public function addhebat(Request $request ,$idalumni)
    {
        //dd($request->all());
        $alumni = \App\Alumni::find($idalumni);

        $alumni->prestasi()->attach($request->prestasi, ['tingkat' => $request->tingkat, 'kategori' => $request->kategori, 'hadiah' => $request->hadiah, 'waktu' => $request->waktu, 'note' => $request->note]);

        return redirect('alumni/'.$idalumni.'/profile')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

///////77777777777777777777///////////////////////////////////////////////////////////////////
        public function adddeskripsi(Request $request ,$idalumni)
    {
        //dd($request->all());
        $alumni = \App\Alumni::find($idalumni);

        $alumni->catatan()->attach($request->catatan, ['sifat' => $request->sifat, 'nulis' => $request->nulis]);

        return redirect('alumni/'.$idalumni.'/profile')->with('sukses', 'Data Catatan berhasil dimasukkan');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function deletenilai($idalumni,$idmapel)
    {
        $alumni = \App\Alumni::find($idalumni);
        $alumni->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }

        public function deletedata($idalumni,$idhukuman)
    {
        $alumni = \App\Alumni::find($idalumni);
        $alumni->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Nilai berhasil dihapus');
    }
    
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel() 
    {
        return Excel::download(new AlumniExport, 'alumni.xlsx');
    }


    public function alumniimportexcel(Request $request) 
    {
        
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataAlumni', $namaFile);

        Excel::import(new AlumniImport, public_path('/DataAlumni/'.$namaFile));
        return redirect('/alumni');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printalumni($id)
    {
        $alumni = \App\Alumni::find($id);
        $data_alumni = \App\Alumni::where('namalengkap0')->get();

        return view('alumni.printalumni', ['alumni' => $alumni, 'data_alumni' => $data_alumni]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function profilsayaalumni() 
    {
        $alumni = auth()->user()->alumni;
        return view('alumni.profilsaya', compact(['alumni']));
    }




}
