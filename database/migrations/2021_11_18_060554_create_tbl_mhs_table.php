<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_mhs', function (Blueprint $table) {
            $table->id();
            $table->string('nim',11);
            $table->string('namamhs',100);
            $table->enum('jk',['L','P']);
            $table->string('alamat',100);
            $table->string('kota',50);
            $table->string('email',50);
            $table->string('foto',50);
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
        Schema::dropIfExists('tbl_mhs');
    }
}
