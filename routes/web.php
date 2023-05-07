<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/',[App\Http\Controllers\UserController::class, 'welcome_view']);
Route::get('/my-profile',[App\Http\Controllers\UserController::class, 'my_profile']);
Route::post('/my-profile-update-user',[App\Http\Controllers\UserController::class, 'my_profile_update_user']);
Route::post('/update-user-password',[App\Http\Controllers\UserController::class, 'update_user_password']);
Route::get('/about',[App\Http\Controllers\UserController::class, 'about_view']);
Route::get('/services',[App\Http\Controllers\UserController::class, 'services_view']);
Route::get('/contact',[App\Http\Controllers\UserController::class, 'contact_view']);
Route::get('/faqs',[App\Http\Controllers\UserController::class, 'faqs_view']);
Route::get('/apartments',[App\Http\Controllers\UserController::class, 'shop_view']);
Route::post('/contact-message',[App\Http\Controllers\UserController::class, 'contact_message']);
Route::post('/addToFav',[App\Http\Controllers\UserController::class, 'addToFav']);
Route::post('/removeFromFav',[App\Http\Controllers\UserController::class, 'removeFromFav']);
Route::post('/new-subscription',[App\Http\Controllers\UserController::class, 'new_subscription']);
Route::post('/add-rating-user',[App\Http\Controllers\UserController::class, 'add_rating_user']);
Route::get('/send-appointment-user',[App\Http\Controllers\UserController::class, 'send_appointment_user']);
Route::get('/single-product/{id}',[App\Http\Controllers\UserController::class, 'single_product_view']);
Route::get('/getDisabledDate',[App\Http\Controllers\UserController::class, 'getDisabledDate']);
Route::get('/my-favourites',[App\Http\Controllers\UserController::class, 'my_favourites']);

// Dashborad Routes
Route::get('/dashboard',[App\Http\Controllers\AdminController::class, 'index']);
Route::get('/dashboard-users',[App\Http\Controllers\AdminController::class, 'users']);
Route::post('/dashboard-update-user',[App\Http\Controllers\AdminController::class, 'update_user']);
Route::get('/dashboard-delete-user',[App\Http\Controllers\AdminController::class, 'delete_user']);
Route::get('/dashboard-admin-profile',[App\Http\Controllers\AdminController::class, 'admin_profile']);
Route::get('/dashboard-check-password',[App\Http\Controllers\AdminController::class, 'check_password']);
Route::get('/dashboard-products',[App\Http\Controllers\AdminController::class, 'products']);
Route::get('/dashboard-invoice',[App\Http\Controllers\AdminController::class, 'charts']);
Route::get('/dashboard-appointments',[App\Http\Controllers\AdminController::class, 'appointments']);
Route::get('/dashboard-subscribe',[App\Http\Controllers\AdminController::class, 'subscribe']);
Route::post('/dashboard-add-products',[App\Http\Controllers\AdminController::class, 'add_products']);
Route::post('/dashboard-update-products',[App\Http\Controllers\AdminController::class, 'update_products']);
Route::post('/dashboard-delete-products',[App\Http\Controllers\AdminController::class, 'delete_products']);
Route::get('/dashboard-contact',[App\Http\Controllers\AdminController::class, 'contact']);
Route::post('/dashboard-send-contact',[App\Http\Controllers\sendEmail::class, 'sendContactMailAdmin']);
Route::get('/dashboard-get-unread-contact',[App\Http\Controllers\AdminController::class, 'get_unread_message']);
Route::get('/dashboard-mark-as-read',[App\Http\Controllers\AdminController::class, 'mark_as_read']);
Route::get('/dashboard-notifications',[App\Http\Controllers\AdminController::class, 'get_notifications']);
Route::get('/dashboard-notifications-image/{id}',[App\Http\Controllers\AdminController::class, 'get_notifications_image']);
Route::get('/dashboard-count-notifications',[App\Http\Controllers\AdminController::class, 'get_notifications_count']);
Route::get('/dashboard-read-notifications',[App\Http\Controllers\AdminController::class, 'update_read_notifications']);
Route::get('/dashboard-admins',[App\Http\Controllers\AdminController::class, 'dashboard_admins']);
Route::post('/dashborad-modify-admin',[App\Http\Controllers\AdminController::class, 'modifiyAdmin']);
Route::post('/dashboard-add-admin',[App\Http\Controllers\AdminController::class, 'add_new_admin']);
Route::post('/approve-appointments',[App\Http\Controllers\AdminController::class, 'approve_appointment']);
Route::post('/delete-appointment',[App\Http\Controllers\AdminController::class, 'delete_appointment']);
Route::get('/dashboard-delete-subs',[App\Http\Controllers\AdminController::class, 'delete_subs']);
Route::get('/dashboard-approve-rating',[App\Http\Controllers\AdminController::class, 'approve_rating']);
Route::get('/dashboard-rating',[App\Http\Controllers\AdminController::class, 'rating']);
Route::get('/dashboard-delete-rating',[App\Http\Controllers\AdminController::class, 'delete_rating']);
Route::post('/read-appointment',[App\Http\Controllers\AdminController::class, 'read_appointment']);
Route::post('/read-rating',[App\Http\Controllers\AdminController::class, 'read_rating']);

Route::get('/test',[App\Http\Controllers\AdminController::class, "test"]);
Route::post('/dasboard-sendResetPasswordEmail',[App\Http\Controllers\AdminController::class, "sendResetPasswordEmail"]);
Route::post('/dashboard-verfication-code',[App\Http\Controllers\AdminController::class, "sendVerificationCode"]);

// End Dashborad Routes

// Upload Image Routes
Route::post('upload-image', [App\Http\Controllers\AjaxUploadController::class, 'store']);
Route::post('/upload-image-user',[App\Http\Controllers\AjaxUploadController::class, 'store_user']);

// End Upload Image Routes

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
 


Route::get('login/google', '\App\Http\Controllers\Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', '\App\Http\Controllers\Auth\LoginController@handleProviderCallback');

Route::get('/Cookies/checkAcceptCookie', '\App\Http\Controllers\Cookies\SetCookies@checkAcceptCookie');
Route::get('/Cookies/AcceptUserCookie', '\App\Http\Controllers\Cookies\SetCookies@AcceptUserCookie');

// Route::get('/admin', '\App\Http\Controllers\admin@index');
// Route::get('/admin',[App\Http\Controllers\Admin::class, 'index']);
