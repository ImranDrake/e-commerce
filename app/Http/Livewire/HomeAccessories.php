<?php

namespace App\Http\Livewire;

use App\Models\PriceModel;
use Livewire\Component;

class HomeAccessories extends Component
{
    public $price1 = [];
    public function mount () {
      $this->price1 = PriceModel::all('price_models');
      
      // dd($this->price1);
    }
    public function render()
    {
        return view('livewire.home-accessories');
    }
}
