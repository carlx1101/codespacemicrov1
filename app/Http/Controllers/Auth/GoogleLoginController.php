<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Actions\Jetstream\CreateTeam;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;


class GoogleLoginController extends Controller
{
    protected $createTeam;

    public function __construct(CreateTeam $createTeam)
    {
        $this->createTeam = $createTeam;
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::where('email', $googleUser->email)->first();

        // Declare the $photoFileName variable outside of the conditional blocks
        $photoFileName = null;

        if (!$user) {
            // Generate a unique filename for the profile photo
            $photoFileName = uniqid() . '.jpg'; // You can use a different extension if needed

            // Store the profile photo in the storage
            Storage::disk('public')->put('profile-photos/' . $photoFileName, file_get_contents($googleUser->avatar));

            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'role' => 0,
                'password' => \Hash::make(rand(100000, 999999)),
                'google_auth_id' => $googleUser->id,
                'profile_photo_path' => 'profile-photos/' . $photoFileName,
                'email_verified_at' => now(), 

            ]);

            // Create a team using the CreateTeam action
            $team = $this->createTeam->create($user, [
                'name' => $user->name . "'s Team",
            ]);
        } else {
            // Update the user's Google authentication ID but keep the existing profile photo path
            $user->update([
                'google_auth_id' => $googleUser->id,
            ]);
        }

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
