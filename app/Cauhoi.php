<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Cauhoi extends Model
{
	use SoftDeletes;
    protected $table = 'cau_hoi';
}
