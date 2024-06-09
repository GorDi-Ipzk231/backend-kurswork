<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Salon_manager;

class Salon extends Model
{
    use HasFactory;
    protected $table = 'salons';
    protected $fillable = [
        'name',
        'description',
        'contact_phone',
        'contact_email',
        'address',
    ];

    public function salonManager()
    {
        return $this->belongsToMany(Manager::class,'salons_managers', 'salon_id', 'manager_id');
    }
}
