<?php

namespace App\Http\Controllers;
use App\Models\VerifiedModel;
use Illuminate\Http\Request;

class VerifiedController extends Controller
{
    public function __construct()
    {
        $this->VerifiedModel = new VerifiedModel();
    }

    public function verified()
    {
        $data = [
             'verified' => $this->VerifiedModel->verifieds(),
        ];
        return view('AdminSektor.verified', $data);
    }
    public function detail($nrk)
    {
        $data = [
            'verified' => $this->VerifiedModel->details($nrk),
       ];
       return view('AdminSektor.detail3', $data);
    }
}
