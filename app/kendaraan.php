<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    //
    protected $fillable = [
        'user_id', 'nama', 'warna', 'jenis', 'nopol', 'detail', 'harga', 'status'
    ];

    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }

    public function pemilik()
    {
      // code...
      return $this->belongsTo('App\User');
    }
}
