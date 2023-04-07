<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[PagesController::class, 'welcome'])->name('welcome');
Route::get('/about/{a}/{b}/{c}',[PagesController::class, 'about'])->name('about');

Route::get('/contact',[PagesController::class, 'contact'])->name('contact');
//Admin Pages
Route::prefix('admin/')->name('admin.')->group(function(){
    // 1
    Route::get('index', function () {
        return view('admin.index');
    })->name('index');
    // 2
    Route::get('about',function(){
        return view('admin.about');
    })->name('about');
    // 3
    Route::get('contact',function(){
        return view('admin.contact');
    })->name('contact');
    // 4
    Route::get('product', function () {
        return view('admin.product');
    })->name('product');
    // 5
    Route::get('services',function(){
        return view('admin.services');
    })->name('services');
    // 6
    Route::get('like', function() {
        return view('admin.like');
    })->name('like');
    // 7
    Route::get('messages', function() {
        return view('admin.messages');
    })->name('messages');
    // 8
    Route::get('profile', function() {
        return view('admin.profile');
    })->name('profile');
    // 9
    Route::get('money', function() {
        return view('admin.money');
    })->name('money');
    // 10
    Route::get('date', function() {
        return view('admin.date');
    })->name('date');
});
//Client Pages
Route::prefix('client/')->name('client.')->group(function(){
    
    Route::get('index', function () {
        return view('client.index');
    })->name('index');

    Route::get('like', function () {
        return view('client.like');
    })->name('like');

    Route::get('messages', function () {
        return view('client.messages');
    })->name('messages');

    Route::get('money', function () {
        return view('client.money');
    })->name('money');

    Route::get('product', function () {
        return view('client.product');
    })->name('product');

    Route::get('profile', function () {
        return view('client.profile');
    })->name('profile');

    Route::get('services', function () {
        return view('client.services');
    })->name('services');

    Route::get('about', function () {
        return view('client.about');
    })->name('about');

    Route::get('contact', function () {
        return view('client.contact');
    })->name('contact');

    Route::get('date', function () {
        return view('client.date');
    })->name('date');
});

// Meneger Pages

Route::prefix('meneger/')->name('meneger.')->group(function(){
    
    Route::get('index', function () {
        return view('meneger.index');
    })->name('index');

    Route::get('like', function () {
        return view('meneger.like');
    })->name('like');

    Route::get('messages', function () {
        return view('meneger.messages');
    })->name('messages');

    Route::get('money', function () {
        return view('meneger.money');
    })->name('money');

    Route::get('product', function () {
        return view('meneger.product');
    })->name('product');

    Route::get('profile', function () {
        return view('meneger.profile');
    })->name('profile');

    Route::get('services', function () {
        return view('meneger.services');
    })->name('services');

    Route::get('about', function () {
        return view('meneger.about');
    })->name('about');

    Route::get('contact', function () {
        return view('meneger.contact');
    })->name('contact');

    Route::get('date', function () {
        return view('meneger.date');
    })->name('date');
});

// User Pages

Route::prefix('user/')->name('user.')->group(function(){
    
    Route::get('index', function () {
        return view('user.index');
    })->name('index');

    Route::get('like', function () {
        return view('user.like');
    })->name('like');

    Route::get('messages', function () {
        return view('user.messages');
    })->name('messages');

    Route::get('money', function () {
        return view('user.money');
    })->name('money');

    Route::get('product', function () {
        return view('user.product');
    })->name('product');

    Route::get('profile', function () {
        return view('user.profile');
    })->name('profile');

    Route::get('services', function () {
        return view('user.services');
    })->name('services');

    Route::get('about', function () {
        return view('user.about');
    })->name('about');

    Route::get('contact', function () {
        return view('user.contact');
    })->name('contact');

    Route::get('date', function () {
        return view('user.date');
    })->name('date');
});








// kiritish chiqarish va o'zgartirish operatorlariga oid masalalar

// 1

// Route::get('user/{a}',function($a){
//     $p = 4 * $a;
//     return $p;
// });

// 2

// Route::get('user/{a}', function($a){
//     $S = $a * $a;
//     return $S;
// });

// 3

