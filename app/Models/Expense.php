<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use Cachable;
    /**
     * drg >> format amount
     * @param $amount
     *
     * @return string
     */
    public function getAmountAttribute($amount)
    {
        return number_format($amount / 100,2,'.',',');
    }
}
