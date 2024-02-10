<?php

namespace App\Listeners;

use App\Events\VideoViewer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ViewerListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(VideoViewer $event)
    {
        $this->updateViewer($event->event);
    }
    function updateViewer($video){
        $video->viewer  = $video->viewer +1;
        $video->save();
    }
}
