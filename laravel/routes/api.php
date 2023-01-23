<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/////////                 EDIT CEPAT               ///////////////////////////

/////////////////////////// SMP 1 //////////////////////////////
Route::post('/smp1/{id}/editnilai','ApiController@editnilaismp1');

Route::post('/smp1/{id}/editjenis','ApiController@editjenissmp1');
Route::post('/smp1/{id}/editsanksi','ApiController@editsanksismp1');
Route::post('/smp1/{id}/editskor','ApiController@editskorsmp1');
Route::post('/smp1/{id}/editdata','ApiController@editdatasmp1');

Route::post('/smp1/{id}/editrumah','ApiController@editrumahsmp1');
Route::post('/smp1/{id}/editjangka','ApiController@editjangkasmp1');
Route::post('/smp1/{id}/editpondok','ApiController@editpondoksmp1');
Route::post('/smp1/{id}/editdatang','ApiController@editdatangsmp1');
Route::post('/smp1/{id}/edithukum','ApiController@edithukumsmp1');
Route::post('/smp1/{id}/editket','ApiController@editketsmp1');

Route::post('/smp1/{id}/editpelunasan','ApiController@editpelunasansmp1');
Route::post('/smp1/{id}/editpengambilan','ApiController@editpengambilansmp1');
Route::post('/smp1/{id}/editketerangan','ApiController@editketerangansmp1');

Route::post('/smp1/{id}/edittingkat','ApiController@edittingkatsmp1');
Route::post('/smp1/{id}/editkategori','ApiController@editkategorismp1');
Route::post('/smp1/{id}/edithadiah','ApiController@edithadiahsmp1');
Route::post('/smp1/{id}/editwaktu','ApiController@editwaktusmp1');
Route::post('/smp1/{id}/editnote','ApiController@editnotesmp1');

Route::post('/smp1/{id}/editsifat','ApiController@editsifatsmp1');
Route::post('/smp1/{id}/editnulis','ApiController@editnulissmp1');

/////////////////////////// SMP 1 7 //////////////////////////////
Route::post('/smp17/{id}/editnilai','ApiController@editnilaismp17');

Route::post('/smp17/{id}/editjenis','ApiController@editjenissmp17');
Route::post('/smp17/{id}/editsanksi','ApiController@editsanksismp17');
Route::post('/smp17/{id}/editskor','ApiController@editskorsmp17');
Route::post('/smp17/{id}/editdata','ApiController@editdatasmp17');

Route::post('/smp17/{id}/editrumah','ApiController@editrumahsmp17');
Route::post('/smp17/{id}/editjangka','ApiController@editjangkasmp17');
Route::post('/smp17/{id}/editpondok','ApiController@editpondoksmp17');
Route::post('/smp17/{id}/editdatang','ApiController@editdatangsmp17');
Route::post('/smp17/{id}/edithukum','ApiController@edithukumsmp17');
Route::post('/smp17/{id}/editket','ApiController@editketsmp17');

Route::post('/smp17/{id}/editpelunasan','ApiController@editpelunasansmp17');
Route::post('/smp17/{id}/editpengambilan','ApiController@editpengambilansmp17');
Route::post('/smp17/{id}/editketerangan','ApiController@editketerangansmp17');

Route::post('/smp17/{id}/edittingkat','ApiController@edittingkatsmp17');
Route::post('/smp17/{id}/editkategori','ApiController@editkategorismp17');
Route::post('/smp17/{id}/edithadiah','ApiController@edithadiahsmp17');
Route::post('/smp17/{id}/editwaktu','ApiController@editwaktusmp17');
Route::post('/smp17/{id}/editnote','ApiController@editnotesmp17');

Route::post('/smp17/{id}/editsifat','ApiController@editsifatsmp17');
Route::post('/smp17/{id}/editnulis','ApiController@editnulissmp17');

/////////////////////////// SMP 1 8 //////////////////////////////
Route::post('/smp18/{id}/editnilai','ApiController@editnilaismp18');

Route::post('/smp18/{id}/editjenis','ApiController@editjenissmp18');
Route::post('/smp18/{id}/editsanksi','ApiController@editsanksismp18');
Route::post('/smp18/{id}/editskor','ApiController@editskorsmp18');
Route::post('/smp18/{id}/editdata','ApiController@editdatasmp18');

Route::post('/smp18/{id}/editrumah','ApiController@editrumahsmp18');
Route::post('/smp18/{id}/editjangka','ApiController@editjangkasmp18');
Route::post('/smp18/{id}/editpondok','ApiController@editpondoksmp18');
Route::post('/smp18/{id}/editdatang','ApiController@editdatangsmp18');
Route::post('/smp18/{id}/edithukum','ApiController@edithukumsmp18');
Route::post('/smp18/{id}/editket','ApiController@editketsmp18');

Route::post('/smp18/{id}/editpelunasan','ApiController@editpelunasansmp18');
Route::post('/smp18/{id}/editpengambilan','ApiController@editpengambilansmp18');
Route::post('/smp18/{id}/editketerangan','ApiController@editketerangansmp18');

Route::post('/smp18/{id}/edittingkat','ApiController@edittingkatsmp18');
Route::post('/smp18/{id}/editkategori','ApiController@editkategorismp18');
Route::post('/smp18/{id}/edithadiah','ApiController@edithadiahsmp18');
Route::post('/smp18/{id}/editwaktu','ApiController@editwaktusmp18');
Route::post('/smp18/{id}/editnote','ApiController@editnotesmp18');

Route::post('/smp18/{id}/editsifat','ApiController@editsifatsmp18');
Route::post('/smp18/{id}/editnulis','ApiController@editnulissmp18');

/////////////////////////// SMP 1 9 //////////////////////////////
Route::post('/smp19/{id}/editnilai','ApiController@editnilaismp19');

Route::post('/smp19/{id}/editjenis','ApiController@editjenissmp19');
Route::post('/smp19/{id}/editsanksi','ApiController@editsanksismp19');
Route::post('/smp19/{id}/editskor','ApiController@editskorsmp19');
Route::post('/smp19/{id}/editdata','ApiController@editdatasmp19');

Route::post('/smp19/{id}/editrumah','ApiController@editrumahsmp19');
Route::post('/smp19/{id}/editjangka','ApiController@editjangkasmp19');
Route::post('/smp19/{id}/editpondok','ApiController@editpondoksmp19');
Route::post('/smp19/{id}/editdatang','ApiController@editdatangsmp19');
Route::post('/smp19/{id}/edithukum','ApiController@edithukumsmp19');
Route::post('/smp19/{id}/editket','ApiController@editketsmp19');

Route::post('/smp19/{id}/editpelunasan','ApiController@editpelunasansmp19');
Route::post('/smp19/{id}/editpengambilan','ApiController@editpengambilansmp19');
Route::post('/smp19/{id}/editketerangan','ApiController@editketerangansmp19');

Route::post('/smp19/{id}/edittingkat','ApiController@edittingkatsmp19');
Route::post('/smp19/{id}/editkategori','ApiController@editkategorismp19');
Route::post('/smp19/{id}/edithadiah','ApiController@edithadiahsmp19');
Route::post('/smp19/{id}/editwaktu','ApiController@editwaktusmp19');
Route::post('/smp19/{id}/editnote','ApiController@editnotesmp19');

Route::post('/smp19/{id}/editsifat','ApiController@editsifatsmp19');
Route::post('/smp19/{id}/editnulis','ApiController@editnulissmp19');

