<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VerifiedModel extends Model
{
    public function verifieds()
    {
        return DB::table('users')->get();
    }
    // public function details($nrk)
    // {
    //     return DB::table('users')->where('nrk', $nrk)->first();
    // }
    public function details($nrk)
    {
        return DB::table('users')
            ->leftJoin('apd', 'apd.nrk', '=', 'users.nrk')
            ->leftJoin('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
            ->leftJoin('master_kondisi', 'master_kondisi.id_mk', '=', 'apd.kondisi_id')
            ->leftJoin('master_status', 'master_status.id_stat', '=', 'apd.status_verifikasi')
            ->where('users.nrk', $nrk)
            ->get();
    }
}
