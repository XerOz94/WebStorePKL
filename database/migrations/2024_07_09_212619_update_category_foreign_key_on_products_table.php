<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_categories_id'); // Menghapus kunci asing dengan nama yang benar
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->name('products_categories_id'); // Menambahkan kunci asing baru dengan nama yang benar
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_categories_id'); // Menghapus kunci asing dengan nama yang benar
            // Tambahkan kembali definisi kunci asing lama jika diperlukan
        });
    }

};
