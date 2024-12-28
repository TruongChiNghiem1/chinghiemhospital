<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class HospitalAdmissionMonitoring extends Model
{
    use Cachable;
    protected $table = 'hospital_admission_monitorings';
    protected $table_name = "Theo dõi nhập viện";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'test_date',
        'test_results',
        'created_by',
        'updated_by',
    ];
}
