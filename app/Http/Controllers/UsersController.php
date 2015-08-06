<?php

namespace Laracarte\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JavaScript;
use Laracarte\Http\Controllers\Controller;
use Laracarte\Http\Requests;
use Laracarte\User;

class UsersController extends Controller
{

    /**
     * Display a list of all artisans.
     *
     * @return Response
     */
    public function index()
    {
        $usersCount = User::count();
        $users = User::latest()->simplePaginate(200);

        return view('users.index', compact('users', 'usersCount'));
    }

    /**
     * Display the current user account page.
     *
     * @return Response
     */
    public function account()
    {
        $user = Auth::user();
        return view('users.account', compact('user'));
    }

    /**
     * Display the current user profile.
     *
     * @param  Laracarte\User  $user
     * @return Response
     */
    public function profile(User $user)
    {
        JavaScript::put([
            'latitude' => $user->latitude,
            'longitude' => $user->longitude
        ]);

        return view('users.profile', compact('user'));
    }

    /**
     * Show the edit form.
     *
     * @return Response
     */
    public function edit_account()
    {
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    /**
     * Update a user account
     *
     * @param  Request  $request
     * @return Response
     */
    public function update_account(Request $request)
    {
        dd('Updated!');
    }


    public function new_password()
    {
        return view('users.new_password');
    }

    public function update_password()
    {
        dd('Updated!');
    }
}
