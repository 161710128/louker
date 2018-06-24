<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lowongan;
use App\Perusahaan;
class FrontendController extends Controller
{
    public function index()
    {
        $lowongan =  Lowongan::all();
        $perusahaan = perusahaan::all();
        return view('frontend.index', compact('lowongan','perusahaan'));
    }

    public function rincian_lowongan($id)
    {
        $lowongan =  Lowongan::find($id);
        return view('frontend.rincianlow', compact('lowongan'));
    }

    public function rincian_pers($id)
    {
        $perusahaan =  Perusahaan::find($id);
        return view('frontend.rincianpers', compact('perusahaan'));
    }
}
