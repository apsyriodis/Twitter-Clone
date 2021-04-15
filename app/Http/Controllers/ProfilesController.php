<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class ProfilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(User $user){
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->paginate(5)
        ]);
    }

    public function edit(User $user){
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){

    $attributes = request()->validate([
                 'name' => ['string', 'required', 'max:255'],
                 'username' => ['string', 'required', 'max:15', 'alpha_dash', Rule::unique('users')->ignore($user)],
                 'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
                 'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed'],
                 'avatar' => ['file']
        ]);

        if(request('avatar'))
            $attributes['avatar'] = request('avatar')->store('avatars');

        $user->update($attributes);

        return redirect($user->path());
    }
}
