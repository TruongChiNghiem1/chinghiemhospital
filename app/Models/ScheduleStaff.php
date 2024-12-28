<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class ScheduleStaff extends Model
{
    use Cachable;
    protected $table = 'schedule_staff';
    protected $table_name = "lịch trực";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'service_id',
        'description',
        'workday',
        'shift',
        'type',
        'room_id',
        'user_id',
        'created_by',
        'updated_by',
    ];
}
