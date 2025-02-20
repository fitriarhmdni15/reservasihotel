<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasHotel extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_hotel';

    protected $fillable = ['name', 'description']; // Kolom yang bisa diisi
}
