<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\NumberController;
use App\Http\Controllers\Admin\HumanController;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'welcome'])->name('welcome');
Route::prefix('pages/')->name('pages.')->group(function(){

    Route::get('achievements/', [PagesController::class, 'achievements'])->name('achievements');
    Route::get('article/', [PagesController::class, 'article'])->name('article');
    Route::get('blog/', [PagesController::class, 'blog'])->name('blog');
    Route::get('/groups', [PagesController::class, 'groups'])->name('groups');
    Route::get('gallary/', [PagesController::class, 'gallary'])->name('gallary');
    Route::get('team/', [PagesController::class, 'team'])->name('team');
    Route::get('contact/', [PagesController::class, 'contact'])->name('contact');
    Route::get('views/', [PagesController::class, 'views'])->name('views');
  


   
    Route::post('order/store', [PagesController::class, 'store'])->name('order.store');
   

});

Route::prefix('admin/')->name('admin.')->group(function(){
    Route::get('dashboard', function(){
        return view('admin.layouts.dashboard');
    })->name('dashboard');

 Route::resource('infos', InfoController::class);

 Route::resource('groups', GroupController::class);
 
 Route::resource('teachers',TeacherController::class);

 Route::resource('comments', CommentController::class);

 Route::resource('blogs', BlogController::class);

 Route::resource('numbers', NumberController::class);

 Route::resource('humans', HumanController::class);
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';