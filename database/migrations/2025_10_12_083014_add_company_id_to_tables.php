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
        Schema::table('tables', function (Blueprint $table) {
            //Añadir el campo company_id a la tabla prodcuts utilizando Schema::table
            Schema::table('products', function (Blueprint $table) {
                $table->foreignId('company_id')->constrained()->after('id');
            });
            //Hace los mismo con las tabla Categories
            Schema::table('categories', function (Blueprint $table) {
                $table->foreignId('company_id')->constrained()->after('id');
            });
            //Hace los mismo con las tabla Tags
            Schema::table('tags', function (Blueprint $table) {
                $table->foreignId('company_id')->constrained()->after('id');
            });
            //Hace los mismo con las tabla Orders
            Schema::table('orders', function (Blueprint $table) {
                $table->foreignId('company_id')->constrained()->after('id');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tables', function (Blueprint $table) {
            //
        });
    }
};
