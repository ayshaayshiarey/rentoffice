<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class OfficeSpace extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'name',
        'thumbnail',
        'is_open',
        'is_full_booked',
        'price',
        'duration',
        'address',
        'about',
        'slug',
        'city_id',
    ];

    public function setNameAttribute($value)
    {
        $this->attribute['name'] = $value;
        $this->attribute['slug'] = Str::slug($value);
    }

    public function photos(): HasMany
    {
        return $this->hasMany('OfficeSpacePhoto'::class);
    }

    public function benefits(): HasMany
    {
            return $this->hasMany('OfficeSpaceBenefits'::class);
    }

    public function city(): BelongsTo
    {
            return $this->BelongsTo(city::class);
    }
}   