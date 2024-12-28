<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Cachable;
    protected $table = 'services';
    protected $table_name = "Dịch vụ";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'code',
        'name',
        'price',
        'note',
        'created_by',
        'updated_by',
    ];
}
