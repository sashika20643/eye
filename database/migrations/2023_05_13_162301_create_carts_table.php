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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('u_id')->nullable;
            $table->string('p_id')->nullable;
            $table->string('product_title')->nullable;
            $table->string('quantity')->nullable;
            $table->string('price')->nullable;
            $table->string('image')->nullable;
            $table->string('total')->nullable;

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
