<?php

namespace App;

use App\Barang;

use App\Suplier;

use App\Transaction;

use Illuminate\Database\Eloquent\Model;

use Alfa6661\AutoNumber\AutoNumberTrait;

class Barang extends Model
{
    use AutoNumberTrait;

    protected $table ='barangs';

    protected $guarded = [];
    
    public function getAutoNumberOptions()
    {
        return [
            'kode_barang' => [
                'format' => function () {
                    return 'TRANS/' . date('Ymd') . '/?';
                }, 'length' => 5
            ]

        ];
    }
}