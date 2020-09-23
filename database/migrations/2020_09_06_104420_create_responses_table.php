<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 255)->unique();
            $table->integer('age')->unsigned();
            $table->string('genre');
            $table->integer('foyer')->unsigned();
            $table->string('profession', 255);
            $table->string('casque_actuel');
            $table->string('magasin_application');
            $table->string('casque_futur');
            $table->integer('utilisation_foyer')->unsigned();
            $table->string('utilisation_bigscreen');
            $table->integer('point_image')->unsigned();
            $table->integer('point_confort')->unsigned();
            $table->integer('point_connection')->unsigned();
            $table->integer('point_graphisme')->unsigned();
            $table->integer('point_audio')->unsigned();
            $table->string('notification');
            $table->string('invitation_ami');
            $table->string('enregistrer_emission');
            $table->string('jeux_exclusifs');
            $table->mediumText('fonctionnalité_personnelle');
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
        Schema::dropIfExists('responses');
    }
}
