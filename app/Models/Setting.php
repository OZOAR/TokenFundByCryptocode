<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $table = 'settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key', 'value'
    ];

    /**
     * Get settings key.
     *
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set settings key.
     *
     * @param $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * Get settings value.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set settings value.
     *
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
