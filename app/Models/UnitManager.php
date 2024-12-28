<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class UnitManager extends Model
{
    use Cachable;
    protected $table = 'unit_managers';
    protected $table_name = "Trưởng đơn vị";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'user_id',
        'unit_id',
        'type',
        'created_by',
        'updated_by',
    ];
}
