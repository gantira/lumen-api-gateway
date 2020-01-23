<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['middleware'=> 'client.credentials'], function () use ($router) {

    /**
     * Routes for authors
     */
    $router->get('/authors', 'AuthorController@index');
    $router->get('/authors/{author}', 'AuthorController@show');
    $router->post('/authors', 'AuthorController@store');
    $router->put('/authors/{author}', 'AuthorController@update');
    $router->patch('/authors/{author}', 'AuthorController@update');
    $router->delete('/authors/{author}', 'AuthorController@destroy');

    /**
     * Routes for books
     */
    $router->get('/books', 'BookController@index');
    $router->get('/books/{book}', 'BookController@show');
    $router->post('/books', 'BookController@store');
    $router->put('/books/{book}', 'BookController@update');
    $router->patch('/books/{book}', 'BookController@update');
    $router->delete('/books/{book}', 'BookController@destroy');

    /**
     * Routes for users
     */
    $router->get('/users', 'UserController@index');
    $router->get('/users/{user}', 'UserController@show');
    $router->post('/users', 'UserController@store');
    $router->put('/users/{user}', 'UserController@update');
    $router->patch('/users/{user}', 'UserController@update');
    $router->delete('/users/{user}', 'UserController@destroy');
});