<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('tasks.welcome');
// });

use App\Http\Controllers\TaskController;

// Route::get('/tasks', [TaskController::class, 'index']);
// Route::get('/tasks/create', [TaskController::class, 'create']);
// Route::post('/tasks', [TaskController::class, 'store']);
// // Route::get('/post', function () {
// //     return "This is post page";
// // });

Route::get('/post/firstPost', function () {
    return "This is first post";
});

Route::get('/post/{id?}/comment/{commentid}', function (String $id = null, String $commentid) {
    if($id) {
        return "This is post with ID: " . $id. "and comment ID:" . $commentid;
    } else {
        return "This is post page";
    }
}) -> where('id', '[0-3]') -> whereAlpha ('commentid');

Route::get('/new-about', function() {
    return view('tasks.about');
}) -> name('about');

Route::redirect('/about-us-pranali', '/new-about');

Route::prefix('page')->group(function() {
    Route::get('/pooja', function () {
        return "This is first pooja";
    });

    Route::get('/sahil', function () {
        return "This is first sahil ";
    });

    Route::get('/pranali', function () {
        return "This is first pranali";
    });
});


Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);
Route::put('/tasks/{id}', [TaskController::class, 'update']);
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);



    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/post', function () {
        return view('post');
    });



Route::fallback(function() {
    return "This page does not exist";
});