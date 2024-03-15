<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Plan extends Model
{
    use HasFactory, SoftDeletes,Searchable,HasTranslations;

    protected $guarded = [];
    public $translatable = ['name', 'description'];
    
    // protected $casts = [
    //     'is_active' => 'boolean',
    // ];

        /**
     * Get the documents of this provider.
     */
    public function subscriptions()
    {
        return $this->hasMany(Subscriber::class);
    }

}
