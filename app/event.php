<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $fillable = [
        'user_id', 'eo_id', 'nama_Event','alamat_Event','Kota','Kategori','deskripsi_Event','harga_Event','jadwal_Event','Gambar'
        ];

    public function event(){
        return $this-> belongsTo('app\User','user_id','id');
    }

}
