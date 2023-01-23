<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{

//2222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222//

///////////////////////////      MAPEL       ////////////////////////////////////////////////////////
////////////////////          EDIT NILAI        ///////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnilaismp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaismp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaismp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaismp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnilaismp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaismp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaismp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaismp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnilaimts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaimts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaimts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaimts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnilaismktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaismktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaismktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaismktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnilaismktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaismktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaismktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaismktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnilaima(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaima10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaima11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaima12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editnilaimahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaimahadaly1(Request $request, $id)
    {
    	$mahadaly1 = \App\Mahadaly1::find($id);
    	$mahadaly1->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }
        
    public function editnilaimahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }
        
    public function editnilaimahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }
        
    public function editnilaimahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnilaisalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }

    public function editnilaisiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }


//33333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333//

///////////////////////////      PELANGGARAN       ////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT JENIS        ///////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editjenissmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenissmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenissmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenissmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editjenissmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenissmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenissmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenissmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editjenismts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenismts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenismts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenismts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editjenissmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenissmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenissmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenissmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editjenissmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenissmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenissmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenissmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editjenisma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenisma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenisma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenisma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editjenismahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenismahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }
        
    public function editjenismahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }
        
    public function editjenismahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }
        
    public function editjenismahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editjenissalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }

    public function editjenissiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->hukuman()->updateExistingPivot($request->pk,['jenis' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT SANKSI        ///////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editsanksismp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksismp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksismp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksismp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editsanksismp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksismp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksismp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksismp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editsanksimts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksimts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksimts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksimts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editsanksismktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksismktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksismktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksismktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editsanksismktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksismktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksismktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksismktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editsanksima(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksima10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }    

    public function editsanksima11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksima12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editsanksimahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksimahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }
        
    public function editsanksimahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }
        
    public function editsanksimahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }
        
    public function editsanksimahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editsanksisalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }

    public function editsanksisiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->hukuman()->updateExistingPivot($request->pk,['sanksi' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT SKOR        ///////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editskorsmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorsmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorsmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorsmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editskorsmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorsmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorsmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorsmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editskormts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskormts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskormts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskormts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editskorsmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorsmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorsmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorsmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editskorsmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorsmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorsmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorsmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editskorma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }    

    public function editskorma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editskormahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskormahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }
        
    public function editskormahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }
        
    public function editskormahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }
        
    public function editskormahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editskorsalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }

    public function editskorsiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->hukuman()->updateExistingPivot($request->pk,['skor' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT DATA        ///////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editdatasmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatasmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatasmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatasmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editdatasmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatasmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatasmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatasmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editdatamts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatamts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatamts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatamts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editdatasmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatasmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatasmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatasmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editdatasmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatasmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatasmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatasmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editdatama(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatama10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }    

    public function editdatama11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatama12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editdatamahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatamahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }
        
    public function editdatamahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }
        
    public function editdatamahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }
        
    public function editdatamahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editdatasalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }

    public function editdatasiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->hukuman()->updateExistingPivot($request->pk,['data' => $request->value]);
    }


//4444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444//

