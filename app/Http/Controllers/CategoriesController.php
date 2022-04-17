<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->getNotifMessage();
    }

    public function index()
    {
        $data = Category::paginate(10);

        return view('admin.category', compact('data'));
    }

    public function delete($id)
    {
        $deletedRows = Category::where('id', $id)->delete();

        return back()->with('success', 'data berhasil dihapus');
    }

    public function create()
    {
        $kind = ['produk', 'lainya'];

        return view('admin.add-category', compact('kind'));
    }

    public function update($id)
    {
        $data = Category::find($id);
        $kind = ['produk', 'lainya'];

        return view('admin.add-category', compact('data', 'kind'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kind' => 'required',
        ]);

        try {
            $category = new Category();
            $category->name = $request->name;
            $category->slug = str_slug($request->name);
            $category->kind = $request->kind;
            $category->save();

            return back()->with('success', 'Success! data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return back()->with('failed', 'Alert! terjadi kesalahan');
        }
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'kind' => 'required',
        ]);
        try {
            $category = Category::where(['id' => $id])->first();
            $category->name = $request->name;
            $category->slug = str_slug($request->name);
            $category->kind = $request->kind;
            $category->save();

            return back()->with('success', 'Success! data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return back()->with('failed', 'Alert! terjadi kesalahan');
        }
    }
}
