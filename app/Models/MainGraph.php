<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainGraph extends Model
{
    public $table = 'main_graph';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usd', 'btc', 'date'
    ];

    /**
     * Get usd.
     *
     * @return float
     */
    public function getUSD(): float
    {
        return $this->usd;
    }

    /**
     * Get BTC
     *
     * @return float
     */
    public function getBTC(): float
    {
        return $this->btc;
    }

    /**
     * Get date.
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set USD.
     *
     * @param $usd
     */
    public function setUSD($usd)
    {
        $this->usd = $usd;
    }

    /**
     * Set BTC.
     *
     * @param $btc
     */
    public function setBTC($btc)
    {
        $this->btc = $btc;
    }

    /**
     * Set date.
     *
     * @param $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
}
