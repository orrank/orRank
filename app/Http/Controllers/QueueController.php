<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use Illuminate\Http\Request;
use Auth;
class QueueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('queue.create');
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
        $data->type = $request->Radios;
        $data->user_id = Auth::user()->id;
        
        if ($data->save()) {
            echo "added queue";
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function show(Queue $queue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function edit(Queue $queue)
    {
        //
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
    public function destroy(Queue $queue)
    {
        //
    }
}
