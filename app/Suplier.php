<?php

namespace App;

use App\Barang;

use App\Suplier;

use App\Transaction;

use Alfa6661\AutoNumber\AutoNumberTrait;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use AutoNumberTrait;
    
    protected $table = 'supliers';
    
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_suplier' => [
                'format' => function () {
                    return 'TRANS/' . date('Ymd') . '/?';
                }, 'length' => 5
            ]

        ];
    }
}
