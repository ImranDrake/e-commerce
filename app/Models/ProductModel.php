<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'product',
    ];
    public function productjoin() {
        return $this->hasmany(PriceModel::class, 'product_models_id');
    }
    public function productjoinCart() {
        return $this->hasmany(CartModel::class, 'product_models_id');
    }
}
