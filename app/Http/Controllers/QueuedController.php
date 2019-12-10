<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\Queue;

class QueuedController extends Controller
{
    public function test()
    {

        $arr=array(
            'time'=>time()
        );

        $this->dispatch(new Queue($arr));
        echo "³É¹¦";
    }
}
