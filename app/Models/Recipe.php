<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $table = 'recipe';
    protected $primarykey = 'id';
    protected $fillable = [
        'Recipe_name' => 'required',
        'Recipe_steps' => 'required',
        'Recipe_image' => 'required',
        'Recipe_maker' => 'required',
        'Recipe_details' => 'required',
        'Recipe_ingredients' => 'required',
    ];
}
