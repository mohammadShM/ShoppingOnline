<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryPropertyGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('category_property_group', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('property_group_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['category_id', 'property_group_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('category_property_group');
    }
}
