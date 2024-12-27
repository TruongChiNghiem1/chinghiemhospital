<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use Cachable;
    protected $table = 'province';
    protected $table_name = "Tỉnh thành";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'parent_code',
        'code',
        'name',
        'level',
        'note',
        'level_name',
    ];
}
