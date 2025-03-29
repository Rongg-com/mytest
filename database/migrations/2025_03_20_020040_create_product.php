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
        Schema::create('categorys', function (Blueprint $table) {
           $table->increments("cat id");
           $table->string("cat_name" ,length:60);

        });

        Schema::create('products', function (Blueprint $table) {
            $table->increments("pro id");
            $table->string("pro_name" ,length:60);
            $table->integer("qty");
            $table->float("price");
 
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('categorys');
    }
};