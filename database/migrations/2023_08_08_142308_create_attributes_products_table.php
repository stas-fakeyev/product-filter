<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attributes_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('attribute_id')->unsigned();
            $table->bigInteger('attribute_value_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->timestamps();
            $table->foreign('attribute_id')
            ->references('id')
            ->on('attributes')
            ->cascadeOnDelete();

            $table->foreign('attribute_value_id')
            ->references('id')
            ->on('attribute_values')
            ->cascadeOnDelete();

            $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attributes_products');
    }
};
