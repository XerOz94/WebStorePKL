<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->constrained(table: 'categories', indexName: 'products_categories_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained(table: 'brands', indexName: 'products_brands_id')->onUpdate('cascade')->onDelete('cascade');
            $table->text('deskripsi');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
