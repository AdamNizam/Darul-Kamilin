<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuthRedirectMiddleware
{
    public function handle($request, Closure $next)
    {
        // Log request path untuk debugging
        Log::info('Request Path: ' . $request->path());

        // Periksa apakah pengguna login melalui guard 'user_logs'
        if (Auth::guard('user_logs')->check()) {
            // Log untuk mengetahui bahwa pengguna telah login
            Log::info('User is logged in with guard user_logs.');

            if ($request->is('login')) {
                // Log jika pengguna yang sudah login mencoba ke halaman login
                Log::info('Redirecting logged-in user to route wali.');
                return redirect()->route('wali')->with('warning', 'Maaf anda tidak mengakses Halaman ini');
            }
        } else {
            // Log jika pengguna belum login
            Log::warning('User is not logged in with guard user_logs.');

            // Jika belum login dan mencoba mengakses halaman tertentu
            if ($request->is('wali/santri')) {
                // Log jika pengguna diarahkan ke halaman login
                Log::info('Redirecting to signIn due to unauthenticated access.');
                return redirect()->route('signIn')->with('warning', 'Opss, Anda belum login');
            }
        }

        // Log jika permintaan diteruskan ke langkah berikutnya
        Log::info('Proceeding to the next middleware or request handling.');

        return $next($request);
    }
}
