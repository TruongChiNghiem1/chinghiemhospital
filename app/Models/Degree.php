<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use Cachable;
    protected $table = 'degrees';
    protected $table_name = "Bằng cấp";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'description',
        'start_date',
        'end_date',
        'created_by',
        'updated_by',
    ];
}
