<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlottingRuang extends Model
{
    use HasFactory;

    protected $table = 'plotting_ruang';

    protected $fillable = [
        'prodi_id',
        'ruangan_id',
        'status',
    ];

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'ruangan_id');
    }
}