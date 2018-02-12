<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenerbitModel extends Model
{
    //
    protected $table = 'penerbit';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_penerbit'];

    public function buku(){
      return $this->hasMany('App\BukuModel','id_penerbit');
    }
}
