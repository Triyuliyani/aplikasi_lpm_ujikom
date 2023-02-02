<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $filable = ['id','tgl_pengaduan','nik','isi_laporan','gambar','status'];
    protected $guard = ['id'];
    public function User()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function Tanggapan()
    {
        return $this->belongsTo(Tanggapan::class,'pengaduan_id','id');
    } 
    public function Kategori()
    {
        return $this->belongsTo(Kategori::class,'kategori_id','id');
    }
    public function Gambar()
    {
        return $this->belongsTo(Gambar::class,'gambar_id','id');
    }
}
