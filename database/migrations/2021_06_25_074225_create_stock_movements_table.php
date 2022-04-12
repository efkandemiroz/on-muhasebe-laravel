<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_movements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stok_id');
            $table->string('islem');
            $table->double('alis_fiyati', 8, 2)->nullable();
            $table->string('alis_pb')->nullable();
            $table->double('satis_fiyati', 8, 2)->nullable();
            $table->string('satis_pb')->nullable();
            $table->integer('stok_adeti');
            $table->double('alis_kur_orani', 8, 2)->nullable();
            $table->date('alis_tarihi')->nullable();
            $table->string('alinan_firma')->nullable();
            $table->text('aciklama')->nullable();
            $table->text('seri_numaralar')->nullable();
            $table->string('firma_kodu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_movements');
    }
}
