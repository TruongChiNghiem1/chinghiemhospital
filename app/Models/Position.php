<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use Cachable;
    protected $table = 'positions';
    protected $table_name = "CHức vụ";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'code',
        'name',
        'status',
        'created_by',
        'updated_by',
    ];
}
