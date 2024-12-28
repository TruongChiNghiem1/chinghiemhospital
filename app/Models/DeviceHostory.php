<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class DeviceHostory extends Model
{
    use Cachable;
    protected $table = 'device_hostories';
    protected $table_name = "Lịch sử thiết bị";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'code',
        'maintenance_day',
        'repairman',
        'repair_unit_id',
        'created_by',
        'updated_by',
    ];
}
