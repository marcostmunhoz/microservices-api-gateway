<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableInteface;

/**
 * User Model.
 */
class User extends \Illuminate\Database\Eloquent\Model implements \Tymon\JWTAuth\Contracts\JWTSubject, AuthenticatableInteface
{
    use Authenticatable;

    /**
     * Returns the fillable attributes.
     *
     * @var string[]
     */
    protected $fillable = [
        'email',
        'password',
    ];

    /**
     * Returns the hidden attributes.
     *
     * @var string[]
     */
    protected $hidden = [
        'password',
    ];

    // Vendor implementations

    /**
     * Returns the JWT Auth identifier.
     *
     * @return string
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Returns the custom defined claims.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
