<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DataKarakter', function (Blueprint $table) {
            $table->increments('id_karakter');
            $table->string('nama_karakter');
            $table->string('alias');
            $table->enum('vision',['Pyro','Cryo','Hydro','Electro','Dendro','Anemo','Geo']);
            $table->enum('asal',['Monstadt','Liyue','Inazuma','Sumeru','Fontaine','Natlan','Snezhnaya','Khaenriah','Unknown']);
            $table->enum('tipe_senjata',['Sword','Claymore','Polearm','Bow','Catalyst']);
            $table->enum('tipe_model',['L_pendek','L_sedang','L_tinggi','P_pendek','P_sedang','P_tinggi']);
            $table->date('tanggal_rilis');
            $table->text('lore');
            $table->text('deskripsi_karakter');
            $table->string('nama_talenta_normal');
            $table->text('deskripsi_talenta_normal');
            $table->text('anjuran_normal');
            $table->string('nama_talenta_skill');
            $table->text('deskripsi_talenta_skill');
            $table->text('anjuran_skill');
            $table->string('nama_talenta_burst');
            $table->text('deskripsi_talenta_burst');
            $table->text('anjuran_burst');
            $table->string('set_artefak');
            $table->text('anjuran_artefak');
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
        Schema::dropIfExists('karakter');
    }
};
