<?php

namespace App\Http\Controllers;

use App\Http\Requests\postUserAccountRequest;
use App\Info_User;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{

    protected $infoUser;
    protected $user;

    public function __construct(Info_User $info_User, User $user)
    {
        $this->infoUser = $info_User;
        $this->user = $user;
    }

    public function responseJson($message, $data, $statusCode)
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * Store a newly created resource in storage.
     *
     * @param postUserAccountRequest $request
     * @return Factory|View
     */
    public function store(postUserAccountRequest $request)
    {
        $data = $request->all();
        $newsUser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status' => 1
        ]);
        $this->infoUser->create([
            'user_id' => $newsUser->id
        ]);

        $listInfoUser = $this->infoUser->getAll();
        return view('admins.tables.customer', ['listInfoUser' => $listInfoUser]);
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
     * @param Request $request
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
     * @return Factory|View
     */
    public function destroy($id)
    {
        $this->user->destroy($id);
        $listInfoUser = $this->infoUser->getAll();
        return view('admins.tables.customer', ['listInfoUser' => $listInfoUser]);
    }
}
