<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlerStudent;

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
//     return view('welcome');
// });
// Route::get('/getring', function (){
//     return view('halaman2');
// });
// Route::get('/getring/{data}', function ($data){
//     return view('halaman2', ['data'=> '$data']);
// });

Route::get('getring/{id}',[ControlerStudent::class, 'show']);

Route::get('/',[ControlerStudent::class, 'tampil'])->name('index');
Route::get('/pilter',[ControlerStudent::class, 'filter']);

Route::get('/showdetail/{id}', [ControlerStudent::class, 'showdetail'])->name('show');
// ADD DATA
Route::get('/addData',[ControlerStudent::class, 'add'])->name('tambahData'); // ketika di klik pertamakali akan mengarahkan ke view addData dengan controller yang menggunkan functionnya
Route::POST('/addData',[ControlerStudent::class, 'save'])->name('save'); // ketiak di save akan menggunkan route ini dengan nama route save

// UPDATE DATA
Route::get('/update/{student}',[ControlerStudent::class,'updateFuncation'])->name('update');
Route::patch('/update/{student}',[ControlerStudent::class,'update'])->name('Update');

//DELET
Route::delete('/delete/{student}', [ControlerStudent::class,'delete'])->name('delet');