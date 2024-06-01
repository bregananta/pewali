<?php

namespace App\Http\Controllers\Chat;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GetChatsController extends Controller
{
    public function __invoke()
    {
        $chats = Chat::withCount('unseen_messages')->orderBy('unseen_messages_count', 'desc')->paginate(10);
        return response()->json($chats, 200);
    }
}
