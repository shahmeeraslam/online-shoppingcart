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
        Schema::create("cart" , function (Blueprint $table) {
            $table->id();
            $table->string("cart_title");
            $table->foreignid("user_id")->constrained()->onDelete('cascade');
            $table->string("cart_description");
            $table->string("cart_image");
            $table->string("cart_price");
            $table->timestamps();
        }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
