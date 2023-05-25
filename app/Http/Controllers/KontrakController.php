<?php

namespace App\Http\Controllers;

use App\Models\Prt;
use Illuminate\Http\Request;

class KontrakController extends Controller
{
    public function showDaftarPekerja()
    {
        $userId = auth()->id();
        $prts = Prt::where('user_id', $userId)
            ->whereBetween('id', [16, 166])
            ->paginate(4);

        return view('daftarpekerja', compact('prts'));
    }

    public function showDetailPekerja($id)
    {
        $pekerja = Prt::findOrFail($id);

        return view('detailpekerja', compact('pekerja'));
    }
}
