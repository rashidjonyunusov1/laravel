<?php

use App\Http\Controllers\Admin\InfoController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
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
    Route::get('/', [AdminController::class, 'welcome'])->name('welcome');
    Route::prefix('pages/')->name('pages.')->group(function(){

    Route::get('achievements/', [AdminController::class, 'achievements'])->name('achievements');
    Route::get('article/', [AdminController::class, 'article'])->name('article');
    Route::get('blog/', [AdminController::class, 'blog'])->name('blog');
    Route::get('/groups', [AdminController::class, 'groups'])->name('groups');
    Route::get('gallary/', [AdminController::class, 'gallary'])->name('gallary');
    Route::get('team/', [AdminController::class, 'team'])->name('team');
    Route::get('contact/', [AdminController::class, 'contact'])->name('contact');
    Route::get('views/', [AdminController::class, 'views'])->name('views');
  


   

    Route::post('order/store', [PagesController::class, 'store'])->name('order.store');
   

});

Route::prefix('admin/')->name('admin.')->group(function(){
    Route::get('dashboard', function(){
        return view('admin.layouts.dashboard');
    })->name('dashboard');

    Route::get('infos/index', [InfoController::class, 'index'])->name('infos.index');
    Route::get('infos/create', [InfoController::class, 'Create'])->name('infos.create');
    Route::post('infos/store', [InfoController::class, 'store'])->name('infos.store');
});
























// Route::get('/',[PagesController::class, 'welcome'])->name('welcome');
// Route::get('/about/{a}/{b}/{c}',[PagesController::class, 'about'])->name('about');

// Route::get('/contact',[PagesController::class, 'contact'])->name('contact');
//Admin Pages
// Route::prefix('admin/')->name('admin.')->group(function(){
//     // 1
//     Route::get('index',[AdminController::class, 'index'])->name('index');
//     // 2
//     Route::get('about',[AdminController::class, 'about'])->name('about');
//     // 3
//     Route::get('contact',[AdminController::class, 'contact'])->name('contact');
//     // 4
//     Route::get('product',[AdminController::class, 'product'])->name('product');
//     // 5
//     Route::get('services',[AdminController::class, 'services'])->name('services');
//     // 6
//     Route::get('like', [AdminController::class, 'like'])->name('like');
//     // 7
//     Route::get('messages',[AdminController::class, 'messages'])->name('messages');
//     // 8
//     Route::get('profile',[AdminController::class, 'profile'])->name('profile');
//     // 9
//     Route::get('money',[AdminController::class, 'money'])->name('money');
//     // 10
//     Route::get('date',[AdminController::class, 'date'])->name('date');
// });
// //Client Pages
// Route::prefix('client/')->name('client.')->group(function(){
//         // 1
//         Route::get('index',[ClientController::class, 'index'])->name('index');
//         // 2
//         Route::get('about',[ClientController::class, 'about'])->name('about');
//         // 3
//         Route::get('contact',[ClientController::class, 'contact'])->name('contact');
//         // 4
//         Route::get('product',[ClientController::class, 'product'])->name('product');
//         // 5
//         Route::get('services',[ClientController::class, 'services'])->name('services');
//         // 6
//         Route::get('like', [ClientController::class, 'like'])->name('like');
//         // 7
//         Route::get('messages',[ClientController::class, 'messages'])->name('messages');
//         // 8
//         Route::get('profile',[ClientController::class, 'profile'])->name('profile');
//         // 9
//         Route::get('money',[ClientController::class, 'money'])->name('money');
//         // 10
//         Route::get('date',[ClientController::class, 'date'])->name('date');
// });

// // Meneger Pages

// Route::prefix('meneger/')->name('meneger.')->group(function(){
    
//          // 1
//          Route::get('index',[MenegerController::class, 'index'])->name('index');
//          // 2
//          Route::get('about',[MenegerController::class, 'about'])->name('about');
//          // 3
//          Route::get('contact',[MenegerController::class, 'contact'])->name('contact');
//          // 4
//          Route::get('product',[MenegerController::class, 'product'])->name('product');
//          // 5
//          Route::get('services',[MenegerController::class, 'services'])->name('services');
//          // 6
//          Route::get('like', [MenegerController::class, 'like'])->name('like');
//          // 7
//          Route::get('messages',[MenegerController::class, 'messages'])->name('messages');
//          // 8
//          Route::get('profile',[MenegerController::class, 'profile'])->name('profile');
//          // 9
//          Route::get('money',[MenegerController::class, 'money'])->name('money');
//          // 10
//          Route::get('date',[MenegerController::class, 'date'])->name('date');
// });

// // User Pages

// Route::prefix('user/')->name('user.')->group(function(){
//          // 1
//          Route::get('index',[UserController::class, 'index'])->name('index');
//          // 2
//          Route::get('about',[UserController::class, 'about'])->name('about');
//          // 3
//          Route::get('contact',[UserController::class, 'contact'])->name('contact');
//          // 4
//          Route::get('product',[UserController::class, 'product'])->name('product');
//          // 5
//          Route::get('services',[UserController::class, 'services'])->name('services');
//          // 6
//          Route::get('like', [UserController::class, 'like'])->name('like');
//          // 7
//          Route::get('messages',[UserController::class, 'messages'])->name('messages');
//          // 8
//          Route::get('profile',[UserController::class, 'profile'])->name('profile');
//          // 9
//          Route::get('money',[UserController::class, 'money'])->name('money');
//          // 10
//          Route::get('date',[UserController::class, 'date'])->name('date');
// });