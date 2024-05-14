<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Products extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'product_id',
        'brand_id',
        'product_category_id',
        'name',
        'description',
        'product_image',
        'content',
        'price',
        'discount',
        'tag',
    ];                  
    protected $table = "products";
    protected $primarykey = "product_id";
    public $incrementing = true;

   
}
