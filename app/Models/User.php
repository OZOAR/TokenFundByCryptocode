<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'name', 'email', 'password', 'is_removed'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Set removed flag for user.
     *
     * @param bool $value
     */
    public function setRemovedFlag($value = false)
    {
        $this->is_removed = $value;
    }

    /**
     * Get user's policy.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    /**
     * Check if user has a role.
     *
     * @param string $role
     *
     * @return bool
     */
    public function hasRole($role = 'admin')
    {
        switch ($role) {
            case 'admin':
                return $this->isAdministrator();
            case 'client':
                return $this->isClient();
            default:
                return false;
        }
    }

    /**
     * Check if user is administrator.
     *
     * @return bool
     */
    public function isAdministrator(): bool
    {
        return $this->role_id === Role::ADMIN_ROLE_ID;
    }

    /**
     * Check if user is client.
     *
     * @return bool
     */
    public function isClient(): bool
    {
        return $this->role_id === Role::CLIENT_ROLE_ID;
    }

    /**
     * Get id of the user.
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get name of the user.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get email of the user.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Check if user removed.
     *
     * @return bool
     */
    public function isRemoved(): bool
    {
        return $this->is_removed;
    }

    /**
     * Get registration date of the user.
     *
     * @return mixed
     */
    public function getRegistrationDate()
    {
        return $this->created_at; // TODO fix `created_at` field currently doesn't set
    }

    /**
     * Get user password.
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Retrieve only presented user.
     *
     * @param $query
     * @return mixed
     */
    public function scopePresented($query)
    {
        return $query->where('is_removed', true);
    }

    /**
     * Retrieve only clients.
     *
     * @param $query
     * @return mixed
     */
    public function scopeClients($query)
    {
        return $query->where('role_id', Role::CLIENT_ROLE_ID);
    }
}
