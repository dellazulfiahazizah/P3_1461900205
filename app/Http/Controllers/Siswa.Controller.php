<?php

namespace App\Http\Controllers;

use App\Http|Controllers\Controller;

class SiswaControllers\Controller{
    public function show($id)
}
$siswa = DB::table('')
        ->select('.*')
        ->get()

        return view('siswa', [
            'siswa'=> $siswa
        ]);
        }
    }        