<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use Cachable;
    protected $table = 'profiles';
    protected $table_name = "Thông tin cá nhân";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'code',
        'full_name',
        'dob',
        'gender',
        'phone',
        'email',
        'province',
        'district',
        'commune',
        'street_name',
        'job',
        'image',
        'BHYT',
        'allergy',
        'medical_history',
        'emergency_contact',
    ];
}
