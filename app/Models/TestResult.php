<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    use Cachable;
    protected $table = 'test_results';
    protected $table_name = "Kết quả xét nghiệm";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'name',
        'result',
        'room_id',
        'room_code',
        'room_name',
        'user_id',
        'lab_results_date',
        'note',
        'created_by',
        'updated_by',
    ];
}
