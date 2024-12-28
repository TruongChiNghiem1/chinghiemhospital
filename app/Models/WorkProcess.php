<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class WorkProcess extends Model
{
    use Cachable;
    protected $table = 'work_processes';
    protected $table_name = "Quá trình công tác";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'name',
        'description',
        'start_date',
        'end_date',
        'created_by',
        'updated_by',
    ];
}
