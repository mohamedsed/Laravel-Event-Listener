<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Events\VideoViewer;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function  index() {
    $event= Event::first();
    event(new VideoViewer($event));
    return view('welcome' , compact('event'));
    }

}
