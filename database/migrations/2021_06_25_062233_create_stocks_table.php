<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('stok_adi');
            $table->string('barkod');
            $table->string('stok_grubu');
            $table->integer('kdv_orani');
            $table->string('kdv_durumu');
            $table->string('gorsel');
            $table->string('firma_kodu');
            $table->timestamps();  // Create at ve update at sütünlarını getirir
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
