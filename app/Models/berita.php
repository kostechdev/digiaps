<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class berita extends Model

{

     protected $table = 'berita';
    protected $fillable = ['kategori', 'judul', 'slug', 'konten', 'gambar', 'penulis'];

    

    public function penulis()
    {
        return $this->belongsTo(User::class, 'name');
    return $this->belongsTo(User::class, 'penulis');
}
}


   

