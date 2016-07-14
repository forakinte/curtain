<?php

namespace App\Http\Controllers\test;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    //
    public function __construct()
    {
    }

    public function index()
    {
        phpinfo();
    }
}
