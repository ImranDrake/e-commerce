<?php

namespace App\Http\Livewire;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Database\Events\TransactionBeginning;
use Livewire\Component;

class Categorys extends Component
{
    public $search = 'Testing';
    public $items =[];
    public function render()
    {
        $this->items = ProductModel::get();
        $this->emit('updateSearch', $this->search);

        return view('livewire.categorys');
        // [
        //     'products' => ProductModel::when($this->search, function($query, $search){
        //         return $query->where('product', 'like', '%'.$this->search.'%');
        //     })
        // ]);
    }
    public $categorys;
    public function mount () {
        $this->categorys = CategoryModel::all();
    }
}
