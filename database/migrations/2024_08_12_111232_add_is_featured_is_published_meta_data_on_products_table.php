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
        Schema::table('products', function (Blueprint $table) {
            $table->string('sku', 45)->unique()->after('product_category_id');
            $table->boolean('is_featured')->default(false)->after('description');
            $table->boolean('is_published')->default(false)->after('description');
            $table->text('meta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('sku');
            $table->dropColumn('is_published');
            $table->dropColumn('is_featured');
            $table->dropColumn('meta');
        });
    }
};
