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
            return view('devices.welcome');
        }
        else{
            return view('error.404');
        }
        
    }
}
