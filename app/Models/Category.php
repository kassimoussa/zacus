<?php

namespace App\Models;

use App\Models\Film;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    public function films()
    {
        return $this->hasMany(Film::class,  'foreign_key', 'local_key');
    }
}
