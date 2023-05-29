<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\prt;

class CheckPekerjaOwnership
{
    public function handle($request, Closure $next)
    {
        $pekerjaId = $request->route('id'); // Mengambil nilai 'id' dari URL

        $user = auth()->user(); // Mengambil instance user yang sedang login

        $prt = prt::where('id', $pekerjaId)
            ->where('user_id', $user->id) // Memeriksa apakah 'user_id' pada prt sesuai dengan user yang login
            ->first();

        if (!$prt) {
            abort(404); // Jika prt tidak ditemukan atau user tidak memiliki hak akses, alihkan ke halaman 404
        }

        return $next($request);
    }
}
