<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    protected $casts = [
        
        'password' => 'hashed',
    ];

    public function userjoin() {
        return $this->hasmany(PriceModel::class, 'user_models_id');
    }
}

