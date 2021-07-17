<?php

namespace App\Http\Controllers;

use App\Contracts\UserResourceFactory;
use App\Models\User;

class UsersController extends Controller
{
    public function show(User $user, UserResourceFactory $resourceFactory)
    {
        return $resourceFactory->makeUserResource($user);
    }
}