/////////////////////////// SMP 2 //////////////////////////////
Route::post('/smp2/{id}/editnilai','ApiController@editnilaismp2');

Route::post('/smp2/{id}/editjenis','ApiController@editjenissmp2');
Route::post('/smp2/{id}/editsanksi','ApiController@editsanksismp2');
Route::post('/smp2/{id}/editskor','ApiController@editskorsmp2');
Route::post('/smp2/{id}/editdata','ApiController@editdatasmp2');

Route::post('/smp2/{id}/editrumah','ApiController@editrumahsmp2');
Route::post('/smp2/{id}/editjangka','ApiController@editjangkasmp2');
Route::post('/smp2/{id}/editpondok','ApiController@editpondoksmp2');
Route::post('/smp2/{id}/editdatang','ApiController@editdatangsmp2');
Route::post('/smp2/{id}/edithukum','ApiController@edithukumsmp2');
Route::post('/smp2/{id}/editket','ApiController@editketsmp2');

Route::post('/smp2/{id}/editpelunasan','ApiController@editpelunasansmp2');
Route::post('/smp2/{id}/editpengambilan','ApiController@editpengambilansmp2');
Route::post('/smp2/{id}/editketerangan','ApiController@editketerangansmp2');

Route::post('/smp2/{id}/edittingkat','ApiController@edittingkatsmp2');
Route::post('/smp2/{id}/editkategori','ApiController@editkategorismp2');
Route::post('/smp2/{id}/edithadiah','ApiController@edithadiahsmp2');
Route::post('/smp2/{id}/editwaktu','ApiController@editwaktusmp2');
Route::post('/smp2/{id}/editnote','ApiController@editnotesmp2');

Route::post('/smp2/{id}/editsifat','ApiController@editsifatsmp2');
Route::post('/smp2/{id}/editnulis','ApiController@editnulissmp2');

/////////////////////////// SMP 2 7 //////////////////////////////
Route::post('/smp27/{id}/editnilai','ApiController@editnilaismp27');

Route::post('/smp27/{id}/editjenis','ApiController@editjenissmp27');
Route::post('/smp27/{id}/editsanksi','ApiController@editsanksismp27');
Route::post('/smp27/{id}/editskor','ApiController@editskorsmp27');
Route::post('/smp27/{id}/editdata','ApiController@editdatasmp27');

Route::post('/smp27/{id}/editrumah','ApiController@editrumahsmp27');
Route::post('/smp27/{id}/editjangka','ApiController@editjangkasmp27');
Route::post('/smp27/{id}/editpondok','ApiController@editpondoksmp27');
Route::post('/smp27/{id}/editdatang','ApiController@editdatangsmp27');
Route::post('/smp27/{id}/edithukum','ApiController@edithukumsmp27');
Route::post('/smp27/{id}/editket','ApiController@editketsmp27');

Route::post('/smp27/{id}/editpelunasan','ApiController@editpelunasansmp27');
Route::post('/smp27/{id}/editpengambilan','ApiController@editpengambilansmp27');
Route::post('/smp27/{id}/editketerangan','ApiController@editketerangansmp27');

Route::post('/smp27/{id}/edittingkat','ApiController@edittingkatsmp27');
Route::post('/smp27/{id}/editkategori','ApiController@editkategorismp27');
Route::post('/smp27/{id}/edithadiah','ApiController@edithadiahsmp27');
Route::post('/smp27/{id}/editwaktu','ApiController@editwaktusmp27');
Route::post('/smp27/{id}/editnote','ApiController@editnotesmp27');

Route::post('/smp27/{id}/editsifat','ApiController@editsifatsmp27');
Route::post('/smp27/{id}/editnulis','ApiController@editnulissmp27');

/////////////////////////// SMP 2 8 //////////////////////////////
Route::post('/smp28/{id}/editnilai','ApiController@editnilaismp28');

Route::post('/smp28/{id}/editjenis','ApiController@editjenissmp28');
Route::post('/smp28/{id}/editsanksi','ApiController@editsanksismp28');
Route::post('/smp28/{id}/editskor','ApiController@editskorsmp28');
Route::post('/smp28/{id}/editdata','ApiController@editdatasmp28');

Route::post('/smp28/{id}/editrumah','ApiController@editrumahsmp28');
Route::post('/smp28/{id}/editjangka','ApiController@editjangkasmp28');
Route::post('/smp28/{id}/editpondok','ApiController@editpondoksmp28');
Route::post('/smp28/{id}/editdatang','ApiController@editdatangsmp28');
Route::post('/smp28/{id}/edithukum','ApiController@edithukumsmp28');
Route::post('/smp28/{id}/editket','ApiController@editketsmp28');

Route::post('/smp28/{id}/editpelunasan','ApiController@editpelunasansmp28');
Route::post('/smp28/{id}/editpengambilan','ApiController@editpengambilansmp28');
Route::post('/smp28/{id}/editketerangan','ApiController@editketerangansmp28');

Route::post('/smp28/{id}/edittingkat','ApiController@edittingkatsmp28');
Route::post('/smp28/{id}/editkategori','ApiController@editkategorismp28');
Route::post('/smp28/{id}/edithadiah','ApiController@edithadiahsmp28');
Route::post('/smp28/{id}/editwaktu','ApiController@editwaktusmp28');
Route::post('/smp28/{id}/editnote','ApiController@editnotesmp28');

Route::post('/smp28/{id}/editsifat','ApiController@editsifatsmp28');
Route::post('/smp28/{id}/editnulis','ApiController@editnulissmp28');

/////////////////////////// SMP 2 9 //////////////////////////////
Route::post('/smp29/{id}/editnilai','ApiController@editnilaismp29');

Route::post('/smp29/{id}/editjenis','ApiController@editjenissmp29');
Route::post('/smp29/{id}/editsanksi','ApiController@editsanksismp29');
Route::post('/smp29/{id}/editskor','ApiController@editskorsmp29');
Route::post('/smp29/{id}/editdata','ApiController@editdatasmp29');

Route::post('/smp29/{id}/editrumah','ApiController@editrumahsmp29');
Route::post('/smp29/{id}/editjangka','ApiController@editjangkasmp29');
Route::post('/smp29/{id}/editpondok','ApiController@editpondoksmp29');
Route::post('/smp29/{id}/editdatang','ApiController@editdatangsmp29');
Route::post('/smp29/{id}/edithukum','ApiController@edithukumsmp29');
Route::post('/smp29/{id}/editket','ApiController@editketsmp29');

Route::post('/smp29/{id}/editpelunasan','ApiController@editpelunasansmp29');
Route::post('/smp29/{id}/editpengambilan','ApiController@editpengambilansmp29');
Route::post('/smp29/{id}/editketerangan','ApiController@editketerangansmp29');

Route::post('/smp29/{id}/edittingkat','ApiController@edittingkatsmp29');
Route::post('/smp29/{id}/editkategori','ApiController@editkategorismp29');
Route::post('/smp29/{id}/edithadiah','ApiController@edithadiahsmp29');
Route::post('/smp29/{id}/editwaktu','ApiController@editwaktusmp29');
Route::post('/smp29/{id}/editnote','ApiController@editnotesmp29');

Route::post('/smp29/{id}/editsifat','ApiController@editsifatsmp29');
Route::post('/smp29/{id}/editnulis','ApiController@editnulissmp29');


