<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penduduks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik',30);
            $table->string('nama',150);
            $table->string('no_kk',30);
            $table->string('tempat_lahir',30);
            $table->string('tanggal_lahir',31);
            $table->string('alamat',100);
            $table->string('pekerjaan',20);
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
        Schema::dropIfExists('data_penduduks');
    }
}
