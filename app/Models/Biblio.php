<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblio extends Model
{
    use HasFactory;

    protected $fillable = [

        'biblionumber'
    ];

    protected $hidden = [

        'updated_at',
        'created_at'
    ];

    public function item(){

        return $this->belongsTo(BiblioItem::class,'biblionumber','biblionumber');
    }
}
