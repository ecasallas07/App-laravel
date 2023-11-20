<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Sim;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Phone extends Model
{
    use HasFactory;

    protected $guarded =[];


    //Relation 1 a 1
    //Phone sigue perteneciendo a un unico usuario
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function sim():HasOne
    {
        return $this->hasOne(Sim::class);
    }
}
