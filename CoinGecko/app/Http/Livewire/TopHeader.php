<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class TopHeader extends Component
{
    public $CoinsDetails;
    public function render()
    {
        $this->CoinsDetails = Http::get("https://www.coingecko.com/en/overall_stats")->body();
        return view('livewire.top-header');
    }
}
