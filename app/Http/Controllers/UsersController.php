<?php

namespace Laracarte\Http\Controllers;

use Illuminate\Http\Request;
use Laracarte\Http\Controllers\Controller;
use Laracarte\Http\Requests;
use Laracarte\User;
use JavaScript;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Display the specified resource.
     *
     * @param  Laracarte\User  $user
     * @return Response
     */
    public function show(User $user)
    {
        JavaScript::put([
            'latitude' => $user->latitude,
            'longitude' => $user->longitude
        ]);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Laracarte\User  $user
     * @return Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Laracarte\User  $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        //
    }
}
