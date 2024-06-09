<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stylist extends Model
{
    use HasFactory;
    protected $table = 'stylists';
    protected $fillable = [
        'first_name',
        'last_name',
        'contact_phone',
        'contact_email',
    ];
}
