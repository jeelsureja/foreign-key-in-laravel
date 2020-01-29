<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class allcategory extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'category_id';
    protected $fillable = ['category_id','image'];
}
