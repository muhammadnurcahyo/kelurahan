<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\GreetController;
use App\Models\About;
use App\Models\Greet;
use App\Models\Category;
use App\Models\Blog;

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'proses_login']);
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('register', [AuthController::class, 'register']);
Route::middleware(['isloggedin'])->group(function () {
Route::get('/admin/dashboard/', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/edit-profil', [AdminController::class, 'edit'])->name('edit-profile');
Route::post('/admin/edit-profil', [AdminController::class, 'update'])->name('edit-profile');
//seeder
Route::get('/admin/regis-bumdes', [AdminController::class, 'addBumdes']);


Route::get('/admin/edit-bumdes', [AdminController::class, 'editBumdes'])->name('edit-bumdes');
Route::post('/admin/edit-bumdes', [AdminController::class, 'updateBumdes']);

//blogs
Route::get('/admin/blogs', [BlogsController::class, 'index'])->name('blogs');
Route::get('/admin/blogs/add', [BlogsController::class, 'create'])->name('addblogs');
Route::get('/admin/blogs/edit/{id}', [BlogsController::class, 'update']);
Route::post('/admin/blogs/add', [BlogsController::class, 'store']);
Route::put('/admin/blogs/edit/{id}', [BlogsController::class, 'edit']);
Route::post('/admin/blogs/delete/{id}', [BlogsController::class, 'delete']);
Route::get('/admin/blogs/{id}/comments', [BlogsController::class, 'comments']);
route::post('/admin/blogs/comment/delete/{id}', [BlogsController::class, 'deleteComments']);
//categories
Route::get('/admin/categories', [CategoriesController::class, 'index'])->name('blogs');
Route::get('/admin/categories/add', [CategoriesController::class, 'create'])->name('addblogs');
Route::get('/admin/categories/edit/{id}', [CategoriesController::class, 'update']);
Route::post('/admin/categories/add', [CategoriesController::class, 'store']);
Route::put('/admin/categories/edit/{id}', [CategoriesController::class, 'edit']);
Route::post('/admin/categories/delete/{id}', [CategoriesController::class, 'delete']);
//abouts
Route::get('/admin/abouts/seeder', [AboutController::class, 'seeder']);
Route::get('/admin/abouts', [AboutController::class, 'index']);
Route::get('/admin/abouts/edit/{id}', [AboutController::class, 'update']);
Route::put('/admin/abouts/edit/{id}', [AboutController::class, 'edit']);
//slider
Route::get('/admin/slider', [SliderController::class, 'index'])->name('slider');
Route::get('/admin/slider/add', [SliderController::class, 'create'])->name('addslider');
Route::get('/admin/slider/edit/{id}', [SliderController::class, 'update']);
Route::post('/admin/slider/add', [SliderController::class, 'store']);
Route::put('/admin/slider/edit/{id}', [SliderController::class, 'edit']);
Route::post('/admin/slider/delete/{id}', [SliderController::class, 'delete']);
//logout
Route::get('/admin/logout', [AuthController::class, 'logout']);
Route::get('/admin/change-password', [AuthController::class, 'changepass']);
Route::post('/admin/change-password', [AuthController::class, 'authPass']);
//social
Route::get('/admin/social', [SocialController::class, 'index']);
Route::get('/admin/social/add', [SocialController::class, 'add'])->name('add');
Route::get('/admin/social/edit/{id}', [SocialController::class, 'edit']);
Route::post('/admin/social/add', [SocialController::class, 'store']);
Route::put('/admin/social/edit/{id}', [SocialController::class, 'update']);
Route::post('/admin/social/delete/{id}', [SocialController::class, 'delete']);


//kontak
//Route::get('/admin/inbox', [InboxController::class, 'index']);
//Route::delete('/admin/inbox/{id}', [InboxController::class, 'delete']);
//Route::post('/admin/inbox/{id}', [AuthController::class, 'authPass']);

//


//greet
Route::get('/admin/greet/', [GreetController::class, 'index']);
Route::get('/admin/greet/{id}', [GreetController::class, 'edit']);
Route::get('/admin/greet-seeder', [GreetController::class, 'seeder']);
Route::put('/admin/greet/{id}', [GreetController::class, 'update']);

Route::get('/admin/kontak', [MessagesController::class, 'getAll']);
Route::get('/admin/kontak/{id}', [MessagesController::class, 'read']);
Route::post('/admin/kontak/delete/{id}', [MessagesController::class, 'Delete']);


});

//guest view
Route::get('/', [GuestController::class, 'home'])->name('home');
Route::get('/home', [GuestController::class, 'home']);
Route::get('/berita', [BlogsController::class, 'allblogs'])->name('blogs');

Route::get('/search', [BlogsController::class, 'allblogslike']);

Route::get('/berita/{slug}', [BlogsController::class, 'guest'])->name('blog');
Route::get('/about/{slug}', [BlogsController::class, 'about']);
Route::get('/greeting/{slug}', [BlogsController::class, 'greeting']);

Route::get('/kontak', [GuestController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [MessagesController::class, 'Store']);

Route::get('/kategori/{slug}', [BlogsController::class, 'byCategory'])->name('kategori');
Route::post('/comment/{id}', [CommentController::class, 'store'])->name('comment');

//social

//sitemap
Route::get('/sitemap', function(){
    $sitemap = Sitemap::create()
    ->add(Url::create('/berita'))
    ->add(Url::create('/kontak'))
    ->add(Url::create('/home'));

    $abouts = About::all();
    $greets = Greet::all();
    $categories = Category::all();
    $news = Blog::all();
    foreach ($abouts as $a) {
        $sitemap->add(Url::create("/about/{$a->slug}"));
    }

    foreach ($greets as $g) {
        $sitemap->add(Url::create("/greeting/{$g->slug}"));
    }

    foreach ($categories as $c) {
        $sitemap->add(Url::create("/kategori/{$c->slug}"));
    }

    foreach ($news as $n) {
        $sitemap->add(Url::create("/berita/{$n->slug}"));
    }

    $sitemap->writeToFile(public_path('sitemap.xml'));
});
