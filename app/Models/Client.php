<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'titulo',
        'zona',
        'secao',
        'sexo',
        'type',
        'birthday',
        'child',
        'negra',
        'prestador_id',
    ];

    protected $casts = [
        'child' => 'boolean',
        'negra' => 'boolean',
    ];

    public function prestador()
    {
        return $this->belongsTo(Prestador::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