/////////////////////////// MTs //////////////////////////////
Route::post('/mts/{id}/editnilai','ApiController@editnilaimts');

Route::post('/mts/{id}/editjenis','ApiController@editjenismts');
Route::post('/mts/{id}/editsanksi','ApiController@editsanksimts');
Route::post('/mts/{id}/editskor','ApiController@editskormts');
Route::post('/mts/{id}/editdata','ApiController@editdatamts');

Route::post('/mts/{id}/editrumah','ApiController@editrumahmts');
Route::post('/mts/{id}/editjangka','ApiController@editjangkamts');
Route::post('/mts/{id}/editpondok','ApiController@editpondokmts');
Route::post('/mts/{id}/editdatang','ApiController@editdatangmts');
Route::post('/mts/{id}/edithukum','ApiController@edithukummts');
Route::post('/mts/{id}/editket','ApiController@editketmts');

Route::post('/mts/{id}/editpelunasan','ApiController@editpelunasanmts');
Route::post('/mts/{id}/editpengambilan','ApiController@editpengambilanmts');
Route::post('/mts/{id}/editketerangan','ApiController@editketeranganmts');

Route::post('/mts/{id}/edittingkat','ApiController@edittingkatmts');
Route::post('/mts/{id}/editkategori','ApiController@editkategorimts');
Route::post('/mts/{id}/edithadiah','ApiController@edithadiahmts');
Route::post('/mts/{id}/editwaktu','ApiController@editwaktumts');
Route::post('/mts/{id}/editnote','ApiController@editnotemts');

Route::post('/mts/{id}/editsifat','ApiController@editsifatmts');
Route::post('/mts/{id}/editnulis','ApiController@editnulismts');

/////////////////////////// MTs 7 //////////////////////////////
Route::post('/mts7/{id}/editnilai','ApiController@editnilaimts7');

Route::post('/mts7/{id}/editjenis','ApiController@editjenismts7');
Route::post('/mts7/{id}/editsanksi','ApiController@editsanksimts7');
Route::post('/mts7/{id}/editskor','ApiController@editskormts7');
Route::post('/mts7/{id}/editdata','ApiController@editdatamts7');

Route::post('/mts7/{id}/editrumah','ApiController@editrumahmts7');
Route::post('/mts7/{id}/editjangka','ApiController@editjangkamts7');
Route::post('/mts7/{id}/editpondok','ApiController@editpondokmts7');
Route::post('/mts7/{id}/editdatang','ApiController@editdatangmts7');
Route::post('/mts7/{id}/edithukum','ApiController@edithukummts7');
Route::post('/mts7/{id}/editket','ApiController@editketmts7');

Route::post('/mts7/{id}/editpelunasan','ApiController@editpelunasanmts7');
Route::post('/mts7/{id}/editpengambilan','ApiController@editpengambilanmts7');
Route::post('/mts7/{id}/editketerangan','ApiController@editketeranganmts7');

Route::post('/mts7/{id}/edittingkat','ApiController@edittingkatmts7');
Route::post('/mts7/{id}/editkategori','ApiController@editkategorimts7');
Route::post('/mts7/{id}/edithadiah','ApiController@edithadiahmts7');
Route::post('/mts7/{id}/editwaktu','ApiController@editwaktumts7');
Route::post('/mts7/{id}/editnote','ApiController@editnotemts7');

Route::post('/mts7/{id}/editsifat','ApiController@editsifatmts7');
Route::post('/mts7/{id}/editnulis','ApiController@editnulismts7');

/////////////////////////// MTs 8 //////////////////////////////
Route::post('/mts8/{id}/editnilai','ApiController@editnilaimts8');

Route::post('/mts8/{id}/editjenis','ApiController@editjenismts8');
Route::post('/mts8/{id}/editsanksi','ApiController@editsanksimts8');
Route::post('/mts8/{id}/editskor','ApiController@editskormts8');
Route::post('/mts8/{id}/editdata','ApiController@editdatamts8');

Route::post('/mts8/{id}/editrumah','ApiController@editrumahmts8');
Route::post('/mts8/{id}/editjangka','ApiController@editjangkamts8');
Route::post('/mts8/{id}/editpondok','ApiController@editpondokmts8');
Route::post('/mts8/{id}/editdatang','ApiController@editdatangmts8');
Route::post('/mts8/{id}/edithukum','ApiController@edithukummts8');
Route::post('/mts8/{id}/editket','ApiController@editketmts8');

Route::post('/mts8/{id}/editpelunasan','ApiController@editpelunasanmts8');
Route::post('/mts8/{id}/editpengambilan','ApiController@editpengambilanmts8');
Route::post('/mts8/{id}/editketerangan','ApiController@editketeranganmts8');

Route::post('/mts8/{id}/edittingkat','ApiController@edittingkatmts8');
Route::post('/mts8/{id}/editkategori','ApiController@editkategorimts8');
Route::post('/mts8/{id}/edithadiah','ApiController@edithadiahmts8');
Route::post('/mts8/{id}/editwaktu','ApiController@editwaktumts8');
Route::post('/mts8/{id}/editnote','ApiController@editnotemts8');

Route::post('/mts8/{id}/editsifat','ApiController@editsifatmts8');
Route::post('/mts8/{id}/editnulis','ApiController@editnulismts8');

/////////////////////////// MTs 9 //////////////////////////////
Route::post('/mts9/{id}/editnilai','ApiController@editnilaimts9');

Route::post('/mts9/{id}/editjenis','ApiController@editjenismts9');
Route::post('/mts9/{id}/editsanksi','ApiController@editsanksimts9');
Route::post('/mts9/{id}/editskor','ApiController@editskormts9');
Route::post('/mts9/{id}/editdata','ApiController@editdatamts9');

Route::post('/mts9/{id}/editrumah','ApiController@editrumahmts9');
Route::post('/mts9/{id}/editjangka','ApiController@editjangkamts9');
Route::post('/mts9/{id}/editpondok','ApiController@editpondokmts9');
Route::post('/mts9/{id}/editdatang','ApiController@editdatangmts9');
Route::post('/mts9/{id}/edithukum','ApiController@edithukummts9');
Route::post('/mts9/{id}/editket','ApiController@editketmts9');

Route::post('/mts9/{id}/editpelunasan','ApiController@editpelunasanmts9');
Route::post('/mts9/{id}/editpengambilan','ApiController@editpengambilanmts9');
Route::post('/mts9/{id}/editketerangan','ApiController@editketeranganmts9');

Route::post('/mts9/{id}/edittingkat','ApiController@edittingkatmts9');
Route::post('/mts9/{id}/editkategori','ApiController@editkategorimts9');
Route::post('/mts9/{id}/edithadiah','ApiController@edithadiahmts9');
Route::post('/mts9/{id}/editwaktu','ApiController@editwaktumts9');
Route::post('/mts9/{id}/editnote','ApiController@editnotemts9');

Route::post('/mts9/{id}/editsifat','ApiController@editsifatmts9');
Route::post('/mts9/{id}/editnulis','ApiController@editnulismts9');


/////////////////////////// SMK TKJ //////////////////////////////
Route::post('/smktkj/{id}/editnilai','ApiController@editnilaismktkj');

