<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class QueueController extends Controller
{
    public function index()
    {
        return  view('queue.create');
    }
    
    public function list($username)
    {
        return view('queue.list', [
            'user' => User::where('username', $username)->first()
        ]);
    }

    public function show($username, $queue)
    {
        $queue = Queue::where('identifier', $queue)->first();
        if ($queue) {
            return view('queue.show', [
                'user' => User::where('username', $username)->first(),
                'queue' => $queue
            ]);
        }
        else
            return view('error.404');
        
    }

    public function createRandomIdentifier($length = 6)
    {
        $characters = 'aceimnorsuvwxz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unq; $loopx = true;
        while($loopx) {
            $unq = $this->createRandomIdentifier(3) . '-' . $this->createRandomIdentifier(3);
            if(Queue::where('identifier' , $unq)->count() == 0) {
                $loopx = false;
            } 
            else {
                $loopx = true;
            }
        }

        $data = new Queue;

        $data->identifier = $unq;
        $data->name = $request->qname;
        $data->description = $request->qdescription;
        $data->logo = '';
        $data->interval = 5000;
        $data->type = $request->Radios;
        $data->user_id = Auth::user()->id;
        
        if ($data->save()) {
            //$this->dispatchBrowserEvent( 'alert', ['type' => 'success',  'message' => 'Successfully added queue']);
            $request->session()->flash('success', 'Successfully added queue');
            return redirect('/'.Auth::user()->username.'/'.$unq);
        } 
    }

    public function transfer(Request $request, $queId)
    {
        $usrcount = User::where('username', $request->username)->count();
        
        if ($usrcount == 1) {
            if ($request->username == Auth::user()->username) 
            {
                $request->session()->flash('warning', 'You can\'t share your queue to your username');
                return redirect()->back();
            }
            else
            {
                $usr = User::where('username', $request->username)->first();

                $data = Queue::find($queId);
        
                $data->user_id = $usr->id;

                if ($data->save()) {
                    $request->session()->flash('success', 'Your Queue transfered successful');
                    return redirect('/'.Auth::user()->username.'/queues');
                } 
            }
        }
        else {
            $request->session()->flash('error', 'Please enter a valid username');
            return redirect()->back();
        }


        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Queue $queue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $queId)
    {
        $Queue = Queue::find($queId);
        if($Queue->delete())
        {
            $request->session()->flash('success', 'Successfully deleted queue');
            return redirect('/'.Auth::user()->username.'/queues');
        }
    }
}
