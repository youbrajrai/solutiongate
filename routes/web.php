<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;


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


Auth::routes();
Route::get('/admin', [LoginController::class, 'showLoginForm']);

Route::get('/', HomeController::class)->name('home');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('service.show');
Route::get('/projects/{project}', [ProjectController::class , 'show'])->name('project.show');
Route::get('/heros/{hero}',[HeroController::class,'show'])->name('hero.show');
Route::resource('/contact', ContactUsController::class)->only('store');
Route::get('/about-us', [AboutController::class, 'show'])->name('about-us');

Route::get('/contact-us', function () {
	return view('contact-us');
})->name('contact-us');

Route::get('/portfolio', function () {
	return view('portfolio');
})->name('portfolio');


Route::middleware(['auth'])->group(function () {
	Route::get('/dashboard', DashboardController::class)->name('dashboard');
	Route::resource('/profile', ProfileController::class,)->only('show', 'update');
	Route::resource('/service', ServiceController::class)->except('show');
	Route::resource('/project', ProjectController::class)->except('show');
	Route::resource('/about', AboutController::class);
	Route::resource('/hero', HeroController::class)->except('show');
	Route::resource('/work', WorkController::class)->except('show');
	Route::resource('/contact', ContactUsController::class)->except('store', 'create', 'update');
	Route::resource('/team', TeamController::class)->except('show');
	Route::resource('/client', ClientController::class)->except('show');
	Route::resource('/mission', MissionController::class)->except('show');
	// Category section
	// Route::resource('categories', CategoriesController::class);
	Route::get('/categories', [CategoriesController::class,'index'])->name('categories.index');
	Route::get('/categories/create', [CategoriesController::class,'create'])->name('categories.create');
	Route::post('/categories/create', [CategoriesController::class,'store'])->name('categories.store');
	Route::get('/categories/edit/{id}',[CategoriesController::class,'edit'])->name('categories.edit');
    Route::post('/categories/edit/{id}',[CategoriesController::class,'update'])->name('categories.update');
    Route::delete('/categories/delete/{id}',[CategoriesController::class,'destroy'])->name('categories.destroy');
	// SubCategory section
	Route::get('/subcategory', [SubcategoryController::class,'index'])->name('subcategory.index');
	Route::get('/subcategory/create', [SubcategoryController::class,'create'])->name('subcategory.create');
	Route::post('/subcategory/create', [SubcategoryController::class,'store'])->name('subcategory.store');
	Route::get('/subcategory/edit/{id}',[SubcategoryController::class,'edit'])->name('subcategory.edit');
    Route::post('/subcategory/edit/{id}',[SubcategoryController::class,'update'])->name('subcategory.update');
    Route::delete('/subcategory/delete/{id}',[SubcategoryController::class,'destroy'])->name('subcategory.destroy');
	// product section
	Route::get('/product', [ProductController::class,'index'])->name('product.index');
	Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
	Route::get('/findSubcategory', [ProductController::class,'findSubcategory'])->name('findSubcategory');
	Route::post('/product/create', [ProductController::class,'store'])->name('product.store');
	Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/product/edit/{id}',[ProductController::class,'update'])->name('product.update');
    Route::delete('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.destroy');
	Route::get('/product/details/{id}',[ProductController::class,'extraDetails'])->name('product.extraDetails');			
	Route::post('/product/details/{id}',[ProductController::class,'storeExtraDetails'])->name('product.storeExtraDetails');			

	Route::get('/users', function () {
		$users = User::latest()->get();
		return view('auth.users', compact('users'));
	})->name('users');

	Route::delete('/user/{user}', function ($user) {
		User::findOrFail($user)->delete();
		return redirect()->back()->with('message', 'Data Deleted.');
	})->name('user.destroy');
});
