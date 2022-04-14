<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Information;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\About;
use App\Models\Display;
use App\Models\Social;
use App\Models\Greet;
class GuestController extends Controller
{
    public function __construct(){
        $this->display = Display::first();
    }

    public function home(){
        //get latest news
        $blogs = Blog::join('categories','categories.id','blogs.category')->select('blogs.id as id', 'title','categories.category as category', 'blogs.created_at as created_at','desc', 'img','categories.slug as slug', 'blogs.slug as titleslug')->orderBy('id', 'desc')->take(7)->get();

        $categories = Category::all();
        $sliders = Slider::all();
        $abouts = About::all();
        $displays = $this->display;
        $socials = Social::all();
        $greet = Greet::all();
        return view("guest.home", compact('blogs','categories','sliders','abouts','displays','socials','greet'));
    }

    public function kontak(){
        $abouts = About::all();
        $displays = $this->display;
        $socials = Social::all();

        return view("guest.kontak", compact('displays','abouts','socials'));

    }


    public function testimoni(){
        $data = Testimonial::all();
        $displays = $this->display;
        $socials = Social::first();

        return view("guest.testimoni",compact('data','displays','socials'));
    }

    public function perizinan(){
        $data = Permission::all();
        $displays = $this->display;

        return view("guest.perizinan", compact('data'));
    }

    public function informasi(){
        $data = Information::paginate(5);
        return view("guest.informasi", compact('data'));
    }


    public function getDetail($id){
        return Testimonial::find($id);
    }
    public function artikel($id){
        $data = Information::find($id);
        $articles = Information::paginate(5);

        return view("guest.artikel",compact('data','articles'));
    }
}
