<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('name_normalized');
            $table->string('status');
            $table->string('type');
//            $table->json('attributes');

            $table->string('owner')->nullable();
            $table->string('gerencia_de_mercado')->nullable();
            $table->string('consultor')->nullable();
            $table->string('gerente_mkt')->nullable();
            $table->string('coordenador_mkt')->nullable();
            $table->string('asistente_mkt')->nullable();
            $table->string('quadrante_de_performance')->nullable();
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();

            $table->boolean('enabled');
            $table->timestamps();
            $table->softDeletes();
            // Ligar com Account que creio ser do facebook
        });

        Schema::create('shop_user', function (Blueprint $table) {
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_user');
        Schema::dropIfExists('shops');
    }
}
