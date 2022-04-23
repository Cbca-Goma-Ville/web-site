<?php

namespace App\Models;

use Illuminate\Auth\GenericUser;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class User extends GenericUser implements UserContract
{
    public function getAuthIdentifier()
    {
        return $this->attributes['id'];
    }
}
