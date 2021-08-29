<?php 

    require __DIR__ . '/app/classes/route.class.php';
    require __DIR__ . '/app/classes/controller.class.php';
    require __DIR__ . '/app/classes/controller.model.php';

    Route::any('/', function () {
        echo 'This page is homepage.';
    });
    Route::any('/users', 'Users@index');
    Route::error(function () {
        $controller = new Controller();
        $controller -> view('404');
    });
?>