<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable =[
        'customer','rating','review'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
