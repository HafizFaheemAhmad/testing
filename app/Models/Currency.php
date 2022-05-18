<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'status'];

    public function rates()

    {
        return $this->hasMany(Rate::class);
    }

    public function getRateAttribute()
    {
        $rate = $this['rates']->sortBy('created_at DESC')->first();
        return $rate?$rate['rate']:'None';
        //return $this['rates'];
    }


}
