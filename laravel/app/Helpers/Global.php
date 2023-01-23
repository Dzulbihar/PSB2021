<?php
use App\Smp1;
use App\Smp17;
use App\Smp18;
use App\Smp19;
use App\Smp2;
use App\Smp27;
use App\Smp28;
use App\Smp29;
use App\Mts;
use App\Mts7;
use App\Mts8;
use App\Mts9;
use App\Smktkj;
use App\Smktkj10;
use App\Smktkj11;
use App\Smktkj12;
use App\Smktkr;
use App\Smktkr10;
use App\Smktkr11;
use App\Smktkr12;
use App\Ma;
use App\Ma10;
use App\Ma11;
use App\Ma12;
use App\Mahadaly;
use App\Mahadaly1;
use App\Mahadaly2;
use App\Mahadaly3;
use App\Mahadaly4;
use App\Salaf;
use App\Siswa;

use App\Santrikeluar;

use Illuminate\Support\Facades\DB;


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////                            JUMLAH SANTRI                        //////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function totalSemua()
{
    return 
    smp1::count()+
    Smp2::count() +
    Mts::count() +
    Smktkj::count()+ 
    Smktkr::count() +
    Ma::count() +
    Siswa::count() +
    Santrikeluar::count()
     ;
}

function Offline()
{
    return 
    smp1::count()+
    Smp2::count() +
    Mts::count() +
    Smktkj::count()+ 
    Smktkr::count() +
    Ma::count() +
    Santrikeluar::count()
     ;
}

function Online()
{
    return 
    Siswa::count() 
     ;
}


function totalSantrikeluar()
{
    return Santrikeluar::count();
}

function totalSmp1()
{

return
Smp1::count();

}

function totalSmp17()
{
    return Smp17::count();
}

function totalSmp18()
{
    return Smp18::count();
}

function totalSmp19()
{
    return Smp19::count();
}
///////////////////////////

function totalSmp2()
{
    return Smp2::count();
}

function totalSmp27()
{
    return Smp27::count();
}

function totalSmp28()
{
    return Smp28::count();
}

function totalSmp29()
{
    return Smp29::count();
}
/////////////////////////

function totalMts()
{
    return Mts::count();
}

function totalMts7()
{
    return Mts7::count();
}

function totalMts8()
{
    return Mts8::count();
}

function totalMts9()
{
    return Mts9::count();
}
/////////////////////////

function totalSmktkj()
{
    return Smktkj::count();
}

function totalSmktkj10()
{
    return Smktkj10::count();
}

function totalSmktkj11()
{
    return Smktkj11::count();
}

function totalSmktkj12()
{
    return Smktkj12::count();
}
//////////////////////////

function totalSmktkr()
{
    return Smktkr::count();
}

function totalSmktkr10()
{
    return Smktkr10::count();
}

function totalSmktkr11()
{
    return Smktkr11::count();
}

function totalSmktkr12()
{
    return Smktkr12::count();
}
///////////////////////////

function totalMa()
{
    return Ma::count();
}

function totalMa10()
{
    return Ma10::count();
}

function totalMa11()
{
    return Ma11::count();
}

function totalMa12()
{
    return Ma12::count();
}
///////////////////////

function totalMahadaly()
{
    return Mahadaly::count();
}

function totalMahadaly1()
{
    return Mahadaly1::count();
}
function totalMahadaly2()
{
    return Mahadaly2::count();
}
function totalMahadaly3()
{
    return Mahadaly3::count();
}
function totalMahadaly4()
{
    return Mahadaly4::count();
}
//////////////

function totalSalaf()
{
    return Salaf::count();
}

