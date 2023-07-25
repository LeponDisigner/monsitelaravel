<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Category extends Model
{

   protected $fillable = ['name', 'slug'];
 
   public function films(): MorphToMany
    {
        return $this->morphToMany(Film::class, 'filmable');
    }
    use HasFactory; 
}
