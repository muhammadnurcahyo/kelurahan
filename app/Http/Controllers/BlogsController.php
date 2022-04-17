<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Display;
use App\Models\Greet;
use App\Models\Social;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function __construct()
    {
        $this->getNotifMessage();
    }

    public function index()
    {
        $data = Blog::with('category')->paginate(10);

        return view('admin.blogs', compact('data'));
    }

    public function comments($id)
    {
        $data = Comment::where('blog_id', $id)->paginate(10);

        return view('admin.comments', compact('data'));
    }

    public function deleteComments($id)
    {
        $deletedRows = Comment::where('id', $id)->delete();

        return back()->with('success', 'data berhasil dihapus');
    }

    public function about($slug)
    {
        $data = About::where('slug', $slug)->first();
        $abouts = About::all();
        $displays = Display::first();
        $socials = Social::all();
        $categories = Category::all();
        $latest = Blog::latest()->take(3)->get();
        $product = Category::where('kind', 'produk')->get();

        return view('guest.profil', compact('data', 'abouts', 'displays', 'socials', 'categories', 'product', 'latest'));
    }

    public function greeting($slug)
    {
        $data = Greet::where('slug', $slug)->first();
        $abouts = About::all();
        $displays = Display::first();
        $socials = Social::all();
        $categories = Category::all();
        $latest = Blog::latest()->take(3)->get();
        $product = Category::where('kind', 'produk')->get();

        return view('guest.kades', compact('data', 'abouts', 'displays', 'socials', 'categories', 'product', 'latest'));
    }

    public function byCategory($slug)
    {
        $ctgry = Category::where('slug', $slug)->first();
        $data = Blog::where('category_id', $ctgry->id)->paginate(5);
        $latest = $latest = Blog::latest()->orderBy('id', 'desc')->take(3)->get();
        $abouts = about::all();
        $categories = Category::all();
        $product = Category::where('kind', 'produk')->get();
        $displays = Display::first();
        $socials = Social::all();

        return view('guest.bykategori', compact('data', 'categories', 'product', 'latest', 'abouts', 'displays', 'socials'));
    }

    public function guest($slug)
    {
        $data = Blog::where('slug', $slug)->first();
        $id = $data->id;
        $suggest = Blog::whereNotIn('id', [$id])
            ->inRandomOrder()
            ->limit(2)
            ->get();
        $blogs = Blog::latest()->orderBy('id', 'desc')->take(3)->get();
        $categories = Category::all();
        $product = Category::where('kind', 'produk')->get();
        $abouts = About::all();
        $displays = Display::first();
        $comments = Comment::where('blog_id', $id)->get();
        $socials = Social::all();

        return view('guest.blog', compact('data', 'suggest', 'blogs', 'product', 'categories', 'abouts', 'displays', 'comments', 'socials'));
    }

    public function allblogs()
    {
        $blogs = Blog::with('category')->paginate(7);
        // $data = Blog::join('categories','categories.id','blogs.category')->select('blogs.id as id', 'title','categories.category as category','desc', 'img','slug','blogs.created_at as created_at')->orderBy('blogs.id', 'desc')->paginate(7);
        $categories = Category::all();
        $product = Category::where('kind', 'produk')->get();
        $abouts = about::all();
        $displays = Display::first();
        $socials = Social::all();
        $latest = Blog::latest()->orderBy('id', 'desc')->take(3)->get();

        return view('guest.blogs', compact('blogs', 'categories', 'product', 'abouts', 'displays', 'socials', 'latest'));
    }

    public function allblogslike(Request $request)
    {
        $key = $request->only('key');
        $data = Blog::where('title', 'LIKE', '%'.$key['key'].'%')->orderBy('blogs.id', 'desc')->paginate(5);
        $latest = Blog::latest()->paginate(3);
        $categories = Category::all();
        $product = Category::where('kind', 'produk')->get();
        $abouts = about::all();
        $displays = Display::first();
        $socials = Social::all();

        return view('guest.blogsrch', compact('data', 'categories', 'product', 'abouts', 'displays', 'latest', 'socials'));
    }

    public function create()
    {
        $category = Category::all();

        return view('admin.add-blogs', compact('category'));
    }

    public function update($id)
    {
        $category = Category::all();
        $data = Blog::find($id);

        return view('admin.add-blogs', compact('category', 'data'));
    }

    public function delete($id)
    {
        $row = Blog::find($id);
        $deletedRows = $row->delete();
        if (file_exists(public_path().'/images/informations/'.$row['img'])) {
            unlink(public_path().'/images/informations/'.$row['img']);
        }

        return back()->with('success', 'data berhasil dihapus');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required|min:5',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        try {
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->slug = str_slug($request->title);
            $blog->desc = $request->desc;
            $blog->category_id = $request->category;
            if ($request->hasFile('img')) {
                $data = $request->except('_token');
                $filenameWithExt = $request->file('img')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $originalImage = $request->file('img');
                $originalImage->move(public_path().'/images/informations/', $fileNameToStore);
                $blog->img = $fileNameToStore;
            }
            $blog->save();

            return back()->with('success', 'Success! data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return back()->with('failed', 'Alert! terjadi kesalahan');
        }
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required|min:5',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        try {
            $blog = Blog::find($id);
            $blog->title = $request->title;
            $blog->slug = str_slug($request->title);
            $blog->desc = $request->desc;
            $blog->category_id = $request->category;
            if ($request->hasFile('img')) {
                $data = $request->except('_token');
                $filenameWithExt = $request->file('img')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $originalImage = $request->file('img');
                $originalImage->move(public_path().'/images/informations/', $fileNameToStore);
                $blog->img = $fileNameToStore;
            }
            $blog->save();

            return back()->with('success', 'Success! data berhasil diubah');
        } catch (\Throwable $th) {
            return back()->with('failed', 'Alert! terjadi kesalahan');
        }
    }

    public function editVisiMisi()
    {
        // $request->validate([
        //     'name' => 'required',
        //     'desc' => 'required|min:5',
        //     'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        // ]);
        // $post = About::find($id);
        // $data = $request->except('_token');
        // if ($request->hasFile('img')) {
        //     $filenameWithExt = $request->file('img')->getClientOriginalName();
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('img')->getClientOriginalExtension();
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //     $originalImage = $request->file('img');
        //     $originalImage->move(public_path().'/images/informations/', $fileNameToStore);
        //     $age = ['img' => $fileNameToStore, 'title' => $data['title'], 'category' => $data['category'], 'desc' => $data['desc']];
        //     unlink(public_path().'/images/informations/'.$post['img']);
        // } else {
        //     $age = ['img' => $post['img'], 'title' => $data['title'], 'category' => $data['category'], 'desc' => $data['desc']];
        // }
        // $info = $post->update($age);
        // if (!is_null($info)) {
        //     return back()->with('success', 'Success! data berhasil diupdate');
        // } else {
        //     return back()->with('failed', 'Alert! terjadi kesalahan');
        // }
    }
}
