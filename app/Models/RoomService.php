<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class RoomService extends Model
{
    use Cachable;
    protected $table = 'room_services';
    protected $table_name = "Dịch vụ - Phòng";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'room_id',
        'service_id',
        'created_by',
        'updated_by',
    ];
}
