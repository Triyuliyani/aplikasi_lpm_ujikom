<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kategori'];
    public function Pengaduan()
    {
        return $this->hasMany(Pengaduan::class,'kategori_id','id');
    }
}
