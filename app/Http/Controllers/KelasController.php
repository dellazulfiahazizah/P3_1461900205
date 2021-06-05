<?php

namespace App\Http\Controllers;

use App\Http|Controllers\Controller;

class KelasControllers\Controller{
    public function show($id)
}
$kelas = DB::table('')
        ->select('.*')
        ->get()

        return view('kelas', [
            'kelas'=> $kelas
        ]);
        }
    }        