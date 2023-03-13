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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('office');
            $table->string('stazione_di_partenza');
            $table->string('stazione_di_arrivo');
            $table->string('orario_di_partenza');
            $table->string('orario_di_arrivo');
            $table->string('codice_treno');
            $table->string('numero_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('office');
            $table->dropColumn('stazione_di_partenza');
            $table->dropColumn('stazione_di_arrivo');
            $table->dropColumn('orario_di_partenza');
            $table->dropColumn('orario_di_arrivo');
            $table->dropColumn('codice_treno');
            $table->dropColumn('numero_carrozze');
            $table->dropColumn('in_orario');
            $table->dropColumn('cancellato');
        });
    }
};

