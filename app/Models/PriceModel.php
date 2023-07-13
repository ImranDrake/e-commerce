<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceModel extends Model
{
    use HasFactory;
    protected $fillable = [ 'imagepath', 'color_models_id', 'product_models_id', 'size_models_id', 'user_models_id', ];
    public function priceJoinUser () {
        return $this->belongsTo(UserModel::class, 'user_models_id');
    }
    public function priceJoinSize () {
        return $this->belongsTo(UserModel::class, 'size_models_id');
    }
    public function priceJoinProduct () {
        return $this->belongsTo(UserModel::class, 'product_models_id');
    }
    public function priceJoinColor () {
        return $this->belongsTo(UserModel::class, 'color_models_id');
    }
    public function priceJoinCategory () {
        return $this->belongsTo(UserModel::class, 'category_models_id');
    }

}
