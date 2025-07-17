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
        Schema::create("confirm_order", function ( Blueprint $table) {
            $table->id();
            $table->string("confirm_title");
            $table->string("confirm_description");
            $table->string("confirm_price");
            $table->string("confirm_image");
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
