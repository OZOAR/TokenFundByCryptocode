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

    public function toArray()
    {
        return [
            'id' => $this->id,
            'asset' => $this->asset,
            'ticket' => $this->ticket,
            'balance' => $this->balance,
            'usd' => $this->usd,
            'y' => $this->quota,
        ];
    }
}
