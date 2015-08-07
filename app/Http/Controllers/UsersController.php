<?php

namespace Laracarte\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use JavaScript;
use Laracarte\Http\Controllers\Controller;
use Laracarte\Http\Requests;
use Laracarte\Http\Requests\UpdatePasswordRequest;
use Laracarte\Http\Requests\UpdateUserRequest;
use Laracarte\Jobs\SaveImageFile;
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
        $user = $this->user;
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
        $user = $this->user;
        return view('users.edit', compact('user'));
    }

    /**
     * Update a user account
     *
     * @param  UpdateUserRequest  $request
     * @return Response
     */
    public function update_account(UpdateUserRequest $request)
    {
        $data = $request->all();

        if(isset($data['avatar'])){
          $data['avatar'] = $this->saveImage($request->avatar);

          if($this->user->avatar){
            $this->deleteCurrentAvatar($this->user->avatar);
          }
        }

        $this->user->update($data);

        session()->flash('success-message', 'Your account has been successfully updated.');

        return redirect()->route('account_path');
    }

    /**
     * Display password updating form
     *
     * @return Response
     */
    public function new_password()
    {
        return view('users.new_password');
    }

    /**
     * Update a user password
     *
     * @param  UpdatePasswordRequest  $request
     * @return Response
     */
    public function update_password(UpdatePasswordRequest $request)
    {
        if ($this->theCurrentPasswordProvidedIsCorrect($request)) {

            $this->updateUserPassword($request);
            session()->flash('success-message', 'Your password has been successfully updated.');
            return redirect()->back();

        } else {
            return redirect()->back()->withErrors(['current_password' => 'Your current password is incorrect.']);
        }
    }

    private function theCurrentPasswordProvidedIsCorrect($request)
    {
        return Hash::check($request->current_password, $request->user()->password);
    }

    private function updateUserPassword($request)
    {
        $this->user->update(['password' => bcrypt($request->password)]);
    }

    private function saveImage($image)
    {
        return $this->dispatch(
            new SaveImageFile($image)
        );
    }

    private function deleteCurrentAvatar($avatar)
    {
        Storage::delete(config('upload_paths.avatars') . $avatar);
    }
}
