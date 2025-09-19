<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    protected $fillable = ['kategori_id','judul','nomor_surat','tanggal_surat','file_path'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}