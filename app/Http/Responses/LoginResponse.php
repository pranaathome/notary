<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {

        $role = Auth::user()->roles->first()->name;
        // dd($role);

        switch ($role) {
            case 'Admin':
                return redirect(route('admin.users.index'));
                break;
            case 'Notary':
                return redirect(route('notary.index'));
                break;
            default:
                return redirect('/');
                break;
        }

        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->intended(config('fortify.home'));
    }
}
