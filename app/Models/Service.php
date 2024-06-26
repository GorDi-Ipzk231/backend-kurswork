<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = [
        'name',
        'description',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
