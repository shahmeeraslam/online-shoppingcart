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
        schema::create("cards" , function (Blueprint $table) {
            $table->id()->primarykey();
            $table->string("title");
            $table->string("description");    
            $table->string("price");    
            $table->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
