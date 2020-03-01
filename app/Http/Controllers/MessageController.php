<?php

namespace App\Http\Controllers;

use App\Events\MessagePosted;
use App\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redis;

class MessageController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index($group_id)
    {
        return Messages::with('user')->with('group')->where('group_id', '=', $group_id)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * @param Request $request
     * @return array
     */
    public function store(Request $request, $group_id)
    {
        $user = Auth::user();
        $data = [
            'user_id' => Auth::user()->id,
            'group_id' => $group_id,
            'content' => $request->input('content')
        ];
        $message = Messages::create($data);

        broadcast(new MessagePosted($message, $user))->toOthers();

        return ['status' => 'OK'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
