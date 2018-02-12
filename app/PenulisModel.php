<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenulisModel extends Model
{
    //
    protected $table = 'penulis';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_penulis'];

    public function buku(){
      return $this->hasMany('App\Buku');
    }
}
