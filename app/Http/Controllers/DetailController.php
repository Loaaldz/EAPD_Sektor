<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailModel;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function detail($id) {
        $newdata = DB::select('select d.Kd_Panggil, d.Pos_Penjagaan,d.No_Telepon, d.Alamat,d.Wilayah from master_sektor m join detail_sektor d on m.kode_sektor = d.kode_sektor');

        dd($newdata);
    // return view ('namaview',[
    //     'variabellu'=> $newdata
    // ]);

    }
}
