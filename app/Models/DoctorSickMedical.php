<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class DoctorSickMedical extends Model
{
    use Cachable;
    protected $table = 'doctor_sick_medicals';
    protected $table_name = "Bác sĩ - Bệnh = Hồ sơ bệnh án";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'user_id',
        'sick_id',
        'examination_date',
        'medical_record_id',
        'created_by',
        'updated_by',
    ];
}
