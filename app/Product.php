<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'status', 'content','picture','price','priceType',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function tags()
        {
            return $this->belongsToMany('App\Tag');
        }


}
