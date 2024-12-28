<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class ResearchWork extends Model
{
    use Cachable;
    protected $table = 'research_works';
    protected $table_name = "Công trình nghiên cứu";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'description',
        'start_date',
        'end_date',
        'image',
        'created_by',
        'updated_by',
    ];
}
