<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Str;

    class StockController extends Controller
    {
        public function StockInsert(Request $request)
        {
//            $request->validate(
//                [
//                    'file' => 'required|mimes:image/jpeg,image/png,image/gif|max:2048'
//                ]);
            $filePath = '#';
            $request->validate([
                'fileStokGorseli' => 'required|mimes:png,jpg,jpeg|max:5048'
            ]);
            if ($request->hasFile('fileStokGorseli')) {

                $file = $request->file('fileStokGorseli');
                $fileName = time() . '-' . $file->getClientOriginalName();
                $file->move("uploads/stock", $fileName);
                $filePath = 'uploads/stock/' . $fileName;
            }

            $stock = DB::table('stocks')->insert(
                [
                    "barkod" => $request->txtBarkodNo,
                    "firma_kodu" => "firma_kodu",
                    "gorsel" => $filePath,
                    "kdv_durumu" => $request->cbbKDVDurumu,
                    "kdv_orani" => $request->txtKDVOrani,
                    "stok_adi" => $request->txtStokAdi,
                    "stok_grubu" => $request->txtStokGrubu,
                    "created_at" => now()
                ]
            );
            if ($stock) {
                return back()->with('success', 'success');
            } else {
                return back()->with('fail', 'fail');
            }
        }

        public function StockInsertLoad()
        {
             $stok_grubu=   DB::table('stocks')->groupBy('stok_grubu')->orderBy('stok_grubu','ASC')->pluck('stok_grubu as grup');
             $stoklar = DB::table('stocks')->orderBy('id','ASC')->get();
            return view('stok.stokekle')->with('stok_gruplari', $stok_grubu)->with('stoklar',$stoklar);
        }

        public  function  StockDelete($id){

            $silme=DB::table('stocks')->where('id',$id)->delete();

        /*    $stok_grubu=   DB::table('stocks')->groupBy('stok_grubu')->orderBy('stok_grubu','ASC')->pluck('stok_grubu as grup');
            $stoklar = DB::table('stocks')->orderBy('id','ASC')->get();*/

            if ($silme) {
                return back()->with('deletesuccess', 'deletesuccess');
            } else {
                return back()->with('deletefail', 'deletefail');
            }
           // return view('stok.stokekle')->with('stok_gruplari', $stok_grubu)->with('stoklar',$stoklar)->with('delete','delete');
        }
    }
