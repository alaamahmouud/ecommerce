<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        protected $table = 'products';
        public $timestamps = true;
        protected $fillable = array('name', 'parent_id');
    
        public function categories()
        {
            return $this->belongsToMany(Category::class);
        }
}
    
