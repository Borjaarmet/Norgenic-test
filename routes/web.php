<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect','localizationRedirect', 'localeViewPath']],function()
{

    Route::get('/', function () {
        return view('pages.home');
    })->name('home');

    Route::get(LaravelLocalization::transRoute('routes.books'), [BooksController::class, 'index'])->name('books.index');
    Route::get(LaravelLocalization::transRoute('routes.create'), [BooksController::class, 'create'])->name('books.create');
    Route::post('/libros', [BooksController::class, 'store'])->name('books.store');
    Route::get(LaravelLocalization::transRoute('routes.edit'), [BooksController::class, 'edit'])->name('books.edit');
    Route::put('/libros/{book}', [BooksController::class, 'update'])->name('books.update');
    Route::delete('/libros/{book}', [BooksController::class, 'destroy'])->name('books.destroy');


    Route::get(LaravelLocalization::transRoute('routes.contact'), [ContactController::class, 'show'])->name('contact');
    Route::post('mensaje-contacto', [ContactController::class, 'sendContactEmail'])->name('contact-form.send');

});