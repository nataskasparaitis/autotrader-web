<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::getAllCategories();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:categories',
            'description' => 'nullable|string|max:255',
        ]);

        Category::addCategory($request->only(['name', 'description']));
        \Log::info('Admin added category: ' . $request->name);
        return redirect('/admin/categories');
    }

    public function edit($id)
    {
        $category = Category::getCategoryById($id);
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:categories,name,' . $id,
            'description' => 'nullable|string|max:255',
        ]);

        Category::updateCategory($id, $request->only(['name', 'description']));
        \Log::info('Admin updated category: ' . $request->name);
        return redirect('/admin/categories');
    }

    public function destroy($id)
    {
        Category::deleteCategory($id);
        \Log::info('Admin deleted category ID: ' . $id);
        return redirect('/admin/categories');
    }
}
