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
        Schema::create('product_variation_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_variation_id');
            $table->foreignId('product_attribute_option_id');

            $table->unique(['product_variation_id', 'product_attribute_option_id'], 'var_att_unique');
            $table->foreign('product_variation_id', 'product_variation_attributes_var_fk')->references('id')->on('product_variations')->onDelete('cascade');
            $table->foreign('product_attribute_option_id', 'product_variation_attributes__att_fk')->references('id')->on('product_attribute_options')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variation_attributes');
    }
};