Route::post('/smktkj/{id}/editjenis','ApiController@editjenissmktkj');
Route::post('/smktkj/{id}/editsanksi','ApiController@editsanksismktkj');
Route::post('/smktkj/{id}/editskor','ApiController@editskorsmktkj');
Route::post('/smktkj/{id}/editdata','ApiController@editdatasmktkj');

Route::post('/smktkj/{id}/editrumah','ApiController@editrumahsmktkj');
Route::post('/smktkj/{id}/editjangka','ApiController@editjangkasmktkj');
Route::post('/smktkj/{id}/editpondok','ApiController@editpondoksmktkj');
Route::post('/smktkj/{id}/editdatang','ApiController@editdatangsmktkj');
Route::post('/smktkj/{id}/edithukum','ApiController@edithukumsmktkj');
Route::post('/smktkj/{id}/editket','ApiController@editketsmktkj');

Route::post('/smktkj/{id}/editpelunasan','ApiController@editpelunasansmktkj');
Route::post('/smktkj/{id}/editpengambilan','ApiController@editpengambilansmktkj');
Route::post('/smktkj/{id}/editketerangan','ApiController@editketerangansmktkj');

Route::post('/smktkj/{id}/edittingkat','ApiController@edittingkatsmktkj');
Route::post('/smktkj/{id}/editkategori','ApiController@editkategorismktkj');
Route::post('/smktkj/{id}/edithadiah','ApiController@edithadiahsmktkj');
Route::post('/smktkj/{id}/editwaktu','ApiController@editwaktusmktkj');
Route::post('/smktkj/{id}/editnote','ApiController@editnotesmktkj');

Route::post('/smktkj/{id}/editsifat','ApiController@editsifatsmktkj');
Route::post('/smktkj/{id}/editnulis','ApiController@editnulissmktkj');

/////////////////////////// SMK TKJ 10 //////////////////////////////
Route::post('/smktkj10/{id}/editnilai','ApiController@editnilaismktkj10');

Route::post('/smktkj10/{id}/editjenis','ApiController@editjenissmktkj10');
Route::post('/smktkj10/{id}/editsanksi','ApiController@editsanksismktkj10');
Route::post('/smktkj10/{id}/editskor','ApiController@editskorsmktkj10');
Route::post('/smktkj10/{id}/editdata','ApiController@editdatasmktkj10');

Route::post('/smktkj10/{id}/editrumah','ApiController@editrumahsmktkj10');
Route::post('/smktkj10/{id}/editjangka','ApiController@editjangkasmktkj10');
Route::post('/smktkj10/{id}/editpondok','ApiController@editpondoksmktkj10');
Route::post('/smktkj10/{id}/editdatang','ApiController@editdatangsmktkj10');
Route::post('/smktkj10/{id}/edithukum','ApiController@edithukumsmktkj10');
Route::post('/smktkj10/{id}/editket','ApiController@editketsmktkj10');

Route::post('/smktkj10/{id}/editpelunasan','ApiController@editpelunasansmktkj10');
Route::post('/smktkj10/{id}/editpengambilan','ApiController@editpengambilansmktkj10');
Route::post('/smktkj10/{id}/editketerangan','ApiController@editketerangansmktkj10');

Route::post('/smktkj10/{id}/edittingkat','ApiController@edittingkatsmktkj10');
Route::post('/smktkj10/{id}/editkategori','ApiController@editkategorismktkj10');
Route::post('/smktkj10/{id}/edithadiah','ApiController@edithadiahsmktkj10');
Route::post('/smktkj10/{id}/editwaktu','ApiController@editwaktusmktkj10');
Route::post('/smktkj10/{id}/editnote','ApiController@editnotesmktkj10');

Route::post('/smktkj10/{id}/editsifat','ApiController@editsifatsmktkj10');
Route::post('/smktkj10/{id}/editnulis','ApiController@editnulissmktkj10');

/////////////////////////// SMK TKJ 11 //////////////////////////////
Route::post('/smktkj11/{id}/editnilai','ApiController@editnilaismktkj11');

Route::post('/smktkj11/{id}/editjenis','ApiController@editjenissmktkj11');
Route::post('/smktkj11/{id}/editsanksi','ApiController@editsanksismktkj11');
Route::post('/smktkj11/{id}/editskor','ApiController@editskorsmktkj11');
Route::post('/smktkj11/{id}/editdata','ApiController@editdatasmktkj11');

Route::post('/smktkj11/{id}/editrumah','ApiController@editrumahsmktkj11');
Route::post('/smktkj11/{id}/editjangka','ApiController@editjangkasmktkj11');
Route::post('/smktkj11/{id}/editpondok','ApiController@editpondoksmktkj11');
Route::post('/smktkj11/{id}/editdatang','ApiController@editdatangsmktkj11');
Route::post('/smktkj11/{id}/edithukum','ApiController@edithukumsmktkj11');
Route::post('/smktkj11/{id}/editket','ApiController@editketsmktkj11');

Route::post('/smktkj11/{id}/editpelunasan','ApiController@editpelunasansmktkj11');
Route::post('/smktkj11/{id}/editpengambilan','ApiController@editpengambilansmktkj11');
Route::post('/smktkj11/{id}/editketerangan','ApiController@editketerangansmktkj11');

Route::post('/smktkj11/{id}/edittingkat','ApiController@edittingkatsmktkj11');
Route::post('/smktkj11/{id}/editkategori','ApiController@editkategorismktkj11');
Route::post('/smktkj11/{id}/edithadiah','ApiController@edithadiahsmktkj11');
Route::post('/smktkj11/{id}/editwaktu','ApiController@editwaktusmktkj11');
Route::post('/smktkj11/{id}/editnote','ApiController@editnotesmktkj11');

Route::post('/smktkj11/{id}/editsifat','ApiController@editsifatsmktkj11');
Route::post('/smktkj11/{id}/editnulis','ApiController@editnulissmktkj11');

/////////////////////////// SMK TKJ 12 //////////////////////////////
Route::post('/smktkj12/{id}/editnilai','ApiController@editnilaismktkj12');

Route::post('/smktkj12/{id}/editjenis','ApiController@editjenissmktkj12');
Route::post('/smktkj12/{id}/editsanksi','ApiController@editsanksismktkj12');
Route::post('/smktkj12/{id}/editskor','ApiController@editskorsmktkj12');
Route::post('/smktkj12/{id}/editdata','ApiController@editdatasmktkj12');

Route::post('/smktkj12/{id}/editrumah','ApiController@editrumahsmktkj12');
Route::post('/smktkj12/{id}/editjangka','ApiController@editjangkasmktkj12');
Route::post('/smktkj12/{id}/editpondok','ApiController@editpondoksmktkj12');
Route::post('/smktkj12/{id}/editdatang','ApiController@editdatangsmktkj12');
Route::post('/smktkj12/{id}/edithukum','ApiController@edithukumsmktkj12');
Route::post('/smktkj12/{id}/editket','ApiController@editketsmktkj12');

Route::post('/smktkj12/{id}/editpelunasan','ApiController@editpelunasansmktkj12');
Route::post('/smktkj12/{id}/editpengambilan','ApiController@editpengambilansmktkj12');
Route::post('/smktkj12/{id}/editketerangan','ApiController@editketerangansmktkj12');

Route::post('/smktkj12/{id}/edittingkat','ApiController@edittingkatsmktkj12');
Route::post('/smktkj12/{id}/editkategori','ApiController@editkategorismktkj12');
Route::post('/smktkj12/{id}/edithadiah','ApiController@edithadiahsmktkj12');
Route::post('/smktkj12/{id}/editwaktu','ApiController@editwaktusmktkj12');
Route::post('/smktkj12/{id}/editnote','ApiController@editnotesmktkj12');

