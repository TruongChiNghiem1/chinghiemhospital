<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use Cachable;
    protected $table = 'medical_records';
    protected $table_name = "Hồ sơ bệnh án";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'examination_date',
        'diagnosis',
        'height',
        'weight',
        'waist_circumference',
        'pulse',
        'blood_pressure',
        'patient_id',
        'follow_up_appointment',
        'created_by',
        'updated_by',
    ];
}
