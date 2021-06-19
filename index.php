<?php
// Include router class
include './src/Route.php';

// Add base route (startpage)
Route::add('/', function () {
    require_once('./src/controllers/Login.php');
}, 'get');
Route::add('/', function () {
    require_once('./src/controllers/Login.php');
}, 'post');
Route::add('/login', function () {
    require_once('./src/controllers/Login.php');
}, 'get');
Route::add('/login', function () {
    require_once('./src/controllers/Login.php');
}, 'post');

// Post route example
Route::add('/teacher/list', function () {
    require_once('./src/controllers/teacher/get/List.php');
}, 'get');
Route::add('/teacher/list', function () {
    require_once('./src/controllers/teacher/get/List.php');
}, 'post');

Route::add('/teacher/edit/([0-9]*)', function ($tea_id) {
    require_once('./src/controllers/teacher/get/Update.php');
}, 'get');
Route::add('/teacher/update/([0-9]*)', function ($tea_id) {
    require_once('./src/controllers/teacher/post/Update.php');
}, 'post');



Route::add('/teacher/delete/([0-9]*)', function ($delete_id) {
    require_once('./src/controllers/teacher/get/Delete.php');
}, 'get');
/*Route::add('/teacher/delete/([0-9]*)', function ($delete_id) {
    require_once('./src/controllers/teacher/post/Delete.php');
}, 'post');
 */
Route::add('/teacher/add', function () {
    require_once('./src/controllers/teacher/get/Add.php');
}, 'get');
Route::add('/teacher/addvalidate', function () {
    require_once('./src/controllers/teacher/post/Add.php');
}, 'post');


Route::run('/');




// Post route example
Route::add('/contact-form', function () {
    echo 'Hey! The form has been sent:<br/>';
    print_r($_POST);
}, 'post');

// Accept only numbers as parameter. Other characters will result in a 404 error
Route::add('/foo/([0-9]*)/bar', function ($var1) {
    echo $var1 . ' is a great number!';
});