Route::post('/smktkj12/{id}/editsifat','ApiController@editsifatsmktkj12');
Route::post('/smktkj12/{id}/editnulis','ApiController@editnulissmktkj12');


/////////////////////////// SMK TKR //////////////////////////////
Route::post('/smktkr/{id}/editnilai','ApiController@editnilaismktkr');

Route::post('/smktkr/{id}/editjenis','ApiController@editjenissmktkr');
Route::post('/smktkr/{id}/editsanksi','ApiController@editsanksismktkr');
Route::post('/smktkr/{id}/editskor','ApiController@editskorsmktkr');
Route::post('/smktkr/{id}/editdata','ApiController@editdatasmktkr');

Route::post('/smktkr/{id}/editrumah','ApiController@editrumahsmktkr');
Route::post('/smktkr/{id}/editjangka','ApiController@editjangkasmktkr');
Route::post('/smktkr/{id}/editpondok','ApiController@editpondoksmktkr');
Route::post('/smktkr/{id}/editdatang','ApiController@editdatangsmktkr');
Route::post('/smktkr/{id}/edithukum','ApiController@edithukumsmktkr');
Route::post('/smktkr/{id}/editket','ApiController@editketsmktkr');

Route::post('/smktkr/{id}/editpelunasan','ApiController@editpelunasansmktkr');
Route::post('/smktkr/{id}/editpengambilan','ApiController@editpengambilansmktkr');
Route::post('/smktkr/{id}/editketerangan','ApiController@editketerangansmktkr');

Route::post('/smktkr/{id}/edittingkat','ApiController@edittingkatsmktkr');
Route::post('/smktkr/{id}/editkategori','ApiController@editkategorismktkr');
Route::post('/smktkr/{id}/edithadiah','ApiController@edithadiahsmktkr');
Route::post('/smktkr/{id}/editwaktu','ApiController@editwaktusmktkr');
Route::post('/smktkr/{id}/editnote','ApiController@editnotesmktkr');

Route::post('/smktkr/{id}/editsifat','ApiController@editsifatsmktkr');
Route::post('/smktkr/{id}/editnulis','ApiController@editnulissmktkr');

/////////////////////////// SMK TKR 10 //////////////////////////////
Route::post('/smktkr10/{id}/editnilai','ApiController@editnilaismktkr10');

Route::post('/smktkr10/{id}/editjenis','ApiController@editjenissmktkr10');
Route::post('/smktkr10/{id}/editsanksi','ApiController@editsanksismktkr10');
Route::post('/smktkr10/{id}/editskor','ApiController@editskorsmktkr10');
Route::post('/smktkr10/{id}/editdata','ApiController@editdatasmktkr10');

Route::post('/smktkr10/{id}/editrumah','ApiController@editrumahsmktkr10');
Route::post('/smktkr10/{id}/editjangka','ApiController@editjangkasmktkr10');
Route::post('/smktkr10/{id}/editpondok','ApiController@editpondoksmktkr10');
Route::post('/smktkr10/{id}/editdatang','ApiController@editdatangsmktkr10');
Route::post('/smktkr10/{id}/edithukum','ApiController@edithukumsmktkr10');
Route::post('/smktkr10/{id}/editket','ApiController@editketsmktkr10');

Route::post('/smktkr10/{id}/editpelunasan','ApiController@editpelunasansmktkr10');
Route::post('/smktkr10/{id}/editpengambilan','ApiController@editpengambilansmktkr10');
Route::post('/smktkr10/{id}/editketerangan','ApiController@editketerangansmktkr10');

Route::post('/smktkr10/{id}/edittingkat','ApiController@edittingkatsmktkr10');
Route::post('/smktkr10/{id}/editkategori','ApiController@editkategorismktkr10');
Route::post('/smktkr10/{id}/edithadiah','ApiController@edithadiahsmktkr10');
Route::post('/smktkr10/{id}/editwaktu','ApiController@editwaktusmktkr10');
Route::post('/smktkr10/{id}/editnote','ApiController@editnotesmktkr10');

Route::post('/smktkr10/{id}/editsifat','ApiController@editsifatsmktkr10');
Route::post('/smktkr10/{id}/editnulis','ApiController@editnulissmktkr10');

/////////////////////////// SMK TKR 11 //////////////////////////////
Route::post('/smktkr11/{id}/editnilai','ApiController@editnilaismktkr11');

Route::post('/smktkr11/{id}/editjenis','ApiController@editjenissmktkr11');
Route::post('/smktkr11/{id}/editsanksi','ApiController@editsanksismktkr11');
Route::post('/smktkr11/{id}/editskor','ApiController@editskorsmktkr11');
Route::post('/smktkr11/{id}/editdata','ApiController@editdatasmktkr11');

Route::post('/smktkr11/{id}/editrumah','ApiController@editrumahsmktkr11');
Route::post('/smktkr11/{id}/editjangka','ApiController@editjangkasmktkr11');
Route::post('/smktkr11/{id}/editpondok','ApiController@editpondoksmktkr11');
Route::post('/smktkr11/{id}/editdatang','ApiController@editdatangsmktkr11');
Route::post('/smktkr11/{id}/edithukum','ApiController@edithukumsmktkr11');
Route::post('/smktkr11/{id}/editket','ApiController@editketsmktkr11');

Route::post('/smktkr11/{id}/editpelunasan','ApiController@editpelunasansmktkr11');
Route::post('/smktkr11/{id}/editpengambilan','ApiController@editpengambilansmktkr11');
Route::post('/smktkr11/{id}/editketerangan','ApiController@editketerangansmktkr11');

Route::post('/smktkr11/{id}/edittingkat','ApiController@edittingkatsmktkr11');
Route::post('/smktkr11/{id}/editkategori','ApiController@editkategorismktkr11');
Route::post('/smktkr11/{id}/edithadiah','ApiController@edithadiahsmktkr11');
Route::post('/smktkr11/{id}/editwaktu','ApiController@editwaktusmktkr11');
Route::post('/smktkr11/{id}/editnote','ApiController@editnotesmktkr11');

Route::post('/smktkr11/{id}/editsifat','ApiController@editsifatsmktkr11');
Route::post('/smktkr11/{id}/editnulis','ApiController@editnulissmktkr11');

/////////////////////////// SMK TKR 12 //////////////////////////////
Route::post('/smktkr12/{id}/editnilai','ApiController@editnilaismktkr12');

Route::post('/smktkr12/{id}/editjenis','ApiController@editjenissmktkr12');
Route::post('/smktkr12/{id}/editsanksi','ApiController@editsanksismktkr12');
Route::post('/smktkr12/{id}/editskor','ApiController@editskorsmktkr12');
Route::post('/smktkr12/{id}/editdata','ApiController@editdatasmktkr12');

Route::post('/smktkr12/{id}/editrumah','ApiController@editrumahsmktkr12');
Route::post('/smktkr12/{id}/editjangka','ApiController@editjangkasmktkr12');
Route::post('/smktkr12/{id}/editpondok','ApiController@editpondoksmktkr12');
Route::post('/smktkr12/{id}/editdatang','ApiController@editdatangsmktkr12');
Route::post('/smktkr12/{id}/edithukum','ApiController@edithukumsmktkr12');
Route::post('/smktkr12/{id}/editket','ApiController@editketsmktkr12');

