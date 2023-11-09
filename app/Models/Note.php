<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // Se usa de esta forma cuando el nombre del modelo no cumple la notacion para conectar la tabla
    // protected $table = "notas";
    protected $table = "notes";


    // Que campos del objeto o la tabla sean modificados por la tabla, ejemplo id no va 
    // porque este se genera automaticamente
    protected $fillable = [
        "title",
        "description",
        "done",
        "evento"
    ];

    // El contrario a fillable estos son las campos protegidos, pero al ser los
    // contrarios entonces si ya tengo fillable no es necesario guarded o si tengo guarded ya no es necesario fillable
    protected $guarded = [
        'id',
        'date'
    ];

    // Castear datos en la base de datos, en donde le especifo al elento que al recepcionar locale_set_defaultdatos que recibe castea que vengan con el tipo indicado
    protected $casts = [
        'description'=>'int'
    ];


    // Datos que se mantienen ocultos por seguridad
    protected $hidden   = ['password'];

}
