<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashboardModel;

class DashboardController extends Controller
{


    public function __construct()
    {
        $this->DashboardModel = new DashboardModel();
    }

    public function dashboard()
    {
        $data = [
             'sektor' => $this->DashboardModel->petugas(),
        ];
        return view('AdminSektor.dashboard', $data);
    }

    public function detail($NRK)
    {
        $data = [
            'sektor' => $this->DashboardModel->detaildata($NRK),
       ];
       return view('AdminSektor.detail1', $data);
    }
}
