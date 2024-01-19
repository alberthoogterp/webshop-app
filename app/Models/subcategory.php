<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function products(){
        return $this->belongsToMany(product::class);
    }
}
