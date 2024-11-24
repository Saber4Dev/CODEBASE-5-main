<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallBackController extends Controller
{
    function fallback()
    {
        return redirect('/dashboard');
    }
}
