<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{

    public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('loggedIn')) {
            $alert = [
                'type' => 'warning',
                'message'=> 'Kamu belum login'
            ];
            return redirect()->route('admin.login')->with('alert',$alert['type'])->with('message',$alert['message']);
        }elseif ($request->session()->exists('loggedIn') && $request->session()->get('role') != 'operator') {
        	return redirect('404');
        }
        return $next($request);
    }

}