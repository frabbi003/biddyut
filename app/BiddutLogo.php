<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiddutLogo extends Model
{
    protected $table = 'biddut_logo';
    protected $fillable = ['bid_log_url', 'bid_log_status'];
}
