<?php

namespace Laracarte\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use JavaScript;
use Laracarte\Http\Controllers\Controller;
use Laracarte\Http\Requests;
use Laracarte\Http\Requests\ContactRequest;
use Laracarte\User;
use Thomaswelton\LaravelGravatar\Facades\Gravatar;

class PagesController extends Controller
{

    public function home()
    {
    	$users = User::get(['username', 'latitude', 'longitude', 'email']);

    	$users->map(function($user){
            $user->avatar = Gravatar::src($user->email);
    		$user->profile_url = route('artisan_path', $user->username);
    	});

    	JavaScript::put(compact('users'));

    	return view('pages.home');
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function postContact(ContactRequest $request)
    {
        $data = $request->only('name', 'email', 'message');

        Mail::queue('emails.contact', compact('data'), function ($message) use ($data) {
            $message->from($data['email'], $data['name']);
            $message->to(config('admin_user.email'), config('admin_user.name'))->subject('New Message Laracarte Contact');
        });

        session()->flash('success-message', 'Thanks for your message.');
        return redirect()->back();
    }
}
