<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Config extends Model
{
    protected $table = 'config';

    protected $fillable = [
        'id',
        'key',
        'value',
        'encrypted',
        'totals',
        'created_at',
        'updated_at',
        'updated_by'
    ];

    public function get_value()
    {

    }

    public function set_value()
    {

    }
}
