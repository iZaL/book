<?php namespace App\Http\Controllers;


use App\Src\Role\RoleRepository;
use App\Src\User\UserRepository;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    private $user;
    private $role;

    public function __construct(UserRepository $user, RoleRepository $role)
    {
        $this->middleware('auth');
        $this->user = $user;
        $this->role = $role;
    }

    /**
     * Get Authenticated Users Profile
     * @return \Illuminate\View\View
     */
    public function profile()
    {

        $user = Auth::user();

        // get the books uploaded by this user
        $books = $user->books()->with(['meta'])->get();

        return view('modules.user.profile', compact('user', 'books'));

    }


}
