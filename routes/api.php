<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(
    [
        'prefix' => '/authors',
        'name' => 'authors.',
    ],
    function (\Laravel\Lumen\Routing\Router $router) {
        $router->get('/', 'AuthorsController@index');
        $router->get('/{author}', 'AuthorsController@show');
        $router->post('/', 'AuthorsController@store');
        $router->put('/{author}', 'AuthorsController@update');
        $router->patch('/{author}', 'AuthorsController@update');
        $router->delete('/{author}', 'AuthorsController@destroy');
    }
);

$router->group(
    [
        'prefix' => '/books',
        'name' => 'books.',
    ],
    function (\Laravel\Lumen\Routing\Router $router) {
        $router->get('/', 'BooksController@index');
        $router->get('/{book}', 'BooksController@show');
        $router->post('/', 'BooksController@store');
        $router->put('/{book}', 'BooksController@update');
        $router->patch('/{book}', 'BooksController@update');
        $router->delete('/{book}', 'BooksController@destroy');
    }
);
