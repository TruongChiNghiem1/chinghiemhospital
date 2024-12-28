<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class AdmissionRecord extends Model
{
    use Cachable;
    protected $table = 'admission_records';
    protected $table_name = "Quản lý nhập viện";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'profile_id',
        'admission_date',
        'discharge',
        'admission_reason_id',
        'created_by',
        'updated_by',
    ];
}
