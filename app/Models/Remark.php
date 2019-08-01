<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    //

    /**
     * Gets a formatted date of when the complaint was last updated
     *
     * @return false|string
     */
    public function getUpdatedOnAttribute()
    {
        return date_format($this->updated_at, config('app.date_format'));
    }
}
