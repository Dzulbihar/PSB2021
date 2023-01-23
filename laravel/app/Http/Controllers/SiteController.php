<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
    public function home()
    {
//looping berita di home
        $posts = Post::all();
    	return view('sites.home', compact(['posts']));
    }


///////////////////////////////////////////////////////////////////////
    public function profilelembaga()
    {
    	return view('sites.profilelembaga');
    }

    public function kampus1()
    {
        return view('sites.kampus1');
    }

    public function kampus2()
    {
        return view('sites.kampus2');
    }

    public function kampus3()
    {
        return view('sites.kampus3');
    }

    public function pesantrensalaf()
    {
        return view('sites.pesantrensalaf');
    }

    public function pesantrentahfidz()
    {
        return view('sites.pesantrentahfidz');
    }

    public function madrasahdiniyah()
    {
        return view('sites.madrasahdiniyah');
    }

    public function smpaskhabulkahfi()
    {
        return view('sites.smpaskhabulkahfi');
    }

    public function mtsaskhabulkahfi()
    {
        return view('sites.mtsaskhabulkahfi');
    }

    public function smkaskhabulkahfi()
    {
        return view('sites.smkaskhabulkahfi');
    }

    public function maaskhabulkahfi()
    {
        return view('sites.maaskhabulkahfi');
    }

    public function mahadalyaskhabulkahfi()
    {
        return view('sites.mahadalyaskhabulkahfi');
    }

    public function gallery()
    {
        return view('sites.gallery');
    }    

    public function contact()
    {
        return view('sites.contact');
    }

    public function ekstra()
    {
        return view('sites.ekstra');
    }

    public function polemik()
    {
        return view('sites.polemik');
    }

    
///////////////////////////////////////////////////////////////////////


    public function register()
    {
    	return view('sites.register');
    }

    public function postregister(Request $request)
    {
    	//input pendaftaran sebagai user dulu
    	$user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->namalengkap;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
//        $user->remember_token = str_random(60);
        $user->save();
    
        //insert ke tabel siswa
        $request->request->add(['user_id' => $user->id ]);
        $siswa = \App\Siswa::create($request->all());

    	return redirect ('/login')->with('sukses', 'Data Pendaftaran Berhasil dikirim');

    }


    public function singlepost($slug)
    {
        $post = Post::where('slug','=',$slug)->first();
        return view('sites.singlepost', compact(['post']));
    }


}
