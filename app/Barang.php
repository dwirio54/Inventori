<?php

namespace App;

use App\Barang;

use App\Suplier;

use App\Transaction;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table ='barangs';
    protected $guarded = [];
    
    public function suplier()
    {
        return $this->belongsTo(Suplier::class);
    }
}
