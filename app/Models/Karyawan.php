<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawans';
    protected $primaryKey = 'id';
    protected $fillable = ['nik', 'nama', 'alamat', 'no_telepon'];
    use HasFactory;
}
