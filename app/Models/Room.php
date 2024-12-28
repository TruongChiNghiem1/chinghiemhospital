<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use Cachable;
    protected $table = 'rooms';
    protected $table_name = "Phòng";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'code',
        'function',
        'note',
        'created_by',
        'updated_by',
    ];
}
