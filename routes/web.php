<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\OurTalkController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionTypeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontEndController::class, 'index'])->name('/');
Route::get('/islamik_book', [FrontEndController::class, 'islamikBook'])->name('islamik.book');
Route::get('/kids_book', [FrontEndController::class, 'kidsBook'])->name('kids.book');
Route::get('/kids_zone', [FrontEndController::class, 'kidsZone'])->name('kids.zone');
Route::get('/kasmeri_shal', [FrontEndController::class, 'kasmeriShal'])->name('kasmeri.shal');
Route::get('/author', [FrontEndController::class, 'authors'])->name('author');
Route::get('/user_login', [FrontEndController::class, 'userLogin'])->name('user.login');
Route::get('/user_registration', [FrontEndController::class, 'userRegistration'])->name('user.registration');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add.product');
    Route::post('/new-product', [ProductController::class, 'saveProduct'])->name('new.product');
    Route::get('/product-status/{id}',[ProductController::class, 'productStatus'])->name('product.status');
    Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('manage.product');
    Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit.product');
    Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('update.product');
    Route::post('/delete-product', [ProductController::class, 'deleteProduct'])->name('delete.product');

    Route::get('/add-author',[AuthorController::class, 'addAuthor'])->name('add.author');
    Route::post('/new-author',[AuthorController::class, 'saveAuthor'])->name('new.author');
    Route::get('/author-status/{id}',[AuthorController::class, 'authorStatus'])->name('author.status');
    Route::get('/manage-author',[AuthorController::class, 'manageAuthor'])->name('manage.author');
    Route::get('/edit-author/{id}',[AuthorController::class, 'editAuthor'])->name('edit.author');
    Route::post('/update-author',[AuthorController::class, 'updateAuthor'])->name('update.author');
    Route::post('/delete-author',[AuthorController::class, 'deleteAuthor'])->name('delete.author');


    Route::get('/add-category',[CategoryController::class, 'addCategory'])->name('add.category');
    Route::post('/new-category',[CategoryController::class, 'saveCategory'])->name('new.category');
    Route::get('/category-status/{id}',[CategoryController::class, 'categoryStatus'])->name('category.status');
    Route::get('/manage-category',[CategoryController::class, 'manageCategory'])->name('manage.category');
    Route::get('/edit-category/{id}',[CategoryController::class, 'editCategory'])->name('edit.category');
    Route::post('/update-category',[CategoryController::class, 'updateCategory'])->name('update.category');
    Route::post('/delete-category',[CategoryController::class, 'deleteCategory'])->name('delete.category');

    Route::get('/add-advertisement',[AdvertisementController::class, 'addAdvertisement'])->name('add.advertisement');
    Route::post('/new-advertisement',[AdvertisementController::class, 'saveAdvertisement'])->name('new.advertisement');
    Route::get('/advertisement-status/{id}',[AdvertisementController::class, 'advertiseStatus'])->name('advertisement.status');
    Route::get('/manage-advertisement',[AdvertisementController::class, 'manageAdvertisement'])->name('manage.advertisement');
    Route::get('/edit-advertisement/{id}',[AdvertisementController::class, 'editAdvertisement'])->name('edit.advertisement');
    Route::post('/update-advertisement',[AdvertisementController::class, 'updateAdvertisement'])->name('update.advertisement');
    Route::post('/delete-advertisement',[AdvertisementController::class, 'deleteAdvertisement'])->name('delete.advertisement');

    Route::get('/add-ourtalk',[OurTalkController::class, 'addOurtalk'])->name('add.ourtalk');
    Route::post('/new-ourtalk',[OurTalkController::class, 'saveOurtalk'])->name('new.ourtalk');
    Route::get('/ourtalk-status/{id}',[OurTalkController::class, 'ourtalkStatus'])->name('ourtalk.status');
    Route::get('/manage-ourtalk',[OurTalkController::class, 'manageOurtalk'])->name('manage.ourtalk');
    Route::get('/edit-ourtalk/{id}',[OurTalkController::class, 'editOurtalk'])->name('edit.ourtalk');
    Route::post('/update-ourtalk',[OurTalkController::class, 'updateOurtalk'])->name('update.ourtalk');
    Route::post('/delete-ourtalk',[OurTalkController::class, 'deleteOurtalk'])->name('delete.ourtalk');

    Route::post('/new-section-type',[SectionTypeController::class, 'saveSectionType'])->name('new.section.type');
    Route::get('/manage-section-type',[SectionTypeController::class, 'manageSectionType'])->name('manage.section.type');
    Route::get('/section-type-status/{id}',[SectionTypeController::class, 'sectionTypeStatus'])->name('section.type.status');
    Route::get('/edit-section-type/{id}',[SectionTypeController::class, 'editSectionType'])->name('edit.section.type');
    Route::post('/update-section-type',[SectionTypeController::class, 'updateSectionType'])->name('update.section.type');
    Route::post('/delete-section-type',[SectionTypeController::class, 'deleteSectionType'])->name('delete.section.type');










    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
