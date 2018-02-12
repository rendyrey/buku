<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class BukuModel extends Model
{
    //
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = ['id_penulis','id_penerbit','nama_buku'];

    public function penerbit(){
      return $this->belongsTo('App\PenerbitModel','id_penerbit');
    }

    public function penulis(){
      return $this->belongsTo('App\PenulisModel','id_penulis');
    }

    public static function Buku_all(){
      return DB::table('buku')
      ->join('penerbit','buku.id_penerbit','=','penerbit.id')
      ->join('penulis','buku.id_penulis','=','penulis.id')
      ->orderBy('penerbit.nama_penerbit','asc')->get();
      // return $buku;
    }
}
