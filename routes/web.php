<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\NumberController;
use App\Http\Controllers\Admin\HumanController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\RegionController;
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

 Route::resource(
    ['infos' => InfoController::class,
    'groups', GroupController::class,
    'teachers',TeacherController::class,
    'comments', CommentController::class,
    'blogs', BlogController::class,
    'numbers', NumberController::class,
    'humans', HumanController::class,
    'districts', DistrictController::class,
    'regions', RegionController::class,
]);

});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';