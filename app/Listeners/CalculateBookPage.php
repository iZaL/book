<?php namespace App\Listeners;

use App\Events\BookPublished;
use App\Events\BookWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Knp\Snappy\Pdf;

class CalculateBookPage implements ShouldQueue
{

    private $uploadPath;

    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        $this->uploadPath = base_path('files/pdfs/');
    }

    /**
     * Handle the event.
     *
     * @param  BookPublished $event
     * @return void
     */
    public function handle(BookPublished $event)
    {
        // create PDF

        return true;
    }

}
