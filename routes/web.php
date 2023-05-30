<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\PostCateController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('/',[MainController::class,'index'])->name('index');
Route::get('/menu/list/{id}',[MainController::class,'CategoryWish'])->name('menu.list');
Route::get('/menu/view/{id}',[MainController::class,'MenuView'])->name('menu.view');
Route::post('reservision',[MainController::class,'reservision'])->name('add.reservision');
Route::get('contact-us',[MainController::class,'ContactUS'])->name('contact.us');
Route::post('contact-store',[MainController::class,'ContactStore'])->name('contact.store');
Route::get('our-team',[MainController::class,'Team'])->name('our.team');
Route::post('newslater',[MainController::class,'newslater'])->name('add.newslater');
Route::get('reservation',[MainController::class,'reservation'])->name('reservation');
Route::post('reservation/store',[MainController::class,'ReservationStore'])->name('reservation.store');


Route::get('/about-us', [MainController::class,'about'])->name('about.us');
Route::get('/blog/list', [MainController::class,'BlogList'])->name('blog.list');
Route::get('/blog/wish/{id}', [MainController::class,'BlogWish'])->name('blog.wish');
Route::get('/blog/single/{id}', [MainController::class,'BlogSingle'])->name('blog.single');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
Route::get('change/password', [App\Http\Controllers\HomeController::class, 'Changepassword'])->name('change.password');
Route::post('password//update', [App\Http\Controllers\HomeController::class, 'PasswordUpdate'])->name('password.update');

//category section
Route::get('/add/category', [CategoryController::class,'create'])->name('add.category');
Route::post('/store/category', [CategoryController::class,'store'])->name('store.category');
Route::get('/all/category', [CategoryController::class,'all_category'])->name('all.category');
Route::get('/delete/category/{id}', [CategoryController::class,'delete'])->name('delete.category');
Route::get('/edit/category/{id}', [CategoryController::class,'edit'])->name('edit.category');
Route::post('/update/category/{id}', [CategoryController::class,'update'])->name('update.category');

//menu route
Route::get('add/menu',[MenuController::class,'create'])->name('add.menu');
Route::post('store/menu',[MenuController::class,'store'])->name('store.menu');
Route::get('all/menu',[MenuController::class,'all_manu'])->name('all.menu');
Route::get('delete/menu/{id}',[MenuController::class,'delete'])->name('delete.menu');
Route::get('edit/menu/{id}',[MenuController::class,'edit'])->name('edit.menu');
Route::post('update/menu/{id}',[MenuController::class,'update'])->name('update.menu');

//slider route
Route::get('add/slider',[SliderController::class,'create'])->name('add.slider');
Route::post('store/slider',[SliderController::class,'store'])->name('store.slider');
Route::get('all/slider',[SliderController::class,'all_slider'])->name('all.slider');
Route::get('delete/slider/{id}',[SliderController::class,'delete'])->name('delete.slider');
Route::get('edit/slider/{id}',[SliderController::class,'edit'])->name('edit.slider');
Route::post('update/slider/{id}',[SliderController::class,'update'])->name('update.slider');


//team route
Route::get('add/team',[TeamController::class,'create'])->name('add.team');
Route::post('store/team',[TeamController::class,'store'])->name('store.team');
Route::get('all/team',[TeamController::class,'all_team'])->name('all.team');
Route::get('delete/team/{id}',[TeamController::class,'delete'])->name('delete.team');
Route::get('edit/team/{id}',[TeamController::class,'edit'])->name('edit.team');
Route::post('update/team/{id}',[TeamController::class,'update'])->name('update.team');


//social route
Route::get('add/social',[SocialController::class,'create'])->name('add.social');
Route::post('store/social',[SocialController::class,'store'])->name('store.social');
Route::get('all/social',[SocialController::class,'all_social'])->name('all.social');
Route::get('delete/social/{id}',[SocialController::class,'delete'])->name('delete.social');
Route::get('edit/social/{id}',[SocialController::class,'edit'])->name('edit.social');
Route::post('update/social/{id}',[SocialController::class,'update'])->name('update.social');

//system route
Route::get('all/reservision',[SystemController::class,'all_reservision'])->name('all.reservision');
Route::get('reservision/{id}',[SystemController::class,'delete_reservision'])->name('delete.reservision');

Route::get('all/contact',[SystemController::class,'all_contact'])->name('all.contact');
Route::get('contact/{id}',[SystemController::class,'delete_contact'])->name('delete.contact');

Route::get('all/sub',[SystemController::class,'sub'])->name('all.sub');
Route::get('sub/{id}',[SystemController::class,'delete_sub'])->name('delete.sub');


//postcategory section
Route::get('/add/postcategory', [PostCateController::class,'create'])->name('add.postcategory');
Route::post('/store/postcategory', [PostCateController::class,'store'])->name('store.postcategory');
Route::get('/all/postcategory', [PostCateController::class,'all_postcategory'])->name('all.postcategory');
Route::get('/delete/postcategory/{id}', [PostCateController::class,'delete'])->name('delete.postcategory');
Route::get('/edit/postcategory/{id}', [PostCateController::class,'edit'])->name('edit.postcategory');
Route::post('/update/postcategory/{id}', [PostCateController::class,'update'])->name('update.postcategory');

//post section
Route::get('/add/post', [PostController::class,'create'])->name('add.post');
Route::post('/store/post', [PostController::class,'store'])->name('store.post');
Route::get('/all/post', [PostController::class,'all_post'])->name('all.post');
Route::get('/delete/post/{id}', [PostController::class,'delete'])->name('delete.post');
Route::get('/edit/post/{id}', [PostController::class,'edit'])->name('edit.post');
Route::post('/update/post/{id}', [PostController::class,'update'])->name('update.post');


//setting section
Route::get('/add/setting', [SettingController::class,'create'])->name('add.setting');
Route::post('/store/setting', [SettingController::class,'store'])->name('store.setting');
Route::get('/all/setting', [SettingController::class,'all_setting'])->name('all.setting');
Route::get('/delete/setting/{id}', [SettingController::class,'delete'])->name('delete.setting');
Route::get('/edit/setting/{id}', [SettingController::class,'edit'])->name('edit.setting');
Route::post('/update/setting/{id}', [SettingController::class,'update'])->name('update.setting');




