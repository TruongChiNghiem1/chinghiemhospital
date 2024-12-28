<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class UserView extends Model
{
    use Cachable;
    protected $table = 'user_views';
    protected $table_name = "Chi tiết nhân viên";
    public $incrementing = false;
    protected $fillable = [
        'id',
        'user_id',
        'province',
        'district',
        'commune',
        'street_name',
        'position_name',
        'unit_name',
        'level',
        'starting_date',
        'id_card_issue_date',
        'place_of_issue',
        'contract_signing_date',
        'effective_date',
        'expiration_date',
        'date_off',
        'marriage',
        'training_process',
        'created_by',
        'updated_by',
    ];
}
