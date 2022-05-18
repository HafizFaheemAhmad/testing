<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Rate;
use Illuminate\Http\Request;
use OTIFSolutions\CurlHandler\Curl;
use Illuminate\Support\Str;


class CurrencyController extends Controller
{
    public function currency()
    {
        $endpoint = 'live';
        $access_key = 'd953df5e96a8ed992b2afae91155d69b';
        $response = Curl::Make()->GET->url('http://api.currencylayer.com/' . $endpoint . '?access_key=' . $access_key . '')->execute();

        foreach ($response['quotes'] as $key => $value) {
            $code = Currency::firstOrCreate([
                'code' => str::substr($key, 3),
                'status' => 'active'
            ]);


        }
        return $code->save();
        return view(
            'dashboard.currencies',
            ['result' => true]
        )->with('currencies', $code);
    }

    public function index()
    {
        $currencies = Currency::all();
        return view(
            'dashboard.currencies',
            ['result' => true]
        )->with('currencies', $currencies);
    }

    // public function rates()
    // {
    //     $endpoint = 'live';
    //     $access_key = 'd953df5e96a8ed992b2afae91155d69b';
    //     $response = Curl::Make()->GET->url('http://api.currencylayer.com/' . $endpoint . '?access_key=' . $access_key . '')->execute();
    //     foreach ($response['quotes'] as $key => $value) {
    //         $currency = Currency::where('codes', str::substr($key, 3))->first();
    //         $rate = Rate::Create([
    //             'rates' => $value,
    //             'status' => 'active',
    //             'currency_id' => $currency->id,
    //         ]);
    //         $rate->save();
    //     }
    //     dd($rate);
    //     return view(
    //         'dashboard.currencies',
    //         ['result' => true]
    //     );
    // }
}
