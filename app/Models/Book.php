<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model //fillalble dan guarded gabole bareng
{
    use HasFactory;
    use SoftDeletes;
    //ngasih tau ke laravel kolom mana aja yang bisa diisi
    // protected $fillable = ['judul', 'isbn', 'kategori', 'harga', 'halaman', 'penerbit'];

    //ngasih tau ke laravel kolom mana aja yang GABOLEH diisi
    protected $guarded = [];

    //nama function ga bole sembarangan, namanya harus mewakili nama tujuannya (termasuk plural / singular)
    public function selling() {
        return $this->hasOne('App\Models\Selling');
    }

    public function categories(){
        return $this->belongsToMany('App\Models\Category')->withTimestamps();
    }
}
