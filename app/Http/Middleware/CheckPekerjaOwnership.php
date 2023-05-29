<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Prt;

class CheckPekerjaOwnership
{
    public function handle($request, Closure $next)
    {
        $pekerjaId = $request->route('id'); // Mengambil nilai 'id' dari URL
        $userId = auth()->id(); // Mengambil ID pengguna yang telah login

        $pekerja = Prt::where('id', $pekerjaId)
            ->where('user_id', $userId) // Memeriksa apakah 'user_id' pada 'prts' sama dengan ID pengguna yang telah login
            ->first();

        if (!$pekerja) {
            abort(404); // Jika pekerja tidak ditemukan atau tidak sesuai dengan pengguna yang login, alihkan ke halaman 404
        }

        return $next($request);
    }
}
