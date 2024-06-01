<?php

namespace App\Http\Controllers\Chat;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CreateController extends Controller
{
    public function __invoke(Request $request)
    {
        $chat = Chat::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'unseen_messages'   => 0,
            'last_sender'       => 'customer'
        ]);
        return response()->json($chat, 200);
    }
}
