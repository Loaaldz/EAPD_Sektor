<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DashboardModel extends Model
{
    public function petugas()
    {
       return DB::table('master_pegawai')->where('kode_pos','>=',4.14)->where('kode_pos','<',4.15)->get();
    }
    public function detaildata($NRK)
    {
        return DB::table('master_pegawai')->where('NRK', $NRK)->first();
    }

}
