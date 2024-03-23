<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'NIK', 'tanggal_lahir', 'alamat', 'jenis_kelamin'];
    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }
}
