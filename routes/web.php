<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TemplateSettingController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Middleware\SetFa;
use App\Http\Middleware\SetEn;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => [SetFa::class]], function () {

    Route::get('/', [WebsiteController::class, 'index'])->name('index');
    Route::get('/about', [WebsiteController::class, 'about']);
    Route::get('/contact', [WebsiteController::class, 'contact']);
    Route::get('/blog', [WebsiteController::class, 'blog']);
    Route::get('/gallery', [WebsiteController::class, 'gallery']);
    Route::get('/blog/{id}/{slug}', [WebsiteController::class, 'singleBlog']);
    Route::post('/contact/send', [WebsiteController::class, 'contactSend']);
});

Route::group(['prefix' => 'en', 'middleware' => [SetEn::class]], function () {
    Route::get('/', [WebsiteController::class, 'index'])->name('index');
    Route::get('/biography', [WebsiteController::class, 'biography']);
    Route::get('/gallery', [WebsiteController::class, 'products']);
    Route::get('/gallery/{id}/{slug}', [WebsiteController::class, 'singleProduct']);
    Route::get('/gallery/{id}/{slug}/sendReq', [WebsiteController::class, 'sendReq']);
    Route::get('/contact', [WebsiteController::class, 'contact']);
    Route::get('/events', [WebsiteController::class, 'events']);
    Route::get('/events/{id}/{slug}', [WebsiteController::class, 'singleEvent']);
    Route::post('/contact/send', [WebsiteController::class, 'contactSend']);
});
Auth::routes();


//admin routes
Route::group(['prefix' => 'arts-admin'], function () {
    Route::get('/', [BlogController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [BlogController::class, 'index'])->name('blog.index');
        Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/create', [BlogController::class, 'store'])->name('blog.store');
        Route::get('/{post}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::put('/{post}', [BlogController::class, 'update'])->name('blog.update');
        Route::delete('/{post}', [BlogController::class, 'destroy'])->name('blog.destroy');
    });
    Route::group(['prefix' => 'photos'], function () {
        Route::get('/', [PhotoController::class, 'index'])->name('photo.index');
        Route::get('/create', [PhotoController::class, 'create'])->name('photo.create');
        Route::post('/create', [PhotoController::class, 'store'])->name('photo.store');
        Route::get('/{photo}', [PhotoController::class, 'edit'])->name('photo.edit');
        Route::put('/{photo}', [PhotoController::class, 'update'])->name('photo.update');
        Route::delete('/{photo}', [PhotoController::class, 'destroy'])->name('photo.destroy');
    });
    Route::group(['prefix' => 'template'], function () {
        Route::get('/', [TemplateSettingController::class, 'index'])->name('template.index');
        Route::get('/{template}', [TemplateSettingController::class, 'edit'])->name('template.edit');
        Route::put('/{template}', [TemplateSettingController::class, 'update'])->name('template.update');

    });
});
Route::get('/home', [ProductsController::class, 'adminIndex'])->name('home');
Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])->name('sitemap');

Route::get('/pp', function () {
    return (public_path());
});


//Route::get('/sitemap', [WebsiteController::class, 'sitemap'])->name('sitemap');

//Route::get('/sitemap.xml', [SitemapController::class, 'index']);
//Route::group(['prefix' => 'sitemap'], function () {
//    Route::get('products.xml', ['as' => 'sitemap.products', 'uses' => [SitemapController::class, 'products']]);
//    Route::get('events.xml', ['as' => 'sitemap.events', 'uses' => [SitemapController::class, 'events']]);
//
//});