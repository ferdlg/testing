<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public $timestamps = false;
    protected $table ='vehiculo';
    protected $primaryKey ='vehPlaca';

    protected $fillable = [
        'vehPlaca',
        'datId',
        'catId',
        'vehModelo',
        'vehMarca', 
        'vehColor', 
        'vehEstado', 
        'vehPrecio'
    ];

    public function datosPersonales()
    {
        return $this->belongsTo(DatosPersonales::class, 'datId');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'catId');
    }
}
