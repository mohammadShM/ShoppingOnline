<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('product_property', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('property_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('value')->nullable();
            $table->primary(['product_id', 'property_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('product_property');
    }
}
