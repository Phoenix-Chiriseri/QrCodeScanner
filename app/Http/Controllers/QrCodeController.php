<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Patient;

class QrCodeController extends Controller
{
    public function generateQrCode()
    {
        $url = "/form";
        $qrCode = QrCode::size(400)->generate($url);
        return view('welcome', compact('qrCode'));
    }

    public function showForm(){

        return view('form');
    }

    public function store(Request $request){    
        
    }
}
