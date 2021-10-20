<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DetailModel extends Model
{
    public function detailData()
    {
      return DB::table('detail_sektor')->get();
    }
}
