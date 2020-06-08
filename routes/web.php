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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(["as"=>'admin.', "prefix"=>'admin' ,"namespace"=>'admin', "middleware"=>['auth','admin']],function(){
      Route::get('admin/dashbord','adminController@index')->name('admin_dashbord');
      //slider add
      Route::get('admin/add/slider','adminController@add_slider')->name('add.slider');
      //add blood group
      Route::get('add/blood','bloodController@add_blood')->name('add.blood.group');
      Route::post('save/blood','bloodController@save_blood')->name('save.blood');
      Route::get('all/blood','bloodController@all_blood')->name('all.blood.group');
      Route::get('unactive-blood/{id}','bloodController@unactive_blood');
      Route::get('active-blood/{id}','bloodController@active_blood');
      Route::get('edite-blood/{id}','bloodController@edite_blood');
      Route::post('save/edite-blood/{id}','bloodController@update_blood');
      Route::get('delete-blood/{id}','bloodController@delete_blood');

      //slider
      Route::get('add/slider','imageSlidercontroller@add_slider')->name('add.slider');
      Route::post('save/slider','imageSlidercontroller@save_slider')->name('save.slider');
      Route::get('all/slider','imageSlidercontroller@all_slider')->name('all.slider');
      Route::get('unactive-slider/{id}','imageSlidercontroller@unactive_slider');
      Route::get('active-slider/{id}','imageSlidercontroller@active_slider');
      Route::get('edite-slider/{id}','imageSlidercontroller@edite_slider');
      Route::post('save/edite-slider/{id}','imageSlidercontroller@update_slider');
      Route::get('delete-slider/{id}','imageSlidercontroller@delete_slider');


      //camping
      Route::get('add/camping','campingController@add_camping')->name('add.camping');
      Route::post('save/camping','campingController@save_camping')->name('save.camping');
      Route::get('all/camping','campingController@all_camping')->name('all.camping');
      Route::get('unactive-camping/{id}','campingController@unactive_camping');
      Route::get('active-camping/{id}','campingController@active_camping');
      Route::get('edite-camping/{id}','campingController@edite_camping');
      Route::post('save/camping-camping/{id}','campingController@update_camping');
      Route::get('delete-camping/{id}','campingController@delete_camping');


      //News
      Route::get('add/news','newsController@add_news')->name('add.news');
      Route::post('save/news','newsController@save_news')->name('save.news');
      Route::get('all/news','newsController@all_news')->name('all.news');
      Route::get('unactive-news/{id}','newsController@unactive_news');
      Route::get('active-news/{id}','newsController@active_news');
      Route::get('edite-news/{id}','newsController@edite_news');
      Route::post('save/edite-news/{id}','newsController@update_news');
      Route::get('delete-news/{id}','newsController@delete_news');


      //image gallary
      Route::get('add/img','imgController@add_img')->name('add.img');
      Route::post('save/img','imgController@save_img')->name('save.img');
      Route::get('all/img','imgController@all_img')->name('all.img');
      Route::get('unactive_img/{id}','imgController@unactive_img');
      Route::get('active_img/{id}','imgController@active_img');
      Route::get('edite_img/{id}','imgController@edite_img');
      Route::post('save/edite-img/{id}','imgController@update_img');
      Route::get('delete_img/{id}','imgController@delete_img');


      //to do todo
      Route::get('add/todo','todoController@add_todo')->name('add.todo');
      Route::post('save/todo','todoController@save_todo')->name('save.todo');
      Route::get('all/todo','todoController@all_todo')->name('all.todo');
      Route::get('edite-todo/{id}','todoController@edite_todo');
      Route::post('save/edite-todo/{id}','todoController@update_todo');
      Route::get('delete-todo/{id}','todoController@delete_todo');


      //about
      Route::get('add/about','aboutController@add_about')->name('add.about');
      Route::post('save/about','aboutController@save_about')->name('save.about');
      Route::get('all/about','aboutController@all_about')->name('all.about');
      Route::get('unactive-about/{id}','aboutController@unactive_about');
      Route::get('active-about/{id}','aboutController@active_about');
      Route::get('edite-about/{id}','aboutController@edite_about');
      Route::post('save/edite-about/{id}','aboutController@update_about');
      Route::get('delete-about/{id}','aboutController@delete_about');

      //contact
      Route::get('add/contact','contactController@add_contact')->name('add.contact');
      Route::post('save/contact','contactController@save_contact')->name('save.contact');
      Route::get('all/contact','contactController@all_contact')->name('all.contact');
      Route::get('unactive-contact/{id}','contactController@unactive_contact');
      Route::get('active-contact/{id}','contactController@active_contact');
      Route::get('edite-contact/{id}','contactController@edite_contact');
      Route::post('save/edite-contact/{id}','contactController@update_contact');
      Route::get('delete-contact/{id}','contactController@delete_contact');

      //contact
      Route::get('add/hp','hospitalCenterController@add_hp')->name('add.hp');
      Route::post('save/hp','hospitalCenterController@save_hp')->name('save.hp');
      Route::get('all/hp','hospitalCenterController@all_hp')->name('all.hp');
      Route::get('unactive-hp/{id}','hospitalCenterController@unactive_hp');
      Route::get('active-hp/{id}','hospitalCenterController@active_hp');
      Route::get('edite-hp/{id}','hospitalCenterController@edite_hp');
      Route::post('save/edite-hp/{id}','hospitalCenterController@update_hp');
      Route::get('delete-hp/{id}','hospitalCenterController@delete_hp');


      //appointment show
      Route::get('add/appointment','showAppointmentController@add_appointment');
      Route::post('save/blood-donar','showAppointmentController@save_appointment');
      Route::get('all/appointment','showAppointmentController@all_appointment');
      Route::get('edite-donar/{id}','showAppointmentController@edite_donar');
      Route::post('save/blood-donar-appointment/{id}','showAppointmentController@save_edite_donar');
      Route::get('delete-donar/{id}','showAppointmentController@delete_donar');
      Route::get('single-view-donar/{id}','showAppointmentController@single_view_user');
      Route::get('conform-donar/{id}','showAppointmentController@conform_donar');


      //show subscribe
      Route::get('all/subscribe','subscribeController@all_subscribe')->name('all.subscribe');




});

Route::group(["as"=>'user.', "prefix"=>'user' ,"namespace"=>'user', "middleware"=>['auth','user']],function(){
      Route::get('user/dashbord','userController@index')->name('user_dashbord');


      //get appointment people
      Route::post('save/blood-donar','bloodDonarController@save');

      //subcribes
      Route::post('save/subcribes','subcribeController@save_subscribe')->name('save.subcribes');
      //show ccamping
      Route::get('show/camping','campingController@shwo_camping')->name('show.camping');
      Route::get('single-view-camping/{id}','campingController@single_view_camping');
      //show blog
      Route::get('show/news','newsController@show_news')->name('show.news');
      Route::get('single_news/{id}','newsController@single_news');
      //about us
      Route::get('about-us','aboutController@aboutus')->name('aboutus');
      //contact us
      Route::get('contact-us','contactController@contactus')->name('contactus');
});
