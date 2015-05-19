<?php namespace App\Http\Controllers;

use App\Src\Book\BookRepository;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    /**
     * Create a new authentication controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get Authenticated Users Profile
     * @param BookRepository $bookRepository
     * @return \Illuminate\View\View
     */
    public function getProfile(BookRepository $bookRepository)
    {
        $user = Auth::user();

        $books = $bookRepository->model->all();

        return view('profile', compact('user', 'books'));

    }
}
