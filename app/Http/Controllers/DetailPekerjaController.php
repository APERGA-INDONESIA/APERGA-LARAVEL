<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prt;

class DetailPekerjaController extends Controller
{
    public function showDetailPekerja($id, Request $request)
    {
        $userId = $request->query('user_id');
        $prt = Prt::find($id);

        return view('detail-pekerja', ['userId' => $userId, 'prt' => $prt]);
    }
}
