<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory;
    protected $fillable = ['product_models_id', 'category_models_id' ];
    public function categoryJoinCart () {
        return $this->belongsTo(UserModel::class, 'category_models_id');
    }
    public function productJoinCart () {
        return $this->belongsTo(UserModel::class, 'product_models_id');
    }
}
