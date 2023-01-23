<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/////////login/////////
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

/////////////////////////////////////// Front End /////////////////////////////////////
Route::get('/', 'SiteController@home');
Route::get('/register', 'SiteController@register');
Route::post('/postregister', 'SiteController@postregister');

Route::get('/profilelembaga', 'SiteController@profilelembaga');
Route::get('/kampus1', 'SiteController@kampus1');
Route::get('/kampus2', 'SiteController@kampus2');
Route::get('/kampus3', 'SiteController@kampus3');
Route::get('/pesantrensalaf', 'SiteController@pesantrensalaf');
Route::get('/pesantrentahfidz', 'SiteController@pesantrentahfidz');
Route::get('/madrasahdiniyah', 'SiteController@madrasahdiniyah');
Route::get('/smpaskhabulkahfi', 'SiteController@smpaskhabulkahfi');
Route::get('/mtsaskhabulkahfi', 'SiteController@mtsaskhabulkahfi');
Route::get('/smkaskhabulkahfi', 'SiteController@smkaskhabulkahfi');
Route::get('/maaskhabulkahfi', 'SiteController@maaskhabulkahfi');
Route::get('/mahadalyaskhabulkahfi', 'SiteController@mahadalyaskhabulkahfi');
Route::get('/gallery', 'SiteController@gallery');
Route::get('/ekstra', 'SiteController@ekstra');
Route::get('/contact', 'SiteController@contact');


Route::get('/polemik', 'SiteController@polemik');

