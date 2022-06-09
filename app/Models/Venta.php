<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = 'ventas';
    protected $primaryKey ='id_venta';
    protected $fillable = ['fecha', 'comentario', 'total'];
    public $timestamps=false;

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
