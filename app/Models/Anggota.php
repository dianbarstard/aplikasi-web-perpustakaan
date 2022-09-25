<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table='anggota';
    protected $fillable = ['
    kode_anggota', 'nama_anggota', 'jk_anggota', 'jurusan_anggota', 'no_telp', 'alamat', 'user_id'];

    public function user () {
        return $this->belongsTo(User::class);
    }
}
