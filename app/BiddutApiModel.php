<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiddutApiModel extends Model
{
    protected $table = 'biddut_api';

    protected $fillable = ['url','title','status'];
}
