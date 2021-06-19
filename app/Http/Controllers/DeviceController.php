<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Queue;

class DeviceController extends Controller
{
    public function index($queue)
    {
        $cq = Queue::where('identifier', $queue)->count();   

        if($cq == 1) {
            $queue = Queue::where('identifier', $queue)->first();
            return view('devices.welcome', ['queue' => $queue]);
        }
        else{
            return view('error.404');
        }
        
    }
}
