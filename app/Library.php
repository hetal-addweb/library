<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $table = 'library';
    protected $fillable=['name','bookname','file'];
 
}

