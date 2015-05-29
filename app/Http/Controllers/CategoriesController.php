<?php namespace App\Http\Controllers;

use App\Commands\PublishBook;
use App\Http\Requests\CreateBookRequest;

class CategoriesController extends Controller
{

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
        return view('modules.category.index');
    }

    public function create()
    {
        return view('modules.book.create');
    }

    public function show ($id) {
        return 'this is from categories show'. $id;
    }

    /**
     * @param CreateBookRequest $request
     */
    public function store(CreateBookRequest $request)
    {
        // dispatch the command
        $this->dispatchFrom(PublishBook::class, $request);
    }
}
