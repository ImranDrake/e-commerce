<?php

namespace App\Http\Livewire;

use App\Models\CartModel;
use App\Models\CategoryModel;
use App\Models\ColorModel;
use App\Models\PriceModel;
use App\Models\ProductModel;
use App\Models\SizeModel;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Console\View\Components\Alert;
use Livewire\Livewire;

class Comments extends Component
{
    
    public $products;
    public $sizes; 
    public $colors;
    public $categorys;
    public $search = '';
    
    public $cartItem;

     public $price1 = [];
    public function mount () {
      $this->price1 = PriceModel::all();
      $this->colors = ColorModel::all();
      $this->sizes = SizeModel::all();
      $this->categorys = CategoryModel::all();
      $this->cartItem = CartModel::count();
      //dd($this->search);
    }

    public $user_id;
    public $product_id;

    
    public function addToCart($productId) {
      //dd('testing');
      if(auth()->check()){
        $this->user_id = Auth()->user()->id;
        $this->product_id=$productId;
        CartModel::create([
          'product_models_id'=>$this->product_id,
          'category_models_id'=>$this->user_id]);
        }
        else {
          return('Log in to Add to Cart');
     }
  }
    
    
    public function render()
    {
        $this->products = ProductModel::where('product', 'like', '%'.$this->search.'%')->get();
        return view('livewire.comments');
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
}
