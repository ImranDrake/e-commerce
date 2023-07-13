<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $fillable = [ 'category' ];

    public function categoryjoinProduct() {
        return $this->hasmany(PriceModel::class, 'category_models_id');
    }
    public function categoryjoinCart() {
        return $this->hasmany(CartModel::class, 'cart_models_id');
    }
}
