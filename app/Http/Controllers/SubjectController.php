<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\SubjectRequest;
use App\Subject;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class SubjectController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        $subjects = Subject::latest()->paginate(10);
        if(Route::currentRouteName() == 'admin.subjects.index')
            return view('admins.subjects.index', ['subjects' => $subjects]);
        else
            return view('clients.subject');
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        $categories = Category::all();
        return view('admins.subjects.create', ['categories' => $categories]);
    }

    /**
     * @param SubjectRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SubjectRequest $request)
    {
        $data = [
            'name' => $request->input('name'),
            'category_id' => $request->input('category'),
            'description' => $request->input('description'),
        ];
        Subject::create($data);
        $request->session()->put('message', 'Đã thêm môn học mới.');
        return redirect()->route('admin.subjects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function show($id)
    {
        $subject = Subject::findOrFail($id);
        if(Route::currentRouteName() == 'admin.subjects.show')
            return view('admins.subjects.show', ['subject' => $subject]);
        else
            return view('clients.subject');
    }

    /**
     * @param $id
     * @return Factory|View
     */
    public function edit($id)
    {
        $categories = Category::all();
        $subject = Subject::findOrFail($id);
        return view('admins.subjects.create', ['subject' => $subject, 'categories' => $categories]);
    }

    /**
     * @param SubjectRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SubjectRequest $request, $id)
    {
        $data = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category')
        ];
        $subject = Subject::findOrFail($id);
        $subject->update($data);
        $request->session()->put('message', 'Đã cập nhập môn học thành công.');
        return redirect()->route('admin.subjects.index');
    }

    /**
     * @param $id
     * @return Factory|View
     */
    public function destroy($id)
    {
        Subject::destroy($id);
        $subjects = Subject::latest()->paginate(10);
        return view('admins.tables.subject', ['subjects' => $subjects]);
    }
}
