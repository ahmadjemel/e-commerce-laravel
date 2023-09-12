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
            $table->string("name",80);
            $table->double("price",11,3);
            $table->string("photo");
            $table->longText("description");
            $table->boolean("status")->default(1);
            
// jointure ou bien mot cle etrangere
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on("categories");

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
