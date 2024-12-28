<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use Cachable;
    protected $table = 'rewards';
    protected $table_name = "Khen thưởng";
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
