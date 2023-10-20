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

Route::get('/', function () {
    return redirect('es/home');
});

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Route;

Route::prefix('{lang}')->group(function () {
    Route::get('home/', 'Site\SiteController@home')->name('home');
    Route::get('/about-us/', 'Site\SiteController@about')->name('about');
    Route::get('/service/', 'Site\SiteController@services')->name('service');
    Route::get('/contact-us/', 'Site\SiteController@Contact_us')->name('contact');
    Route::get('/error', 'Site\SiteController@abort');

});

Route::post('/comment', 'Admin\CommentController@comment');
/*
 * starrt admin panel
 *
 *  */
Auth::routes();
Route::match(['get', 'post'], '/login', 'Admin\AdminController@login')->name('login');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {

    Route::get('/dashboard', 'Admin\AdminController@dashboard');
    Route::get('/logout', 'Admin\AdminController@logout')->name('logout');
    Route::resource('/user', 'Admin\UserController');
    Route::match(['get', 'post'], '/slider', 'Admin\SliderController@slider_list')->name('slider');
    Route::match(['get', 'post'], '/slider-add', 'Admin\SliderController@slider_add')->name('slider-add');
    Route::delete('delete-image/{id}', 'Admin\SliderController@delete_image')->name('delete_image');
    Route::post('slider/update-order', 'Admin\SliderController@change_image_order')->name('chnage_slider');
    Route::get('comment-list', 'Admin\CommentController@comment_list')->name('comment-list');
    Route::post('comment-delete/{id}', 'Admin\CommentController@comment_delete')->name('comment_delete');
    Route::match(['get', 'post'], '/project', 'Admin\ProjectController@project_list')->name('project_list');
    Route::post('project/update/{id}', 'Admin\ProjectController@update');
    Route::post('project-delete/{id}', 'Admin\ProjectController@delete')->name('project_delete');
    Route::match(['get', 'post'], '/project-image', 'Admin\ProjectController@project_image')->name('project_image');
    Route::post('projectimage-delete/{id}', 'Admin\ProjectController@projectimage_delete')->name('projectimage-delete');
    Route::get('/offer', 'Admin\OfferController@Offer_list')->name('offer');
    Route::match(['get', 'post'], '/offer-add', 'Admin\OfferController@offer_add')->name('offer-add');
    Route::post('offer-delete/{id}', 'Admin\OfferController@offer_delete')->name('offer-delete');
    Route::post('offer-update/{id}', 'Admin\OfferController@offer_update')->name('offer-update');
});
