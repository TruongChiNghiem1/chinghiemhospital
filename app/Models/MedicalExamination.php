<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class MedicalExamination extends Model
{
    use Cachable;
    protected $table = 'medical_examinations';
    protected $table_name = "Khoa khám bệnh";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'code',
        'name',
        'icon',
        'image',
        'created_by',
        'updated_by',
        'description',
    ];
}
