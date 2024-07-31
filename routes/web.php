<?php

use App\Http\Controllers\Chat\AdminController;
use App\Http\Controllers\Chat\CreateController;
use App\Http\Controllers\Chat\GetChatsController;
use App\Http\Controllers\Chat\GetMessagesController;
use App\Http\Controllers\Chat\PostMessageController;
use App\Livewire\Blog;
use App\Livewire\HomePage;
use App\Livewire\Page;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomePage::class);

Route::get('/page/{slug}', Page::class);
Route::get('/blog/{slug}', Blog::class);

Route::prefix('chat')->group(function () {
    Route::view('chat', 'chat::chat');
    Route::post('create-chat', CreateController::class);
    Route::post('post-message', PostMessageController::class);
    Route::get('get-messages', GetMessagesController::class);
    Route::get('chat-admin', AdminController::class);
    Route::get('get-chats', GetChatsController::class);
});
