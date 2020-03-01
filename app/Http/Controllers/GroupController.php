<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\GroupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class GroupController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $groups = Group::latest()->with('user')->paginate(10);
        if(Route::currentRouteName() == 'admin.groups.index')
            return view('admins.groups.index', ['groups' => $groups]);
        else
            return view('clients.group',['groups' => $groups]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admins.groups.create-or-update');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(GroupRequest $request)
    {
        $data = [
            'key_word' => $request->input('key_word'),
            'description' => $request->input('description'),
            'user_id' => Auth::user()->id
        ];
        Group::create($data);
        $request->session()->put('message', 'Đã thêm group mới.');
        return redirect()->route('admin.groups.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $group = Group::findOrFail($id);
        return view('admins.groups.show', ['group' => $group]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $group = Group::findOrFail($id);
        return view('admins.groups.create-or-update', ['group' => $group]);
    }

    /**
     * @param GroupRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(GroupRequest $request, $id)
    {
        $data = [
            'key_word' => $request->input('key_word'),
            'description' => $request->input('description'),
            'user_id' => Auth::user()->id
        ];
        $group = Group::findOrFail($id);
        $group->update($data);
        $request->session()->put('message', 'Đã cập nhập group thành công.');
        return redirect()->route('admin.groups.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function destroy($id)
    {
        Group::destroy($id);
        $groups = Group::with('user')->latest()->paginate(10);
        return view('admins.tables.group', ['groups' => $groups]);
    }
}
