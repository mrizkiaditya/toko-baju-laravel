<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    use HasFactory;
    protected $table = 'baju';
    // protected $fillable = [
    //     'nama',
    //     'deskripsi',
    //     'gambar',
    //     'jenis_baju'
    // ];
    protected $guarded = [];
}
