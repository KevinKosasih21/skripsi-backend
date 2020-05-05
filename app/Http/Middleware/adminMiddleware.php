<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\DB;

class adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $user =  $request->user();
        // if($user){
        //     if($user->isAdmin())
        //     {

        //         return $next($request);

        //     }

        //     else if($user->isGuru())
        //     {
        //         return redirect('/home');

        //     }

        //     else if($user->isSiswa())
        //     {
        //         return redirect('/siswa');
        //     }

        // }
        // return abort(404);

        try {
            DB::connection()->getPdo();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:");
        }
        if(auth()->user()->role != 'admin')
        {
            return new \Illuminate\Http\Response(view('home'));

        }
        else{
            return $next($request);
        }



    }
}
