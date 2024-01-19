<?php
namespace App\SeparateCLasses;
use App\Models\category;

class DataLoader
{
    public static function getCategorieData(){
        return category::with("subcategories")->get();
    }
}
?>