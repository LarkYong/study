<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function setRedis()
    {
        Redis::set('name', 'liangyong');
    }

    public function getRedis()
    {
        dd(Redis::get('name'));
    }
}
