<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use Cachable;
    protected $table = 'maintenances';
    protected $table_name = "Bảo trì";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'device_history_id',
        'service_name',
        'quantity',
        'expense',
        'created_by',
        'updated_by',
    ];
}