Route::post('/smktkr12/{id}/editpelunasan','ApiController@editpelunasansmktkr12');
Route::post('/smktkr12/{id}/editpengambilan','ApiController@editpengambilansmktkr12');
Route::post('/smktkr12/{id}/editketerangan','ApiController@editketerangansmktkr12');

Route::post('/smktkr12/{id}/edittingkat','ApiController@edittingkatsmktkr12');
Route::post('/smktkr12/{id}/editkategori','ApiController@editkategorismktkr12');
Route::post('/smktkr12/{id}/edithadiah','ApiController@edithadiahsmktkr12');
Route::post('/smktkr12/{id}/editwaktu','ApiController@editwaktusmktkr12');
Route::post('/smktkr12/{id}/editnote','ApiController@editnotesmktkr12');

Route::post('/smktkr12/{id}/editsifat','ApiController@editsifatsmktkr12');
Route::post('/smktkr12/{id}/editnulis','ApiController@editnulissmktkr12');


/////////////////////////// MA //////////////////////////////
Route::post('/ma/{id}/editnilai','ApiController@editnilaima');

Route::post('/ma/{id}/editjenis','ApiController@editjenisma');
Route::post('/ma/{id}/editsanksi','ApiController@editsanksima');
Route::post('/ma/{id}/editskor','ApiController@editskorma');
Route::post('/ma/{id}/editdata','ApiController@editdatama');

Route::post('/ma/{id}/editrumah','ApiController@editrumahma');
Route::post('/ma/{id}/editjangka','ApiController@editjangkama');
Route::post('/ma/{id}/editpondok','ApiController@editpondokma');
Route::post('/ma/{id}/editdatang','ApiController@editdatangma');
Route::post('/ma/{id}/edithukum','ApiController@edithukumma');
Route::post('/ma/{id}/editket','ApiController@editketma');

Route::post('/ma/{id}/editpelunasan','ApiController@editpelunasanma');
Route::post('/ma/{id}/editpengambilan','ApiController@editpengambilanma');
Route::post('/ma/{id}/editketerangan','ApiController@editketeranganma');

Route::post('/ma/{id}/edittingkat','ApiController@edittingkatma');
Route::post('/ma/{id}/editkategori','ApiController@editkategorima');
Route::post('/ma/{id}/edithadiah','ApiController@edithadiahma');
Route::post('/ma/{id}/editwaktu','ApiController@editwaktuma');
Route::post('/ma/{id}/editnote','ApiController@editnotema');

Route::post('/ma/{id}/editsifat','ApiController@editsifatma');
Route::post('/ma/{id}/editnulis','ApiController@editnulisma');

/////////////////////////// MA 10 //////////////////////////////
Route::post('/ma10/{id}/editnilai','ApiController@editnilaima10');

Route::post('/ma10/{id}/editjenis','ApiController@editjenisma10');
Route::post('/ma10/{id}/editsanksi','ApiController@editsanksima10');
Route::post('/ma10/{id}/editskor','ApiController@editskorma10');
Route::post('/ma10/{id}/editdata','ApiController@editdatama10');

Route::post('/ma10/{id}/editrumah','ApiController@editrumahma10');
Route::post('/ma10/{id}/editjangka','ApiController@editjangkama10');
Route::post('/ma10/{id}/editpondok','ApiController@editpondokma10');
Route::post('/ma10/{id}/editdatang','ApiController@editdatangma10');
Route::post('/ma10/{id}/edithukum','ApiController@edithukumma10');
Route::post('/ma10/{id}/editket','ApiController@editketma10');

Route::post('/ma10/{id}/editpelunasan','ApiController@editpelunasanma10');
Route::post('/ma10/{id}/editpengambilan','ApiController@editpengambilanma10');
Route::post('/ma10/{id}/editketerangan','ApiController@editketeranganma10');

Route::post('/ma10/{id}/edittingkat','ApiController@edittingkatma10');
Route::post('/ma10/{id}/editkategori','ApiController@editkategorima10');
Route::post('/ma10/{id}/edithadiah','ApiController@edithadiahma10');
Route::post('/ma10/{id}/editwaktu','ApiController@editwaktuma10');
Route::post('/ma10/{id}/editnote','ApiController@editnotema10');

Route::post('/ma10/{id}/editsifat','ApiController@editsifatma10');
Route::post('/ma10/{id}/editnulis','ApiController@editnulisma10');

/////////////////////////// MA 11 //////////////////////////////
Route::post('/ma11/{id}/editnilai','ApiController@editnilaima11');

Route::post('/ma11/{id}/editjenis','ApiController@editjenisma11');
Route::post('/ma11/{id}/editsanksi','ApiController@editsanksima11');
Route::post('/ma11/{id}/editskor','ApiController@editskorma11');
Route::post('/ma11/{id}/editdata','ApiController@editdatama11');

Route::post('/ma11/{id}/editrumah','ApiController@editrumahma11');
Route::post('/ma11/{id}/editjangka','ApiController@editjangkama11');
Route::post('/ma11/{id}/editpondok','ApiController@editpondokma11');
Route::post('/ma11/{id}/editdatang','ApiController@editdatangma11');
Route::post('/ma11/{id}/edithukum','ApiController@edithukumma11');
Route::post('/ma11/{id}/editket','ApiController@editketma11');

Route::post('/ma11/{id}/editpelunasan','ApiController@editpelunasanma11');
Route::post('/ma11/{id}/editpengambilan','ApiController@editpengambilanma11');
Route::post('/ma11/{id}/editketerangan','ApiController@editketeranganma11');

Route::post('/ma11/{id}/edittingkat','ApiController@edittingkatma11');
Route::post('/ma11/{id}/editkategori','ApiController@editkategorima11');
Route::post('/ma11/{id}/edithadiah','ApiController@edithadiahma11');
Route::post('/ma11/{id}/editwaktu','ApiController@editwaktuma11');
Route::post('/ma11/{id}/editnote','ApiController@editnotema11');

Route::post('/ma11/{id}/editsifat','ApiController@editsifatma11');
Route::post('/ma11/{id}/editnulis','ApiController@editnulisma11');

/////////////////////////// MA 12 //////////////////////////////
Route::post('/ma12/{id}/editnilai','ApiController@editnilaima12');

Route::post('/ma12/{id}/editjenis','ApiController@editjenisma12');
Route::post('/ma12/{id}/editsanksi','ApiController@editsanksima12');
Route::post('/ma12/{id}/editskor','ApiController@editskorma12');
Route::post('/ma12/{id}/editdata','ApiController@editdatama12');

Route::post('/ma12/{id}/editrumah','ApiController@editrumahma12');
Route::post('/ma12/{id}/editjangka','ApiController@editjangkama12');
Route::post('/ma12/{id}/editpondok','ApiController@editpondokma12');
Route::post('/ma12/{id}/editdatang','ApiController@editdatangma12');
Route::post('/ma12/{id}/edithukum','ApiController@edithukumma12');
Route::post('/ma12/{id}/editket','ApiController@editketma12');

Route::post('/ma12/{id}/editpelunasan','ApiController@editpelunasanma12');
Route::post('/ma12/{id}/editpengambilan','ApiController@editpengambilanma12');
Route::post('/ma12/{id}/editketerangan','ApiController@editketeranganma12');

