<?php

namespace App;

use App\Profile;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table ='profiles';
    protected $guarded = [];
}
