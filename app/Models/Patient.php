<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use Cachable;
    protected $table = 'patients';
    protected $table_name = "Thông tin bệnh nhân";
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
        'indentity_card',
    ];
}
