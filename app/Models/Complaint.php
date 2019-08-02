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
    public function getTitleSummaryAttribute()
    {
        return substr($this->title, 0, 20);
    }

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
    /**
     * Get how long ago complaint was Created
     *
     * @return string|void
     */
    public function getCreatedDateAttribute()
    {
        try {
            return "Created " . $this->howLongAgo($this->created_at);
        } catch (\Exception $e) {
            return abort(500, $e->getMessage());
        }
    }

    /**
     * Get how long ago complaint was Created
     *
     * @return string|void
     */
    public function getOccurredDateAttribute()
    {
        try {
            return "Occurred " . $this->howLongAgo($this->occurred_at);
        } catch (\Exception $e) {
            return abort(500, $e->getMessage());
        }
    }

    /**
     * Get how long ago complaint was Created
     *
     * @return string|void
     */
    public function getUpdatedDateAttribute()
    {
        try {
            return "Updated " . $this->howLongAgo($this->updated_at);
        } catch (\Exception $e) {
            return abort(500, $e->getMessage());
        }
    }

    /**
     * Format date by getting time difference, and returning how long ago
     *
     * @param $date
     *
     * @return string
     * @throws \Exception
     */
    public function howLongAgo($date)
    {
        $now = new \DateTime();
        $ago = new \DateTime($date);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        //  if (!$full)
        $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

    /**
     * Complaint belongs to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Complaints has many remarks
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function remark(){
        return $this->hasMany('App\Models\Remark');
    }
}