///////////////////////////      PERIZINAN       ///////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT RUMAH        ///////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editrumahsmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahsmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahsmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahsmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editrumahsmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahsmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahsmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahsmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editrumahmts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahmts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahmts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahmts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editrumahsmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahsmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahsmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahsmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editrumahsmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahsmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahsmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahsmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editrumahma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }    

    public function editrumahma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editrumahmahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahmahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }
        
    public function editrumahmahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }
        
    public function editrumahmahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }
        
    public function editrumahmahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editrumahsalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }

    public function editrumahsiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->izin()->updateExistingPivot($request->pk,['rumah' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT JANGKA        ///////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editjangkasmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkasmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkasmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkasmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editjangkasmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkasmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkasmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkasmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editjangkamts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkamts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkamts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkamts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editjangkasmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkasmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkasmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkasmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editjangkasmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkasmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkasmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkasmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editjangkama(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkama10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }    

    public function editjangkama11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkama12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editjangkamahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkamahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }
        
    public function editjangkamahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }
        
    public function editjangkamahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }
        
    public function editjangkamahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editjangkasalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }

    public function editjangkasiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->izin()->updateExistingPivot($request->pk,['jangka' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT PONDOK        ///////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editpondoksmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondoksmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondoksmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondoksmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpondoksmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondoksmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondoksmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondoksmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpondokmts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondokmts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondokmts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondokmts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpondoksmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondoksmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondoksmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondoksmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpondoksmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondoksmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondoksmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondoksmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpondokma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondokma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }    

    public function editpondokma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondokma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editpondokmahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondokmahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }
        
    public function editpondokmahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }
        
    public function editpondokmahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }
        
    public function editpondokmahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpondoksalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }

    public function editpondoksiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->izin()->updateExistingPivot($request->pk,['pondok' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT DATANG        ///////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editdatangsmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangsmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangsmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangsmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editdatangsmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangsmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangsmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangsmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editdatangmts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangmts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangmts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangmts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editdatangsmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangsmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangsmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangsmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editdatangsmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangsmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangsmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangsmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editdatangma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }    

    public function editdatangma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editdatangmahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangmahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }
        
    public function editdatangmahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }
        
    public function editdatangmahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }
        
    public function editdatangmahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editdatangsalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }

    public function editdatangsiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->izin()->updateExistingPivot($request->pk,['datang' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT HUKUM        ///////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function edithukumsmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumsmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumsmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumsmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function edithukumsmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumsmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumsmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumsmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function edithukummts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukummts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukummts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukummts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edithukumsmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumsmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumsmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumsmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edithukumsmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumsmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumsmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumsmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edithukumma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }    

    public function edithukumma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function edithukummahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukummahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }
        
    public function edithukummahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }
        
    public function edithukummahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }
        
    public function edithukummahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edithukumsalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }

    public function edithukumsiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->izin()->updateExistingPivot($request->pk,['hukum' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT KET        ///////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editketsmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketsmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketsmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketsmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editketsmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketsmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketsmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketsmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editketmts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketmts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketmts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketmts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editketsmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketsmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketsmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketsmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editketsmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketsmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketsmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketsmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editketma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }    

    public function editketma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editketmahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketmahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }
        
    public function editketmahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }
        
    public function editketmahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }
        
    public function editketmahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editketsalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

    public function editketsiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->izin()->updateExistingPivot($request->pk,['ket' => $request->value]);
    }

//5555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555//

////////////////////////      AMBIL        /////////////////////////////////////////////////////// 
///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT PELUNASAN        //////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editpelunasansmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasansmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasansmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasansmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpelunasansmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasansmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasansmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasansmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpelunasanmts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasanmts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasanmts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasanmts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpelunasansmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasansmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasansmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasansmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpelunasansmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasansmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasansmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasansmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpelunasanma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasanma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }    

    public function editpelunasanma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasanma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editpelunasanmahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasanmahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }
        
    public function editpelunasanmahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }
        
    public function editpelunasanmahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }
        
    public function editpelunasanmahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpelunasansalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }

    public function editpelunasansiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->ambil()->updateExistingPivot($request->pk,['pelunasan' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT PENGAMBILAN        //////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editpengambilansmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilansmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilansmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilansmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpengambilansmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilansmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilansmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilansmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpengambilanmts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilanmts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilanmts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilanmts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpengambilansmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilansmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilansmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilansmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpengambilansmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilansmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilansmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilansmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpengambilanma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilanma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }    

    public function editpengambilanma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilanma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editpengambilanmahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilanmahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }
        
    public function editpengambilanmahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }
        
    public function editpengambilanmahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }
        
    public function editpengambilanmahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editpengambilansalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }

    public function editpengambilansiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->ambil()->updateExistingPivot($request->pk,['pengambilan' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT KETERANGAN        //////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editketerangansmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketerangansmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketerangansmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketerangansmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editketerangansmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketerangansmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketerangansmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketerangansmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editketeranganmts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketeranganmts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketeranganmts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketeranganmts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editketerangansmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketerangansmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketerangansmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketerangansmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editketerangansmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketerangansmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketerangansmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketerangansmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editketeranganma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketeranganma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }    

    public function editketeranganma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketeranganma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editketeranganmahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketeranganmahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }
        
    public function editketeranganmahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }
        
    public function editketeranganmahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }
        
    public function editketeranganmahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editketerangansalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }

    public function editketerangansiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->ambil()->updateExistingPivot($request->pk,['keterangan' => $request->value]);
    }


