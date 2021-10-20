<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VerifikasiModel extends Model
{
    public $table = "master_pegawai";
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $fillable = [
        'NIP',
        'NRK',
        'phl',
        'nama',
        'jabatan_id',
        'kode_pos',
        'no_telepon',
        'group_piket',
        ''
    ];

    public function verifikasi()
    {
        return DB::table('users')->get();
    }

    public function details($nrk)
    {
        return DB::table('users')
            ->leftJoin('apd', 'apd.nrk', '=', 'users.nrk')
            ->leftJoin('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
            ->leftJoin('master_kondisi', 'master_kondisi.id_mk', '=', 'apd.kondisi_id')
            ->leftJoin('master_status', 'master_status.id_stat', '=', 'apd.status_verifikasi')
            ->where('users.nrk',$nrk)
            ->get();
    }
    // public function showdata($apd_id)
    // {
    //     return DB::table('apd')
    //         ->leftJoin('users', 'users.nrk', '=', 'apd.nrk')
    //         ->leftJoin('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
    //         ->where('apd.apd_id',$apd_id)
    //         ->get();
    // }
}
