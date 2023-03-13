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
            $table->string('stazione di partenza');
            $table->string('stazione di arrivo');
            $table->string('orario di partenza');
            $table->string('orario di arrivo');
            $table->string('codice treno');
            $table->string('numero carrozze');
            $table->boolean('in orario')->default(true);
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
            $table->dropColumn('stazione di partenza');
            $table->dropColumn('stazione di arrivo');
            $table->dropColumn('orario di partenza');
            $table->dropColumn('orario di arrivo');
            $table->dropColumn('codice treno');
            $table->dropColumn('numero carrozze');
            $table->dropColumn('in orario');
            $table->dropColumn('cancellato');
        });
    }
};
