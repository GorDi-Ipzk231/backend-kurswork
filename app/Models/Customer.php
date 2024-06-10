<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    // public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'service',
        'contact_phone',
        'contact_email',
    ];
    public function services()
    {
        return $this->hasMany(Service::class);
    }

}