Route::post('/ma12/{id}/edittingkat','ApiController@edittingkatma12');
Route::post('/ma12/{id}/editkategori','ApiController@editkategorima12');
Route::post('/ma12/{id}/edithadiah','ApiController@edithadiahma12');
Route::post('/ma12/{id}/editwaktu','ApiController@editwaktuma12');
Route::post('/ma12/{id}/editnote','ApiController@editnotema12');

Route::post('/ma12/{id}/editsifat','ApiController@editsifatma12');
Route::post('/ma12/{id}/editnulis','ApiController@editnulisma12');

/////////////////////////// MAHAD ALY //////////////////////////////
Route::post('/mahadaly/{id}/editnilai','ApiController@editnilaimahadaly');

Route::post('/mahadaly/{id}/editjenis','ApiController@editjenismahadaly');
Route::post('/mahadaly/{id}/editsanksi','ApiController@editsanksimahadaly');
Route::post('/mahadaly/{id}/editskor','ApiController@editskormahadaly');
Route::post('/mahadaly/{id}/editdata','ApiController@editdatamahadaly');

Route::post('/mahadaly/{id}/editrumah','ApiController@editrumahmahadaly');
Route::post('/mahadaly/{id}/editjangka','ApiController@editjangkamahadaly');
Route::post('/mahadaly/{id}/editpondok','ApiController@editpondokmahadaly');
Route::post('/mahadaly/{id}/editdatang','ApiController@editdatangmahadaly');
Route::post('/mahadaly/{id}/edithukum','ApiController@edithukummahadaly');
Route::post('/mahadaly/{id}/editket','ApiController@editketmahadaly');

Route::post('/mahadaly/{id}/editpelunasan','ApiController@editpelunasanmahadaly');
Route::post('/mahadaly/{id}/editpengambilan','ApiController@editpengambilanmahadaly');
Route::post('/mahadaly/{id}/editketerangan','ApiController@editketeranganmahadaly');

Route::post('/mahadaly/{id}/edittingkat','ApiController@edittingkatmahadaly');
Route::post('/mahadaly/{id}/editkategori','ApiController@editkategorimahadaly');
Route::post('/mahadaly/{id}/edithadiah','ApiController@edithadiahmahadaly');
Route::post('/mahadaly/{id}/editwaktu','ApiController@editwaktumahadaly');
Route::post('/mahadaly/{id}/editnote','ApiController@editnotemahadaly');

Route::post('/mahadaly/{id}/editsifat','ApiController@editsifatmahadaly');
Route::post('/mahadaly/{id}/editnulis','ApiController@editnulismahadaly');

/////////////////////////// MAHAD ALY 1-2 //////////////////////////////
Route::post('/mahadaly1/{id}/editnilai','ApiController@editnilaimahadaly1');

Route::post('/mahadaly1/{id}/editjenis','ApiController@editjenismahadaly1');
Route::post('/mahadaly1/{id}/editsanksi','ApiController@editsanksimahadaly1');
Route::post('/mahadaly1/{id}/editskor','ApiController@editskormahadaly1');
Route::post('/mahadaly1/{id}/editdata','ApiController@editdatamahadaly1');

Route::post('/mahadaly1/{id}/editrumah','ApiController@editrumahmahadaly1');
Route::post('/mahadaly1/{id}/editjangka','ApiController@editjangkamahadaly1');
Route::post('/mahadaly1/{id}/editpondok','ApiController@editpondokmahadaly1');
Route::post('/mahadaly1/{id}/editdatang','ApiController@editdatangmahadaly1');
Route::post('/mahadaly1/{id}/edithukum','ApiController@edithukummahadaly1');
Route::post('/mahadaly1/{id}/editket','ApiController@editketmahadaly1');

Route::post('/mahadaly1/{id}/editpelunasan','ApiController@editpelunasanmahadaly1');
Route::post('/mahadaly1/{id}/editpengambilan','ApiController@editpengambilanmahadaly1');
Route::post('/mahadaly1/{id}/editketerangan','ApiController@editketeranganmahadaly1');

Route::post('/mahadaly1/{id}/edittingkat','ApiController@edittingkatmahadaly1');
Route::post('/mahadaly1/{id}/editkategori','ApiController@editkategorimahadaly1');
Route::post('/mahadaly1/{id}/edithadiah','ApiController@edithadiahmahadaly1');
Route::post('/mahadaly1/{id}/editwaktu','ApiController@editwaktumahadaly1');
Route::post('/mahadaly1/{id}/editnote','ApiController@editnotemahadaly1');

Route::post('/mahadaly1/{id}/editsifat','ApiController@editsifatmahadaly1');
Route::post('/mahadaly1/{id}/editnulis','ApiController@editnulismahadaly1');

/////////////////////////// MAHAD ALY 3-4 //////////////////////////////
Route::post('/mahadaly2/{id}/editnilai','ApiController@editnilaimahadaly2');

Route::post('/mahadaly2/{id}/editjenis','ApiController@editjenismahadaly2');
Route::post('/mahadaly2/{id}/editsanksi','ApiController@editsanksimahadaly2');
Route::post('/mahadaly2/{id}/editskor','ApiController@editskormahadaly2');
Route::post('/mahadaly2/{id}/editdata','ApiController@editdatamahadaly2');

Route::post('/mahadaly2/{id}/editrumah','ApiController@editrumahmahadaly2');
Route::post('/mahadaly2/{id}/editjangka','ApiController@editjangkamahadaly2');
Route::post('/mahadaly2/{id}/editpondok','ApiController@editpondokmahadaly2');
Route::post('/mahadaly2/{id}/editdatang','ApiController@editdatangmahadaly2');
Route::post('/mahadaly2/{id}/edithukum','ApiController@edithukummahadaly2');
Route::post('/mahadaly2/{id}/editket','ApiController@editketmahadaly2');

Route::post('/mahadaly2/{id}/editpelunasan','ApiController@editpelunasanmahadaly2');
Route::post('/mahadaly2/{id}/editpengambilan','ApiController@editpengambilanmahadaly2');
Route::post('/mahadaly2/{id}/editketerangan','ApiController@editketeranganmahadaly2');

Route::post('/mahadaly2/{id}/edittingkat','ApiController@edittingkatmahadaly2');
Route::post('/mahadaly2/{id}/editkategori','ApiController@editkategorimahadaly2');
Route::post('/mahadaly2/{id}/edithadiah','ApiController@edithadiahmahadaly2');
Route::post('/mahadaly2/{id}/editwaktu','ApiController@editwaktumahadaly2');
Route::post('/mahadaly2/{id}/editnote','ApiController@editnotemahadaly2');

Route::post('/mahadaly2/{id}/editsifat','ApiController@editsifatmahadaly2');
Route::post('/mahadaly2/{id}/editnulis','ApiController@editnulismahadaly2');

/////////////////////////// MAHAD ALY 5-6 //////////////////////////////
Route::post('/mahadaly3/{id}/editnilai','ApiController@editnilaimahadaly3');

Route::post('/mahadaly3/{id}/editjenis','ApiController@editjenismahadaly3');
Route::post('/mahadaly3/{id}/editsanksi','ApiController@editsanksimahadaly3');
Route::post('/mahadaly3/{id}/editskor','ApiController@editskormahadaly3');
Route::post('/mahadaly3/{id}/editdata','ApiController@editdatamahadaly3');

