<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Currency;
use App\Models\Rate;
use Illuminate\Http\Request;
use OTIFSolutions\CurlHandler\Curl;
use Illuminate\Support\Str;

class SyncCurrencies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:currencies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'for update rates';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $endpoint = 'live';
        $access_key = 'd953df5e96a8ed992b2afae91155d69b';
        $response = Curl::Make()->GET->url('http://api.currencylayer.com/' . $endpoint . '?access_key=' . $access_key . '')->execute();
        foreach ($response['quotes'] as $key => $value) {
            $currency = Currency::where('code', str::substr($key, 3))->first();
            $rate = Rate::Create([
                'rate' => $value,
                'status' => 'active',
                'currency_id' => $currency->id,
            ]);
            $rate->save();
        }
    }
}
