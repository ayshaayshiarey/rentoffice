<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingTransactions extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'booking_transactions';
    
    protected $fillable = [
        'phone_number',
        'booking_trx',
        'office_space_id',
        'total_amount',
        'duration',
        'started_at',
        'ended_at',
        'is_paid'
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
        'is_paid' => 'boolean',
    ];

    // Relasi ke OfficeSpace (jika ada model OfficeSpace)
    public function officeSpace()
    {
        return $this->belongsTo(OfficeSpace::class);
    }
}