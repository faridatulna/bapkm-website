<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->date('year')->nullable();
            $table->string('banner')->nullable();
            $table->enum('type',['carousel','gal-logo','gall-aboutus','org','abus-ap','abus-km']);
            $table->longText('description')->nullable();
            //['carousel','gal-logo','gall-aboutus','org','abus-ap','abus-km']
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
        Schema::dropIfExists('aboutuses');
    }
}
