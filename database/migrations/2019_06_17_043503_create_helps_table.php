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
            $table->integer('type'); 
            // 1=regdat 2=pep 3=beasiswa 4=ukm
            $table->text('fileImg')->nullable();
            $table->text('filePdf')->nullable();
            $table->longText('description')->nullable();
            
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
