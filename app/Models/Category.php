<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categpries';
    public $timestamps = true;
    protected $fillable = array('name', 'description' , 'price' ,'image');

    public function subcategory()
    {
        return $this->hasMany(\App\Models\Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(\App\Models\Category::class, 'parent_id');
    }
    
    public function poducts()
    {
        return $this->belongsToMany(Product::class);
    }
}
