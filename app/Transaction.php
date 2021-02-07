<?php

namespace App;

use App\Barang;

use App\Suplier;

use App\Transaction;

use Alfa6661\AutoNumber\AutoNumberTrait;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use AutoNumberTrait;

    protected $table = 'transactions';
    
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_transaksi' => [
                'format' => function () {
                    return 'TRANS/' . date('Ymd') . '/?';
                }, 'length' => 5
            ]

        ];
    }
    public function suplier()
    {
        return $this->belongsTo(Suplier::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}

