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

route::get('/neworder','App\Http\Controllers\Admin\OrderController@index')->name('neworder');

route::get('/manageorder','App\Http\Controllers\Admin\OrderController@manage')->name('manageorder');

route::get('/updateorder','App\Http\Controllers\Admin\OrderController@updateorder')->name('updateorder');

route::get('/addproduct','App\Http\Controllers\Admin\ProductController@prductform')->name('addproduct');

route::post('/addproduct','App\Http\Controllers\Admin\ProductController@addProduct')->name('addproduct');

route::get('/manageproduct','App\Http\Controllers\Admin\ProductController@manageproduct')->name('manageproduct');

route::get('/editproduct/{id}','App\Http\Controllers\Admin\ProductController@editProduct')->name('editproduct');

route::put('/editproduct/{id}','App\Http\Controllers\Admin\ProductController@updateProduct')->name('editproduct');

route::delete('/manageproduct/{id}','App\Http\Controllers\Admin\ProductController@deleteProduct')->name('deleteproduct');
//category--start
route::get('/addcatagory','App\Http\Controllers\Admin\CatagoryController@addcatagory')->name('addcatagory');

route::post('/addcatagory','App\Http\Controllers\Admin\CatagoryController@postCatagory')->name('addcategory');

route::get('/parentcategory','App\Http\Controllers\Admin\CatagoryController@parentCategory')->name('parentcategory');

route::get('/editparent/{id}','App\Http\Controllers\Admin\CatagoryController@editParent')->name('editparent');

route::put('/editparent/{id}','App\Http\Controllers\Admin\CatagoryController@updateParent')->name('editparent');

route::delete('/parentcategory/{id}','App\Http\Controllers\Admin\CatagoryController@deleteParent')->name('deleteparent');

route::get('/childcategory','App\Http\Controllers\Admin\CatagoryController@childCategory')->name('childcategory');

route::get('/editchild/{id}','App\Http\Controllers\Admin\CatagoryController@editChild')->name('editchild');

route::post('/editchild/{id}','App\Http\Controllers\Admin\CatagoryController@updateChild')->name('editchild');

route::delete('/childcategory/{id}','App\Http\Controllers\Admin\CatagoryController@deleteChild')->name('deletechild');

// route::post('/editchild/{id}','App\Http\Controllers\Admin\CatagoryController@editChild')->name('editchild');
//category--end
route::get('/addorder','App\Http\Controllers\Admin\OrderController@ordertable')->name('ordertable');

route::get('/logout','App\Http\Controllers\Admin\DashboardController@logout')->name('logout');
//contact--start
route::get('/contactus','App\Http\Controllers\Admin\CmsController@contactUs')->name('contactus');

route::post('/contactus','App\Http\Controllers\Admin\CmsController@updateContact')->name('contactus');
//contact--end

//banner -- start
route::get('/addbanner','App\Http\Controllers\Admin\CmsController@addBanner')->name('addbanner');

route::post('/addbanner','App\Http\Controllers\Admin\CmsController@updateBanner')->name('addbanner');

// route::get('/addbanner','App\Http\Controllers\Admin\CmsController@addBanner')->name('addbanner');
//banner -- end

//delivery -- start
route::get('/deliveryinfo','App\Http\Controllers\Admin\CmsController@deliveryInfo')->name('deliveryinfo');

route::get('/editedelivery/{id}','App\Http\Controllers\Admin\CmsController@editeDelivery')->name('editedelivery');

route::post('/editedelivery/{id}','App\Http\Controllers\Admin\CmsController@updateDelivery')->name('editedelivery');
//delivery--end
//social link -- start
route::get('/sociallink','App\Http\Controllers\Admin\CmsController@socialLink')->name('sociallink');

route::post('/sociallink','App\Http\Controllers\Admin\CmsController@updateSociallink')->name('sociallink');
//poster -- start
route::get('/addposter','App\Http\Controllers\Admin\CmsController@addPoster')->name('addposter');

route::post('/addposter','App\Http\Controllers\Admin\CmsController@updatePoster')->name('addposter');
//poster -- end
//privacy -- start
route::get('/privacy','App\Http\Controllers\Admin\CmsController@privacy')->name('privacy');

route::post('/privacy','App\Http\Controllers\Admin\CmsController@updatePrivacy')->name('privacy');
//privacy --end

//app setting --start
route::get('/appsetting','App\Http\Controllers\Admin\SettingController@appSetting')->name('appsetting');

route::post('/appsetting','App\Http\Controllers\Admin\SettingController@updateAppsetting')->name('appsetting');

route::get('/smssetting','App\Http\Controllers\Admin\SettingController@smsSetting')->name('smssetting');

route::post('/smssetting','App\Http\Controllers\Admin\SettingController@postSms')->name('smssetting');

route::get('/emailsetting','App\Http\Controllers\Admin\SettingController@emailSetting')->name('emailsetting');

route::get('/subscriber','App\Http\Controllers\Admin\EnvelopeController@subscriber')->name('subscriber');

route::get('/messages','App\Http\Controllers\Admin\EnvelopeController@messages')->name('messages');


