<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//DB stuff

//find and update
// $user = User::find(1);
//
// $user->update(['email'=> 'user@example.com']);
//dd($user);

//delete
// $user->delete();
//
// $user = DB::delete("delete from users where id=x");
//
//$user = DB::table('users')->where('id', x)->delete();
//
// $user = User::find(x)->delete();

//create

//$user = DB::insert('insert into table (name, of, columns) values (?, ?, ?,)', [ 'value', 'for', 'query']);
//
//$user = DB:table('table')->insert([
//     'column' => 'value',
//     'column2' => 'value',
//     'column3' => 'value',
// ]);
//
//$user = User::create([
//    'column' => 'value',
//     'column2' => 'value',
//     'column3' => 'value',
//]);
//$user = User::create([  
//    'column' => 'value',
//     'column2' => bcrypt('value'), //this will encrypt the value when inserted | This can also be encrypted in the user model (user.php)
//     'column3' => 'value',
//]);