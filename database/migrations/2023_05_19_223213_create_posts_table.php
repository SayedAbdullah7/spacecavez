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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("slug")->nullable();
            $table->string("title")->nullable();
            $table->longText("content")->nullable();
            $table->string('image')->nullable();
//            $table->string('image_large')->nullable();
//            $table->string('image_medium')->nullable();
//            $table->string('image_thumbnail')->nullable();
            $table->enum("category",['education','project','event']);
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
        Schema::dropIfExists('posts');
    }
};
