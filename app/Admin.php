<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admin';
    protected $fillable = ['ten_dang_nhap','mat_khau','ho_ten'];

     public function getPasswordAttribute()
    {

        return $this->mat_khau;
    }
    // public function getAuthPassword()
    // {
    // return $this->mat_khau;
    // }
}
