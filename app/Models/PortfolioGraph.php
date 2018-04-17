<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioGraph extends Model
{
    public $table = 'portfolio_graph';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'asset', 'ticket', 'balance', 'usd', 'quota'
    ];

    public $timestamps = false;

    /**
     * Get asset.
     *
     * @return string
     */
    public function getAsset(): string
    {
        return $this->asset;
    }

    /**
     * Set asset of an asset.
     *
     * @param $asset
     */
    public function setAsset($asset)
    {
        $this->asset = $asset;
    }

    /**
     * Get ticket name.
     *
     * @return string
     */
    public function getTicket(): string
    {
        return $this->ticket;
    }
    /**
     * Set ticket of an asset.
     *
     * @param $ticket
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Set balance of an asset.
     *
     * @param $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * Set usd of an asset.
     *
     * @param $usd
     */
    public function setUSD($usd)
    {
        $this->usd = $usd;
    }

    /**
     * Set quota of an asset.
     *
     * @param $quota
     */
    public function setQuota($quota)
    {
        $this->quota = $quota;
    }
}
