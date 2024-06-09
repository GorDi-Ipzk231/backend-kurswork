<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $table = 'managers';
    protected $fillable = [
        'first_name',
        'last_name',
        'contact_phone',
        'contact_email',
    ];
}
