<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Subject;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $listCategory = Category::latest()->paginate(10);
        return view('admins.Categories.index', ['listCategory' => $listCategory]);
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('admins.Categories.create');
    }

    /**
     * @param CategoryRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        $data= [
            'name' => $request->input('name'),
            'description' => $request->input('description')
            ];
        Category::create($data);
        $request->session()->put('message', 'Đã thêm lĩnh vực mới.');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::with('subjects')->findOrFail($id);
        return view('clients.category', ['category' => $category]);
    }

    /**
     * @param $id
     * @return Factory|View
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admins.Categories.create', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = [
            'name' => $request->name,
            'description' => $request->description
        ];
        $category->update($data);
        $request->session()->put('message', 'Cập nhập lĩnh vực thành công');
        return redirect()->route('categories.index');
    }

    /**
     * @param $id
     * @return Factory|View
     */
    public function destroy($id)
    {
        $category = Category::destroy($id);
        $listCategory = Category::latest()->paginate(10);
        return view('admins.tables.category', ['listCategory' => $listCategory]);
    }
}
