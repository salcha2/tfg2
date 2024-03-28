<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos4View extends Model
{
    use HasFactory;

    protected $table = 'datos4_view'; // Especificar el nombre de la tabla si es diferente al nombre convencional

    protected $fillable = [
        'result_vulnerability',
        'result_risk',
        'result_functionality',
        'id_v1',
        'id_v2',
        'id_v3',
        'id_v4',
        'id_v5',
        'id_v6',
        'id_v7',
        'id_v8',
        'id_v9',
        'id_v10',
        'id_v11',
        'id_v12',
        'id_v13',
        'id_v14',
        'id_v15',
        'id_v16',
        'id_v17',
        'id_v18',
        'id_v19',
        'id_v20',
        'id_v21',
        'coordenadas',
        'usuario',
        'nombre',
        'descripcion',
        'fecha_registro',
        'latitud',
        'longitud',
    ];

    protected $casts = [
        'fecha_registro' => 'datetime', // Convertir a tipo de dato datetime automáticamente
    ];

    

    // Relación con el modelo de usuario (puedes ajustar según sea necesario)
    public function user()
    {
        return $this->belongsTo(User::class, 'usuario', 'username');
    }


    public function getLatitudeAttribute()
{
    // Parsear la coordenada y devolver la latitud
    return $this->parseCoordinates($this->coordenadas)[0] ?? null;
}

public function getLongitudeAttribute()
{
    // Parsear la coordenada y devolver la longitud
    return $this->parseCoordinates($this->coordenadas)[1] ?? null;
}

protected function parseCoordinates($coordinates)
{
    // Aquí implementa la lógica para parsear las coordenadas según el formato de tu base de datos
    // Debes ajustar esto según el formato exacto de tus coordenadas
    // Devuelve un array con la latitud y longitud
    return [$latitude, $longitude];
}
}
