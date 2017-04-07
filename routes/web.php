<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','HomeController@home');
//Route::get('/', 'HomeController@index');
Route::post('/admin/login_admin', 'AdminController@doLogin');
Route::get('/admin/login', 'AdminController@seeLogin')->name('login');
// Admin Logout
Route::get('/admin/logout', 'AdminController@logout');
Route::get('/','HomeController@home');
Route::get('/contact','HomeController@contactPage');
Route::get('/about-us','HomeController@aboutUsPage');
Route::get('/services','HomeController@servicesPage');
Route::get('/page/{pageName}','HomeController@extraPageAdded');
//Ride with us page url
Route::get('/features','HomeController@getFeaturesPages');
// Biddyut hubs page's url
Route::get('/career','HomeController@getCareerPage');
// Job apply page url
Route::get('/apply','HomeController@getApplyPage');
//Mailing system page url
Route::post('/send','EmailController@postContactMail');
Route::post('/news-letter','EmailController@postNewsLetter');
Route::post('/team-up','EmailController@postTeamUp');
Route::post('/apply','EmailController@postApply');
Route::post('/job-apply','EmailController@postJobApply');
// From API
//Client Registration, Login & Logout
Route::get('/client/reg','UserController@getClientReg');
Route::post('/client/reg','UserController@postClientReg');
Route::get('/client/login','UserController@getClientLogin');
Route::post('/client/login','UserController@postClientLogin');
Route::get('/customer','UserController@getCustomerDashboard');
Route::get('/customer/logout','UserController@getCustomerLogout');
//Merchant Registration, Login & Logout
Route::get('/merchant/login','UserController@getMerchantLogin');
Route::post('/merchant/login','UserController@postMerchantLogin');
Route::get('/merchant/registration','UserController@getMerchantRegistration');
Route::post('/merchant/registration','UserController@postMerchantRegistration');
//get city id
Route::get('/get-city/{id}','CalculateController@getDistrict');
//get zone id
Route::get('/get-zone/{id}','CalculateController@getZoneId');
//Carge calculation
Route::post('/charge','CalculateController@postChargeCalculation');
Route::get('/charge/{product_category_id}/{pic_zone_id}/{del_zone_id}/{quantity}/{width}/{height}/{length}','CalculateController@getChargeCalculation');
// Order Tracking
Route::get('/order-tracking','OrderAndCalculateController@postOrderTacking');
Route::post('/review','OrderAndCalculateController@postCustomerReview');

Route::get('/calculate','OrderAndCalculateController@getCalculate');
// Latest news show
Route::get('/latest-news/{id}','HomeController@getLatestNews');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', 'AdminController@dashBoard');

    Route::get('/api_create', 'AdminController@getApiCreate');
    Route::post('/api_create', 'AdminController@postApiCreate');
    Route::get('/api_list', 'AdminController@apiList');
    Route::get('/api_update/{id}', 'AdminController@getApiUpdate');
    Route::post('/api_update', 'AdminController@postApiUpdate');

    // Section create
    Route::post('/logo_create', 'SectionController@logoCreate');
    Route::post('/menu_create', 'SectionController@menuCreate');
    Route::post('/slider_create', 'SectionController@sliderCreate');
    Route::post('/page_create', 'SectionController@pagePartsCreate');
    Route::post('/section_create', 'SectionController@homeSectionCreate');
    Route::post('/person_create', 'SectionController@personCreate');
    Route::post('/footer_create', 'SectionController@footerCreate');
    Route::post('/icon_create', 'SectionController@socialIconCreate');
    Route::post('/service-details-create', 'SectionController@postServiceDetailsCreate');

    Route::get('/rider-create', 'SectionController@getRiderPageCreate');
    Route::post('/rider-create', 'SectionController@postRiderPageCreate');
    // Section view page
    Route::get('/sections', 'SectionController@sections');
    // Sub Sections List page
    Route::get('/menu_list', 'SectionController@menuList');
    Route::get('/slider_list', 'SectionController@sliderList');
    Route::get('/home_section_list', 'SectionController@homeSectionList');
    Route::get('/person_info_list', 'SectionController@personInfoList');
    Route::get('/pager_parts', 'SectionController@pagesPartsList');
    Route::get('/footer_list', 'SectionController@footerList');
    Route::get('/social_area_list', 'SectionController@socialIconList');
    Route::get('/review_list', 'SectionController@getReviewList');
    // All sections view pages
    Route::get('/logo', 'SectionController@getLogoCreate');
    Route::get('/menu', 'SectionController@getMenuCreate');
    Route::get('/slider', 'SectionController@getSliderCreate');
    Route::get('/home_section', 'SectionController@getHomeSectionCreate');
    Route::get('/person_info', 'SectionController@getPersonInfoCreate');
    Route::get('/footer', 'SectionController@getFooterCreate');
    Route::get('/social_icon', 'SectionController@getSocialIconCreate');
    Route::get('/pager_part', 'SectionController@getPagerPartCreate');
    Route::get('/service-details', 'SectionController@getServiceDetailsCreate');
    //All sections update
    Route::post('/footer_update', 'SectionController@updateFooter');
    Route::post('/menu_update', 'SectionController@updateMenu');
    Route::post('/pager_update', 'SectionController@updatePagerParts');
    Route::post('/person_update', 'SectionController@updatePersonInfo');
    Route::post('/slider_update', 'SectionController@updateSliderInfo');
    Route::post('/social_icon_update', 'SectionController@updateSocialIcon');
    Route::post('/home_section_update', 'SectionController@updateHomeSection');
    //All sections edit page
    Route::get('/get_menu_edit/{menuId}', 'SectionController@menuEdit');
    Route::get('/get_slider_edit/{sliderId}', 'SectionController@sliderEdit');
    Route::get('/get_home_section_edit/{homeId}', 'SectionController@homeSectionEdit');
    Route::get('/get_pager_parts_edit/{pagerId}', 'SectionController@pagerPartsEdit');
    Route::get('/get_person_info_edit/{personId}', 'SectionController@personInfoEdit');
    Route::get('/get_social_icon_edit/{socialId}', 'SectionController@socialIconEdit');
    Route::get('/get_footer_edit/{footerId}', 'SectionController@footerEdit');

    //user crate for this system
    Route::resource('user','UserController');
    Route::get('user-settings','UserController@settings')->name('user.settings');
    Route::post('user-settings','UserController@postSettings')->name('user.post-settings');

    //Remove Sections List Single Item
    Route::get('/menu/{id}/delete','SectionController@menu_delete')->name('menu.delete');
    Route::get('/footer/{id}/delete','SectionController@footer_menu_delete')->name('footer.menu.delete');
    Route::get('/pager_part/{id}/delete','SectionController@pager_menu_delete')->name('pager.menu.delete');
    Route::get('/person_info/{id}/delete','SectionController@person_menu_delete')->name('person.menu.delete');
    Route::get('/slider/{id}/delete','SectionController@slider_delete')->name('slider.delete');
    Route::get('/social_icon/{id}/delete','SectionController@social_icon_delete')->name('socialIcon.delete');
    Route::get('/review/{id}/delete','SectionController@reviewDelete')->name('review.delete');

});
