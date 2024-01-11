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
        return response(QrCode::size(400)->generate($url));
    }

    public function showForm(){

        return view('form');
    }

    public function store(Request $request){

        
        
    }
}