function totalSiswa()
{
    return Siswa::count();
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////                          NILAI                             /////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function ranking5Besarsmp1()
{
        $smp1 = Smp1::all();
        $smp1->map(function($smp1){
            $smp1->rataRataNilai = $smp1->rataRataNilai();
            return $smp1;
        });
        
        $smp1 = $smp1->sortByDesc('rataRataNilai')->take(10);
        return $smp1;
}

function ranking5Besarsmp17()
{
        $smp17 = Smp17::all();
        $smp17->map(function($smp17){
            $smp17->rataRataNilai = $smp17->rataRataNilai();
            return $smp17;
        });
        
        $smp17 = $smp17->sortByDesc('rataRataNilai')->take(10);
        return $smp17;
}

function ranking5Besarsmp18()
{
        $smp18 = Smp18::all();
        $smp18->map(function($smp18){
            $smp18->rataRataNilai = $smp18->rataRataNilai();
            return $smp18;
        });
        
        $smp18 = $smp18->sortByDesc('rataRataNilai')->take(10);
        return $smp18;
}

function ranking5Besarsmp19()
{
        $smp19 = Smp19::all();
        $smp19->map(function($smp19){
            $smp19->rataRataNilai = $smp19->rataRataNilai();
            return $smp19;
        });
        
        $smp19 = $smp19->sortByDesc('rataRataNilai')->take(10);
        return $smp19;
}

///////////////////////////////////////////////////////////////////////////

function ranking5Besarsmp2()
{
        $smp2 = Smp2::all();
        $smp2->map(function($smp2){
            $smp2->rataRataNilai = $smp2->rataRataNilai();
            return $smp2;
        });
        
        $smp2 = $smp2->sortByDesc('rataRataNilai')->take(10);
        return $smp2;
}

function ranking5Besarsmp27()
{
        $smp27 = Smp27::all();
        $smp27->map(function($smp27){
            $smp27->rataRataNilai = $smp27->rataRataNilai();
            return $smp27;
        });
        
        $smp27 = $smp27->sortByDesc('rataRataNilai')->take(10);
        return $smp27;
}

function ranking5Besarsmp28()
{
        $smp28 = Smp28::all();
        $smp28->map(function($smp28){
            $smp28->rataRataNilai = $smp28->rataRataNilai();
            return $smp28;
        });
        
        $smp28 = $smp28->sortByDesc('rataRataNilai')->take(10);
        return $smp28;
}

function ranking5Besarsmp29()
{
        $smp29 = Smp29::all();
        $smp29->map(function($smp29){
            $smp29->rataRataNilai = $smp29->rataRataNilai();
            return $smp29;
        });
        
        $smp29 = $smp29->sortByDesc('rataRataNilai')->take(10);
        return $smp29;
}

////////////////////////////////////////////////////////////////////////

function ranking5Besarmts()
{
        $mts = Mts::all();
        $mts->map(function($mts){
            $mts->rataRataNilai = $mts->rataRataNilai();
            return $mts;
        });
        
        $mts = $mts->sortByDesc('rataRataNilai')->take(10);
        return $mts;
}

function ranking5Besarmts7()
{
        $mts7 = Mts7::all();
        $mts7->map(function($mts7){
            $mts7->rataRataNilai = $mts7->rataRataNilai();
            return $mts7;
        });
        
        $mts7 = $mts7->sortByDesc('rataRataNilai')->take(10);
        return $mts7;
}

function ranking5Besarmts8()
{
        $mts8 = Mts8::all();
        $mts8->map(function($mts8){
            $mts8->rataRataNilai = $mts8->rataRataNilai();
            return $mts8;
        });
        
        $mts8 = $mts8->sortByDesc('rataRataNilai')->take(10);
        return $mts8;
}

function ranking5Besarmts9()
{
        $mts9 = Mts9::all();
        $mts9->map(function($mts9){
            $mts9->rataRataNilai = $mts9->rataRataNilai();
            return $mts9;
        });
        
        $mts9 = $mts9->sortByDesc('rataRataNilai')->take(10);
        return $mts9;
}

////////////////////////////////////////////////////////////////////////////

function ranking5Besarsmktkj()
{
        $smktkj = Smktkj::all();
        $smktkj->map(function($smktkj){
            $smktkj->rataRataNilai = $smktkj->rataRataNilai();
            return $smktkj;
        });
        
        $smktkj = $smktkj->sortByDesc('rataRataNilai')->take(10);
        return $smktkj;
}

function ranking5Besarsmktkj10()
{
        $smktkj10 = Smktkj10::all();
        $smktkj10->map(function($smktkj10){
            $smktkj10->rataRataNilai = $smktkj10->rataRataNilai();
            return $smktkj10;
        });
        
        $smktkj10 = $smktkj10->sortByDesc('rataRataNilai')->take(10);
        return $smktkj10;
}

function ranking5Besarsmktkj11()
{
        $smktkj11 = Smktkj11::all();
        $smktkj11->map(function($smktkj11){
            $smktkj11->rataRataNilai = $smktkj11->rataRataNilai();
            return $smktkj11;
        });
        
        $smktkj11 = $smktkj11->sortByDesc('rataRataNilai')->take(10);
        return $smktkj11;
}

function ranking5Besarsmktkj12()
{
        $smktkj12 = Smktkj12::all();
        $smktkj12->map(function($smktkj12){
            $smktkj12->rataRataNilai = $smktkj12->rataRataNilai();
            return $smktkj12;
        });
        
        $smktkj12 = $smktkj12->sortByDesc('rataRataNilai')->take(10);
        return $smktkj12;
}

///////////////////////////////////////////////////////////////////////////////////////////

function ranking5Besarsmktkr()
{
        $smktkr = Smktkr::all();
        $smktkr->map(function($smktkr){
            $smktkr->rataRataNilai = $smktkr->rataRataNilai();
            return $smktkr;
        });
        
        $smktkr = $smktkr->sortByDesc('rataRataNilai')->take(10);
        return $smktkr;
}

function ranking5Besarsmktkr10()
{
        $smktkr10 = Smktkr10::all();
        $smktkr10->map(function($smktkr10){
            $smktkr10->rataRataNilai = $smktkr10->rataRataNilai();
            return $smktkr10;
        });
        
        $smktkr10 = $smktkr10->sortByDesc('rataRataNilai')->take(10);
        return $smktkr10;
}

function ranking5Besarsmktkr11()
{
        $smktkr11 = Smktkr11::all();
        $smktkr11->map(function($smktkr11){
            $smktkr11->rataRataNilai = $smktkr11->rataRataNilai();
            return $smktkr11;
        });
        
        $smktkr11 = $smktkr11->sortByDesc('rataRataNilai')->take(10);
        return $smktkr11;
}

function ranking5Besarsmktkr12()
{
        $smktkr12 = Smktkr12::all();
        $smktkr12->map(function($smktkr12){
            $smktkr12->rataRataNilai = $smktkr12->rataRataNilai();
            return $smktkr12;
        });
        
        $smktkr12 = $smktkr12->sortByDesc('rataRataNilai')->take(10);
        return $smktkr12;
}

/////////////////////////////////////////////////////////////////////////////////////////

function ranking5Besarma()
{
        $ma = Ma::all();
        $ma->map(function($ma){
            $ma->rataRataNilai = $ma->rataRataNilai();
            return $ma;
        });
        
        $ma = $ma->sortByDesc('rataRataNilai')->take(10);
        return $ma;
}

function ranking5Besarma10()
{
        $ma10 = Ma10::all();
        $ma10->map(function($ma10){
            $ma10->rataRataNilai = $ma10->rataRataNilai();
            return $ma10;
        });
        
        $ma10 = $ma10->sortByDesc('rataRataNilai')->take(10);
        return $ma10;
}

function ranking5Besarma11()
{
        $ma11 = Ma11::all();
        $ma11->map(function($ma11){
            $ma11->rataRataNilai = $ma11->rataRataNilai();
            return $ma11;
        });
        
        $ma11 = $ma11->sortByDesc('rataRataNilai')->take(10);
        return $ma11;
}

function ranking5Besarma12()
{
        $ma12 = Ma12::all();
        $ma12->map(function($ma12){
            $ma12->rataRataNilai = $ma12->rataRataNilai();
            return $ma12;
        });
        
        $ma12 = $ma12->sortByDesc('rataRataNilai')->take(10);
        return $ma12;
}

/////////////////////////////////////////////////////////////////////////////////////////////////

function ranking5Besarmahadaly()
{
        $mahadaly = Mahadaly::all();
        $mahadaly->map(function($mahadaly){
            $mahadaly->rataRataNilai = $mahadaly->rataRataNilai();
            return $mahadaly;
        });
        
        $mahadaly = $mahadaly->sortByDesc('rataRataNilai')->take(10);
        return $mahadaly;
}

function ranking5Besarmahadaly1()
{
        $mahadaly1 = Mahadaly1::all();
        $mahadaly1->map(function($mahadaly1){
            $mahadaly1->rataRataNilai = $mahadaly1->rataRataNilai();
            return $mahadaly1;
        });
        
        $mahadaly1 = $mahadaly1->sortByDesc('rataRataNilai')->take(10);
        return $mahadaly1;
}

function ranking5Besarmahadaly2()
{
        $mahadaly2 = Mahadaly2::all();
        $mahadaly2->map(function($mahadaly2){
            $mahadaly2->rataRataNilai = $mahadaly2->rataRataNilai();
            return $mahadaly2;
        });
        
        $mahadaly2 = $mahadaly2->sortByDesc('rataRataNilai')->take(10);
        return $mahadaly2;
}

function ranking5Besarmahadaly3()
{
        $mahadaly3 = Mahadaly3::all();
        $mahadaly3->map(function($mahadaly3){
            $mahadaly3->rataRataNilai = $mahadaly3->rataRataNilai();
            return $mahadaly3;
        });
        
        $mahadaly3 = $mahadaly3->sortByDesc('rataRataNilai')->take(10);
        return $mahadaly3;
}

function ranking5Besarmahadaly4()
{
        $mahadaly4 = Mahadaly4::all();
        $mahadaly4->map(function($mahadaly4){
            $mahadaly4->rataRataNilai = $mahadaly4->rataRataNilai();
            return $mahadaly4;
        });
        
        $mahadaly4 = $mahadaly4->sortByDesc('rataRataNilai')->take(10);
        return $mahadaly4;
}
/////////////////////////////////////////////////////////////////////////////////////////////////

function ranking5Besarsalaf()
{
        $salaf = Salaf::all();
        $salaf->map(function($salaf){
            $salaf->rataRataNilai = $salaf->rataRataNilai();
            return $salaf;
        });
        
        $salaf = $salaf->sortByDesc('rataRataNilai')->take(10);
        return $salaf;
}

function ranking5Besarsiswa()
{
        $siswa = Siswa::all();
        $siswa->map(function($siswa){
            $siswa->rataRataNilai = $siswa->rataRataNilai();
            return $siswa;
        });
        
        $siswa = $siswa->sortByDesc('rataRataNilai')->take(10);
        return $siswa;
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////                     PELANGGARAN                   /////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function skorPelanggaransmp1()
{
        $smp1 = Smp1::all();
        $smp1->map(function($smp1){
            $smp1->rataRataSkor = $smp1->rataRataSkor();
            return $smp1;
        });
        
        $smp1 = $smp1->sortByDesc('rataRataSkor')->take(10);
        return $smp1;
}

function skorPelanggaransmp17()
{
        $smp17 = Smp17::all();
        $smp17->map(function($smp17){
            $smp17->rataRataSkor = $smp17->rataRataSkor();
            return $smp17;
        });
        
        $smp17 = $smp17->sortByDesc('rataRataSkor')->take(10);
        return $smp17;
}

function skorPelanggaransmp18()
{
        $smp18 = Smp18::all();
        $smp18->map(function($smp18){
            $smp18->rataRataSkor = $smp18->rataRataSkor();
            return $smp18;
        });
        
        $smp18 = $smp18->sortByDesc('rataRataSkor')->take(10);
        return $smp18;
}

function skorPelanggaransmp19()
{
        $smp19 = Smp19::all();
        $smp19->map(function($smp19){
            $smp19->rataRataSkor = $smp19->rataRataSkor();
            return $smp19;
        });
        
        $smp19 = $smp19->sortByDesc('rataRataSkor')->take(10);
        return $smp19;
}

///////////////////////////////////////////////////////////////////////////

function skorPelanggaransmp2()
{
        $smp2 = Smp2::all();
        $smp2->map(function($smp2){
            $smp2->rataRataSkor = $smp2->rataRataSkor();
            return $smp2;
        });
        
        $smp2 = $smp2->sortByDesc('rataRataSkor')->take(10);
        return $smp2;
}

function skorPelanggaransmp27()
{
        $smp27 = Smp27::all();
        $smp27->map(function($smp27){
            $smp27->rataRataSkor = $smp27->rataRataSkor();
            return $smp27;
        });
        
        $smp27 = $smp27->sortByDesc('rataRataSkor')->take(10);
        return $smp27;
}

function skorPelanggaransmp28()
{
        $smp28 = Smp28::all();
        $smp28->map(function($smp28){
            $smp28->rataRataSkor = $smp28->rataRataSkor();
            return $smp28;
        });
        
        $smp28 = $smp28->sortByDesc('rataRataSkor')->take(10);
        return $smp28;
}

function skorPelanggaransmp29()
{
        $smp29 = Smp29::all();
        $smp29->map(function($smp29){
            $smp29->rataRataSkor = $smp29->rataRataSkor();
            return $smp29;
        });
        
        $smp29 = $smp29->sortByDesc('rataRataSkor')->take(10);
        return $smp29;
}

////////////////////////////////////////////////////////////////////////

function skorPelanggaranmts()
{
        $mts = Mts::all();
        $mts->map(function($mts){
            $mts->rataRataSkor = $mts->rataRataSkor();
            return $mts;
        });
        
        $mts = $mts->sortByDesc('rataRataSkor')->take(10);
        return $mts;
}

function skorPelanggaranmts7()
{
        $mts7 = Mts7::all();
        $mts7->map(function($mts7){
            $mts7->rataRataSkor = $mts7->rataRataSkor();
            return $mts7;
        });
        
        $mts7 = $mts7->sortByDesc('rataRataSkor')->take(10);
        return $mts7;
}

function skorPelanggaranmts8()
{
        $mts8 = Mts8::all();
        $mts8->map(function($mts8){
            $mts8->rataRataSkor = $mts8->rataRataSkor();
            return $mts8;
        });
        
        $mts8 = $mts8->sortByDesc('rataRataSkor')->take(10);
        return $mts8;
}

function skorPelanggaranmts9()
{
        $mts9 = Mts9::all();
        $mts9->map(function($mts9){
            $mts9->rataRataSkor = $mts9->rataRataSkor();
            return $mts9;
        });
        
        $mts9 = $mts9->sortByDesc('rataRataSkor')->take(10);
        return $mts9;
}

////////////////////////////////////////////////////////////////////////////

function skorPelanggaransmktkj()
{
        $smktkj = Smktkj::all();
        $smktkj->map(function($smktkj){
            $smktkj->rataRataSkor = $smktkj->rataRataSkor();
            return $smktkj;
        });
        
        $smktkj = $smktkj->sortByDesc('rataRataSkor')->take(10);
        return $smktkj;
}

function skorPelanggaransmktkj10()
{
        $smktkj10 = Smktkj10::all();
        $smktkj10->map(function($smktkj10){
            $smktkj10->rataRataSkor = $smktkj10->rataRataSkor();
            return $smktkj10;
        });
        
        $smktkj10 = $smktkj10->sortByDesc('rataRataSkor')->take(10);
        return $smktkj10;
}

function skorPelanggaransmktkj11()
{
        $smktkj11 = Smktkj11::all();
        $smktkj11->map(function($smktkj11){
            $smktkj11->rataRataSkor = $smktkj11->rataRataSkor();
            return $smktkj11;
        });
        
        $smktkj11 = $smktkj11->sortByDesc('rataRataSkor')->take(10);
        return $smktkj11;
}

function skorPelanggaransmktkj12()
{
        $smktkj12 = Smktkj12::all();
        $smktkj12->map(function($smktkj12){
            $smktkj12->rataRataSkor = $smktkj12->rataRataSkor();
            return $smktkj12;
        });
        
        $smktkj12 = $smktkj12->sortByDesc('rataRataSkor')->take(10);
        return $smktkj12;
}

///////////////////////////////////////////////////////////////////////////////////////////

function skorPelanggaransmktkr()
{
        $smktkr = Smktkr::all();
        $smktkr->map(function($smktkr){
            $smktkr->rataRataSkor = $smktkr->rataRataSkor();
            return $smktkr;
        });
        
        $smktkr = $smktkr->sortByDesc('rataRataSkor')->take(10);
        return $smktkr;
}

function skorPelanggaransmktkr10()
{
        $smktkr10 = Smktkr10::all();
        $smktkr10->map(function($smktkr10){
            $smktkr10->rataRataSkor = $smktkr10->rataRataSkor();
            return $smktkr10;
        });
        
        $smktkr10 = $smktkr10->sortByDesc('rataRataSkor')->take(10);
        return $smktkr10;
}

function skorPelanggaransmktkr11()
{
        $smktkr11 = Smktkr11::all();
        $smktkr11->map(function($smktkr11){
            $smktkr11->rataRataSkor = $smktkr11->rataRataSkor();
            return $smktkr11;
        });
        
        $smktkr11 = $smktkr11->sortByDesc('rataRataSkor')->take(10);
        return $smktkr11;
}

function skorPelanggaransmktkr12()
{
        $smktkr12 = Smktkr12::all();
        $smktkr12->map(function($smktkr12){
            $smktkr12->rataRataSkor = $smktkr12->rataRataSkor();
            return $smktkr12;
        });
        
        $smktkr12 = $smktkr12->sortByDesc('rataRataSkor')->take(10);
        return $smktkr12;
}

/////////////////////////////////////////////////////////////////////////////////////////

function skorPelanggaranma()
{
        $ma = Ma::all();
        $ma->map(function($ma){
            $ma->rataRataSkor = $ma->rataRataSkor();
            return $ma;
        });
        
        $ma = $ma->sortByDesc('rataRataSkor')->take(10);
        return $ma;
}

function skorPelanggaranma10()
{
        $ma10 = Ma10::all();
        $ma10->map(function($ma10){
            $ma10->rataRataSkor = $ma10->rataRataSkor();
            return $ma10;
        });
        
        $ma10 = $ma10->sortByDesc('rataRataSkor')->take(10);
        return $ma10;
}

function skorPelanggaranma11()
{
        $ma11 = Ma11::all();
        $ma11->map(function($ma11){
            $ma11->rataRataSkor = $ma11->rataRataSkor();
            return $ma11;
        });
        
        $ma11 = $ma11->sortByDesc('rataRataSkor')->take(10);
        return $ma11;
}

function skorPelanggaranma12()
{
        $ma12 = Ma12::all();
        $ma12->map(function($ma12){
            $ma12->rataRataSkor = $ma12->rataRataSkor();
            return $ma12;
        });
        
        $ma12 = $ma12->sortByDesc('rataRataSkor')->take(10);
        return $ma12;
}

/////////////////////////////////////////////////////////////////////////////////////////////////

function skorPelanggaranmahadaly()
{
        $mahadaly = Mahadaly::all();
        $mahadaly->map(function($mahadaly){
            $mahadaly->rataRataSkor = $mahadaly->rataRataSkor();
            return $mahadaly;
        });
        
        $mahadaly = $mahadaly->sortByDesc('rataRataSkor')->take(10);
        return $mahadaly;
}

function skorPelanggaranmahadaly1()
{
        $mahadaly1 = Mahadaly1::all();
        $mahadaly1->map(function($mahadaly1){
            $mahadaly1->rataRataSkor = $mahadaly1->rataRataSkor();
            return $mahadaly1;
        });
        
        $mahadaly1 = $mahadaly1->sortByDesc('rataRataSkor')->take(10);
        return $mahadaly1;
}

function skorPelanggaranmahadaly2()
{
        $mahadaly2 = Mahadaly2::all();
        $mahadaly2->map(function($mahadaly2){
            $mahadaly2->rataRataSkor = $mahadaly2->rataRataSkor();
            return $mahadaly2;
        });
        
        $mahadaly2 = $mahadaly2->sortByDesc('rataRataSkor')->take(10);
        return $mahadaly2;
}

function skorPelanggaranmahadaly3()
{
        $mahadaly3 = Mahadaly3::all();
        $mahadaly3->map(function($mahadaly3){
            $mahadaly3->rataRataSkor = $mahadaly3->rataRataSkor();
            return $mahadaly3;
        });
        
        $mahadaly3 = $mahadaly3->sortByDesc('rataRataSkor')->take(10);
        return $mahadaly3;
}

function skorPelanggaranmahadaly4()
{
        $mahadaly4 = Mahadaly4::all();
        $mahadaly4->map(function($mahadaly4){
            $mahadaly4->rataRataSkor = $mahadaly4->rataRataSkor();
            return $mahadaly4;
        });
        
        $mahadaly4 = $mahadaly4->sortByDesc('rataRataSkor')->take(10);
        return $mahadaly4;
}
/////////////////////////////////////////////////////////////////////////////////////////////////

function skorPelanggaransalaf()
{
        $salaf = Salaf::all();
        $salaf->map(function($salaf){
            $salaf->rataRataSkor = $salaf->rataRataSkor();
            return $salaf;
        });
        
        $salaf = $salaf->sortByDesc('rataRataSkor')->take(10);
        return $salaf;
}

function skorPelanggaransiswa()
{
        $siswa = Siswa::all();
        $siswa->map(function($siswa){
            $siswa->rataRataSkor = $siswa->rataRataSkor();
            return $siswa;
        });
        
        $siswa = $siswa->sortByDesc('rataRataSkor')->take(10);
        return $siswa;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////                            IZIN                           //////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function datangsmp1()
{
        $smp1 = Smp1::all();
        $smp1->map(function($smp1){
            $smp1->rataRataDatang = $smp1->rataRataDatang();
            return $smp1;
        });
        
        $smp1 = $smp1->sortByDesc('rataRataDatang')->take(10);
        return $smp1;
}

function datangsmp17()
{
        $smp17 = Smp17::all();
        $smp17->map(function($smp17){
            $smp17->rataRataDatang = $smp17->rataRataDatang();
            return $smp17;
        });
        
        $smp17 = $smp17->sortByDesc('rataRataDatang')->take(10);
        return $smp17;
}

function datangsmp18()
{
        $smp18 = Smp18::all();
        $smp18->map(function($smp18){
            $smp18->rataRataDatang = $smp18->rataRataDatang();
            return $smp18;
        });
        
        $smp18 = $smp18->sortByDesc('rataRataDatang')->take(10);
        return $smp18;
}

function datangsmp19()
{
        $smp19 = Smp19::all();
        $smp19->map(function($smp19){
            $smp19->rataRataDatang = $smp19->rataRataDatang();
            return $smp19;
        });
        
        $smp19 = $smp19->sortByDesc('rataRataDatang')->take(10);
        return $smp19;
}

///////////////////////////////////////////////////////////////////////////

function datangsmp2()
{
        $smp2 = Smp2::all();
        $smp2->map(function($smp2){
            $smp2->rataRataDatang = $smp2->rataRataDatang();
            return $smp2;
        });
        
        $smp2 = $smp2->sortByDesc('rataRataDatang')->take(10);
        return $smp2;
}

function datangsmp27()
{
        $smp27 = Smp27::all();
        $smp27->map(function($smp27){
            $smp27->rataRataDatang = $smp27->rataRataDatang();
            return $smp27;
        });
        
        $smp27 = $smp27->sortByDesc('rataRataDatang')->take(10);
        return $smp27;
}

function datangsmp28()
{
        $smp28 = Smp28::all();
        $smp28->map(function($smp28){
            $smp28->rataRataDatang = $smp28->rataRataDatang();
            return $smp28;
        });
        
        $smp28 = $smp28->sortByDesc('rataRataDatang')->take(10);
        return $smp28;
}

function datangsmp29()
{
        $smp29 = Smp29::all();
        $smp29->map(function($smp29){
            $smp29->rataRataDatang = $smp29->rataRataDatang();
            return $smp29;
        });
        
        $smp29 = $smp29->sortByDesc('rataRataDatang')->take(10);
        return $smp29;
}

////////////////////////////////////////////////////////////////////////

function datangmts()
{
        $mts = Mts::all();
        $mts->map(function($mts){
            $mts->rataRataDatang = $mts->rataRataDatang();
            return $mts;
        });
        
        $mts = $mts->sortByDesc('rataRataDatang')->take(10);
        return $mts;
}

function datangmts7()
{
        $mts7 = Mts7::all();
        $mts7->map(function($mts7){
            $mts7->rataRataDatang = $mts7->rataRataDatang();
            return $mts7;
        });
        
        $mts7 = $mts7->sortByDesc('rataRataDatang')->take(10);
        return $mts7;
}

function datangmts8()
{
        $mts8 = Mts8::all();
        $mts8->map(function($mts8){
            $mts8->rataRataDatang = $mts8->rataRataDatang();
            return $mts8;
        });
        
        $mts8 = $mts8->sortByDesc('rataRataDatang')->take(10);
        return $mts8;
}

function datangmts9()
{
        $mts9 = Mts9::all();
        $mts9->map(function($mts9){
            $mts9->rataRataDatang = $mts9->rataRataDatang();
            return $mts9;
        });
        
        $mts9 = $mts9->sortByDesc('rataRataDatang')->take(10);
        return $mts9;
}

////////////////////////////////////////////////////////////////////////////

function datangsmktkj()
{
        $smktkj = Smktkj::all();
        $smktkj->map(function($smktkj){
            $smktkj->rataRataDatang = $smktkj->rataRataDatang();
            return $smktkj;
        });
        
        $smktkj = $smktkj->sortByDesc('rataRataDatang')->take(10);
        return $smktkj;
}

function datangsmktkj10()
{
        $smktkj10 = Smktkj10::all();
        $smktkj10->map(function($smktkj10){
            $smktkj10->rataRataDatang = $smktkj10->rataRataDatang();
            return $smktkj10;
        });
        
        $smktkj10 = $smktkj10->sortByDesc('rataRataDatang')->take(10);
        return $smktkj10;
}

function datangsmktkj11()
{
        $smktkj11 = Smktkj11::all();
        $smktkj11->map(function($smktkj11){
            $smktkj11->rataRataDatang = $smktkj11->rataRataDatang();
            return $smktkj11;
        });
        
        $smktkj11 = $smktkj11->sortByDesc('rataRataDatang')->take(10);
        return $smktkj11;
}

function datangsmktkj12()
{
        $smktkj12 = Smktkj12::all();
        $smktkj12->map(function($smktkj12){
            $smktkj12->rataRataDatang = $smktkj12->rataRataDatang();
            return $smktkj12;
        });
        
        $smktkj12 = $smktkj12->sortByDesc('rataRataDatang')->take(10);
        return $smktkj12;
}

///////////////////////////////////////////////////////////////////////////////////////////

function datangsmktkr()
{
        $smktkr = Smktkr::all();
        $smktkr->map(function($smktkr){
            $smktkr->rataRataDatang = $smktkr->rataRataDatang();
            return $smktkr;
        });
        
        $smktkr = $smktkr->sortByDesc('rataRataDatang')->take(10);
        return $smktkr;
}

function datangsmktkr10()
{
        $smktkr10 = Smktkr10::all();
        $smktkr10->map(function($smktkr10){
            $smktkr10->rataRataDatang = $smktkr10->rataRataDatang();
            return $smktkr10;
        });
        
        $smktkr10 = $smktkr10->sortByDesc('rataRataDatang')->take(10);
        return $smktkr10;
}

function datangsmktkr11()
{
        $smktkr11 = Smktkr11::all();
        $smktkr11->map(function($smktkr11){
            $smktkr11->rataRataDatang = $smktkr11->rataRataDatang();
            return $smktkr11;
        });
        
        $smktkr11 = $smktkr11->sortByDesc('rataRataDatang')->take(10);
        return $smktkr11;
}

function datangsmktkr12()
{
        $smktkr12 = Smktkr12::all();
        $smktkr12->map(function($smktkr12){
            $smktkr12->rataRataDatang = $smktkr12->rataRataDatang();
            return $smktkr12;
        });
        
        $smktkr12 = $smktkr12->sortByDesc('rataRataDatang')->take(10);
        return $smktkr12;
}

/////////////////////////////////////////////////////////////////////////////////////////

function datangma()
{
        $ma = Ma::all();
        $ma->map(function($ma){
            $ma->rataRataDatang = $ma->rataRataDatang();
            return $ma;
        });
        
        $ma = $ma->sortByDesc('rataRataDatang')->take(10);
        return $ma;
}

function datangma10()
{
        $ma10 = Ma10::all();
        $ma10->map(function($ma10){
            $ma10->rataRataDatang = $ma10->rataRataDatang();
            return $ma10;
        });
        
        $ma10 = $ma10->sortByDesc('rataRataDatang')->take(10);
        return $ma10;
}

function datangma11()
{
        $ma11 = Ma11::all();
        $ma11->map(function($ma11){
            $ma11->rataRataDatang = $ma11->rataRataDatang();
            return $ma11;
        });
        
        $ma11 = $ma11->sortByDesc('rataRataDatang')->take(10);
        return $ma11;
}

function datangma12()
{
        $ma12 = Ma12::all();
        $ma12->map(function($ma12){
            $ma12->rataRataDatang = $ma12->rataRataDatang();
            return $ma12;
        });
        
        $ma12 = $ma12->sortByDesc('rataRataDatang')->take(10);
        return $ma12;
}

/////////////////////////////////////////////////////////////////////////////////////////////////

function datangmahadaly()
{
        $mahadaly = Mahadaly::all();
        $mahadaly->map(function($mahadaly){
            $mahadaly->rataRataDatang = $mahadaly->rataRataDatang();
            return $mahadaly;
        });
        
        $mahadaly = $mahadaly->sortByDesc('rataRataDatang')->take(10);
        return $mahadaly;
}

function datangmahadaly1()
{
        $mahadaly1 = Mahadaly1::all();
        $mahadaly1->map(function($mahadaly1){
            $mahadaly1->rataRataDatang = $mahadaly1->rataRataDatang();
            return $mahadaly1;
        });
        
        $mahadaly1 = $mahadaly1->sortByDesc('rataRataDatang')->take(10);
        return $mahadaly1;
}

function datangmahadaly2()
{
        $mahadaly2 = Mahadaly2::all();
        $mahadaly2->map(function($mahadaly2){
            $mahadaly2->rataRataDatang = $mahadaly2->rataRataDatang();
            return $mahadaly2;
        });
        
        $mahadaly2 = $mahadaly2->sortByDesc('rataRataDatang')->take(10);
        return $mahadaly2;
}

function datangmahadaly3()
{
        $mahadaly3 = Mahadaly3::all();
        $mahadaly3->map(function($mahadaly3){
            $mahadaly3->rataRataDatang = $mahadaly3->rataRataDatang();
            return $mahadaly3;
        });
        
        $mahadaly3 = $mahadaly3->sortByDesc('rataRataDatang')->take(10);
        return $mahadaly3;
}

function datangmahadaly4()
{
        $mahadaly4 = Mahadaly4::all();
        $mahadaly4->map(function($mahadaly4){
            $mahadaly4->rataRataDatang = $mahadaly4->rataRataDatang();
            return $mahadaly4;
        });
        
        $mahadaly4 = $mahadaly4->sortByDesc('rataRataDatang')->take(10);
        return $mahadaly4;
}
/////////////////////////////////////////////////////////////////////////////////////////////////

function datangsalaf()
{
        $salaf = Salaf::all();
        $salaf->map(function($salaf){
            $salaf->rataRataDatang = $salaf->rataRataDatang();
            return $salaf;
        });
        
        $salaf = $salaf->sortByDesc('rataRataDatang')->take(10);
        return $salaf;
}

function datangsiswa()
{
        $siswa = Siswa::all();
        $siswa->map(function($siswa){
            $siswa->rataRataDatang = $siswa->rataRataDatang();
            return $siswa;
        });
        
        $siswa = $siswa->sortByDesc('rataRataDatang')->take(10);
        return $siswa;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////                            AMBIL                           //////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function keterangansmp1()
{
        $smp1 = Smp1::all();
        $smp1->map(function($smp1){
            $smp1->rataRataKeterangan = $smp1->rataRataKeterangan();
            return $smp1;
        });
        
        $smp1 = $smp1->sortByDesc('rataRataKeterangan')->take(400);
        return $smp1;
}

function keterangansmp17()
{
        $smp17 = Smp17::all();
        $smp17->map(function($smp17){
            $smp17->rataRataKeterangan = $smp17->rataRataKeterangan();
            return $smp17;
        });
        
        $smp17 = $smp17->sortByDesc('rataRataKeterangan')->take(400);
        return $smp17;
}

function keterangansmp18()
{
        $smp18 = Smp18::all();
        $smp18->map(function($smp18){
            $smp18->rataRataKeterangan = $smp18->rataRataKeterangan();
            return $smp18;
        });
        
        $smp18 = $smp18->sortByDesc('rataRataKeterangan')->take(10);
        return $smp18;
}

function keterangansmp19()
{
        $smp19 = Smp19::all();
        $smp19->map(function($smp19){
            $smp19->rataRataKeterangan = $smp19->rataRataKeterangan();
            return $smp19;
        });
        
        $smp19 = $smp19->sortByDesc('rataRataKeterangan')->take(10);
        return $smp19;
}

///////////////////////////////////////////////////////////////////////////

function keterangansmp2()
{
        $smp2 = Smp2::all();
        $smp2->map(function($smp2){
            $smp2->rataRataKeterangan = $smp2->rataRataKeterangan();
            return $smp2;
        });
        
        $smp2 = $smp2->sortByDesc('rataRataKeterangan')->take(300);
        return $smp2;
}

function keterangansmp27()
{
        $smp27 = Smp27::all();
        $smp27->map(function($smp27){
            $smp27->rataRataKeterangan = $smp27->rataRataKeterangan();
            return $smp27;
        });
        
        $smp27 = $smp27->sortByDesc('rataRataKeterangan')->take(300);
        return $smp27;
}

function keterangansmp28()
{
        $smp28 = Smp28::all();
        $smp28->map(function($smp28){
            $smp28->rataRataKeterangan = $smp28->rataRataKeterangan();
            return $smp28;
        });
        
        $smp28 = $smp28->sortByDesc('rataRataKeterangan')->take(10);
        return $smp28;
}

function keterangansmp29()
{
        $smp29 = Smp29::all();
        $smp29->map(function($smp29){
            $smp29->rataRataKeterangan = $smp29->rataRataKeterangan();
            return $smp29;
        });
        
        $smp29 = $smp29->sortByDesc('rataRataKeterangan')->take(10);
        return $smp29;
}

////////////////////////////////////////////////////////////////////////

function keteranganmts()
{
        $mts = Mts::all();
        $mts->map(function($mts){
            $mts->rataRataKeterangan = $mts->rataRataKeterangan();
            return $mts;
        });
        
        $mts = $mts->sortByDesc('rataRataKeterangan')->take(300);
        return $mts;
}

function keteranganmts7()
{
        $mts7 = Mts7::all();
        $mts7->map(function($mts7){
            $mts7->rataRataKeterangan = $mts7->rataRataKeterangan();
            return $mts7;
        });
        
        $mts7 = $mts7->sortByDesc('rataRataKeterangan')->take(300);
        return $mts7;
}

function keteranganmts8()
{
        $mts8 = Mts8::all();
        $mts8->map(function($mts8){
            $mts8->rataRataKeterangan = $mts8->rataRataKeterangan();
            return $mts8;
        });
        
        $mts8 = $mts8->sortByDesc('rataRataKeterangan')->take(10);
        return $mts8;
}

function keteranganmts9()
{
        $mts9 = Mts9::all();
        $mts9->map(function($mts9){
            $mts9->rataRataKeterangan = $mts9->rataRataKeterangan();
            return $mts9;
        });
        
        $mts9 = $mts9->sortByDesc('rataRataKeterangan')->take(10);
        return $mts9;
}

////////////////////////////////////////////////////////////////////////////

function keterangansmktkj()
{
        $smktkj = Smktkj::all();
        $smktkj->map(function($smktkj){
            $smktkj->rataRataKeterangan = $smktkj->rataRataKeterangan();
            return $smktkj;
        });
        
        $smktkj = $smktkj->sortByDesc('rataRataKeterangan')->take(100);
        return $smktkj;
}

function keterangansmktkj10()
{
        $smktkj10 = Smktkj10::all();
        $smktkj10->map(function($smktkj10){
            $smktkj10->rataRataKeterangan = $smktkj10->rataRataKeterangan();
            return $smktkj10;
        });
        
        $smktkj10 = $smktkj10->sortByDesc('rataRataKeterangan')->take(100);
        return $smktkj10;
}

function keterangansmktkj11()
{
        $smktkj11 = Smktkj11::all();
        $smktkj11->map(function($smktkj11){
            $smktkj11->rataRataKeterangan = $smktkj11->rataRataKeterangan();
            return $smktkj11;
        });
        
        $smktkj11 = $smktkj11->sortByDesc('rataRataKeterangan')->take(10);
        return $smktkj11;
}

function keterangansmktkj12()
{
        $smktkj12 = Smktkj12::all();
        $smktkj12->map(function($smktkj12){
            $smktkj12->rataRataKeterangan = $smktkj12->rataRataKeterangan();
            return $smktkj12;
        });
        
        $smktkj12 = $smktkj12->sortByDesc('rataRataKeterangan')->take(10);
        return $smktkj12;
}

///////////////////////////////////////////////////////////////////////////////////////////

function keterangansmktkr()
{
        $smktkr = Smktkr::all();
        $smktkr->map(function($smktkr){
            $smktkr->rataRataKeterangan = $smktkr->rataRataKeterangan();
            return $smktkr;
        });
        
        $smktkr = $smktkr->sortByDesc('rataRataKeterangan')->take(100);
        return $smktkr;
}

function keterangansmktkr10()
{
        $smktkr10 = Smktkr10::all();
        $smktkr10->map(function($smktkr10){
            $smktkr10->rataRataKeterangan = $smktkr10->rataRataKeterangan();
            return $smktkr10;
        });
        
        $smktkr10 = $smktkr10->sortByDesc('rataRataKeterangan')->take(100);
        return $smktkr10;
}

function keterangansmktkr11()
{
        $smktkr11 = Smktkr11::all();
        $smktkr11->map(function($smktkr11){
            $smktkr11->rataRataKeterangan = $smktkr11->rataRataKeterangan();
            return $smktkr11;
        });
        
        $smktkr11 = $smktkr11->sortByDesc('rataRataKeterangan')->take(10);
        return $smktkr11;
}

function keterangansmktkr12()
{
        $smktkr12 = Smktkr12::all();
        $smktkr12->map(function($smktkr12){
            $smktkr12->rataRataKeterangan = $smktkr12->rataRataKeterangan();
            return $smktkr12;
        });
        
        $smktkr12 = $smktkr12->sortByDesc('rataRataKeterangan')->take(10);
        return $smktkr12;
}

/////////////////////////////////////////////////////////////////////////////////////////

function keteranganma()
{
        $ma = Ma::all();
        $ma->map(function($ma){
            $ma->rataRataKeterangan = $ma->rataRataKeterangan();
            return $ma;
        });
        
        $ma = $ma->sortByDesc('rataRataKeterangan')->take(200);
        return $ma;
}

function keteranganma10()
{
        $ma10 = Ma10::all();
        $ma10->map(function($ma10){
            $ma10->rataRataKeterangan = $ma10->rataRataKeterangan();
            return $ma10;
        });
        
        $ma10 = $ma10->sortByDesc('rataRataKeterangan')->take(200);
        return $ma10;
}

function keteranganma11()
{
        $ma11 = Ma11::all();
        $ma11->map(function($ma11){
            $ma11->rataRataKeterangan = $ma11->rataRataKeterangan();
            return $ma11;
        });
        
        $ma11 = $ma11->sortByDesc('rataRataKeterangan')->take(10);
        return $ma11;
}

function keteranganma12()
{
        $ma12 = Ma12::all();
        $ma12->map(function($ma12){
            $ma12->rataRataKeterangan = $ma12->rataRataKeterangan();
            return $ma12;
        });
        
        $ma12 = $ma12->sortByDesc('rataRataKeterangan')->take(10);
        return $ma12;
}

/////////////////////////////////////////////////////////////////////////////////////////////////

function keteranganmahadaly()
{
        $mahadaly = Mahadaly::all();
        $mahadaly->map(function($mahadaly){
            $mahadaly->rataRataKeterangan = $mahadaly->rataRataKeterangan();
            return $mahadaly;
        });
        
        $mahadaly = $mahadaly->sortByDesc('rataRataKeterangan')->take(10);
        return $mahadaly;
}

function keteranganmahadaly1()
{
        $mahadaly1 = Mahadaly1::all();
        $mahadaly1->map(function($mahadaly1){
            $mahadaly1->rataRataKeterangan = $mahadaly1->rataRataKeterangan();
            return $mahadaly1;
        });
        
        $mahadaly1 = $mahadaly1->sortByDesc('rataRataKeterangan')->take(10);
        return $mahadaly1;
}

function keteranganmahadaly2()
{
        $mahadaly2 = Mahadaly2::all();
        $mahadaly2->map(function($mahadaly2){
            $mahadaly2->rataRataKeterangan = $mahadaly2->rataRataKeterangan();
            return $mahadaly2;
        });
        
        $mahadaly2 = $mahadaly2->sortByDesc('rataRataKeterangan')->take(10);
        return $mahadaly2;
}

function keteranganmahadaly3()
{
        $mahadaly3 = Mahadaly3::all();
        $mahadaly3->map(function($mahadaly3){
            $mahadaly3->rataRataKeterangan = $mahadaly3->rataRataKeterangan();
            return $mahadaly3;
        });
        
        $mahadaly3 = $mahadaly3->sortByDesc('rataRataKeterangan')->take(10);
        return $mahadaly3;
}

function keteranganmahadaly4()
{
        $mahadaly4 = Mahadaly4::all();
        $mahadaly4->map(function($mahadaly4){
            $mahadaly4->rataRataKeterangan = $mahadaly4->rataRataKeterangan();
            return $mahadaly4;
        });
        
        $mahadaly4 = $mahadaly4->sortByDesc('rataRataKeterangan')->take(10);
        return $mahadaly4;
}
/////////////////////////////////////////////////////////////////////////////////////////////////

function keterangansalaf()
{
        $salaf = Salaf::all();
        $salaf->map(function($salaf){
            $salaf->rataRataKeterangan = $salaf->rataRataKeterangan();
            return $salaf;
        });
        
        $salaf = $salaf->sortByDesc('rataRataKeterangan')->take(10);
        return $salaf;
}

function keterangansiswa()
{
        $siswa = Siswa::all();
        $siswa->map(function($siswa){
            $siswa->rataRataKeterangan = $siswa->rataRataKeterangan();
            return $siswa;
        });
        
        $siswa = $siswa->sortByDesc('rataRataKeterangan')->take(10);
        return $siswa;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////                          PRESTASI                         //////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function notesmp1()
{
        $smp1 = Smp1::all();
        $smp1->map(function($smp1){
            $smp1->rataRataNote = $smp1->rataRataNote();
            return $smp1;
        });
        
        $smp1 = $smp1->sortByDesc('rataRataNote')->take(10);
        return $smp1;
}

function notesmp17()
{
        $smp17 = Smp17::all();
        $smp17->map(function($smp17){
            $smp17->rataRataNote = $smp17->rataRataNote();
            return $smp17;
        });
        
        $smp17 = $smp17->sortByDesc('rataRataNote')->take(10);
        return $smp17;
}

function notesmp18()
{
        $smp18 = Smp18::all();
        $smp18->map(function($smp18){
            $smp18->rataRataNote = $smp18->rataRataNote();
            return $smp18;
        });
        
        $smp18 = $smp18->sortByDesc('rataRataNote')->take(10);
        return $smp18;
}

function notesmp19()
{
        $smp19 = Smp19::all();
        $smp19->map(function($smp19){
            $smp19->rataRataNote = $smp19->rataRataNote();
            return $smp19;
        });
        
        $smp19 = $smp19->sortByDesc('rataRataNote')->take(10);
        return $smp19;
}

///////////////////////////////////////////////////////////////////////////

function notesmp2()
{
        $smp2 = Smp2::all();
        $smp2->map(function($smp2){
            $smp2->rataRataNote = $smp2->rataRataNote();
            return $smp2;
        });
        
        $smp2 = $smp2->sortByDesc('rataRataNote')->take(10);
        return $smp2;
}

function notesmp27()
{
        $smp27 = Smp27::all();
        $smp27->map(function($smp27){
            $smp27->rataRataNote = $smp27->rataRataNote();
            return $smp27;
        });
        
        $smp27 = $smp27->sortByDesc('rataRataNote')->take(10);
        return $smp27;
}

function notesmp28()
{
        $smp28 = Smp28::all();
        $smp28->map(function($smp28){
            $smp28->rataRataNote = $smp28->rataRataNote();
            return $smp28;
        });
        
        $smp28 = $smp28->sortByDesc('rataRataNote')->take(10);
        return $smp28;
}

function notesmp29()
{
        $smp29 = Smp29::all();
        $smp29->map(function($smp29){
            $smp29->rataRataNote = $smp29->rataRataNote();
            return $smp29;
        });
        
        $smp29 = $smp29->sortByDesc('rataRataNote')->take(10);
        return $smp29;
}

////////////////////////////////////////////////////////////////////////

function notemts()
{
        $mts = Mts::all();
        $mts->map(function($mts){
            $mts->rataRataNote = $mts->rataRataNote();
            return $mts;
        });
        
        $mts = $mts->sortByDesc('rataRataNote')->take(10);
        return $mts;
}

function notemts7()
{
        $mts7 = Mts7::all();
        $mts7->map(function($mts7){
            $mts7->rataRataNote = $mts7->rataRataNote();
            return $mts7;
        });
        
        $mts7 = $mts7->sortByDesc('rataRataNote')->take(10);
        return $mts7;
}

function notemts8()
{
        $mts8 = Mts8::all();
        $mts8->map(function($mts8){
            $mts8->rataRataNote = $mts8->rataRataNote();
            return $mts8;
        });
        
        $mts8 = $mts8->sortByDesc('rataRataNote')->take(10);
        return $mts8;
}

function notemts9()
{
        $mts9 = Mts9::all();
        $mts9->map(function($mts9){
            $mts9->rataRataNote = $mts9->rataRataNote();
            return $mts9;
        });
        
        $mts9 = $mts9->sortByDesc('rataRataNote')->take(10);
        return $mts9;
}

////////////////////////////////////////////////////////////////////////////

function notesmktkj()
{
        $smktkj = Smktkj::all();
        $smktkj->map(function($smktkj){
            $smktkj->rataRataNote = $smktkj->rataRataNote();
            return $smktkj;
        });
        
        $smktkj = $smktkj->sortByDesc('rataRataNote')->take(10);
        return $smktkj;
}

function notesmktkj10()
{
        $smktkj10 = Smktkj10::all();
        $smktkj10->map(function($smktkj10){
            $smktkj10->rataRataNote = $smktkj10->rataRataNote();
            return $smktkj10;
        });
        
        $smktkj10 = $smktkj10->sortByDesc('rataRataNote')->take(10);
        return $smktkj10;
}

function notesmktkj11()
{
        $smktkj11 = Smktkj11::all();
        $smktkj11->map(function($smktkj11){
            $smktkj11->rataRataNote = $smktkj11->rataRataNote();
            return $smktkj11;
        });
        
        $smktkj11 = $smktkj11->sortByDesc('rataRataNote')->take(10);
        return $smktkj11;
}

function notesmktkj12()
{
        $smktkj12 = Smktkj12::all();
        $smktkj12->map(function($smktkj12){
            $smktkj12->rataRataNote = $smktkj12->rataRataNote();
            return $smktkj12;
        });
        
        $smktkj12 = $smktkj12->sortByDesc('rataRataNote')->take(10);
        return $smktkj12;
}

///////////////////////////////////////////////////////////////////////////////////////////

function notesmktkr()
{
        $smktkr = Smktkr::all();
        $smktkr->map(function($smktkr){
            $smktkr->rataRataNote = $smktkr->rataRataNote();
            return $smktkr;
        });
        
        $smktkr = $smktkr->sortByDesc('rataRataNote')->take(10);
        return $smktkr;
}

function notesmktkr10()
{
        $smktkr10 = Smktkr10::all();
        $smktkr10->map(function($smktkr10){
            $smktkr10->rataRataNote = $smktkr10->rataRataNote();
            return $smktkr10;
        });
        
        $smktkr10 = $smktkr10->sortByDesc('rataRataNote')->take(10);
        return $smktkr10;
}

function notesmktkr11()
{
        $smktkr11 = Smktkr11::all();
        $smktkr11->map(function($smktkr11){
            $smktkr11->rataRataNote = $smktkr11->rataRataNote();
            return $smktkr11;
        });
        
        $smktkr11 = $smktkr11->sortByDesc('rataRataNote')->take(10);
        return $smktkr11;
}

function notesmktkr12()
{
        $smktkr12 = Smktkr12::all();
        $smktkr12->map(function($smktkr12){
            $smktkr12->rataRataNote = $smktkr12->rataRataNote();
            return $smktkr12;
        });
        
        $smktkr12 = $smktkr12->sortByDesc('rataRataNote')->take(10);
        return $smktkr12;
}

/////////////////////////////////////////////////////////////////////////////////////////

function notema()
{
        $ma = Ma::all();
        $ma->map(function($ma){
            $ma->rataRataNote = $ma->rataRataNote();
            return $ma;
        });
        
        $ma = $ma->sortByDesc('rataRataNote')->take(10);
        return $ma;
}

function notema10()
{
        $ma10 = Ma10::all();
        $ma10->map(function($ma10){
            $ma10->rataRataNote = $ma10->rataRataNote();
            return $ma10;
        });
        
        $ma10 = $ma10->sortByDesc('rataRataNote')->take(10);
        return $ma10;
}

function notema11()
{
        $ma11 = Ma11::all();
        $ma11->map(function($ma11){
            $ma11->rataRataNote = $ma11->rataRataNote();
            return $ma11;
        });
        
        $ma11 = $ma11->sortByDesc('rataRataNote')->take(10);
        return $ma11;
}

function notema12()
{
        $ma12 = Ma12::all();
        $ma12->map(function($ma12){
            $ma12->rataRataNote = $ma12->rataRataNote();
            return $ma12;
        });
        
        $ma12 = $ma12->sortByDesc('rataRataNote')->take(10);
        return $ma12;
}

/////////////////////////////////////////////////////////////////////////////////////////////////

function notemahadaly()
{
        $mahadaly = Mahadaly::all();
        $mahadaly->map(function($mahadaly){
            $mahadaly->rataRataNote = $mahadaly->rataRataNote();
            return $mahadaly;
        });
        
        $mahadaly = $mahadaly->sortByDesc('rataRataNote')->take(10);
        return $mahadaly;
}

function notemahadaly1()
{
        $mahadaly1 = Mahadaly1::all();
        $mahadaly1->map(function($mahadaly1){
            $mahadaly1->rataRataNote = $mahadaly1->rataRataNote();
            return $mahadaly1;
        });
        
        $mahadaly1 = $mahadaly1->sortByDesc('rataRataNote')->take(10);
        return $mahadaly1;
}

function notemahadaly2()
{
        $mahadaly2 = Mahadaly2::all();
        $mahadaly2->map(function($mahadaly2){
            $mahadaly2->rataRataNote = $mahadaly2->rataRataNote();
            return $mahadaly2;
        });
        
        $mahadaly2 = $mahadaly2->sortByDesc('rataRataNote')->take(10);
        return $mahadaly2;
}

function notemahadaly3()
{
        $mahadaly3 = Mahadaly3::all();
        $mahadaly3->map(function($mahadaly3){
            $mahadaly3->rataRataNote = $mahadaly3->rataRataNote();
            return $mahadaly3;
        });
        
        $mahadaly3 = $mahadaly3->sortByDesc('rataRataNote')->take(10);
        return $mahadaly3;
}

function notemahadaly4()
{
        $mahadaly4 = Mahadaly4::all();
        $mahadaly4->map(function($mahadaly4){
            $mahadaly4->rataRataNote = $mahadaly4->rataRataNote();
            return $mahadaly4;
        });
        
        $mahadaly4 = $mahadaly4->sortByDesc('rataRataNote')->take(10);
        return $mahadaly4;
}
/////////////////////////////////////////////////////////////////////////////////////////////////

function notesalaf()
{
        $salaf = Salaf::all();
        $salaf->map(function($salaf){
            $salaf->rataRataNote = $salaf->rataRataNote();
            return $salaf;
        });
        
        $salaf = $salaf->sortByDesc('rataRataNote')->take(10);
        return $salaf;
}

function notesiswa()
{
        $siswa = Siswa::all();
        $siswa->map(function($siswa){
            $siswa->rataRataNote = $siswa->rataRataNote();
            return $siswa;
        });
        
        $siswa = $siswa->sortByDesc('rataRataNote')->take(10);
        return $siswa;
}

