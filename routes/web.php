<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceCourseController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
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

Route::get('/demo',function(){
    echo "<b><i>Hello World</i></b>";
});

Route::post('/test',function() {
    echo "testing post method";
});

// only echo here::::
Route::get('/demo/{name}/{id?}',function($name, $id = null ){
    echo "<b><i>" . $name ." <br> ";
    echo $id . "</b></i>";
});
// get and using variable
Route::get('/view/{instritution}/{year?}',function($instritution,$year=null){
    $data=compact('instritution','year');
    return view('demo')->with($data);
});
// here using the blade directory
Route::get('/welcome',function(){
    return view('welcome');
});



// here data pass directly in blade:::::::::::::
Route::get('/home/{name?}',function($name=null)
{   $data=compact('name');
    return view('home')->with($data);
});
Route::get('/about/{name?}',function($name=null){
    $data=compact('name');
    return view('about')->with($data);
});





// views/folder/blade
Route::get('/course/arabic',function(){
    return view('AllCourse.arabic');
});





// now same data will be pass blade through BasicController
Route::get('/basic/about/{name?}',[DemoController::class, 'index']);
Route::get('/basic/home/{name?}',[DemoController::class, 'home']);

// now same data will be pass blade through SingleActionController
Route::get('/single/home/{name?}', SingleActionController::class);


// // now same data will be pass blade through ResourceController
// Route::resource('/resource/{name?}',ResourceCourseController::class);
// // Route::resource('/resource/{id?}',ResourceCourseController::class);


Route::get('/',function(){
    return view('index');
});

// form-submit layout making and hitting
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class, 'register']);


Route::get('/customer/register',[CustomerController::class,'index'])->name('customer.register');
Route::post('/customer/register',[CustomerController::class, 'register']);
Route::get('/customer/delete/{id}',[CustomerController::class, 'delete'])->name('customer.delete');
Route::get('/customer/view',[CustomerController::class,'view'])->name('customer.view');
// for customer update
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');



//"'any' methode can be used and it will work as a get methode and laravel actually provide this methode but in real applications doesn't
//exist this type of methode"

// Route::any('/any',function(){
//     echo "anything";
// });