<?php namespace App\Commands;

use App\Commands\Command;
use App\Src\Book\BookRepository;
use Illuminate\Contracts\Bus\SelfHandling;

class UpdateBookWithPdfName extends Command implements SelfHandling
{
    /**
     * @var BookRepository
     */
    private $bookRepository;

    /**
     * Create a new command instance.
     *
     * @param BookRepository $bookRepository
     */
    public function __construct(BookRepository $bookRepository)
    {
        //
        $this->bookRepository = $bookRepository;
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
