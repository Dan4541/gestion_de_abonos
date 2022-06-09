<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abono extends Model
{
    use HasFactory;
    protected $table = 'abonos';
    protected $primaryKey ='id_abono';
    protected $fillable = ['fecha', 'monto'];
    public $timestamps=false;

    public function clientes(){
        return $this->belongsTo(Cliente::class);
    }

}
