<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class TrainingProcess extends Model
{
    use Cachable;
    protected $table = 'training_processes';
    protected $table_name = "Quá trình đào tạo";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'user_id',
        'school',
        'train',
        'description',
        'start_date',
        'end_date',
        'created_by',
        'updated_by',
    ];
}
