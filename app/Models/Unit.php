<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use Cachable;
    protected $table = 'units';
    protected $table_name = "Đơn vị";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'code',
        'name',
        'parent_id',
        'parent_code',
        'level',
        'status',
        'note',
        'created_by',
        'updated_by',
    ];
}
