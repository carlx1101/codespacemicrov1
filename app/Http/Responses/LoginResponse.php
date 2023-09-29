<?php
 
namespace App\Http\Responses;
 
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
 
class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        if (auth()->user()->role == 'admin'){
            $home = "/admin-dashboard";
        }
        else if(auth()->user()->role == 'tutor'){
            $home = "/tutor-dashboard";
        }
        else if(auth()->user()->role == 'university'){
            $home = "/university-dashboard";
        }
        return redirect()->intended($home);
    }
}