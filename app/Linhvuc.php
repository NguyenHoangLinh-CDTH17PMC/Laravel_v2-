<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Linhvuc extends Model
{
	use SoftDeletes;
    protected $table = 'linh_vuc';
    protected $fillable = ['id','ten_linh_vuc'];
 }
