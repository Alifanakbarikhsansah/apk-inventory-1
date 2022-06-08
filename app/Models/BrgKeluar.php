<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrgKeluar extends Model
{
    protected $table = 'brg_keluar';

    protected $fillable = [
        'no_brg_keluar',
        'id_barang',
        'tgl_keluar',
        'jml_barang_keluar',
        'created_at',
        'updated_at',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
