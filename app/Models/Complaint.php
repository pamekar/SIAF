<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    /**
     * Attribute summarises complaint description
     *
     * @return bool|string
     */
    public function getSummaryAttribute()
    {
        $description = strip_tags($this->description);

        return substr($description, 0, 300);
    }

    /**
     * Gets a formatted date of when the complaint was last updated
     *
     * @return false|string
     */
    public function getUpdatedOnAttribute(){
        return date_format($this->updated_at, config('app.date_format'));
    }
}
