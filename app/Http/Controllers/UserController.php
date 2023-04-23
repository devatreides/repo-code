<?php

namespace App\Http\Controllers;

use App\Actions\StoreUSer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreUSer $action)
    {
        return $action->handle();
    }
}
