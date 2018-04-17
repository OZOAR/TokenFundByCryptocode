<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileGraph extends Model
{
    public $table = 'client_graph';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'usd', 'date'
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
     * Set date.
     *
     * @param $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get the role owner.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'usd' => $this->usd,
            'date' => $this->date,
        ];
    }
}
