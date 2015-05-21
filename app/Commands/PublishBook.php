<?php namespace App\Commands;

use App\Events\BookPublished;
use App\Src\Book\BookRepository;
use Illuminate\Console\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublishBook extends Command implements SelfHandling
{

    private $request;

    /**
     * Create a new command instance.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Execute the command.
     *
     * @param BookRepository $bookRepository
     * @return static
     */
    public function handle(BookRepository $bookRepository)
    {
        // Create a Entry In Database
        $book = $this->storeInDB($bookRepository);

        // Create Book Meta Record in DB
        $book->meta()->create([]);

        // Fire Events While the Book is Being Published
        // Refer EventServiceProvider Class For The Events Fired When the Book Is Published
        event(new BookPublished($book));

        return $book;
    }

    /**
     * @param BookRepository $bookRepository
     * @return static
     */
    private function storeInDB(BookRepository $bookRepository)
    {
        return $bookRepository->model->create([
            'user_id'  => auth()->user()->id,
//            'category_id'  => '1', // @todo,
//            'cover_en'=>'',
//            'cover_ar'=>'',
//            'views'=>'',
            'title_en' => $this->request->title_en,
            'title_ar' => $this->request->title_ar,
            'body'     => $this->request->body,
            'status'   => 'draft', // published
            'free'     => $this->request->free,
            'url'      => $this->generateFileName()
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
