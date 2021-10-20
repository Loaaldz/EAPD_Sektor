<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProfileModel extends Model
{
    public function mastersektor()
    {
       return DB::table('master_pegawai')->get();
    }
}
