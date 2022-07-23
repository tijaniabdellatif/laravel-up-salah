<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiblioItem extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;


    public function biblios(){

        return $this->hasMany(Biblio::class,'biblionumber',"biblionumber");
    }
}
