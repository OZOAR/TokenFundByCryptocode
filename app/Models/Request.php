<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public $table = 'requests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'message', 'created_at'
    ];

    /**
     * Set message for the request.
     *
     * @param $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Set owner of the request.
     *
     * @param $ownerId
     */
    public function setOwner($ownerId)
    {
        $this->user_id = $ownerId;
    }

    /**
     * Get the request owner.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get id of the request.
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get message of the request.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Get creation date of the request.
     *
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->created_at;
    }
}
