<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    
    protected $fillable = ['gambar', 'title', 'deskripsi', 'harga', 'kategori'];

}
