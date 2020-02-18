<?php

namespace App\Http\Middleware;

use Closure;

class ReviewerMiddleware
{

    public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('loggedIn')) {
            $alert = [
                'type' => 'warning',
                'message'=> 'Kamu belum login'
            ];
            return redirect()->route('user.login')->with('alert',$alert['type'])->with('message',$alert['message']);
        }elseif ($request->session()->exists('loggedIn') && $request->session()->get('role') != 'reviewer') {
        	return redirect('404');
        }
        return $next($request);
    }

}