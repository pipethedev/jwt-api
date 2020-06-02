<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class SignOutController extends Controller
{
    public function __invoke(){
        auth()->logout();
    }
}
