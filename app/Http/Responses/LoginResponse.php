<?php
namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        $user = Auth::user();
        $home = $user->hasRole("admin") ? '/admin/dashboard' : '/dashboard';

        return redirect()->intended($home);
    }
}
