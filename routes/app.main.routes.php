<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 16-01-2017
 * Time: 01:29 AM
 */

Route::get('/', [ 'as' => '/', 'uses' => 'MainDataController@index' ]);
Route::get('my-room', [ 'as' => 'my_room', 'uses' => 'MainDataController@myRoom' ]);
Route::post('logout', [ 'as' => 'logout', 'uses' => 'MainDataController@logout']);

Route::get('knowledge-center', [ 'as' => 'knowledge-center', 'uses' => 'MainDataController@knowledgeCenter' ]);
Route::get('help', [ 'as' => 'help', 'uses' => 'MainDataController@help' ]);

Route::get('reporting-executive', [ 'as' => 'reporting-executive', 'uses' => 'MainDataController@executiveReporting' ]);
Route::get('reporting-technical', [ 'as' => 'reporting-technical', 'uses' => 'MainDataController@technicalReporting' ]);
Route::get('order-history', [ 'as' => 'order-history', 'uses' => 'MainDataController@orderHistory' ]);

Route::get('drag-drop', [ 'as' => 'drag-drop', 'uses' => 'MainDataController@dragDrop' ]);
Route::get('debug', [ 'as' => 'debug', 'uses' => 'MainDataController@debugInfo' ]);
Route::post('save-drag-drop-list', [ 'as' => 'save_drag_drop_list', 'uses' => 'MainDataController@saveDragDrop' ]);
Route::post('get-ajax-html', [ 'as' => 'get_ajax_html', 'uses' => 'MainDataController@getAjaxHtml' ]);


Route::get('academic', [ 'as' => 'academic', 'uses' => 'MainDataController@academicRoot' ]);


Route::post('get-subject-detail', [ 'as' => 'get_subject_detail', 'uses' => 'MainDataController@getSubjectDetail' ]);


Route::get('cart/{order_id?}', [ 'as' => 'cart', 'uses' => 'ManageCartController@getCartView' ]);
Route::post('add-to-cart', [ 'as' => 'add_to_cart', 'uses' => 'ManageCartController@addToCart' ]);
Route::post('remove-from-cart', [ 'as' => 'remove_from_cart', 'uses' => 'ManageCartController@removeFromCart' ]);
Route::get('cart-product-detail/{course_subscription_id?}', [ 'as' => 'cart_product_detail', 'uses' => 'ManageCartController@getCartProductDetail' ]);
Route::get('checkout/{order_id}', [ 'as' => 'checkout', 'uses' => 'ManageCartController@checkout' ]);
Route::post('purchase-course', [ 'as' => 'purchase_course', 'uses' => 'ManageCartController@purchaseCourse' ]);
Route::get('checkout-complete', [ 'as' => 'checkout_complete', 'uses' => 'ManageCartController@getCheckoutCompleteView' ]);



