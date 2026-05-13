<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        // Tambahkan field yang diperlukan
        'booking_code',
        'customer_name',
        'total_amount',
        'status'
    ];
}