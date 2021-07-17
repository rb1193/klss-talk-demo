<?php

namespace App\Contracts;

use App\Http\Resources\UserResource;
use App\Models\User;

interface UserResourceFactory
{
    public function makeUserResource(User $user): UserResource;
}
