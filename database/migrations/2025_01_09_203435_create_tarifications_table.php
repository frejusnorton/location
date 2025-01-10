<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     
    public function up(): void
    {
        Schema::create('tarifications', function (Blueprint $table) {
            $table->id();
            $table->double('prix');
            $table->unsignedBigInteger('dure_locations_id');
            $table->unsignedBigInteger('article_id');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tarificationns', function (Blueprint $table) {
            $table->dropForeign(['dure_locations_id', "article_id"]);
        });

        Schema::dropIfExists('tarifications');
    }
};
