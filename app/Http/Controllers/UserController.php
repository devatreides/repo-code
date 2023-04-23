<?php

namespace App\Http\Controllers;

use App\Actions\StoreUser;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreUser $action)
    {
        return User::all();
        // return $action->handle();
    }
}
