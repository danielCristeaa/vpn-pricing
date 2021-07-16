<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function show($source, $campaign, $voucher) {

        return view('main');
    }

    public function determineLocation(){
        $userIP = $_SERVER['REMOTE_ADDR'];
        if($userIP == '127.0.0.1'){
            return response()->json(['status' => 'success', 'country' => 'localhost']);
        }

        $response = Http::get("http://ip-api.com/json/$userIP")->json();
        return $response;
    }
}
