<?php
// use App\Models\Barang;
use App\Http\Controllers\card;
use App\Http\Controllers\admin;
use App\Http\Controllers\index;
use App\Http\Controllers\barang;
use App\Http\Controllers\BarangController;
use App\Http\Middleware\Ceklavel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller_shop;
use App\Http\Controllers\controller_login;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/admin', [App\Http\Controllers\admin::class, 'home'])->name('admin');
// Route::get('/admin', [App\Http\Controllers\admin::class, 'admin'])->middleware('admin')->name('admin');


Route::get('/', [index::class, 'index'])->name('home');
Route::get('/brand', [index::class, 'brand'])->name('brand');

Route::get('/shop', [controller_shop::class, 'index'])->name('shop');

Route::get('/card',[card::class ,'card'])->name('card');
Route::get('/login', [Controller_Login::class, 'view_login'])->name('login');
Route::post('/login', [Controller_Login::class, 'login'])->name('postlogin');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/logout', [Controller_Login::class, 'logout'])->name('logout');


// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::resource('barangs', BarangController::class);
// });
// Route::group(['prefix' => 'baarangs' , 'as' => 'barang.'], function(){
// });
Route::resource('barangs', BarangController::class);

// Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home');
Route::middleware(['auth'])->group(function () {
    
Route::get('/admin', [admin::class, 'home'])->name('admin') ;
Route::get('/admin/dashboard', [admin::class, 'dashboard'])->name('admin.dashboard');
Route::get('/post',[BarangController::class,'index'])->name('post');
Route::get('/creat',[BarangController::class,'create']);
Route::post('/posts/store',[BarangController::class,'store']);
Route::get('/barangs/show/{{barang}}',[BarangController::class,'show'])->name('show');
Route::post('/update/{barang}',[BarangController::class , 'update']);
Route::get('cart/admin',[admin::class,'cart'])->name('cart_admin');

});


Route::get('/learn',[index::class,'learn'])->name('learn');
Route::get('/kategori/{kategori_id}', [controller_shop::class, 'show'])->name('kategori.show');
Route::middleware(['auth'])->group(function () {
    Route::get('/card/{id}', [card::class, 'card'])->name('card.show');
    
});
    Route::get('/cart', [card::class, 'cart'])->name('cart');
    Route::patch('/cart/{id}', [card::class, 'update'])->name('cart.update');
    Route::post('cart/add', [card::class, 'add'])->name('cart.add');
    Route::delete('cart/remove/{id}', [card::class, 'remove'])->name('cart.remove');
    