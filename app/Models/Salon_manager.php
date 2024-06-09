<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon_manager extends Model
{
    use HasFactory;

    protected $table = 'salon_managers';
    protected $fillable = [
        'salon_id',
        'manager_id'
    ];
}
