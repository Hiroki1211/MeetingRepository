<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function main(Event $event){
        return view('meeting/main');
    }
    
    public function make(Event $event){
        return view('meeting/main-make');
    }
}
