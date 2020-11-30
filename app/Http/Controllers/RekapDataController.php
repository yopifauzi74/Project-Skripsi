<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\RekapData;
use DB;
use App\GangguanGizi;

class RekapDataController extends Controller
{
    //
    public function index()
    {
        $data = RekapData::get();
        // dd($data);
        return view ('rekap.index', compact('data'));
    }

    public function create()
    {
        $data = Pasien::select('id','first_name','last_name', 'age')->get();
        return view('rekap.create',compact('data'));
    }

    public function store(Request $request)
    {
        
        $rekap = new RekapData();
        $rekap->id_user = 1;
        $rekap->id_pasien = $request->id_pasien;
        $rekap->berat_badan = $request->berat_badan;
        $rekap->tinggi_badan = intval($request->tinggi_badan);
        $pasien = new Pasien();
        if(($pasien->age) < 60 && ($rekap->berat_badan) <= 12)
        {
            $rekap->remark = 'Gizi Buruk';
            
        }
        elseif(($pasien->age) < 60 && ($rekap->berat_badan) >= 12 && ($rekap->berat_badan) < 15 )
        {
            $rekap->remark = 'Gizi Kurang';
        }
        elseif(($pasien->age) < 60 && ($rekap->berat_badan) >= 14 && ($rekap->berat_badan) < 22 )
        {
            $rekap->remark = 'Gizi Baik';
        }
        elseif(($pasien->age) < 60 && ($rekap->berat_badan) >= 22 && ($rekap->berat_badan) < 25 )
        {
            $rekap->remark = 'Beresiko Gizi Lebih';
        }
        elseif(($pasien->age) < 60 && ($rekap->berat_badan) >= 24 && ($rekap->berat_badan) < 28 )
        {
            $rekap->remark = 'Gizi Lebih';
        }
        elseif(($pasien->age) < 60 && ($rekap->berat_badan) >27)
        {
            $rekap->remark = 'Obesitas';
        }

        if(($pasien->age) < 60 && ($rekap->tinggi_badan) < 97 )
        {
            $rekap->status = 'Sangat Beresiko (Stunted)';
        }
        elseif(($pasien->age) < 60 && ($rekap->tinggi_badan) > 97 && ($rekap->tinggi_badan) < 101 )
        {
            $rekap->status = 'Beresiko (Stunted)';
        }
        elseif(($pasien->age) < 60 && ($rekap->tinggi_badan) > 101 && ($rekap->tinggi_badan) < 124 )
        {
            $rekap->status = 'Tidak Beresiko';
        }
        elseif(($pasien->age) < 60 && ($rekap->tinggi_badan) > 124 )
        {
            $rekap->status = 'Sangat Tidak Beresiko';
        }
        
        // $rekap->tfu = intval($request->tfu);
        // $rekap->lila = intval($request->lila);
        // $rekap->haemoglobin = intval($request->haemoglobin);
        // $v = $rekap->berat_badan / $rekap->tinggi_badan;chr
        // $imt = ($v) * ($v);--!-29-08-2020-!--
        // $t = floatval($rekap->tinggi_badan) * floatval($rekap->tinggi_badan);
        // $imt = $rekap->berat_badan / $t;--!-31-08-2020-!--
        
            // $v = $rekap->berat_badan / ($rekap->tinggi_badan * $rekap->tinggi_badan) * 10000;
            // $imt = $v;
            // $rekap->imt = $imt;
            //     if(($rekap->imt) < 18.00)
            //         {
            //             $rekap->remark = 'Kurang';
            //         }
            //         elseif(($rekap->imt) >= 18.00 && ($rekap->imt) < 23.0)
            //         {
            //             $rekap->remark = 'Normal';
            //         }
            //         elseif(($rekap->imt) >= 24.00 && ($rekap->imt) <= 27.00)
            //         {
            //             $rekap->remark = 'Kegemukan';
            //         }
            //         elseif(($rekap->imt) > 27.00)
            //         {
            //             $rekap->remark = 'Obesitas';
            //         }
        
               
        $rekap->save();
        
        return redirect(route('rekap.index'))->with('success','success add data');
    }

    public function detail($id)
    {   

        $item = DB::table('rekap_data')
        ->select('rekap_data.id',
        'pasiens.first_name as FirstName',
        'pasiens.last_name as LastName', 
        'pasiens.age as Umur',
        'gangguan_gizis.nama_diagnosa as Diagnosa',
        'gangguan_gizis.penanganan as Penanganan', 
        'rekap_data.berat_badan as BeratBadan',
        'rekap_data.tinggi_badan as TinggiBadan',
        'rekap_data.remark as Remark',
        'rekap_data.status as Status')
        ->join('pasiens' , 'pasiens.id' , 'rekap_data.id_pasien')
        ->join('gangguan_gizis' , 'gangguan_gizis.id' , 'rekap_data.id_gangguan_gizi')
        ->where('rekap_data.id',$id)->get();
        
        // <!-- dd($item); -->

        if($item){
            return view('rekap.diagnosa',compact('item'));
        }


    
    }
    

    
}
