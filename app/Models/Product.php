<?php

namespace App\Models;
//use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','price','description','category_id','photo'];
    public function category()
    {
        return $this->belongsTo(related: Category::class);
    }
}
