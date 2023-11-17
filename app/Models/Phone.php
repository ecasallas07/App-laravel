<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
