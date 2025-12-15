<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 *
 * Represents a system user with invite-based team structure.
 * Each user can invite others and can also be invited by another user.
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * These fields can be filled during user creation or update.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'invite_code',
        'invited_by',
        'team_id',
    ];

    /**
     * The attributes that should be hidden for arrays and JSON responses.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be type-casted automatically.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relationship: User who invited this user.
     *
     * Example:
     * $user->inviter->name;
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inviter()
    {
        return $this->belongsTo(User::class, 'invited_by');
    }

    /**
     * Relationship: Users invited by this user.
     *
     * Example:
     * $user->invitees; // returns collection of users
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invitees()
    {
        return $this->hasMany(User::class, 'invited_by');
    }
}
