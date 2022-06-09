<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $primaryKey ='id_cliente';
    protected $fillable = ['nombre', 'telefono'];
    public $timestamps=false;

    public function ventas(){
        return $this->hasMany(Ventas::class);
    }

    public function abonos(){
        return $this->hasMany(Abono::class);
    }

    
}
