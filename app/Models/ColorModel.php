<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorModel extends Model
{
    use HasFactory;
    protected $fillable = [ 'color' ];

    public function colorjoin() {
        return $this->hasmany(PriceModel::class, 'color_models_id');
    }
}
