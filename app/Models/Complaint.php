<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking_id',
        'full_name',
        'address',
        'category',
        'complaint_details',
        'email',
        'phone',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($complaint) {
            $complaint->tracking_id = strtoupper(uniqid());
        });
    }
}