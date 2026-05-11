<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfficeSpaceBenefits extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'office_space_id',
    ];
}