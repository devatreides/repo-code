<?php

namespace App\Http\Controllers;

use App\Actions\StoreUser;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreUser $action)
    {
        return $action->handle();
    }
}
