<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use Cachable;
    protected $table = 'devices';
    protected $table_name = "Thiết bị";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'code',
        'name',
        'installation_date',
        'status',
        'created_by',
        'updated_by',
    ];
}
