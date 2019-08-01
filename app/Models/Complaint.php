<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Complaint extends Model
{
    protected $appends = ['view_count'];

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
    public function getUpdatedOnAttribute()
    {
        return date_format($this->updated_at, config('app.date_format'));
    }

    /**
     * Counts the total views of a complaint
     *
     * @return mixed
     */
    public function getViewCountAttribute()
    {
        $key = "complaint.$this->id.view_count";
        if (Cache::missing($key)) {
            Cache::forever($key, 0);
        }

        return Cache::get($key);
    }
}
