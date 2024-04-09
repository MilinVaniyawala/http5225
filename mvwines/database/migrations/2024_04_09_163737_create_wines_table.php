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
        Schema::create('wines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('type_id'); // Foreign key to winetypes table
            $table->unsignedBigInteger('vineyard_id'); // Foreign key to vineyards table
            $table->decimal('rating');
            $table->decimal('price');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('type_id')->references('id')->on('winetypes')->onDelete('cascade');
            $table->foreign('vineyard_id')->references('id')->on('vineyards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wines');
    }
};
