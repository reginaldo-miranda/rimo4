<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdvitensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdvitens', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cliente');
            $table->integer('id_produto');
            $table->double('vunit');
            $table->double('qde');
            $table->double('vtotal');
            $table->string('unid');
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
        Schema::dropIfExists('pdvitens');
    }
}
