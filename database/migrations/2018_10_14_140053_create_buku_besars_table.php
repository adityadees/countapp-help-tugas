<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuBesarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_besars', function (Blueprint $table) {
            $table->string('bb_kode');
            $table->string('bb_akun');
            $table->string('bb_dept');
            $table->integer('bb_debit');
            $table->integer('bb_kredit');
            $table->string('bb_job');
            $table->text('bb_keterangan');
            $table->date('bb_tanggal');
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
        Schema::dropIfExists('buku_besars');
    }
}
