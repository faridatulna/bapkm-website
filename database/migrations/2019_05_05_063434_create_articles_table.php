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

            $table->text('fileImg')->nullable();
            $table->text('filePdf')->nullable();
            $table->string('url')->nullable();
            
            $table->longText('description')->nullable();
            $table->integer('jenis'); // 0=umum , 1=beasiswa , 2=kemahasiswaan
            $table->timestamp('tgl_post');
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
