<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Sick extends Model
{
    use Cachable;
    protected $table = 'sicks';
    protected $table_name = "Bệnh";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'code',
        'name',
        'treatment_direction',
        'note',
        'created_by',
        'updated_by',
    ];
}
