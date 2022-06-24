<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');

Route::view('about', 'pages.about')->name('about');
Route::view('insert', 'pages.insert')->name('insert');
Route::view('delete', 'pages.delete')->name('delete');
Route::view('update', 'pages.update')->name('update');

Route::get('/addbook', function () {
    DB::insert('insert into book ( name, publisher, pages, price) values (?, ?, ?, ?)',
        [$_GET['name'], $_GET['p_name'], $_GET['pages'], $_GET['price']]);
    return view('pages.insert');
});

Route::get('/updatebook', function () {
    DB::update ('update book  set name=? , publisher=? , pages=?, price=? WHERE id=?',
        [$_GET['name'], $_GET['p_name'], $_GET['pages'], $_GET['price'], $_GET['bookid']]);
    return view('pages.update');
});

Route::get('/deletebook', function () {
    DB::delete ('delete from book where id=? and name=?',
        [$_GET['bookid'], $_GET['name']]);
    return view('pages.delete');
});

Route::get('/searchbook', function () {
    $name=$_GET['name'];
    $books = DB::select("select * from book where name like '%$name%'");
    return view('pages.bookview',['books'=>$books]);
});

Route::get('/view-records', function () {
    $books = DB::select('select * from book');
    return view('pages.bookview',['books'=>$books]);
})->name('view-records');





Route::get('/{name}', function ($name) {
    echo "The route `$name` is not correct";
});

