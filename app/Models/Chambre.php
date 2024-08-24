<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    protected $primaryKey = 'NoChambre';
    public $incrementing = false;

    protected $fillable = [
        'NoChambre',
        'Cacteristiqueschambre',
        'Statutchambre',
        'image',
        'Typechambre'
    ];
}
