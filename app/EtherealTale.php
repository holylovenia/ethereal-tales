<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtherealTale extends Model
{
    protected $fillable = array('id', 'author', 'subject','tale');
}
