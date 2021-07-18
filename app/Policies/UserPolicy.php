<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function create(User $auth): bool
    {
        return $auth->hasPermissionTo('create-users');
    }

    public function update(User $auth, User $subject)
    {
        return $auth->hasPermissionTo('update-users');
    }

    public function delete(User $auth, User $subject)
    {
        return $auth->hasPermissionTo('delete-users');
    }
}
