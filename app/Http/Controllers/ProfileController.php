<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Illuminate\Http\Request;

class ProfileController extends Controller
{


    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
    }

    public function profile()
    {
        $data = [
            'sektor' => $this->ProfileModel->mastersektor(),
       ];
        return view('AdminSektor.profile', $data);
    }
}
