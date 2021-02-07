<?php

namespace App;

use App\Barang;

use App\Suplier;

use App\Transaction;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $table = 'supliers';
    
    protected $guarded = [];

}
