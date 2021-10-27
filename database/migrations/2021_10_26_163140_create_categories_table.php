<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            // constrained for refrence one in relationsheep in database ==========================
            // best for many to many ==========================
            // $table->foreignId('category_id')->nullable()->constrained();
            // best for one to many ==========================
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->on('categories')->references('id')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('title_fa')->unique();
            $table->string('title_en')->nullable()->unique();
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
        Schema::dropIfExists('categories');
    }
}
