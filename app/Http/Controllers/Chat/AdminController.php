<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class AdminController extends RoutingController
{
    public function __invoke(Request $request)
    {
        $chats = Chat::withCount('unseen_messages')->orderBy('unseen_messages_count', 'desc')->paginate(10);
        return view('chattle::admin.messages', [
            'chats' => $chats
        ]);
    }
}
