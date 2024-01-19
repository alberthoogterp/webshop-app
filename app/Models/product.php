<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function subcategories(){
        return $this->belongsToMany(subcategory::class);
    }

    public function brand(){
        return $this->belongsTo(brand::class);
    }

    public function users(){
        return $this->belongsToMany(user::class,"products_users");
    }
}
