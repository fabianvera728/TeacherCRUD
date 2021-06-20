<?php
include './src/Router.php';


/*
 * Basic routes
 * */
Router::add('/', function () {
   header('Location: /home');
}, 'get');

Router::add('/home', function () {
   require_once('./public/views/home/Home.php');
}, 'get');

Router::add('/login', function () {
   require_once('./src/controllers/auth/Login.php');
}, 'get');
Router::add('/login', function () {
   require_once('./src/controllers/auth/Login.php');
}, 'post');

Router::add('/about-us', function () {
   require_once('./public/views/about-us/AboutUs.php');
}, 'get');
/*
 * Routes of teacher
 * */
Router::add('/teacher/list', function () {
   require_once('./src/controllers/teacher/get/List.php');
}, 'get');

Router::add('/teacher/edit/([0-9]*)', function ($tea_id) {
   require_once('./src/controllers/teacher/get/Update.php');
}, 'get');
Router::add('/teacher/update/([0-9]*)', function ($tea_id) {
   require_once('./src/controllers/teacher/post/Update.php');
}, 'post');

Router::add('/teacher/delete/([0-9]*)', function ($delete_id) {
   require_once('./src/controllers/teacher/get/Delete.php');
}, 'get');

Router::add('/teacher/add', function () {
   require_once('./src/controllers/teacher/get/Add.php');
}, 'get');
Router::add('/teacher/add', function () {
   require_once('./src/controllers/teacher/post/Add.php');
}, 'post');

Router::pathNotFound(function ($path) {
   header('HTTP/1.0 404 Not Found');
   require_once('./public/views/not-found/NotFound.php');
});

Router::run('/');

// Post route example
Router::add('/contact-form', function () {
   echo 'Hey! The form has been sent:<br/>';
   print_r($_POST);
}, 'post');

// Accept only numbers as parameter. Other characters will result in a 404 error
Router::add('/foo/([0-9]*)/bar', function ($var1) {
   echo $var1 . ' is a great number!';
});
