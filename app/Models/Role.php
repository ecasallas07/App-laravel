<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;


    protected $guarded =[];


    //Para relacion muchos a muchos con usuario , con la tabla que tiene las dos relaciones
    public function users():BelongsToMany
    {

        //de este forma cuando no se respeta la convencion de nombres
        // return $this->belongsToMany(User::class,'role_user','role_user','role_id');

        //Si cumple con las convenciones de nombre de tabla se puede realizar asi y si se desea gregar campos con la funcion Pivto
        return $this->belongsToMany(User::class)->withPivot('add_by');
    }
}
