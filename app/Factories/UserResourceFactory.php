<?php

namespace App\Factories;

use App\Contracts\UserResourceFactory as ContractsUserResourceFactory;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserResourceFactory implements ContractsUserResourceFactory
{
    public function makeUserResource(User $user): UserResource
    {
        return new UserResource($user);
    }
}
