<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos4 extends Model
{
    use HasFactory;

    protected $table = 'datos4'; // Especificar el nombre de la tabla si es diferente al nombre convencional

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
        'fecha_registro'
    ];

    protected $casts = [
        'fecha_registro' => 'datetime', // Convertir a tipo de dato datetime automáticamente
        'coordenadas' => 'json', // Si usas MySQL 5.7.8 o superior, usa el tipo json para columnas de tipo Geometry
    ];

    // Relación con el modelo de usuario (puedes ajustar según sea necesario)
    public function user()
    {
        return $this->belongsTo(User::class, 'usuario', 'username');
    }
}
