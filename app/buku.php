<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'tbl_buku';
    public $timestamps = false;
    protected $fillable = ['id', 'title', 'author'];
}