// Route::get('user/{a}/{b}', function($a , $b){
//     $s = $a + $b;
//     $p = 2 * $s;
//     return ("P teng $p <br>
//     S teng $s");
// });

// 4

// Route::get('user/{d}', function($d){
//     $p = 3.14;
//     $l = $p * $d;
//     return $l;
// });

// 5

// Route::get('user/{a}', function($a){
//     $v = $a * $a * $a;
//     $s = 6 * $a * $a;
//     return "V teng $v ga<br>
//     S teng $s ga";
// });

// 6

// Route::get('user/{a}/{b}/{c}', function($a, $b, $c){
//     $v = $a * $b * $c;
//     $s = 2 *($a * $b + $b * $c + $a * $c);

//     return "Uning Hajmi: $v<br>
//     Uning Sirtqi $s";
// });

// 7
// Route::get('user/{r}', function($r){
//     $pi = 3.14;
//     $L = 2 * $pi * $r;
//     $S = $pi * ($r*$r);

//     return "Uzunligi: $L<br>
//     Yuzasi: $S";
// });

// 8

// Route::get('user/{a}/{b}', function($a , $b){
//     $c = ($a+$b)/2;
//     return "O'rta arifmetigi: $c";
// });

// 9

// Route::get('user/{a}/{b}', function ($a, $b) {
//     if($a <= 0){
//         return "Noldan kichik bo'lgan son kirgizdiz<br>
//         Nol dan katta bo'lgan son kiriting";
//     }else{
//         return sqrt($a * $b);
//     }

// });

// 10

// Route::get('user/{a}/{b}', function($a, $b){
//     if($a > 0 and $b > 0){
//         $q = $a + $b;
//         $k = $a * $b;
//         $ak = $a * $a;
//         $bk = $b * $b;

//         return "Yeg'indisi: $q<br>
//         Ko'paytmasi: $k<br>
//         $a ning Kvadrati: $ak<br>
//         $b ning Kvadrati $bk";
//     }else{
//         return "qiymat Noldan kichik kiritildi<br>
//         Iltimos Nol dan katta bo'lgan qiymat kiriting";
//     }
// });

// 11

// Route::get('user/{a}/{b}', function($a, $b){
//     if('$a > 0 , $b > 0'){
        
//         return abs($a * $b);
//     }else{
//         return "Iltimos Nol ga teng bo'lmaga son kiriting";
//     }
// });

//Butun sonlarga Oid masalalar

// 1

// Route::get('user/{l}', function($l){
//     return ($l/100);
// });

// 2

// Route::get('user/{m}', function($m){
//     $t = $m/1000;
//     return $t;
// });

// 3

// Route::get('user/{kb}', function($kb){
//     $b = $kb/1024;
//     return $b;
// });

// 4

// Route::get('user/{a}/{b}', function($a,$b){
//     if($a < $b){
//         return "$b soni $a sonidan katta";
//     }else{
//         $j = $a/$b;
//         return $j;
//     }
// });

// 5

// Route::get('user/{a}/{b}', function($a , $b){
//     if($a < $b){
//         return 'Xatolik';
//     }else {
//         return $a%$b;
//     }
// });

// 6

// Route::get('user/{a}', function($a){
//     if($a > 9 and $a < 100){
//         $o = floor($a/10);
//         $b = floor($a%10);
//         return "o'nlik xonasi: $o<br>
//                 Birlik xonasi: $b";
//     }else {
//         return "2 xonalik musbat son kiriting";
//     }
// });

// 7

// Route::get('user/{a}', function($a){
//     if($a > 9 and $a <100){
//         $o = floor($a / 10);
//         $b = floor($a%10);
//         $y = $o+$b;
//         return "Raqamlar yeg'indisi $y ga teng";
//     }else{
//         return "2 xonalik son kiriting";
//     }
// });

// 8

// Route::get('user/{a}', function($a){
//     if ($a > 9 and $a <100) {
//         $o = floor($a / 10);
//         $b = floor($a%10);
//         return "$b$o";
//     }else {
//         return "2 xonalik son kirinting";
//     }
// });

// 9

// Route::get('user/{a}', function($a){
//     if ($a>99 and $a<1000) {
//         $y = floor($a/100);
//         return "Yuzlar xonasidagi son: $y";
//     }else {
//         return "3 xonalik son kiriting";
//     }
// });