Route::get('/polemik01', function () {
    return view('sites.polemik.polemik01');
});
Route::get('/polemik02', function () {
    return view('sites.polemik.polemik02');
});
Route::get('/polemik03', function () {
    return view('sites.polemik.polemik03');
});
Route::get('/polemik04', function () {
    return view('sites.polemik.polemik04');
});
Route::get('/polemik05', function () {
    return view('sites.polemik.polemik05');
});
Route::get('/polemik06', function () {
    return view('sites.polemik.polemik06');
});
Route::get('/polemik07', function () {
    return view('sites.polemik.polemik07');
});
Route::get('/polemik08', function () {
    return view('sites.polemik.polemik08');
});
Route::get('/polemik09', function () {
    return view('sites.polemik.polemik09');
});
Route::get('/polemik10', function () {
    return view('sites.polemik.polemik10');
});
Route::get('/polemik11', function () {
    return view('sites.polemik.polemik11');
});
Route::get('/polemik12', function () {
    return view('sites.polemik.polemik12');
});
Route::get('/polemik13', function () {
    return view('sites.polemik.polemik13');
});
Route::get('/polemik14', function () {
    return view('sites.polemik.polemik14');
});
Route::get('/polemik15', function () {
    return view('sites.polemik.polemik15');
});
Route::get('/polemik16', function () {
    return view('sites.polemik.polemik16');
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::group(['middleware' => ['auth','checkRole:admin']],function(){

/////////mts/////////
	Route::get('/mts', 'MtsController@index');
	Route::post('/mts/create', 'MtsController@create');
	Route::get('/mts/{id}/edit', 'MtsController@edit');
	Route::post('/mts/{id}/update', 'MtsController@update');
	Route::get('/mts/{id}/delete', 'MtsController@delete');
	Route::get('/mts/{id}/profile', 'MtsController@profile');

	Route::post('/mts/{id}/addnilai', 'MtsController@addnilai');
	Route::get('/mts/{id}/{idmapel}/deletenilai', 'MtsController@deletenilai');

	Route::post('/mts/{id}/adddata', 'MtsController@adddata');
	Route::post('/mts/{id}/addpulang', 'MtsController@addpulang');
	Route::post('/mts/{id}/addbarang', 'MtsController@addbarang');
	Route::post('/mts/{id}/addhebat', 'MtsController@addhebat');
	Route::post('/mts/{id}/adddeskripsi', 'MtsController@adddeskripsi');

	Route::get('mts/exportexcel','MtsController@exportExcel');
	Route::post('/importmts','MtsController@mtsimportexcel')->name('importmts');

	Route::get('/mts/{id}/seratusribu', 'MtsController@seratusribu');

	Route::get('/mts/{id}/printmts', 'MtsController@printmts');

	Route::get('/mts/{id}/biayaawalmasuk', 'MtsController@biayaawalmasuk');
	Route::post('/mts/{id}/addbiaya', 'MtsController@addbiaya');
	Route::get('/mts/{id}/{idregistrasi}/deleteregistrasi', 'MtsController@deleteregistrasi');
	Route::get('/mts/{id}/printregistrasimts', 'MtsController@printregistrasimts');	

/////////mahad aly/////////
	Route::get('/mahadaly', 'MahadalyController@index');
	Route::post('/mahadaly/create', 'MahadalyController@create');
	Route::get('/mahadaly/{id}/edit', 'MahadalyController@edit');
	Route::post('/mahadaly/{id}/update', 'MahadalyController@update');
	Route::get('/mahadaly/{id}/delete', 'MahadalyController@delete');
	Route::get('/mahadaly/{id}/profile', 'MahadalyController@profile');

	Route::post('/mahadaly/{id}/addnilai', 'MahadalyController@addnilai');
	Route::get('/mahadaly/{id}/{idmapel}/deletenilai', 'MahadalyController@deletenilai');

	Route::post('/mahadaly/{id}/adddata', 'MahadalyController@adddata');
	Route::post('/mahadaly/{id}/addpulang', 'MahadalyController@addpulang');
	Route::post('/mahadaly/{id}/addbarang', 'MahadalyController@addbarang');
	Route::post('/mahadaly/{id}/addhebat', 'MahadalyController@addhebat');
	Route::post('/mahadaly/{id}/adddeskripsi', 'MahadalyController@adddeskripsi');

	Route::get('mahadaly/exportexcel','MahadalyController@exportExcel');
	Route::post('/importmahadaly','MahadalyController@mahadalyimportexcel')->name('importmahadaly');

	Route::get('/mahadaly/{id}/seratusribu', 'MahadalyController@seratusribu');

	Route::get('/mahadaly/{id}/printmahadaly', 'MahadalyController@printmahadaly');

	Route::get('/mahadaly/{id}/biayaawalmasuk', 'MahadalyController@biayaawalmasuk');
	Route::post('/mahadaly/{id}/addbiaya', 'MahadalyController@addbiaya');
	Route::get('/mahadaly/{id}/{idregistrasi}/deleteregistrasi', 'MahadalyController@deleteregistrasi');
	Route::get('/mahadaly/{id}/printregistrasimahadaly', 'MahadalyController@printregistrasimahadaly');	

/////////smk tkj/////////
	Route::get('/smktkj', 'SmktkjController@index');
	Route::post('/smktkj/create', 'SmktkjController@create');
	Route::get('/smktkj/{id}/edit', 'SmktkjController@edit');
	Route::post('/smktkj/{id}/update', 'SmktkjController@update');
	Route::get('/smktkj/{id}/delete', 'SmktkjController@delete');
	Route::get('/smktkj/{id}/profile', 'SmktkjController@profile');

	Route::post('/smktkj/{id}/addnilai', 'SmktkjController@addnilai');
	Route::get('/smktkj/{id}/{idmapel}/deletenilai', 'SmktkjController@deletenilai');

	Route::post('/smktkj/{id}/adddata', 'SmktkjController@adddata');
	Route::post('/smktkj/{id}/addpulang', 'SmktkjController@addpulang');
	Route::post('/smktkj/{id}/addbarang', 'SmktkjController@addbarang');
	Route::post('/smktkj/{id}/addhebat', 'SmktkjController@addhebat');
	Route::post('/smktkj/{id}/adddeskripsi', 'SmktkjController@adddeskripsi');

	Route::get('smktkj/exportexcel','SmktkjController@exportExcel');
	Route::post('/importsmktkj','SmktkjController@smktkjimportexcel')->name('importsmktkj');

	Route::get('/smktkj/{id}/seratusribu', 'SmktkjController@seratusribu');

	Route::get('/smktkj/{id}/printsmktkj', 'SmktkjController@printsmktkj');

	Route::get('/smktkj/{id}/biayaawalmasuk', 'SmktkjController@biayaawalmasuk');
	Route::post('/smktkj/{id}/addbiaya', 'SmktkjController@addbiaya');
	Route::get('/smktkj/{id}/{idregistrasi}/deleteregistrasi', 'SmktkjController@deleteregistrasi');
	Route::get('/smktkj/{id}/printregistrasismktkj', 'SmktkjController@printregistrasismktkj');		

/////////smk tkr/////////
	Route::get('/smktkr', 'SmktkrController@index');
	Route::post('/smktkr/create', 'SmktkrController@create');
	Route::get('/smktkr/{id}/edit', 'SmktkrController@edit');
	Route::post('/smktkr/{id}/update', 'SmktkrController@update');
	Route::get('/smktkr/{id}/delete', 'SmktkrController@delete');
	Route::get('/smktkr/{id}/profile', 'SmktkrController@profile');

	Route::post('/smktkr/{id}/addnilai', 'SmktkrController@addnilai');
	Route::get('/smktkr/{id}/{idmapel}/deletenilai', 'SmktkrController@deletenilai');

	Route::post('/smktkr/{id}/adddata', 'SmktkrController@adddata');
	Route::post('/smktkr/{id}/addpulang', 'SmktkrController@addpulang');
	Route::post('/smktkr/{id}/addbarang', 'SmktkrController@addbarang');
	Route::post('/smktkr/{id}/addhebat', 'SmktkrController@addhebat');
	Route::post('/smktkr/{id}/adddeskripsi', 'SmktkrController@adddeskripsi');

	Route::get('smktkr/exportexcel','SmktkrController@exportExcel');
	Route::post('/importsmktkr','SmktkrController@smktkrimportexcel')->name('importsmktkr');

	Route::get('/smktkr/{id}/seratusribu', 'SmktkrController@seratusribu');

	Route::get('/smktkr/{id}/printsmktkr', 'SmktkrController@printsmktkr');

	Route::get('/smktkr/{id}/biayaawalmasuk', 'SmktkrController@biayaawalmasuk');
	Route::post('/smktkr/{id}/addbiaya', 'SmktkrController@addbiaya');
	Route::get('/smktkr/{id}/{idregistrasi}/deleteregistrasi', 'SmktkrController@deleteregistrasi');
	Route::get('/smktkr/{id}/printregistrasismktkr', 'SmktkrController@printregistrasismktkr');		

/////////ma/////////
	Route::get('/ma', 'MaController@index');
	Route::post('/ma/create', 'MaController@create');
	Route::get('/ma/{id}/edit', 'MaController@edit');
	Route::post('/ma/{id}/update', 'MaController@update');
	Route::get('/ma/{id}/delete', 'MaController@delete');
	Route::get('/ma/{id}/profile', 'MaController@profile');

	Route::post('/ma/{id}/addnilai', 'MaController@addnilai');
	Route::get('/ma/{id}/{idmapel}/deletenilai', 'MaController@deletenilai');

	Route::post('/ma/{id}/adddata', 'MaController@adddata');
	Route::post('/ma/{id}/addpulang', 'MaController@addpulang');
	Route::post('/ma/{id}/addbarang', 'MaController@addbarang');
	Route::post('/ma/{id}/addhebat', 'MaController@addhebat');
	Route::post('/ma/{id}/adddeskripsi', 'MaController@adddeskripsi');

	Route::get('ma/exportexcel','MaController@exportExcel');
	Route::post('/importma','MaController@maimportexcel')->name('importma');

	Route::get('/ma/{id}/seratusribu', 'MaController@seratusribu');

	Route::get('/ma/{id}/printma', 'MaController@printma');

	Route::get('/ma/{id}/biayaawalmasuk', 'MaController@biayaawalmasuk');
	Route::post('/ma/{id}/addbiaya', 'MaController@addbiaya');
	Route::get('/ma/{id}/{idregistrasi}/deleteregistrasi', 'MaController@deleteregistrasi');
	Route::get('/ma/{id}/printregistrasima', 'MaController@printregistrasima');		

/////////smp 1/////////
	Route::get('/smp1', 'Smp1Controller@index');
	Route::post('/smp1/create', 'Smp1Controller@create');
	Route::get('/smp1/{id}/edit', 'Smp1Controller@edit');
	Route::post('/smp1/{id}/update', 'Smp1Controller@update');
	Route::get('/smp1/{id}/delete', 'Smp1Controller@delete');
	Route::get('/smp1/{id}/profile', 'Smp1Controller@profile');

	Route::post('/smp1/{id}/addnilai', 'Smp1Controller@addnilai');
	Route::get('/smp1/{id}/{idmapel}/deletenilai', 'Smp1Controller@deletenilai');

	Route::post('/smp1/{id}/adddata', 'Smp1Controller@adddata');
	Route::post('/smp1/{id}/addpulang', 'Smp1Controller@addpulang');
	Route::post('/smp1/{id}/addbarang', 'Smp1Controller@addbarang');
	Route::post('/smp1/{id}/addhebat', 'Smp1Controller@addhebat');
	Route::post('/smp1/{id}/adddeskripsi', 'Smp1Controller@adddeskripsi');

	Route::get('smp1/exportexcel','Smp1Controller@exportExcel');
	Route::post('/importsmp1','Smp1Controller@smp1importexcel')->name('importsmp1');

	Route::get('/smp1/{id}/seratusribu', 'Smp1Controller@seratusribu');

	Route::get('/smp1/{id}/printsmp1', 'Smp1Controller@printsmp1');

	Route::get('/smp1/{id}/biayaawalmasuk', 'Smp1Controller@biayaawalmasuk');
	Route::post('/smp1/{id}/addbiaya', 'Smp1Controller@addbiaya');
	Route::get('/smp1/{id}/{idregistrasi}/deleteregistrasi', 'Smp1Controller@deleteregistrasi');
	Route::get('/smp1/{id}/printregistrasismp1', 'Smp1Controller@printregistrasismp1');

/////////smp 2/////////
	Route::get('/smp2', 'Smp2Controller@index');
	Route::post('/smp2/create', 'Smp2Controller@create');
	Route::get('/smp2/{id}/edit', 'Smp2Controller@edit');
	Route::post('/smp2/{id}/update', 'Smp2Controller@update');
	Route::get('/smp2/{id}/delete', 'Smp2Controller@delete');
	Route::get('/smp2/{id}/profile', 'Smp2Controller@profile');

	Route::post('/smp2/{id}/addnilai', 'Smp2Controller@addnilai');
	Route::get('/smp2/{id}/{idmapel}/deletenilai', 'Smp2Controller@deletenilai');

	Route::post('/smp2/{id}/adddata', 'Smp2Controller@adddata');
	Route::post('/smp2/{id}/addpulang', 'Smp2Controller@addpulang');
	Route::post('/smp2/{id}/addbarang', 'Smp2Controller@addbarang');
	Route::post('/smp2/{id}/addhebat', 'Smp2Controller@addhebat');
	Route::post('/smp2/{id}/adddeskripsi', 'Smp2Controller@adddeskripsi');

	Route::get('smp2/exportexcel','Smp2Controller@exportExcel');
	Route::post('/importsmp2','Smp2Controller@smp2importexcel')->name('importsmp2');

	Route::get('/smp2/{id}/seratusribu', 'Smp2Controller@seratusribu');

	Route::get('/smp2/{id}/printsmp2', 'Smp2Controller@printsmp2');

	Route::get('/smp2/{id}/biayaawalmasuk', 'Smp2Controller@biayaawalmasuk');
	Route::post('/smp2/{id}/addbiaya', 'Smp2Controller@addbiaya');
	Route::get('/smp2/{id}/{idregistrasi}/deleteregistrasi', 'Smp2Controller@deleteregistrasi');
	Route::get('/smp2/{id}/printregistrasismp2', 'Smp2Controller@printregistrasismp2');

/////////online/////////
	Route::get('/siswa', 'SiswaController@index');
	Route::post('/siswa/create', 'SiswaController@create');
	Route::get('/siswa/{id}/edit', 'SiswaController@edit');
	Route::post('/siswa/{id}/update', 'SiswaController@update');
	Route::get('/siswa/{id}/delete', 'SiswaController@delete');
	Route::get('/siswa/{id}/profile', 'SiswaController@profile');

	Route::post('/siswa/{id}/addnilai', 'SiswaController@addnilai');
	Route::get('/siswa/{id}/{idmapel}/deletenilai', 'SiswaController@deletenilai');

	Route::post('/siswa/{id}/adddata', 'SiswaController@adddata');
	Route::post('/siswa/{id}/addpulang', 'SiswaController@addpulang');
	Route::post('/siswa/{id}/addbarang', 'SiswaController@addbarang');
	Route::post('/siswa/{id}/addhebat', 'SiswaController@addhebat');
	Route::post('/siswa/{id}/adddeskripsi', 'SiswaController@adddeskripsi');

	Route::get('siswa/exportexcel','SiswaController@exportExcel');
	Route::post('/importsiswa','SiswaController@siswaimportexcel')->name('importsiswa');

	Route::get('/siswa/{id}/seratusribu', 'SiswaController@seratusribu');

	Route::get('/siswa/{id}/printsiswa', 'SiswaController@printsiswa');

	Route::get('/siswa/{id}/biayaawalmasuk', 'SiswaController@biayaawalmasuk');
	Route::post('/siswa/{id}/addbiaya', 'SiswaController@addbiaya');
	Route::get('/siswa/{id}/{idregistrasi}/deleteregistrasi', 'SiswaController@deleteregistrasi');
	Route::get('/siswa/{id}/printregistrasisiswa', 'SiswaController@printregistrasisiswa');

	Route::get('/siswa/{id}/persyaratan', 'SiswaController@persyaratan');
	Route::post('/siswa/{id}/addsyarat', 'SiswaController@addsyarat');
	Route::get('/siswa/{id}/{idpersyaratan}/deletepersyaratan', 'SiswaController@deletepersyaratan');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////           SMP 1               //////////////////////////////
	Route::get('/smp17', 'Smp17Controller@index');
	Route::post('/smp17/create', 'Smp17Controller@create');
	Route::get('/smp17/{id}/edit', 'Smp17Controller@edit');
	Route::post('/smp17/{id}/update', 'Smp17Controller@update');
	Route::get('/smp17/{id}/delete', 'Smp17Controller@delete');
	Route::get('/smp17/{id}/profile', 'Smp17Controller@profile');

	Route::post('/smp17/{id}/addnilai', 'Smp17Controller@addnilai');
	Route::get('/smp17/{id}/{idmapel}/deletenilai', 'Smp17Controller@deletenilai');

	Route::post('/smp17/{id}/adddata', 'Smp17Controller@adddata');
	Route::post('/smp17/{id}/addpulang', 'Smp17Controller@addpulang');
	Route::post('/smp17/{id}/addbarang', 'Smp17Controller@addbarang');
	Route::post('/smp17/{id}/addhebat', 'Smp17Controller@addhebat');
	Route::post('/smp17/{id}/adddeskripsi', 'Smp17Controller@adddeskripsi');

	Route::get('smp17/exportexcel','Smp17Controller@exportExcel');
	Route::post('/importsmp17','Smp17Controller@smp17importexcel')->name('importsmp17');

	Route::get('/smp17/{id}/printdatadiri', 'Smp17Controller@printdatadiri');
	Route::get('/smp17/{id}/printmapel', 'Smp17Controller@printmapel');
	Route::get('/smp17/{id}/printhukuman', 'Smp17Controller@printhukuman');
	Route::get('/smp17/{id}/printizin', 'Smp17Controller@printizin');
	Route::get('/smp17/{id}/printambil', 'Smp17Controller@printambil');
	Route::get('/smp17/{id}/printprestasi', 'Smp17Controller@printprestasi');
	Route::get('/smp17/{id}/printcatatan', 'Smp17Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/smp18', 'Smp18Controller@index');
	Route::post('/smp18/create', 'Smp18Controller@create');
	Route::get('/smp18/{id}/edit', 'Smp18Controller@edit');
	Route::post('/smp18/{id}/update', 'Smp18Controller@update');
	Route::get('/smp18/{id}/delete', 'Smp18Controller@delete');
	Route::get('/smp18/{id}/profile', 'Smp18Controller@profile');

	Route::post('/smp18/{id}/addnilai', 'Smp18Controller@addnilai');
	Route::get('/smp18/{id}/{idmapel}/deletenilai', 'Smp18Controller@deletenilai');

	Route::post('/smp18/{id}/adddata', 'Smp18Controller@adddata');
	Route::post('/smp18/{id}/addpulang', 'Smp18Controller@addpulang');
	Route::post('/smp18/{id}/addbarang', 'Smp18Controller@addbarang');
	Route::post('/smp18/{id}/addhebat', 'Smp18Controller@addhebat');
	Route::post('/smp18/{id}/adddeskripsi', 'Smp18Controller@adddeskripsi');

	Route::get('smp18/exportexcel','Smp18Controller@exportExcel');
	Route::post('/importsmp18','Smp18Controller@smp18importexcel')->name('importsmp18');

	Route::get('/smp18/{id}/printdatadiri', 'Smp18Controller@printdatadiri');
	Route::get('/smp18/{id}/printmapel', 'Smp18Controller@printmapel');
	Route::get('/smp18/{id}/printhukuman', 'Smp18Controller@printhukuman');
	Route::get('/smp18/{id}/printizin', 'Smp18Controller@printizin');
	Route::get('/smp18/{id}/printambil', 'Smp18Controller@printambil');
	Route::get('/smp18/{id}/printprestasi', 'Smp18Controller@printprestasi');
	Route::get('/smp18/{id}/printcatatan', 'Smp18Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/smp19', 'Smp19Controller@index');
	Route::post('/smp19/create', 'Smp19Controller@create');
	Route::get('/smp19/{id}/edit', 'Smp19Controller@edit');
	Route::post('/smp19/{id}/update', 'Smp19Controller@update');
	Route::get('/smp19/{id}/delete', 'Smp19Controller@delete');
	Route::get('/smp19/{id}/profile', 'Smp19Controller@profile');

	Route::post('/smp19/{id}/addnilai', 'Smp19Controller@addnilai');
	Route::get('/smp19/{id}/{idmapel}/deletenilai', 'Smp19Controller@deletenilai');

	Route::post('/smp19/{id}/adddata', 'Smp19Controller@adddata');
	Route::post('/smp19/{id}/addpulang', 'Smp19Controller@addpulang');
	Route::post('/smp19/{id}/addbarang', 'Smp19Controller@addbarang');
	Route::post('/smp19/{id}/addhebat', 'Smp19Controller@addhebat');
	Route::post('/smp19/{id}/adddeskripsi', 'Smp19Controller@adddeskripsi');

	Route::get('smp19/exportexcel','Smp19Controller@exportExcel');
	Route::post('/importsmp19','Smp19Controller@smp19importexcel')->name('importsmp19');

	Route::get('/smp19/{id}/printdatadiri', 'Smp19Controller@printdatadiri');
	Route::get('/smp19/{id}/printmapel', 'Smp19Controller@printmapel');
	Route::get('/smp19/{id}/printhukuman', 'Smp19Controller@printhukuman');
	Route::get('/smp19/{id}/printizin', 'Smp19Controller@printizin');
	Route::get('/smp19/{id}/printambil', 'Smp19Controller@printambil');
	Route::get('/smp19/{id}/printprestasi', 'Smp19Controller@printprestasi');
	Route::get('/smp19/{id}/printcatatan', 'Smp19Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

////////////////           SMP 2               //////////////////////////////
	Route::get('/smp27', 'Smp27Controller@index');
	Route::post('/smp27/create', 'Smp27Controller@create');
	Route::get('/smp27/{id}/edit', 'Smp27Controller@edit');
	Route::post('/smp27/{id}/update', 'Smp27Controller@update');
	Route::get('/smp27/{id}/delete', 'Smp27Controller@delete');
	Route::get('/smp27/{id}/profile', 'Smp27Controller@profile');

	Route::post('/smp27/{id}/addnilai', 'Smp27Controller@addnilai');
	Route::get('/smp27/{id}/{idmapel}/deletenilai', 'Smp27Controller@deletenilai');

	Route::post('/smp27/{id}/adddata', 'Smp27Controller@adddata');
	Route::post('/smp27/{id}/addpulang', 'Smp27Controller@addpulang');
	Route::post('/smp27/{id}/addbarang', 'Smp27Controller@addbarang');
	Route::post('/smp27/{id}/addhebat', 'Smp27Controller@addhebat');
	Route::post('/smp27/{id}/adddeskripsi', 'Smp27Controller@adddeskripsi');

	Route::get('smp27/exportexcel','Smp27Controller@exportExcel');
	Route::post('/importsmp27','Smp27Controller@smp27importexcel')->name('importsmp27');

	Route::get('/smp27/{id}/printsmp27', 'Smp27Controller@printsmp27');

	Route::get('/smp27/{id}/printdatadiri', 'Smp27Controller@printdatadiri');
	Route::get('/smp27/{id}/printmapel', 'Smp27Controller@printmapel');
	Route::get('/smp27/{id}/printhukuman', 'Smp27Controller@printhukuman');
	Route::get('/smp27/{id}/printizin', 'Smp27Controller@printizin');
	Route::get('/smp27/{id}/printambil', 'Smp27Controller@printambil');
	Route::get('/smp27/{id}/printprestasi', 'Smp27Controller@printprestasi');
	Route::get('/smp27/{id}/printcatatan', 'Smp27Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/smp28', 'Smp28Controller@index');
	Route::post('/smp28/create', 'Smp28Controller@create');
	Route::get('/smp28/{id}/edit', 'Smp28Controller@edit');
	Route::post('/smp28/{id}/update', 'Smp28Controller@update');
	Route::get('/smp28/{id}/delete', 'Smp28Controller@delete');
	Route::get('/smp28/{id}/profile', 'Smp28Controller@profile');

	Route::post('/smp28/{id}/addnilai', 'Smp28Controller@addnilai');
	Route::get('/smp28/{id}/{idmapel}/deletenilai', 'Smp28Controller@deletenilai');

	Route::post('/smp28/{id}/adddata', 'Smp28Controller@adddata');
	Route::post('/smp28/{id}/addpulang', 'Smp28Controller@addpulang');
	Route::post('/smp28/{id}/addbarang', 'Smp28Controller@addbarang');
	Route::post('/smp28/{id}/addhebat', 'Smp28Controller@addhebat');
	Route::post('/smp28/{id}/adddeskripsi', 'Smp28Controller@adddeskripsi');

	Route::get('smp28/exportexcel','Smp28Controller@exportExcel');
	Route::post('/importsmp28','Smp28Controller@smp28importexcel')->name('importsmp28');

	Route::get('/smp28/{id}/printsmp28', 'Smp28Controller@printsmp28');

	Route::get('/smp28/{id}/printdatadiri', 'Smp28Controller@printdatadiri');
	Route::get('/smp28/{id}/printmapel', 'Smp28Controller@printmapel');
	Route::get('/smp28/{id}/printhukuman', 'Smp28Controller@printhukuman');
	Route::get('/smp28/{id}/printizin', 'Smp28Controller@printizin');
	Route::get('/smp28/{id}/printambil', 'Smp28Controller@printambil');
	Route::get('/smp28/{id}/printprestasi', 'Smp28Controller@printprestasi');
	Route::get('/smp28/{id}/printcatatan', 'Smp28Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/smp29', 'Smp29Controller@index');
	Route::post('/smp29/create', 'Smp29Controller@create');
	Route::get('/smp29/{id}/edit', 'Smp29Controller@edit');
	Route::post('/smp29/{id}/update', 'Smp29Controller@update');
	Route::get('/smp29/{id}/delete', 'Smp29Controller@delete');
	Route::get('/smp29/{id}/profile', 'Smp29Controller@profile');

	Route::post('/smp29/{id}/addnilai', 'Smp29Controller@addnilai');
	Route::get('/smp29/{id}/{idmapel}/deletenilai', 'Smp29Controller@deletenilai');

	Route::post('/smp29/{id}/adddata', 'Smp29Controller@adddata');
	Route::post('/smp29/{id}/addpulang', 'Smp29Controller@addpulang');
	Route::post('/smp29/{id}/addbarang', 'Smp29Controller@addbarang');
	Route::post('/smp29/{id}/addhebat', 'Smp29Controller@addhebat');
	Route::post('/smp29/{id}/adddeskripsi', 'Smp29Controller@adddeskripsi');

	Route::get('smp29/exportexcel','Smp29Controller@exportExcel');
	Route::post('/importsmp29','Smp29Controller@smp29importexcel')->name('importsmp29');

	Route::get('/smp29/{id}/printsmp29', 'Smp29Controller@printsmp29');

	Route::get('/smp29/{id}/printdatadiri', 'Smp29Controller@printdatadiri');
	Route::get('/smp29/{id}/printmapel', 'Smp29Controller@printmapel');
	Route::get('/smp29/{id}/printhukuman', 'Smp29Controller@printhukuman');
	Route::get('/smp29/{id}/printizin', 'Smp29Controller@printizin');
	Route::get('/smp29/{id}/printambil', 'Smp29Controller@printambil');
	Route::get('/smp29/{id}/printprestasi', 'Smp29Controller@printprestasi');
	Route::get('/smp29/{id}/printcatatan', 'Smp29Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

////////////////           MTs               //////////////////////////////
	Route::get('/mts7', 'Mts7Controller@index');
	Route::post('/mts7/create', 'Mts7Controller@create');
	Route::get('/mts7/{id}/edit', 'Mts7Controller@edit');
	Route::post('/mts7/{id}/update', 'Mts7Controller@update');
	Route::get('/mts7/{id}/delete', 'Mts7Controller@delete');
	Route::get('/mts7/{id}/profile', 'Mts7Controller@profile');

	Route::post('/mts7/{id}/addnilai', 'Mts7Controller@addnilai');
	Route::get('/mts7/{id}/{idmapel}/deletenilai', 'Mts7Controller@deletenilai');

	Route::post('/mts7/{id}/adddata', 'Mts7Controller@adddata');
	Route::post('/mts7/{id}/addpulang', 'Mts7Controller@addpulang');
	Route::post('/mts7/{id}/addbarang', 'Mts7Controller@addbarang');
	Route::post('/mts7/{id}/addhebat', 'Mts7Controller@addhebat');
	Route::post('/mts7/{id}/adddeskripsi', 'Mts7Controller@adddeskripsi');

	Route::get('mts7/exportexcel','Mts7Controller@exportExcel');
	Route::post('/importmts7','Mts7Controller@mts7importexcel')->name('importmts7');

	Route::get('/mts7/{id}/printdatadiri', 'Mts7Controller@printdatadiri');
	Route::get('/mts7/{id}/printmapel', 'Mts7Controller@printmapel');
	Route::get('/mts7/{id}/printhukuman', 'Mts7Controller@printhukuman');
	Route::get('/mts7/{id}/printizin', 'Mts7Controller@printizin');
	Route::get('/mts7/{id}/printambil', 'Mts7Controller@printambil');
	Route::get('/mts7/{id}/printprestasi', 'Mts7Controller@printprestasi');
	Route::get('/mts7/{id}/printcatatan', 'Mts7Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/mts8', 'Mts8Controller@index');
	Route::post('/mts8/create', 'Mts8Controller@create');
	Route::get('/mts8/{id}/edit', 'Mts8Controller@edit');
	Route::post('/mts8/{id}/update', 'Mts8Controller@update');
	Route::get('/mts8/{id}/delete', 'Mts8Controller@delete');
	Route::get('/mts8/{id}/profile', 'Mts8Controller@profile');

	Route::post('/mts8/{id}/addnilai', 'Mts8Controller@addnilai');
	Route::get('/mts8/{id}/{idmapel}/deletenilai', 'Mts8Controller@deletenilai');

	Route::post('/mts8/{id}/adddata', 'Mts8Controller@adddata');
	Route::post('/mts8/{id}/addpulang', 'Mts8Controller@addpulang');
	Route::post('/mts8/{id}/addbarang', 'Mts8Controller@addbarang');
	Route::post('/mts8/{id}/addhebat', 'Mts8Controller@addhebat');
	Route::post('/mts8/{id}/adddeskripsi', 'Mts8Controller@adddeskripsi');

	Route::get('mts8/exportexcel','Mts8Controller@exportExcel');
	Route::post('/importmts8','Mts8Controller@mts8importexcel')->name('importmts8');

	Route::get('/mts8/{id}/printdatadiri', 'Mts8Controller@printdatadiri');
	Route::get('/mts8/{id}/printmapel', 'Mts8Controller@printmapel');
	Route::get('/mts8/{id}/printhukuman', 'Mts8Controller@printhukuman');
	Route::get('/mts8/{id}/printizin', 'Mts8Controller@printizin');
	Route::get('/mts8/{id}/printambil', 'Mts8Controller@printambil');
	Route::get('/mts8/{id}/printprestasi', 'Mts8Controller@printprestasi');
	Route::get('/mts8/{id}/printcatatan', 'Mts8Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/mts9', 'Mts9Controller@index');
	Route::post('/mts9/create', 'Mts9Controller@create');
	Route::get('/mts9/{id}/edit', 'Mts9Controller@edit');
	Route::post('/mts9/{id}/update', 'Mts9Controller@update');
	Route::get('/mts9/{id}/delete', 'Mts9Controller@delete');
	Route::get('/mts9/{id}/profile', 'Mts9Controller@profile');

	Route::post('/mts9/{id}/addnilai', 'Mts9Controller@addnilai');
	Route::get('/mts9/{id}/{idmapel}/deletenilai', 'Mts9Controller@deletenilai');

	Route::post('/mts9/{id}/adddata', 'Mts9Controller@adddata');
	Route::post('/mts9/{id}/addpulang', 'Mts9Controller@addpulang');
	Route::post('/mts9/{id}/addbarang', 'Mts9Controller@addbarang');
	Route::post('/mts9/{id}/addhebat', 'Mts9Controller@addhebat');
	Route::post('/mts9/{id}/adddeskripsi', 'Mts9Controller@adddeskripsi');

	Route::get('mts9/exportexcel','Mts9Controller@exportExcel');
	Route::post('/importmts9','Mts9Controller@mts9importexcel')->name('importmts9');

	Route::get('/mts9/{id}/printdatadiri', 'Mts9Controller@printdatadiri');
	Route::get('/mts9/{id}/printmapel', 'Mts9Controller@printmapel');
	Route::get('/mts9/{id}/printhukuman', 'Mts9Controller@printhukuman');
	Route::get('/mts9/{id}/printizin', 'Mts9Controller@printizin');
	Route::get('/mts9/{id}/printambil', 'Mts9Controller@printambil');
	Route::get('/mts9/{id}/printprestasi', 'Mts9Controller@printprestasi');
	Route::get('/mts9/{id}/printcatatan', 'Mts9Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

////////////////           SMK TKJ               //////////////////////////////
	Route::get('/smktkj10', 'Smktkj10Controller@index');
	Route::post('/smktkj10/create', 'Smktkj10Controller@create');
	Route::get('/smktkj10/{id}/edit', 'Smktkj10Controller@edit');
	Route::post('/smktkj10/{id}/update', 'Smktkj10Controller@update');
	Route::get('/smktkj10/{id}/delete', 'Smktkj10Controller@delete');
	Route::get('/smktkj10/{id}/profile', 'Smktkj10Controller@profile');

	Route::post('/smktkj10/{id}/addnilai', 'Smktkj10Controller@addnilai');
	Route::get('/smktkj10/{id}/{idmapel}/deletenilai', 'Smktkj10Controller@deletenilai');

	Route::post('/smktkj10/{id}/adddata', 'Smktkj10Controller@adddata');
	Route::post('/smktkj10/{id}/addpulang', 'Smktkj10Controller@addpulang');
	Route::post('/smktkj10/{id}/addbarang', 'Smktkj10Controller@addbarang');
	Route::post('/smktkj10/{id}/addhebat', 'Smktkj10Controller@addhebat');
	Route::post('/smktkj10/{id}/adddeskripsi', 'Smktkj10Controller@adddeskripsi');

	Route::get('smktkj10/exportexcel','Smktkj10Controller@exportExcel');
	Route::post('/importsmktkj10','Smktkj10Controller@smktkj10importexcel')->name('importsmktkj10');

	Route::get('/smktkj10/{id}/printdatadiri', 'Smktkj10Controller@printdatadiri');
	Route::get('/smktkj10/{id}/printmapel', 'Smktkj10Controller@printmapel');
	Route::get('/smktkj10/{id}/printhukuman', 'Smktkj10Controller@printhukuman');
	Route::get('/smktkj10/{id}/printizin', 'Smktkj10Controller@printizin');
	Route::get('/smktkj10/{id}/printambil', 'Smktkj10Controller@printambil');
	Route::get('/smktkj10/{id}/printprestasi', 'Smktkj10Controller@printprestasi');
	Route::get('/smktkj10/{id}/printcatatan', 'Smktkj10Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/smktkj11', 'Smktkj11Controller@index');
	Route::post('/smktkj11/create', 'Smktkj11Controller@create');
	Route::get('/smktkj11/{id}/edit', 'Smktkj11Controller@edit');
	Route::post('/smktkj11/{id}/update', 'Smktkj11Controller@update');
	Route::get('/smktkj11/{id}/delete', 'Smktkj11Controller@delete');
	Route::get('/smktkj11/{id}/profile', 'Smktkj11Controller@profile');

	Route::post('/smktkj11/{id}/addnilai', 'Smktkj11Controller@addnilai');
	Route::get('/smktkj11/{id}/{idmapel}/deletenilai', 'Smktkj11Controller@deletenilai');

	Route::post('/smktkj11/{id}/adddata', 'Smktkj11Controller@adddata');
	Route::post('/smktkj11/{id}/addpulang', 'Smktkj11Controller@addpulang');
	Route::post('/smktkj11/{id}/addbarang', 'Smktkj11Controller@addbarang');
	Route::post('/smktkj11/{id}/addhebat', 'Smktkj11Controller@addhebat');
	Route::post('/smktkj11/{id}/adddeskripsi', 'Smktkj11Controller@adddeskripsi');

	Route::get('smktkj11/exportexcel','Smktkj11Controller@exportExcel');
	Route::post('/importsmktkj11','Smktkj11Controller@smktkj11importexcel')->name('importsmktkj11');

	Route::get('/smktkj11/{id}/printdatadiri', 'Smktkj11Controller@printdatadiri');
	Route::get('/smktkj11/{id}/printmapel', 'Smktkj11Controller@printmapel');
	Route::get('/smktkj11/{id}/printhukuman', 'Smktkj11Controller@printhukuman');
	Route::get('/smktkj11/{id}/printizin', 'Smktkj11Controller@printizin');
	Route::get('/smktkj11/{id}/printambil', 'Smktkj11Controller@printambil');
	Route::get('/smktkj11/{id}/printprestasi', 'Smktkj11Controller@printprestasi');
	Route::get('/smktkj11/{id}/printcatatan', 'Smktkj11Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/smktkj12', 'Smktkj12Controller@index');
	Route::post('/smktkj12/create', 'Smktkj12Controller@create');
	Route::get('/smktkj12/{id}/edit', 'Smktkj12Controller@edit');
	Route::post('/smktkj12/{id}/update', 'Smktkj12Controller@update');
	Route::get('/smktkj12/{id}/delete', 'Smktkj12Controller@delete');
	Route::get('/smktkj12/{id}/profile', 'Smktkj12Controller@profile');

	Route::post('/smktkj12/{id}/addnilai', 'Smktkj12Controller@addnilai');
	Route::get('/smktkj12/{id}/{idmapel}/deletenilai', 'Smktkj12Controller@deletenilai');

	Route::post('/smktkj12/{id}/adddata', 'Smktkj12Controller@adddata');
	Route::post('/smktkj12/{id}/addpulang', 'Smktkj12Controller@addpulang');
	Route::post('/smktkj12/{id}/addbarang', 'Smktkj12Controller@addbarang');
	Route::post('/smktkj12/{id}/addhebat', 'Smktkj12Controller@addhebat');
	Route::post('/smktkj12/{id}/adddeskripsi', 'Smktkj12Controller@adddeskripsi');

	Route::get('smktkj12/exportexcel','Smktkj12Controller@exportExcel');
	Route::post('/importsmktkj12','Smktkj12Controller@smktkj12importexcel')->name('importsmktkj12');

	Route::get('/smktkj12/{id}/printdatadiri', 'Smktkj12Controller@printdatadiri');
	Route::get('/smktkj12/{id}/printmapel', 'Smktkj12Controller@printmapel');
	Route::get('/smktkj12/{id}/printhukuman', 'Smktkj12Controller@printhukuman');
	Route::get('/smktkj12/{id}/printizin', 'Smktkj12Controller@printizin');
	Route::get('/smktkj12/{id}/printambil', 'Smktkj12Controller@printambil');
	Route::get('/smktkj12/{id}/printprestasi', 'Smktkj12Controller@printprestasi');
	Route::get('/smktkj12/{id}/printcatatan', 'Smktkj12Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

////////////////           SMK TKR               //////////////////////////////
	Route::get('/smktkr10', 'Smktkr10Controller@index');
	Route::post('/smktkr10/create', 'Smktkr10Controller@create');
	Route::get('/smktkr10/{id}/edit', 'Smktkr10Controller@edit');
	Route::post('/smktkr10/{id}/update', 'Smktkr10Controller@update');
	Route::get('/smktkr10/{id}/delete', 'Smktkr10Controller@delete');
	Route::get('/smktkr10/{id}/profile', 'Smktkr10Controller@profile');

	Route::post('/smktkr10/{id}/addnilai', 'Smktkr10Controller@addnilai');
	Route::get('/smktkr10/{id}/{idmapel}/deletenilai', 'Smktkr10Controller@deletenilai');

	Route::post('/smktkr10/{id}/adddata', 'Smktkr10Controller@adddata');
	Route::post('/smktkr10/{id}/addpulang', 'Smktkr10Controller@addpulang');
	Route::post('/smktkr10/{id}/addbarang', 'Smktkr10Controller@addbarang');
	Route::post('/smktkr10/{id}/addhebat', 'Smktkr10Controller@addhebat');
	Route::post('/smktkr10/{id}/adddeskripsi', 'Smktkr10Controller@adddeskripsi');

	Route::get('smktkr10/exportexcel','Smktkr10Controller@exportExcel');
	Route::post('/importsmktkr10','Smktkr10Controller@smktkr10importexcel')->name('importsmktkr10');

	Route::get('/smktkr10/{id}/printdatadiri', 'Smktkr10Controller@printdatadiri');
	Route::get('/smktkr10/{id}/printmapel', 'Smktkr10Controller@printmapel');
	Route::get('/smktkr10/{id}/printhukuman', 'Smktkr10Controller@printhukuman');
	Route::get('/smktkr10/{id}/printizin', 'Smktkr10Controller@printizin');
	Route::get('/smktkr10/{id}/printambil', 'Smktkr10Controller@printambil');
	Route::get('/smktkr10/{id}/printprestasi', 'Smktkr10Controller@printprestasi');
	Route::get('/smktkr10/{id}/printcatatan', 'Smktkr10Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/smktkr11', 'Smktkr11Controller@index');
	Route::post('/smktkr11/create', 'Smktkr11Controller@create');
	Route::get('/smktkr11/{id}/edit', 'Smktkr11Controller@edit');
	Route::post('/smktkr11/{id}/update', 'Smktkr11Controller@update');
	Route::get('/smktkr11/{id}/delete', 'Smktkr11Controller@delete');
	Route::get('/smktkr11/{id}/profile', 'Smktkr11Controller@profile');

	Route::post('/smktkr11/{id}/addnilai', 'Smktkr11Controller@addnilai');
	Route::get('/smktkr11/{id}/{idmapel}/deletenilai', 'Smktkr11Controller@deletenilai');

	Route::post('/smktkr11/{id}/adddata', 'Smktkr11Controller@adddata');
	Route::post('/smktkr11/{id}/addpulang', 'Smktkr11Controller@addpulang');
	Route::post('/smktkr11/{id}/addbarang', 'Smktkr11Controller@addbarang');
	Route::post('/smktkr11/{id}/addhebat', 'Smktkr11Controller@addhebat');
	Route::post('/smktkr11/{id}/adddeskripsi', 'Smktkr11Controller@adddeskripsi');

	Route::get('smktkr11/exportexcel','Smktkr11Controller@exportExcel');
	Route::post('/importsmktkr11','Smktkr11Controller@smktkr11importexcel')->name('importsmktkr11');

	Route::get('/smktkr11/{id}/printdatadiri', 'Smktkr11Controller@printdatadiri');
	Route::get('/smktkr11/{id}/printmapel', 'Smktkr11Controller@printmapel');
	Route::get('/smktkr11/{id}/printhukuman', 'Smktkr11Controller@printhukuman');
	Route::get('/smktkr11/{id}/printizin', 'Smktkr11Controller@printizin');
	Route::get('/smktkr11/{id}/printambil', 'Smktkr11Controller@printambil');
	Route::get('/smktkr11/{id}/printprestasi', 'Smktkr11Controller@printprestasi');
	Route::get('/smktkr11/{id}/printcatatan', 'Smktkr11Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/smktkr12', 'Smktkr12Controller@index');
	Route::post('/smktkr12/create', 'Smktkr12Controller@create');
	Route::get('/smktkr12/{id}/edit', 'Smktkr12Controller@edit');
	Route::post('/smktkr12/{id}/update', 'Smktkr12Controller@update');
	Route::get('/smktkr12/{id}/delete', 'Smktkr12Controller@delete');
	Route::get('/smktkr12/{id}/profile', 'Smktkr12Controller@profile');

	Route::post('/smktkr12/{id}/addnilai', 'Smktkr12Controller@addnilai');
	Route::get('/smktkr12/{id}/{idmapel}/deletenilai', 'Smktkr12Controller@deletenilai');

	Route::post('/smktkr12/{id}/adddata', 'Smktkr12Controller@adddata');
	Route::post('/smktkr12/{id}/addpulang', 'Smktkr12Controller@addpulang');
	Route::post('/smktkr12/{id}/addbarang', 'Smktkr12Controller@addbarang');
	Route::post('/smktkr12/{id}/addhebat', 'Smktkr12Controller@addhebat');
	Route::post('/smktkr12/{id}/adddeskripsi', 'Smktkr12Controller@adddeskripsi');

	Route::get('smktkr12/exportexcel','Smktkr12Controller@exportExcel');
	Route::post('/importsmktkr12','Smktkr12Controller@smktkr12importexcel')->name('importsmktkr12');

	Route::get('/smktkr12/{id}/printdatadiri', 'Smktkr12Controller@printdatadiri');
	Route::get('/smktkr12/{id}/printmapel', 'Smktkr12Controller@printmapel');
	Route::get('/smktkr12/{id}/printhukuman', 'Smktkr12Controller@printhukuman');
	Route::get('/smktkr12/{id}/printizin', 'Smktkr12Controller@printizin');
	Route::get('/smktkr12/{id}/printambil', 'Smktkr12Controller@printambil');
	Route::get('/smktkr12/{id}/printprestasi', 'Smktkr12Controller@printprestasi');
	Route::get('/smktkr12/{id}/printcatatan', 'Smktkr12Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

////////////////           MA             //////////////////////////////
	Route::get('/ma10', 'Ma10Controller@index');
	Route::post('/ma10/create', 'Ma10Controller@create');
	Route::get('/ma10/{id}/edit', 'Ma10Controller@edit');
	Route::post('/ma10/{id}/update', 'Ma10Controller@update');
	Route::get('/ma10/{id}/delete', 'Ma10Controller@delete');
	Route::get('/ma10/{id}/profile', 'Ma10Controller@profile');

	Route::post('/ma10/{id}/addnilai', 'Ma10Controller@addnilai');
	Route::get('/ma10/{id}/{idmapel}/deletenilai', 'Ma10Controller@deletenilai');

	Route::post('/ma10/{id}/adddata', 'Ma10Controller@adddata');
	Route::post('/ma10/{id}/addpulang', 'Ma10Controller@addpulang');
	Route::post('/ma10/{id}/addbarang', 'Ma10Controller@addbarang');
	Route::post('/ma10/{id}/addhebat', 'Ma10Controller@addhebat');
	Route::post('/ma10/{id}/adddeskripsi', 'Ma10Controller@adddeskripsi');

	Route::get('ma10/exportexcel','Ma10Controller@exportExcel');
	Route::post('/importma10','Ma10Controller@ma10importexcel')->name('importma10');

	Route::get('/ma10/{id}/printdatadiri', 'Ma10Controller@printdatadiri');
	Route::get('/ma10/{id}/printmapel', 'Ma10Controller@printmapel');
	Route::get('/ma10/{id}/printhukuman', 'Ma10Controller@printhukuman');
	Route::get('/ma10/{id}/printizin', 'Ma10Controller@printizin');
	Route::get('/ma10/{id}/printambil', 'Ma10Controller@printambil');
	Route::get('/ma10/{id}/printprestasi', 'Ma10Controller@printprestasi');
	Route::get('/ma10/{id}/printcatatan', 'Ma10Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/ma11', 'Ma11Controller@index');
	Route::post('/ma11/create', 'Ma11Controller@create');
	Route::get('/ma11/{id}/edit', 'Ma11Controller@edit');
	Route::post('/ma11/{id}/update', 'Ma11Controller@update');
	Route::get('/ma11/{id}/delete', 'Ma11Controller@delete');
	Route::get('/ma11/{id}/profile', 'Ma11Controller@profile');

	Route::post('/ma11/{id}/addnilai', 'Ma11Controller@addnilai');
	Route::get('/ma11/{id}/{idmapel}/deletenilai', 'Ma11Controller@deletenilai');

	Route::post('/ma11/{id}/adddata', 'Ma11Controller@adddata');
	Route::post('/ma11/{id}/addpulang', 'Ma11Controller@addpulang');
	Route::post('/ma11/{id}/addbarang', 'Ma11Controller@addbarang');
	Route::post('/ma11/{id}/addhebat', 'Ma11Controller@addhebat');
	Route::post('/ma11/{id}/adddeskripsi', 'Ma11Controller@adddeskripsi');

	Route::get('ma11/exportexcel','Ma11Controller@exportExcel');
	Route::post('/importma11','Ma11Controller@ma11importexcel')->name('importma11');

	Route::get('/ma11/{id}/printdatadiri', 'Ma11Controller@printdatadiri');
	Route::get('/ma11/{id}/printmapel', 'Ma11Controller@printmapel');
	Route::get('/ma11/{id}/printhukuman', 'Ma11Controller@printhukuman');
	Route::get('/ma11/{id}/printizin', 'Ma11Controller@printizin');
	Route::get('/ma11/{id}/printambil', 'Ma11Controller@printambil');
	Route::get('/ma11/{id}/printprestasi', 'Ma11Controller@printprestasi');
	Route::get('/ma11/{id}/printcatatan', 'Ma11Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/ma12', 'Ma12Controller@index');
	Route::post('/ma12/create', 'Ma12Controller@create');
	Route::get('/ma12/{id}/edit', 'Ma12Controller@edit');
	Route::post('/ma12/{id}/update', 'Ma12Controller@update');
	Route::get('/ma12/{id}/delete', 'Ma12Controller@delete');
	Route::get('/ma12/{id}/profile', 'Ma12Controller@profile');

	Route::post('/ma12/{id}/addnilai', 'Ma12Controller@addnilai');
	Route::get('/ma12/{id}/{idmapel}/deletenilai', 'Ma12Controller@deletenilai');

	Route::post('/ma12/{id}/adddata', 'Ma12Controller@adddata');
	Route::post('/ma12/{id}/addpulang', 'Ma12Controller@addpulang');
	Route::post('/ma12/{id}/addbarang', 'Ma12Controller@addbarang');
	Route::post('/ma12/{id}/addhebat', 'Ma12Controller@addhebat');
	Route::post('/ma12/{id}/adddeskripsi', 'Ma12Controller@adddeskripsi');

	Route::get('ma12/exportexcel','Ma12Controller@exportExcel');
	Route::post('/importma12','Ma12Controller@ma12importexcel')->name('importma12');

	Route::get('/ma12/{id}/printdatadiri', 'Ma12Controller@printdatadiri');
	Route::get('/ma12/{id}/printmapel', 'Ma12Controller@printmapel');
	Route::get('/ma12/{id}/printhukuman', 'Ma12Controller@printhukuman');
	Route::get('/ma12/{id}/printizin', 'Ma12Controller@printizin');
	Route::get('/ma12/{id}/printambil', 'Ma12Controller@printambil');
	Route::get('/ma12/{id}/printprestasi', 'Ma12Controller@printprestasi');
	Route::get('/ma12/{id}/printcatatan', 'Ma12Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

////////////////           MAHAD ALY             //////////////////////////////
	Route::get('/mahadaly1', 'Mahadaly1Controller@index');
	Route::post('/mahadaly1/create', 'Mahadaly1Controller@create');
	Route::get('/mahadaly1/{id}/edit', 'Mahadaly1Controller@edit');
	Route::post('/mahadaly1/{id}/update', 'Mahadaly1Controller@update');
	Route::get('/mahadaly1/{id}/delete', 'Mahadaly1Controller@delete');
	Route::get('/mahadaly1/{id}/profile', 'Mahadaly1Controller@profile');

//////////////// nilai
	Route::post('/mahadaly1/{id}/addnilai', 'Mahadaly1Controller@addnilai');
	Route::get('/mahadaly1/{id}/{idmapel}/deletenilai', 'Mahadaly1Controller@deletenilai');
//////////////// hukuman
	Route::post('/mahadaly1/{id}/adddata', 'Mahadaly1Controller@adddata');
//////////////// izin
	Route::post('/mahadaly1/{id}/addpulang', 'Mahadaly1Controller@addpulang');
//////////////// ambil
	Route::post('/mahadaly1/{id}/addbarang', 'Mahadaly1Controller@addbarang');
//////////////// prestasi
	Route::post('/mahadaly1/{id}/addhebat', 'Mahadaly1Controller@addhebat');
//////////////// catatan
	Route::post('/mahadaly1/{id}/adddeskripsi', 'Mahadaly1Controller@adddeskripsi');

	Route::get('mahadaly1/exportexcel','Mahadaly1Controller@exportExcel');
	Route::post('/importmahadaly1','Mahadaly1Controller@mahadaly1importexcel')->name('importmahadaly1');

	Route::get('/mahadaly1/{id}/printdatadiri', 'Mahadaly1Controller@printdatadiri');
	Route::get('/mahadaly1/{id}/printmapel', 'Mahadaly1Controller@printmapel');
	Route::get('/mahadaly1/{id}/printhukuman', 'Mahadaly1Controller@printhukuman');
	Route::get('/mahadaly1/{id}/printizin', 'Mahadaly1Controller@printizin');
	Route::get('/mahadaly1/{id}/printambil', 'Mahadaly1Controller@printambil');
	Route::get('/mahadaly1/{id}/printprestasi', 'Mahadaly1Controller@printprestasi');
	Route::get('/mahadaly1/{id}/printcatatan', 'Mahadaly1Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/mahadaly2', 'Mahadaly2Controller@index');
	Route::post('/mahadaly2/create', 'Mahadaly2Controller@create');
	Route::get('/mahadaly2/{id}/edit', 'Mahadaly2Controller@edit');
	Route::post('/mahadaly2/{id}/update', 'Mahadaly2Controller@update');
	Route::get('/mahadaly2/{id}/delete', 'Mahadaly2Controller@delete');
	Route::get('/mahadaly2/{id}/profile', 'Mahadaly2Controller@profile');

	Route::post('/mahadaly2/{id}/addnilai', 'Mahadaly2Controller@addnilai');
	Route::get('/mahadaly2/{id}/{idmapel}/deletenilai', 'Mahadaly2Controller@deletenilai');

	Route::post('/mahadaly2/{id}/adddata', 'Mahadaly2Controller@adddata');
	Route::post('/mahadaly2/{id}/addpulang', 'Mahadaly2Controller@addpulang');
	Route::post('/mahadaly2/{id}/addbarang', 'Mahadaly2Controller@addbarang');
	Route::post('/mahadaly2/{id}/addhebat', 'Mahadaly2Controller@addhebat');
	Route::post('/mahadaly2/{id}/adddeskripsi', 'Mahadaly2Controller@adddeskripsi');

	Route::get('mahadaly2/exportexcel','Mahadaly2Controller@exportExcel');
	Route::post('/importmahadaly2','Mahadaly2Controller@mahadaly2importexcel')->name('importmahadaly2');

	Route::get('/mahadaly2/{id}/printdatadiri', 'Mahadaly2Controller@printdatadiri');
	Route::get('/mahadaly2/{id}/printmapel', 'Mahadaly2Controller@printmapel');
	Route::get('/mahadaly2/{id}/printhukuman', 'Mahadaly2Controller@printhukuman');
	Route::get('/mahadaly2/{id}/printizin', 'Mahadaly2Controller@printizin');
	Route::get('/mahadaly2/{id}/printambil', 'Mahadaly2Controller@printambil');
	Route::get('/mahadaly2/{id}/printprestasi', 'Mahadaly2Controller@printprestasi');
	Route::get('/mahadaly2/{id}/printcatatan', 'Mahadaly2Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/mahadaly3', 'Mahadaly3Controller@index');
	Route::post('/mahadaly3/create', 'Mahadaly3Controller@create');
	Route::get('/mahadaly3/{id}/edit', 'Mahadaly3Controller@edit');
	Route::post('/mahadaly3/{id}/update', 'Mahadaly3Controller@update');
	Route::get('/mahadaly3/{id}/delete', 'Mahadaly3Controller@delete');
	Route::get('/mahadaly3/{id}/profile', 'Mahadaly3Controller@profile');

	Route::post('/mahadaly3/{id}/addnilai', 'Mahadaly3Controller@addnilai');
	Route::get('/mahadaly3/{id}/{idmapel}/deletenilai', 'Mahadaly3Controller@deletenilai');

	Route::post('/mahadaly3/{id}/adddata', 'Mahadaly3Controller@adddata');
	Route::post('/mahadaly3/{id}/addpulang', 'Mahadaly3Controller@addpulang');
	Route::post('/mahadaly3/{id}/addbarang', 'Mahadaly3Controller@addbarang');
	Route::post('/mahadaly3/{id}/addhebat', 'Mahadaly3Controller@addhebat');
	Route::post('/mahadaly3/{id}/adddeskripsi', 'Mahadaly3Controller@adddeskripsi');

	Route::get('mahadaly3/exportexcel','Mahadaly3Controller@exportExcel');
	Route::post('/importmahadaly3','Mahadaly3Controller@mahadaly3importexcel')->name('importmahadaly3');

	Route::get('/mahadaly3/{id}/printdatadiri', 'Mahadaly3Controller@printdatadiri');
	Route::get('/mahadaly3/{id}/printmapel', 'Mahadaly3Controller@printmapel');
	Route::get('/mahadaly3/{id}/printhukuman', 'Mahadaly3Controller@printhukuman');
	Route::get('/mahadaly3/{id}/printizin', 'Mahadaly3Controller@printizin');
	Route::get('/mahadaly3/{id}/printambil', 'Mahadaly3Controller@printambil');
	Route::get('/mahadaly3/{id}/printprestasi', 'Mahadaly3Controller@printprestasi');
	Route::get('/mahadaly3/{id}/printcatatan', 'Mahadaly3Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

	Route::get('/mahadaly4', 'Mahadaly4Controller@index');
	Route::post('/mahadaly4/create', 'Mahadaly4Controller@create');
	Route::get('/mahadaly4/{id}/edit', 'Mahadaly4Controller@edit');
	Route::post('/mahadaly4/{id}/update', 'Mahadaly4Controller@update');
	Route::get('/mahadaly4/{id}/delete', 'Mahadaly4Controller@delete');
	Route::get('/mahadaly4/{id}/profile', 'Mahadaly4Controller@profile');	

	Route::post('/mahadaly4/{id}/addnilai', 'Mahadaly4Controller@addnilai');
	Route::get('/mahadaly4/{id}/{idmapel}/deletenilai', 'Mahadaly4Controller@deletenilai');

	Route::post('/mahadaly4/{id}/adddata', 'Mahadaly4Controller@adddata');
	Route::post('/mahadaly4/{id}/addpulang', 'Mahadaly4Controller@addpulang');
	Route::post('/mahadaly4/{id}/addbarang', 'Mahadaly4Controller@addbarang');
	Route::post('/mahadaly4/{id}/addhebat', 'Mahadaly4Controller@addhebat');
	Route::post('/mahadaly4/{id}/adddeskripsi', 'Mahadaly4Controller@adddeskripsi');

	Route::get('mahadaly4/exportexcel','Mahadaly4Controller@exportExcel');
	Route::post('/importmahadaly4','Mahadaly4Controller@mahadaly4importexcel')->name('importmahadaly4');

	Route::get('/mahadaly4/{id}/printdatadiri', 'Mahadaly4Controller@printdatadiri');
	Route::get('/mahadaly4/{id}/printmapel', 'Mahadaly4Controller@printmapel');
	Route::get('/mahadaly4/{id}/printhukuman', 'Mahadaly4Controller@printhukuman');
	Route::get('/mahadaly4/{id}/printizin', 'Mahadaly4Controller@printizin');
	Route::get('/mahadaly4/{id}/printambil', 'Mahadaly4Controller@printambil');
	Route::get('/mahadaly4/{id}/printprestasi', 'Mahadaly4Controller@printprestasi');
	Route::get('/mahadaly4/{id}/printcatatan', 'Mahadaly4Controller@printcatatan');

///////////////////////////////////////////////////////////////////////////////

////////////////           SALAF             //////////////////////////////
	Route::get('/salaf', 'SalafController@index');
	Route::post('/salaf/create', 'SalafController@create');
	Route::get('/salaf/{id}/edit', 'SalafController@edit');
	Route::post('/salaf/{id}/update', 'SalafController@update');
	Route::get('/salaf/{id}/delete', 'SalafController@delete');
	Route::get('/salaf/{id}/profile', 'SalafController@profile');

	Route::post('/salaf/{id}/addnilai', 'SalafController@addnilai');
	Route::get('/salaf/{id}/{idmapel}/deletenilai', 'SalafController@deletenilai');

	Route::post('/salaf/{id}/adddata', 'SalafController@adddata');
	Route::post('/salaf/{id}/addpulang', 'SalafController@addpulang');
	Route::post('/salaf/{id}/addbarang', 'SalafController@addbarang');
	Route::post('/salaf/{id}/addhebat', 'SalafController@addhebat');
	Route::post('/salaf/{id}/adddeskripsi', 'SalafController@adddeskripsi');

	Route::get('salaf/exportexcel','SalafController@exportExcel');
	Route::post('/importsalaf','SalafController@salafimportexcel')->name('importsalaf');

	Route::get('/salaf/{id}/printsalaf', 'SalafController@printsalaf');	

	Route::get('/salaf/{id}/biayaawalmasuk', 'SalafController@biayaawalmasuk');
	Route::post('/salaf/{id}/addbiaya', 'SalafController@addbiaya');
	Route::get('/salaf/{id}/{idregistrasi}/deleteregistrasi', 'SalafController@deleteregistrasi');
	Route::get('/salaf/{id}/printregistrasisalaf', 'SalafController@printregistrasisalaf');

	Route::get('/salaf/{id}/printdatadiri', 'SalafController@printdatadiri');
	Route::get('/salaf/{id}/printmapel', 'SalafController@printmapel');
	Route::get('/salaf/{id}/printhukuman', 'SalafController@printhukuman');
	Route::get('/salaf/{id}/printizin', 'SalafController@printizin');
	Route::get('/salaf/{id}/printambil', 'SalafController@printambil');
	Route::get('/salaf/{id}/printprestasi', 'SalafController@printprestasi');
	Route::get('/salaf/{id}/printcatatan', 'SalafController@printcatatan');

///////////////////////////////////////////////////////////////////////////////

////////////////           ALUMNI             //////////////////////////////
	Route::get('/alumni', 'AlumniController@index');
	Route::post('/alumni/create', 'AlumniController@create');
	Route::get('/alumni/{id}/edit', 'AlumniController@edit');
	Route::post('/alumni/{id}/update', 'AlumniController@update');
	Route::get('/alumni/{id}/delete', 'AlumniController@delete');
	Route::get('/alumni/{id}/profile', 'AlumniController@profile');

	Route::post('/alumni/{id}/addnilai', 'AlumniController@addnilai');
	Route::get('/alumni/{id}/{idmapel}/deletenilai', 'AlumniController@deletenilai');

	Route::post('/alumni/{id}/adddata', 'AlumniController@adddata');
	Route::post('/alumni/{id}/addpulang', 'AlumniController@addpulang');
	Route::post('/alumni/{id}/addbarang', 'AlumniController@addbarang');
	Route::post('/alumni/{id}/addhebat', 'AlumniController@addhebat');
	Route::post('/alumni/{id}/adddeskripsi', 'AlumniController@adddeskripsi');

	Route::get('alumni/exportexcel','AlumniController@exportExcel');
	Route::post('/importalumni','AlumniController@alumniimportexcel')->name('importalumni');

	Route::get('/alumni/{id}/printalumni', 'AlumniController@printalumni');
///////////////////////////////////////////////////////////////////////////////

////////////////           KELUAR ==>   SMA             //////////////////////////////
	Route::get('/santrikeluar', 'SantrikeluarController@index');
	Route::post('/santrikeluar/create', 'SantrikeluarController@create');
	Route::get('/santrikeluar/{id}/edit', 'SantrikeluarController@edit');
	Route::post('/santrikeluar/{id}/update', 'SantrikeluarController@update');
	Route::get('/santrikeluar/{id}/delete', 'SantrikeluarController@delete');
	Route::get('/santrikeluar/{id}/profile', 'SantrikeluarController@profile');

	Route::post('/santrikeluar/{id}/addnilai', 'SantrikeluarController@addnilai');
	Route::get('/santrikeluar/{id}/{idmapel}/deletenilai', 'SantrikeluarController@deletenilai');

	Route::post('/santrikeluar/{id}/adddata', 'SantrikeluarController@adddata');
	Route::post('/santrikeluar/{id}/addpulang', 'SantrikeluarController@addpulang');
	Route::post('/santrikeluar/{id}/addbarang', 'SantrikeluarController@addbarang');
	Route::post('/santrikeluar/{id}/addhebat', 'SantrikeluarController@addhebat');
	Route::post('/santrikeluar/{id}/adddeskripsi', 'SantrikeluarController@adddeskripsi');

	Route::get('santrikeluar/exportexcel','SantrikeluarController@exportExcel');
	Route::post('/importsantrikeluar','SantrikeluarController@santrikeluarimportexcel')->name('importsantrikeluar');

	Route::get('/santrikeluar/{id}/seratusribu', 'SantrikeluarController@seratusribu');

	Route::get('/santrikeluar/{id}/printsantrikeluar', 'SantrikeluarController@printsantrikeluar');	

	Route::get('/santrikeluar/{id}/biayaawalmasuk', 'SantrikeluarController@biayaawalmasuk');
	Route::post('/santrikeluar/{id}/addbiaya', 'SantrikeluarController@addbiaya');
	Route::get('/santrikeluar/{id}/{idregistrasi}/deleteregistrasi', 'SantrikeluarController@deleteregistrasi');
	Route::get('/santrikeluar/{id}/printregistrasisantrikeluar', 'SantrikeluarController@printregistrasisantrikeluar');


////////////////           EMAIL USERS             //////////////////////////////
	Route::get('/emailusers', 'EmailusersController@index');

////////////////           REKAPAN ADMINISTRASI             //////////////////////////////
	Route::get('/rekapan/administrasi/smp1', 'RekapanadministrasiController@smp1');
	Route::get('smp1/administrasi/exportexcel','RekapanadministrasiController@exportExcelsmp1');

	Route::get('/rekapan/administrasi/smp2', 'RekapanadministrasiController@smp2');
	Route::get('smp2/administrasi/exportexcel','RekapanadministrasiController@exportExcelsmp2');

	Route::get('/rekapan/administrasi/mts', 'RekapanadministrasiController@mts');
	Route::get('mts/administrasi/exportexcel','RekapanadministrasiController@exportExcelmts');

	Route::get('/rekapan/administrasi/smktkj', 'RekapanadministrasiController@smktkj');
	Route::get('smktkj/administrasi/exportexcel','RekapanadministrasiController@exportExcelsmktkj');

	Route::get('/rekapan/administrasi/smktkr', 'RekapanadministrasiController@smktkr');
	Route::get('smktkr/administrasi/exportexcel','RekapanadministrasiController@exportExcelsmktkr');

	Route::get('/rekapan/administrasi/ma', 'RekapanadministrasiController@ma');
	Route::get('ma/administrasi/exportexcel','RekapanadministrasiController@exportExcelma');

	Route::get('/rekapan/administrasi/mahadaly', 'RekapanadministrasiController@mahadaly');
	Route::get('mahadaly/administrasi/exportexcel','RekapanadministrasiController@exportExcelmahadaly');
	
	Route::get('/rekapan/administrasi/siswa', 'RekapanadministrasiController@siswa');
	Route::get('siswa/administrasi/exportexcel','RekapanadministrasiController@exportExcelsiswa');
	

///////////////////////////////////////////////////////////////////////////////	
///////////////////////////////////////////////////////////////////////////////

/////////////  BLOG POST  /////////
	Route::get('/posts', 'PostController@index')->name('posts.index');

/////////////  TAMBAH BLOG POST --> SLUG /////////
	Route::get('post/add',[
		'uses' => 'PostController@add',
		'as' => 'posts.add',
	]);	

/////////////  TAMBAH FOTO THUMBNAIL BLOG POST --> SLUG /////////
	Route::post('post/create',[
		'uses' => 'PostController@create',
		'as' => 'posts.create',
	]);	

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/dashboard1', 'Dashboard1Controller@index');
	Route::get('/dashboard2', 'Dashboard2Controller@index');
	Route::get('/dashboard3', 'Dashboard3Controller@index');
	Route::get('/dashboard4', 'Dashboard4Controller@index');
	Route::get('/dashboard5', 'Dashboard5Controller@index');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	Route::get('/pendaftaranOnlineBelumTes', 'DashboardController@pendaftaranOnlineBelumTes');
	Route::get('/pendaftaranOnlineSudahTes', 'DashboardController@pendaftaranOnlineSudahTes');


////////////////           DASHBOARD Total            //////////////////////////////
	Route::get('/totallakilaki', 'DashboardController@totallakilaki');
	Route::get('/totalperempuan', 'DashboardController@totalperempuan');

	Route::get('/totalreguler', 'DashboardController@totalreguler');
	Route::get('/totalnonreguler', 'DashboardController@totalnonreguler');

	Route::get('/totalregulerlk', 'DashboardController@totalregulerlk');
	Route::get('/totalregulerpr', 'DashboardController@totalregulerpr');
	Route::get('/totalnonregulerlk', 'DashboardController@totalnonregulerlk');
	Route::get('/totalnonregulerpr', 'DashboardController@totalnonregulerpr');	

	Route::get('/totalsmp1', 'DashboardController@totalsmp1');
	Route::get('/totalsmp2', 'DashboardController@totalsmp2');
	Route::get('/totalmts', 'DashboardController@totalmts');
	Route::get('/totalsmktkj', 'DashboardController@totalsmktkj');
	Route::get('/totalsmktkr', 'DashboardController@totalsmktkr');
	Route::get('/totalma', 'DashboardController@totalma');
	Route::get('/totalmahadaly', 'DashboardController@totalmahadaly');

	Route::get('/totalregistrasi', 'DashboardController@totalregistrasi');
	Route::get('/totallunas', 'DashboardController@totallunas');

	Route::get('/totalperbulan', 'DashboardController@totalperbulan');
		Route::get('/totalperbulanjanuari', 'DashboardController@totalperbulanjanuari');
		Route::get('/totalperbulanfebruari', 'DashboardController@totalperbulanfebruari');
		Route::get('/totalperbulanmaret', 'DashboardController@totalperbulanmaret');
		Route::get('/totalperbulanapril', 'DashboardController@totalperbulanapril');
		Route::get('/totalperbulanmei', 'DashboardController@totalperbulanmei');
		Route::get('/totalperbulanjuni', 'DashboardController@totalperbulanjuni');
		Route::get('/totalperbulanjuli', 'DashboardController@totalperbulanjuli');
		Route::get('/totalperbulanagustus', 'DashboardController@totalperbulanagustus');
		Route::get('/totalperbulanseptember', 'DashboardController@totalperbulanseptember');
		Route::get('/totalperbulanoktober', 'DashboardController@totalperbulanoktober');
		Route::get('/totalperbulannovember', 'DashboardController@totalperbulannovember');
		Route::get('/totalperbulandesember', 'DashboardController@totalperbulandesember');

			Route::get('/totalperbulanjanuarioffline', 'DashboardController@totalperbulanjanuarioffline');
			Route::get('/totalperbulanfebruarioffline', 'DashboardController@totalperbulanfebruarioffline');
			Route::get('/totalperbulanmaretoffline', 'DashboardController@totalperbulanmaretoffline');
			Route::get('/totalperbulanapriloffline', 'DashboardController@totalperbulanapriloffline');
			Route::get('/totalperbulanmeioffline', 'DashboardController@totalperbulanmeioffline');
			Route::get('/totalperbulanjunioffline', 'DashboardController@totalperbulanjunioffline');
			Route::get('/totalperbulanjulioffline', 'DashboardController@totalperbulanjulioffline');
			Route::get('/totalperbulanagustusoffline', 'DashboardController@totalperbulanagustusoffline');
			Route::get('/totalperbulanseptemberoffline', 'DashboardController@totalperbulanseptemberoffline');
			Route::get('/totalperbulanoktoberoffline', 'DashboardController@totalperbulanoktoberoffline');
			Route::get('/totalperbulannovemberoffline', 'DashboardController@totalperbulannovemberoffline');
			Route::get('/totalperbulandesemberoffline', 'DashboardController@totalperbulandesemberoffline');

			Route::get('/totalperbulanjanuarionline', 'DashboardController@totalperbulanjanuarionline');
			Route::get('/totalperbulanfebruarionline', 'DashboardController@totalperbulanfebruarionline');
			Route::get('/totalperbulanmaretonline', 'DashboardController@totalperbulanmaretonline');
			Route::get('/totalperbulanaprilonline', 'DashboardController@totalperbulanaprilonline');
			Route::get('/totalperbulanmeionline', 'DashboardController@totalperbulanmeionline');
			Route::get('/totalperbulanjunionline', 'DashboardController@totalperbulanjunionline');
			Route::get('/totalperbulanjulionline', 'DashboardController@totalperbulanjulionline');
			Route::get('/totalperbulanagustusonline', 'DashboardController@totalperbulanagustusonline');
			Route::get('/totalperbulanseptemberonline', 'DashboardController@totalperbulanseptemberonline');
			Route::get('/totalperbulanoktoberonline', 'DashboardController@totalperbulanoktoberonline');
			Route::get('/totalperbulannovemberonline', 'DashboardController@totalperbulannovemberonline');
			Route::get('/totalperbulandesemberonline', 'DashboardController@totalperbulandesemberonline');

////////////////           DETAIL DASHBOARD             //////////////////////////////
	Route::get('/smp1detail', 'DashboardDetailController@smp1detail');
		Route::get('/smp1/tanggalmasuk', 'Smp1Controller@tanggalmasuk');
		Route::get('/smp1/tanggalmasuk/januari', 'Smp1Controller@januari');
		Route::get('/smp1/tanggalmasuk/februari', 'Smp1Controller@februari');
		Route::get('/smp1/tanggalmasuk/maret', 'Smp1Controller@maret');
		Route::get('/smp1/tanggalmasuk/april', 'Smp1Controller@april');
		Route::get('/smp1/tanggalmasuk/mei', 'Smp1Controller@mei');
		Route::get('/smp1/tanggalmasuk/juni', 'Smp1Controller@juni');
		Route::get('/smp1/tanggalmasuk/juli', 'Smp1Controller@juli');
		Route::get('/smp1/tanggalmasuk/agustus', 'Smp1Controller@agustus');
		Route::get('/smp1/tanggalmasuk/september', 'Smp1Controller@september');
		Route::get('/smp1/tanggalmasuk/oktober', 'Smp1Controller@oktober');
		Route::get('/smp1/tanggalmasuk/november', 'Smp1Controller@november');
		Route::get('/smp1/tanggalmasuk/desember', 'Smp1Controller@desember');
			Route::get('/smp1/lakilaki', 'Smp1Controller@indexlakilaki');
			Route::get('/smp1/perempuan', 'Smp1Controller@indexperempuan');
		Route::get('/smp1/reguler', 'Smp1Controller@reguler');
		Route::get('/smp1/nonreguler', 'Smp1Controller@nonreguler');
			Route::get('/smp1/regulerlk', 'Smp1Controller@regulerlk');
			Route::get('/smp1/regulerpr', 'Smp1Controller@regulerpr');
			Route::get('/smp1/nonregulerlk', 'Smp1Controller@nonregulerlk');
			Route::get('/smp1/nonregulerpr', 'Smp1Controller@nonregulerpr');
		Route::get('/smp1/uang', 'Smp1Controller@uang');
		Route::get('/smp1/lunas', 'Smp1Controller@lunas');
			Route::get('/smp1/uang/reguler/lakilaki', 'Smp1Controller@uangregulerlakilaki');
			Route::get('/smp1/uang/reguler/perempuan', 'Smp1Controller@uangregulerperempuan');
			Route::get('/smp1/uang/nonreguler/lakilaki', 'Smp1Controller@uangnonregulerlakilaki');
			Route::get('/smp1/uang/nonreguler/perempuan', 'Smp1Controller@uangnonregulerperempuan');

	Route::get('/smp2detail', 'DashboardDetailController@smp2detail');
		Route::get('/smp2/tanggalmasuk', 'Smp2Controller@tanggalmasuk');
		Route::get('/smp2/tanggalmasuk/januari', 'Smp2Controller@januari');
		Route::get('/smp2/tanggalmasuk/februari', 'Smp2Controller@februari');
		Route::get('/smp2/tanggalmasuk/maret', 'Smp2Controller@maret');
		Route::get('/smp2/tanggalmasuk/april', 'Smp2Controller@april');
		Route::get('/smp2/tanggalmasuk/mei', 'Smp2Controller@mei');
		Route::get('/smp2/tanggalmasuk/juni', 'Smp2Controller@juni');
		Route::get('/smp2/tanggalmasuk/juli', 'Smp2Controller@juli');
		Route::get('/smp2/tanggalmasuk/agustus', 'Smp2Controller@agustus');
		Route::get('/smp2/tanggalmasuk/september', 'Smp2Controller@september');
		Route::get('/smp2/tanggalmasuk/oktober', 'Smp2Controller@oktober');
		Route::get('/smp2/tanggalmasuk/november', 'Smp2Controller@november');
		Route::get('/smp2/tanggalmasuk/desember', 'Smp2Controller@desember');
			Route::get('/smp2/lakilaki', 'Smp2Controller@indexlakilaki');
			Route::get('/smp2/perempuan', 'Smp2Controller@indexperempuan');
		Route::get('/smp2/reguler', 'Smp2Controller@reguler');
		Route::get('/smp2/nonreguler', 'Smp2Controller@nonreguler');
			Route::get('/smp2/regulerlk', 'Smp2Controller@regulerlk');
			Route::get('/smp2/regulerpr', 'Smp2Controller@regulerpr');
			Route::get('/smp2/nonregulerlk', 'Smp2Controller@nonregulerlk');
			Route::get('/smp2/nonregulerpr', 'Smp2Controller@nonregulerpr');
		Route::get('/smp2/uang', 'Smp2Controller@uang');
		Route::get('/smp2/lunas', 'Smp2Controller@lunas');
			Route::get('/smp2/uang/reguler/lakilaki', 'Smp2Controller@uangregulerlakilaki');
			Route::get('/smp2/uang/reguler/perempuan', 'Smp2Controller@uangregulerperempuan');
			Route::get('/smp2/uang/nonreguler/lakilaki', 'Smp2Controller@uangnonregulerlakilaki');
			Route::get('/smp2/uang/nonreguler/perempuan', 'Smp2Controller@uangnonregulerperempuan');
	
	Route::get('/mtsdetail', 'DashboardDetailController@mtsdetail');
		Route::get('/mts/tanggalmasuk', 'MtsController@tanggalmasuk');
		Route::get('/mts/tanggalmasuk/januari', 'MtsController@januari');
		Route::get('/mts/tanggalmasuk/februari', 'MtsController@februari');
		Route::get('/mts/tanggalmasuk/maret', 'MtsController@maret');
		Route::get('/mts/tanggalmasuk/april', 'MtsController@april');
		Route::get('/mts/tanggalmasuk/mei', 'MtsController@mei');
		Route::get('/mts/tanggalmasuk/juni', 'MtsController@juni');
		Route::get('/mts/tanggalmasuk/juli', 'MtsController@juli');
		Route::get('/mts/tanggalmasuk/agustus', 'MtsController@agustus');
		Route::get('/mts/tanggalmasuk/september', 'MtsController@september');
		Route::get('/mts/tanggalmasuk/oktober', 'MtsController@oktober');
		Route::get('/mts/tanggalmasuk/november', 'MtsController@november');
		Route::get('/mts/tanggalmasuk/desember', 'MtsController@desember');
			Route::get('/mts/lakilaki', 'MtsController@indexlakilaki');
			Route::get('/mts/perempuan', 'MtsController@indexperempuan');
		Route::get('/mts/reguler', 'MtsController@reguler');
		Route::get('/mts/nonreguler', 'MtsController@nonreguler');
			Route::get('/mts/regulerlk', 'MtsController@regulerlk');
			Route::get('/mts/regulerpr', 'MtsController@regulerpr');
			Route::get('/mts/nonregulerlk', 'MtsController@nonregulerlk');
			Route::get('/mts/nonregulerpr', 'MtsController@nonregulerpr');
		Route::get('/mts/uang', 'MtsController@uang');
		Route::get('/mts/lunas', 'MtsController@lunas');
			Route::get('/mts/uang/reguler/lakilaki', 'MtsController@uangregulerlakilaki');
			Route::get('/mts/uang/reguler/perempuan', 'MtsController@uangregulerperempuan');
			Route::get('/mts/uang/nonreguler/lakilaki', 'MtsController@uangnonregulerlakilaki');
			Route::get('/mts/uang/nonreguler/perempuan', 'MtsController@uangnonregulerperempuan');

	Route::get('/smktkjdetail', 'DashboardDetailController@smktkjdetail');
		Route::get('/smktkj/tanggalmasuk', 'SmktkjController@tanggalmasuk');
		Route::get('/smktkj/tanggalmasuk/januari', 'SmktkjController@januari');
		Route::get('/smktkj/tanggalmasuk/februari', 'SmktkjController@februari');
		Route::get('/smktkj/tanggalmasuk/maret', 'SmktkjController@maret');
		Route::get('/smktkj/tanggalmasuk/april', 'SmktkjController@april');
		Route::get('/smktkj/tanggalmasuk/mei', 'SmktkjController@mei');
		Route::get('/smktkj/tanggalmasuk/juni', 'SmktkjController@juni');
		Route::get('/smktkj/tanggalmasuk/juli', 'SmktkjController@juli');
		Route::get('/smktkj/tanggalmasuk/agustus', 'SmktkjController@agustus');
		Route::get('/smktkj/tanggalmasuk/september', 'SmktkjController@september');
		Route::get('/smktkj/tanggalmasuk/oktober', 'SmktkjController@oktober');
		Route::get('/smktkj/tanggalmasuk/november', 'SmktkjController@november');
		Route::get('/smktkj/tanggalmasuk/desember', 'SmktkjController@desember');
			Route::get('/smktkj/lakilaki', 'SmktkjController@indexlakilaki');
			Route::get('/smktkj/perempuan', 'SmktkjController@indexperempuan');
		Route::get('/smktkj/reguler', 'SmktkjController@reguler');
		Route::get('/smktkj/nonreguler', 'SmktkjController@nonreguler');
			Route::get('/smktkj/regulerlk', 'SmktkjController@regulerlk');
			Route::get('/smktkj/regulerpr', 'SmktkjController@regulerpr');
			Route::get('/smktkj/nonregulerlk', 'SmktkjController@nonregulerlk');
			Route::get('/smktkj/nonregulerpr', 'SmktkjController@nonregulerpr');
		Route::get('/smktkj/uang', 'SmktkjController@uang');
		Route::get('/smktkj/lunas', 'SmktkjController@lunas');
			Route::get('/smktkj/uang/reguler/lakilaki', 'SmktkjController@uangregulerlakilaki');
			Route::get('/smktkj/uang/reguler/perempuan', 'SmktkjController@uangregulerperempuan');
			Route::get('/smktkj/uang/nonreguler/lakilaki', 'SmktkjController@uangnonregulerlakilaki');
			Route::get('/smktkj/uang/nonreguler/perempuan', 'SmktkjController@uangnonregulerperempuan');

	Route::get('/smktkrdetail', 'DashboardDetailController@smktkrdetail');
		Route::get('/smktkr/tanggalmasuk', 'SmktkrController@tanggalmasuk');
		Route::get('/smktkr/tanggalmasuk/januari', 'SmktkrController@januari');
		Route::get('/smktkr/tanggalmasuk/februari', 'SmktkrController@februari');
		Route::get('/smktkr/tanggalmasuk/maret', 'SmktkrController@maret');
		Route::get('/smktkr/tanggalmasuk/april', 'SmktkrController@april');
		Route::get('/smktkr/tanggalmasuk/mei', 'SmktkrController@mei');
		Route::get('/smktkr/tanggalmasuk/juni', 'SmktkrController@juni');
		Route::get('/smktkr/tanggalmasuk/juli', 'SmktkrController@juli');
		Route::get('/smktkr/tanggalmasuk/agustus', 'SmktkrController@agustus');
		Route::get('/smktkr/tanggalmasuk/september', 'SmktkrController@september');
		Route::get('/smktkr/tanggalmasuk/oktober', 'SmktkrController@oktober');
		Route::get('/smktkr/tanggalmasuk/november', 'SmktkrController@november');
		Route::get('/smktkr/tanggalmasuk/desember', 'SmktkrController@desember');
			Route::get('/smktkr/lakilaki', 'SmktkrController@indexlakilaki');
			Route::get('/smktkr/perempuan', 'SmktkrController@indexperempuan');
		Route::get('/smktkr/reguler', 'SmktkrController@reguler');
		Route::get('/smktkr/nonreguler', 'SmktkrController@nonreguler');
			Route::get('/smktkr/regulerlk', 'SmktkrController@regulerlk');
			Route::get('/smktkr/regulerpr', 'SmktkrController@regulerpr');
			Route::get('/smktkr/nonregulerlk', 'SmktkrController@nonregulerlk');
			Route::get('/smktkr/nonregulerpr', 'SmktkrController@nonregulerpr');
		Route::get('/smktkr/uang', 'SmktkrController@uang');
		Route::get('/smktkr/lunas', 'SmktkrController@lunas');
			Route::get('/smktkr/uang/reguler/lakilaki', 'SmktkrController@uangregulerlakilaki');
			Route::get('/smktkr/uang/reguler/perempuan', 'SmktkrController@uangregulerperempuan');
			Route::get('/smktkr/uang/nonreguler/lakilaki', 'SmktkrController@uangnonregulerlakilaki');
			Route::get('/smktkr/uang/nonreguler/perempuan', 'SmktkrController@uangnonregulerperempuan');

	Route::get('/madetail', 'DashboardDetailController@madetail');
		Route::get('/ma/tanggalmasuk', 'MaController@tanggalmasuk');
		Route::get('/ma/tanggalmasuk/januari', 'MaController@januari');
		Route::get('/ma/tanggalmasuk/februari', 'MaController@februari');
		Route::get('/ma/tanggalmasuk/maret', 'MaController@maret');
		Route::get('/ma/tanggalmasuk/april', 'MaController@april');
		Route::get('/ma/tanggalmasuk/mei', 'MaController@mei');
		Route::get('/ma/tanggalmasuk/juni', 'MaController@juni');
		Route::get('/ma/tanggalmasuk/juli', 'MaController@juli');
		Route::get('/ma/tanggalmasuk/agustus', 'MaController@agustus');
		Route::get('/ma/tanggalmasuk/september', 'MaController@september');
		Route::get('/ma/tanggalmasuk/oktober', 'MaController@oktober');
		Route::get('/ma/tanggalmasuk/november', 'MaController@november');
		Route::get('/ma/tanggalmasuk/desember', 'MaController@desember');
			Route::get('/ma/lakilaki', 'MaController@indexlakilaki');
			Route::get('/ma/perempuan', 'MaController@indexperempuan');
		Route::get('/ma/reguler', 'MaController@reguler');
		Route::get('/ma/nonreguler', 'MaController@nonreguler');
			Route::get('/ma/regulerlk', 'MaController@regulerlk');
			Route::get('/ma/regulerpr', 'MaController@regulerpr');
			Route::get('/ma/nonregulerlk', 'MaController@nonregulerlk');
			Route::get('/ma/nonregulerpr', 'MaController@nonregulerpr');
		Route::get('/ma/uang', 'MaController@uang');
		Route::get('/ma/lunas', 'MaController@lunas');
			Route::get('/ma/uang/reguler/lakilaki', 'MaController@uangregulerlakilaki');
			Route::get('/ma/uang/reguler/perempuan', 'MaController@uangregulerperempuan');
			Route::get('/ma/uang/nonreguler/lakilaki', 'MaController@uangnonregulerlakilaki');
			Route::get('/ma/uang/nonreguler/perempuan', 'MaController@uangnonregulerperempuan');

	Route::get('/mahadalydetail', 'DashboardDetailController@mahadalydetail');
		Route::get('/mahadaly/tanggalmasuk', 'MahadalyController@tanggalmasuk');
		Route::get('/mahadaly/tanggalmasuk/januari', 'MahadalyController@januari');
		Route::get('/mahadaly/tanggalmasuk/februari', 'MahadalyController@februari');
		Route::get('/mahadaly/tanggalmasuk/maret', 'MahadalyController@maret');
		Route::get('/mahadaly/tanggalmasuk/april', 'MahadalyController@april');
		Route::get('/mahadaly/tanggalmasuk/mei', 'MahadalyController@mei');
		Route::get('/mahadaly/tanggalmasuk/juni', 'MahadalyController@juni');
		Route::get('/mahadaly/tanggalmasuk/juli', 'MahadalyController@juli');
		Route::get('/mahadaly/tanggalmasuk/agustus', 'MahadalyController@agustus');
		Route::get('/mahadaly/tanggalmasuk/september', 'MahadalyController@september');
		Route::get('/mahadaly/tanggalmasuk/oktober', 'MahadalyController@oktober');
		Route::get('/mahadaly/tanggalmasuk/november', 'MahadalyController@november');
		Route::get('/mahadaly/tanggalmasuk/desember', 'MahadalyController@desember');
			Route::get('/mahadaly/lakilaki', 'MahadalyController@indexlakilaki');
			Route::get('/mahadaly/perempuan', 'MahadalyController@indexperempuan');
		Route::get('/mahadaly/reguler', 'MahadalyController@reguler');
		Route::get('/mahadaly/nonreguler', 'MahadalyController@nonreguler');
			Route::get('/mahadaly/regulerlk', 'MahadalyController@regulerlk');
			Route::get('/mahadaly/regulerpr', 'MahadalyController@regulerpr');
			Route::get('/mahadaly/nonregulerlk', 'MahadalyController@nonregulerlk');
			Route::get('/mahadaly/nonregulerpr', 'MahadalyController@nonregulerpr');
		Route::get('/mahadaly/uang', 'MahadalyController@uang');
		Route::get('/mahadaly/lunas', 'MahadalyController@lunas');
			Route::get('/mahadaly/uang/reguler/lakilaki', 'MahadalyController@uangregulerlakilaki');
			Route::get('/mahadaly/uang/reguler/perempuan', 'MahadalyController@uangregulerperempuan');
			Route::get('/mahadaly/uang/nonreguler/lakilaki', 'MahadalyController@uangnonregulerlakilaki');
			Route::get('/mahadaly/uang/nonreguler/perempuan', 'MahadalyController@uangnonregulerperempuan');

	Route::get('/siswadetail', 'DashboardDetailController@siswadetail');
		Route::get('/siswa/tanggalmasuk', 'SiswaController@tanggalmasuk');
		Route::get('/siswa/tanggalmasuk/januari', 'SiswaController@januari');
		Route::get('/siswa/tanggalmasuk/februari', 'SiswaController@februari');
		Route::get('/siswa/tanggalmasuk/maret', 'SiswaController@maret');
		Route::get('/siswa/tanggalmasuk/april', 'SiswaController@april');
		Route::get('/siswa/tanggalmasuk/mei', 'SiswaController@mei');
		Route::get('/siswa/tanggalmasuk/juni', 'SiswaController@juni');
		Route::get('/siswa/tanggalmasuk/juli', 'SiswaController@juli');
		Route::get('/siswa/tanggalmasuk/agustus', 'SiswaController@agustus');
		Route::get('/siswa/tanggalmasuk/september', 'SiswaController@september');
		Route::get('/siswa/tanggalmasuk/oktober', 'SiswaController@oktober');
		Route::get('/siswa/tanggalmasuk/november', 'SiswaController@november');
		Route::get('/siswa/tanggalmasuk/desember', 'SiswaController@desember');
			Route::get('/siswa/lakilaki', 'SiswaController@indexlakilaki');
			Route::get('/siswa/perempuan', 'SiswaController@indexperempuan');
		Route::get('/siswa/reguler', 'SiswaController@reguler');
		Route::get('/siswa/nonreguler', 'SiswaController@nonreguler');
			Route::get('/siswa/regulerlk', 'SiswaController@regulerlk');
			Route::get('/siswa/regulerpr', 'SiswaController@regulerpr');
			Route::get('/siswa/nonregulerlk', 'SiswaController@nonregulerlk');
			Route::get('/siswa/nonregulerpr', 'SiswaController@nonregulerpr');
		Route::get('/siswa/uang', 'SiswaController@uang');
		Route::get('/siswa/lunas', 'SiswaController@lunas');
			Route::get('/siswa/uang/reguler/lakilaki', 'SiswaController@uangregulerlakilaki');
			Route::get('/siswa/uang/reguler/perempuan', 'SiswaController@uangregulerperempuan');
			Route::get('/siswa/uang/nonreguler/lakilaki', 'SiswaController@uangnonregulerlakilaki');
			Route::get('/siswa/uang/nonreguler/perempuan', 'SiswaController@uangnonregulerperempuan');

			Route::get('/siswa/smp1', 'SiswaController@smp1');
                      Route::get('/siswa/smp1/lakilaki', 'SiswaController@smp1lakilaki');
                      Route::get('/siswa/smp1/perempuan', 'SiswaController@smp1perempuan');
                      Route::get('/siswa/smp1/reguler', 'SiswaController@smp1reguler');
                      Route::get('/siswa/smp1/nonreguler', 'SiswaController@smp1nonreguler');
                      Route::get('/siswa/smp1/regulerlk', 'SiswaController@smp1regulerlk');
                      Route::get('/siswa/smp1/regulerpr', 'SiswaController@smp1regulerpr');
                      Route::get('/siswa/smp1/nonregulerlk', 'SiswaController@smp1nonregulerlk');
                      Route::get('/siswa/smp1/nonregulerpr', 'SiswaController@smp1nonregulerpr');
			Route::get('/siswa/smp2', 'SiswaController@smp2');
                      Route::get('/siswa/smp2/lakilaki', 'SiswaController@smp2lakilaki');
                      Route::get('/siswa/smp2/perempuan', 'SiswaController@smp2perempuan');
                      Route::get('/siswa/smp2/reguler', 'SiswaController@smp2reguler');
                      Route::get('/siswa/smp2/nonreguler', 'SiswaController@smp2nonreguler');
                      Route::get('/siswa/smp2/regulerlk', 'SiswaController@smp2regulerlk');
                      Route::get('/siswa/smp2/regulerpr', 'SiswaController@smp2regulerpr');
                      Route::get('/siswa/smp2/nonregulerlk', 'SiswaController@smp2nonregulerlk');
                      Route::get('/siswa/smp2/nonregulerpr', 'SiswaController@smp2nonregulerpr');
			Route::get('/siswa/mts', 'SiswaController@mts');
                      Route::get('/siswa/mts/lakilaki', 'SiswaController@mtslakilaki');
                      Route::get('/siswa/mts/perempuan', 'SiswaController@mtsperempuan');
                      Route::get('/siswa/mts/reguler', 'SiswaController@mtsreguler');
                      Route::get('/siswa/mts/nonreguler', 'SiswaController@mtsnonreguler');
                      Route::get('/siswa/mts/regulerlk', 'SiswaController@mtsregulerlk');
                      Route::get('/siswa/mts/regulerpr', 'SiswaController@mtsregulerpr');
                      Route::get('/siswa/mts/nonregulerlk', 'SiswaController@mtsnonregulerlk');
                      Route::get('/siswa/mts/nonregulerpr', 'SiswaController@mtsnonregulerpr');
			Route::get('/siswa/smktkj', 'SiswaController@smktkj');
                      Route::get('/siswa/smktkj/lakilaki', 'SiswaController@smktkjlakilaki');
                      Route::get('/siswa/smktkj/perempuan', 'SiswaController@smktkjperempuan');
                      Route::get('/siswa/smktkj/reguler', 'SiswaController@smktkjreguler');
                      Route::get('/siswa/smktkj/nonreguler', 'SiswaController@smktkjnonreguler');
                      Route::get('/siswa/smktkj/regulerlk', 'SiswaController@smktkjregulerlk');
                      Route::get('/siswa/smktkj/regulerpr', 'SiswaController@smktkjregulerpr');
                      Route::get('/siswa/smktkj/nonregulerlk', 'SiswaController@smktkjnonregulerlk');
                      Route::get('/siswa/smktkj/nonregulerpr', 'SiswaController@smktkjnonregulerpr');
			Route::get('/siswa/smktkr', 'SiswaController@smktkr');
                      Route::get('/siswa/smktkr/lakilaki', 'SiswaController@smktkrlakilaki');
                      Route::get('/siswa/smktkr/perempuan', 'SiswaController@smktkrperempuan');
                      Route::get('/siswa/smktkr/reguler', 'SiswaController@smktkrreguler');
                      Route::get('/siswa/smktkr/nonreguler', 'SiswaController@smktkrnonreguler');
                      Route::get('/siswa/smktkr/regulerlk', 'SiswaController@smktkrregulerlk');
                      Route::get('/siswa/smktkr/regulerpr', 'SiswaController@smktkrregulerpr');
                      Route::get('/siswa/smktkr/nonregulerlk', 'SiswaController@smktkrnonregulerlk');
                      Route::get('/siswa/smktkr/nonregulerpr', 'SiswaController@smktkrnonregulerpr');
			Route::get('/siswa/ma', 'SiswaController@ma');
                      Route::get('/siswa/ma/lakilaki', 'SiswaController@malakilaki');
                      Route::get('/siswa/ma/perempuan', 'SiswaController@maperempuan');
                      Route::get('/siswa/ma/reguler', 'SiswaController@mareguler');
                      Route::get('/siswa/ma/nonreguler', 'SiswaController@manonreguler');
                      Route::get('/siswa/ma/regulerlk', 'SiswaController@maregulerlk');
                      Route::get('/siswa/ma/regulerpr', 'SiswaController@maregulerpr');
                      Route::get('/siswa/ma/nonregulerlk', 'SiswaController@manonregulerlk');
                      Route::get('/siswa/ma/nonregulerpr', 'SiswaController@manonregulerpr');
			Route::get('/siswa/mahadaly', 'SiswaController@mahadaly');
                      Route::get('/siswa/mahadaly/lakilaki', 'SiswaController@mahadalylakilaki');
                      Route::get('/siswa/mahadaly/perempuan', 'SiswaController@mahadalyperempuan');
                      Route::get('/siswa/mahadaly/reguler', 'SiswaController@mahadalyreguler');
                      Route::get('/siswa/mahadaly/nonreguler', 'SiswaController@mahadalynonreguler');
                      Route::get('/siswa/mahadaly/regulerlk', 'SiswaController@mahadalyregulerlk');
                      Route::get('/siswa/mahadaly/regulerpr', 'SiswaController@mahadalyregulerpr');
                      Route::get('/siswa/mahadaly/nonregulerlk', 'SiswaController@mahadalynonregulerlk');
                      Route::get('/siswa/mahadaly/nonregulerpr', 'SiswaController@mahadalynonregulerpr');

		Route::get('/smadetail', 'DashboardDetailController@smadetail');
		Route::get('/sma/tanggalmasuk', 'SantrikeluarController@tanggalmasuk');
		Route::get('/sma/tanggalmasuk/januari', 'SantrikeluarController@januari');
		Route::get('/sma/tanggalmasuk/februari', 'SantrikeluarController@februari');
		Route::get('/sma/tanggalmasuk/maret', 'SantrikeluarController@maret');
		Route::get('/sma/tanggalmasuk/april', 'SantrikeluarController@april');
		Route::get('/sma/tanggalmasuk/mei', 'SantrikeluarController@mei');
		Route::get('/sma/tanggalmasuk/juni', 'SantrikeluarController@juni');
		Route::get('/sma/tanggalmasuk/juli', 'SantrikeluarController@juli');
		Route::get('/sma/tanggalmasuk/agustus', 'SantrikeluarController@agustus');
		Route::get('/sma/tanggalmasuk/september', 'SantrikeluarController@september');
		Route::get('/sma/tanggalmasuk/oktober', 'SantrikeluarController@oktober');
		Route::get('/sma/tanggalmasuk/november', 'SantrikeluarController@november');
		Route::get('/sma/tanggalmasuk/desember', 'SantrikeluarController@desember');
			Route::get('/sma/lakilaki', 'SantrikeluarController@indexlakilaki');
			Route::get('/sma/perempuan', 'SantrikeluarController@indexperempuan');
		Route::get('/sma/reguler', 'SantrikeluarController@reguler');
		Route::get('/sma/nonreguler', 'SantrikeluarController@nonreguler');
			Route::get('/sma/regulerlk', 'SantrikeluarController@regulerlk');
			Route::get('/sma/regulerpr', 'SantrikeluarController@regulerpr');
			Route::get('/sma/nonregulerlk', 'SantrikeluarController@nonregulerlk');
			Route::get('/sma/nonregulerpr', 'SantrikeluarController@nonregulerpr');
		Route::get('/sma/uang', 'SantrikeluarController@uang');
		Route::get('/sma/lunas', 'SantrikeluarController@lunas');
			Route::get('/sma/uang/reguler/lakilaki', 'SantrikeluarController@uangregulerlakilaki');
			Route::get('/sma/uang/reguler/perempuan', 'SantrikeluarController@uangregulerperempuan');
			Route::get('/sma/uang/nonreguler/lakilaki', 'SantrikeluarController@uangnonregulerlakilaki');
			Route::get('/sma/uang/nonreguler/perempuan', 'SantrikeluarController@uangnonregulerperempuan');

});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::group(['middleware' => ['auth','checkRole:admin,siswa']],function(){
	
	Route::get('/pendaftaran-online', 'PendaftarOnlineController@index');

/////////online/////////
	Route::get('/siswa/{id}/edit-online', 'SiswaController@edit_online');
	Route::post('/siswa/{id}/update-online', 'SiswaController@update_online');

	Route::get('/siswa/{id}/printsiswa', 'SiswaController@printsiswa');

	Route::get('/siswa/{id}/registrasipendaftaran', 'SiswaController@registrasipendaftaran');
	Route::post('/siswa/{id}/addbiayaregistrasipendaftaran', 'SiswaController@addbiayaregistrasipendaftaran');
	Route::get('/siswa/{id}/{idregistrasipendaftaran}/deleteregistrasipendaftaran', 'SiswaController@deleteregistrasipendaftaran');

	Route::get('/siswa/{id}/biayaawalmasuk', 'SiswaController@biayaawalmasuk');
	Route::post('/siswa/{id}/addbiaya', 'SiswaController@addbiaya');
	Route::get('/siswa/{id}/{idregistrasi}/deleteregistrasi', 'SiswaController@deleteregistrasi');
	Route::get('/siswa/{id}/printregistrasisiswa', 'SiswaController@printregistrasisiswa');

	Route::get('/siswa/{id}/persyaratan', 'SiswaController@persyaratan');
	Route::post('/siswa/{id}/addsyarat', 'SiswaController@addsyarat');
	Route::get('/siswa/{id}/{idpersyaratan}/deletepersyaratan', 'SiswaController@deletepersyaratan');
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::group(['middleware' => ['auth','checkRole:smp1,smp2,mts,smktkj,smktkr,ma,mahadaly,siswa,salaf,smp17,smp18,smp19,smp27,smp28,smp29,mts7,mts8,mts9,smktkj10,smktkj11,smktkj12,smktkr10,smktkr11,smktkr12,ma10,ma11,ma12,mahadaly1,mahadaly2,mahadaly3,mahadaly4,siswa,salaf']],function(){
	
	Route::get('/pendaftaran-online', 'PendaftarOnlineController@index');

});


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::group(['middleware' => ['auth','checkRole:admin,laporan']],function(){
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/dashboard1', 'Dashboard1Controller@index');
	Route::get('/dashboard2', 'Dashboard2Controller@index');
	Route::get('/dashboard3', 'Dashboard3Controller@index');
	Route::get('/dashboard4', 'Dashboard4Controller@index');
	Route::get('/dashboard5', 'Dashboard5Controller@index');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	Route::get('/pendaftaranOnlineBelumTes', 'DashboardController@pendaftaranOnlineBelumTes');
	Route::get('/pendaftaranOnlineSudahTes', 'DashboardController@pendaftaranOnlineSudahTes');

////////////////           DASHBOARD Total            //////////////////////////////
	Route::get('/totallakilaki', 'DashboardController@totallakilaki');
	Route::get('/totalperempuan', 'DashboardController@totalperempuan');

	Route::get('/totalreguler', 'DashboardController@totalreguler');
	Route::get('/totalnonreguler', 'DashboardController@totalnonreguler');

	Route::get('/totalregulerlk', 'DashboardController@totalregulerlk');
	Route::get('/totalregulerpr', 'DashboardController@totalregulerpr');
	Route::get('/totalnonregulerlk', 'DashboardController@totalnonregulerlk');
	Route::get('/totalnonregulerpr', 'DashboardController@totalnonregulerpr');	

	Route::get('/totalsmp1', 'DashboardController@totalsmp1');
	Route::get('/totalsmp2', 'DashboardController@totalsmp2');
	Route::get('/totalmts', 'DashboardController@totalmts');
	Route::get('/totalsmktkj', 'DashboardController@totalsmktkj');
	Route::get('/totalsmktkr', 'DashboardController@totalsmktkr');
	Route::get('/totalma', 'DashboardController@totalma');
	Route::get('/totalmahadaly', 'DashboardController@totalmahadaly');

	Route::get('/totalregistrasi', 'DashboardController@totalregistrasi');
	Route::get('/totallunas', 'DashboardController@totallunas');

	Route::get('/totalperbulan', 'DashboardController@totalperbulan');
		Route::get('/totalperbulanjanuari', 'DashboardController@totalperbulanjanuari');
		Route::get('/totalperbulanfebruari', 'DashboardController@totalperbulanfebruari');
		Route::get('/totalperbulanmaret', 'DashboardController@totalperbulanmaret');
		Route::get('/totalperbulanapril', 'DashboardController@totalperbulanapril');
		Route::get('/totalperbulanmei', 'DashboardController@totalperbulanmei');
		Route::get('/totalperbulanjuni', 'DashboardController@totalperbulanjuni');
		Route::get('/totalperbulanjuli', 'DashboardController@totalperbulanjuli');
		Route::get('/totalperbulanagustus', 'DashboardController@totalperbulanagustus');
		Route::get('/totalperbulanseptember', 'DashboardController@totalperbulanseptember');
		Route::get('/totalperbulanoktober', 'DashboardController@totalperbulanoktober');
		Route::get('/totalperbulannovember', 'DashboardController@totalperbulannovember');
		Route::get('/totalperbulandesember', 'DashboardController@totalperbulandesember');

////////////////           DETAIL DASHBOARD             //////////////////////////////
	Route::get('/smp1detail', 'DashboardDetailController@smp1detail');
		Route::get('/smp1/tanggalmasuk', 'Smp1Controller@tanggalmasuk');
		Route::get('/smp1/tanggalmasuk/januari', 'Smp1Controller@januari');
		Route::get('/smp1/tanggalmasuk/februari', 'Smp1Controller@februari');
		Route::get('/smp1/tanggalmasuk/maret', 'Smp1Controller@maret');
		Route::get('/smp1/tanggalmasuk/april', 'Smp1Controller@april');
		Route::get('/smp1/tanggalmasuk/mei', 'Smp1Controller@mei');
		Route::get('/smp1/tanggalmasuk/juni', 'Smp1Controller@juni');
		Route::get('/smp1/tanggalmasuk/juli', 'Smp1Controller@juli');
		Route::get('/smp1/tanggalmasuk/agustus', 'Smp1Controller@agustus');
		Route::get('/smp1/tanggalmasuk/september', 'Smp1Controller@september');
		Route::get('/smp1/tanggalmasuk/oktober', 'Smp1Controller@oktober');
		Route::get('/smp1/tanggalmasuk/november', 'Smp1Controller@november');
		Route::get('/smp1/tanggalmasuk/desember', 'Smp1Controller@desember');
			Route::get('/smp1/lakilaki', 'Smp1Controller@indexlakilaki');
			Route::get('/smp1/perempuan', 'Smp1Controller@indexperempuan');
		Route::get('/smp1/reguler', 'Smp1Controller@reguler');
		Route::get('/smp1/nonreguler', 'Smp1Controller@nonreguler');
			Route::get('/smp1/regulerlk', 'Smp1Controller@regulerlk');
			Route::get('/smp1/regulerpr', 'Smp1Controller@regulerpr');
			Route::get('/smp1/nonregulerlk', 'Smp1Controller@nonregulerlk');
			Route::get('/smp1/nonregulerpr', 'Smp1Controller@nonregulerpr');
		Route::get('/smp1/uang', 'Smp1Controller@uang');
		Route::get('/smp1/lunas', 'Smp1Controller@lunas');
			Route::get('/smp1/uang/reguler/lakilaki', 'Smp1Controller@uangregulerlakilaki');
			Route::get('/smp1/uang/reguler/perempuan', 'Smp1Controller@uangregulerperempuan');
			Route::get('/smp1/uang/nonreguler/lakilaki', 'Smp1Controller@uangnonregulerlakilaki');
			Route::get('/smp1/uang/nonreguler/perempuan', 'Smp1Controller@uangnonregulerperempuan');

	Route::get('/smp2detail', 'DashboardDetailController@smp2detail');
		Route::get('/smp2/tanggalmasuk', 'Smp2Controller@tanggalmasuk');
		Route::get('/smp2/tanggalmasuk/januari', 'Smp2Controller@januari');
		Route::get('/smp2/tanggalmasuk/februari', 'Smp2Controller@februari');
		Route::get('/smp2/tanggalmasuk/maret', 'Smp2Controller@maret');
		Route::get('/smp2/tanggalmasuk/april', 'Smp2Controller@april');
		Route::get('/smp2/tanggalmasuk/mei', 'Smp2Controller@mei');
		Route::get('/smp2/tanggalmasuk/juni', 'Smp2Controller@juni');
		Route::get('/smp2/tanggalmasuk/juli', 'Smp2Controller@juli');
		Route::get('/smp2/tanggalmasuk/agustus', 'Smp2Controller@agustus');
		Route::get('/smp2/tanggalmasuk/september', 'Smp2Controller@september');
		Route::get('/smp2/tanggalmasuk/oktober', 'Smp2Controller@oktober');
		Route::get('/smp2/tanggalmasuk/november', 'Smp2Controller@november');
		Route::get('/smp2/tanggalmasuk/desember', 'Smp2Controller@desember');
			Route::get('/smp2/lakilaki', 'Smp2Controller@indexlakilaki');
			Route::get('/smp2/perempuan', 'Smp2Controller@indexperempuan');
		Route::get('/smp2/reguler', 'Smp2Controller@reguler');
		Route::get('/smp2/nonreguler', 'Smp2Controller@nonreguler');
			Route::get('/smp2/regulerlk', 'Smp2Controller@regulerlk');
			Route::get('/smp2/regulerpr', 'Smp2Controller@regulerpr');
			Route::get('/smp2/nonregulerlk', 'Smp2Controller@nonregulerlk');
			Route::get('/smp2/nonregulerpr', 'Smp2Controller@nonregulerpr');
		Route::get('/smp2/uang', 'Smp2Controller@uang');
		Route::get('/smp2/lunas', 'Smp2Controller@lunas');
			Route::get('/smp2/uang/reguler/lakilaki', 'Smp2Controller@uangregulerlakilaki');
			Route::get('/smp2/uang/reguler/perempuan', 'Smp2Controller@uangregulerperempuan');
			Route::get('/smp2/uang/nonreguler/lakilaki', 'Smp2Controller@uangnonregulerlakilaki');
			Route::get('/smp2/uang/nonreguler/perempuan', 'Smp2Controller@uangnonregulerperempuan');
	
	Route::get('/mtsdetail', 'DashboardDetailController@mtsdetail');
		Route::get('/mts/tanggalmasuk', 'MtsController@tanggalmasuk');
		Route::get('/mts/tanggalmasuk/januari', 'MtsController@januari');
		Route::get('/mts/tanggalmasuk/februari', 'MtsController@februari');
		Route::get('/mts/tanggalmasuk/maret', 'MtsController@maret');
		Route::get('/mts/tanggalmasuk/april', 'MtsController@april');
		Route::get('/mts/tanggalmasuk/mei', 'MtsController@mei');
		Route::get('/mts/tanggalmasuk/juni', 'MtsController@juni');
		Route::get('/mts/tanggalmasuk/juli', 'MtsController@juli');
		Route::get('/mts/tanggalmasuk/agustus', 'MtsController@agustus');
		Route::get('/mts/tanggalmasuk/september', 'MtsController@september');
		Route::get('/mts/tanggalmasuk/oktober', 'MtsController@oktober');
		Route::get('/mts/tanggalmasuk/november', 'MtsController@november');
		Route::get('/mts/tanggalmasuk/desember', 'MtsController@desember');
			Route::get('/mts/lakilaki', 'MtsController@indexlakilaki');
			Route::get('/mts/perempuan', 'MtsController@indexperempuan');
		Route::get('/mts/reguler', 'MtsController@reguler');
		Route::get('/mts/nonreguler', 'MtsController@nonreguler');
			Route::get('/mts/regulerlk', 'MtsController@regulerlk');
			Route::get('/mts/regulerpr', 'MtsController@regulerpr');
			Route::get('/mts/nonregulerlk', 'MtsController@nonregulerlk');
			Route::get('/mts/nonregulerpr', 'MtsController@nonregulerpr');
		Route::get('/mts/uang', 'MtsController@uang');
		Route::get('/mts/lunas', 'MtsController@lunas');
			Route::get('/mts/uang/reguler/lakilaki', 'MtsController@uangregulerlakilaki');
			Route::get('/mts/uang/reguler/perempuan', 'MtsController@uangregulerperempuan');
			Route::get('/mts/uang/nonreguler/lakilaki', 'MtsController@uangnonregulerlakilaki');
			Route::get('/mts/uang/nonreguler/perempuan', 'MtsController@uangnonregulerperempuan');

	Route::get('/smktkjdetail', 'DashboardDetailController@smktkjdetail');
		Route::get('/smktkj/tanggalmasuk', 'SmktkjController@tanggalmasuk');
		Route::get('/smktkj/tanggalmasuk/januari', 'SmktkjController@januari');
		Route::get('/smktkj/tanggalmasuk/februari', 'SmktkjController@februari');
		Route::get('/smktkj/tanggalmasuk/maret', 'SmktkjController@maret');
		Route::get('/smktkj/tanggalmasuk/april', 'SmktkjController@april');
		Route::get('/smktkj/tanggalmasuk/mei', 'SmktkjController@mei');
		Route::get('/smktkj/tanggalmasuk/juni', 'SmktkjController@juni');
		Route::get('/smktkj/tanggalmasuk/juli', 'SmktkjController@juli');
		Route::get('/smktkj/tanggalmasuk/agustus', 'SmktkjController@agustus');
		Route::get('/smktkj/tanggalmasuk/september', 'SmktkjController@september');
		Route::get('/smktkj/tanggalmasuk/oktober', 'SmktkjController@oktober');
		Route::get('/smktkj/tanggalmasuk/november', 'SmktkjController@november');
		Route::get('/smktkj/tanggalmasuk/desember', 'SmktkjController@desember');
			Route::get('/smktkj/lakilaki', 'SmktkjController@indexlakilaki');
			Route::get('/smktkj/perempuan', 'SmktkjController@indexperempuan');
		Route::get('/smktkj/reguler', 'SmktkjController@reguler');
		Route::get('/smktkj/nonreguler', 'SmktkjController@nonreguler');
			Route::get('/smktkj/regulerlk', 'SmktkjController@regulerlk');
			Route::get('/smktkj/regulerpr', 'SmktkjController@regulerpr');
			Route::get('/smktkj/nonregulerlk', 'SmktkjController@nonregulerlk');
			Route::get('/smktkj/nonregulerpr', 'SmktkjController@nonregulerpr');
		Route::get('/smktkj/uang', 'SmktkjController@uang');
		Route::get('/smktkj/lunas', 'SmktkjController@lunas');
			Route::get('/smktkj/uang/reguler/lakilaki', 'SmktkjController@uangregulerlakilaki');
			Route::get('/smktkj/uang/reguler/perempuan', 'SmktkjController@uangregulerperempuan');
			Route::get('/smktkj/uang/nonreguler/lakilaki', 'SmktkjController@uangnonregulerlakilaki');
			Route::get('/smktkj/uang/nonreguler/perempuan', 'SmktkjController@uangnonregulerperempuan');

	Route::get('/smktkrdetail', 'DashboardDetailController@smktkrdetail');
		Route::get('/smktkr/tanggalmasuk', 'SmktkrController@tanggalmasuk');
		Route::get('/smktkr/tanggalmasuk/januari', 'SmktkrController@januari');
		Route::get('/smktkr/tanggalmasuk/februari', 'SmktkrController@februari');
		Route::get('/smktkr/tanggalmasuk/maret', 'SmktkrController@maret');
		Route::get('/smktkr/tanggalmasuk/april', 'SmktkrController@april');
		Route::get('/smktkr/tanggalmasuk/mei', 'SmktkrController@mei');
		Route::get('/smktkr/tanggalmasuk/juni', 'SmktkrController@juni');
		Route::get('/smktkr/tanggalmasuk/juli', 'SmktkrController@juli');
		Route::get('/smktkr/tanggalmasuk/agustus', 'SmktkrController@agustus');
		Route::get('/smktkr/tanggalmasuk/september', 'SmktkrController@september');
		Route::get('/smktkr/tanggalmasuk/oktober', 'SmktkrController@oktober');
		Route::get('/smktkr/tanggalmasuk/november', 'SmktkrController@november');
		Route::get('/smktkr/tanggalmasuk/desember', 'SmktkrController@desember');
			Route::get('/smktkr/lakilaki', 'SmktkrController@indexlakilaki');
			Route::get('/smktkr/perempuan', 'SmktkrController@indexperempuan');
		Route::get('/smktkr/reguler', 'SmktkrController@reguler');
		Route::get('/smktkr/nonreguler', 'SmktkrController@nonreguler');
			Route::get('/smktkr/regulerlk', 'SmktkrController@regulerlk');
			Route::get('/smktkr/regulerpr', 'SmktkrController@regulerpr');
			Route::get('/smktkr/nonregulerlk', 'SmktkrController@nonregulerlk');
			Route::get('/smktkr/nonregulerpr', 'SmktkrController@nonregulerpr');
		Route::get('/smktkr/uang', 'SmktkrController@uang');
		Route::get('/smktkr/lunas', 'SmktkrController@lunas');
			Route::get('/smktkr/uang/reguler/lakilaki', 'SmktkrController@uangregulerlakilaki');
			Route::get('/smktkr/uang/reguler/perempuan', 'SmktkrController@uangregulerperempuan');
			Route::get('/smktkr/uang/nonreguler/lakilaki', 'SmktkrController@uangnonregulerlakilaki');
			Route::get('/smktkr/uang/nonreguler/perempuan', 'SmktkrController@uangnonregulerperempuan');

	Route::get('/madetail', 'DashboardDetailController@madetail');
		Route::get('/ma/tanggalmasuk', 'MaController@tanggalmasuk');
		Route::get('/ma/tanggalmasuk/januari', 'MaController@januari');
		Route::get('/ma/tanggalmasuk/februari', 'MaController@februari');
		Route::get('/ma/tanggalmasuk/maret', 'MaController@maret');
		Route::get('/ma/tanggalmasuk/april', 'MaController@april');
		Route::get('/ma/tanggalmasuk/mei', 'MaController@mei');
		Route::get('/ma/tanggalmasuk/juni', 'MaController@juni');
		Route::get('/ma/tanggalmasuk/juli', 'MaController@juli');
		Route::get('/ma/tanggalmasuk/agustus', 'MaController@agustus');
		Route::get('/ma/tanggalmasuk/september', 'MaController@september');
		Route::get('/ma/tanggalmasuk/oktober', 'MaController@oktober');
		Route::get('/ma/tanggalmasuk/november', 'MaController@november');
		Route::get('/ma/tanggalmasuk/desember', 'MaController@desember');
			Route::get('/ma/lakilaki', 'MaController@indexlakilaki');
			Route::get('/ma/perempuan', 'MaController@indexperempuan');
		Route::get('/ma/reguler', 'MaController@reguler');
		Route::get('/ma/nonreguler', 'MaController@nonreguler');
			Route::get('/ma/regulerlk', 'MaController@regulerlk');
			Route::get('/ma/regulerpr', 'MaController@regulerpr');
			Route::get('/ma/nonregulerlk', 'MaController@nonregulerlk');
			Route::get('/ma/nonregulerpr', 'MaController@nonregulerpr');
		Route::get('/ma/uang', 'MaController@uang');
		Route::get('/ma/lunas', 'MaController@lunas');
			Route::get('/ma/uang/reguler/lakilaki', 'MaController@uangregulerlakilaki');
			Route::get('/ma/uang/reguler/perempuan', 'MaController@uangregulerperempuan');
			Route::get('/ma/uang/nonreguler/lakilaki', 'MaController@uangnonregulerlakilaki');
			Route::get('/ma/uang/nonreguler/perempuan', 'MaController@uangnonregulerperempuan');

	Route::get('/mahadalydetail', 'DashboardDetailController@mahadalydetail');
		Route::get('/mahadaly/tanggalmasuk', 'MahadalyController@tanggalmasuk');
		Route::get('/mahadaly/tanggalmasuk/januari', 'MahadalyController@januari');
		Route::get('/mahadaly/tanggalmasuk/februari', 'MahadalyController@februari');
		Route::get('/mahadaly/tanggalmasuk/maret', 'MahadalyController@maret');
		Route::get('/mahadaly/tanggalmasuk/april', 'MahadalyController@april');
		Route::get('/mahadaly/tanggalmasuk/mei', 'MahadalyController@mei');
		Route::get('/mahadaly/tanggalmasuk/juni', 'MahadalyController@juni');
		Route::get('/mahadaly/tanggalmasuk/juli', 'MahadalyController@juli');
		Route::get('/mahadaly/tanggalmasuk/agustus', 'MahadalyController@agustus');
		Route::get('/mahadaly/tanggalmasuk/september', 'MahadalyController@september');
		Route::get('/mahadaly/tanggalmasuk/oktober', 'MahadalyController@oktober');
		Route::get('/mahadaly/tanggalmasuk/november', 'MahadalyController@november');
		Route::get('/mahadaly/tanggalmasuk/desember', 'MahadalyController@desember');
			Route::get('/mahadaly/lakilaki', 'MahadalyController@indexlakilaki');
			Route::get('/mahadaly/perempuan', 'MahadalyController@indexperempuan');
		Route::get('/mahadaly/reguler', 'MahadalyController@reguler');
		Route::get('/mahadaly/nonreguler', 'MahadalyController@nonreguler');
			Route::get('/mahadaly/regulerlk', 'MahadalyController@regulerlk');
			Route::get('/mahadaly/regulerpr', 'MahadalyController@regulerpr');
			Route::get('/mahadaly/nonregulerlk', 'MahadalyController@nonregulerlk');
			Route::get('/mahadaly/nonregulerpr', 'MahadalyController@nonregulerpr');
		Route::get('/mahadaly/uang', 'MahadalyController@uang');
		Route::get('/mahadaly/lunas', 'MahadalyController@lunas');
			Route::get('/mahadaly/uang/reguler/lakilaki', 'MahadalyController@uangregulerlakilaki');
			Route::get('/mahadaly/uang/reguler/perempuan', 'MahadalyController@uangregulerperempuan');
			Route::get('/mahadaly/uang/nonreguler/lakilaki', 'MahadalyController@uangnonregulerlakilaki');
			Route::get('/mahadaly/uang/nonreguler/perempuan', 'MahadalyController@uangnonregulerperempuan');

	Route::get('/siswadetail', 'DashboardDetailController@siswadetail');
		Route::get('/siswa/tanggalmasuk', 'SiswaController@tanggalmasuk');
		Route::get('/siswa/tanggalmasuk/januari', 'SiswaController@januari');
		Route::get('/siswa/tanggalmasuk/februari', 'SiswaController@februari');
		Route::get('/siswa/tanggalmasuk/maret', 'SiswaController@maret');
		Route::get('/siswa/tanggalmasuk/april', 'SiswaController@april');
		Route::get('/siswa/tanggalmasuk/mei', 'SiswaController@mei');
		Route::get('/siswa/tanggalmasuk/juni', 'SiswaController@juni');
		Route::get('/siswa/tanggalmasuk/juli', 'SiswaController@juli');
		Route::get('/siswa/tanggalmasuk/agustus', 'SiswaController@agustus');
		Route::get('/siswa/tanggalmasuk/september', 'SiswaController@september');
		Route::get('/siswa/tanggalmasuk/oktober', 'SiswaController@oktober');
		Route::get('/siswa/tanggalmasuk/november', 'SiswaController@november');
		Route::get('/siswa/tanggalmasuk/desember', 'SiswaController@desember');
			Route::get('/siswa/lakilaki', 'SiswaController@indexlakilaki');
			Route::get('/siswa/perempuan', 'SiswaController@indexperempuan');
		Route::get('/siswa/reguler', 'SiswaController@reguler');
		Route::get('/siswa/nonreguler', 'SiswaController@nonreguler');
			Route::get('/siswa/regulerlk', 'SiswaController@regulerlk');
			Route::get('/siswa/regulerpr', 'SiswaController@regulerpr');
			Route::get('/siswa/nonregulerlk', 'SiswaController@nonregulerlk');
			Route::get('/siswa/nonregulerpr', 'SiswaController@nonregulerpr');
		Route::get('/siswa/uang', 'SiswaController@uang');
		Route::get('/siswa/lunas', 'SiswaController@lunas');
			Route::get('/siswa/uang/reguler/lakilaki', 'SiswaController@uangregulerlakilaki');
			Route::get('/siswa/uang/reguler/perempuan', 'SiswaController@uangregulerperempuan');
			Route::get('/siswa/uang/nonreguler/lakilaki', 'SiswaController@uangnonregulerlakilaki');
			Route::get('/siswa/uang/nonreguler/perempuan', 'SiswaController@uangnonregulerperempuan');

			Route::get('/siswa/smp1', 'SiswaController@smp1');
                      Route::get('/siswa/smp1/lakilaki', 'SiswaController@smp1lakilaki');
                      Route::get('/siswa/smp1/perempuan', 'SiswaController@smp1perempuan');
                      Route::get('/siswa/smp1/reguler', 'SiswaController@smp1reguler');
                      Route::get('/siswa/smp1/nonreguler', 'SiswaController@smp1nonreguler');
                      Route::get('/siswa/smp1/regulerlk', 'SiswaController@smp1regulerlk');
                      Route::get('/siswa/smp1/regulerpr', 'SiswaController@smp1regulerpr');
                      Route::get('/siswa/smp1/nonregulerlk', 'SiswaController@smp1nonregulerlk');
                      Route::get('/siswa/smp1/nonregulerpr', 'SiswaController@smp1nonregulerpr');
			Route::get('/siswa/smp2', 'SiswaController@smp2');
                      Route::get('/siswa/smp2/lakilaki', 'SiswaController@smp2lakilaki');
                      Route::get('/siswa/smp2/perempuan', 'SiswaController@smp2perempuan');
                      Route::get('/siswa/smp2/reguler', 'SiswaController@smp2reguler');
                      Route::get('/siswa/smp2/nonreguler', 'SiswaController@smp2nonreguler');
                      Route::get('/siswa/smp2/regulerlk', 'SiswaController@smp2regulerlk');
                      Route::get('/siswa/smp2/regulerpr', 'SiswaController@smp2regulerpr');
                      Route::get('/siswa/smp2/nonregulerlk', 'SiswaController@smp2nonregulerlk');
                      Route::get('/siswa/smp2/nonregulerpr', 'SiswaController@smp2nonregulerpr');
			Route::get('/siswa/mts', 'SiswaController@mts');
                      Route::get('/siswa/mts/lakilaki', 'SiswaController@mtslakilaki');
                      Route::get('/siswa/mts/perempuan', 'SiswaController@mtsperempuan');
                      Route::get('/siswa/mts/reguler', 'SiswaController@mtsreguler');
                      Route::get('/siswa/mts/nonreguler', 'SiswaController@mtsnonreguler');
                      Route::get('/siswa/mts/regulerlk', 'SiswaController@mtsregulerlk');
                      Route::get('/siswa/mts/regulerpr', 'SiswaController@mtsregulerpr');
                      Route::get('/siswa/mts/nonregulerlk', 'SiswaController@mtsnonregulerlk');
                      Route::get('/siswa/mts/nonregulerpr', 'SiswaController@mtsnonregulerpr');
			Route::get('/siswa/smktkj', 'SiswaController@smktkj');
                      Route::get('/siswa/smktkj/lakilaki', 'SiswaController@smktkjlakilaki');
                      Route::get('/siswa/smktkj/perempuan', 'SiswaController@smktkjperempuan');
                      Route::get('/siswa/smktkj/reguler', 'SiswaController@smktkjreguler');
                      Route::get('/siswa/smktkj/nonreguler', 'SiswaController@smktkjnonreguler');
                      Route::get('/siswa/smktkj/regulerlk', 'SiswaController@smktkjregulerlk');
                      Route::get('/siswa/smktkj/regulerpr', 'SiswaController@smktkjregulerpr');
                      Route::get('/siswa/smktkj/nonregulerlk', 'SiswaController@smktkjnonregulerlk');
                      Route::get('/siswa/smktkj/nonregulerpr', 'SiswaController@smktkjnonregulerpr');
			Route::get('/siswa/smktkr', 'SiswaController@smktkr');
                      Route::get('/siswa/smktkr/lakilaki', 'SiswaController@smktkrlakilaki');
                      Route::get('/siswa/smktkr/perempuan', 'SiswaController@smktkrperempuan');
                      Route::get('/siswa/smktkr/reguler', 'SiswaController@smktkrreguler');
                      Route::get('/siswa/smktkr/nonreguler', 'SiswaController@smktkrnonreguler');
                      Route::get('/siswa/smktkr/regulerlk', 'SiswaController@smktkrregulerlk');
                      Route::get('/siswa/smktkr/regulerpr', 'SiswaController@smktkrregulerpr');
                      Route::get('/siswa/smktkr/nonregulerlk', 'SiswaController@smktkrnonregulerlk');
                      Route::get('/siswa/smktkr/nonregulerpr', 'SiswaController@smktkrnonregulerpr');
			Route::get('/siswa/ma', 'SiswaController@ma');
                      Route::get('/siswa/ma/lakilaki', 'SiswaController@malakilaki');
                      Route::get('/siswa/ma/perempuan', 'SiswaController@maperempuan');
                      Route::get('/siswa/ma/reguler', 'SiswaController@mareguler');
                      Route::get('/siswa/ma/nonreguler', 'SiswaController@manonreguler');
                      Route::get('/siswa/ma/regulerlk', 'SiswaController@maregulerlk');
                      Route::get('/siswa/ma/regulerpr', 'SiswaController@maregulerpr');
                      Route::get('/siswa/ma/nonregulerlk', 'SiswaController@manonregulerlk');
                      Route::get('/siswa/ma/nonregulerpr', 'SiswaController@manonregulerpr');
			Route::get('/siswa/mahadaly', 'SiswaController@mahadaly');
                      Route::get('/siswa/mahadaly/lakilaki', 'SiswaController@mahadalylakilaki');
                      Route::get('/siswa/mahadaly/perempuan', 'SiswaController@mahadalyperempuan');
                      Route::get('/siswa/mahadaly/reguler', 'SiswaController@mahadalyreguler');
                      Route::get('/siswa/mahadaly/nonreguler', 'SiswaController@mahadalynonreguler');
                      Route::get('/siswa/mahadaly/regulerlk', 'SiswaController@mahadalyregulerlk');
                      Route::get('/siswa/mahadaly/regulerpr', 'SiswaController@mahadalyregulerpr');
                      Route::get('/siswa/mahadaly/nonregulerlk', 'SiswaController@mahadalynonregulerlk');
                      Route::get('/siswa/mahadaly/nonregulerpr', 'SiswaController@mahadalynonregulerpr');


});


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::group(['middleware' => ['auth','checkRole:siswa']],function(){
	Route::get('profilsayasiswa', 'SiswaController@profilsayasiswa');
});
Route::group(['middleware' => ['auth','checkRole:salaf']],function(){
	Route::get('profilsayasalaf', 'SalafController@profilsayasalaf');
});
///////////////////////////
Route::group(['middleware' => ['auth','checkRole:smp1']],function(){
	Route::get('profilsayasmp1', 'Smp1Controller@profilsayasmp1');
});
Route::group(['middleware' => ['auth','checkRole:smp17']],function(){
	Route::get('profilsayasmp17', 'Smp17Controller@profilsayasmp17');
});
Route::group(['middleware' => ['auth','checkRole:smp18']],function(){
	Route::get('profilsayasmp18', 'Smp18Controller@profilsayasmp18');
});
Route::group(['middleware' => ['auth','checkRole:smp19']],function(){
	Route::get('profilsayasmp19', 'Smp19Controller@profilsayasmp19');
});
///////////////////////////
Route::group(['middleware' => ['auth','checkRole:smp2']],function(){
	Route::get('profilsayasmp2', 'Smp2Controller@profilsayasmp2');
});
Route::group(['middleware' => ['auth','checkRole:smp27']],function(){
	Route::get('profilsayasmp27', 'Smp27Controller@profilsayasmp27');
});
Route::group(['middleware' => ['auth','checkRole:smp28']],function(){
	Route::get('profilsayasmp28', 'Smp28Controller@profilsayasmp28');
});
Route::group(['middleware' => ['auth','checkRole:smp29']],function(){
	Route::get('profilsayasmp29', 'Smp29Controller@profilsayasmp29');
});
///////////////////////////
Route::group(['middleware' => ['auth','checkRole:mts']],function(){
	Route::get('profilsayamts', 'MtsController@profilsayamts');
});
Route::group(['middleware' => ['auth','checkRole:mts7']],function(){
	Route::get('profilsayamts7', 'Mts7Controller@profilsayamts7');
});
Route::group(['middleware' => ['auth','checkRole:mts8']],function(){
	Route::get('profilsayamts8', 'Mts8Controller@profilsayamts8');
});
Route::group(['middleware' => ['auth','checkRole:mts9']],function(){
	Route::get('profilsayamts9', 'Mts9Controller@profilsayamts9');
});
///////////////////////////
Route::group(['middleware' => ['auth','checkRole:smktkj']],function(){
	Route::get('profilsayasmktkj', 'SmktkjController@profilsayasmktkj');
});
Route::group(['middleware' => ['auth','checkRole:smktkj10']],function(){
	Route::get('profilsayasmktkj10', 'Smktkj10Controller@profilsayasmktkj10');
});
Route::group(['middleware' => ['auth','checkRole:smktkj11']],function(){
	Route::get('profilsayasmktkj11', 'Smktkj11Controller@profilsayasmktkj11');
});
Route::group(['middleware' => ['auth','checkRole:smktkj12']],function(){
	Route::get('profilsayasmktkj12', 'Smktkj12Controller@profilsayasmktkj12');
});
///////////////////////////
Route::group(['middleware' => ['auth','checkRole:smktkr']],function(){
	Route::get('profilsayasmktkr', 'SmktkrController@profilsayasmktkr');
});
Route::group(['middleware' => ['auth','checkRole:smktkr10']],function(){
	Route::get('profilsayasmktkr10', 'Smktkr10Controller@profilsayasmktkr10');
});
Route::group(['middleware' => ['auth','checkRole:smktkr11']],function(){
	Route::get('profilsayasmktkr11', 'Smktkr11Controller@profilsayasmktkr11');
});
Route::group(['middleware' => ['auth','checkRole:smktkr12']],function(){
	Route::get('profilsayasmktkr12', 'Smktkr12Controller@profilsayasmktkr12');
});
//////////////////////////
Route::group(['middleware' => ['auth','checkRole:ma']],function(){
	Route::get('profilsayama', 'MaController@profilsayama');
});
Route::group(['middleware' => ['auth','checkRole:ma10']],function(){
	Route::get('profilsayama10', 'Ma10Controller@profilsayama10');
});
Route::group(['middleware' => ['auth','checkRole:ma11']],function(){
	Route::get('profilsayama11', 'Ma11Controller@profilsayama11');
});
Route::group(['middleware' => ['auth','checkRole:ma12']],function(){
	Route::get('profilsayama12', 'Ma12Controller@profilsayama12');
});
///////////////////////////
Route::group(['middleware' => ['auth','checkRole:mahadaly']],function(){
	Route::get('profilsayamahadaly', 'MahadalyController@profilsayamahadaly');
});
Route::group(['middleware' => ['auth','checkRole:mahadaly1']],function(){
	Route::get('profilsayamahadaly1', 'Mahadaly1Controller@profilsayamahadaly1');
});
Route::group(['middleware' => ['auth','checkRole:mahadaly2']],function(){
	Route::get('profilsayamahadaly2', 'Mahadaly2Controller@profilsayamahadaly2');
});
Route::group(['middleware' => ['auth','checkRole:mahadaly3']],function(){
	Route::get('profilsayamahadaly3', 'Mahadaly3Controller@profilsayamahadaly3');
});
Route::group(['middleware' => ['auth','checkRole:mahadaly4']],function(){
	Route::get('profilsayamahadaly4', 'Mahadaly4Controller@profilsayamahadaly4');
});
///////////////////////////


///////////////////////////////////////////////////////////////////////////////

/////////  ISI BLOG POST --> SLUG /////////
Route::get('/{slug}',[
	'uses' => 'SiteController@singlepost',
	'as' => 'site.single.post'
]);