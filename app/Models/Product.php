<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable=["name","photo","price","description","status","category_id"];

    public function category(){//jointure produit a un seul category
        return $this->belongsTo(Category::class);
    }
}
