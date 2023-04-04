<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cpl_snDikti extends Model
{
    use HasFactory;
    protected $fillable = [
        'Kode_CPL-SNDIKTI',
        'Deskripsi'
    ];
}