// 6666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666 //

////////////////////////////       PRESTASI       //////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT TINGKAT        //////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function edittingkatsmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatsmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatsmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatsmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function edittingkatsmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatsmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatsmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatsmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function edittingkatmts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatmts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatmts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatmts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edittingkatsmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatsmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatsmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatsmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edittingkatsmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatsmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatsmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatsmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edittingkatma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }    

    public function edittingkatma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function edittingkatmahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatmahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }
        
    public function edittingkatmahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }
        
    public function edittingkatmahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }
        
    public function edittingkatmahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edittingkatsalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }

    public function edittingkatsiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->prestasi()->updateExistingPivot($request->pk,['tingkat' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT KATEGORI        //////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editkategorismp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorismp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorismp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorismp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editkategorismp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorismp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorismp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorismp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editkategorimts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorimts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorimts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorimts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editkategorismktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorismktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorismktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorismktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editkategorismktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorismktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorismktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorismktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editkategorima(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorima10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }    

    public function editkategorima11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorima12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editkategorimahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorimahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }
        
    public function editkategorimahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }
        
    public function editkategorimahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }
        
    public function editkategorimahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editkategorisalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }

    public function editkategorisiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->prestasi()->updateExistingPivot($request->pk,['kategori' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT HADIAH        //////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function edithadiahsmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahsmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahsmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahsmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function edithadiahsmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahsmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahsmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahsmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function edithadiahmts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahmts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahmts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahmts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edithadiahsmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahsmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahsmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahsmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edithadiahsmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahsmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahsmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahsmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edithadiahma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }    

    public function edithadiahma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function edithadiahmahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahmahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }
        
    public function edithadiahmahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }
        
    public function edithadiahmahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }
        
    public function edithadiahmahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edithadiahsalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }

    public function edithadiahsiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->prestasi()->updateExistingPivot($request->pk,['hadiah' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT WAKTU        //////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editwaktusmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktusmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktusmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktusmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editwaktusmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktusmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktusmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktusmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editwaktumts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktumts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktumts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktumts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editwaktusmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktusmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktusmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktusmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editwaktusmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktusmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktusmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktusmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editwaktuma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktuma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }    

    public function editwaktuma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktuma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editwaktumahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktumahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }
        
    public function editwaktumahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }
        
    public function editwaktumahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }
        
    public function editwaktumahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editwaktusalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

    public function editwaktusiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->prestasi()->updateExistingPivot($request->pk,['waktu' => $request->value]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT NOTE        //////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editnotesmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotesmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotesmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotesmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnotesmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotesmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotesmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotesmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnotemts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotemts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotemts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotemts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnotesmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotesmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotesmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotesmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnotesmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotesmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotesmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotesmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnotema(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotema10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }    

    public function editnotema11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotema12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editnotemahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotemahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }
        
    public function editnotemahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }
        
    public function editnotemahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }
        
    public function editnotemahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnotesalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

    public function editnotesiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->prestasi()->updateExistingPivot($request->pk,['note' => $request->value]);
    }

// 77777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777 //

