<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable
        = [
            'user_id',
            'reference_id',
            'note',
            'amount',
            'gateway',
            'status'
        ];

    /**
     * drg >> format amount
     * @param $amount
     *
     * @return string
     */
    public function getAmountAttribute($amount)
    {
        return number_format($amount / 100, 2, '.', ',');
    }

}
