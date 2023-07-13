<?php

namespace App\Http\Livewire;

use App\Models\PriceModel;
use Livewire\Component;
use Carbon\Carbon;

class Comments extends Component
{
     public $price1 = [];
    public function mount () {
      $this->price1 = PriceModel::all('price_models');
      
      // dd($this->price1);
    }
    public $comments = [
        [
            'body' => ' Comments lorem ipsum antibelo, atrite ensomnea frtre iptorium encaspe ',
            'created_at' => '3 mins ago',
            'Author' => 'Imran'
        ]
        ];
        public $initialcomment;

        public function addComment(){
            if($this->initialcomment == ''){
                return;
            }
            array_unshift($this->comments, [
                'body' => $this->initialcomment,
                'created_at' => Carbon::now()->diffForHumans(),
                'Author' => 'Sameer'
            ]);
            $this->initialcomment= "";
        }
    public function render()
    {
        return view('livewire.comments');
    }
}
