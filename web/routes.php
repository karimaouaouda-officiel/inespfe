<?php

use App\System\Request;
use App\System\Router;

Router::get("/" , "MainController|index" )->name('home');

Router::get('/upload-video' , function(){
    return view('forms/upload-video.php');
});

Router::post('/upload' , "FilmController|upload");


//Authenticate

Router::post('/register' , "UserController|register");
Router::post('/login', "UserController|login");

Router::get('/login' , function(){
    if( isAuth() ){
        return view("index.php");
    }
    return view("login.php");
})->name('loginView');


Router::get("/watch" , "FilmController|watch");

Router::get("/contact" , function(){
    return view('contact.php');
});

Router::get("/about" , function(){
    return view('about.php');
});

Router::get("/upload", function () {
    return view('forms/upload-film.php');
});

Router::post('/logout' , "UserController|logout");



?>