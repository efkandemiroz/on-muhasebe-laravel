<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurrentController extends Controller
{
    public function CariInsert(Request $request){
        echo $request->txtUnvan;


        DB::table('currents')->insert(
            [
                "unvan" => $request->txtUnvan,
                "yetkili" => $request->txtYetkili,
                "telefon" => $request->txtTelefon,
                "e-posta" => $request-> txtEposta,
                "il" => $request-> il,
                "ilce" => $request-> ilce,
                "adres" => $request-> adres,
                "vergi_dairesi" => $request-> txtVergiDairesi,
                "vergi_no" => $request-> txtVergiNo,
                "aciklama" => $request-> aciklama,
                "firma_kodu" => $request-> firma_kodu,
                "created_at" => now()
            ]
        );

        return back()->with('status','status');
    }
}