// 10

// Route::get('user/{a}', function($a){
//     if ($a > 99 and $a < 1000) {
//         $u = floor($a/10)%10;
//         $b = floor ($a%10);
//         return "Birliklar xonasidagi raqam: $b<br>
//                 O'nliklar xonasidagi raqam: $u";
//     }else {
//         return "Xatolik";
//     }
// });

// 11

// Route::get('user/{a}', function($a){
//         if($a > 99 and $a <1000){
//             $o = floor($a / 10)%10;
//             $b = floor($a%10);
//             $y = floor($a / 100);
//             $y = $o+$b+$y;
//             return "Raqamlar yeg'indisi $y ga teng";
//         }else{
//             return "3 xonalik son kiriting";
//         }
//     });

// 12

// Route::get('user/{a}', function($a){
//     if ($a > 99 and $a <1000) {
//         $o = floor($a / 10)%10;
//         $b = floor($a%10);
//         $y = floor($a / 100);
//         return "$b$o$y";
//     }else {
//         return "2 xonalik son kirinting";
//     }
// });

//SHART OPERATORLARIGA OID MASALALAR

// 1

// Route::get('user/{a}', function($a){
//     if ($a <= 0) {
//         return $a;
//     }else {
//         return ++$a;
//     }
// });

// 2

// Route::get('user/{a}', function($a){
//     if ($a < 0) {
//         $d = --$a;
//         $s = --$d;
//         return $s;
//     }else {
//         return ++$a;
//     }
// });

// 3

// Route::get('user/{a}', function($a){
//     if($a > 0){
//         return ++$a;
//     }elseif ($a < 0) {
//         $d = --$a;
//         $s = --$d;
//         return $s;
//     }else {
//        return 10;
//     }
// });

// 4

// Route::get('user/{a}/{b}/{c}', function($a, $b ,$c){
//     $oo = 0;
//     if($a > 0){
//     ++$oo;
//     }
//     if($b > 0){
//     ++$oo;
//     } 
//     if($c > 0){
//      ++$oo;
//     }
//     return $oo;
// });

// 5

// Route::get('user/{a}/{b}/{c}', function($a, $b , $c){
//    $oo = 0;
//    $ob = 0;
//    if($a > 0){
//     ++$oo;
//    }
//    if($b > 0){
//     ++$oo;
//    }
//    if($c > 0){
//     ++$oo;
//    }
//    if($a < 0){
//     ++$ob;
//    }
//    if($b < 0){
//     ++$ob;
//    }
//    if($c < 0){
//     ++$ob;
//    }

//    return "Musbat sonalar: $oo<br>
//             Manfiy sonalar: $ob";
// });

// 6

// Route::get('user/{a}/{b}', function($a , $b){
//     if($a > $b){
//         return "$a > $b yani $a katta";
//     }elseif($a < $b){
//         return "$a < $b yani $b katta";
//     }else{
//         return "$a = $b yani $a va $b sonlari teng";
//     }
// });

// 7

// Route::get('user/{a}/{b}', function($a , $b){
//     if($a < $b){
//         return "$a < $b yani $a kichik";
//     }elseif($a > $b){
//         return "$a > $b yani $b kichik";
//     }else{
//         return "$a = $b yani $a va $b sonlari teng";
//     }
// });

// 8

// Route::get('user/{a}/{b}', function($a , $b){
//     if($a > $b){
//         return "$a <br>
//                 $b";
//     }else{
//         return "$b <br>
//                  $a";
//     }
// });

// 9

// Route::get('user/{a}/{b}',function($a, $b){
//     if($a > $b){
//         $c = $a;
//         $a = $b;
//         $b = $c;
//     }
//     return "A = $a <br>
//             B = $b";
// });


// Route::get('user/{a}/{b}', function($a, $b){
//     $S = $a * $b;
//     return $S;
// });
// Route::get('user/{b}', function($b){
//     $k = floor($b / 1024);
//     return $k;
// });

// Route::get('user/{a}/{b}', function($a , $b){
//     if($a <= $b){
//         return "siz xato kiritdingiz";
//     }else{
//         $ab = floor($a / $b);
//         return $ab;
//     }
// });
// 4 6 10 mavzular
