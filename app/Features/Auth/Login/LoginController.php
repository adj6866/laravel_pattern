<?php

namespace App\Features\Auth\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        return 'oke';
    }
}
