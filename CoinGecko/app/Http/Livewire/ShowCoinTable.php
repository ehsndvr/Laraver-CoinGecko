<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Illuminate\Support\Facades\Http;

class ShowCoinTable extends Component
{
    public $Responses;
    public $PagesCount;
    public $PerPage = 20;
    public $CurrentPage;
    public $intCount;
    public function render()
    {
        $CoinGeckoClient = new CoinGeckoClient();
        $this->CurrentPage = ($this->CurrentPage == '') ? (request()->page ?: 1) : $this->CurrentPage;
        $this->Responses = $CoinGeckoClient->coins()->getMarkets("usd", ["order" => "market_cap_desc", "per_page" => $this->PerPage, "page" => $this->CurrentPage]);
        preg_match("/[0-9]{4,}/m", Http::get("https://www.coingecko.com/en/overall_stats")->body(), $this->PagesCount);
        $this->PagesCount =  intval($this->PagesCount[0] / $this->PerPage);
        return view('livewire.show-coin-table');
    }
}
