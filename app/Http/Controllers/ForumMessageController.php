<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ForumMessage;

class ForumMessageController extends Controller
{
    public function create() {
        return view('forum');
    }

    public function store(Request $request) {
        $message = new ForumMessage();
        $message->user_name = $request->name;
        $message->message = $request->message;
        $message->save();

        return redirect()->route('forum.show');
    }

    public function show() {
        $messages = ForumMessage::all();
        return view('forum', ['messages'=> $messages]);
    }
}