Route::post('/mahadaly3/{id}/editrumah','ApiController@editrumahmahadaly3');
Route::post('/mahadaly3/{id}/editjangka','ApiController@editjangkamahadaly3');
Route::post('/mahadaly3/{id}/editpondok','ApiController@editpondokmahadaly3');
Route::post('/mahadaly3/{id}/editdatang','ApiController@editdatangmahadaly3');
Route::post('/mahadaly3/{id}/edithukum','ApiController@edithukummahadaly3');
Route::post('/mahadaly3/{id}/editket','ApiController@editketmahadaly3');

Route::post('/mahadaly3/{id}/editpelunasan','ApiController@editpelunasanmahadaly3');
Route::post('/mahadaly3/{id}/editpengambilan','ApiController@editpengambilanmahadaly3');
Route::post('/mahadaly3/{id}/editketerangan','ApiController@editketeranganmahadaly3');

Route::post('/mahadaly3/{id}/edittingkat','ApiController@edittingkatmahadaly3');
Route::post('/mahadaly3/{id}/editkategori','ApiController@editkategorimahadaly3');
Route::post('/mahadaly3/{id}/edithadiah','ApiController@edithadiahmahadaly3');
Route::post('/mahadaly3/{id}/editwaktu','ApiController@editwaktumahadaly3');
Route::post('/mahadaly3/{id}/editnote','ApiController@editnotemahadaly3');

Route::post('/mahadaly3/{id}/editsifat','ApiController@editsifatmahadaly3');
Route::post('/mahadaly3/{id}/editnulis','ApiController@editnulismahadaly3');

/////////////////////////// MAHAD ALY 7-8 //////////////////////////////
Route::post('/mahadaly4/{id}/editnilai','ApiController@editnilaimahadaly4');

Route::post('/mahadaly4/{id}/editjenis','ApiController@editjenismahadaly4');
Route::post('/mahadaly4/{id}/editsanksi','ApiController@editsanksimahadaly4');
Route::post('/mahadaly4/{id}/editskor','ApiController@editskormahadaly4');
Route::post('/mahadaly4/{id}/editdata','ApiController@editdatamahadaly4');

Route::post('/mahadaly4/{id}/editrumah','ApiController@editrumahmahadaly4');
Route::post('/mahadaly4/{id}/editjangka','ApiController@editjangkamahadaly4');
Route::post('/mahadaly4/{id}/editpondok','ApiController@editpondokmahadaly4');
Route::post('/mahadaly4/{id}/editdatang','ApiController@editdatangmahadaly4');
Route::post('/mahadaly4/{id}/edithukum','ApiController@edithukummahadaly4');
Route::post('/mahadaly4/{id}/editket','ApiController@editketmahadaly4');

Route::post('/mahadaly4/{id}/editpelunasan','ApiController@editpelunasanmahadaly4');
Route::post('/mahadaly4/{id}/editpengambilan','ApiController@editpengambilanmahadaly4');
Route::post('/mahadaly4/{id}/editketerangan','ApiController@editketeranganmahadaly4');

Route::post('/mahadaly4/{id}/edittingkat','ApiController@edittingkatmahadaly4');
Route::post('/mahadaly4/{id}/editkategori','ApiController@editkategorimahadaly4');
Route::post('/mahadaly4/{id}/edithadiah','ApiController@edithadiahmahadaly4');
Route::post('/mahadaly4/{id}/editwaktu','ApiController@editwaktumahadaly4');
Route::post('/mahadaly4/{id}/editnote','ApiController@editnotemahadaly4');

Route::post('/mahadaly4/{id}/editsifat','ApiController@editsifatmahadaly4');
Route::post('/mahadaly4/{id}/editnulis','ApiController@editnulismahadaly4');

/////////////////////////// Salaf //////////////////////////////
Route::post('/salaf/{id}/editnilai','ApiController@editnilaisalaf');

Route::post('/salaf/{id}/editjenis','ApiController@editjenissalaf');
Route::post('/salaf/{id}/editsanksi','ApiController@editsanksisalaf');
Route::post('/salaf/{id}/editskor','ApiController@editskorsalaf');
Route::post('/salaf/{id}/editdata','ApiController@editdatasalaf');

Route::post('/salaf/{id}/editrumah','ApiController@editrumahsalaf');
Route::post('/salaf/{id}/editjangka','ApiController@editjangkasalaf');
Route::post('/salaf/{id}/editpondok','ApiController@editpondoksalaf');
Route::post('/salaf/{id}/editdatang','ApiController@editdatangsalaf');
Route::post('/salaf/{id}/edithukum','ApiController@edithukumsalaf');
Route::post('/salaf/{id}/editket','ApiController@editketsalaf');

Route::post('/salaf/{id}/editpelunasan','ApiController@editpelunasansalaf');
Route::post('/salaf/{id}/editpengambilan','ApiController@editpengambilansalaf');
Route::post('/salaf/{id}/editketerangan','ApiController@editketerangansalaf');

Route::post('/salaf/{id}/edittingkat','ApiController@edittingkatsalaf');
Route::post('/salaf/{id}/editkategori','ApiController@editkategorisalaf');
Route::post('/salaf/{id}/edithadiah','ApiController@edithadiahsalaf');
Route::post('/salaf/{id}/editwaktu','ApiController@editwaktusalaf');
Route::post('/salaf/{id}/editnote','ApiController@editnotesalaf');

Route::post('/salaf/{id}/editsifat','ApiController@editsifatsalaf');
Route::post('/salaf/{id}/editnulis','ApiController@editnulissalaf');

/////////////////////////// Siswa //////////////////////////////
Route::post('/siswa/{id}/editnilai','ApiController@editnilaisiswa');

Route::post('/siswa/{id}/editjenis','ApiController@editjenissiswa');
Route::post('/siswa/{id}/editsanksi','ApiController@editsanksisiswa');
Route::post('/siswa/{id}/editskor','ApiController@editskorsiswa');
Route::post('/siswa/{id}/editdata','ApiController@editdatasiswa');

Route::post('/siswa/{id}/editrumah','ApiController@editrumahsiswa');
Route::post('/siswa/{id}/editjangka','ApiController@editjangkasiswa');
Route::post('/siswa/{id}/editpondok','ApiController@editpondoksiswa');
Route::post('/siswa/{id}/editdatang','ApiController@editdatangsiswa');
Route::post('/siswa/{id}/edithukum','ApiController@edithukumsiswa');
Route::post('/siswa/{id}/editket','ApiController@editketsiswa');

Route::post('/siswa/{id}/editpelunasan','ApiController@editpelunasansiswa');
Route::post('/siswa/{id}/editpengambilan','ApiController@editpengambilansiswa');
Route::post('/siswa/{id}/editketerangan','ApiController@editketerangansiswa');

Route::post('/siswa/{id}/edittingkat','ApiController@edittingkatsiswa');
Route::post('/siswa/{id}/editkategori','ApiController@editkategorisiswa');
Route::post('/siswa/{id}/edithadiah','ApiController@edithadiahsiswa');
Route::post('/siswa/{id}/editwaktu','ApiController@editwaktusiswa');
Route::post('/siswa/{id}/editnote','ApiController@editnotesiswa');

Route::post('/siswa/{id}/editsifat','ApiController@editsifatsiswa');
Route::post('/siswa/{id}/editnulis','ApiController@editnulissiswa');