<?php

use Auth\Auth;
use controllers\get\Teacher\TeacherCon;
use Teacher\Teacher;

require './src/controllers/teacher/Teacher.php';
require './src/controllers/auth/Auth.php';
include './src/Router.php';
session_start();

/*
 * Basic routes
 * */
Router::add('/', function () {
    header('Location: /home');
  }, 'get');

  Router::add('/home',function(){
    require_once('./public/views/home/Home.php');
  });
 Router::add('/about-us', function () {
    require_once('./public/views/about-us/AboutUs.php');
  }, 'get');

if(!isset($_SESSION['user_id'])){
  Router::add('/login', function () {
    Auth::login();
  }, 'get');
  Router::add('/vlogin', function () {
    Auth::vlogin();
  }, 'post');

  Router::add('/sing-up', function () {
    Auth::singUp();
  }, 'get');
  Router::add('/vsing-up', function(){
    Auth::vSingUp();
  }, 'post');

 }
if(isset($_SESSION['user_id'])){
  /*
   * Routes of teacher
   * */
  Router::add('/login', function(){
    header('Location: /home');
  },'get');
  //logout
  Router::add('/logout', function(){
    Auth::logout();
  },'get');

  Router::add('/teacher/detail/([0-9]*)', function ($tea_id) {
    TeacherCon::detail($tea_id);
 }, 'get');
 
  // List
  Router::add('/teacher/list', function () {
    TeacherCon::list();
  }, 'get');

  Router::add('/teacher/search', function () {
    TeacherCon::search();
  }, 'post');

  // Add teacher
  Router::add('/teacher/add', function () {
    TeacherCon::addGet();
  }, 'get');
  Router::add('/teacher/vadd', function () {
    TeacherCon::addPost();
  }, 'post');

  // Update teacher
  Router::add('/teacher/edit/([0-9]*)', function ($tea_id) {
    TeacherCon::updateGet($tea_id);
  }, 'get');
  Router::add('/teacher/update/([0-9]*)', function ($tea_id) {
    TeacherCon::updatePost($tea_id);
  }, 'post');

  // Delete teacher
  Router::add('/teacher/delete/([0-9]*)', function ($delete_id) {
    TeacherCon::delete($delete_id);
  }, 'get');

}
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

//Router::add('/teacher/update/([0-9]*)', function ($tea_id) {
//   require_once('./src/controllers/teacher/post/Update.php');
//}, 'post');

//Router::add('/teacher/delete/([0-9]*)', function ($delete_id) {
//   require_once('./src/controllers/teacher/get/Delete.php');
//}, 'get');

//Router::add('/teacher/update/([0-9]*)', function ($tea_id) {
//   require_once('./src/controllers/teacher/get/Update.php');
//}, 'get');

/* Router::add('/teacher/add', function () {
   require_once('./src/controllers/teacher/get/Add.php');
}, 'get'); */
