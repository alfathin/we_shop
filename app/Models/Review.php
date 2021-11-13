<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'isi',
        'product_id',
        'user_id',
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
