<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class CatchTheNumber extends Model
{
    use Cachable;
    protected $table = 'catch_the_numbers';
    protected $table_name = "Bắt số";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'profile_id',
        'numerical_order',
        'service_id',
        'room_id',
        'type',
    ];
}
