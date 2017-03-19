<?php

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Auth::routes();

Route::get('/home', 'HomeController@index');


/*App::bind('App\Billing\Stripe' , function () {
    return new App\Billing\Stripe(config('services.stripe.secret'));
});*/

/*App::singleton('App\Billing\Stripe' , function () {
    return new App\Billing\Stripe(config('services.stripe.secret'));
});*/

//App::instance('App\Billing\Stripe' , $stripe);


//$stripe = App::make('App\Billing\Stripe');

//$stripe = resolve('App\Billing\Stripe');
//dd( resolve('App\Billing\Stripe'));

Route::get('/', 'PostController@index')->name('home');

Route::get('/post/create', 'PostController@create');
Route::get('/post/{post}', 'PostController@show');
Route::post('/post', 'PostController@store');


Route::get('/post/tag/{tag}', 'TagsController@index');

Route::post('/post/{post}/comment', 'CommentController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');


Route::get('/main', 'MainController@index');
Route::get('/customizer', 'MainController@customizer');
Route::get('/data', 'MainController@data');
Route::get('/sidebar_result', 'MainController@sidebar_result');
Route::get('/infobox', 'MainController@infoBox');