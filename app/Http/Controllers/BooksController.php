<?php namespace App\Http\Controllers;

use App\Commands\PublishBook;
use App\Http\Requests\CreateBookRequest;

class BooksController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth', ['on' => ['create', 'store']]);
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('modules.book.index');
    }

    public function create()
    {
        return view('modules.book.create');
    }

    /**
     * @param CreateBookRequest $request
     */
    public function store(CreateBookRequest $request)
    {
        // dispatch the command
        $a = $this->dispatchFrom(PublishBook::class, $request);
        dd($a);
    }
}
