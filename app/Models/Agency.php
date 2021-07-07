<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $table = 'agency';
    use HasFactory;
    protected $fillable = [
        'agency_name',
        'agency_id',
        'agency_phone',
        'agency_email',
        'agency_address',
        'manager_name',
        'status',
    ];
}
