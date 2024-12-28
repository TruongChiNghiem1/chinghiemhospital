<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class AdmissionReason extends Model
{
    use Cachable;
    protected $table = 'admission_reasons';
    protected $table_name = "Lý do nhập viện";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'name',
        'note',
        'created_by',
        'updated_by',
    ];
}
