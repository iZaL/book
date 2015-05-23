<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateBookRequest;
use App\Jobs\PublishBook;
use App\Src\Book\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * @var BookRepository
     */
    private $bookRepository;

    /**
     * @param BookRepository $bookRepository
     */
    public function __construct(BookRepository $bookRepository)
    {
        $this->middleware('auth', ['on' => ['create', 'store']]);
        $this->bookRepository = $bookRepository;
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $books = $this->bookRepository->model->with(['meta'])->has('meta')->get();

        return view('modules.book.index', compact('books'));
    }

    public function create()
    {
        return view('modules.book.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title_ar' => 'required',
            'title_en' => 'required',
            'body'     => 'required',
            'free'     => 'boolean'
        ]);

        // dispatch the command

        // 1 - Publish The Book
        // 2 - Create The PDF File ( Event )
        // 3 - Count the Total Pages For the Generated PDF File ( Event )

        $book = $this->dispatch(new PublishBook($request));

        return redirect()->action('BookController@index')->with('message', 'Book Published');
    }
}
