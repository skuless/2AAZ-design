<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SAVs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lastname', 100);
            $table->string('firstname', 100);
            $table->string('address', 100);
            $table->string('city', 100);
            $table->string('sujet', 250);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SAVs');
    }
}
