<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->timestamp('datePost');
            $table->text('fileImg')->nullable();
            $table->text('filePdf')->nullable();
            $table->string('url')->nullable();
            $table->longText('description')->nullable();
            $table->integer('type'); // 0=akademik, 1=beasiswa, 2=calonmhs, 3=wisuda , 4=wisuda , 5=kalender, 6=kemahasiswaan
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
        Schema::dropIfExists('articles');
    }
}
