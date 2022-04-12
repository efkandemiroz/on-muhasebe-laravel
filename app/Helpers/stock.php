<?php


    use Illuminate\Support\Facades\DB;

    function stok_miktar($id)
    {
       $stok_giris = DB::table('stock_movements')->where('islem','Giriş')->where('stok_id',$id)->sum('stok_adeti');
       $stok_cikis = DB::table('stock_movements')->where('islem','Çıkış')->where('stok_id',$id)->sum('stok_adeti');

       return $stok_giris-$stok_cikis;
    }
