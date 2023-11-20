<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sim extends Model
{
    use HasFactory;


    protected $guarded = [];

    //En este va el phone belong to porque va a contener la llave foranea del telefono su id, entonces es este modelo donde se pone el belogns to
    public function phone():BelongsTo
    {
        return $this->belongsTo(Phone::class);
    }


    //Relacion de paso
    



}