//////////////////////////////        CATATAN        ////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT SIFAT        //////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editsifatsmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatsmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatsmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatsmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editsifatsmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatsmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatsmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatsmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editsifatmts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatmts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatmts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatmts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editsifatsmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatsmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatsmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatsmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editsifatsmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatsmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatsmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatsmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editsifatma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }    

    public function editsifatma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editsifatmahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatmahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }
        
    public function editsifatmahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }
        
    public function editsifatmahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }
        
    public function editsifatmahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editsifatsalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }

    public function editsifatsiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->catatan()->updateExistingPivot($request->pk,['sifat' => $request->value]);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////          EDIT nulis        //////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function editnulissmp1(Request $request, $id)
    {
        $smp1 = \App\Smp1::find($id);
        $smp1->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulissmp17(Request $request, $id)
    {
        $smp17 = \App\Smp17::find($id);
        $smp17->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulissmp18(Request $request, $id)
    {    
        $smp18 = \App\Smp18::find($id);
        $smp18->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulissmp19(Request $request, $id)
    {
        $smp19 = \App\Smp19::find($id);
        $smp19->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnulissmp2(Request $request, $id)
    {
        $smp2 = \App\Smp2::find($id);
        $smp2->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulissmp27(Request $request, $id)
    {
        $smp27 = \App\Smp27::find($id);
        $smp27->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulissmp28(Request $request, $id)
    {
        $smp28 = \App\Smp28::find($id);
        $smp28->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulissmp29(Request $request, $id)
    {
        $smp29 = \App\Smp29::find($id);
        $smp29->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnulismts(Request $request, $id)
    {
        $mts = \App\Mts::find($id);
        $mts->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulismts7(Request $request, $id)
    {
        $mts7 = \App\Mts7::find($id);
        $mts7->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulismts8(Request $request, $id)
    {
        $mts8 = \App\Mts8::find($id);
        $mts8->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulismts9(Request $request, $id)
    {
        $mts9 = \App\Mts9::find($id);
        $mts9->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnulissmktkj(Request $request, $id)
    {
        $smktkj = \App\Smktkj::find($id);
        $smktkj->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulissmktkj10(Request $request, $id)
    {
        $smktkj10 = \App\Smktkj10::find($id);
        $smktkj10->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulissmktkj11(Request $request, $id)
    {
        $smktkj11 = \App\Smktkj11::find($id);
        $smktkj11->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulissmktkj12(Request $request, $id)
    {
        $smktkj12 = \App\Smktkj12::find($id);
        $smktkj12->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnulissmktkr(Request $request, $id)
    {
        $smktkr = \App\Smktkr::find($id);
        $smktkr->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulissmktkr10(Request $request, $id)
    {
        $smktkr10 = \App\Smktkr10::find($id);
        $smktkr10->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulissmktkr11(Request $request, $id)
    {
        $smktkr11 = \App\Smktkr11::find($id);
        $smktkr11->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulissmktkr12(Request $request, $id)
    {
        $smktkr12 = \App\Smktkr12::find($id);
        $smktkr12->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnulisma(Request $request, $id)
    {
        $ma = \App\Ma::find($id);
        $ma->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulisma10(Request $request, $id)
    {
        $ma10 = \App\Ma10::find($id);
        $ma10->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }    

    public function editnulisma11(Request $request, $id)
    {
        $ma11 = \App\Ma11::find($id);
        $ma11->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulisma12(Request $request, $id)
    {
        $ma12 = \App\Ma12::find($id);
        $ma12->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////      
    public function editnulismahadaly(Request $request, $id)
    {
        $mahadaly = \App\Mahadaly::find($id);
        $mahadaly->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulismahadaly1(Request $request, $id)
    {
        $mahadaly1 = \App\Mahadaly1::find($id);
        $mahadaly1->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }
        
    public function editnulismahadaly2(Request $request, $id)
    {
        $mahadaly2 = \App\Mahadaly2::find($id);
        $mahadaly2->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }
        
    public function editnulismahadaly3(Request $request, $id)
    {
        $mahadaly3 = \App\Mahadaly3::find($id);
        $mahadaly3->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }
        
    public function editnulismahadaly4(Request $request, $id)
    {
        $mahadaly4 = \App\Mahadaly4::find($id);
        $mahadaly4->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editnulissalaf(Request $request, $id)
    {
        $salaf = \App\Salaf::find($id);
        $salaf->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }

    public function editnulissiswa(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->catatan()->updateExistingPivot($request->pk,['nulis' => $request->value]);
    }




/////////////////////////////////////////////////////////////////////////////////////////////////////




}
