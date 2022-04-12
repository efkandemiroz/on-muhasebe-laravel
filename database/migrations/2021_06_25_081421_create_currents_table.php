<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currents', function (Blueprint $table) {
            $table->id();
            $table->string('unvan');
            $table->string('yetkili');
            $table->string('telefon');
            $table->string('e-posta');
            $table->string('il');
            $table->string('ilce');
            $table->string('adres');
            $table->string('vergi_dairesi');
            $table->string('vergi_no');
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
        Schema::dropIfExists('currents');
    }
}
