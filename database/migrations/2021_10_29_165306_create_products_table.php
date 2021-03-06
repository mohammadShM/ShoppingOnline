<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // for one to many
            $table->foreignId("category_id")->constrained()->onDelete('cascade')->onUpdate('cascade');
            // for one to many
            $table->foreignId("brand_id")->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string("name");
            $table->string("slug")->unique();
            $table->integer("price");
            // for galery image
            $table->text("image");
            $table->text("description");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
