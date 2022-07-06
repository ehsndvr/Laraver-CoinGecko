<?php

namespace App\Http\Controllers\coin;

use App\Http\Controllers\Controller;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Exception;

class CoinController extends Controller
{
    public function index(string $CoinName)
    {
        try {
            $CoinGeckoClient = new CoinGeckoClient();
            $Response = $CoinGeckoClient->coins()->getCoin($CoinName, ['tickers' => 'true', 'market_data' => 'true']);
            //dd($Response);
            return view("coin.coin", compact("Response"));
        } catch (Exception $error) {
            return view("404");
        }
    }
}
