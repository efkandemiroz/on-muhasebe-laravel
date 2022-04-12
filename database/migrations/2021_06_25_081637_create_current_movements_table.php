<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_movements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cari_id');
            $table->date('islem_tarihi');
            $table->string('islem_turu');
            $table->integer('birim_adet');
            $table->decimal('birim_tutar',8,2);
            $table->string('para_birimi');
            $table->integer('kdv_orani');
            $table->decimal('ara_toplam',8,2);
            $table->decimal('kdv_tutari',8,2);
            $table->decimal('toplam_tutar',8,2);
            $table->text('aciklama');
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
        Schema::dropIfExists('current_movements');
    }
}
