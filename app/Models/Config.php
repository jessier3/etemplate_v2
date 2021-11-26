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

    /**
     * @param $key
     * @param $value
     * @return App\Models\Config
     */
    public function get_value($key)
    {
        $config = Config::where('key', $key)->first();
        if(($config) && ($config->encrypted))
        {
            $config->value = Crypt::decryptString($config->value);
        }
        return $config;
    }

    public function set_value($key, $value, $updated_by, $encrypted = 0 )
    {
        $config = Config::get_value($key_value);

        if(($config) && ($config->encrypted))
        {
            $value = Crypt::encryptString($value);
        }
        Config::updateOrInsert(
            ['key' => $key,  'encrypted' => $encrypted],
            ['updated_by' => $updated_by, 'value' => $value]
        );

    }
}
