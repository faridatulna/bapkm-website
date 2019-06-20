<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helps', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('title');
            $table->text('fileImg')->nullable();
            $table->text('filePdf')->nullable();
            $table->longText('description')->nullable();
            $table->integer('type'); 
            // 0=regdat 1=pep 2=beasiswa 3=ukm

            $table->timestamp('postDate');
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
        Schema::dropIfExists('helps');
    }
}
