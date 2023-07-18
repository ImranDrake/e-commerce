<?php

namespace App\Http\Livewire;

use App\Models\CategoryModel;
use App\Models\ColorModel;
use App\Models\PriceModel;
use App\Models\ProductModel;
use App\Models\SizeModel;
use Livewire\Component;
use Carbon\Carbon;

class Comments extends Component
{
    
    public $products;
    public $sizes; 
    public $colors;
    public $categorys;

     public $price1 = [];
    public function mount () {
      $this->price1 = PriceModel::all();
      $this->colors = ColorModel::all();
      $this->sizes = SizeModel::all();
      $this->products = ProductModel::all();
      
    }
  

    // public $comments = [
    //     [
    //         'body' => ' Comments lorem ipsum antibelo, atrite ensomnea frtre iptorium encaspe ',
    //         'created_at' => '3 mins ago',
    //         'Author' => 'Imran'
    //     ]
    //     ];
    //     public $initialcomment;

    //     public function addComment(){
    //         if($this->initialcomment == ''){
    //             return;
    //         }
    //         array_unshift($this->comments, [
    //             'body' => $this->initialcomment,
    //             'created_at' => Carbon::now()->diffForHumans(),
    //             'Author' => 'Sameer'
    //         ]);
    //         $this->initialcomment= "";
    //     }
    public function render()
    {
        return view('livewire.comments');
    }
}
