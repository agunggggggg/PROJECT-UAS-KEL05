<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UangKeluar extends Model
{
    use HasFactory;

    protected $fillable = ['sumber_uang_keluar', 'nominal', 'tgl_keluar'];
}
