<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function show(Request $request) {
        if($request->input('campaign') == 'austria'){

            return view('austria', [
                'banner_image_path' => config('austria_vpn_details.banner_image_path'),
                'banner_title' => config('austria_vpn_details.banner_title'),
                'banner_text' => config('austria_vpn_details.banner_text'),
                'banner_start_free_trial' => config('austria_vpn_details.banner_start_free_trial'),

                'section_one_title' => config('austria_vpn_details.section_one_title'),
                'section_one_text' => config('austria_vpn_details.section_one_text'),
                'section_one_step_one' => config('austria_vpn_details.section_one_step_one'),
                'section_one_step_two' => config('austria_vpn_details.section_one_step_two'),
                'section_one_step_three' => config('austria_vpn_details.section_one_step_three'),

                'section_two_title' => config('austria_vpn_details.section_two_title'),
                'section_two_top_text' => config('austria_vpn_details.section_two_top_text'),
                'section_two_image_path' => config('austria_vpn_details.section_two_image_path'),
                'section_two_bottom_text' => config('austria_vpn_details.section_two_bottom_text'),

                'section_three_image_path' => config('austria_vpn_details.section_three_image_path'),
                'section_three_title' => config('austria_vpn_details.section_three_title'),
                'section_three_text' => config('austria_vpn_details.section_three_text'),
                ]);
        }

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
