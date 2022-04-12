<?php

    use App\Http\Controllers\StockController;
    use App\Http\Controllers\CurrentController;
    use Illuminate\Support\Facades\Route;


    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */


    Route::view('/', 'index');


    Route::get('/anasayfa', function () {
        return view('anasayfa');
    });

    Route::get('cari/ekle', function () {
        return view('cari.cariekle');
    });

    Route::get('cari/duzenle/{cariid3}', function ($cariid) {
        $data = [
            "cariid" => $cariid
        ];
        return view('cari.cariduzenle', $data);
    });

    Route::get('cari/listele', function () {
        return view('cari.carilistesi');
    });

    Route::get('cari/borc', function () {
        return view('cari.borc');
    });

    Route::get('cari/alacak', function () {
        return view('cari.alacak');
    });

    Route::get('cari/tahsilat', function () {
        return view('cari.tahsilat');
    });

    Route::get('cari/odeme', function () {
        return view('cari.odeme');
    });

//    Route::get('stok/ekle', function () {
//
//        return view('stok.stokekle');
//    });
    Route::get('stok/ekle', [StockController::class,'StockInsertLoad'])->name('stok/ekle');

    Route::get('stok/sil/{id}', [StockController::class,'StockDelete'])->name('stok/sil');


    Route::get('stok/stokhareketekle', function () {
        return view('stok.stokhareketekle');
    });

    Route::get('stok/duzenle/{stokid3}', function ($stokid) {
        $data = [
            "stokid" => $stokid
        ];
        return view('stok.stokduzenle', $data);
    });

    Route::get('stok/listele', function () {
        return view('stok.stoklistesi');
    });

    Route::get('fatura/yenisatisfaturasi', function () {
        return view('fatura.yenisatisfaturasi');
    });

    Route::get('fatura/yenialisfaturasi', function () {
        return view('fatura.yenialisfaturasi');
    });

    Route::get('fatura/satisfaturalari', function () {
        return view('fatura.satisfaturalari');
    });

    Route::get('fatura/alisfaturalari', function () {
        return view('fatura.alisfaturalari');
    });

    Route::get('fatura/yeniirsaliye', function () {
        return view('fatura.yeniirsaliye');
    });

    Route::get('fatura/irsaliyeler', function () {
        return view('fatura.irsaliyeler');
    });

    // STOK FORM İŞLEMLERİ
    Route::post('stockInsert', [StockController::class,'StockInsert'])->name('stokEkle');

    // CARİ FORM İŞLEMLERİ
    Route::post('cariInsert', [CurrentController::class,'CariInsert'])->name('cariEkle');


