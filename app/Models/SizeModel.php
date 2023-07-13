<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'size',
    ];
    public function sizejoin() {
        return $this->hasmany(PriceModel::class, 'size_models_id');
    }
}
