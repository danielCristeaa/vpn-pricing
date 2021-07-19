<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    /*
     * Method for setting cookies and calculating prices.
     * It returns an array with the prices for one month, one year and three years
     */
    private function setCookiesAndPrices(Request $request) {
        //check the user's operating system and get the correct prices
        if(strpos($_SERVER['HTTP_USER_AGENT'], 'Windows') !== false) {
            $oneMonthPrice = config('vpn_prices.windows_price_one_month');
            $oneYearPrice = config('vpn_prices.windows_price_one_year');
            $threeYearsPrice = config('vpn_prices.windows_price_three_years');
        }
        else {
            $oneMonthPrice = config('vpn_prices.linux_price_one_month');
            $oneYearPrice = config('vpn_prices.linux_price_one_year');
            $threeYearsPrice = config('vpn_prices.linux_price_three_years');
        }

        //check if query parameters contain 'source' and set the cookie if it does not already exist
        if($request->input('source') && array_key_exists('source', $_COOKIE) == false) {
            setcookie('source', $request->input('source'), 0, '/');
        }

        //check if query parameters contain 'campaign' and set the cookie if it does not already exist
        if($request->input('campaign') && array_key_exists('campaign', $_COOKIE) == false) {
            setcookie('campaign', $request->input('campaign'), 0, '/');
        }

        //check for 'voucher' in the query parameters and calculate the prices
        if($request->input('voucher')) {
            $queryVoucher = $request->input('voucher');
            if(config()->has("vouchers.$queryVoucher")) { //check if the voucher is valid
                $oneMonthPrice = $oneMonthPrice - (config("vouchers.$queryVoucher") / 100);
                $oneYearPrice = $oneYearPrice - (config("vouchers.$queryVoucher") / 100);
                $threeYearsPrice = $threeYearsPrice - (config("vouchers.$queryVoucher") / 100);
                setcookie('voucher', $queryVoucher, 0, '/');
            }
        }

        return [$oneMonthPrice, $oneYearPrice, $threeYearsPrice];
    }

    /*
     * Returns the 'austria' view with an array containing the text from austria_vpn_details config file
     * and the correct prices
     */
    public function showAustria(Request $request) {
        $prices = $this->setCookiesAndPrices($request);

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

            'section_four_image_path' => config('austria_vpn_details.section_four_image_path'),
            'section_four_title' => config('austria_vpn_details.section_four_title'),
            'section_four_text' => config('austria_vpn_details.section_four_text'),

            'oneMonthPrice' => $prices[0],
            'oneYearPrice' => $prices[1],
            'threeYearsPrice' => $prices[2]
        ]);

    }

    /*
     * Returns the 'premier_league' view with an array containing the text from premier_league_vpn_details config file
     * and the correct prices
     */
    public function showPremierLeague(Request $request) {
        $prices = $this->setCookiesAndPrices($request);

        return view('premier_league', [
            'banner_image_path' => config('premier_league_vpn_details.banner_image_path'),
            'banner_title' => config('premier_league_vpn_details.banner_title'),
            'banner_text' => config('premier_league_vpn_details.banner_text'),
            'banner_start_free_trial' => config('premier_league_vpn_details.banner_start_free_trial'),

            'section_one_title' => config('premier_league_vpn_details.section_one_title'),
            'section_one_text' => config('premier_league_vpn_details.section_one_text'),
            'section_one_step_one' => config('premier_league_vpn_details.section_one_step_one'),
            'section_one_step_one_subtext' => config('premier_league_vpn_details.section_one_step_one_subtext'),
            'section_one_step_two' => config('premier_league_vpn_details.section_one_step_two'),
            'section_one_step_two_subtext' => config('premier_league_vpn_details.section_one_step_two_subtext'),
            'section_one_step_three' => config('premier_league_vpn_details.section_one_step_three'),
            'section_one_step_three_subtext' => config('premier_league_vpn_details.section_one_step_three_subtext'),

            'section_two_title' => config('premier_league_vpn_details.section_two_title'),
            'section_two_top_text' => config('premier_league_vpn_details.section_two_top_text'),
            'section_two_image_path' => config('premier_league_vpn_details.section_two_image_path'),
            'section_two_bottom_text' => config('premier_league_vpn_details.section_two_bottom_text'),

            'section_three_image_path' => config('premier_league_vpn_details.section_three_image_path'),
            'section_three_title' => config('premier_league_vpn_details.section_three_title'),
            'section_three_text' => config('premier_league_vpn_details.section_three_text'),

            'section_four_image_path' => config('premier_league_vpn_details.section_four_image_path'),
            'section_four_title' => config('premier_league_vpn_details.section_four_title'),
            'section_four_text' => config('premier_league_vpn_details.section_four_text'),

            'oneMonthPrice' => $prices[0],
            'oneYearPrice' => $prices[1],
            'threeYearsPrice' => $prices[2]
        ]);

    }

    /*
     * Method for getting the user's location
     * It returns a JSON which contains the country of the user
     */
    public function determineLocation(){
        $userIP = $_SERVER['REMOTE_ADDR'];
        if($userIP == '127.0.0.1'){ //if accessed from localhost, localhost as the country
            return response()->json(['status' => 'success', 'country' => 'localhost']);
        }

        $response = Http::get("http://ip-api.com/json/$userIP")->json();
        return $response;
    }
}
