<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscriber extends Model
{
    use HasFactory, SoftDeletes, Searchable;

    protected $guarded = [];

    protected $appends = ['expired'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'expire_at' => 'datetime:Y-m-d h:i A',
    ];

    /**
     * Get the plan for given subscription.
     */
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    /**
     * Get the provider for given subscription.
     */
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    /**
     * Get the user's avatar image.
     *
     * @param  string  $value
     * @return string
     */
    public function getExpiredAttribute()
    {
            return (boolean) $this->expire_at > \Carbon\Carbon::Now() ;//? url('/').'/storage'.$this->attributes['image'] : '/img/service/1.jpg';
        
        }
}
