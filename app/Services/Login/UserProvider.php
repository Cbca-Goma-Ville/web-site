<?php

namespace App\Services\Login;

use Illuminate\Contracts\Auth\UserProvider as BaseUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserProvider implements BaseUserProvider
{
    /**
     * Retrieve a user by the given credentials.
     *
     * @param  array  $credentials
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByCredentials(array $credentials)
    {
        $user = $this->getUserByUsername($credentials['username']);
        return $this->getApiUser($user);
    }

    /**
     * Retrieve a user by their unique identifier.
     *
     * @param  mixed  $identifier
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveById($identifier)
    {
        $user = $this->getUserById($identifier);

        return $this->getApiUser($user);
    }

    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {
        return $user->getAuthPassword() == $credentials['password'];
    }

    /**
     * Get the api user.
     *
     * @param  mixed  $user
     * @return \App\Models\ApiUser|null
     */
    protected function getApiUser($user)
    {
        if ($user !== null) {
            if (is_array($user)) {
                return new User($user);
            }
            return $user;
        }
    }

    /**
     * Get the use details from your API.
     *
     * @param  string  $username
     * @return array|null
     */
    protected function getUser()
    {
        return $this->getApiUser(Session::get('user'));
    }

    protected function getUserById($id)
    {
        if ($id == Session::get('user')['id']) {
            return $this->getApiUser(Session::get('user'));
        }

        return null;
    }

    protected function getUserByUsername($username)
    {
        if (Session::has('user') && ($username == Session::get('user')['email'])) {
            return $this->getApiUser(Session::get('user'));
        }

        return null;
    }

    // The methods below need to be defined because of the Authenticatable contract
    // but need no implementation for 'Auth::attempt' to work and can be implemented
    // if you need their functionality
    public function retrieveByToken($identifier, $token)
    {
    }

    public function updateRememberToken(UserContract $user, $token)
    {
    }
}
