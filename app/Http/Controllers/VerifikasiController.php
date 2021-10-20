<?php

namespace App\Http\Controllers;
use App\Models\VerifikasiModel;
use Illuminate\Support\Facades\DB;
use App\Models\APD;

use Illuminate\Http\Request;

class VerifikasiController extends Controller
{

    public function __construct()
    {
        $this->VerifikasiModel = new VerifikasiModel();
    }

    public function verifikasi()
    {
        $data = [
             'verifikasi' => $this->VerifikasiModel->verifikasi(),
        ];
        return view('AdminSektor.verifikasi', $data);
    }
    public function detail($nrk)
    {
        $data = [
            'verifikasi' => $this->VerifikasiModel->details($nrk),
       ];
       return view('AdminSektor.detail2', $data);
    }


    public function edit($id){
        $edit = apd::findOrFail($id);
        $data = [
            'test' => $this->VerifikasiModel->details($id),
       ];
        return view('AdminSektor.updatedata', [
            'verifikasi' => $edit,
            'test'=> $data,
        ]);
    }


}
