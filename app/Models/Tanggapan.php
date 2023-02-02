<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $fillable = ['id_pengaduan','tgl_pengaduan','tanggapan','id_user'];
    protected $guard = ['id'];
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
    public function Pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'user_id','id');
    }
}
