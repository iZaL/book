<?php namespace App\Commands;

use App\Events\BookPublished;
use App\Src\Book\BookRepository;
use Illuminate\Console\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Support\Facades\Auth;

class PublishBook extends Command implements SelfHandling
{
    /**
     * @var
     */
    private $title_en;
    /**
     * @var
     */
    private $title_ar;
    /**
     * @var
     */
    private $content;
    /**
     * @var
     */
    private $free;

    /**
     * Create a new command instance.
     * @param $title_en
     * @param $title_ar
     * @param $content
     * @param $free
     */
    public function __construct($title_en, $title_ar, $content, $free)
    {
        $this->title_en = $title_en;
        $this->title_ar = $title_ar;
        $this->content = $content;
        $this->free = $free;
    }

    /**
     * Execute the command.
     *
     * @param BookRepository $bookRepository
     */
    public function handle(BookRepository $bookRepository)
    {
        // Create a Entry In Database
        $book = $this->storeInDB($bookRepository);

        // Fire Events
        event(new BookPublished($book));
    }

    private function storeInDB(BookRepository $bookRepository)
    {
        return $bookRepository->model->create([
            'user_id' => Auth::user('id'),
            'title_en' => $this->title_en,
            'title_ar' => $this->title_ar,
            'content' => $this->content,
            'published' => 0,
            'free' => $this->free,
            'url' => $this->generateFileName()
        ]);
    }

    /**
     * @return string
     * Generate PDF file Name for the Book
     */
    private function generateFileName()
    {
        return md5(uniqid(mt_rand(), true)) . '.pdf';
    }
}
