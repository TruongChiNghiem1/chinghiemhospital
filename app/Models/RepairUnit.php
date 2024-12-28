<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class RepairUnit extends Model
{
    use Cachable;
    protected $table = 'repair_units';
    protected $table_name = "Đơn vị cung cấp dịch vụ";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'name',
        'function',
        'contract_date',
        'representative',
        'phone',
        'province',
        'district',
        'commune',
        'street_name',
        'created_by',
        'updated_by',
    ];
}
