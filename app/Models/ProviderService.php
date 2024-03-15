<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProviderService extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'service_type_id', 'provider_id', 'status', 'service_model', 'service_number', 'service_type_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    /**
     * The services that belong to the user.
     */
    public function provider()
    {
        return $this->belongsTo('App\Models\Provider');
    }

    public function service_type()
    {
        return $this->belongsTo('App\Models\ServiceType');
    }

    public function scopeCheckService($query, $provider_id, $service_id)
    {
        return $query->where('provider_id', $provider_id)->where('service_type_id', $service_id);
    }

    public function scopeAvailableServiceProvider($query, $service_id)
    {
        return $query->where('service_type_id', $service_id)->where('status', 'active');
    }

    public function scopeAvailableServiceDispatcherProvider($query, $service_id)
    {
        return $query->where('service_type_id', $service_id);
    }

    public function scopeAllAvailableServiceProvider($query)
    {
        return $query->whereIn('status', ['active', 'riding']);
    }

    public function getServiceModelAttribute($value)
    {
        return ucwords($value);
    }

    public function getServiceNumberAttribute($value)
    {
        return strtoupper(str_replace(' ', '', $value));
    }
}